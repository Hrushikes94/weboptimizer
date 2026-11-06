<?php
/**
 * Web Optimizer - City Hub Landing Page (Programmatic SEO, AEO & GEO)
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain
 * Official Phone: +91 7735973818 | Email: info@weboptimizer.in | Location: Bhubaneswar, Odisha
 */
require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require_once __DIR__ . '/includes/blogs-data.php';

// Determine city slug
$city_slug = $_GET['city'] ?? 'bhubaneswar';
$city_slug = preg_replace('/[^a-z0-9\-]/i', '', strtolower($city_slug));

if (!isset($odisha_locations[$city_slug])) {
    $city_slug = 'bhubaneswar';
}

$loc = $odisha_locations[$city_slug];
$city_name = $loc['name'];

// Clean SEO Canonical URL & Redirection
$canonical_url = "https://www.weboptimizer.in/location/{$city_slug}";

// Fallback 301 redirect if accessed with query string directly
$req_uri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($req_uri, 'location.php') !== false) {
    $script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
    $clean_dir = str_replace('\\', '/', $script_dir);
    $bp = ($clean_dir === '/' || $clean_dir === '.' || $clean_dir === '') ? '/' : rtrim($clean_dir, '/') . '/';
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $bp . "location/" . $city_slug);
    exit;
}

$page_title = "Web Design & SEO in {$city_name}, Odisha | Web Optimizer";
$meta_desc = "Website design, custom GST billing software, local SEO, and digital marketing in {$city_name} ({$loc['district']} Dist), Odisha. Call +91 7735973818.";
$active_nav = 'locations';

// Get adjacent cities in same region
$adjacent_cities = [];
foreach ($odisha_locations as $k => $otherLoc) {
    if ($k !== $city_slug && $otherLoc['region'] === $loc['region']) {
        $adjacent_cities[] = $otherLoc;
        if (count($adjacent_cities) >= 4) break;
    }
}
if (count($adjacent_cities) < 4) {
    foreach ($odisha_locations as $k => $otherLoc) {
        if ($k !== $city_slug && !in_array($otherLoc, $adjacent_cities)) {
            $adjacent_cities[] = $otherLoc;
            if (count($adjacent_cities) >= 4) break;
        }
    }
}

require __DIR__ . '/includes/header.php';
?>

<!-- City-Specific Schema.org JSON-LD (SEO, AEO & GEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ProfessionalService",
      "@id": "https://www.weboptimizer.in/location/<?php echo $city_slug; ?>#service",
      "name": "Web Optimizer - <?php echo $city_name; ?>",
      "url": "https://www.weboptimizer.in/location/<?php echo $city_slug; ?>",
      "logo": "https://www.weboptimizer.in/assets/images/weboptimizer-logo.webp",
      "image": "https://www.weboptimizer.in/assets/images/weboptimizer-logo.webp",
      "telephone": "+91 7735973818",
      "email": "info@weboptimizer.in",
      "description": "Premier Website Design, WordPress Engineering, AI SEO, and Performance Marketing in <?php echo $city_name; ?>, Odisha.",
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
          "name": "Why choose Web Optimizer for digital marketing and web design in <?php echo $city_name; ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Web Optimizer combines local Odisha market knowledge with elite enterprise engineering — delivering sub-second loading WordPress sites, 99+ Core Web Vitals, and data-backed performance marketing with direct senior developer access."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide on-site meetings and consultations in <?php echo $city_name; ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Headquartered in Bhubaneswar, Senior Web Developer Hrushikesh Swain and our executive consulting team regularly conduct on-site discovery sessions for enterprise clients in <?php echo $city_name; ?>."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can a new website project be deployed for a business in <?php echo $city_name; ?>?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard luxury websites are designed, engineered, and deployed live within 2 to 4 weeks, backed by zero-downtime guarantees and complete training."
          }
        }
      ]
    }
  ]
}
</script>

<main>
  <!-- CITY HERO SECTION (FULL-WIDTH SEPARATE SECTION) -->
  <section class="page-banner-section" style="padding-bottom: 45px;">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto text-center">
          <!-- Breadcrumb -->
          <nav class="banner-breadcrumb justify-content-center" aria-label="breadcrumb">
            <a href="<?php echo $base_path; ?>"><i class="fa-solid fa-house"></i> Home</a>
            <span class="sep">/</span>
            <a href="<?php echo $base_path; ?>locations">Locations</a>
            <span class="sep">/</span>
            <span class="current"><?php echo htmlspecialchars($city_name); ?>, Odisha</span>
          </nav>

          <div class="banner-pill-badge mb-3">
            <span class="gold-dot"></span>
            <span><?php echo htmlspecialchars($loc['tier']); ?></span>
            <span style="color:rgba(255,255,255,0.4);">&bull;</span>
            <span style="color:var(--gold-light);"><?php echo htmlspecialchars($loc['district']); ?> District, Odisha</span>
          </div>

          <h1 class="banner-title">
            Premier Website Engineering &amp; <br>
            <span class="gold-gradient-text">Digital Growth Agency in <?php echo htmlspecialchars($city_name); ?></span>
          </h1>

          <p class="banner-lead mx-auto" style="max-width: 780px;">
            Empowering enterprises, manufacturers, healthcare providers, and high-growth businesses in <strong><?php echo htmlspecialchars($city_name); ?></strong> with bespoke digital platforms, sub-second WordPress architectures, and aggressive AI SEO that capture dominant local market share.
          </p>

          <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding: 12px 26px; font-size: 14px;">
              <i class="fa-solid fa-file-signature"></i> Request <?php echo htmlspecialchars($city_name); ?> Proposal
            </button>
            <a href="https://wa.me/917735973818?text=<?php echo urlencode("Hello Web Optimizer, I am inquiring about website and digital marketing services in {$city_name}."); ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn-luxury-outline" 
               style="border-color:#25d366; color:#25d366; padding: 12px 24px; font-size: 14px;">
              <i class="fa-brands fa-whatsapp"></i> Chat Senior Engineer
            </a>
          </div>

          <div class="d-flex flex-wrap justify-content-center gap-2">
            <span class="banner-stat-chip"><i class="fa-solid fa-map-pin text-gold"></i> Top 1 Target Map Pack</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-bolt text-gold"></i> &lt;800ms Avg Load</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-phone text-gold"></i> +91 7735973818</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEPARATE FULL-WIDTH CITY BANNER SHOWCASE SECTION -->
  <section class="full-banner-showcase-section">
    <div class="container">
      <div class="banner-visual-frame">
        <img src="<?php echo $base_path; ?>assets/images/banners/locations/banner-<?php echo $city_slug; ?>.webp" 
             alt="Website Design, Custom Billing Software & Digital Marketing in <?php echo htmlspecialchars($city_name); ?>, Odisha" 
             title="<?php echo htmlspecialchars($city_name); ?> Digital Engineering & Marketing Agency | Web Optimizer"
             draggable="false"
             class="img-fluid"
             onerror="this.src='<?php echo $base_path; ?>assets/images/banners/banner-locations.webp';">
        <div class="banner-floating-badge">
          <span class="gold-dot"></span> <?php echo htmlspecialchars($loc['tier']); ?> &bull; Active Deployment
        </div>
      </div>
    </div>
  </section>

  <!-- SPECIALIZED SERVICES IN THIS CITY -->
  <section class="section-wrap" style="padding-top: 10px;">
    <div class="container">
      
      <div class="section-header text-start mb-4">
        <span class="section-tag"><i class="fa-solid fa-layer-group"></i> Localized Capabilities</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">
          Digital Solutions Engineered for <?php echo htmlspecialchars($city_name); ?> Businesses
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 820px;">
          Every practice area is tailored to the specific competitive landscape, buyer demographics, and industrial sectors of <?php echo htmlspecialchars($city_name); ?>.
        </p>
      </div>

      <!-- Core Services Grid for City -->
      <div class="row g-4 mb-5">
        <?php 
        $city_featured_services = [
          'website-development', 'technical-seo', 'performance-marketing',
          'social-media-marketing', 'branding-design', 'ecommerce-development',
          'shopify-development', 'seo-audit', 'local-seo', 'whatsapp-automation',
          'google-ads', 'custom-web-application'
        ];
        foreach ($city_featured_services as $sfKey):
          if (isset($services_catalog[$sfKey])):
            $sf = $services_catalog[$sfKey];
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-4">
              <div>
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div class="dropdown-item-icon" style="width:40px; height:40px; font-size:16px;">
                    <i class="<?php echo htmlspecialchars($sf['icon']); ?>"></i>
                  </div>
                  <span class="badge" style="background:rgba(212,175,55,0.12); color:var(--gold-light); font-size:10px; border:1px solid var(--border-gold); font-family:var(--font-mono);">
                    <?php echo htmlspecialchars($city_name); ?> SPECIFIC
                  </span>
                </div>
                <h4 style="font-size:1.15rem; color:#fff; font-weight:700; margin-bottom:8px; line-height:1.3;">
                  <?php echo htmlspecialchars($sf['short_title']); ?> in <?php echo htmlspecialchars($city_name); ?>
                </h4>
                <p style="font-size:13px; color:var(--text-muted); line-height:1.6; margin-bottom:16px;">
                  <?php echo htmlspecialchars($sf['meta_description']); ?>
                </p>
              </div>
              <div class="pt-3 border-top border-secondary border-opacity-25">
                <a href="<?php echo $base_path; ?>service/<?php echo $sf['slug']; ?>/<?php echo $city_slug; ?>" class="btn-gold w-100 text-center" style="padding:9px 14px; font-size:12.5px; text-decoration:none;">
                  View <?php echo htmlspecialchars($sf['short_title']); ?> in <?php echo htmlspecialchars($city_name); ?> <i class="fa-solid fa-arrow-right" style="margin-left:4px;"></i>
                </a>
              </div>
            </div>
          </div>
        <?php 
          endif;
        endforeach; 
        ?>
      </div>

      <!-- AEO & GEO ANSWER ENGINE OPTIMIZATION MODULE -->
      <div class="service-overview-box">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="dropdown-item-icon" style="width:44px; height:44px; font-size:18px;">
            <i class="fa-solid fa-brain"></i>
          </div>
          <div>
            <span class="section-tag" style="margin:0; font-size:11px;">AEO & GEO DIRECT ANSWER OVERVIEW</span>
            <h3 style="font-family:var(--font-display); font-size:1.5rem; color:#fff; margin:2px 0 0 0;">
              Why Businesses in <?php echo htmlspecialchars($city_name); ?> Partner With Web Optimizer
            </h3>
          </div>
        </div>
        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-cream); margin-bottom: 20px;">
          Enterprises in <strong><?php echo htmlspecialchars($city_name); ?></strong> choose <strong>Web Optimizer</strong> because we eliminate the risks of generic freelancer handoffs and slow, template-based websites. Directed personally by Senior Associate Web Developer <strong>Hrushikesh Swain</strong>, our engineering team handcrafts lightweight custom WordPress code, implements Google-certified Schema.org structured data, and drives verified return on advertising capital across Odisha.
        </p>
        <div class="row g-3 mt-1">
          <div class="col-md-4">
            <div class="p-3 rounded-2" style="background: rgba(8, 13, 26, 0.8); border: 1px solid var(--border-gold);">
              <div style="font-size:12px; color:var(--gold-primary); font-weight:700; text-transform:uppercase;">Sub-Second Latency</div>
              <p style="font-size:12.5px; color:var(--text-muted); margin:4px 0 0 0; line-height:1.5;">Pass Google Core Web Vitals with flawless 99+ scores for peak ranking power.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-3 rounded-2" style="background: rgba(8, 13, 26, 0.8); border: 1px solid var(--border-gold);">
              <div style="font-size:12px; color:var(--gold-primary); font-weight:700; text-transform:uppercase;">Local Map Dominance</div>
              <p style="font-size:12.5px; color:var(--text-muted); margin:4px 0 0 0; line-height:1.5;">Capture top 3 Google Map pack placement for high-intent near-me searches in <?php echo htmlspecialchars($city_name); ?>.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-3 rounded-2" style="background: rgba(8, 13, 26, 0.8); border: 1px solid var(--border-gold);">
              <div style="font-size:12px; color:var(--gold-primary); font-weight:700; text-transform:uppercase;">Direct Founder Access</div>
              <p style="font-size:12.5px; color:var(--text-muted); margin:4px 0 0 0; line-height:1.5;">Direct engineering oversight with guaranteed 2-hour response times on WhatsApp.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ ACCORDION -->
      <div class="section-header text-start mt-5 pt-3 mb-3">
        <span class="section-tag"><i class="fa-solid fa-circle-question"></i> Client Q&A</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">
          Frequently Asked Questions in <?php echo htmlspecialchars($city_name); ?>
        </h2>
      </div>

      <div class="accordion accordion-luxury" id="cityFaqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="cfaqH1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqC1" aria-expanded="true" aria-controls="cfaqC1">
              <i class="fa-solid fa-circle-dot me-2 text-gold" style="font-size:12px;"></i>
              Can Web Optimizer visit our corporate office or facility in <?php echo htmlspecialchars($city_name); ?>?
            </button>
          </h2>
          <div id="cfaqC1" class="accordion-collapse collapse show" aria-labelledby="cfaqH1" data-bs-parent="#cityFaqAccordion">
            <div class="accordion-body">
              Yes. While all project milestones, code repositories, and reporting dashboards are managed in real time in cloud environments, our founder and senior consulting team regularly conduct on-site discovery meetings and leadership strategy workshops in <?php echo htmlspecialchars($city_name); ?>.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="cfaqH2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqC2" aria-expanded="false" aria-controls="cfaqC2">
              <i class="fa-solid fa-circle-dot me-2 text-gold" style="font-size:12px;"></i>
              How do you help our <?php echo htmlspecialchars($city_name); ?> business rank on Google for local keywords?
            </button>
          </h2>
          <div id="cfaqC2" class="accordion-collapse collapse" aria-labelledby="cfaqH2" data-bs-parent="#cityFaqAccordion">
            <div class="accordion-body">
              We deploy surgical Local SEO campaigns: optimizing your Google Business Profile, injecting geo-tagged LocalBusiness Schema.org JSON-LD structured data for <?php echo htmlspecialchars($city_name); ?>, building high-authority local citations, and developing speed-optimized localized landing pages.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="cfaqH3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqC3" aria-expanded="false" aria-controls="cfaqC3">
              <i class="fa-solid fa-circle-dot me-2 text-gold" style="font-size:12px;"></i>
              What is the typical investment for a custom enterprise website in <?php echo htmlspecialchars($city_name); ?>?
            </button>
          </h2>
          <div id="cfaqC3" class="accordion-collapse collapse" aria-labelledby="cfaqH3" data-bs-parent="#cityFaqAccordion">
            <div class="accordion-body">
              Every deployment is scoped transparently according to feature complexity, custom Gutenberg block requirements, payment integrations, and speed criteria. Contact our engineering team at +91 7735973818 to receive a detailed milestone investment proposal within 2 hours.
            </div>
          </div>
        </div>
      </div>

      <!-- HELPFUL GUIDES FOR THIS CITY -->
      <div class="section-header text-start mt-5 pt-4 mb-3">
        <span class="section-tag"><i class="fa-solid fa-book-open"></i> Local Business Insights</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
          Helpful Digital Guides for <?php echo htmlspecialchars($city_name); ?> Businesses
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 780px;">
          Honest, practical advice on website ROI, Google ranking, and digital marketing for business owners in <?php echo htmlspecialchars($city_name); ?> and across Odisha.
        </p>
      </div>

      <div class="row g-4 mb-5">
        <?php 
        $city_guides_slugs = [
          'why-business-websites-fail-in-odisha',
          'google-business-profile-mastery-odisha',
          'why-odisha-businesses-need-whatsapp-automation'
        ];
        foreach ($city_guides_slugs as $cgSlug):
          if (!isset($blogs_catalog[$cgSlug])) continue;
          $guide = $blogs_catalog[$cgSlug];
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-3" style="background: rgba(14, 21, 38, 0.75); border: 1px solid var(--border-gold);">
              <div>
                <a href="<?php echo $base_path; ?>blog/<?php echo $cgSlug; ?>" class="d-block blog-card-thumb">
                  <img src="<?php echo $base_path . $guide['image']; ?>" 
                       alt="<?php echo htmlspecialchars($guide['title'] . ' in ' . $city_name); ?>" 
                       title="<?php echo htmlspecialchars($guide['title'] . ' | ' . $city_name . ', Odisha'); ?>"
                       draggable="false"
                       loading="lazy">
                  <span class="thumb-badge"><?php echo htmlspecialchars($guide['category']); ?></span>
                </a>
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span style="font-size: 11px; color: var(--gold-light); font-weight: 600;">
                    <i class="fa-solid fa-lightbulb text-gold me-1"></i> <?php echo htmlspecialchars($city_name); ?> INSIGHT
                  </span>
                  <span style="font-size: 11px; color: var(--text-dim);">
                    <i class="fa-regular fa-clock me-1"></i> <?php echo htmlspecialchars($guide['read_time']); ?>
                  </span>
                </div>
                <h4 style="font-family: var(--font-display); font-size: 1.15rem; color: #fff; font-weight: 700; line-height: 1.35; margin-bottom: 8px;">
                  <a href="<?php echo $base_path; ?>blog/<?php echo $cgSlug; ?>" style="color: #fff; text-decoration: none;">
                    <?php echo htmlspecialchars($guide['title']); ?>
                  </a>
                </h4>
                <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">
                  <?php echo htmlspecialchars($guide['excerpt']); ?>
                </p>
              </div>
              <div class="pt-2 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                <span style="font-size: 11px; color: var(--gold-primary); font-weight: 700;">ODISHA GUIDE</span>
                <a href="<?php echo $base_path; ?>blog/<?php echo $cgSlug; ?>" style="font-size: 12.5px; color: var(--gold-light); font-weight: 700; text-decoration: none;">
                  Read Guide &rarr;
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- DIRECT INQUIRY CTA BANNER -->
      <div class="service-cta-banner mt-5">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8 text-center">
            <span class="section-tag" style="display:inline-block;"><i class="fa-solid fa-crown"></i> Initiate Your Project</span>
            <h3 style="font-family:var(--font-display); font-size:clamp(1.6rem, 2.8vw, 2.4rem); color:#fff; margin:12px 0 16px 0;">
              Ready to Upgrade Your Digital Presence in <?php echo htmlspecialchars($city_name); ?>?
            </h3>
            <p style="font-size:14px; color:var(--text-cream); line-height:1.7; margin-bottom:28px;">
              Speak directly with Senior Web Developer Hrushikesh Swain. Get a tailored architectural roadmap, timeline, and exact investment proposal for your <?php echo htmlspecialchars($city_name); ?> business within 2 hours.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding:14px 28px; font-size:15px;">
                <i class="fa-solid fa-file-signature"></i> Request <?php echo htmlspecialchars($city_name); ?> Proposal
              </button>
              <a href="tel:+917735973818" class="btn-luxury-outline" style="padding:14px 26px; font-size:15px;">
                <i class="fa-solid fa-phone"></i> Call +91 7735973818
              </a>
              <a href="https://wa.me/917735973818?text=<?php echo urlencode("Hello Web Optimizer, I am inquiring about website and digital marketing services in {$city_name}."); ?>" 
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

      <!-- ADJACENT CITIES NAVIGATION -->
      <div class="section-header text-start mt-5 pt-4 mb-3">
        <span class="section-tag"><i class="fa-solid fa-map"></i> Regional Coverage</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
          Explore Other Cities in <?php echo htmlspecialchars($loc['region']); ?>
        </h2>
      </div>

      <div class="row g-3 mb-5">
        <?php foreach ($adjacent_cities as $adj): ?>
          <div class="col-lg-3 col-md-6">
            <div class="benefit-card h-100 d-flex flex-column justify-content-between p-3" style="background: rgba(14, 21, 38, 0.65);">
              <div>
                <span class="badge mb-2" style="background: rgba(212, 175, 55, 0.12); color: var(--gold-light); font-size: 10px;">
                  <?php echo htmlspecialchars($adj['district']); ?> Dist.
                </span>
                <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 6px;">
                  <?php echo htmlspecialchars($adj['name']); ?>
                </h4>
                <p style="font-size: 12px; color: var(--text-muted); line-height: 1.5; margin-bottom: 12px;">
                  <?php echo htmlspecialchars($adj['tier']); ?>
                </p>
              </div>
              <div>
                <a href="<?php echo $base_path; ?>location/<?php echo $adj['slug']; ?>" class="btn-luxury-outline w-100 text-center" style="padding: 7px 12px; font-size: 12px;">
                  Explore <?php echo htmlspecialchars($adj['name']); ?> <i class="fa-solid fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>
</main>

<?php
require __DIR__ . '/includes/footer.php';
?>
