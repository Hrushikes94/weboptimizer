<?php
/**
 * Web Optimizer - Luxury Website Engineering & Digital Architecture
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain
 */
$page_title = 'Web Optimizer | Premier Website Design & Digital Engineering Company';
$meta_desc = "Web Optimizer is Bhubaneswar's premier website design, custom WordPress engineering, WooCommerce development, and technical SEO agency. Over 158+ bespoke projects delivered. Call +91 7735973818.";
$active_nav = 'home';
$base_path = './';

require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/blogs-data.php';
require_once __DIR__ . '/includes/portfolio-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require __DIR__ . '/includes/header.php';
?>

<main>
    <!-- HERO SECTION -->
    <section class="hero" id="hero">
      <div class="hero-banner-backdrop" style="background-image: url('<?php echo $base_path; ?>assets/images/hero/hero-home.webp');"></div>
      <div class="container hero-grid" style="position: relative; z-index: 2;">
        <div class="hero-left">
          <div class="hero-badge-gold">
            <span class="gold-dot"></span>
            <span>Premier Website Design & Digital Agency</span>
          </div>

          <h1 class="hero-title">
            Architecting <span class="gradient-text-agency">High-Growth Digital Experiences</span> With Speed &amp; Precision.
          </h1>

          <p class="hero-lead">
            <strong>Web Optimizer</strong> builds bespoke WordPress solutions, enterprise WooCommerce platforms, and aggressive technical SEO pipelines for brands that demand performance, aesthetic luxury, and guaranteed conversion.
          </p>

          <div class="hero-actions">
            <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal">
              <i class="fa-solid fa-file-signature"></i> Request Architecture Proposal
            </button>
            <a href="#portfolio" class="btn-luxury-outline">
              <i class="fa-solid fa-briefcase"></i> Explore Featured Portfolio
            </a>
          </div>

          <div class="hero-pills">
            <a href="tel:+917735973818" class="hero-pill">
              <i class="fa-solid fa-phone"></i> +91 7735973818
            </a>
            <a href="https://wa.me/917735973818" target="_blank" rel="noopener noreferrer" class="hero-pill">
              <i class="fa-brands fa-whatsapp" style="color:#25d366;"></i> WhatsApp Direct
            </a>
            <a href="mailto:info@weboptimizer.in" class="hero-pill">
              <i class="fa-solid fa-envelope"></i> info@weboptimizer.in
            </a>
          </div>
        </div>

        <!-- Hero Right: Prominent Banner Visual Frame & Live Agency HUD -->
        <div class="hero-right-wrap">
          <div class="banner-visual-frame mb-3">
            <img src="<?php echo $base_path; ?>assets/images/banners/banner-home.webp" 
                 alt="Web Optimizer Flagship Digital Agency" 
                 class="img-fluid">
            <div class="banner-floating-badge">
              <span class="gold-dot"></span> All 50 Odisha Districts Active &bull; 99.8% Core Web Vitals
            </div>
          </div>
          <div class="hero-stats-grid">
            <div class="stat-card">
              <div class="stat-num">158+</div>
              <div class="stat-desc">Projects Delivered</div>
            </div>
            <div class="stat-card">
              <div class="stat-num">448+</div>
              <div class="stat-desc">Happy Customers</div>
            </div>
            <div class="stat-card">
              <div class="stat-num">&lt;800ms</div>
              <div class="stat-desc">Avg Load Speed</div>
            </div>
            <div class="stat-card">
              <div class="stat-num">99.8%</div>
              <div class="stat-desc">Core Web Vitals</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TRUSTED CLIENT BRANDS MARQUEE (REAL LOGOS FROM WEBOPTIMIZER.IN) -->
    <section class="brands-section">
      <div class="container">
        <span class="brands-tag">Trusted by High-Growth Businesses & Industry Leaders</span>
        <div class="brands-row">
          <div class="brand-logo-item" title="Diesel">
            <img src="https://www.weboptimizer.in/wp-content/uploads/2024/05/diesel_logo.png" alt="Diesel Brand Logo" onerror="this.outerHTML='<span style=&quot;font-family:var(--font-display);font-weight:700;letter-spacing:2px;color:var(--text-muted);font-size:18px;&quot;>DIESEL</span>'">
          </div>
          <div class="brand-logo-item" title="HempMyPET">
            <img src="https://www.weboptimizer.in/wp-content/uploads/2024/05/HempMyPET-Logo-Purp-Gold-logo.png" alt="HempMyPET Logo" onerror="this.outerHTML='<span style=&quot;font-family:var(--font-display);font-weight:700;letter-spacing:1.5px;color:var(--text-muted);font-size:16px;&quot;>HEMP MY PET</span>'">
          </div>
          <div class="brand-logo-item" title="Cornerstone Media">
            <img src="https://www.weboptimizer.in/wp-content/uploads/2024/05/cornerstone-logo.png" alt="Cornerstone Media Logo" onerror="this.outerHTML='<span style=&quot;font-family:var(--font-display);font-weight:700;letter-spacing:1.5px;color:var(--text-muted);font-size:16px;&quot;>CORNERSTONE</span>'">
          </div>
          <div class="brand-logo-item" title="NW Craft Remodel">
            <img src="https://www.weboptimizer.in/wp-content/uploads/2024/05/nwcraftremodel-logo.png" alt="NW Craft Remodel Logo" onerror="this.outerHTML='<span style=&quot;font-family:var(--font-display);font-weight:700;letter-spacing:1.5px;color:var(--text-muted);font-size:16px;&quot;>NW CRAFT REMODEL</span>'">
          </div>
          <div class="brand-logo-item" title="Ratnasoft">
            <img src="https://www.weboptimizer.in/wp-content/uploads/2024/05/ratnasoft-logo1.png" alt="Ratnasoft Logo" onerror="this.outerHTML='<span style=&quot;font-family:var(--font-display);font-weight:700;letter-spacing:1.5px;color:var(--text-muted);font-size:16px;&quot;>RATNASOFT</span>'">
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION: CAPABILITIES & CORE SPECIALTIES SLIDER (DYNAMICALLY CONNECTED TO FULL SERVICES ECOSYSTEM) -->
    <section class="section-wrap" id="specialties">
      <div class="container">
        <div class="section-header">
          <span class="section-tag"><i class="fa-solid fa-crown"></i> Full-Service Digital Agency</span>
          <h2 class="section-title-lg">End-to-End Capabilities & Services</h2>
          <p class="section-desc">
            From bespoke website engineering and aggressive AI Technical SEO to high-conversion performance marketing, luxury brand identity, social media, and WhatsApp automation &mdash; explore our complete ecosystem of <?php echo count($services_catalog); ?> specialized services engineered for measurable commercial impact.
          </p>
        </div>

        <!-- Service Category Filter Tabs (Dynamic from $service_parents) -->
        <div class="portfolio-filter-nav" id="skillsFilterNav" style="margin-bottom: 28px;">
          <button class="port-filter-btn active skills-filter-btn" data-filter="all">
            <i class="fa-solid fa-layer-group"></i> All Capabilities <span class="count-badge"><?php echo count($services_catalog); ?></span>
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
          <button class="slider-arrow arrow-left" id="skillsPrevArrow" aria-label="Previous Specialty">
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
              $subtitle = !empty($svc['overview']) 
                ? $svc['overview'] 
                : (!empty($svc['hero_lead']) ? $svc['hero_lead'] : ($svc['meta_description'] ?? ''));
              if (function_exists('mb_strimwidth')) {
                $subtitle = mb_strimwidth($subtitle, 0, 95, '...');
              } else if (strlen($subtitle) > 95) {
                $subtitle = substr($subtitle, 0, 92) . '...';
              }
            ?>
              <div class="capability-card" data-category="<?php echo htmlspecialchars($cat_slug); ?>">
                <div class="card-crest-top">
                  <div class="card-icon-box">
                    <i class="fa-solid <?php echo htmlspecialchars($svc['icon'] ?? 'fa-gear'); ?>"></i>
                  </div>
                  <span class="card-badge-pill" <?php if ($badge_style) echo 'style="' . $badge_style . '"'; ?>>
                    <?php echo htmlspecialchars($svc['badge'] ?? 'SPECIALTY'); ?>
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
                    Explore Full Service <i class="fa-solid fa-arrow-right" style="margin-left:4px;"></i>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <button class="slider-arrow arrow-right" id="skillsNextArrow" aria-label="Next Specialty">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>

        <!-- Capabilities Slider Footer Controls -->
        <div class="slider-footer-bar">
          <div class="slider-status-indicator">
            <i class="fa-solid fa-microchip" style="color:var(--gold-primary);"></i>
            <span id="skillsCounterText">Showing 1 - 3 of <?php echo count($services_catalog); ?> Capabilities</span>
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

        <!-- CONNECTING BRIDGE: EXPLORE FULL SERVICES DIRECTORY & 50 CITIES -->
        <div class="service-ecosystem-bar mt-4 p-4 rounded-3" style="background: linear-gradient(135deg, rgba(14, 21, 38, 0.95) 0%, rgba(8, 13, 26, 0.98) 100%); border: 1px solid var(--border-gold); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
          <div class="row align-items-center g-3">
            <div class="col-lg-7">
              <div class="d-flex align-items-center gap-2 mb-2">
                <span class="badge" style="background: rgba(212, 175, 55, 0.15); color: var(--gold-light); border: 1px solid var(--border-gold); font-size: 11px;">
                  <i class="fa-solid fa-network-wired me-1"></i> FULL SERVICE INTEGRATION
                </span>
                <span style="font-size: 12px; color: var(--text-dim);">
                  Covering <?php echo count($services_catalog); ?> Dedicated Services Across 50 Odisha Locations
                </span>
              </div>
              <h4 style="font-family: var(--font-display); font-size: 1.25rem; color: #fff; margin: 0 0 6px 0;">
                Looking for a Dedicated Practice or Bespoke Digital Roadmap?
              </h4>
              <p style="font-size: 13px; color: var(--text-muted); margin: 0; line-height: 1.6;">
                Every service features its own dedicated architecture page with transparent deliverables, performance benchmarks, and hyper-local deployment across all 50 Odisha cities.
              </p>
            </div>
            <div class="col-lg-5 text-lg-end">
              <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
                <a href="<?php echo $base_path; ?>services" class="btn-gold" style="padding: 10px 20px; font-size: 13px;">
                  <i class="fa-solid fa-list-check me-1"></i> Full Services Directory (<?php echo count($services_catalog); ?>)
                </a>
                <a href="<?php echo $base_path; ?>locations" class="btn-luxury-outline" style="padding: 10px 18px; font-size: 13px;">
                  <i class="fa-solid fa-map-location-dot me-1"></i> 50 Odisha Locations
                </a>
              </div>
            </div>
          </div>

          <!-- Quick Service Pills Jump Bar -->
          <div class="pt-3 mt-3 border-top border-secondary border-opacity-25 d-flex flex-wrap align-items-center gap-2">
            <span style="font-size: 11px; color: var(--gold-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">Direct Service Links:</span>
            <a href="<?php echo $base_path; ?>service/website-development" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Website Development</a>
            <a href="<?php echo $base_path; ?>service/wordpress-development" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">WordPress CMS</a>
            <a href="<?php echo $base_path; ?>service/ecommerce-development" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">WooCommerce</a>
            <a href="<?php echo $base_path; ?>service/technical-seo" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Technical SEO</a>
            <a href="<?php echo $base_path; ?>service/local-seo" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Local Maps SEO</a>
            <a href="<?php echo $base_path; ?>service/google-ads" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Google Ads (PPC)</a>
            <a href="<?php echo $base_path; ?>service/paid-social-media" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Meta & Social Ads</a>
            <a href="<?php echo $base_path; ?>service/branding-design" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Brand Identity</a>
            <a href="<?php echo $base_path; ?>service/whatsapp-automation" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">WhatsApp Automation</a>
            <a href="<?php echo $base_path; ?>services" class="badge text-decoration-none" style="background: rgba(212,175,55,0.15); border: 1px solid var(--border-gold); color: var(--gold-light); font-size: 11px; padding: 6px 10px;">View All <?php echo count($services_catalog); ?> Services &rarr;</a>
          </div>
        </div>

      </div>
    </section>

    <!-- ==========================================================================
         SECTION: WEB OPTIMIZER PORTFOLIO & CASE STUDIES (FROM WEBOPTIMIZER.IN)
         ========================================================================== -->
    <!-- ==========================================================================
         SECTION: WEB OPTIMIZER PORTFOLIO & CASE STUDIES (50+ PROVEN DEPLOYMENTS)
         ========================================================================== -->
    <section class="section-wrap" id="portfolio">
      <div class="container">
        <div class="section-header">
          <span class="section-tag"><i class="fa-solid fa-briefcase"></i> Signature Portfolio</span>
          <h2 class="section-title-lg">Featured Case Studies & Proven Results</h2>
          <p class="section-desc">
            Explore 50 authentic digital engineering deployments, custom WordPress platforms, high-volume e-commerce stores, and Google Maps local SEO campaigns delivered by Web Optimizer across Odisha and India.
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
          <input type="text" id="portfolioSearchInput" class="port-search-input" placeholder="Search 50 case studies by title, city, industry, or tech (e.g. Sambalpur, Dental, WooCommerce, SEO)...">
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
                       alt="<?php echo htmlspecialchars($cs['title']); ?>" 
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

                    <!-- Proven Metrics Badge -->
                    <div class="p-2 mb-3 rounded-2" style="background: rgba(8, 13, 26, 0.85); border-left: 3px solid var(--gold-primary);">
                      <div style="font-size: 10px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gold-primary); font-weight: 700;">
                        <i class="fa-solid fa-chart-line me-1"></i> Measurable Impact:
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
                      Request Similar Solution <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
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
          No case studies match your query. Try searching for "Bhubaneswar", "Sambalpur", "Dental", or "SEO".
        </div>

        <!-- Portfolio Footer Controller Bar -->
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

    <!-- SECTION: ABOUT WEB OPTIMIZER & WORKING PROCESS -->
    <!-- SECTION 5: THE HIGH-CONTRAST LUMINOUS ICE / PLATINUM SECTION (ABOUT AGENCY & 4-STEP PROTOCOL) -->
    <section class="section-wrap section-about-luminous" id="about">
      <div class="container">
        <div class="text-center mb-5" style="max-width: 820px; margin-left: auto; margin-right: auto;">
          <span class="about-luminous-tag"><i class="fa-solid fa-fingerprint"></i> Engineering DNA &amp; Credibility</span>
          <h2 class="about-luminous-title">Driven by Code Excellence &amp; Measurable ROI Since 2017</h2>
          <p class="about-luminous-desc">
            We eliminate the sluggish, bloated page templates that plague modern websites. Headquartered in Bhubaneswar, <strong>Web Optimizer</strong> combines high-end visual design with full-stack PHP 8.3 &amp; WordPress VIP performance engineering to power rapid business growth across Odisha and India.
          </p>
        </div>

        <div class="row g-4 align-items-center">
          <!-- Left Column: Core Engineering Pillars & Founder Credibility -->
          <div class="col-lg-6">
            <div class="row g-3 mb-4">
              <div class="col-sm-6">
                <div class="about-card-white h-100">
                  <div class="about-icon-orb orb-blue">
                    <i class="fa-solid fa-bolt"></i>
                  </div>
                  <h4>Sub-Second Speed</h4>
                  <p>Core Web Vitals scores in the 90&ndash;100 range with custom server-side caching and ultra-lean CSS/JS pipelines.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="about-card-white h-100">
                  <div class="about-icon-orb orb-emerald">
                    <i class="fa-solid fa-shield-halved"></i>
                  </div>
                  <h4>Enterprise Security</h4>
                  <p>Hardened WordPress core, SSL edge configuration, automated daily cloud snapshots, and zero-vulnerability audits.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="about-card-white h-100">
                  <div class="about-icon-orb orb-purple">
                    <i class="fa-solid fa-chart-line"></i>
                  </div>
                  <h4>Guaranteed Search Rank</h4>
                  <p>Semantic JSON-LD schema, dynamic XML sitemaps, high-intent local keyword dominance, and Google 3-Pack authority.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="about-card-white h-100">
                  <div class="about-icon-orb orb-amber">
                    <i class="fa-solid fa-code"></i>
                  </div>
                  <h4>Direct Senior Dev</h4>
                  <p>Direct communication with Founder &amp; Senior Developer Hrushikesh Swain. Zero account-manager bottlenecks.</p>
                </div>
              </div>
            </div>

            <!-- Founder Credibility Card -->
            <div class="founder-seal-card">
              <div class="founder-seal-avatar">
                <i class="fa-solid fa-user-check"></i>
              </div>
              <div class="founder-seal-info">
                <h5>Hrushikesh Swain &bull; Lead Architect</h5>
                <p>8+ Years Delivering 150+ Enterprise Digital Deployments</p>
                <div class="founder-seal-badges">
                  <span class="badge-google-verified"><i class="fa-solid fa-certificate"></i> Verified Google Partner</span>
                  <a href="https://wa.me/917735973818?text=Hello%20Hrushikesh%2C%20I%20would%20like%20to%20discuss%20a%20digital%20project." target="_blank" rel="noopener noreferrer" style="color:#15803d; font-size:11.5px; font-weight:700; text-decoration:none; display:inline-flex; align-items:center; gap:4px; margin-left:8px;">
                    <i class="fa-brands fa-whatsapp"></i> Chat Direct (+91 7735973818)
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column: 4-Step Engineering Protocol -->
          <div class="col-lg-6">
            <div class="protocol-steps-container">
              <div class="protocol-step-item">
                <div class="protocol-step-num">01</div>
                <div class="protocol-step-card">
                  <h5>Strategic Architecture &amp; Technical Audit</h5>
                  <p>We analyze competitor keyword clusters, crawl budget parameters, conversion drop-offs, and server latency to engineer a bespoke growth roadmap.</p>
                </div>
              </div>

              <div class="protocol-step-item">
                <div class="protocol-step-num">02</div>
                <div class="protocol-step-card">
                  <h5>High-End Digital UI/UX Prototyping</h5>
                  <p>Designing mobile-first interfaces with micro-interactions, responsive typography, and friction-free inquiry flows tailored to your target buyers.</p>
                </div>
              </div>

              <div class="protocol-step-item">
                <div class="protocol-step-num">03</div>
                <div class="protocol-step-card">
                  <h5>Lightweight PHP 8.3 &amp; Headless Engineering</h5>
                  <p>Building tailor-made themes and custom functionality with zero heavy plugins, automated image webp compression, and sub-second paint times.</p>
                </div>
              </div>

              <div class="protocol-step-item">
                <div class="protocol-step-num">04</div>
                <div class="protocol-step-card">
                  <h5>Zero-Downtime Launch &amp; Continuous Scaling</h5>
                  <p>Cloudflare CDN caching, 24/7 uptime monitoring, automated security defenses, and continuous organic Google ranking optimization.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="section-wrap" id="locations-coverage">
      <div class="container">
        <div class="section-header text-center mb-5">
          <span class="section-tag"><i class="fa-solid fa-map-location-dot"></i> Statewide Odisha Network</span>
          <h2 class="section-title-lg">Bespoke Digital Engineering Across 50 Locations in Odisha</h2>
          <p class="section-desc mx-auto" style="max-width: 800px;">
            Headquartered in Bhubaneswar, Web Optimizer empowers businesses, healthcare networks, manufacturers, and institutions with elite website design, custom WordPress engineering, AI SEO, and performance marketing in all 30 districts of Odisha.
          </p>
        </div>

        <!-- 6 Featured Regional Capitals (Luminous City Capsules) -->
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
              <div class="city-capsule-tag">Silk City &amp; Gateway</div>
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

        <!-- Statewide 50 Locations Interactive Cloud with Live Search -->
        <div class="statewide-cloud-box">
          <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
            <div class="text-start">
              <h4 style="font-family: var(--font-display); font-size: 19px; color: #fff; margin: 0 0 4px 0;">All 50 Service Locations Across Odisha</h4>
              <p style="font-size: 12.5px; color: var(--text-dim); margin: 0;">Click any city below to explore localized web design, SEO, and digital growth solutions.</p>
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
              <i class="fa-solid fa-globe"></i> View Full 50-City Directory &amp; District Map
            </a>
            <a href="<?php echo $base_path; ?>services" class="btn-luxury-outline" style="padding: 10px 22px; font-size: 13px;">
              <i class="fa-solid fa-layer-group"></i> Browse All <?php echo count($services_catalog); ?> Services
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="section-wrap" id="insights">
      <div class="container">
        <div class="section-header">
          <span class="section-tag"><i class="fa-solid fa-book-open"></i> Executive Intelligence</span>
          <h2 class="section-title-lg">What Odisha Business Owners Need to Know</h2>
          <p class="section-desc">
            Honest, jargon-free business guides on website ROI, Google ranking, and lead generation &mdash; written specifically for founders and business owners in Odisha. Slide through all <?php echo count($blogs_catalog); ?> practical guides below.
          </p>
        </div>

        <!-- Blog Slider Wrapper -->
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
                      <img src="<?php echo $base_path . $guide['image']; ?>" alt="<?php echo htmlspecialchars($guide['title']); ?>" loading="lazy">
                      <span class="thumb-badge"><?php echo htmlspecialchars($guide['category']); ?></span>
                    </a>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <span style="font-size: 11px; color: var(--gold-light); font-weight: 600;">
                        <i class="fa-solid fa-circle-check text-gold me-1"></i> VERIFIED GUIDE
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
                      Read Guide &rarr;
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

        <!-- Blog Slider Footer Controls -->
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

        <!-- Master Knowledge Hub Callout -->
        <div class="p-4 rounded-3 text-center mt-4" style="background: linear-gradient(135deg, rgba(14, 21, 38, 0.9) 0%, rgba(8, 13, 26, 0.95) 100%); border: 1px solid var(--border-gold);">
          <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 text-start">
            <div>
              <h4 style="font-family: var(--font-display); font-size: 1.2rem; color: #fff; margin: 0 0 4px 0;">
                Looking for Specific Insights on Your Industry or District?
              </h4>
              <p style="font-size: 13px; color: var(--text-muted); margin: 0;">
                Explore all <?php echo count($blogs_catalog); ?> client education guides covering SEO, WordPress, Google Ads, WhatsApp Automation, and Multi-Location Dominance.
              </p>
            </div>
            <a href="<?php echo $base_path; ?>blog" class="btn-gold" style="padding: 11px 24px; font-size: 13.5px; text-decoration: none; white-space: nowrap;">
              <i class="fa-solid fa-layer-group me-1"></i> Browse All <?php echo count($blogs_catalog); ?> Guides in Knowledge Hub &rarr;
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="section-wrap" id="contact">
      <div class="container">
        <div class="section-header">
          <span class="section-tag"><i class="fa-solid fa-envelope-open-text"></i> Connect With Us</span>
          <h2 class="section-title-lg">Initiate Your Digital Project</h2>
          <p class="section-desc">
            Ready to upgrade your web presence with luxury aesthetics and guaranteed speed? Contact Web Optimizer directly for a bespoke quote or consultation.
          </p>
        </div>

        <div class="contact-grid">
          <!-- Contact Info Left -->
          <div class="contact-info-card">
            <h3>Direct Contact Channels</h3>
            <p>
              Speak directly with our senior development team in Bhubaneswar. We evaluate your existing website or blueprint and provide an actionable strategy within 24 hours.
            </p>

            <div class="contact-links-list">
              <a href="tel:+917735973818" class="contact-link-row">
                <div class="contact-row-icon"><i class="fa-solid fa-phone"></i></div>
                <div class="contact-row-text">
                  <div class="label">Direct Hotline</div>
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
                  <div class="label">Email Inquiry</div>
                  <div class="val">info@weboptimizer.in</div>
                </div>
              </a>

              <div class="contact-link-row" style="cursor:default;">
                <div class="contact-row-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="contact-row-text">
                  <div class="label">Headquarters</div>
                  <div class="val">Bhubaneswar, Odisha, India</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Form Right -->
          <div class="contact-form-wrap">
            <h3>Request an Executive Proposal</h3>
            <p style="font-size:13.5px; color:var(--text-muted); margin-bottom:22px;">
              Tell us about your brand requirement, target launch date, and budget.
            </p>

                        <?php if ($form_status === 'success'): ?>
              <div class="form-alert form-alert-success" style="background:rgba(16,185,129,0.15); border:1px solid #10b981; color:#10b981; padding:14px 20px; border-radius:12px; margin-bottom:20px; display:flex; align-items:center; gap:12px; font-weight:600;">
                <i class="fa-solid fa-circle-check" style="font-size:20px;"></i>
                <span>Thank you! Your executive inquiry has been transmitted. Senior Developer Hrushikesh Swain will review and contact you within 2 hours.</span>
              </div>
            <?php elseif ($form_status === 'error'): ?>
              <div class="form-alert form-alert-error" style="background:rgba(244,63,94,0.15); border:1px solid #f43f5e; color:#f43f5e; padding:14px 20px; border-radius:12px; margin-bottom:20px; display:flex; align-items:center; gap:12px; font-weight:600;">
                <i class="fa-solid fa-circle-exclamation" style="font-size:20px;"></i>
                <span>Please fill in all required fields (Name, Email, Phone) and try again.</span>
              </div>
            <?php endif; ?>

            <form id="leadContactForm" method="POST" action="#contact">
              <div class="form-field">
                <label for="leadName">Your Name / Organization</label>
                <input type="text" id="leadName" name="lead_name" class="form-input" placeholder="e.g. Dr. Rajesh Sharma / Acme Corp" required>
              </div>

              <div class="form-field">
                <label for="leadEmail">Business Email</label>
                <input type="email" id="leadEmail" name="lead_email" class="form-input" placeholder="name@company.com" required>
              </div>

              <div class="form-field">
                <label for="leadPhone">Phone / WhatsApp Number</label>
                <input type="tel" id="leadPhone" name="lead_phone" class="form-input" placeholder="+91 98765 43210" required>
              </div>

              <div class="form-field">
                <label for="leadService">Required Service</label>
                <select id="leadService" name="lead_service" class="form-input" style="background:#080d1a;">
                  <option value="Custom WordPress Website">Custom WordPress Website</option>
                  <option value="WooCommerce E-Commerce Store">WooCommerce E-Commerce Store</option>
                  <option value="Technical SEO & Speed Audit">Technical SEO & Speed Audit</option>
                  <option value="Custom Plugin Development">Custom Plugin Development</option>
                  <option value="Enterprise Website Redesign">Enterprise Website Redesign</option>
                </select>
              </div>

              <div class="form-field">
                <label for="leadMessage">Project Details / Current URL</label>
                <textarea id="leadMessage" name="lead_message" class="form-input" placeholder="Briefly describe your objectives or paste your current website URL..." required></textarea>
              </div>

              <button type="submit" name="lead_submit" class="btn-gold" style="width:100%; justify-content:center; padding:14px;">
                <i class="fa-solid fa-paper-plane"></i> Send Inquiry Now
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

<!-- Home Specific JS: Sliders (Capabilities, 50 Case Studies Portfolio, and 25 Guides Blog) -->
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
      counterText.textContent = 'Showing 1 - ' + Math.min(total, 3) + ' of ' + total + ' Capabilities';
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
  // 3. EXECUTIVE BLOG GUIDES SLIDER CONTROLLER (25 GUIDES)
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