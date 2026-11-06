<?php
/**
 * Web Optimizer - Service Detail Dynamic Template (All 47 Services)
 * Supports all 12 Mandatory Content & SEO Sections per Individual Service Page
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain (+91 7735973818 | info@weboptimizer.in)
 */
require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require_once __DIR__ . '/includes/blogs-data.php';
require_once __DIR__ . '/includes/portfolio-data.php';

// Determine service slug
$slug = $service_slug ?? $_GET['slug'] ?? '';

if (empty($slug) || !isset($services_catalog[$slug])) {
    if (isset($services_catalog['website-development'])) {
        $slug = 'website-development';
    } else {
        header('Location: services');
        exit;
    }
}

$service = $services_catalog[$slug];

// Check if this service is a parent category
$is_parent = isset($service_parents[$slug]) || $slug === 'digital-marketing';
$parent_key = $service['parent_slug'] ?? $slug;
$parent_info = $service_parents[$parent_key] ?? null;

// Find sub-services belonging to this service if parent, or sibling/related services
$child_services = [];
$sibling_services = [];

if ($is_parent) {
    if ($slug === 'digital-marketing') {
        foreach ($services_catalog as $k => $item) {
            if ($k !== 'digital-marketing' && !isset($service_parents[$k])) {
                $child_services[] = $item;
            }
        }
    } else if (isset($service_parents[$slug])) {
        foreach ($service_parents[$slug]['sub_services'] as $sub_k) {
            if (isset($services_catalog[$sub_k])) {
                $child_services[] = $services_catalog[$sub_k];
            }
        }
    }
}

// Collect curated related services first, then siblings
$related_keys = $service['related_services'] ?? [];
foreach ($related_keys as $rk) {
    if ($rk !== $slug && isset($services_catalog[$rk])) {
        $sibling_services[$rk] = $services_catalog[$rk];
    }
}
if ($parent_info && count($sibling_services) < 4) {
    foreach ($parent_info['sub_services'] as $sub_k) {
        if ($sub_k !== $slug && isset($services_catalog[$sub_k]) && !isset($sibling_services[$sub_k])) {
            $sibling_services[$sub_k] = $services_catalog[$sub_k];
            if (count($sibling_services) >= 4) break;
        }
    }
}

// Clean SEO Canonical URL & Redirection
$canonical_url = "https://www.weboptimizer.in/service/{$slug}";

$req_uri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($req_uri, 'service-detail.php') !== false) {
    $script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
    $clean_dir = str_replace('\\', '/', $script_dir);
    $bp = ($clean_dir === '/' || $clean_dir === '.' || $clean_dir === '') ? '/' : rtrim($clean_dir, '/') . '/';
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $bp . "service/" . $slug);
    exit;
}

// Find up to 3 relevant blog guides for this service
$service_guides = [];
foreach ($blogs_catalog as $bK => $bItem) {
    if (($bItem['service_slug'] ?? '') === $slug || (isset($bItem['category_slug']) && $bItem['category_slug'] === ($parent_info['slug'] ?? ''))) {
        $service_guides[$bK] = $bItem;
        if (count($service_guides) >= 3) break;
    }
}
if (empty($service_guides)) {
    $service_guides = array_slice($blogs_catalog, 0, 3, true);
}

// Find up to 3 related portfolio case studies for this service
$related_cases = [];
$cat_map = [
    'web-development' => 'web',
    'ai-seo' => 'seo',
    'performance-marketing' => 'marketing',
    'social-media-marketing' => 'marketing',
    'branding' => 'branding',
    'allied-services' => 'web'
];
$target_port_cat = ($slug === 'ecommerce-development' || $slug === 'shopify-development') ? 'ecommerce' : ($cat_map[$parent_key] ?? 'web');
foreach ($portfolio_cases as $pc) {
    if (($pc['category'] ?? '') === $target_port_cat) {
        $related_cases[] = $pc;
        if (count($related_cases) >= 3) break;
    }
}

$page_title = $service['seo_title'] ?? ($service['short_title'] . ' Services | Web Optimizer');
$meta_desc = $service['meta_description'];
$active_nav = 'services';
$cta_button_label = $service['cta_text'] ?? ('Request a Quote for ' . $service['short_title']);

require __DIR__ . '/includes/header.php';
?>

<!-- Service & FAQPage Structured Data (SEO, GEO & AEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.weboptimizer.in/service/<?php echo htmlspecialchars($slug); ?>#service",
      "name": "<?php echo htmlspecialchars($service['title']); ?>",
      "serviceType": "<?php echo htmlspecialchars($service['short_title']); ?>",
      "description": "<?php echo htmlspecialchars($service['meta_description']); ?>",
      "url": "https://www.weboptimizer.in/service/<?php echo htmlspecialchars($slug); ?>",
      "provider": {
        "@type": "ProfessionalService",
        "name": "Web Optimizer",
        "url": "https://www.weboptimizer.in/",
        "telephone": "+91 7735973818",
        "email": "info@weboptimizer.in",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Bhubaneswar",
          "addressRegion": "Odisha",
          "addressCountry": "IN"
        }
      },
      "areaServed": [
        { "@type": "AdministrativeArea", "name": "Odisha" },
        { "@type": "Country", "name": "India" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.weboptimizer.in/service/<?php echo htmlspecialchars($slug); ?>#faq",
      "mainEntity": [
        <?php 
        $faq_items = $service['faqs'] ?? [];
        $faq_json_parts = [];
        foreach ($faq_items as $fItem) {
            $faq_json_parts[] = json_encode([
                '@type' => 'Question',
                'name' => $fItem['q'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $fItem['a']
                ]
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
        echo implode(",\n        ", $faq_json_parts);
        ?>
      ]
    }
  ]
}
</script>

<main>
  <!-- 1 & 2. BREADCRUMB, SEO H1 HEADING & STRONG INTRODUCTORY PARAGRAPH -->
  <section class="page-banner-section" style="padding-bottom: 45px;">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto text-center">
          <nav class="banner-breadcrumb justify-content-center" aria-label="breadcrumb">
            <a href="<?php echo $base_path; ?>"><i class="fa-solid fa-house"></i> Home</a>
            <span class="sep">/</span>
            <a href="<?php echo $base_path; ?>services">Services</a>
            <?php if (!$is_parent && $parent_info): ?>
              <span class="sep">/</span>
              <a href="<?php echo $base_path; ?>service/<?php echo htmlspecialchars($parent_info['slug']); ?>"><?php echo htmlspecialchars($parent_info['short_title']); ?></a>
            <?php endif; ?>
            <span class="sep">/</span>
            <span class="current"><?php echo htmlspecialchars($service['short_title']); ?></span>
          </nav>

          <div class="banner-pill-badge mb-3">
            <span class="gold-dot"></span>
            <span><?php echo htmlspecialchars($service['category_name']); ?></span>
            <span style="color:rgba(255,255,255,0.4);">&bull;</span>
            <span style="color:var(--gold-light);"><?php echo htmlspecialchars($service['badge']); ?></span>
          </div>

          <h1 class="banner-title">
            <?php echo $service['hero_headline']; ?>
          </h1>

          <p class="banner-lead mx-auto" style="max-width: 800px;">
            <?php echo htmlspecialchars($service['hero_lead']); ?>
          </p>

          <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding: 12px 26px; font-size: 14px;">
              <i class="fa-solid fa-file-signature"></i> <?php echo htmlspecialchars($cta_button_label); ?>
            </button>
            <a href="https://wa.me/917735973818?text=<?php echo urlencode('Hello Web Optimizer, I would like to discuss ' . $service['title']); ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn-luxury-outline" 
               style="border-color:#25d366; color:#25d366; padding: 12px 24px; font-size: 14px;">
              <i class="fa-brands fa-whatsapp"></i> Talk to Our Experts on WhatsApp
            </a>
          </div>

          <div class="d-flex flex-wrap justify-content-center gap-2">
            <?php foreach (array_slice($service['metrics'] ?? [], 0, 3) as $m): ?>
              <span class="banner-stat-chip">
                <strong style="color:var(--gold-light);"><?php echo htmlspecialchars($m['num']); ?></strong> 
                <?php echo htmlspecialchars($m['label']); ?>
              </span>
            <?php endforeach; ?>
            <span class="banner-stat-chip"><i class="fa-solid fa-shield-halved text-gold"></i> Direct Senior Specialist Oversight</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEPARATE FULL-WIDTH SERVICE BANNER SHOWCASE SECTION -->
  <section class="full-banner-showcase-section">
    <div class="container">
      <div class="banner-visual-frame">
        <img src="<?php echo $base_path; ?>assets/images/banners/services/banner-<?php echo $slug; ?>.webp" 
             alt="<?php echo htmlspecialchars($service['title']); ?> Services in Bhubaneswar & Odisha - Web Optimizer" 
             title="<?php echo htmlspecialchars($service['title']); ?> | Web Optimizer"
             draggable="false"
             class="img-fluid"
             onerror="this.src='<?php echo $base_path; ?>assets/images/banners/banner-<?php echo $parent_key; ?>.webp';">
        <div class="banner-floating-badge">
          <span class="gold-dot"></span> <?php echo htmlspecialchars($service['short_title']); ?> &bull; Custom Business Solutions
        </div>
      </div>
    </div>
  </section>

  <section class="section-wrap" style="padding-top: 10px;">
    <div class="container">
      
      <!-- 3. CLEAR EXPLANATION OF THE SERVICE -->
      <div class="service-overview-box">
        <div class="row align-items-center g-4">
          <div class="col-lg-12">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="dropdown-item-icon" style="width:48px; height:48px; font-size:20px;">
                <i class="<?php echo htmlspecialchars($service['icon']); ?>"></i>
              </div>
              <div>
                <span class="section-tag" style="margin:0; font-size:11px;"><?php echo htmlspecialchars($service['category_name']); ?></span>
                <h2 style="font-family:var(--font-display); font-size:1.65rem; color:var(--text-white); margin:2px 0 0 0;">
                  Understanding Our <?php echo htmlspecialchars($service['short_title']); ?> Service
                </h2>
              </div>
            </div>
            <p style="font-size: 1.05rem; line-height: 1.85; color: var(--text-cream); margin: 0;">
              <?php echo htmlspecialchars($service['overview']); ?>
            </p>
          </div>
        </div>
      </div>

      <!-- 4. PROBLEMS THIS SERVICE SOLVES -->
      <?php if (!empty($service['problems_solved'])): ?>
        <div class="section-header text-start mt-5 mb-4">
          <span class="section-tag"><i class="fa-solid fa-triangle-exclamation"></i> Business Challenges We Solve</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.75rem, 3vw, 2.4rem);">
            Common Business Problems Solved by <?php echo htmlspecialchars($service['short_title']); ?>
          </h2>
          <p class="section-desc" style="margin: 0; max-width: 800px;">
            We designed our <?php echo strtolower(htmlspecialchars($service['short_title'])); ?> service to eliminate the exact bottlenecks that hold businesses back from growing online.
          </p>
        </div>

        <div class="row g-4 mb-5">
          <?php foreach ($service['problems_solved'] as $pIdx => $prob): ?>
            <div class="col-lg-6 col-md-6">
              <div class="deliverable-card h-100 p-4" style="border-left: 3px solid var(--gold-primary);">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <span class="badge" style="background: rgba(212, 175, 55, 0.14); color: var(--gold-light); font-size: 11px; border: 1px solid var(--border-gold);">
                    Challenge 0<?php echo ($pIdx + 1); ?> &rarr; Solved
                  </span>
                </div>
                <h3 style="font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 8px; line-height: 1.35;">
                  <?php echo htmlspecialchars($prob['title']); ?>
                </h3>
                <p style="font-size: 13.5px; color: var(--text-muted); line-height: 1.65; margin: 0;">
                  <?php echo htmlspecialchars($prob['desc']); ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php if ($is_parent && !empty($child_services)): ?>
        <!-- PARENT CATEGORY: SUB-SERVICES GRID -->
        <div class="section-header text-start mb-4">
          <span class="section-tag"><i class="fa-solid fa-layer-group"></i> Specialized Practice Areas</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.75rem, 3vw, 2.4rem);">
            Specialized Services Under <?php echo htmlspecialchars($service['short_title']); ?>
          </h2>
          <p class="section-desc" style="margin: 0; max-width: 820px;">
            Explore each dedicated service under this practice area to see specific deliverables, workflows, and business benefits.
          </p>
        </div>

        <div class="row g-4 mb-5">
          <?php foreach ($child_services as $sub): ?>
            <div class="col-lg-4 col-md-6">
              <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-4">
                <div>
                  <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="dropdown-item-icon" style="width:40px; height:40px; font-size:16px;">
                      <i class="<?php echo htmlspecialchars($sub['icon']); ?>"></i>
                    </div>
                    <span class="badge" style="background:rgba(212,175,55,0.12); color:var(--gold-light); font-size:10px; border:1px solid var(--border-gold); font-family:var(--font-mono);">
                      <?php echo htmlspecialchars($sub['badge']); ?>
                    </span>
                  </div>
                  <h3 style="font-size:1.15rem; color:#fff; font-weight:700; margin-bottom:8px; line-height:1.3;">
                    <?php echo htmlspecialchars($sub['short_title']); ?>
                  </h3>
                  <p style="font-size:13px; color:var(--text-muted); line-height:1.6; margin-bottom:16px;">
                    <?php echo htmlspecialchars($sub['meta_description']); ?>
                  </p>
                </div>
                <div class="pt-3 border-top border-secondary border-opacity-25">
                  <a href="<?php echo $base_path; ?>service/<?php echo htmlspecialchars($sub['slug']); ?>" class="btn-luxury-outline w-100 text-center" style="padding:9px 14px; font-size:12.5px;">
                    Explore <?php echo htmlspecialchars($sub['short_title']); ?> <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- 5. SERVICES AND SOLUTIONS INCLUDED (DELIVERABLES) -->
      <div class="section-header text-start mb-4">
        <span class="section-tag"><i class="fa-solid fa-list-check"></i> What's Included</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.75rem, 3vw, 2.4rem);">
          Services &amp; Solutions Included in <?php echo htmlspecialchars($service['short_title']); ?>
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 780px;">
          Every engagement includes clear, practical deliverables tailored to your business requirements with complete transparency.
        </p>
      </div>

      <div class="deliverables-grid">
        <?php foreach ($service['deliverables'] as $idx => $d): ?>
          <div class="deliverable-card">
            <div class="deliverable-num"><?php echo str_pad($idx + 1, 2, '0', STR_PAD_LEFT); ?></div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 10px; line-height: 1.35;">
              <?php echo htmlspecialchars($d['title']); ?>
            </h3>
            <p style="font-size: 13.5px; color: var(--text-muted); line-height: 1.65; margin: 0;">
              <?php echo htmlspecialchars($d['desc']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- 6. BENEFITS FOR CLIENTS -->
      <div class="section-header text-start mt-5 pt-4 mb-2">
        <span class="section-tag"><i class="fa-solid fa-gem"></i> Business Value &amp; Outcomes</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.75rem, 3vw, 2.4rem);">
          How <?php echo htmlspecialchars($service['short_title']); ?> Benefits Your Business
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 780px;">
          We focus on tangible commercial improvements—helping you save time, earn customer trust, and generate more revenue.
        </p>
      </div>

      <div class="benefits-grid">
        <?php foreach ($service['benefits'] as $b): ?>
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fa-solid <?php echo htmlspecialchars($b['icon']); ?>"></i>
            </div>
            <h3 style="font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 8px;">
              <?php echo htmlspecialchars($b['title']); ?>
            </h3>
            <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin: 0;">
              <?php echo htmlspecialchars($b['text']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- TECH STACK & PLATFORMS -->
      <div class="p-4 rounded-3 mt-4" style="background: rgba(14, 21, 38, 0.6); border: 1px solid var(--border-gold);">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
          <div>
            <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 1.5px; color: var(--gold-primary); font-weight: 700;">
              Tools, Platforms &amp; Standards
            </span>
            <h3 style="font-family: var(--font-display); font-size: 1.3rem; color: #fff; margin: 4px 0 0 0;">
              Technologies Applied in <?php echo htmlspecialchars($service['short_title']); ?>
            </h3>
          </div>
          <div class="tech-stack-row">
            <?php foreach ($service['tech_stack'] as $t): ?>
              <span class="tech-badge-luxury"><?php echo htmlspecialchars($t); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- 7. OUR WORKING PROCESS (SERVICE-SPECIFIC 5-STEP WORKFLOW) -->
      <div class="section-header text-start mt-5 pt-4 mb-2">
        <span class="section-tag"><i class="fa-solid fa-diagram-project"></i> Step-by-Step Workflow</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.75rem, 3vw, 2.4rem);">
          Our 5-Step Working Process for <?php echo htmlspecialchars($service['short_title']); ?>
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 780px;">
          A structured, transparent workflow so you always know what is happening at every stage of your project.
        </p>
      </div>

      <div class="process-timeline">
        <?php 
        $steps = $service['process_steps'] ?? [];
        foreach ($steps as $st): 
        ?>
          <div class="process-step-card">
            <div class="process-step-num"><?php echo htmlspecialchars($st['step']); ?></div>
            <h3 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;"><?php echo htmlspecialchars($st['title']); ?></h3>
            <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
              <?php echo htmlspecialchars($st['desc']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- 8. WHY CHOOSE WEB OPTIMIZER FOR THIS SERVICE -->
      <?php if (!empty($service['why_choose'])): ?>
        <div class="section-header text-start mt-5 pt-4 mb-3">
          <span class="section-tag"><i class="fa-solid fa-award"></i> The Web Optimizer Advantage</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.75rem, 3vw, 2.4rem);">
            Why Choose Web Optimizer for <?php echo htmlspecialchars($service['short_title']); ?>?
          </h2>
          <p class="section-desc" style="margin: 0; max-width: 800px;">
            We combine senior engineering expertise with practical commercial strategy to deliver solutions that genuinely grow your business.
          </p>
        </div>

        <div class="row g-4 mb-4">
          <?php foreach ($service['why_choose'] as $wc): ?>
            <div class="col-lg-6 col-md-6">
              <div class="benefit-card h-100 p-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="benefit-icon" style="flex-shrink:0; margin-bottom:0;">
                    <i class="fa-solid fa-circle-check"></i>
                  </div>
                  <div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 6px;">
                      <?php echo htmlspecialchars($wc['title']); ?>
                    </h3>
                    <p style="font-size: 13.5px; color: var(--text-muted); line-height: 1.65; margin: 0;">
                      <?php echo htmlspecialchars($wc['desc']); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- 9. INDUSTRIES & BUSINESSES THAT CAN BENEFIT -->
      <?php if (!empty($service['industries'])): ?>
        <div class="section-header text-start mt-5 pt-4 mb-3">
          <span class="section-tag"><i class="fa-solid fa-building"></i> Sectors We Serve</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.75rem, 3vw, 2.4rem);">
            Industries &amp; Businesses That Benefit From <?php echo htmlspecialchars($service['short_title']); ?>
          </h2>
          <p class="section-desc" style="margin: 0; max-width: 800px;">
            Our solutions are customized to the buyer behavior, compliance needs, and operational workflows of key industries across Odisha and India.
          </p>
        </div>

        <div class="row g-3 mb-4">
          <?php foreach ($service['industries'] as $ind): ?>
            <div class="col-lg-4 col-md-6">
              <div class="deliverable-card h-100 p-4">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="dropdown-item-icon" style="width:38px; height:38px; font-size:15px;">
                    <i class="fa-solid <?php echo htmlspecialchars($ind['icon']); ?>"></i>
                  </div>
                  <h3 style="font-size: 1.05rem; font-weight: 700; color: #fff; margin: 0; line-height: 1.3;">
                    <?php echo htmlspecialchars($ind['name']); ?>
                  </h3>
                </div>
                <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin: 0;">
                  <?php echo htmlspecialchars($ind['desc']); ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- RELATED PORTFOLIO CASE STUDIES -->
      <?php if (!empty($related_cases)): ?>
        <div class="section-header text-start mt-5 pt-4 mb-3">
          <span class="section-tag"><i class="fa-solid fa-briefcase"></i> Proven Success Stories</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.65rem, 2.6vw, 2.25rem);">
            Recent Client Results Related to <?php echo htmlspecialchars($service['short_title']); ?>
          </h2>
        </div>

        <div class="row g-4 mb-4">
          <?php foreach ($related_cases as $rc): ?>
            <div class="col-lg-4 col-md-6">
              <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-4">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="badge" style="background: rgba(212,175,55,0.14); color: var(--gold-light); font-size: 10.5px;">
                      <?php echo htmlspecialchars($rc['badge']); ?>
                    </span>
                    <span style="font-size: 11px; color: var(--text-dim);">
                      <i class="fa-solid fa-location-dot text-gold me-1"></i> <?php echo htmlspecialchars($rc['city']); ?>
                    </span>
                  </div>
                  <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 6px; line-height: 1.35;">
                    <?php echo htmlspecialchars($rc['title']); ?>
                  </h3>
                  <p style="font-size: 12.5px; color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">
                    <?php echo htmlspecialchars($rc['desc']); ?>
                  </p>
                </div>
                <div class="p-2 rounded-2" style="background: rgba(8, 13, 26, 0.85); border-left: 3px solid var(--gold-primary); font-size: 12px; color: #fff; font-weight: 600;">
                  <span style="color: var(--gold-primary); font-size: 10px; text-transform: uppercase; display: block;">Verified Outcome:</span>
                  <?php echo $rc['metrics']; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- 10. RELEVANT FAQS -->
      <div class="section-header text-start mt-5 pt-4 mb-3">
        <span class="section-tag"><i class="fa-solid fa-circle-question"></i> Common Questions</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.75rem, 3vw, 2.4rem);">
          Frequently Asked Questions About <?php echo htmlspecialchars($service['short_title']); ?>
        </h2>
      </div>

      <div class="accordion accordion-luxury" id="serviceFaqAccordion">
        <?php foreach ($service['faqs'] as $fIdx => $faq): ?>
          <div class="accordion-item">
            <h3 class="accordion-header" id="heading<?php echo $fIdx; ?>">
              <button class="accordion-button <?php echo ($fIdx === 0) ? '' : 'collapsed'; ?>" 
                      type="button" 
                      data-bs-toggle="collapse" 
                      data-bs-target="#collapse<?php echo $fIdx; ?>" 
                      aria-expanded="<?php echo ($fIdx === 0) ? 'true' : 'false'; ?>" 
                      aria-controls="collapse<?php echo $fIdx; ?>">
                <i class="fa-solid fa-circle-dot me-2 text-gold" style="font-size:12px;"></i>
                <?php echo htmlspecialchars($faq['q']); ?>
              </button>
            </h3>
            <div id="collapse<?php echo $fIdx; ?>" 
                 class="accordion-collapse collapse <?php echo ($fIdx === 0) ? 'show' : ''; ?>" 
                 aria-labelledby="heading<?php echo $fIdx; ?>" 
                 data-bs-parent="#serviceFaqAccordion">
              <div class="accordion-body">
                <?php echo htmlspecialchars($faq['a']); ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- 11. STRONG CTA TO REQUEST A CONSULTATION OR QUOTATION -->
      <div class="service-cta-banner mt-5">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8">
            <span class="section-tag" style="display:inline-block;"><i class="fa-solid fa-comments"></i> Start Your Project</span>
            <h2 style="font-family:var(--font-display); font-size:clamp(1.6rem, 2.8vw, 2.4rem); color:#fff; margin:12px 0 16px 0;">
              Ready to Grow Your Business With <?php echo htmlspecialchars($service['short_title']); ?>?
            </h2>
            <p style="font-size:14.5px; color:var(--text-cream); line-height:1.7; margin-bottom:28px;">
              Speak directly with Senior Developer Hrushikesh Swain and our specialist team. Receive a clear project scope, timeline, and transparent quotation tailored to your business goals.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding:14px 28px; font-size:15px;">
                <i class="fa-solid fa-file-signature"></i> <?php echo htmlspecialchars($cta_button_label); ?>
              </button>
              <a href="tel:+917735973818" class="btn-luxury-outline" style="padding:14px 26px; font-size:15px;">
                <i class="fa-solid fa-phone"></i> Call +91 7735973818
              </a>
              <a href="https://wa.me/917735973818?text=<?php echo urlencode('Hello Web Optimizer, I would like a quote for ' . $service['title']); ?>" 
                 target="_blank" 
                 rel="noopener noreferrer" 
                 class="btn-luxury-outline" 
                 style="border-color:#25d366; color:#25d366; padding:14px 26px; font-size:15px;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 12. RELEVANT INTERNAL LINKS TO OTHER SERVICES & GUIDES -->
      <?php if (!empty($sibling_services)): ?>
        <div class="section-header text-start mt-5 pt-4 mb-3">
          <span class="section-tag"><i class="fa-solid fa-layer-group"></i> Explore Related Services</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
            Complementary Services That Work With <?php echo htmlspecialchars($service['short_title']); ?>
          </h2>
        </div>

        <div class="row g-3 mb-5">
          <?php 
          $shown = 0;
          foreach ($sibling_services as $sib): 
            if ($shown >= 4) break;
            $shown++;
          ?>
            <div class="col-lg-3 col-md-6">
              <div class="benefit-card h-100 d-flex flex-column justify-content-between">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span style="font-size:10.5px; text-transform:uppercase; color:var(--gold-primary); font-weight:700;">
                      <?php echo htmlspecialchars($sib['category_name']); ?>
                    </span>
                  </div>
                  <h3 style="font-size:1.05rem; color:#fff; font-weight:700; margin-bottom:8px;">
                    <?php echo htmlspecialchars($sib['short_title']); ?>
                  </h3>
                  <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin-bottom:16px;">
                    <?php echo htmlspecialchars($sib['meta_description']); ?>
                  </p>
                </div>
                <div>
                  <a href="<?php echo $base_path; ?>service/<?php echo htmlspecialchars($sib['slug']); ?>" class="btn-luxury-outline w-100 text-center" style="padding:8px 12px; font-size:12px;">
                    Explore <?php echo htmlspecialchars($sib['short_title']); ?> <i class="fa-solid fa-arrow-right" style="margin-left:4px;"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- HELPFUL CLIENT GUIDES FOR THIS SERVICE -->
      <?php if (!empty($service_guides)): ?>
        <div class="section-header text-start mt-4 pt-2 mb-3">
          <span class="section-tag"><i class="fa-solid fa-book-open"></i> Client Education &amp; Guides</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
            Helpful Articles Related to <?php echo htmlspecialchars($service['short_title']); ?>
          </h2>
        </div>

        <div class="row g-4 mb-5">
          <?php foreach ($service_guides as $gSlug => $guide): ?>
            <div class="col-lg-4 col-md-6">
              <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-3" style="background: rgba(14, 21, 38, 0.7); border: 1px solid var(--border-gold);">
                <div>
                  <a href="<?php echo $base_path; ?>blog/<?php echo $gSlug; ?>" class="d-block blog-card-thumb">
                    <img src="<?php echo $base_path . $guide['image']; ?>" 
                         alt="<?php echo htmlspecialchars($guide['title']); ?>" 
                         title="<?php echo htmlspecialchars($guide['title'] . ' | Web Optimizer'); ?>"
                         draggable="false"
                         loading="lazy">
                    <span class="thumb-badge"><?php echo htmlspecialchars($guide['category']); ?></span>
                  </a>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="badge" style="background: rgba(212, 175, 55, 0.12); color: var(--gold-light); font-size: 10px;">
                      <?php echo htmlspecialchars($guide['category']); ?>
                    </span>
                    <span style="font-size: 11px; color: var(--text-dim);">
                      <i class="fa-regular fa-clock me-1"></i> <?php echo htmlspecialchars($guide['read_time']); ?>
                    </span>
                  </div>
                  <h3 style="font-family: var(--font-display); font-size: 1.1rem; color: #fff; font-weight: 700; line-height: 1.35; margin-bottom: 8px;">
                    <a href="<?php echo $base_path; ?>blog/<?php echo $gSlug; ?>" style="color: #fff; text-decoration: none;">
                      <?php echo htmlspecialchars($guide['title']); ?>
                    </a>
                  </h3>
                  <p style="font-size: 12.5px; color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">
                    <?php echo htmlspecialchars($guide['excerpt']); ?>
                  </p>
                </div>
                <div class="pt-2 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                  <span style="font-size: 11px; color: var(--gold-primary); font-weight: 700;">BUSINESS GUIDE</span>
                  <a href="<?php echo $base_path; ?>blog/<?php echo $gSlug; ?>" style="font-size: 12px; color: var(--gold-light); font-weight: 600; text-decoration: none;">
                    Read Article &rarr;
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- STATEWIDE ODISHA LOCATIONS DIRECTORY FOR THIS SERVICE (50 CITIES) -->
      <div class="service-overview-box mt-4 mb-5" style="background: linear-gradient(180deg, rgba(14, 21, 38, 0.8) 0%, rgba(8, 13, 26, 0.95) 100%);">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="dropdown-item-icon" style="width:44px; height:44px; font-size:18px;">
            <i class="fa-solid fa-map-location-dot"></i>
          </div>
          <div>
            <span class="section-tag" style="margin:0; font-size:11px;">LOCAL SERVICE COVERAGE &bull; 50 ODISHA CITIES</span>
            <h2 style="font-family:var(--font-display); font-size:1.5rem; color:#fff; margin:2px 0 0 0;">
              <?php echo htmlspecialchars($service['short_title']); ?> Across All 50 Cities &amp; Industrial Hubs in Odisha
            </h2>
          </div>
        </div>
        <p style="font-size: 13.5px; color: var(--text-cream); line-height: 1.7; margin-bottom: 22px;">
          Web Optimizer delivers <?php echo strtolower(htmlspecialchars($service['title'])); ?> for businesses across all 30 districts of Odisha. Select your city below to explore localized deliverables and consultation availability:
        </p>

        <div class="d-flex flex-wrap gap-2 mb-3">
          <?php foreach ($odisha_locations as $loc_slug => $loc_item): ?>
            <a href="<?php echo $base_path; ?>service/<?php echo htmlspecialchars($slug); ?>/<?php echo $loc_slug; ?>" 
               class="badge text-decoration-none" 
               style="background: rgba(8, 13, 26, 0.85); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11.5px; padding: 6px 12px; border-radius: 6px; transition: var(--transition-luxury);"
               onmouseover="this.style.borderColor='var(--gold-primary)'; this.style.color='#fff';"
               onmouseout="this.style.borderColor='var(--border-subtle)'; this.style.color='#cbd5e1';">
              <i class="fa-solid fa-location-dot" style="color:var(--gold-primary); font-size:10px; margin-right:4px;"></i>
              <?php echo htmlspecialchars($service['short_title']); ?> in <?php echo htmlspecialchars($loc_item['name']); ?>
            </a>
          <?php endforeach; ?>
        </div>

        <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary border-opacity-25 mt-3">
          <span style="font-size: 12px; color: var(--text-dim);">
            <i class="fa-solid fa-check-circle text-gold"></i> Dedicated Support Across All 50 Odisha Locations
          </span>
          <a href="<?php echo $base_path; ?>locations" style="font-size: 12.5px; color: var(--gold-light); font-weight: 600; text-decoration: none;">
            View All 50 Service Locations <i class="fa-solid fa-arrow-right" style="margin-left: 4px;"></i>
          </a>
        </div>
      </div>

    </div>
  </section>
</main>

<?php
require __DIR__ . '/includes/footer.php';
?>
