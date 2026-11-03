<?php
/**
 * Web Optimizer - Single Client Guide & Knowledge Article Template
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain (+91 7735973818)
 */
require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/blogs-data.php';

$slug = $_GET['slug'] ?? '';
$slug = preg_replace('/[^a-z0-9\-]/i', '', strtolower($slug));

if (empty($slug) || !isset($blogs_catalog[$slug])) {
    header("Location: blog.php");
    exit;
}

$post = $blogs_catalog[$slug];
$related_service = isset($services_catalog[$post['service_slug']]) ? $services_catalog[$post['service_slug']] : null;

// Find 3 other related posts
$related_posts = [];
foreach ($blogs_catalog as $k => $other) {
    if ($k !== $slug) {
        if ($other['category'] === $post['category'] || count($related_posts) < 3) {
            $related_posts[$k] = $other;
            if (count($related_posts) >= 3) break;
        }
    }
}

$page_title = $post['title'] . ' | Web Optimizer';
$meta_desc = $post['excerpt'];
$active_nav = 'blog';
$canonical_url = 'https://www.weboptimizer.in/blog/' . $slug;

require __DIR__ . '/includes/header.php';
?>

<!-- Article Schema.org JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.weboptimizer.in/blog/<?php echo $slug; ?>"
  },
  "headline": "<?php echo htmlspecialchars($post['title']); ?>",
  "description": "<?php echo htmlspecialchars($post['excerpt']); ?>",
  "image": "<?php echo htmlspecialchars($post['image']); ?>",
  "author": {
    "@type": "Person",
    "name": "Hrushikesh Swain",
    "jobTitle": "Founder & Senior Web Developer",
    "url": "https://www.linkedin.com/in/hrushikesh-swain-a34503211/"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Web Optimizer",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.weboptimizer.in/assets/images/weboptimizer-logo.svg"
    }
  },
  "datePublished": "2026-10-15",
  "dateModified": "2026-10-30"
}
</script>

<style>
  .article-container {
    max-width: 860px;
    margin: 0 auto;
  }
  .blog-hero-image-wrap {
    width: 100%;
    height: 420px;
    border-radius: var(--radius-md);
    overflow: hidden;
    margin: 28px 0 36px 0;
    border: 1px solid var(--border-gold);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
  }
  .blog-hero-image-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .article-body {
    font-size: 1.1rem;
    line-height: 1.85;
    color: var(--text-cream);
  }
  .article-body h2, .article-body h3 {
    font-family: var(--font-display);
    color: #fff;
    margin-top: 36px;
    margin-bottom: 16px;
    line-height: 1.3;
  }
  .article-body h3 {
    font-size: 1.45rem;
    color: var(--gold-light);
  }
  .article-body p {
    margin-bottom: 22px;
  }
  .article-body ul, .article-body ol {
    margin-bottom: 24px;
    padding-left: 24px;
  }
  .article-body li {
    margin-bottom: 12px;
    line-height: 1.7;
  }
  .article-body strong {
    color: #fff;
  }
  .blog-callout {
    background: linear-gradient(135deg, rgba(14, 21, 38, 0.85) 0%, rgba(8, 13, 26, 0.95) 100%);
    border: 1px solid var(--border-gold);
    border-left: 4px solid var(--gold-primary);
    border-radius: var(--radius-sm);
    padding: 24px 28px;
    margin: 36px 0;
  }
  .blog-callout h4 {
    font-family: var(--font-display);
    font-size: 1.25rem;
    color: #fff;
    margin-bottom: 8px;
  }
  .blog-callout p {
    margin: 0;
    color: var(--text-cream);
    font-size: 14.5px;
    line-height: 1.7;
  }
  .author-card-box {
    background: rgba(14, 21, 38, 0.7);
    border: 1px solid var(--border-gold);
    border-radius: var(--radius-md);
    padding: 28px;
    margin: 48px 0;
  }
  @media (max-width: 768px) {
    .blog-hero-image-wrap {
      height: 240px;
    }
  }
</style>

<main>
  <!-- BLOG POST HERO BANNER SECTION WITH PROMINENT FEATURED IMAGE -->
  <section class="page-banner-section">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row align-items-center g-5">
        <!-- Left: Text, Meta & Actions -->
        <div class="col-lg-7">
          <nav class="banner-breadcrumb" aria-label="breadcrumb">
            <a href="<?php echo $base_path; ?>index.php"><i class="fa-solid fa-house"></i> Home</a>
            <span class="sep">/</span>
            <a href="<?php echo $base_path; ?>blog">Business Guides</a>
            <span class="sep">/</span>
            <span class="current"><?php echo htmlspecialchars($post['category']); ?></span>
          </nav>

          <div class="banner-pill-badge mb-3">
            <span class="gold-dot"></span>
            <span><?php echo htmlspecialchars($post['category']); ?> &bull; <?php echo htmlspecialchars($post['read_time']); ?> READ</span>
          </div>

          <h1 class="banner-title" style="font-size: clamp(1.8rem, 3.4vw, 2.8rem);">
            <?php echo htmlspecialchars($post['title']); ?>
          </h1>

          <p class="banner-lead">
            <?php echo htmlspecialchars($post['excerpt']); ?>
          </p>

          <div class="d-flex flex-wrap align-items-center gap-3">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
              <i class="fa-solid fa-user-check text-gold"></i>
              <span style="font-size:12.5px; color:#fff; font-weight:600;"><?php echo htmlspecialchars($post['author']); ?> &bull; Senior Developer</span>
            </div>
            <a href="https://wa.me/917735973818?text=<?php echo urlencode('Hi Hrushikesh, I read your article "' . $post['title'] . '" and would like to discuss this for my business.'); ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn-luxury-outline"
               style="border-color:#25d366; color:#25d366; padding: 8px 18px; font-size: 13px;">
              <i class="fa-brands fa-whatsapp"></i> Discuss on WhatsApp
            </a>
          </div>
        </div>

        <!-- Right: Prominent Banner Visual Frame -->
        <div class="col-lg-5">
          <div class="banner-visual-frame">
            <img src="<?php echo $base_path; ?>assets/images/blogs/<?php echo $slug; ?>.webp" 
                 alt="<?php echo htmlspecialchars($post['title']); ?>" 
                 class="img-fluid">
            <div class="banner-floating-badge">
              <span class="gold-dot"></span> Verified Business Guide &bull; Odisha 2026
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <article class="section-wrap" style="padding-top: 40px; padding-bottom: 80px;">
    <div class="container article-container">

      <!-- Breadcrumbs -->
      <nav class="breadcrumb-nav mb-4" aria-label="breadcrumb">
        <a href="<?php echo $base_path; ?>index.php"><i class="fa-solid fa-house"></i> Home</a>
        <span class="breadcrumb-separator">/</span>
        <a href="<?php echo $base_path; ?>blog">Guides</a>
        <span class="breadcrumb-separator">/</span>
        <span class="text-white"><?php echo htmlspecialchars($post['category']); ?></span>
      </nav>

      <!-- Post Header -->
      <header class="mb-4">
        <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
          <span class="badge" style="background: rgba(212, 175, 55, 0.15); border: 1px solid var(--border-gold); color: var(--gold-light); font-size: 11px; text-transform: uppercase; padding: 6px 12px;">
            <?php echo htmlspecialchars($post['category']); ?>
          </span>
          <span style="font-size: 12.5px; color: var(--text-dim);">
            <i class="fa-regular fa-calendar text-gold me-1"></i> <?php echo htmlspecialchars($post['date']); ?>
          </span>
          <span style="font-size: 12.5px; color: var(--text-dim);">
            <i class="fa-regular fa-clock text-gold me-1"></i> <?php echo htmlspecialchars($post['read_time']); ?>
          </span>
        </div>

        <h1 style="font-family: var(--font-display); font-size: clamp(1.9rem, 3.8vw, 2.8rem); line-height: 1.25; color: #fff; margin-bottom: 18px;">
          <?php echo htmlspecialchars($post['title']); ?>
        </h1>

        <p style="font-size: 1.15rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 0;">
          <?php echo htmlspecialchars($post['excerpt']); ?>
        </p>
      </header>

      <!-- Featured Image -->
      <div class="blog-hero-image-wrap">
        <img src="<?php echo $base_path . htmlspecialchars($post['image']); ?>" 
             alt="<?php echo htmlspecialchars($post['title']); ?>" 
             onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80';">
      </div>

      <!-- Quick Executive Takeaway Callout Box -->
      <div class="blog-callout">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fa-solid fa-lightbulb" style="color: var(--gold-primary); font-size: 18px;"></i>
          <h4 style="margin: 0;">Key Takeaway for Odisha Business Owners:</h4>
        </div>
        <p style="font-size: 15px; font-weight: 500;">
          <?php echo htmlspecialchars($post['takeaway']); ?>
        </p>
      </div>

      <!-- Main Body Content -->
      <div class="article-body">
        <?php echo $post['content']; ?>
      </div>

      <!-- Author Attribution & Direct Contact Box -->
      <div class="author-card-box">
        <div class="row align-items-center g-4">
          <div class="col-md-3 text-center">
            <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--gold-primary), var(--gold-dark)); color: #04070e; display: inline-flex; align-items: center; justify-content: center; font-size: 26px; font-weight: 800; font-family: var(--font-display); box-shadow: 0 4px 20px var(--gold-glow);">
              HS
            </div>
            <h5 style="color: #fff; margin: 10px 0 2px 0; font-size: 15px; font-weight: 700;">Hrushikesh Swain</h5>
            <p style="font-size: 11px; color: var(--gold-primary); margin: 0; text-transform: uppercase;">Founder & Senior Web Developer</p>
          </div>
          <div class="col-md-9">
            <h4 style="font-family: var(--font-display); font-size: 1.25rem; color: #fff; margin-bottom: 8px;">
              Direct Engineering Consultation
            </h4>
            <p style="font-size: 13.5px; color: var(--text-cream); line-height: 1.65; margin-bottom: 16px;">
              Have questions about your website, Google ranking, or marketing in Odisha? Talk directly with Founder Hrushikesh Swain. We provide honest feedback and clear architectural roadmaps within 2 hours.
            </p>
            <div class="d-flex flex-wrap gap-2">
              <a href="tel:+917735973818" class="btn-gold" style="padding: 8px 18px; font-size: 12.5px; text-decoration: none;">
                <i class="fa-solid fa-phone"></i> Call +91 7735973818
              </a>
              <a href="https://wa.me/917735973818?text=<?php echo urlencode('Hello Hrushikesh, I read your article "' . $post['title'] . '" and have a question for my business.'); ?>" 
                 target="_blank" 
                 rel="noopener noreferrer" 
                 class="btn-luxury-outline" 
                 style="border-color: #25d366; color: #25d366; padding: 8px 18px; font-size: 12.5px;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Related Service Shortcut (if matching service exists) -->
      <?php if ($related_service): ?>
        <div class="p-4 rounded-3 mb-5" style="background: rgba(14, 21, 38, 0.5); border: 1px solid var(--border-subtle);">
          <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
            <div>
              <span style="font-size: 11px; color: var(--gold-primary); text-transform: uppercase; letter-spacing: 1px; font-weight: 700;">
                Related Web Optimizer Capability
              </span>
              <h4 style="font-family: var(--font-display); color: #fff; margin: 4px 0 0 0; font-size: 1.3rem;">
                Explore Our <?php echo htmlspecialchars($related_service['short_title']); ?> Solutions
              </h4>
            </div>
            <a href="<?php echo $base_path; ?>service/<?php echo $related_service['slug']; ?>" class="btn-gold" style="padding: 10px 20px; font-size: 13px; text-decoration: none;">
              View Service Details <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
            </a>
          </div>
        </div>
      <?php endif; ?>

      <!-- 3 Related Guides -->
      <div class="section-header text-start mt-5 mb-4">
        <span class="section-tag"><i class="fa-solid fa-book-open"></i> Continue Learning</span>
        <h3 style="font-family: var(--font-display); font-size: 1.6rem; color: #fff; margin: 0;">
          More Practical Guides for Odisha Businesses
        </h3>
      </div>

      <div class="row g-4">
        <?php foreach ($related_posts as $rSlug => $rPost): ?>
          <div class="col-md-4">
            <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-3" style="background: rgba(14, 21, 38, 0.65);">
              <div>
                <a href="<?php echo $base_path; ?>blog/<?php echo $rSlug; ?>" class="d-block blog-card-thumb" style="height: 160px;">
                  <img src="<?php echo $base_path . $rPost['image']; ?>" alt="<?php echo htmlspecialchars($rPost['title']); ?>" loading="lazy">
                  <span class="thumb-badge"><?php echo htmlspecialchars($rPost['category']); ?></span>
                </a>
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span style="font-size: 10px; color: var(--gold-light); font-weight: 600;">
                    <i class="fa-solid fa-book-open text-gold me-1"></i> GUIDE
                  </span>
                  <span style="font-size: 10px; color: var(--text-dim);">
                    <i class="fa-regular fa-clock me-1"></i> <?php echo htmlspecialchars($rPost['read_time']); ?>
                  </span>
                </div>
                <h4 style="font-size: 13.5px; color: #fff; font-weight: 700; line-height: 1.45; margin-bottom: 8px;">
                  <a href="<?php echo $base_path; ?>blog/<?php echo $rSlug; ?>" style="color: #fff; text-decoration: none;">
                    <?php echo htmlspecialchars($rPost['title']); ?>
                  </a>
                </h4>
              </div>
              <div class="pt-2 mt-2 border-top border-secondary border-opacity-25">
                <a href="<?php echo $base_path; ?>blog/<?php echo $rSlug; ?>" style="font-size: 11.5px; color: var(--gold-light); font-weight: 600; text-decoration: none;">
                  Read Guide &rarr;
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </article>
</main>

<?php
require __DIR__ . '/includes/footer.php';
?>
