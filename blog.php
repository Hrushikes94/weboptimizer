<?php
/**
 * Web Optimizer - Master Client Guides & Knowledge Hub
 * Practical, non-confusing guides for Odisha business owners
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain (+91 7735973818)
 */
require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/blogs-data.php';

$page_title = 'Digital Marketing & Web Design Guides for Odisha Businesses | Web Optimizer';
$meta_desc = 'Practical, honest guides for business owners in Odisha. Learn what is actually required to rank on Google, build a fast website, generate real customer inquiries, and automate WhatsApp.';
$active_nav = 'blog';
$canonical_url = 'https://www.weboptimizer.in/blog';

require __DIR__ . '/includes/header.php';
?>

<main>
  <!-- BLOG HERO -->
    <!-- BLOG HERO BANNER SECTION WITH PROMINENT BANNER IMAGE -->
  <section class="page-banner-section">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row align-items-center g-5">
        <!-- Left: Text & Actions -->
        <div class="col-lg-7">
          <nav class="banner-breadcrumb" aria-label="breadcrumb">
            <a href="<?php echo $base_path; ?>index.php"><i class="fa-solid fa-house"></i> Home</a>
            <span class="sep">/</span>
            <span class="current">Business Guides &amp; Knowledge</span>
          </nav>

          <div class="banner-pill-badge mb-3">
            <span class="gold-dot"></span>
            <span>TRANSPARENT CLIENT EDUCATION &bull; 25 PRACTICAL GUIDES</span>
          </div>

          <h1 class="banner-title">
            What Odisha Business Owners <br>
            <span class="gold-gradient-text">Actually Need to Succeed Online</span>
          </h1>

          <p class="banner-lead">
            No confusing technical buzzwords. No false promises. Just direct, honest explanations of how websites, Google Maps, search ranking, and digital advertising actually generate phone calls and revenue in Odisha.
          </p>

          <div class="d-flex flex-wrap gap-3 mb-4">
            <a href="blog#blogs-grid" onclick="const el=document.getElementById('blogs-grid'); if(el){el.scrollIntoView({behavior:'smooth'}); return false;}" class="btn-gold" style="padding: 12px 26px; font-size: 14px;">
              <i class="fa-solid fa-book-open"></i> Read All 25 Verified Guides
            </a>
            <a href="https://wa.me/917735973818?text=Hello%20Hrushikesh%2C%20I%20have%20a%20question%20about%20your%20digital%20guides." 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn-luxury-outline"
               style="border-color:#25d366; color:#25d366; padding: 12px 24px; font-size: 14px;">
              <i class="fa-brands fa-whatsapp"></i> Ask Author on WhatsApp
            </a>
          </div>

          <div class="d-flex flex-wrap gap-2">
            <span class="banner-stat-chip"><i class="fa-solid fa-bolt text-gold"></i> Sub-Second Speed</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-map-pin text-gold"></i> Top 3 Google Maps</span>
            <span class="banner-stat-chip"><i class="fa-brands fa-whatsapp text-gold"></i> 24/7 WhatsApp Leads</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-shield-halved text-gold"></i> Zero Code Bloat</span>
          </div>
        </div>

        <!-- Right: Prominent Banner Visual Frame -->
        <div class="col-lg-5">
          <div class="banner-visual-frame">
            <img src="<?php echo $base_path; ?>assets/images/banners/banner-blog.webp" 
                 alt="Web Optimizer Business Intelligence Guides" 
                 class="img-fluid">
            <div class="banner-floating-badge">
              <span class="gold-dot"></span> 25 Verified Guides &bull; Written by Senior Dev
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BLOG DIRECTORY & FILTER -->
  <section class="section-wrap" style="padding-top: 10px;">
    <div class="container">

      <!-- Controls: Category Filters & Search -->
      <div class="row align-items-center justify-content-between g-3 mb-4">
        <div class="col-lg-4">
          <div class="position-relative">
            <input type="text" id="blogSearchInput" class="luxury-form-input w-100" placeholder="Search guides (e.g. speed, SEO, cost, WhatsApp...)" style="padding-left: 42px;">
            <i class="fa-solid fa-magnifying-glass position-absolute" style="left: 15px; top: 50%; transform: translateY(-50%); color: var(--gold-primary);"></i>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="portfolio-filter-nav justify-content-lg-end justify-content-center m-0">
            <button class="port-filter-btn active blog-filter-btn" data-filter="all">All (25)</button>
            <button class="port-filter-btn blog-filter-btn" data-filter="Web Design">Web Design</button>
            <button class="port-filter-btn blog-filter-btn" data-filter="SEO & Maps">SEO & Maps</button>
            <button class="port-filter-btn blog-filter-btn" data-filter="Paid Advertising">Paid Ads</button>
            <button class="port-filter-btn blog-filter-btn" data-filter="Social & Branding">Social & Brand</button>
            <button class="port-filter-btn blog-filter-btn" data-filter="Automation & Growth">WhatsApp & Growth</button>
          </div>
        </div>
      </div>

      <!-- 25 Guides Grid -->
      <div class="row g-4" id="blogsGrid">
        <?php foreach ($blogs_catalog as $slug => $post): ?>
          <div class="col-lg-4 col-md-6 blog-card-item" data-category="<?php echo htmlspecialchars($post['category']); ?>" data-title="<?php echo strtolower(htmlspecialchars($post['title'])); ?>">
            <article class="deliverable-card h-100 d-flex flex-column justify-content-between p-0 overflow-hidden" style="background: rgba(14, 21, 38, 0.7); border: 1px solid var(--border-gold); transition: var(--transition-luxury);">
              
              <!-- Blog Featured Image -->
              <div style="height: 200px; width: 100%; overflow: hidden; position: relative;">
                <img src="<?php echo $base_path . htmlspecialchars($post['image']); ?>" 
                     alt="<?php echo htmlspecialchars($post['title']); ?>" 
                     loading="lazy"
                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;"
                     onmouseover="this.style.transform='scale(1.05)';"
                     onmouseout="this.style.transform='scale(1)';"
                     onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80';">
                <span class="badge position-absolute" style="top: 14px; left: 14px; background: rgba(4, 7, 14, 0.85); backdrop-filter: blur(10px); color: var(--gold-light); border: 1px solid var(--border-gold); font-size: 10.5px; font-weight: 700; text-transform: uppercase;">
                  <?php echo htmlspecialchars($post['category']); ?>
                </span>
                <span class="badge position-absolute" style="top: 14px; right: 14px; background: rgba(4, 7, 14, 0.85); backdrop-filter: blur(10px); color: #cbd5e1; font-size: 10.5px;">
                  <i class="fa-regular fa-clock me-1 text-gold"></i> <?php echo htmlspecialchars($post['read_time']); ?>
                </span>
              </div>

              <!-- Body -->
              <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                <div>
                  <h3 style="font-family: var(--font-display); font-size: 1.15rem; color: #fff; line-height: 1.4; margin-bottom: 12px; font-weight: 700;">
                    <a href="<?php echo $base_path; ?>blog/<?php echo $slug; ?>" style="color: #fff; text-decoration: none; transition: var(--transition-luxury);" onmouseover="this.style.color='var(--gold-light)'" onmouseout="this.style.color='#fff'">
                      <?php echo htmlspecialchars($post['title']); ?>
                    </a>
                  </h3>

                  <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 14px;">
                    <?php echo htmlspecialchars($post['excerpt']); ?>
                  </p>

                  <!-- Direct Key Takeaway Box -->
                  <div class="p-2 mb-3 rounded-2" style="background: rgba(8, 13, 26, 0.85); border-left: 3px solid var(--gold-primary);">
                    <div style="font-size: 10px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gold-primary); font-weight: 700;">
                      <i class="fa-solid fa-lightbulb me-1"></i> Key Takeaway:
                    </div>
                    <div style="font-size: 11.5px; color: #e2e8f0; line-height: 1.45; margin-top: 2px;">
                      <?php echo htmlspecialchars($post['takeaway']); ?>
                    </div>
                  </div>
                </div>

                <div class="pt-3 border-top border-secondary border-opacity-25 d-flex align-items-center justify-content-between mt-auto">
                  <div class="d-flex align-items-center gap-2">
                    <div style="width: 28px; height: 28px; border-radius: 50%; background: linear-gradient(135deg, var(--gold-primary), var(--gold-dark)); color: #04070e; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 11px;">
                      HS
                    </div>
                    <div style="font-size: 11.5px; color: var(--text-dim);">
                      <?php echo htmlspecialchars($post['author']); ?>
                    </div>
                  </div>

                  <a href="<?php echo $base_path; ?>blog/<?php echo $slug; ?>" class="btn-gold" style="padding: 7px 14px; font-size: 11.5px; text-decoration: none;">
                    Read Guide <i class="fa-solid fa-arrow-right" style="margin-left: 4px;"></i>
                  </a>
                </div>

              </div>

            </article>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- DIRECT CONSULTATION CTA -->
      <div class="service-cta-banner mt-5">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-9 text-center">
            <span class="section-tag" style="display: inline-block;"><i class="fa-solid fa-comments"></i> Direct Guidance</span>
            <h3 style="font-family: var(--font-display); font-size: clamp(1.8rem, 3.2vw, 2.5rem); color: #fff; margin: 12px 0 16px 0;">
              Want Us to Audit Your Current Business Website for Free?
            </h3>
            <p style="font-size: 15px; color: var(--text-cream); line-height: 1.7; margin-bottom: 28px;">
              No sales pitches, no obligation. Founder & Senior Web Developer Hrushikesh Swain will review your current website, Google Maps profile, and mobile speedâ€”giving you an honest, 2-page architectural diagnosis within 2 hours.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding: 15px 30px; font-size: 15px;">
                <i class="fa-solid fa-file-signature"></i> Request Free Audit
              </button>
              <a href="tel:+917735973818" class="btn-luxury-outline" style="padding: 15px 28px; font-size: 15px;">
                <i class="fa-solid fa-phone"></i> Call +91 7735973818
              </a>
              <a href="https://wa.me/917735973818?text=Hello%20Hrushikesh%2C%20I%20would%20like%20a%20free%20website%20and%20SEO%20audit%20for%20my%20Odisha%20business." 
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
  // Filter & Search Functionality for Blog Guides
  document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('blogSearchInput');
    const filterBtns = document.querySelectorAll('.blog-filter-btn');
    const cards = document.querySelectorAll('.blog-card-item');

    function filterBlogs() {
      const query = (searchInput.value || '').toLowerCase().trim();
      const activeBtn = document.querySelector('.blog-filter-btn.active');
      const activeFilter = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';

      cards.forEach(card => {
        const title = card.getAttribute('data-title');
        const cat = card.getAttribute('data-category');

        const matchesQuery = !query || title.includes(query) || cat.toLowerCase().includes(query);
        const matchesFilter = activeFilter === 'all' || cat.includes(activeFilter) || activeFilter.includes(cat);

        if (matchesQuery && matchesFilter) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }

    if (searchInput) {
      searchInput.addEventListener('input', filterBlogs);
    }

    filterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        filterBlogs();
      });
    });
  });
</script>

<?php
require __DIR__ . '/includes/footer.php';
?>
