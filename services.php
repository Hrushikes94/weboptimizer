<?php
/**
 * Web Optimizer - Master Services & Sub-Services Catalog Directory
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain
 */
require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/blogs-data.php';

$page_title = 'Enterprise Digital Engineering & Marketing Services | Web Optimizer';
$meta_desc = "Explore Web Optimizer's full suite of digital practices: Custom WordPress, Shopify, AI SEO, Performance Marketing, Social Media, Branding, Video Production, and WhatsApp Automation. Call +91 7735973818.";
$active_nav = 'services';
$base_path = './';

require __DIR__ . '/includes/header.php';
?>

<main>
  <!-- SERVICES HERO (FULL-WIDTH SEPARATE SECTION) -->
  <section class="page-banner-section" style="padding-bottom: 45px;">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto text-center">
          <nav class="banner-breadcrumb justify-content-center" aria-label="breadcrumb">
            <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
            <span class="sep">/</span>
            <span class="current">Full Services Directory</span>
          </nav>

          <div class="banner-pill-badge mb-3">
            <span class="gold-dot"></span>
            <span>END-TO-END DIGITAL ENGINEERING &bull; 47 CAPABILITIES</span>
          </div>

          <h1 class="banner-title">
            Bespoke Digital Engineering &amp; <br>
            <span class="gold-gradient-text">Performance Growth Practices</span>
          </h1>

          <p class="banner-lead mx-auto" style="max-width: 780px;">
            Explore Web Optimizer's complete suite of digital practices: custom WordPress engineering, WooCommerce development, aggressive AI SEO, high-conversion performance marketing, social media dominance, luxury brand identity, and automated conversational funnels.
          </p>

          <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding: 12px 26px; font-size: 14px;">
              <i class="fa-solid fa-file-signature"></i> Request Architecture Proposal
            </button>
            <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20am%20exploring%20your%20services%20and%20would%20like%20to%20discuss%20a%20project." 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn-luxury-outline"
               style="border-color:#25d366; color:#25d366; padding: 12px 24px; font-size: 14px;">
              <i class="fa-brands fa-whatsapp"></i> Chat Senior Engineer
            </a>
          </div>

          <div class="d-flex flex-wrap justify-content-center gap-2">
            <span class="banner-stat-chip"><i class="fa-solid fa-laptop-code text-gold"></i> 47 Capabilities</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-file-invoice-dollar text-gold"></i> Custom Billing &amp; ERP</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-bolt text-gold"></i> Sub-Second Speed</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-phone text-gold"></i> +91 7735973818</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEPARATE FULL-WIDTH SERVICES BANNER SHOWCASE SECTION -->
  <section class="full-banner-showcase-section">
    <div class="container">
      <div class="banner-visual-frame">
        <img src="<?php echo $base_path; ?>assets/images/banners/banner-services.webp" 
             alt="Web Optimizer Full Services Ecosystem" 
             class="img-fluid">
        <div class="banner-floating-badge">
          <span class="gold-dot"></span> 46 Capabilities Active &bull; All Odisha
        </div>
      </div>
    </div>
  </section>

  <!-- PRACTICE HUBS OVERVIEW -->
  <section class="section-wrap" style="padding-top: 10px; padding-bottom: 20px;">
    <div class="container">
      <div class="section-header text-center mb-4">
        <span class="section-tag"><i class="fa-solid fa-crown"></i> Agency Departments</span>
        <h2 class="section-title-lg">The <?php echo count($service_parents); ?> Strategic Growth Pillars</h2>
      </div>

      <div class="row g-4 mb-5">
        <?php foreach ($service_parents as $p): ?>
          <div class="col-lg-4 col-md-6">
            <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-4" style="background: rgba(14, 21, 38, 0.75);">
              <div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div class="dropdown-item-icon" style="width: 44px; height: 44px; font-size: 18px;">
                    <i class="fa-solid <?php echo htmlspecialchars($p['icon']); ?>"></i>
                  </div>
                  <span class="badge" style="background: rgba(212, 175, 55, 0.12); color: var(--gold-light); border: 1px solid var(--border-gold); padding: 5px 10px; font-size: 10px; font-family: var(--font-mono);">
                    <?php echo htmlspecialchars($p['badge']); ?>
                  </span>
                </div>
                <h3 style="font-family: var(--font-display); font-size: 1.3rem; color: #fff; margin-bottom: 10px;">
                  <?php echo htmlspecialchars($p['title']); ?>
                </h3>
                <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 18px;">
                  <?php echo htmlspecialchars($p['description']); ?>
                </p>
                <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: var(--gold-primary); font-weight: 700; margin-bottom: 8px;">
                  Sub-Services Included (<?php echo count($p['sub_services']); ?>)
                </div>
                <div class="d-flex flex-wrap gap-1 mb-4">
                  <?php foreach (array_slice($p['sub_services'], 0, 4) as $subKey): ?>
                    <?php if (isset($services_catalog[$subKey])): ?>
                      <span style="font-size: 11px; background: rgba(8, 13, 26, 0.8); border: 1px solid var(--border-subtle); padding: 2px 8px; border-radius: 12px; color: var(--text-dim);">
                        <?php echo htmlspecialchars($services_catalog[$subKey]['short_title']); ?>
                      </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="pt-3 border-top border-secondary border-opacity-25">
                <a href="<?php echo htmlspecialchars($p['slug']); ?>.php" class="btn-gold w-100 text-center" style="padding: 10px 18px; font-size: 13px; text-decoration: none;">
                  Explore Practice Hub <i class="fa-solid fa-arrow-right" style="margin-left: 5px;"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ALL SUB-SERVICES DIRECTORY GRID -->
  <section class="section-wrap" style="padding-top: 10px; background: rgba(8, 13, 26, 0.4);">
    <div class="container">

      <!-- Interactive Filter Tabs -->
      <div class="section-header text-center mb-4">
        <span class="section-tag"><i class="fa-solid fa-list-check"></i> Individual Service Pages</span>
        <h2 class="section-title-lg">Browse All Specialized Sub-Services</h2>
      </div>

      <div class="portfolio-filter-nav justify-content-center" id="catalogFilterNav" style="margin-bottom: 40px;">
        <button class="port-filter-btn active catalog-filter-btn" data-filter="all">
          <i class="fa-solid fa-layer-group"></i> All (<?php echo count($services_catalog); ?>)
        </button>
        <button class="port-filter-btn catalog-filter-btn" data-filter="web">
          <i class="fa-solid fa-code"></i> Web & UI/UX
        </button>
        <button class="port-filter-btn catalog-filter-btn" data-filter="growth">
          <i class="fa-solid fa-chart-line"></i> AI SEO & Growth
        </button>
        <button class="port-filter-btn catalog-filter-btn" data-filter="creative">
          <i class="fa-solid fa-wand-magic-sparkles"></i> Creative & Media
        </button>
      </div>

      <!-- Services Grid -->
      <div class="row g-4" id="catalogCardsContainer">
        <?php foreach ($services_catalog as $s): ?>
          <div class="col-lg-6 catalog-service-item" data-category="<?php echo htmlspecialchars($s['category']); ?>">
            <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-4" style="border-radius: var(--radius-lg);">
              <div>
                <!-- Top Header -->
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <div class="d-flex align-items-center gap-3">
                    <div class="dropdown-item-icon" style="width: 44px; height: 44px; font-size: 18px;">
                      <i class="<?php echo htmlspecialchars($s['icon']); ?>"></i>
                    </div>
                    <div>
                      <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: var(--gold-primary); font-weight: 700;">
                        <?php echo htmlspecialchars($s['category_name']); ?>
                      </span>
                      <h3 style="font-family: var(--font-display); font-size: 1.35rem; color: #fff; margin: 2px 0 0 0; line-height: 1.25;">
                        <?php echo htmlspecialchars($s['title']); ?>
                      </h3>
                    </div>
                  </div>
                  <span class="badge" style="background: rgba(212, 175, 55, 0.12); color: var(--gold-light); border: 1px solid var(--border-gold); padding: 6px 12px; font-size: 11px; font-family: var(--font-mono);">
                    <?php echo htmlspecialchars($s['badge']); ?>
                  </span>
                </div>

                <!-- Short Overview -->
                <p style="font-size: 13.5px; color: var(--text-cream); line-height: 1.65; margin-bottom: 20px;">
                  <?php echo htmlspecialchars($s['meta_description']); ?>
                </p>

                <!-- Key Capabilities Checklist -->
                <div style="font-size: 11.5px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-dim); font-weight: 700; margin-bottom: 10px;">
                  Key Deliverables
                </div>
                <ul class="list-unstyled mb-3" style="font-size: 13px; color: var(--text-muted); line-height: 1.6;">
                  <?php foreach (array_slice($s['deliverables'], 0, 3) as $d): ?>
                    <li class="d-flex align-items-start gap-2 mb-2">
                      <i class="fa-solid fa-check text-gold mt-1" style="font-size: 11px; color: var(--gold-primary); flex-shrink: 0;"></i>
                      <span><?php echo htmlspecialchars($d['title']); ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>

                <!-- Tech Stack Badges -->
                <div class="d-flex flex-wrap gap-1 mb-4">
                  <?php foreach (array_slice($s['tech_stack'], 0, 4) as $tech): ?>
                    <span style="font-size: 11px; background: rgba(8, 13, 26, 0.8); border: 1px solid var(--border-subtle); padding: 3px 10px; border-radius: 20px; color: var(--text-dim); font-family: var(--font-mono);">
                      <?php echo htmlspecialchars($tech); ?>
                    </span>
                  <?php endforeach; ?>
                </div>
              </div>

              <!-- Action Buttons -->
              <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 pt-3 border-top border-secondary border-opacity-25">
                <a href="<?php echo htmlspecialchars($s['slug']); ?>.php" class="btn-gold" style="padding: 10px 20px; font-size: 13px; text-decoration: none;">
                  View Dedicated Page <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
                <button type="button" class="btn-luxury-outline" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding: 9px 18px; font-size: 12.5px;">
                  <i class="fa-solid fa-file-signature text-gold"></i> Request Proposal
                </button>
              </div>

            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- HELPFUL STRATEGIC GUIDES SECTION -->
      <div class="section-header text-start mt-5 pt-4 mb-3">
        <span class="section-tag"><i class="fa-solid fa-book-open"></i> Client Education</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
          Strategic Digital Guides for Odisha Business Owners
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 780px;">
          Direct, honest insights on website ROI, realistic budgets, and performance marketing in Odisha before you invest.
        </p>
      </div>

      <div class="row g-4 mb-5">
        <?php 
        $service_showcase_slugs = [
          'realistic-cost-of-website-design-in-odisha',
          'google-ads-vs-meta-ads-odisha-comparison',
          'the-truth-about-seo-timelines-in-odisha'
        ];
        foreach ($service_showcase_slugs as $sSlug):
          if (!isset($blogs_catalog[$sSlug])) continue;
          $guide = $blogs_catalog[$sSlug];
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-3" style="background: rgba(14, 21, 38, 0.75); border: 1px solid var(--border-gold);">
              <div>
                <a href="<?php echo $base_path; ?>blog/<?php echo $sSlug; ?>" class="d-block blog-card-thumb">
                  <img src="<?php echo $base_path . $guide['image']; ?>" alt="<?php echo htmlspecialchars($guide['title']); ?>" loading="lazy">
                  <span class="thumb-badge"><?php echo htmlspecialchars($guide['category']); ?></span>
                </a>
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span style="font-size: 11px; color: var(--gold-light); font-weight: 600;">
                    <i class="fa-solid fa-gem text-gold me-1"></i> PRACTICAL INSIGHT
                  </span>
                  <span style="font-size: 11px; color: var(--text-dim);">
                    <i class="fa-regular fa-clock me-1"></i> <?php echo htmlspecialchars($guide['read_time']); ?>
                  </span>
                </div>
                <h4 style="font-family: var(--font-display); font-size: 1.15rem; color: #fff; font-weight: 700; line-height: 1.35; margin-bottom: 8px;">
                  <a href="<?php echo $base_path; ?>blog/<?php echo $sSlug; ?>" style="color: #fff; text-decoration: none;">
                    <?php echo htmlspecialchars($guide['title']); ?>
                  </a>
                </h4>
                <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">
                  <?php echo htmlspecialchars($guide['excerpt']); ?>
                </p>
              </div>
              <div class="pt-2 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                <span style="font-size: 11px; color: var(--gold-primary); font-weight: 700;">ODISHA GUIDE</span>
                <a href="<?php echo $base_path; ?>blog/<?php echo $sSlug; ?>" style="font-size: 12.5px; color: var(--gold-light); font-weight: 700; text-decoration: none;">
                  Read Guide &rarr;
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- FULL AGENCY CTA BANNER -->
      <div class="service-cta-banner mt-5">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-9">
            <span class="section-tag" style="display: inline-block;"><i class="fa-solid fa-shield-halved"></i> Bespoke Engineering</span>
            <h3 style="font-family: var(--font-display); font-size: clamp(1.8rem, 3.2vw, 2.6rem); color: #fff; margin: 12px 0 16px 0;">
              Need a Custom Multi-Service Engagement?
            </h3>
            <p style="font-size: 15px; color: var(--text-cream); line-height: 1.7; margin-bottom: 28px;">
              Whether you require a complete digital transformation, enterprise WordPress migration, technical SEO sprint, or full-funnel performance marketing â€” our Senior Engineering team delivers results backed by guaranteed SLAs.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding: 15px 30px; font-size: 15px;">
                <i class="fa-solid fa-file-signature"></i> Request Consultation & Proposal
              </button>
              <a href="tel:+917735973818" class="btn-luxury-outline" style="padding: 15px 28px; font-size: 15px;">
                <i class="fa-solid fa-phone"></i> Call +91 7735973818
              </a>
              <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20would%20like%20to%20discuss%20a%20full-service%20digital%20package." 
                 target="_blank" 
                 rel="noopener noreferrer" 
                 class="btn-luxury-outline" 
                 style="border-color: #25d366; color: #25d366; padding: 15px 28px; font-size: 15px;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</main>

<script>
  // Filter Tabs logic for Catalog Page
  document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.catalog-filter-btn');
    const items = document.querySelectorAll('.catalog-service-item');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const filter = this.getAttribute('data-filter');

        items.forEach(item => {
          if (filter === 'all' || item.getAttribute('data-category') === filter) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  });
</script>

<?php
require __DIR__ . '/includes/footer.php';
?>
