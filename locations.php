<?php
/**
 * Web Optimizer - Master Odisha Locations Directory (50 Service Areas)
 * Programmatic SEO, AEO & GEO Infrastructure
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain
 * Official Phone: +91 7735973818 | Email: info@weboptimizer.in | Location: Bhubaneswar, Odisha
 */
require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require_once __DIR__ . '/includes/blogs-data.php';

$canonical_url = "https://www.weboptimizer.in/locations";
$page_title = 'Digital Marketing & Website Design Across 50 Locations in Odisha | Web Optimizer';
$meta_desc = "Web Optimizer provides premier website development, custom WordPress, AI SEO, and performance marketing across all 50 cities and industrial hubs in Odisha. Call +91 7735973818.";
$active_nav = 'locations';

require __DIR__ . '/includes/header.php';
?>

<main>
  <!-- LOCATIONS HERO (FULL-WIDTH SEPARATE SECTION) -->
  <section class="page-banner-section" style="padding-bottom: 45px;">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto text-center">
          <nav class="banner-breadcrumb justify-content-center" aria-label="breadcrumb">
            <a href="<?php echo $base_path; ?>index.php"><i class="fa-solid fa-house"></i> Home</a>
            <span class="sep">/</span>
            <span class="current">Odisha Service Locations</span>
          </nav>

          <div class="banner-pill-badge mb-3">
            <span class="gold-dot"></span>
            <span>STATEWIDE ODISHA SERVICE COVERAGE &bull; 50 LOCATIONS</span>
          </div>

          <h1 class="banner-title">
            Empowering Enterprises Across <br>
            <span class="gold-gradient-text">All 50 Cities &amp; Belts in Odisha</span>
          </h1>

          <p class="banner-lead mx-auto" style="max-width: 780px;">
            Headquartered in Bhubaneswar, <strong>Web Optimizer</strong> delivers elite website engineering, custom WordPress architectures, surgical AI SEO, and ROI-driven paid advertising to businesses, healthcare networks, and manufacturers throughout all 30 districts of Odisha.
          </p>

          <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="locations#locations-list" onclick="const el=document.getElementById('locations-list'); if(el){el.scrollIntoView({behavior:'smooth'}); return false;}" class="btn-gold" style="padding: 12px 26px; font-size: 14px;">
              <i class="fa-solid fa-map-location-dot"></i> Browse All 50 City Hubs
            </a>
            <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20am%20looking%20for%20digital%20marketing%20and%20web%20design%20in%20Odisha." 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn-luxury-outline"
               style="border-color:#25d366; color:#25d366; padding: 12px 24px; font-size: 14px;">
              <i class="fa-brands fa-whatsapp"></i> Chat Direct (+91 7735973818)
            </a>
          </div>

          <div class="d-flex flex-wrap justify-content-center gap-2">
            <span class="banner-stat-chip"><i class="fa-solid fa-city text-gold"></i> 50 Cities Covered</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-award text-gold"></i> 158+ Deployments</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-clock text-gold"></i> &lt;2h Direct Response</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-location-dot text-gold"></i> Bhubaneswar HQ</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEPARATE FULL-WIDTH LOCATIONS BANNER SHOWCASE SECTION -->
  <section class="full-banner-showcase-section">
    <div class="container">
      <div class="banner-visual-frame">
        <img src="<?php echo $base_path; ?>assets/images/banners/banner-locations.webp" 
             alt="Web Optimizer Statewide Odisha Network Across All 50 Cities & 30 Districts" 
             title="Web Optimizer | Website Design & Digital Marketing Across 50 Odisha Locations"
             draggable="false"
             class="img-fluid">
        <div class="banner-floating-badge">
          <span class="gold-dot"></span> 50 Service Areas Active &bull; 30 Districts
        </div>
      </div>
    </div>
  </section>

  <!-- LOCATIONS DIRECTORY SECTION -->
  <section class="section-wrap" style="padding-top: 10px;">
    <div class="container">

      <!-- Interactive Search & Filter Controls -->
      <div class="row align-items-center justify-content-between g-3 mb-4">
        <div class="col-lg-5">
          <div class="position-relative">
            <input type="text" id="locationSearchInput" class="luxury-form-input w-100" placeholder="Search any Odisha city (e.g. Cuttack, Rourkela, Puri, Angul...)" style="padding-left: 42px;">
            <i class="fa-solid fa-magnifying-glass position-absolute" style="left: 15px; top: 50%; transform: translateY(-50%); color: var(--gold-primary);"></i>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="portfolio-filter-nav justify-content-lg-end justify-content-center m-0">
            <button class="port-filter-btn active loc-filter-btn" data-filter="all">All (50)</button>
            <button class="port-filter-btn loc-filter-btn" data-filter="Central Odisha">Central</button>
            <button class="port-filter-btn loc-filter-btn" data-filter="Western Odisha">Western</button>
            <button class="port-filter-btn loc-filter-btn" data-filter="Coastal Odisha">Coastal</button>
            <button class="port-filter-btn loc-filter-btn" data-filter="Northern Odisha">Northern</button>
            <button class="port-filter-btn loc-filter-btn" data-filter="Southern Odisha">Southern</button>
          </div>
        </div>
      </div>

      <!-- 50 Locations Cards Grid -->
      <div class="row g-4" id="locationsGrid">
        <?php foreach ($odisha_locations as $loc): ?>
          <div class="col-lg-4 col-md-6 location-card-item" data-name="<?php echo strtolower($loc['name']); ?>" data-region="<?php echo htmlspecialchars($loc['region']); ?>">
            <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-4" style="background: rgba(14, 21, 38, 0.7);">
              <div>
                <div class="d-flex justify-content-between align-items-start mb-2">
                  <span class="badge" style="background: rgba(212, 175, 55, 0.12); color: var(--gold-light); border: 1px solid var(--border-gold); padding: 5px 10px; font-size: 10px; font-family: var(--font-mono);">
                    <?php echo htmlspecialchars($loc['tier']); ?>
                  </span>
                  <span style="font-size: 11px; color: var(--text-dim);">
                    <i class="fa-solid fa-map-pin text-gold" style="color:var(--gold-primary);"></i> <?php echo htmlspecialchars($loc['district']); ?> Dist.
                  </span>
                </div>

                <h3 style="font-family: var(--font-display); font-size: 1.35rem; color: #fff; margin: 8px 0 6px 0;">
                  <?php echo htmlspecialchars($loc['name']); ?>
                </h3>

                <p style="font-size: 12.5px; color: var(--text-muted); line-height: 1.6; margin-bottom: 16px;">
                  <?php echo htmlspecialchars($loc['profile']); ?>
                </p>

                <!-- Quick Services Pills -->
                <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gold-primary); font-weight: 700; margin-bottom: 6px;">
                  Popular in <?php echo htmlspecialchars($loc['name']); ?>:
                </div>
                <div class="d-flex flex-wrap gap-1 mb-3">
                  <a href="<?php echo $base_path; ?>service/website-development/<?php echo $loc['slug']; ?>" class="badge text-decoration-none" style="background: rgba(8, 13, 26, 0.9); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 10.5px; padding: 4px 8px;">Web Design</a>
                  <a href="<?php echo $base_path; ?>service/technical-seo/<?php echo $loc['slug']; ?>" class="badge text-decoration-none" style="background: rgba(8, 13, 26, 0.9); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 10.5px; padding: 4px 8px;">Technical SEO</a>
                  <a href="<?php echo $base_path; ?>service/performance-marketing/<?php echo $loc['slug']; ?>" class="badge text-decoration-none" style="background: rgba(8, 13, 26, 0.9); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 10.5px; padding: 4px 8px;">Google Ads</a>
                </div>
              </div>

              <div class="pt-3 border-top border-secondary border-opacity-25">
                <a href="<?php echo $base_path; ?>location/<?php echo $loc['slug']; ?>" class="btn-gold w-100 text-center" style="padding: 9px 14px; font-size: 12.5px; text-decoration: none;">
                  Explore <?php echo htmlspecialchars($loc['name']); ?> Hub <i class="fa-solid fa-arrow-right" style="margin-left: 5px;"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- STATEWIDE GROWTH & SEO GUIDES SECTION -->
      <div class="section-header text-start mt-5 pt-4 mb-3">
        <span class="section-tag"><i class="fa-solid fa-book-open"></i> Local Dominance Intelligence</span>
        <h2 class="section-title-lg" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
          Odisha Statewide Growth & Local Dominance Insights
        </h2>
        <p class="section-desc" style="margin: 0; max-width: 780px;">
          Practical strategies on dominating Google Maps, scaling across 50 Odisha districts, and managing online reputation.
        </p>
      </div>

      <div class="row g-4 mb-5">
        <?php 
        $location_showcase_slugs = [
          'multi-location-seo-strategy-odisha-districts',
          'google-business-profile-mastery-odisha',
          'how-to-rank-number-1-google-odisha'
        ];
        foreach ($location_showcase_slugs as $lSlug):
          if (!isset($blogs_catalog[$lSlug])) continue;
          $guide = $blogs_catalog[$lSlug];
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-3" style="background: rgba(14, 21, 38, 0.75); border: 1px solid var(--border-gold);">
              <div>
                <a href="<?php echo $base_path; ?>blog/<?php echo $lSlug; ?>" class="d-block blog-card-thumb">
                  <img src="<?php echo $base_path . $guide['image']; ?>" 
                       alt="<?php echo htmlspecialchars($guide['title']); ?>" 
                       title="<?php echo htmlspecialchars($guide['title'] . ' | Web Optimizer Odisha'); ?>"
                       draggable="false"
                       loading="lazy">
                  <span class="thumb-badge"><?php echo htmlspecialchars($guide['category']); ?></span>
                </a>
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span style="font-size: 11px; color: var(--gold-light); font-weight: 600;">
                    <i class="fa-solid fa-map-pin text-gold me-1"></i> ODISHA STRATEGY
                  </span>
                  <span style="font-size: 11px; color: var(--text-dim);">
                    <i class="fa-regular fa-clock me-1"></i> <?php echo htmlspecialchars($guide['read_time']); ?>
                  </span>
                </div>
                <h4 style="font-family: var(--font-display); font-size: 1.15rem; color: #fff; font-weight: 700; line-height: 1.35; margin-bottom: 8px;">
                  <a href="<?php echo $base_path; ?>blog/<?php echo $lSlug; ?>" style="color: #fff; text-decoration: none;">
                    <?php echo htmlspecialchars($guide['title']); ?>
                  </a>
                </h4>
                <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">
                  <?php echo htmlspecialchars($guide['excerpt']); ?>
                </p>
              </div>
              <div class="pt-2 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                <span style="font-size: 11px; color: var(--gold-primary); font-weight: 700;">LOCAL SEO</span>
                <a href="<?php echo $base_path; ?>blog/<?php echo $lSlug; ?>" style="font-size: 12.5px; color: var(--gold-light); font-weight: 700; text-decoration: none;">
                  Read Guide &rarr;
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- STATEWIDE CTA BANNER -->
      <div class="service-cta-banner mt-5">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-9 text-center">
            <span class="section-tag" style="display: inline-block;"><i class="fa-solid fa-map-location-dot"></i> Odisha-Wide Reach</span>
            <h3 style="font-family: var(--font-display); font-size: clamp(1.8rem, 3.2vw, 2.6rem); color: #fff; margin: 12px 0 16px 0;">
              Grow Your Business Anywhere in Odisha
            </h3>
            <p style="font-size: 15px; color: var(--text-cream); line-height: 1.7; margin-bottom: 28px;">
              Whether your enterprise is located in Bhubaneswar, Cuttack, Rourkela, Berhampur, Sambalpur, or any of the 50 commercial belts â€” our Senior Engineering team delivers world-class solutions backed by direct SLAs.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding: 15px 30px; font-size: 15px;">
                <i class="fa-solid fa-file-signature"></i> Request Odisha Proposal
              </button>
              <a href="tel:+917735973818" class="btn-luxury-outline" style="padding: 15px 28px; font-size: 15px;">
                <i class="fa-solid fa-phone"></i> Call +91 7735973818
              </a>
              <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20am%20inquiring%20about%20services%20in%20Odisha." 
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
  // Search & Filter functionality for Locations
  document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('locationSearchInput');
    const filterBtns = document.querySelectorAll('.loc-filter-btn');
    const cards = document.querySelectorAll('.location-card-item');

    function filterCards() {
      const query = (searchInput.value || '').toLowerCase().trim();
      const activeFilter = document.querySelector('.loc-filter-btn.active').getAttribute('data-filter');

      cards.forEach(card => {
        const name = card.getAttribute('data-name');
        const region = card.getAttribute('data-region');

        const matchesQuery = !query || name.includes(query);
        const matchesFilter = activeFilter === 'all' || region.includes(activeFilter);

        if (matchesQuery && matchesFilter) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }

    if (searchInput) {
      searchInput.addEventListener('input', filterCards);
    }

    filterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        filterCards();
      });
    });
  });
</script>

<?php
require __DIR__ . '/includes/footer.php';
?>
