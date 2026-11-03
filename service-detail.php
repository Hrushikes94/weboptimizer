<?php
/**
 * Web Optimizer - Service Detail Dynamic Template
 * Supports both Parent Category Hubs and Single Sub-Service Pages
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain
 */
require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require_once __DIR__ . '/includes/blogs-data.php';

// Determine service slug
$slug = $service_slug ?? $_GET['slug'] ?? '';

if (empty($slug) || !isset($services_catalog[$slug])) {
    // If invalid slug, fallback to website-development or redirect to services.php
    if (isset($services_catalog['website-development'])) {
        $slug = 'website-development';
    } else {
        header('Location: services.php');
        exit;
    }
}

$service = $services_catalog[$slug];

// Check if this service is a parent category
$is_parent = isset($service_parents[$slug]) || $slug === 'digital-marketing';
$parent_key = $service['parent_slug'] ?? $slug;
$parent_info = $service_parents[$parent_key] ?? null;

// Find sub-services belonging to this service if parent, or sibling sub-services if sub-service
$child_services = [];
$sibling_services = [];

if ($is_parent) {
    if ($slug === 'digital-marketing') {
        // Collect one representative from each main category or all sub-services
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
} else {
    // Collect siblings under the same parent
    if ($parent_info) {
        foreach ($parent_info['sub_services'] as $sub_k) {
            if ($sub_k !== $slug && isset($services_catalog[$sub_k])) {
                $sibling_services[] = $services_catalog[$sub_k];
            }
        }
    }
}

// Clean SEO Canonical URL & Redirection
$canonical_url = "https://www.weboptimizer.in/service/{$slug}";

// Fallback 301 redirect if accessed with query string directly
$req_uri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($req_uri, 'service-detail.php') !== false) {
    $script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
    $clean_dir = str_replace('\\', '/', $script_dir);
    $bp = ($clean_dir === '/' || $clean_dir === '.' || $clean_dir === '') ? '/' : rtrim($clean_dir, '/') . '/';
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $bp . "service/" . $slug);
    exit;
}

// Find up to 3 relevant guides for this service
$service_guides = [];
foreach ($blogs_catalog as $bK => $bItem) {
    if ($bItem['service_slug'] === $slug || (isset($bItem['category_slug']) && $bItem['category_slug'] === ($parent_info['slug'] ?? ''))) {
        $service_guides[$bK] = $bItem;
        if (count($service_guides) >= 3) break;
    }
}
if (empty($service_guides)) {
    $service_guides = array_slice($blogs_catalog, 0, 3, true);
}

$page_title = $service['title'] . ' | Web Optimizer';
$meta_desc = $service['meta_description'];
$active_nav = 'services';

require __DIR__ . '/includes/header.php';
?>

<main>
  <!-- BREADCRUMB & HERO (FULL-WIDTH SEPARATE SECTION) -->
  <section class="page-banner-section" style="padding-bottom: 45px;">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto text-center">
          <!-- Multi-Tier Breadcrumb -->
          <nav class="banner-breadcrumb justify-content-center" aria-label="breadcrumb">
            <a href="<?php echo $base_path; ?>index.php"><i class="fa-solid fa-house"></i> Home</a>
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

          <p class="banner-lead mx-auto" style="max-width: 780px;">
            <?php echo htmlspecialchars($service['hero_lead']); ?>
          </p>

          <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding: 12px 26px; font-size: 14px;">
              <i class="fa-solid fa-file-signature"></i> Request Proposal for <?php echo htmlspecialchars($service['short_title']); ?>
            </button>
            <a href="https://wa.me/917735973818?text=<?php echo urlencode('Hello Web Optimizer, I am inquiring about ' . $service['title']); ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn-luxury-outline" 
               style="border-color:#25d366; color:#25d366; padding: 12px 24px; font-size: 14px;">
              <i class="fa-brands fa-whatsapp"></i> Chat Senior Engineer
            </a>
          </div>

          <div class="d-flex flex-wrap justify-content-center gap-2">
            <?php foreach (array_slice($service['metrics'] ?? [], 0, 3) as $m): ?>
              <span class="banner-stat-chip">
                <strong style="color:var(--gold-light);"><?php echo htmlspecialchars($m['num']); ?></strong> 
                <?php echo htmlspecialchars($m['label']); ?>
              </span>
            <?php endforeach; ?>
            <span class="banner-stat-chip"><i class="fa-solid fa-shield-halved text-gold"></i> Direct Senior Dev</span>
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
             alt="<?php echo htmlspecialchars($service['title']); ?> Banner" 
             class="img-fluid"
             onerror="this.src='<?php echo $base_path; ?>assets/images/banners/banner-<?php echo $parent_key; ?>.webp';">
        <div class="banner-floating-badge">
          <span class="gold-dot"></span> <?php echo htmlspecialchars($service['badge']); ?> &bull; Verified Standards
        </div>
      </div>
    </div>
  </section>

  <!-- OVERVIEW & STRATEGIC CONTEXT -->
  <section class="section-wrap" style="padding-top: 10px;">
    <div class="container">
      
      <div class="service-overview-box">
        <div class="row align-items-center g-4">
          <div class="col-lg-12">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="dropdown-item-icon" style="width:48px; height:48px; font-size:20px;">
                <i class="<?php echo htmlspecialchars($service['icon']); ?>"></i>
              </div>
              <div>
                <span class="section-tag" style="margin:0; font-size:11px;"><?php echo htmlspecialchars($service['category_name']); ?></span>
                <h3 style="font-family:var(--font-display); font-size:1.6rem; color:var(--text-white); margin:2px 0 0 0;">
                  Executive Technical Overview
                </h3>
              </div>
            </div>
            <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-cream); margin: 0;">
              <?php echo htmlspecialchars($service['overview']); ?>
            </p>
          </div>
        </div>
      </div>

      <?php if ($is_parent && !empty($child_services)): ?>
        <!-- PARENT CATEGORY: SUB-SERVICES GRID -->
        <div class="section-header text-start mb-4">
          <span class="section-tag"><i class="fa-solid fa-layer-group"></i> Specialized Practice Areas</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">
            Specialized Sub-Services in <?php echo htmlspecialchars($service['short_title']); ?>
          </h2>
          <p class="section-desc" style="margin: 0; max-width: 820px;">
            Explore our specialized sub-disciplines engineered with dedicated tools, proven frameworks, and bespoke deliverables.
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
                  <h4 style="font-size:1.15rem; color:#fff; font-weight:700; margin-bottom:8px; line-height:1.3;">
                    <?php echo htmlspecialchars($sub['short_title']); ?>
                  </h4>
                  <p style="font-size:13px; color:var(--text-muted); line-height:1.6; margin-bottom:16px;">
                    <?php echo htmlspecialchars($sub['meta_description']); ?>
                  </p>
                </div>
                <div class="pt-3 border-top border-secondary border-opacity-25">
                  <a href="<?php echo htmlspecialchars($sub['slug']); ?>.php" class="btn-luxury-outline w-100 text-center" style="padding:9px 14px; font-size:12.5px;">
                    Explore Sub-Service <i class="fa-solid fa-arrow-right" style="margin-left:5px;"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- DELIVERABLES SECTION -->
      <div class="section-header text-start mb-4">
        <span class="section-tag"><i class="fa-solid fa-list-check"></i> Core Capabilities</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">
          What We Deliver in <?php echo htmlspecialchars($service['short_title']); ?>
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 780px;">
          Every project is delivered with enterprise-grade craftsmanship, zero third-party bloat, and total transparency.
        </p>
      </div>

      <div class="deliverables-grid">
        <?php foreach ($service['deliverables'] as $idx => $d): ?>
          <div class="deliverable-card">
            <div class="deliverable-num"><?php echo str_pad($idx + 1, 2, '0', STR_PAD_LEFT); ?></div>
            <h4 style="font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 10px; line-height: 1.35;">
              <?php echo htmlspecialchars($d['title']); ?>
            </h4>
            <p style="font-size: 13.5px; color: var(--text-muted); line-height: 1.65; margin: 0;">
              <?php echo htmlspecialchars($d['desc']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- STRATEGIC BENEFITS -->
      <div class="section-header text-start mt-5 pt-4 mb-2">
        <span class="section-tag"><i class="fa-solid fa-gem"></i> Measurable ROI</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">
          Strategic Business Advantages
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 780px;">
          How our precision approach delivers direct commercial advantage and long-term asset value.
        </p>
      </div>

      <div class="benefits-grid">
        <?php foreach ($service['benefits'] as $b): ?>
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fa-solid <?php echo htmlspecialchars($b['icon']); ?>"></i>
            </div>
            <h4 style="font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 8px;">
              <?php echo htmlspecialchars($b['title']); ?>
            </h4>
            <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin: 0;">
              <?php echo htmlspecialchars($b['text']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- TECH STACK -->
      <div class="p-4 rounded-3 mt-4" style="background: rgba(14, 21, 38, 0.6); border: 1px solid var(--border-gold);">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
          <div>
            <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 1.5px; color: var(--gold-primary); font-weight: 700;">
              Enterprise Tooling & Standards
            </span>
            <h4 style="font-family: var(--font-display); font-size: 1.3rem; color: #fff; margin: 4px 0 0 0;">
              Technologies & Standards Applied
            </h4>
          </div>
          <div class="tech-stack-row">
            <?php foreach ($service['tech_stack'] as $t): ?>
              <span class="tech-badge-luxury"><?php echo htmlspecialchars($t); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- 5-STEP EXECUTION PROCESS -->
      <div class="section-header text-start mt-5 pt-4 mb-2">
        <span class="section-tag"><i class="fa-solid fa-diagram-project"></i> Methodology</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">
          The 5-Step Delivery Lifecycle
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 780px;">
          A proven, disciplined engineering framework guaranteeing on-time milestones and uncompromising execution.
        </p>
      </div>

      <div class="process-timeline">
        <div class="process-step-card">
          <div class="process-step-num">01</div>
          <h5 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;">Discovery & Audit</h5>
          <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
            Comprehensive review of existing assets, market landscape, technical bottlenecks, and revenue goals.
          </p>
        </div>
        <div class="process-step-card">
          <div class="process-step-num">02</div>
          <h5 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;">Architecture & Strategy</h5>
          <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
            Bespoke wireframes, database modeling, schema design, and strategy prototypes aligned with your brand.
          </p>
        </div>
        <div class="process-step-card">
          <div class="process-step-num">03</div>
          <h5 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;">Precision Execution</h5>
          <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
            Handcrafted PHP, clean SCSS, semantic HTML5, and secure database integrations with zero third-party bloat.
          </p>
        </div>
        <div class="process-step-card">
          <div class="process-step-num">04</div>
          <h5 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;">Performance & QA</h5>
          <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
            Rigorous cross-browser stress tests, PageSpeed 99+ audits, SSL security shields, and conversion checkups.
          </p>
        </div>
        <div class="process-step-card">
          <div class="process-step-num">05</div>
          <h5 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;">Launch & Growth Support</h5>
          <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
            Zero-downtime DNS deployment, search engine index submission, and ongoing executive monitoring.
          </p>
        </div>
      </div>

      <!-- FAQ ACCORDION -->
      <div class="section-header text-start mt-5 pt-4 mb-3">
        <span class="section-tag"><i class="fa-solid fa-circle-question"></i> Client Inquiries</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">
          Frequently Asked Questions
        </h2>
      </div>

      <div class="accordion accordion-luxury" id="serviceFaqAccordion">
        <?php foreach ($service['faqs'] as $fIdx => $faq): ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo $fIdx; ?>">
              <button class="accordion-button <?php echo ($fIdx === 0) ? '' : 'collapsed'; ?>" 
                      type="button" 
                      data-bs-toggle="collapse" 
                      data-bs-target="#collapse<?php echo $fIdx; ?>" 
                      aria-expanded="<?php echo ($fIdx === 0) ? 'true' : 'false'; ?>" 
                      aria-controls="collapse<?php echo $fIdx; ?>">
                <i class="fa-solid fa-circle-dot me-2 text-gold" style="font-size:12px;"></i>
                <?php echo htmlspecialchars($faq['q']); ?>
              </button>
            </h2>
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

      <!-- HELPFUL CLIENT GUIDES FOR THIS SERVICE -->
      <?php if (!empty($service_guides)): ?>
        <div class="section-header text-start mt-5 pt-3 mb-3">
          <span class="section-tag"><i class="fa-solid fa-book-open"></i> Client Education</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
            Helpful Guides: What Odisha Business Owners Need to Know
          </h2>
          <p class="section-desc" style="margin: 0; max-width: 780px;">
            Clear, honest insights on what is actually required to rank, convert, and scale your business in Odisha.
          </p>
        </div>

        <div class="row g-4 mb-5">
          <?php foreach ($service_guides as $gSlug => $guide): ?>
            <div class="col-lg-4 col-md-6">
              <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-3" style="background: rgba(14, 21, 38, 0.7); border: 1px solid var(--border-gold);">
                <div>
                  <a href="<?php echo $base_path; ?>blog/<?php echo $gSlug; ?>" class="d-block blog-card-thumb">
                    <img src="<?php echo $base_path . $guide['image']; ?>" alt="<?php echo htmlspecialchars($guide['title']); ?>" loading="lazy">
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
                  <h4 style="font-family: var(--font-display); font-size: 1.15rem; color: #fff; font-weight: 700; line-height: 1.35; margin-bottom: 8px;">
                    <a href="<?php echo $base_path; ?>blog/<?php echo $gSlug; ?>" style="color: #fff; text-decoration: none;">
                      <?php echo htmlspecialchars($guide['title']); ?>
                    </a>
                  </h4>
                  <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">
                    <?php echo htmlspecialchars($guide['excerpt']); ?>
                  </p>
                </div>
                <div class="pt-2 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                  <span style="font-size: 11px; color: var(--gold-primary); font-weight: 700;">ODISHA GUIDE</span>
                  <a href="<?php echo $base_path; ?>blog/<?php echo $gSlug; ?>" style="font-size: 12px; color: var(--gold-light); font-weight: 600; text-decoration: none;">
                    Read Guide &rarr;
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- DIRECT SERVICE INQUIRY CTA BANNER -->
      <div class="service-cta-banner">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8">
            <span class="section-tag" style="display:inline-block;"><i class="fa-solid fa-crown"></i> Initiate Your Project</span>
            <h3 style="font-family:var(--font-display); font-size:clamp(1.6rem, 2.8vw, 2.4rem); color:#fff; margin:12px 0 16px 0;">
              Ready to Upgrade Your <?php echo htmlspecialchars($service['short_title']); ?>?
            </h3>
            <p style="font-size:14px; color:var(--text-cream); line-height:1.7; margin-bottom:28px;">
              Speak directly with Senior Web Developer Hrushikesh Swain. Get a tailored architectural roadmap, timeline, and exact investment proposal within 2 hours.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding:14px 28px; font-size:15px;">
                <i class="fa-solid fa-file-signature"></i> Request Bespoke Proposal
              </button>
              <a href="tel:+917735973818" class="btn-luxury-outline" style="padding:14px 26px; font-size:15px;">
                <i class="fa-solid fa-phone"></i> Call +91 7735973818
              </a>
              <a href="https://wa.me/917735973818?text=<?php echo urlencode('Hello Web Optimizer, I am inquiring about ' . $service['title']); ?>" 
                 target="_blank" 
                 rel="noopener noreferrer" 
                 class="btn-luxury-outline" 
                 style="border-color:#25d366; color:#25d366; padding:14px 26px; font-size:15px;">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp Direct
              </a>
            </div>
          </div>
        </div>
      </div>

      <?php if (!empty($sibling_services)): ?>
        <!-- SIBLING SERVICES / EXPLORE MORE -->
        <div class="section-header text-start mt-5 pt-4 mb-3">
          <span class="section-tag"><i class="fa-solid fa-layer-group"></i> Related Sub-Services</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
            More in <?php echo htmlspecialchars($service['parent_name'] ?? 'This Category'); ?>
          </h2>
        </div>

        <div class="row g-3 mb-5">
          <?php 
          $shown = 0;
          foreach ($sibling_services as $sib): 
            if ($shown >= 3) break;
            $shown++;
          ?>
            <div class="col-lg-4 col-md-6">
              <div class="benefit-card h-100 d-flex flex-column justify-content-between">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span style="font-size:11px; text-transform:uppercase; color:var(--gold-primary); font-weight:700;">
                      <?php echo htmlspecialchars($sib['category_name']); ?>
                    </span>
                    <span class="badge" style="background:rgba(212,175,55,0.12); color:var(--gold-light); font-size:10px; border:1px solid var(--border-gold);">
                      <?php echo htmlspecialchars($sib['badge']); ?>
                    </span>
                  </div>
                  <h4 style="font-size:1.1rem; color:#fff; font-weight:700; margin-bottom:8px;">
                    <?php echo htmlspecialchars($sib['short_title']); ?>
                  </h4>
                  <p style="font-size:13px; color:var(--text-muted); line-height:1.6; margin-bottom:16px;">
                    <?php echo htmlspecialchars($sib['meta_description']); ?>
                  </p>
                </div>
                <div>
                  <a href="<?php echo htmlspecialchars($sib['slug']); ?>.php" class="btn-luxury-outline w-100 text-center" style="padding:8px 14px; font-size:12.5px;">
                    View Sub-Service <i class="fa-solid fa-arrow-right" style="margin-left:4px;"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    </div>
  </section>

      <!-- STATEWIDE ODISHA LOCATIONS DIRECTORY FOR THIS SERVICE (50 CITIES) -->
      <div class="service-overview-box mt-5 mb-5" style="background: linear-gradient(180deg, rgba(14, 21, 38, 0.8) 0%, rgba(8, 13, 26, 0.95) 100%);">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="dropdown-item-icon" style="width:44px; height:44px; font-size:18px;">
            <i class="fa-solid fa-map-location-dot"></i>
          </div>
          <div>
            <span class="section-tag" style="margin:0; font-size:11px;">STATEWIDE ODISHA COVERAGE &bull; 50 LOCATIONS</span>
            <h3 style="font-family:var(--font-display); font-size:1.5rem; color:#fff; margin:2px 0 0 0;">
              <?php echo htmlspecialchars($service['short_title']); ?> Across All 50 Cities & Industrial Belts in Odisha
            </h3>
          </div>
        </div>
        <p style="font-size: 13.5px; color: var(--text-cream); line-height: 1.7; margin-bottom: 22px;">
          Web Optimizer provides localized <?php echo strtolower(htmlspecialchars($service['title'])); ?> tailored to local commercial ecosystems, manufacturing belts, and consumer demographics across all 30 districts of Odisha. Select your city below to view dedicated deliverables, localized pricing, and on-site consultation availability:
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
            <i class="fa-solid fa-crown text-gold"></i> Direct Senior Developer Oversight in all 50 Locations
          </span>
          <a href="<?php echo $base_path; ?>locations" style="font-size: 12.5px; color: var(--gold-light); font-weight: 600; text-decoration: none;">
            View All 50 Odisha Service Areas Directory <i class="fa-solid fa-arrow-right" style="margin-left: 4px;"></i>
          </a>
        </div>
      </div>

</main>

<?php
require __DIR__ . '/includes/footer.php';
?>
