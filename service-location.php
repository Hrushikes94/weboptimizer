<?php
/**
 * Web Optimizer - Hyper-Local Service + Location Programmatic Landing Page
 * Full Programmatic SEO, AEO & GEO Infrastructure (2,500+ Programmatic URL combinations)
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain
 * Official Phone: +91 7735973818 | Email: info@weboptimizer.in | Location: Bhubaneswar, Odisha
 */
require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require_once __DIR__ . '/includes/blogs-data.php';

// Determine service and city parameters
$service_slug = $_GET['service'] ?? 'website-development';
$city_slug = $_GET['city'] ?? 'bhubaneswar';

$service_slug = preg_replace('/[^a-z0-9\-]/i', '', strtolower($service_slug));
$city_slug = preg_replace('/[^a-z0-9\-]/i', '', strtolower($city_slug));

if (!isset($services_catalog[$service_slug])) {
    $service_slug = 'website-development';
}
if (!isset($odisha_locations[$city_slug])) {
    $city_slug = 'bhubaneswar';
}

$service = $services_catalog[$service_slug];
$loc = $odisha_locations[$city_slug];
$city_name = $loc['name'];

// Clean SEO Canonical URL & Redirection
$canonical_url = "https://www.weboptimizer.in/service/{$service_slug}/{$city_slug}";

// Fallback 301 redirect if accessed with query string directly
$req_uri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($req_uri, 'service-location.php') !== false) {
    $script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
    $clean_dir = str_replace('\\', '/', $script_dir);
    $bp = ($clean_dir === '/' || $clean_dir === '.' || $clean_dir === '') ? '/' : rtrim($clean_dir, '/') . '/';
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $bp . "service/" . $service_slug . "/" . $city_slug);
    exit;
}

// Find up to 3 relevant guides for this service
$service_guides = [];
foreach ($blogs_catalog as $bK => $bItem) {
    if ($bItem['service_slug'] === $service_slug || (isset($bItem['category_slug']) && isset($service['parent_slug']) && $bItem['category_slug'] === $service['parent_slug'])) {
        $service_guides[$bK] = $bItem;
        if (count($service_guides) >= 3) break;
    }
}
if (empty($service_guides)) {
    $service_guides = array_slice($blogs_catalog, 0, 3, true);
}

$page_title = "Best {$service['short_title']} in {$city_name}, Odisha | Web Optimizer";
$meta_desc = "Top-rated {$service['short_title']} in {$city_name}, Odisha ({$loc['district']} Dist). Handcrafted by Web Optimizer & Founder Hrushikesh Swain. Sub-second speed, 99+ Core Web Vitals, enterprise ROI. Call +91 7735973818.";
$active_nav = 'locations';

require __DIR__ . '/includes/header.php';
?>

<!-- Hyper-Local Structured Data (SEO, AEO & GEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ProfessionalService",
      "@id": "https://www.weboptimizer.in/service/<?php echo $service_slug; ?>/<?php echo $city_slug; ?>#service",
      "name": "Web Optimizer - <?php echo htmlspecialchars($service['title']); ?> in <?php echo $city_name; ?>",
      "url": "https://www.weboptimizer.in/service/<?php echo $service_slug; ?>/<?php echo $city_slug; ?>",
      "logo": "https://www.weboptimizer.in/assets/images/weboptimizer-logo.webp",
      "image": "https://www.weboptimizer.in/assets/images/weboptimizer-logo.webp",
      "telephone": "+91 7735973818",
      "email": "info@weboptimizer.in",
      "description": "Leading <?php echo htmlspecialchars($service['title']); ?> in <?php echo $city_name; ?>, Odisha. Engineered for speed, conversion, and verified ROI.",
      "priceRange": "$$",
      "areaServed": {
        "@type": "City",
        "name": "<?php echo $city_name; ?>",
        "containedInPlace": {
          "@type": "AdministrativeArea",
          "name": "Odisha, India"
        }
      },
      "founder": {
        "@type": "Person",
        "name": "Hrushikesh Swain",
        "jobTitle": "Senior Associate Web Developer & Founder"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why choose Web Optimizer for <?php echo htmlspecialchars($service['short_title']); ?> in <?php echo $city_name; ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Web Optimizer delivers clean, hand-coded architectures with zero third-party plugin bloat, guaranteed sub-second loading, 99+ Core Web Vitals, and direct senior developer oversight tailored for businesses in <?php echo $city_name; ?>."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can you start our <?php echo htmlspecialchars($service['short_title']); ?> project in <?php echo $city_name; ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We begin immediate technical discovery upon engagement. Projects for <?php echo $city_name; ?> clients typically deploy within 2 to 4 weeks depending on exact scope and feature requirements."
          }
        },
        {
          "@type": "Question",
          "name": "Can we consult with Senior Developer Hrushikesh Swain directly for our <?php echo $city_name; ?> project?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All client engagements are directed personally by Founder & Senior Web Developer Hrushikesh Swain with direct phone (+91 7735973818) and WhatsApp access."
          }
        }
      ]
    }
  ]
}
</script>

<main>
  <!-- HYPER-LOCAL HERO (FULL-WIDTH SEPARATE SECTION) -->
  <section class="page-banner-section" style="padding-bottom: 45px;">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto text-center">
          <!-- Multi-Tier Breadcrumbs -->
          <nav class="banner-breadcrumb justify-content-center" aria-label="breadcrumb">
            <a href="<?php echo $base_path; ?>"><i class="fa-solid fa-house"></i> Home</a>
            <span class="sep">/</span>
            <a href="<?php echo $base_path; ?>services">Services</a>
            <span class="sep">/</span>
            <a href="<?php echo $base_path; ?>service/<?php echo htmlspecialchars($service_slug); ?>"><?php echo htmlspecialchars($service['short_title']); ?></a>
            <span class="sep">/</span>
            <span class="current"><?php echo htmlspecialchars($city_name); ?> Hub</span>
          </nav>

          <div class="banner-pill-badge mb-3">
            <span class="gold-dot"></span>
            <span><?php echo htmlspecialchars($service['short_title']); ?></span>
            <span style="color:rgba(255,255,255,0.4);">&bull;</span>
            <span style="color:var(--gold-light);"><?php echo htmlspecialchars($city_name); ?>, Odisha</span>
          </div>

          <h1 class="banner-title">
            Top <?php echo htmlspecialchars($service['title']); ?> <br>
            <span class="gold-gradient-text">in <?php echo htmlspecialchars($city_name); ?>, Odisha</span>
          </h1>

          <p class="banner-lead mx-auto" style="max-width: 780px;">
            Accelerate your business with enterprise <?php echo htmlspecialchars($service['title']); ?> in <strong><?php echo htmlspecialchars($city_name); ?></strong>. Engineered by Web Optimizer with sub-second page performance, localized Google Maps dominance, and direct developer access.
          </p>

          <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding: 12px 26px; font-size: 14px;">
              <i class="fa-solid fa-file-signature"></i> Get <?php echo htmlspecialchars($city_name); ?> Proposal
            </button>
            <a href="https://wa.me/917735973818?text=<?php echo urlencode("Hello Web Optimizer, I am inquiring about {$service['title']} in {$city_name}, Odisha."); ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn-luxury-outline" 
               style="border-color:#25d366; color:#25d366; padding: 12px 24px; font-size: 14px;">
              <i class="fa-brands fa-whatsapp"></i> Chat Senior Engineer
            </a>
          </div>

          <div class="d-flex flex-wrap justify-content-center gap-2">
            <span class="banner-stat-chip"><i class="fa-solid fa-award text-gold"></i> Guaranteed Google 3-Pack</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-bolt text-gold"></i> Sub-Second Speed</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-phone text-gold"></i> +91 7735973818</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEPARATE FULL-WIDTH SERVICE+LOCATION BANNER SHOWCASE SECTION -->
  <section class="full-banner-showcase-section">
    <div class="container">
      <div class="banner-visual-frame">
        <img src="<?php echo $base_path; ?>assets/images/banners/services/banner-<?php echo $service_slug; ?>.webp" 
             alt="Best <?php echo htmlspecialchars($service['title']); ?> in <?php echo htmlspecialchars($city_name); ?>, Odisha - Web Optimizer" 
             title="<?php echo htmlspecialchars($service['title']); ?> in <?php echo htmlspecialchars($city_name); ?>, Odisha | Web Optimizer"
             draggable="false"
             class="img-fluid"
             onerror="this.src='<?php echo $base_path; ?>assets/images/banners/locations/banner-<?php echo $city_slug; ?>.webp';">
        <div class="banner-floating-badge">
          <span class="gold-dot"></span> <?php echo htmlspecialchars($city_name); ?> &bull; <?php echo htmlspecialchars($service['badge']); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- OVERVIEW & LOCAL CONTEXT -->
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
                <span class="section-tag" style="margin:0; font-size:11px;"><?php echo htmlspecialchars($city_name); ?> COMMERCIAL CONTEXT</span>
                <h3 style="font-family:var(--font-display); font-size:1.6rem; color:var(--text-white); margin:2px 0 0 0;">
                  Executive Technical Overview for <?php echo htmlspecialchars($city_name); ?>
                </h3>
              </div>
            </div>
            <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-cream); margin-bottom: 14px;">
              In <strong><?php echo htmlspecialchars($city_name); ?></strong> ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â known as a prominent <strong><?php echo strtolower(htmlspecialchars($loc['tier'])); ?></strong> within <?php echo htmlspecialchars($loc['district']); ?> District ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â businesses face increasing digital competition. Relying on slow, template-driven websites results in lost market share and missed commercial opportunities.
            </p>
            <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-cream); margin: 0;">
              <?php echo htmlspecialchars($service['overview']); ?>
            </p>
          </div>
        </div>
      </div>

      <!-- DELIVERABLES SECTION -->
      <div class="section-header text-start mb-4">
        <span class="section-tag"><i class="fa-solid fa-list-check"></i> Core Deliverables in <?php echo htmlspecialchars($city_name); ?></span>
        <h2 class="section-title-lg" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">
          What We Deliver for <?php echo htmlspecialchars($city_name); ?> Clients
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 780px;">
          Every project in <?php echo htmlspecialchars($city_name); ?> is delivered with bespoke craftsmanship, zero third-party bloat, and total transparency.
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
        <span class="section-tag"><i class="fa-solid fa-gem"></i> Measurable Advantage</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">
          Strategic Business ROI in <?php echo htmlspecialchars($city_name); ?>
        </h2>
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
              Enterprise Tooling
            </span>
            <h4 style="font-family: var(--font-display); font-size: 1.3rem; color: #fff; margin: 4px 0 0 0;">
              Applied Technologies & Standards
            </h4>
          </div>
          <div class="tech-stack-row">
            <?php foreach ($service['tech_stack'] as $t): ?>
              <span class="tech-badge-luxury"><?php echo htmlspecialchars($t); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- AEO & GEO STRUCTURED DIRECT ANSWER BOX -->
      <div class="service-overview-box mt-5">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="dropdown-item-icon" style="width:44px; height:44px; font-size:18px;">
            <i class="fa-solid fa-circle-question"></i>
          </div>
          <div>
            <span class="section-tag" style="margin:0; font-size:11px;">ANSWER ENGINE & GENERATIVE SEARCH CLARITY</span>
            <h3 style="font-family:var(--font-display); font-size:1.45rem; color:#fff; margin:2px 0 0 0;">
              Frequently Asked About <?php echo htmlspecialchars($service['short_title']); ?> in <?php echo htmlspecialchars($city_name); ?>
            </h3>
          </div>
        </div>

        <div class="accordion accordion-luxury" id="serviceLocFaq">
          <div class="accordion-item">
            <h2 class="accordion-header" id="slFaqH1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#slFaqC1" aria-expanded="true" aria-controls="slFaqC1">
                How does Web Optimizer tailor <?php echo htmlspecialchars($service['short_title']); ?> specifically for <?php echo htmlspecialchars($city_name); ?> businesses?
              </button>
            </h2>
            <div id="slFaqC1" class="accordion-collapse collapse show" aria-labelledby="slFaqH1" data-bs-parent="#serviceLocFaq">
              <div class="accordion-body">
                We analyze the local competitive landscape in <?php echo htmlspecialchars($city_name); ?> and <?php echo htmlspecialchars($loc['district']); ?> District. We inject geo-targeted Schema.org structured data, optimize Google Business Profile signals, and write persuasive copy that resonates directly with local commercial buyers in <?php echo htmlspecialchars($city_name); ?>.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="slFaqH2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#slFaqC2" aria-expanded="false" aria-controls="slFaqC2">
                What is the typical turnaround time for this project in <?php echo htmlspecialchars($city_name); ?>?
              </button>
            </h2>
            <div id="slFaqC2" class="accordion-collapse collapse" aria-labelledby="slFaqH2" data-bs-parent="#serviceLocFaq">
              <div class="accordion-body">
                Standard bespoke projects are completed and deployed live within 2 to 4 weeks. Clients in <?php echo htmlspecialchars($city_name); ?> receive direct weekly milestone staging links and real-time sprint updates directly from Founder Hrushikesh Swain.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="slFaqH3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#slFaqC3" aria-expanded="false" aria-controls="slFaqC3">
                How do we get started with Web Optimizer in <?php echo htmlspecialchars($city_name); ?>?
              </button>
            </h2>
            <div id="slFaqC3" class="accordion-collapse collapse" aria-labelledby="slFaqH3" data-bs-parent="#serviceLocFaq">
              <div class="accordion-body">
                Simply call our direct engineering line at +91 7735973818 or submit the proposal form below. We will analyze your current digital presence and provide an architectural roadmap within 2 hours.
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php if (!empty($service_guides)): ?>
        <!-- HELPFUL GUIDES FOR LOCAL BUSINESSES -->
        <div class="section-header text-start mt-5 pt-3 mb-3">
          <span class="section-tag"><i class="fa-solid fa-book-open"></i> Local Business Insights</span>
          <h2 class="section-title-lg" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
            Helpful Guides for <?php echo htmlspecialchars($city_name); ?> Business Owners
          </h2>
          <p class="section-desc" style="margin: 0; max-width: 780px;">
            Honest, practical advice on website ROI, Google ranking, and digital marketing tailored for business owners in <?php echo htmlspecialchars($city_name); ?> and across Odisha.
          </p>
        </div>

        <div class="row g-4 mb-5">
          <?php foreach ($service_guides as $gSlug => $guide): ?>
            <div class="col-lg-4 col-md-6">
              <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-3" style="background: rgba(14, 21, 38, 0.7); border: 1px solid var(--border-gold);">
                <div>
                  <a href="<?php echo $base_path; ?>blog/<?php echo $gSlug; ?>" class="d-block blog-card-thumb">
                    <img src="<?php echo $base_path . $guide['image']; ?>" 
                         alt="<?php echo htmlspecialchars($guide['title'] . ' - ' . $city_name); ?>" 
                         title="<?php echo htmlspecialchars($guide['title'] . ' | Web Optimizer ' . $city_name); ?>"
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

      <!-- DIRECT PROPOSAL CTA BANNER -->
      <div class="service-cta-banner">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8 text-center">
            <span class="section-tag" style="display:inline-block;"><i class="fa-solid fa-crown"></i> Initiate Your Project</span>
            <h3 style="font-family:var(--font-display); font-size:clamp(1.6rem, 2.8vw, 2.4rem); color:#fff; margin:12px 0 16px 0;">
              Ready to Upgrade Your <?php echo htmlspecialchars($service['short_title']); ?> in <?php echo htmlspecialchars($city_name); ?>?
            </h3>
            <p style="font-size:14px; color:var(--text-cream); line-height:1.7; margin-bottom:28px;">
              Speak directly with Senior Web Developer Hrushikesh Swain. Get a tailored architectural roadmap, timeline, and exact investment proposal within 2 hours.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding:14px 28px; font-size:15px;">
                <i class="fa-solid fa-file-signature"></i> Request <?php echo htmlspecialchars($city_name); ?> Proposal
              </button>
              <a href="tel:+917735973818" class="btn-luxury-outline" style="padding:14px 26px; font-size:15px;">
                <i class="fa-solid fa-phone"></i> Call +91 7735973818
              </a>
              <a href="https://wa.me/917735973818?text=<?php echo urlencode("Hello Web Optimizer, I am inquiring about {$service['short_title']} in {$city_name}."); ?>" 
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

      <!-- OTHER POPULAR CITIES FOR THIS SERVICE -->
      <div class="section-header text-start mt-5 pt-4 mb-3">
        <span class="section-tag"><i class="fa-solid fa-map-location-dot"></i> Statewide Availability</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
          <?php echo htmlspecialchars($service['short_title']); ?> in Other Odisha Cities
        </h2>
      </div>

      <div class="d-flex flex-wrap gap-2 mb-5">
        <?php 
        $loc_count = 0;
        foreach ($odisha_locations as $other_slug => $other_loc):
          if ($other_slug === $city_slug) continue;
          if ($loc_count >= 16) break;
          $loc_count++;
        ?>
          <a href="<?php echo $base_path; ?>service/<?php echo $service_slug; ?>/<?php echo $other_slug; ?>" 
             class="badge text-decoration-none p-2" 
             style="background: rgba(14, 21, 38, 0.75); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 12px; transition: var(--transition-luxury);">
            <?php echo htmlspecialchars($service['short_title']); ?> in <?php echo htmlspecialchars($other_loc['name']); ?>
          </a>
        <?php endforeach; ?>
        <a href="<?php echo $base_path; ?>locations" class="badge text-decoration-none p-2" style="background: rgba(212, 175, 55, 0.15); border: 1px solid var(--border-gold); color: var(--gold-light); font-size: 12px;">
          View All 50 Locations &rarr;
        </a>
      </div>

    </div>
  </section>
</main>

<?php
require __DIR__ . '/includes/footer.php';
?>
