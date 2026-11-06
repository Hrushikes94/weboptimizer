<?php
/**
 * Web Optimizer - Website Design, Custom Business Software & Digital Marketing Company
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain (+91 7735973818 | info@weboptimizer.in)
 */
$page_title = 'Web Optimizer | Web Design, Software & SEO Company';
$meta_desc = 'Custom website design, GST billing software, technical SEO, and digital marketing that help businesses grow leads and sales. Call +91 7735973818.';
$canonical_url = 'https://www.weboptimizer.in/';
$active_nav = 'home';
$base_path = './';

require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/blogs-data.php';
require_once __DIR__ . '/includes/portfolio-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require __DIR__ . '/includes/header.php';

// Homepage FAQs for Answer Engine & Search Visibility
$homepage_faqs = [
    [
        'q' => 'What services does Web Optimizer provide to businesses?',
        'a' => 'Web Optimizer provides end-to-end digital and technology solutions across 6 core areas: (1) Custom Website Design, WordPress & E-Commerce Development, (2) Custom Quotation, Billing & GST Invoice Web/Mobile Software, (3) Technical SEO, Local Google Maps Ranking & AI Search Optimization, (4) Google Ads & Paid Social Media Lead Generation, (5) Social Media Marketing & Creator Campaigns, and (6) Brand Identity Design & WhatsApp Business API Automation.'
    ],
    [
        'q' => 'How does Web Optimizer help my business generate more enquiries and sales?',
        'a' => 'Instead of offering isolated tasks, we align your website speed, user experience, Google search visibility, paid advertising, and WhatsApp lead follow-up into one cohesive system. Visitors find your business easily on Google, understand your value within seconds on a mobile-friendly website, and connect with your sales team immediately via call, form, or WhatsApp.'
    ],
    [
        'q' => 'Can you build custom Quotation, Billing, and GST Invoicing software tailored to our workflow?',
        'a' => 'Yes. We develop custom web and mobile (PWA) Quotation, Billing, and GST Invoicing applications designed around your exact pricing formulas, HSN/SAC tax slabs, inventory rules, and multi-branch staff permissions—complete with one-click quote-to-invoice conversion and instant WhatsApp PDF sharing.'
    ],
    [
        'q' => 'How long does it take to design and launch a custom business website?',
        'a' => 'A standard custom business or corporate website typically takes 2 to 3 weeks from discovery to launch. E-commerce stores (WooCommerce or Shopify) and custom quotation/billing web applications generally take 3 to 5 weeks depending on custom features, product volume, and API integrations.'
    ],
    [
        'q' => 'Will my website be mobile-friendly, secure, and optimized for Google SEO?',
        'a' => 'Absolutely. Every website we build is 100% responsive across Android, iOS, tablets, laptops, and desktops. We engineer clean code for sub-second loading speeds (95+ Core Web Vitals), configure SSL and firewall protection, and include complete on-page SEO, clean URLs, XML sitemaps, and JSON-LD schema markup from day one.'
    ],
    [
        'q' => 'Do I get full ownership of my website, software code, and marketing accounts?',
        'a' => 'Yes. Once your project is completed, you own 100% of your domain name, website source code, custom database, brand design files, and ad accounts. We believe in earning long-term relationships through great service, never by locking clients in.'
    ],
    [
        'q' => 'Which locations and industries do you serve?',
        'a' => 'We are headquartered in Bhubaneswar and serve businesses across all 30 districts and 50 major commercial hubs of Odisha (including Cuttack, Rourkela, Sambalpur, Berhampur, Puri, Paradeep, Balasore, and Angul), as well as corporate and e-commerce clients across India and international markets.'
    ],
    [
        'q' => 'How do we get started or request a quotation?',
        'a' => 'Simply click "Get a Free Consultation" or "Request a Quote", call/WhatsApp us directly at +91 7735973818, or fill out our contact form. Senior Web Developer Hrushikesh Swain will review your requirements and provide a clear project roadmap and transparent quotation within 24 hours.'
    ]
];
?>

<!-- Homepage FAQPage Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.weboptimizer.in/#faq",
  "mainEntity": [
    <?php
    $hp_faq_json = [];
    foreach ($homepage_faqs as $hf) {
        $hp_faq_json[] = json_encode([
            '@type' => 'Question',
            'name' => $hf['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $hf['a']
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
    echo implode(",\n    ", $hp_faq_json);
    ?>
  ]
}
</script>

<main>
    <!-- 1. HERO SECTION: STRONG HEADLINE & CLEAR BUSINESS INTRODUCTION -->
    <section class="hero" id="hero" style="padding-bottom: 45px;">
      <div class="container hero-grid" style="position: relative; z-index: 2;">
        <div class="hero-left">
          <div class="hero-badge-gold">
            <span class="gold-dot"></span>
            <span>Website Design, Custom Software &amp; Digital Growth Partner</span>
          </div>

          <h1 class="hero-title">
            Websites, Custom Software &amp; <span class="gradient-text-agency">Digital Marketing Built to Grow Your Business</span>
          </h1>

          <p class="hero-lead">
            <strong>Web Optimizer</strong> helps businesses attract qualified customers, automate billing and daily operations, and increase sales through fast custom websites, e-commerce stores, GST quotation &amp; invoice software, technical SEO, and ROI-driven digital marketing.
          </p>

          <div class="hero-actions">
            <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal">
              <i class="fa-solid fa-calendar-check"></i> Get a Free Consultation
            </button>
            <a href="<?php echo $base_path; ?>services" class="btn-luxury-outline">
              <i class="fa-solid fa-layer-group"></i> Explore Our Services
            </a>
          </div>

          <div class="hero-pills">
            <a href="tel:+917735973818" class="hero-pill">
              <i class="fa-solid fa-phone"></i> +91 7735973818
            </a>
            <a href="https://wa.me/917735973818" target="_blank" rel="noopener noreferrer" class="hero-pill">
              <i class="fa-brands fa-whatsapp" style="color:#25d366;"></i> Talk to Our Experts
            </a>
            <a href="mailto:info@weboptimizer.in" class="hero-pill">
              <i class="fa-solid fa-envelope"></i> info@weboptimizer.in
            </a>
          </div>
        </div>

        <div class="hero-stats-grid">
          <div class="stat-card text-center">
            <div class="stat-num">158+</div>
            <div class="stat-desc">Projects Delivered</div>
          </div>
          <div class="stat-card text-center">
            <div class="stat-num">448+</div>
            <div class="stat-desc">Business Clients</div>
          </div>
          <div class="stat-card text-center">
            <div class="stat-num">&lt;800ms</div>
            <div class="stat-desc">Avg Page Speed</div>
          </div>
          <div class="stat-card text-center">
            <div class="stat-num">8+ Yrs</div>
            <div class="stat-desc">Proven Experience</div>
          </div>
        </div>
      </div>
    </section>

    <!-- SEPARATE FULL-WIDTH HERO BANNER SHOWCASE SECTION -->
    <section class="full-banner-showcase-section">
      <div class="container">
        <div class="banner-visual-frame">
          <img src="<?php echo $base_path; ?>assets/images/banners/banner-home.webp" 
               alt="Web Optimizer - Custom Website Design, GST Billing Software & Digital Marketing Company in Bhubaneswar, Odisha" 
               title="Web Optimizer | Website Design, Custom Billing Software & Digital Marketing Services"
               draggable="false"
               class="img-fluid">
          <div class="banner-floating-badge">
            <span class="gold-dot"></span> Serving All 50 Odisha Cities &amp; Global Clients &bull; 99.8% Core Web Vitals
          </div>
        </div>
      </div>
    </section>

    <!-- 2. WHAT WE DO & HOW WE HELP BUSINESSES -->
    <section class="section-wrap" id="what-we-do" style="padding-bottom: 20px;">
      <div class="container">
        <div class="section-header text-center mb-5">
          <span class="section-tag"><i class="fa-solid fa-compass"></i> What We Do &amp; How We Help</span>
          <h2 class="section-title-lg">Practical Technology &amp; Marketing Solutions That Solve Real Business Problems</h2>
          <p class="section-desc mx-auto" style="max-width: 840px;">
            Many businesses struggle with slow websites that generate zero enquiries, manual spreadsheet billing that wastes staff hours, or advertising campaigns that burn budget without bringing qualified buyers. Here is how Web Optimizer solves those challenges:
          </p>
        </div>

        <div class="row g-4">
          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4 d-flex flex-column justify-content-between">
              <div>
                <div class="dropdown-item-icon mb-3" style="width:46px; height:46px; font-size:19px;">
                  <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 style="font-size: 1.2rem; color: #fff; font-weight: 700; margin-bottom: 10px;">
                  1. High-Converting Websites &amp; Stores
                </h3>
                <p style="font-size: 13.5px; color: var(--text-muted); line-height: 1.65; margin-bottom: 16px;">
                  We design and develop fast, mobile-first corporate websites, WordPress platforms, and WooCommerce/Shopify online stores that build instant customer trust and make inquiring or buying effortless.
                </p>
              </div>
              <a href="<?php echo $base_path; ?>service/website-development" style="font-size: 12.5px; color: var(--gold-light); font-weight: 700; text-decoration: none;">
                Explore Website Design &rarr;
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4 d-flex flex-column justify-content-between">
              <div>
                <div class="dropdown-item-icon mb-3" style="width:46px; height:46px; font-size:19px;">
                  <i class="fa-solid fa-file-invoice-dollar"></i>
                </div>
                <h3 style="font-size: 1.2rem; color: #fff; font-weight: 700; margin-bottom: 10px;">
                  2. Custom Quotation &amp; GST Billing Apps
                </h3>
                <p style="font-size: 13.5px; color: var(--text-muted); line-height: 1.65; margin-bottom: 16px;">
                  We replace manual Excel sheets with custom web and mobile software for instant quotation creation, one-click GST invoicing, inventory tracking, customer ledger management, and WhatsApp PDF sharing.
                </p>
              </div>
              <a href="<?php echo $base_path; ?>service/quotation-billing-invoice-software" style="font-size: 12.5px; color: var(--gold-light); font-weight: 700; text-decoration: none;">
                Explore Billing Software &rarr;
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4 d-flex flex-column justify-content-between">
              <div>
                <div class="dropdown-item-icon mb-3" style="width:46px; height:46px; font-size:19px;">
                  <i class="fa-solid fa-magnifying-glass-chart"></i>
                </div>
                <h3 style="font-size: 1.2rem; color: #fff; font-weight: 700; margin-bottom: 10px;">
                  3. Google &amp; AI Search Visibility (SEO)
                </h3>
                <p style="font-size: 13.5px; color: var(--text-muted); line-height: 1.65; margin-bottom: 16px;">
                  We help customers find your business first on Google Search, Google Maps Local 3-Pack, and AI search engines through technical SEO, local optimization, and authoritative buyer-focused content.
                </p>
              </div>
              <a href="<?php echo $base_path; ?>service/ai-seo" style="font-size: 12.5px; color: var(--gold-light); font-weight: 700; text-decoration: none;">
                Explore SEO Services &rarr;
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4 d-flex flex-column justify-content-between">
              <div>
                <div class="dropdown-item-icon mb-3" style="width:46px; height:46px; font-size:19px;">
                  <i class="fa-solid fa-bullseye"></i>
                </div>
                <h3 style="font-size: 1.2rem; color: #fff; font-weight: 700; margin-bottom: 10px;">
                  4. Paid Leads, Social &amp; Automation
                </h3>
                <p style="font-size: 13.5px; color: var(--text-muted); line-height: 1.65; margin-bottom: 16px;">
                  We generate immediate, qualified sales enquiries through targeted Google Ads, Meta &amp; LinkedIn campaigns, cohesive brand design, and 24/7 WhatsApp Business API lead qualification.
                </p>
              </div>
              <a href="<?php echo $base_path; ?>service/performance-marketing" style="font-size: 12.5px; color: var(--gold-light); font-weight: 700; text-decoration: none;">
                Explore Lead Generation &rarr;
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. OUR CORE SERVICES (6 STRATEGIC PILLARS + 47 SPECIALIZED SERVICES) -->
    <section class="section-wrap" id="specialties">
      <div class="container">
        <div class="section-header">
          <span class="section-tag"><i class="fa-solid fa-layer-group"></i> Our Core Services</span>
          <h2 class="section-title-lg">Explore Our <?php echo count($services_catalog); ?> Specialized Digital &amp; Technology Services</h2>
          <p class="section-desc">
            Filter by category below or browse our complete directory of website engineering, custom software, SEO, paid advertising, social media, branding, and automation services.
          </p>
        </div>

        <!-- Service Category Filter Tabs (Dynamic from $service_parents) -->
        <div class="portfolio-filter-nav" id="skillsFilterNav" style="margin-bottom: 28px;">
          <button class="port-filter-btn active skills-filter-btn" data-filter="all">
            <i class="fa-solid fa-layer-group"></i> All Services <span class="count-badge"><?php echo count($services_catalog); ?></span>
          </button>
          <?php foreach ($service_parents as $parent_key => $p): 
            $cat_count = 0;
            foreach ($services_catalog as $sc) {
              if (($sc['parent_slug'] ?? '') === $parent_key) $cat_count++;
            }
          ?>
            <button class="port-filter-btn skills-filter-btn" data-filter="<?php echo htmlspecialchars($parent_key); ?>">
              <i class="fa-solid <?php echo htmlspecialchars($p['icon']); ?>"></i> <?php echo htmlspecialchars($p['short_title']); ?> <span class="count-badge"><?php echo $cat_count; ?></span>
            </button>
          <?php endforeach; ?>
        </div>

        <!-- Capabilities Slider Wrapper -->
        <div class="slider-wrapper">
          <button class="slider-arrow arrow-left" id="skillsPrevArrow" aria-label="Previous Service">
            <i class="fa-solid fa-chevron-left"></i>
          </button>

          <div class="slider-track" id="skillsTrack">
            <?php 
            foreach ($services_catalog as $svc_slug => $svc): 
              $cat_slug = $svc['parent_slug'] ?? 'web-development';
              $badge_color = !empty($svc['badge_color']) ? $svc['badge_color'] : 'gold';
              $badge_style = ($badge_color === 'blue' || $badge_color === '#38bdf8') 
                ? 'color:#38bdf8; border-color:#38bdf8;' 
                : (($badge_color === 'purple' || $badge_color === '#c084fc') 
                    ? 'color:#c084fc; border-color:#c084fc;' 
                    : (($badge_color === 'green' || $badge_color === '#34d399') 
                        ? 'color:#34d399; border-color:#34d399;' 
                        : ''));
              $subtitle = $svc['meta_description'] ?? $svc['hero_lead'] ?? '';
              if (function_exists('mb_strimwidth')) {
                $subtitle = mb_strimwidth($subtitle, 0, 110, '...');
              } else if (strlen($subtitle) > 110) {
                $subtitle = substr($subtitle, 0, 107) . '...';
              }
            ?>
              <div class="capability-card" data-category="<?php echo htmlspecialchars($cat_slug); ?>">
                <div class="card-crest-top">
                  <div class="card-icon-box">
                    <i class="<?php echo htmlspecialchars($svc['icon'] ?? 'fa-solid fa-gear'); ?>"></i>
                  </div>
                  <span class="card-badge-pill" <?php if ($badge_style) echo 'style="' . $badge_style . '"'; ?>>
                    <?php echo htmlspecialchars($svc['badge'] ?? 'SERVICE'); ?>
                  </span>
                </div>
                <h3 class="card-title"><?php echo htmlspecialchars($svc['title']); ?></h3>
                <div class="card-subtitle"><?php echo htmlspecialchars($subtitle); ?></div>
                <ul class="numbered-features">
                  <?php 
                  $delivs = array_slice($svc['deliverables'] ?? [], 0, 5);
                  foreach ($delivs as $d_idx => $deliv): 
                  ?>
                    <li>
                      <span class="num-pill"><?php echo ($d_idx + 1); ?></span>
                      <span><?php echo htmlspecialchars($deliv['title']); ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <div class="mt-auto pt-3 border-top border-secondary border-opacity-25">
                  <a href="<?php echo $base_path; ?>service/<?php echo $svc_slug; ?>" class="btn-luxury-outline w-100 text-center" style="padding:8px 14px; font-size:12.5px;">
                    Explore <?php echo htmlspecialchars($svc['short_title']); ?> <i class="fa-solid fa-arrow-right" style="margin-left:4px;"></i>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <button class="slider-arrow arrow-right" id="skillsNextArrow" aria-label="Next Service">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>

        <!-- Capabilities Slider Footer Controls -->
        <div class="slider-footer-bar">
          <div class="slider-status-indicator">
            <i class="fa-solid fa-microchip" style="color:var(--gold-primary);"></i>
            <span id="skillsCounterText">Showing 1 - 3 of <?php echo count($services_catalog); ?> Services</span>
          </div>
          <div class="progress-bar-track">
            <div class="progress-bar-fill" id="skillsProgressFill" style="width: 10%;"></div>
          </div>
          <div class="mode-switch-group">
            <button class="mode-btn active" id="skillsModeSlider">
              <i class="fa-solid fa-film"></i> Slider
            </button>
            <button class="mode-btn" id="skillsModeGrid">
              <i class="fa-solid fa-table-cells"></i> Grid
            </button>
          </div>
        </div>

        <!-- CONNECTING BRIDGE: EXPLORE FULL SERVICES DIRECTORY -->
        <div class="service-ecosystem-bar mt-4 p-4 rounded-3" style="background: linear-gradient(135deg, rgba(14, 21, 38, 0.95) 0%, rgba(8, 13, 26, 0.98) 100%); border: 1px solid var(--border-gold); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
          <div class="row align-items-center g-3">
            <div class="col-lg-7">
              <div class="d-flex align-items-center gap-2 mb-2">
                <span class="badge" style="background: rgba(212, 175, 55, 0.15); color: var(--gold-light); border: 1px solid var(--border-gold); font-size: 11px;">
                  <i class="fa-solid fa-network-wired me-1"></i> TAILORED SOLUTIONS
                </span>
                <span style="font-size: 12px; color: var(--text-dim);">
                  <?php echo count($services_catalog); ?> Dedicated Services &bull; Custom Proposals Within 24 Hours
                </span>
              </div>
              <h3 style="font-family: var(--font-display); font-size: 1.25rem; color: #fff; margin: 0 0 6px 0;">
                Not Sure Which Service Fits Your Current Business Goal?
              </h3>
              <p style="font-size: 13px; color: var(--text-muted); margin: 0; line-height: 1.6;">
                Browse our complete Services Directory or speak directly with our team for an honest recommendation and itemized quotation.
              </p>
            </div>
            <div class="col-lg-5 text-lg-end">
              <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
                <a href="<?php echo $base_path; ?>services" class="btn-gold" style="padding: 10px 20px; font-size: 13px;">
                  <i class="fa-solid fa-list-check me-1"></i> Explore All <?php echo count($services_catalog); ?> Services
                </a>
                <a href="<?php echo $base_path; ?>contact" class="btn-luxury-outline" style="padding: 10px 18px; font-size: 13px;">
                  <i class="fa-solid fa-file-signature me-1"></i> Request a Quote
                </a>
              </div>
            </div>
          </div>

          <!-- Quick Service Pills Jump Bar -->
          <div class="pt-3 mt-3 border-top border-secondary border-opacity-25 d-flex flex-wrap align-items-center gap-2">
            <span style="font-size: 11px; color: var(--gold-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">Popular Services:</span>
            <a href="<?php echo $base_path; ?>service/website-development" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Website Design &amp; Development</a>
            <a href="<?php echo $base_path; ?>service/quotation-billing-invoice-software" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Quotation &amp; GST Billing Software</a>
            <a href="<?php echo $base_path; ?>service/wordpress-development" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Custom WordPress</a>
            <a href="<?php echo $base_path; ?>service/ecommerce-development" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">WooCommerce &amp; E-Commerce</a>
            <a href="<?php echo $base_path; ?>service/technical-seo" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Technical SEO</a>
            <a href="<?php echo $base_path; ?>service/local-seo" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Google Maps Local SEO</a>
            <a href="<?php echo $base_path; ?>service/google-ads" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Google Ads (PPC)</a>
            <a href="<?php echo $base_path; ?>service/paid-social-media" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Paid Social Media Ads</a>
            <a href="<?php echo $base_path; ?>service/branding-design" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Brand Identity</a>
            <a href="<?php echo $base_path; ?>service/whatsapp-automation" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">WhatsApp Automation</a>
          </div>
        </div>

      </div>
    </section>

    <!-- 4. WHY CHOOSE WEB OPTIMIZER & OUR WORKING PROCESS -->
    <section class="section-wrap section-about-luminous" id="about">
      <div class="container">
        <div class="text-center mb-5" style="max-width: 840px; margin-left: auto; margin-right: auto;">
          <span class="about-luminous-tag"><i class="fa-solid fa-award"></i> Why Choose Web Optimizer</span>
          <h2 class="about-luminous-title">Built on Clean Engineering, Honest Advice &amp; Measurable Business Results</h2>
          <p class="about-luminous-desc">
            Since 2017, <strong>Web Optimizer</strong> has helped over 448 businesses replace slow, ineffective templates with custom-engineered websites, automated billing software, and transparent digital marketing campaigns.
          </p>
        </div>

        <div class="row g-4 align-items-center">
          <!-- Left Column: Why Choose Us Pillars & Founder Credibility -->
          <div class="col-lg-6">
            <div class="row g-3 mb-4">
              <div class="col-sm-6">
                <div class="about-card-white h-100">
                  <div class="about-icon-orb orb-blue">
                    <i class="fa-solid fa-bolt"></i>
                  </div>
                  <h4>Fast, Mobile-First Websites</h4>
                  <p>We write clean, lightweight code with zero template bloat—achieving sub-second loading speeds and 95–100 Core Web Vitals scores.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="about-card-white h-100">
                  <div class="about-icon-orb orb-emerald">
                    <i class="fa-solid fa-shield-halved"></i>
                  </div>
                  <h4>100% Ownership &amp; Security</h4>
                  <p>You retain full ownership of your domain, source code, database, and ad accounts, protected by enterprise WAF security and daily backups.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="about-card-white h-100">
                  <div class="about-icon-orb orb-purple">
                    <i class="fa-solid fa-chart-line"></i>
                  </div>
                  <h4>Focused on Real Enquiries</h4>
                  <p>Every design decision, SEO keyword, and ad campaign is built to increase qualified phone calls, WhatsApp chats, and customer orders.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="about-card-white h-100">
                  <div class="about-icon-orb orb-amber">
                    <i class="fa-solid fa-user-tie"></i>
                  </div>
                  <h4>Direct Senior Specialist Access</h4>
                  <p>Communicate directly with Founder &amp; Senior Web Developer Hrushikesh Swain—no junior account-manager delays or miscommunication.</p>
                </div>
              </div>
            </div>

            <!-- Founder Credibility Card -->
            <div class="founder-seal-card">
              <div class="founder-seal-avatar">
                <i class="fa-solid fa-user-check"></i>
              </div>
              <div class="founder-seal-info">
                <h5>Hrushikesh Swain &bull; Founder &amp; Lead Architect</h5>
                <p>8+ Years Experience &bull; 158+ Projects Delivered Across Odisha &amp; Global Markets</p>
                <div class="founder-seal-badges">
                  <a href="<?php echo $base_path; ?>about" class="badge-google-verified" style="text-decoration:none;"><i class="fa-solid fa-building-user"></i> Read Full About Us Story &rarr;</a>
                  <a href="https://wa.me/917735973818?text=Hello%20Hrushikesh%2C%20I%20would%20like%20to%20discuss%20a%20project%20for%20my%20business." target="_blank" rel="noopener noreferrer" style="color:#15803d; font-size:11.5px; font-weight:700; text-decoration:none; display:inline-flex; align-items:center; gap:4px; margin-left:8px;">
                    <i class="fa-brands fa-whatsapp"></i> Chat Direct (+91 7735973818)
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column: Our 4-Step Working Process -->
          <div class="col-lg-6">
            <div class="protocol-steps-container">
              <div class="protocol-step-item">
                <div class="protocol-step-num">01</div>
                <div class="protocol-step-card">
                  <h5>Discovery, Audit &amp; Clear Project Roadmap</h5>
                  <p>We review your business objectives, target customers, and existing digital presence to provide an itemized scope, timeline, and transparent quotation.</p>
                </div>
              </div>

              <div class="protocol-step-item">
                <div class="protocol-step-num">02</div>
                <div class="protocol-step-card">
                  <h5>Customer-Focused UI/UX Design &amp; Copywriting</h5>
                  <p>We design clean, mobile-responsive layouts paired with persuasive, easy-to-read business content that guides visitors toward contacting you.</p>
                </div>
              </div>

              <div class="protocol-step-item">
                <div class="protocol-step-num">03</div>
                <div class="protocol-step-card">
                  <h5>Custom Development, SEO &amp; System Integration</h5>
                  <p>Our engineers build your website, e-commerce store, or custom GST billing application with fast code, technical SEO schema, and WhatsApp/CRM connectivity.</p>
                </div>
              </div>

              <div class="protocol-step-item">
                <div class="protocol-step-num">04</div>
                <div class="protocol-step-card">
                  <h5>Thorough QA Testing, Launch &amp; Ongoing Support</h5>
                  <p>After multi-device speed and security testing, we launch your project smoothly, train your staff, and support your ongoing lead generation growth.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 5. INDUSTRIES WE SERVE -->
    <section class="section-wrap" id="industries">
      <div class="container">
        <div class="section-header text-center mb-5">
          <span class="section-tag"><i class="fa-solid fa-industry"></i> Industries We Serve</span>
          <h2 class="section-title-lg">Tailored Digital &amp; Software Solutions for Key Industries</h2>
          <p class="section-desc mx-auto" style="max-width: 820px;">
            Every industry has different buyer expectations and operational workflows. We customize our websites, billing applications, and marketing campaigns to fit your sector:
          </p>
        </div>

        <div class="row g-4">
          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4">
              <div class="dropdown-item-icon mb-3" style="width:44px; height:44px; font-size:18px;">
                <i class="fa-solid fa-hospital"></i>
              </div>
              <h3 style="font-size: 1.15rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Healthcare, Hospitals &amp; Clinics</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.65; margin: 0;">
                Patient appointment booking websites, doctor profile directories, diagnostic billing software, and Local Google Maps SEO for hospitals and specialty clinics.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4">
              <div class="dropdown-item-icon mb-3" style="width:44px; height:44px; font-size:18px;">
                <i class="fa-solid fa-gears"></i>
              </div>
              <h3 style="font-size: 1.15rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Manufacturing, Steel &amp; Industrial B2B</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.65; margin: 0;">
                Technical product catalog portals, B2B RFQ enquiry systems, custom GST quotation/invoicing software, and national B2B search optimization.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4">
              <div class="dropdown-item-icon mb-3" style="width:44px; height:44px; font-size:18px;">
                <i class="fa-solid fa-bag-shopping"></i>
              </div>
              <h3 style="font-size: 1.15rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Retail, Wholesale &amp; E-Commerce</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.65; margin: 0;">
                WooCommerce and Shopify stores, barcode &amp; GST billing POS web apps, UPI payment integration, and ROI-focused Google Shopping &amp; Meta Ads.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4">
              <div class="dropdown-item-icon mb-3" style="width:44px; height:44px; font-size:18px;">
                <i class="fa-solid fa-hotel"></i>
              </div>
              <h3 style="font-size: 1.15rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Hotels, Resorts &amp; Hospitality</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.65; margin: 0;">
                Direct room &amp; tour booking engines that eliminate third-party OTA commissions, Instagram visual marketing, and Google review growth.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4">
              <div class="dropdown-item-icon mb-3" style="width:44px; height:44px; font-size:18px;">
                <i class="fa-solid fa-building"></i>
              </div>
              <h3 style="font-size: 1.15rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Real Estate, Builders &amp; Interiors</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.65; margin: 0;">
                Project showcase portals, interactive floor-plan brochures, custom square-foot interior quotation software, and qualified buyer site-visit lead campaigns.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4">
              <div class="dropdown-item-icon mb-3" style="width:44px; height:44px; font-size:18px;">
                <i class="fa-solid fa-graduation-cap"></i>
              </div>
              <h3 style="font-size: 1.15rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Education, Colleges &amp; Coaching</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.65; margin: 0;">
                Student admission portals, online fee &amp; receipt management, course landing pages, and seasonal student enrollment advertising across Odisha.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4">
              <div class="dropdown-item-icon mb-3" style="width:44px; height:44px; font-size:18px;">
                <i class="fa-solid fa-truck-fast"></i>
              </div>
              <h3 style="font-size: 1.15rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Logistics, Ports &amp; Supply Chain</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.65; margin: 0;">
                Consignment tracking portals, fleet and contractor billing web applications, and corporate B2B positioning for transport and maritime enterprises.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="deliverable-card h-100 p-4">
              <div class="dropdown-item-icon mb-3" style="width:44px; height:44px; font-size:18px;">
                <i class="fa-solid fa-scale-balanced"></i>
              </div>
              <h3 style="font-size: 1.15rem; color: #fff; font-weight: 700; margin-bottom: 8px;">CA, Legal &amp; Consulting Firms</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.65; margin: 0;">
                Authoritative corporate websites, client document portals, recurring retainer invoicing systems, and LinkedIn executive branding.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 6. PORTFOLIO & SUCCESS STORIES (50 PROVEN DEPLOYMENTS) -->
    <section class="section-wrap" id="portfolio">
      <div class="container">
        <div class="section-header">
          <span class="section-tag"><i class="fa-solid fa-briefcase"></i> Portfolio &amp; Success Stories</span>
          <h2 class="section-title-lg">Featured Client Projects &amp; Verified Outcomes</h2>
          <p class="section-desc">
            Explore 50 website engineering deployments, e-commerce stores, custom business portals, and local SEO growth campaigns delivered across Odisha and India.
          </p>
        </div>

        <!-- Filter Buttons & Instant Search Bar -->
        <div class="portfolio-filter-nav" id="portfolioFilterNav">
          <?php foreach ($portfolio_categories as $pKey => $pCat): 
            $cCount = ($pKey === 'all') ? count($portfolio_cases) : 0;
            if ($pKey !== 'all') {
              foreach ($portfolio_cases as $pc) {
                if ($pc['category'] === $pKey) $cCount++;
              }
            }
          ?>
            <button class="port-filter-btn <?php echo ($pKey === 'all') ? 'active' : ''; ?>" data-filter="<?php echo $pKey; ?>">
              <i class="fa-solid <?php echo $pCat['icon']; ?>"></i> <?php echo $pCat['name']; ?> <span class="count-badge"><?php echo $cCount; ?></span>
            </button>
          <?php endforeach; ?>
        </div>

        <div class="port-search-bar">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" id="portfolioSearchInput" class="port-search-input" placeholder="Search 50 case studies by industry, city, or service (e.g. Bhubaneswar, Healthcare, WooCommerce, SEO)...">
        </div>

        <!-- Portfolio Slider Wrapper -->
        <div class="slider-wrapper">
          <button class="slider-arrow arrow-left" id="portPrevArrow" aria-label="Previous Case Study">
            <i class="fa-solid fa-chevron-left"></i>
          </button>

          <div class="slider-track" id="portfolioTrack">
            <?php foreach ($portfolio_cases as $cs): 
              $badge_class = 'badge-dev';
              if ($cs['category'] === 'ecommerce') $badge_class = 'badge-digital';
              else if ($cs['category'] === 'seo') $badge_class = 'badge-biz';
              else if ($cs['category'] === 'marketing') $badge_class = 'badge-service';
              else if ($cs['category'] === 'branding') $badge_class = 'badge-biz';
            ?>
              <div class="project-card" 
                   data-category="<?php echo htmlspecialchars($cs['category']); ?>" 
                   data-title="<?php echo htmlspecialchars(strtolower($cs['title'] . ' ' . $cs['client'] . ' ' . $cs['city'] . ' ' . implode(' ', $cs['tags']))); ?>" 
                   data-domain="<?php echo htmlspecialchars($cs['client']); ?>">
                <div class="project-card-thumb">
                  <img src="<?php echo $base_path . $cs['image']; ?>" 
                       alt="<?php echo htmlspecialchars($cs['title'] . ' - ' . $cs['client'] . ' (' . $cs['city'] . ', Odisha)'); ?>" 
                       title="<?php echo htmlspecialchars($cs['title'] . ' | Case Study by Web Optimizer'); ?>"
                       draggable="false"
                       loading="lazy">
                </div>
                <div class="project-card-header">
                  <span class="sector-badge <?php echo $badge_class; ?>">
                    <i class="fa-solid fa-award"></i> <?php echo htmlspecialchars($cs['badge']); ?>
                  </span>
                  <span class="badge" style="background: rgba(212, 175, 55, 0.12); color: var(--gold-light); font-size: 10px; border: 1px solid var(--border-gold);">
                    <i class="fa-solid fa-location-dot me-1"></i> <?php echo htmlspecialchars($cs['city']); ?>, Odisha
                  </span>
                </div>
                <div class="project-card-body d-flex flex-column justify-content-between flex-grow-1">
                  <div>
                    <h3 class="project-card-title"><?php echo htmlspecialchars($cs['title']); ?></h3>
                    <div class="project-card-domain text-gold" style="font-size: 11.5px; font-weight: 600; margin-bottom: 8px;">
                      <i class="fa-solid fa-building me-1"></i> Client: <?php echo htmlspecialchars($cs['client']); ?>
                    </div>
                    <p class="project-card-desc"><?php echo htmlspecialchars($cs['desc']); ?></p>

                    <div class="p-2 mb-3 rounded-2" style="background: rgba(8, 13, 26, 0.85); border-left: 3px solid var(--gold-primary);">
                      <div style="font-size: 10px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gold-primary); font-weight: 700;">
                        <i class="fa-solid fa-chart-line me-1"></i> Business Outcome:
                      </div>
                      <div style="font-size: 12px; color: #fff; font-weight: 600; margin-top: 2px;">
                        <?php echo $cs['metrics']; ?>
                      </div>
                    </div>

                    <div class="project-tech-tags">
                      <?php foreach ($cs['tags'] as $tag): ?>
                        <span class="tech-pill"><?php echo htmlspecialchars($tag); ?></span>
                      <?php endforeach; ?>
                    </div>
                  </div>

                  <div class="project-card-footer mt-auto pt-3 border-top border-secondary border-opacity-25">
                    <button type="button" class="btn-launch-site w-100 text-center" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="border:none; cursor:pointer;">
                      Discuss a Similar Project <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
                    </button>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <button class="slider-arrow arrow-right" id="portNextArrow" aria-label="Next Case Study">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>

        <div class="no-results-msg" id="portNoResults" style="display:none; text-align:center; padding:50px 20px; color:var(--text-muted);">
          <i class="fa-solid fa-magnifying-glass" style="font-size:32px; color:var(--gold-primary); margin-bottom:12px; display:block;"></i>
          No case studies match your search. Try searching for "Bhubaneswar", "Rourkela", "Healthcare", or "SEO".
        </div>

        <div class="slider-footer-bar">
          <div class="slider-status-indicator">
            <i class="fa-solid fa-microchip" style="color:var(--gold-primary);"></i>
            <span id="portCounterText">Showing 1 - 3 of <?php echo count($portfolio_cases); ?> Case Studies</span>
          </div>
          <div class="progress-bar-track">
            <div class="progress-bar-fill" id="portProgressFill" style="width: 10%;"></div>
          </div>
          <div class="mode-switch-group">
            <button class="mode-btn active" id="portModeSlider">
              <i class="fa-solid fa-film"></i> Slider
            </button>
            <button class="mode-btn" id="portModeGrid">
              <i class="fa-solid fa-table-cells"></i> Grid
            </button>
          </div>
        </div>

      </div>
    </section>

    <!-- 7. CLIENT TESTIMONIALS SECTION -->
    <section class="section-wrap" id="testimonials" style="background: rgba(8, 13, 26, 0.45);">
      <div class="container">
        <div class="section-header text-center mb-5">
          <span class="section-tag"><i class="fa-solid fa-quote-left"></i> Client Feedback</span>
          <h2 class="section-title-lg">What Business Owners Say About Working With Us</h2>
          <p class="section-desc mx-auto" style="max-width: 800px;">
            We measure our work by the speed of our websites, the reliability of our software, and the growth of our clients' daily enquiries.
          </p>
        </div>

        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="deliverable-card h-100 p-4 d-flex flex-column justify-content-between">
              <div>
                <div class="mb-3" style="color: var(--gold-primary); font-size: 13px;">
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p style="font-size: 14px; color: var(--text-cream); line-height: 1.75; font-style: italic; margin-bottom: 18px;">
                  "Our previous website took over 6 seconds to open on mobile and barely brought any patient enquiries. Web Optimizer rebuilt our entire portal and optimized our Google Business Profile. The site now opens in under a second and our daily appointment calls have grown steadily."
                </p>
              </div>
              <div class="pt-3 border-top border-secondary border-opacity-25">
                <div style="font-weight: 700; color: #fff; font-size: 14px;">Managing Director</div>
                <div style="font-size: 12px; color: var(--gold-light);">Multi-Specialty Healthcare &amp; Diagnostic Center &bull; Bhubaneswar</div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="deliverable-card h-100 p-4 d-flex flex-column justify-content-between">
              <div>
                <div class="mb-3" style="color: var(--gold-primary); font-size: 13px;">
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p style="font-size: 14px; color: var(--text-cream); line-height: 1.75; font-style: italic; margin-bottom: 18px;">
                  "Preparing B2B quotations and GST invoices in Excel used to take our sales team hours every day. Hrushikesh and his team built a custom quotation and billing web application tailored to our exact steel and fabrication items. Now we send branded WhatsApp PDF quotes in two minutes."
                </p>
              </div>
              <div class="pt-3 border-top border-secondary border-opacity-25">
                <div style="font-weight: 700; color: #fff; font-size: 14px;">Partner &amp; Operations Head</div>
                <div style="font-size: 12px; color: var(--gold-light);">Heavy Engineering &amp; Fabrication Enterprise &bull; Rourkela</div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="deliverable-card h-100 p-4 d-flex flex-column justify-content-between">
              <div>
                <div class="mb-3" style="color: var(--gold-primary); font-size: 13px;">
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p style="font-size: 14px; color: var(--text-cream); line-height: 1.75; font-style: italic; margin-bottom: 18px;">
                  "What sets Web Optimizer apart is that you speak directly to a senior developer who understands both technical code and business ROI. They redesigned our hospitality booking website and set up local SEO, helping us drive direct room bookings without paying heavy OTA commissions."
                </p>
              </div>
              <div class="pt-3 border-top border-secondary border-opacity-25">
                <div style="font-weight: 700; color: #fff; font-size: 14px;">Founder &amp; General Manager</div>
                <div style="font-size: 12px; color: var(--gold-light);">Beach Resort &amp; Hospitality Group &bull; Puri &amp; Konark</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 8. ODISHA 50 LOCATIONS NETWORK -->
    <section class="section-wrap" id="locations-coverage">
      <div class="container">
        <div class="section-header text-center mb-5">
          <span class="section-tag"><i class="fa-solid fa-map-location-dot"></i> Local &amp; Regional Reach</span>
          <h2 class="section-title-lg">Serving Businesses Across All 50 Locations in Odisha &amp; Beyond</h2>
          <p class="section-desc mx-auto" style="max-width: 800px;">
            Headquartered in Bhubaneswar, Web Optimizer supports businesses, hospitals, manufacturers, retailers, and institutions across all 30 districts of Odisha as well as national and international markets.
          </p>
        </div>

        <!-- 6 Featured Regional Capitals -->
        <div class="row g-3 justify-content-center text-center mb-4">
          <div class="col-6 col-lg-2 col-md-4">
            <a href="<?php echo $base_path; ?>location/bhubaneswar" class="city-capsule-card">
              <div class="city-capsule-name">Bhubaneswar</div>
              <div class="city-capsule-tag">Capital &bull; IT HQ</div>
              <span class="city-live-status"><span class="gold-dot" style="width:6px;height:6px;display:inline-block;background:#10b981;border-radius:50%;"></span> Active Hub</span>
            </a>
          </div>
          <div class="col-6 col-lg-2 col-md-4">
            <a href="<?php echo $base_path; ?>location/cuttack" class="city-capsule-card">
              <div class="city-capsule-name">Cuttack</div>
              <div class="city-capsule-tag">Commercial Capital</div>
              <span class="city-live-status"><span class="gold-dot" style="width:6px;height:6px;display:inline-block;background:#10b981;border-radius:50%;"></span> Active Hub</span>
            </a>
          </div>
          <div class="col-6 col-lg-2 col-md-4">
            <a href="<?php echo $base_path; ?>location/rourkela" class="city-capsule-card">
              <div class="city-capsule-name">Rourkela</div>
              <div class="city-capsule-tag">Steel &amp; Industry</div>
              <span class="city-live-status"><span class="gold-dot" style="width:6px;height:6px;display:inline-block;background:#10b981;border-radius:50%;"></span> Active Hub</span>
            </a>
          </div>
          <div class="col-6 col-lg-2 col-md-4">
            <a href="<?php echo $base_path; ?>location/berhampur" class="city-capsule-card">
              <div class="city-capsule-name">Berhampur</div>
              <div class="city-capsule-tag">Southern Hub</div>
              <span class="city-live-status"><span class="gold-dot" style="width:6px;height:6px;display:inline-block;background:#10b981;border-radius:50%;"></span> Active Hub</span>
            </a>
          </div>
          <div class="col-6 col-lg-2 col-md-4">
            <a href="<?php echo $base_path; ?>location/sambalpur" class="city-capsule-card">
              <div class="city-capsule-name">Sambalpur</div>
              <div class="city-capsule-tag">Western Capital</div>
              <span class="city-live-status"><span class="gold-dot" style="width:6px;height:6px;display:inline-block;background:#10b981;border-radius:50%;"></span> Active Hub</span>
            </a>
          </div>
          <div class="col-6 col-lg-2 col-md-4">
            <a href="<?php echo $base_path; ?>location/puri" class="city-capsule-card">
              <div class="city-capsule-name">Puri</div>
              <div class="city-capsule-tag">Tourism &amp; Hospitality</div>
              <span class="city-live-status"><span class="gold-dot" style="width:6px;height:6px;display:inline-block;background:#10b981;border-radius:50%;"></span> Active Hub</span>
            </a>
          </div>
        </div>

        <!-- Statewide 50 Locations Interactive Cloud -->
        <div class="statewide-cloud-box">
          <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
            <div class="text-start">
              <h3 style="font-family: var(--font-display); font-size: 19px; color: #fff; margin: 0 0 4px 0;">All 50 Service Locations Across Odisha</h3>
              <p style="font-size: 12.5px; color: var(--text-dim); margin: 0;">Select your city below to view localized web development, custom billing software, and SEO services.</p>
            </div>
            <div style="min-width: 260px;">
              <input type="text" id="locationCloudFilter" class="form-control-luxury" placeholder="Quick find city (e.g. Balasore, Paradeep)..." style="padding: 8px 16px; font-size: 12.5px; border-radius: 9999px;">
            </div>
          </div>

          <div class="d-flex flex-wrap justify-content-center" id="locationsCloudContainer">
            <?php 
            if (!empty($odisha_locations)):
              foreach ($odisha_locations as $cSlug => $cData): 
            ?>
              <a href="<?php echo $base_path; ?>location/<?php echo htmlspecialchars($cSlug); ?>" 
                 class="location-pill-link" 
                 data-city="<?php echo strtolower($cData['name'] . ' ' . ($cData['district'] ?? '') . ' ' . ($cData['region'] ?? '')); ?>">
                <i class="fa-solid fa-location-dot" style="color:var(--accent-cyan); font-size:10px; margin-right:4px;"></i>
                <?php echo htmlspecialchars($cData['name']); ?>
              </a>
            <?php 
              endforeach; 
            endif;
            ?>
          </div>

          <div class="mt-4 pt-3 border-top border-secondary border-opacity-25 d-flex justify-content-center gap-3 flex-wrap">
            <a href="<?php echo $base_path; ?>locations" class="btn-gold" style="padding: 10px 24px; font-size: 13px; text-decoration: none;">
              <i class="fa-solid fa-globe"></i> View Full 50-City Directory
            </a>
            <a href="<?php echo $base_path; ?>services" class="btn-luxury-outline" style="padding: 10px 22px; font-size: 13px;">
              <i class="fa-solid fa-layer-group"></i> Explore All <?php echo count($services_catalog); ?> Services
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- 9. BLOG & BUSINESS KNOWLEDGE HUB -->
    <section class="section-wrap" id="insights">
      <div class="container">
        <div class="section-header">
          <span class="section-tag"><i class="fa-solid fa-book-open"></i> Business Knowledge Hub</span>
          <h2 class="section-title-lg">Practical Digital Growth &amp; Software Guides for Business Owners</h2>
          <p class="section-desc">
            Read straightforward, jargon-free articles on website ROI, custom GST billing software, local Google rankings, and lead generation.
          </p>
        </div>

        <div class="slider-wrapper">
          <button class="slider-arrow arrow-left" id="blogPrevArrow" aria-label="Previous Guide">
            <i class="fa-solid fa-chevron-left"></i>
          </button>

          <div class="slider-track" id="blogTrack">
            <?php 
            foreach ($blogs_catalog as $bSlug => $guide): 
            ?>
              <div class="capability-card" data-category="<?php echo htmlspecialchars($guide['category_slug'] ?? 'web'); ?>" style="padding: 22px;">
                <div class="d-flex flex-column h-100 justify-content-between">
                  <div>
                    <a href="<?php echo $base_path; ?>blog/<?php echo $bSlug; ?>" class="d-block blog-card-thumb" style="height: 185px;">
                      <img src="<?php echo $base_path . $guide['image']; ?>" 
                           alt="<?php echo htmlspecialchars($guide['title']); ?>" 
                           title="<?php echo htmlspecialchars($guide['title'] . ' | Web Optimizer Guide'); ?>"
                           draggable="false"
                           loading="lazy">
                      <span class="thumb-badge"><?php echo htmlspecialchars($guide['category']); ?></span>
                    </a>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <span style="font-size: 11px; color: var(--gold-light); font-weight: 600;">
                        <i class="fa-solid fa-circle-check text-gold me-1"></i> BUSINESS GUIDE
                      </span>
                      <span style="font-size: 11px; color: var(--text-dim);">
                        <i class="fa-regular fa-clock me-1"></i> <?php echo htmlspecialchars($guide['read_time']); ?>
                      </span>
                    </div>
                    <h3 style="font-family: var(--font-display); font-size: 1.15rem; color: #fff; font-weight: 700; line-height: 1.35; margin-bottom: 10px;">
                      <a href="<?php echo $base_path; ?>blog/<?php echo $bSlug; ?>" style="color: #fff; text-decoration: none;">
                        <?php echo htmlspecialchars($guide['title']); ?>
                      </a>
                    </h3>
                    <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 14px;">
                      <?php echo htmlspecialchars($guide['excerpt']); ?>
                    </p>
                  </div>
                  <div class="mt-auto pt-3 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                    <span style="font-size: 11.5px; color: var(--text-dim);">
                      By <?php echo htmlspecialchars($guide['author']); ?>
                    </span>
                    <a href="<?php echo $base_path; ?>blog/<?php echo $bSlug; ?>" style="font-size: 12.5px; color: var(--gold-light); font-weight: 700; text-decoration: none;">
                      Read Article &rarr;
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <button class="slider-arrow arrow-right" id="blogNextArrow" aria-label="Next Guide">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>

        <div class="slider-footer-bar">
          <div class="slider-status-indicator">
            <i class="fa-solid fa-book-bookmark" style="color:var(--gold-primary);"></i>
            <span id="blogCounterText">Showing 1 - 3 of <?php echo count($blogs_catalog); ?> Guides</span>
          </div>
          <div class="progress-bar-track">
            <div class="progress-bar-fill" id="blogProgressFill" style="width: 10%;"></div>
          </div>
          <div class="mode-switch-group">
            <button class="mode-btn active" id="blogModeSlider">
              <i class="fa-solid fa-film"></i> Slider
            </button>
            <button class="mode-btn" id="blogModeGrid">
              <i class="fa-solid fa-table-cells"></i> Grid
            </button>
          </div>
        </div>

        <div class="p-4 rounded-3 text-center mt-4" style="background: linear-gradient(135deg, rgba(14, 21, 38, 0.9) 0%, rgba(8, 13, 26, 0.95) 100%); border: 1px solid var(--border-gold);">
          <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 text-start">
            <div>
              <h3 style="font-family: var(--font-display); font-size: 1.2rem; color: #fff; margin: 0 0 4px 0;">
                Explore All <?php echo count($blogs_catalog); ?> Business &amp; Technology Guides
              </h3>
              <p style="font-size: 13px; color: var(--text-muted); margin: 0;">
                Practical articles covering Website Development, GST Billing Software, SEO, Google Ads, E-Commerce, and WhatsApp Automation.
              </p>
            </div>
            <a href="<?php echo $base_path; ?>blog" class="btn-gold" style="padding: 11px 24px; font-size: 13.5px; text-decoration: none; white-space: nowrap;">
              <i class="fa-solid fa-book-open me-1"></i> Visit Blog &amp; Knowledge Hub &rarr;
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- 10. HOMEPAGE FREQUENTLY ASKED QUESTIONS (FAQS) -->
    <section class="section-wrap" id="faqs" style="padding-top: 10px;">
      <div class="container">
        <div class="section-header text-center mb-4">
          <span class="section-tag"><i class="fa-solid fa-circle-question"></i> Frequently Asked Questions</span>
          <h2 class="section-title-lg">Common Questions About Our Services, Process &amp; Pricing</h2>
          <p class="section-desc mx-auto" style="max-width: 780px;">
            Everything you need to know before starting your website, custom software, or digital marketing project with Web Optimizer.
          </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="accordion accordion-luxury" id="homeFaqAccordion">
              <?php foreach ($homepage_faqs as $hfIdx => $hFaq): ?>
                <div class="accordion-item">
                  <h3 class="accordion-header" id="homeFaqHeading<?php echo $hfIdx; ?>">
                    <button class="accordion-button <?php echo ($hfIdx === 0) ? '' : 'collapsed'; ?>" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#homeFaqCollapse<?php echo $hfIdx; ?>" 
                            aria-expanded="<?php echo ($hfIdx === 0) ? 'true' : 'false'; ?>" 
                            aria-controls="homeFaqCollapse<?php echo $hfIdx; ?>">
                      <i class="fa-solid fa-circle-dot me-2 text-gold" style="font-size:12px;"></i>
                      <?php echo htmlspecialchars($hFaq['q']); ?>
                    </button>
                  </h3>
                  <div id="homeFaqCollapse<?php echo $hfIdx; ?>" 
                       class="accordion-collapse collapse <?php echo ($hfIdx === 0) ? 'show' : ''; ?>" 
                       aria-labelledby="homeFaqHeading<?php echo $hfIdx; ?>" 
                       data-bs-parent="#homeFaqAccordion">
                    <div class="accordion-body">
                      <?php echo htmlspecialchars($hFaq['a']); ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 11. CONVERSION-OPTIMIZED ENQUIRY & CONTACT SECTION -->
    <section class="section-wrap" id="contact">
      <div class="container">
        <div class="section-header">
          <span class="section-tag"><i class="fa-solid fa-envelope-open-text"></i> Start Your Project</span>
          <h2 class="section-title-lg">Request a Free Consultation or Project Quote</h2>
          <p class="section-desc">
            Tell us about your business goals. Whether you need a new website, custom billing software, or more customer enquiries from Google and social media, our team will get back to you within 24 hours.
          </p>
        </div>

        <div class="contact-grid">
          <!-- Contact Info Left -->
          <div class="contact-info-card">
            <h3>Talk Directly With Our Experts</h3>
            <p>
              Speak directly with our senior engineering and digital strategy team in Bhubaneswar. We review your requirements and provide practical recommendations with a clear, itemized quote.
            </p>

            <div class="contact-links-list">
              <a href="tel:+917735973818" class="contact-link-row">
                <div class="contact-row-icon"><i class="fa-solid fa-phone"></i></div>
                <div class="contact-row-text">
                  <div class="label">Phone Hotline</div>
                  <div class="val">+91 7735973818</div>
                </div>
              </a>

              <a href="https://wa.me/917735973818" target="_blank" rel="noopener noreferrer" class="contact-link-row">
                <div class="contact-row-icon" style="color:#25d366; background:rgba(37,211,102,0.12); border-color:rgba(37,211,102,0.3);"><i class="fa-brands fa-whatsapp"></i></div>
                <div class="contact-row-text">
                  <div class="label">WhatsApp Direct</div>
                  <div class="val">+91 7735973818 (Instant Chat)</div>
                </div>
              </a>

              <a href="mailto:info@weboptimizer.in" class="contact-link-row">
                <div class="contact-row-icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="contact-row-text">
                  <div class="label">Email Address</div>
                  <div class="val">info@weboptimizer.in</div>
                </div>
              </a>

              <div class="contact-link-row" style="cursor:default;">
                <div class="contact-row-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="contact-row-text">
                  <div class="label">Office Location</div>
                  <div class="val">Bhubaneswar, Odisha, India</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Form Right -->
          <div class="contact-form-wrap">
            <h3>Request a Quote</h3>
            <p style="font-size:13.5px; color:var(--text-muted); margin-bottom:22px;">
              Fill in your details below and we will contact you promptly with a tailored project plan.
            </p>

            <?php if ($form_status === 'success'): ?>
              <div class="form-alert form-alert-success" style="background:rgba(16,185,129,0.15); border:1px solid #10b981; color:#10b981; padding:14px 20px; border-radius:12px; margin-bottom:20px; display:flex; align-items:center; gap:12px; font-weight:600;">
                <i class="fa-solid fa-circle-check" style="font-size:20px;"></i>
                <span>Thank you! Your enquiry has been received. Senior Developer Hrushikesh Swain will review your requirements and contact you shortly.</span>
              </div>
            <?php elseif ($form_status === 'error'): ?>
              <div class="form-alert form-alert-error" style="background:rgba(244,63,94,0.15); border:1px solid #f43f5e; color:#f43f5e; padding:14px 20px; border-radius:12px; margin-bottom:20px; display:flex; align-items:center; gap:12px; font-weight:600;">
                <i class="fa-solid fa-circle-exclamation" style="font-size:20px;"></i>
                <span>Please fill in all required fields (Name, Email, Phone) and try again.</span>
              </div>
            <?php endif; ?>

            <div id="leadFormFeedback" style="display:none; margin-bottom:18px;"></div>

            <form id="leadContactForm" method="POST" action="#contact" onsubmit="handleLeadSubmit(event)" novalidate>
              <!-- Anti-Bot Honeypot Field -->
              <div style="position:absolute; left:-9999px; top:-9999px; opacity:0; pointer-events:none;" aria-hidden="true">
                <label for="leadWebsiteHp">Leave this field blank</label>
                <input type="text" id="leadWebsiteHp" name="website_url_hp" tabindex="-1" autocomplete="off">
              </div>

              <div class="form-field">
                <label for="leadName">Your Name / Company Name *</label>
                <input type="text" id="leadName" name="lead_name" class="form-input" placeholder="e.g. Rajesh Sharma / Acme Enterprises" maxlength="120" required>
              </div>

              <div class="form-field">
                <label for="leadEmail">Business Email *</label>
                <input type="email" id="leadEmail" name="lead_email" class="form-input" placeholder="name@company.com" maxlength="150" required>
              </div>

              <div class="form-field">
                <label for="leadPhone">Phone / WhatsApp Number *</label>
                <input type="tel" id="leadPhone" name="lead_phone" class="form-input" placeholder="+91 77359 73818" maxlength="25" required>
              </div>

              <div class="form-field">
                <label for="leadService">Service You Need *</label>
                <select id="leadService" name="lead_service" class="form-input" style="background:#080d1a;">
                  <option value="Custom Business Website Design & Development">Custom Business Website Design &amp; Development</option>
                  <option value="Custom Quotation, Billing & GST Invoice Software">Custom Quotation, Billing &amp; GST Invoice Software</option>
                  <?php foreach ($services_catalog as $sKey => $sItem): ?>
                    <?php if ($sKey !== 'quotation-billing-invoice-software' && $sKey !== 'website-development'): ?>
                      <option value="<?php echo htmlspecialchars($sItem['title']); ?>"><?php echo htmlspecialchars($sItem['title']); ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-field">
                <label for="leadMessage">Project Details / Requirements</label>
                <textarea id="leadMessage" name="lead_message" class="form-input" maxlength="2000" placeholder="Briefly describe your business, what you want to build or promote, or share your existing website URL..." required></textarea>
              </div>

              <div class="d-flex flex-wrap gap-2">
                <button type="submit" id="leadSubmitBtn" name="lead_submit" class="btn-gold" style="flex:1 1 220px; justify-content:center; padding:14px;">
                  <i class="fa-solid fa-paper-plane"></i> Request a Free Quote
                </button>
                <button type="button" onclick="sendLeadViaWhatsApp()" class="btn-luxury-outline" style="flex:1 1 180px; justify-content:center; padding:14px; border-color:#25d366; color:#25d366;">
                  <i class="fa-brands fa-whatsapp"></i> Discuss on WhatsApp
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

<!-- Home Specific JS: Sliders (Capabilities, 50 Case Studies Portfolio, and Blog Guides) -->
<script>
document.addEventListener('DOMContentLoaded', function() {

  // ==========================================
  // 1. CAPABILITIES SLIDER CONTROLLER
  // ==========================================
  (function() {
    const filterBtns = document.querySelectorAll('.skills-filter-btn');
    const cards = document.querySelectorAll('#skillsTrack .capability-card');
    const track = document.getElementById('skillsTrack');
    const prevBtn = document.getElementById('skillsPrevArrow');
    const nextBtn = document.getElementById('skillsNextArrow');
    const progressFill = document.getElementById('skillsProgressFill');
    const counterText = document.getElementById('skillsCounterText');
    const modeSlider = document.getElementById('skillsModeSlider');
    const modeGrid = document.getElementById('skillsModeGrid');

    function updateSkillsCounter() {
      if (!counterText) return;
      const visible = Array.from(cards).filter(c => c.style.display !== 'none');
      const total = visible.length;
      counterText.textContent = 'Showing 1 - ' + Math.min(total, 3) + ' of ' + total + ' Services';
    }

    filterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const filter = this.getAttribute('data-filter');
        cards.forEach(card => {
          const cat = card.getAttribute('data-category') || '';
          if (filter === 'all' || cat === filter || cat.split(' ').includes(filter)) {
            card.style.display = '';
          } else {
            card.style.display = 'none';
          }
        });

        updateSkillsCounter();
        if (track) {
          track.scrollLeft = 0;
          if (progressFill) progressFill.style.width = '10%';
        }
      });
    });

    if (prevBtn && nextBtn && track) {
      prevBtn.addEventListener('click', () => {
        track.scrollBy({ left: -380, behavior: 'smooth' });
      });
      nextBtn.addEventListener('click', () => {
        track.scrollBy({ left: 380, behavior: 'smooth' });
      });

      track.addEventListener('scroll', () => {
        const maxScroll = track.scrollWidth - track.clientWidth;
        if (maxScroll > 0 && progressFill) {
          const pct = Math.max(5, Math.min(100, Math.round((track.scrollLeft / maxScroll) * 100)));
          progressFill.style.width = pct + '%';
        }
      }, { passive: true });
    }

    if (modeSlider && modeGrid && track) {
      modeGrid.addEventListener('click', () => {
        modeGrid.classList.add('active');
        modeSlider.classList.remove('active');
        track.classList.add('grid-mode');
        if (prevBtn) prevBtn.style.display = 'none';
        if (nextBtn) nextBtn.style.display = 'none';
      });
      modeSlider.addEventListener('click', () => {
        modeSlider.classList.add('active');
        modeGrid.classList.remove('active');
        track.classList.remove('grid-mode');
        if (prevBtn) prevBtn.style.display = 'flex';
        if (nextBtn) nextBtn.style.display = 'flex';
      });
    }

    updateSkillsCounter();
  })();


  // ==========================================
  // 2. SIGNATURE PORTFOLIO (50 CASE STUDIES) SLIDER CONTROLLER
  // ==========================================
  (function() {
    const filterBtns = document.querySelectorAll('#portfolioFilterNav .port-filter-btn');
    const cards = document.querySelectorAll('#portfolioTrack .project-card');
    const track = document.getElementById('portfolioTrack');
    const prevBtn = document.getElementById('portPrevArrow');
    const nextBtn = document.getElementById('portNextArrow');
    const progressFill = document.getElementById('portProgressFill');
    const counterText = document.getElementById('portCounterText');
    const modeSlider = document.getElementById('portModeSlider');
    const modeGrid = document.getElementById('portModeGrid');
    const searchInput = document.getElementById('portfolioSearchInput');
    const noResults = document.getElementById('portNoResults');

    function updatePortCounter() {
      if (!counterText) return;
      const visible = Array.from(cards).filter(c => c.style.display !== 'none');
      const total = visible.length;
      counterText.textContent = 'Showing 1 - ' + Math.min(total, 3) + ' of ' + total + ' Case Studies';
      if (noResults) {
        noResults.style.display = (total === 0) ? 'block' : 'none';
      }
    }

    function applyFilters() {
      const activeBtn = document.querySelector('#portfolioFilterNav .port-filter-btn.active');
      const filter = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';
      const query = (searchInput ? searchInput.value : '').toLowerCase().trim();

      cards.forEach(card => {
        const cat = card.getAttribute('data-category') || '';
        const titleData = (card.getAttribute('data-title') || '').toLowerCase();
        const matchesCat = (filter === 'all' || cat === filter);
        const matchesQuery = (!query || titleData.includes(query));

        if (matchesCat && matchesQuery) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });

      updatePortCounter();
      if (track) {
        track.scrollLeft = 0;
        if (progressFill) progressFill.style.width = '10%';
      }
    }

    filterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        applyFilters();
      });
    });

    if (searchInput) {
      searchInput.addEventListener('input', applyFilters);
    }

    if (prevBtn && nextBtn && track) {
      prevBtn.addEventListener('click', () => {
        track.scrollBy({ left: -380, behavior: 'smooth' });
      });
      nextBtn.addEventListener('click', () => {
        track.scrollBy({ left: 380, behavior: 'smooth' });
      });

      track.addEventListener('scroll', () => {
        const maxScroll = track.scrollWidth - track.clientWidth;
        if (maxScroll > 0 && progressFill) {
          const pct = Math.max(5, Math.min(100, Math.round((track.scrollLeft / maxScroll) * 100)));
          progressFill.style.width = pct + '%';
        }
      }, { passive: true });
    }

    if (modeSlider && modeGrid && track) {
      modeGrid.addEventListener('click', () => {
        modeGrid.classList.add('active');
        modeSlider.classList.remove('active');
        track.classList.add('grid-mode');
        if (prevBtn) prevBtn.style.display = 'none';
        if (nextBtn) nextBtn.style.display = 'none';
      });
      modeSlider.addEventListener('click', () => {
        modeSlider.classList.add('active');
        modeGrid.classList.remove('active');
        track.classList.remove('grid-mode');
        if (prevBtn) prevBtn.style.display = 'flex';
        if (nextBtn) nextBtn.style.display = 'flex';
      });
    }

    updatePortCounter();
  })();


  // ==========================================
  // 3. EXECUTIVE BLOG GUIDES SLIDER CONTROLLER
  // ==========================================
  (function() {
    const track = document.getElementById('blogTrack');
    const cards = document.querySelectorAll('#blogTrack .capability-card');
    const prevBtn = document.getElementById('blogPrevArrow');
    const nextBtn = document.getElementById('blogNextArrow');
    const progressFill = document.getElementById('blogProgressFill');
    const counterText = document.getElementById('blogCounterText');
    const modeSlider = document.getElementById('blogModeSlider');
    const modeGrid = document.getElementById('blogModeGrid');

    function updateBlogCounter() {
      if (!counterText) return;
      const visible = Array.from(cards).filter(c => c.style.display !== 'none');
      const total = visible.length;
      counterText.textContent = 'Showing 1 - ' + Math.min(total, 3) + ' of ' + total + ' Guides';
    }

    if (prevBtn && nextBtn && track) {
      prevBtn.addEventListener('click', () => {
        track.scrollBy({ left: -380, behavior: 'smooth' });
      });
      nextBtn.addEventListener('click', () => {
        track.scrollBy({ left: 380, behavior: 'smooth' });
      });

      track.addEventListener('scroll', () => {
        const maxScroll = track.scrollWidth - track.clientWidth;
        if (maxScroll > 0 && progressFill) {
          const pct = Math.max(5, Math.min(100, Math.round((track.scrollLeft / maxScroll) * 100)));
          progressFill.style.width = pct + '%';
        }
      }, { passive: true });
    }

    if (modeSlider && modeGrid && track) {
      modeGrid.addEventListener('click', () => {
        modeGrid.classList.add('active');
        modeSlider.classList.remove('active');
        track.classList.add('grid-mode');
        if (prevBtn) prevBtn.style.display = 'none';
        if (nextBtn) nextBtn.style.display = 'none';
      });
      modeSlider.addEventListener('click', () => {
        modeSlider.classList.add('active');
        modeGrid.classList.remove('active');
        track.classList.remove('grid-mode');
        if (prevBtn) prevBtn.style.display = 'flex';
        if (nextBtn) nextBtn.style.display = 'flex';
      });
    }

    updateBlogCounter();
  })();

});
</script>

<?php
require __DIR__ . '/includes/footer.php';
?>
