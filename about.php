<?php
/**
 * Web Optimizer - Dedicated About Us Page (/about)
 * Explains Who We Are, What We Do, Our Expertise, Our Approach, Mission & Vision, Commitment & Trust
 * https://www.weboptimizer.in/about
 * Founder & Senior Web Developer: Hrushikesh Swain (+91 7735973818 | info@weboptimizer.in)
 */
require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/portfolio-data.php';
require_once __DIR__ . '/includes/locations-data.php';

$page_title = 'About Us | Web Design & Digital Agency | Web Optimizer';
$meta_desc = 'Learn about Web Optimizer, a Bhubaneswar-based website design, custom software, and digital marketing company led by Hrushikesh Swain. 158+ projects delivered.';
$canonical_url = 'https://www.weboptimizer.in/about';
$active_nav = 'about';
$base_path = './';

// Fallback 301 redirect if accessed via about.php directly
$req_uri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($req_uri, 'about.php') !== false) {
    $script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
    $clean_dir = str_replace('\\', '/', $script_dir);
    $bp = ($clean_dir === '/' || $clean_dir === '.' || $clean_dir === '') ? '/' : rtrim($clean_dir, '/') . '/';
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $bp . "about");
    exit;
}

require __DIR__ . '/includes/header.php';
?>

<!-- AboutPage & Organization Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "@id": "https://www.weboptimizer.in/about#aboutpage",
  "url": "https://www.weboptimizer.in/about",
  "name": "About Web Optimizer | Website Design, Custom Software & Digital Marketing Company",
  "description": "<?php echo htmlspecialchars($meta_desc); ?>",
  "mainEntity": {
    "@type": "ProfessionalService",
    "name": "Web Optimizer",
    "url": "https://www.weboptimizer.in/",
    "foundingDate": "2017",
    "founder": {
      "@type": "Person",
      "name": "Hrushikesh Swain",
      "jobTitle": "Founder & Senior Web Developer"
    },
    "telephone": "+91 7735973818",
    "email": "info@weboptimizer.in",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Bhubaneswar",
      "addressRegion": "Odisha",
      "addressCountry": "IN"
    }
  }
}
</script>

<main>
  <!-- ABOUT US HERO SECTION -->
  <section class="page-banner-section" style="padding-bottom: 45px;">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto text-center">
          <nav class="banner-breadcrumb justify-content-center" aria-label="breadcrumb">
            <a href="<?php echo $base_path; ?>"><i class="fa-solid fa-house"></i> Home</a>
            <span class="sep">/</span>
            <span class="current">About Us</span>
          </nav>

          <div class="banner-pill-badge mb-3">
            <span class="gold-dot"></span>
            <span>ESTABLISHED 2017 &bull; BHUBANESWAR, ODISHA</span>
          </div>

          <h1 class="banner-title">
            Helping Businesses Grow Through <br>
            <span class="gold-gradient-text">Reliable Technology &amp; Digital Strategy</span>
          </h1>

          <p class="banner-lead mx-auto" style="max-width: 820px;">
            Web Optimizer is a full-service digital engineering, custom business software, and performance marketing company dedicated to helping businesses attract customers, streamline operations, and achieve measurable growth.
          </p>

          <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="<?php echo $base_path; ?>contact" class="btn-gold" style="padding: 12px 26px; font-size: 14px; text-decoration: none;">
              <i class="fa-solid fa-comments"></i> Discuss Your Project
            </a>
            <a href="<?php echo $base_path; ?>services" class="btn-luxury-outline" style="padding: 12px 24px; font-size: 14px;">
              <i class="fa-solid fa-layer-group"></i> Explore Our Services
            </a>
          </div>

          <div class="d-flex flex-wrap justify-content-center gap-2">
            <span class="banner-stat-chip"><strong style="color:var(--gold-light);">8+ Years</strong> Industry Experience</span>
            <span class="banner-stat-chip"><strong style="color:var(--gold-light);">158+</strong> Projects Delivered</span>
            <span class="banner-stat-chip"><strong style="color:var(--gold-light);">448+</strong> Business Clients</span>
            <span class="banner-stat-chip"><strong style="color:var(--gold-light);">50 Cities</strong> Served in Odisha</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 1. WHO WE ARE & 2. WHAT WE DO -->
  <section class="section-wrap" style="padding-top: 20px;">
    <div class="container">
      <div class="row g-4 align-items-stretch mb-5">
        <div class="col-lg-6">
          <div class="deliverable-card h-100 p-4">
            <span class="section-tag"><i class="fa-solid fa-building-user"></i> Who We Are</span>
            <h2 style="font-family: var(--font-display); font-size: 1.75rem; color: #fff; margin: 8px 0 14px 0;">
              A Senior-Led Digital &amp; Technology Partner for Growing Businesses
            </h2>
            <p style="font-size: 14.5px; color: var(--text-cream); line-height: 1.8; margin-bottom: 14px;">
              Founded and led by Senior Web Developer <strong>Hrushikesh Swain</strong> in Bhubaneswar, Odisha, <strong>Web Optimizer</strong> was built to solve a common frustration faced by business owners: hiring agencies that overpromise with flashy buzzwords but deliver slow websites, generic social media posts, and zero real business enquiries.
            </p>
            <p style="font-size: 14.5px; color: var(--text-muted); line-height: 1.8; margin: 0;">
              Over the past 8+ years, we have partnered with more than 448 businesses—ranging from local healthcare clinics, schools, hotels, and manufacturing units across Odisha to e-commerce and corporate brands across India and international markets. When you work with Web Optimizer, you work directly with experienced engineers and digital strategists who understand both technology and business operations.
            </p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="deliverable-card h-100 p-4">
            <span class="section-tag"><i class="fa-solid fa-gears"></i> What We Do</span>
            <h2 style="font-family: var(--font-display); font-size: 1.75rem; color: #fff; margin: 8px 0 14px 0;">
              End-to-End Digital Solutions Under One Accountable Roof
            </h2>
            <p style="font-size: 14.5px; color: var(--text-cream); line-height: 1.8; margin-bottom: 14px;">
              We provide the complete technology and marketing foundation a modern business needs to succeed:
            </p>
            <ul class="list-unstyled" style="font-size: 14px; color: var(--text-muted); line-height: 1.75; margin: 0;">
              <li class="mb-2"><i class="fa-solid fa-check text-gold me-2"></i> <strong>Custom Website &amp; E-Commerce Development:</strong> Fast, mobile-responsive WordPress, WooCommerce, Shopify, and custom PHP websites engineered to convert visitors into leads.</li>
              <li class="mb-2"><i class="fa-solid fa-check text-gold me-2"></i> <strong>Custom Quotation, Billing &amp; Business Software:</strong> Tailored GST invoicing, quotation generators, inventory tracking, and workflow web applications.</li>
              <li class="mb-2"><i class="fa-solid fa-check text-gold me-2"></i> <strong>Search Engine Optimization (SEO &amp; AI Search):</strong> Technical SEO, Local Google Maps ranking, and content optimization for Google and AI search platforms.</li>
              <li class="mb-2"><i class="fa-solid fa-check text-gold me-2"></i> <strong>Performance Marketing &amp; Social Media:</strong> ROI-tracked Google Ads, Meta Ads, LinkedIn B2B campaigns, and brand-building social media management.</li>
              <li><i class="fa-solid fa-check text-gold me-2"></i> <strong>Branding &amp; WhatsApp Automation:</strong> Corporate visual identity systems, sales brochures, and 24/7 WhatsApp Business API lead automation.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 3. OUR MISSION AND VISION -->
      <div class="row g-4 mb-5">
        <div class="col-lg-6">
          <div class="service-overview-box h-100 mb-0" style="border-left: 4px solid var(--gold-primary);">
            <span class="section-tag"><i class="fa-solid fa-bullseye"></i> Our Mission</span>
            <h2 style="font-family: var(--font-display); font-size: 1.55rem; color: #fff; margin: 8px 0 12px 0;">
              Delivering Practical Digital Solutions That Generate Real Business Results
            </h2>
            <p style="font-size: 14.5px; color: var(--text-cream); line-height: 1.8; margin: 0;">
              Our mission is to empower small, mid-sized, and enterprise businesses with fast, dependable web technology, custom operational software, and honest digital marketing—eliminating technical complexity so business owners can focus on serving their customers and scaling their revenue.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-overview-box h-100 mb-0" style="border-left: 4px solid var(--accent-cyan);">
            <span class="section-tag"><i class="fa-solid fa-eye"></i> Our Vision</span>
            <h2 style="font-family: var(--font-display); font-size: 1.55rem; color: #fff; margin: 8px 0 12px 0;">
              Setting the Standard for Engineering Quality &amp; Client Trust
            </h2>
            <p style="font-size: 14.5px; color: var(--text-cream); line-height: 1.8; margin: 0;">
              Our vision is to be the most trusted technology and digital growth partner for businesses across Odisha and India—recognized for clean custom code, transparent business ethics, long-term client partnerships, and measurable commercial outcomes.
            </p>
          </div>
        </div>
      </div>

      <!-- 4. OUR EXPERTISE -->
      <div class="section-header text-center mb-4">
        <span class="section-tag"><i class="fa-solid fa-microchip"></i> Our Core Expertise</span>
        <h2 class="section-title-lg">6 Specialized Practice Areas Working Together</h2>
        <p class="section-desc mx-auto" style="max-width: 780px;">
          Unlike single-channel freelancers or fragmented vendors, our team brings together engineering, design, search visibility, and automation under one roof.
        </p>
      </div>

      <div class="row g-4 mb-5">
        <?php foreach ($service_parents as $pk => $p): ?>
          <div class="col-lg-4 col-md-6">
            <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-4">
              <div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div class="dropdown-item-icon" style="width:42px; height:42px; font-size:18px;">
                    <i class="fa-solid <?php echo htmlspecialchars($p['icon']); ?>"></i>
                  </div>
                  <span class="badge" style="background:rgba(212,175,55,0.12); color:var(--gold-light); font-size:10px; border:1px solid var(--border-gold);">
                    <?php echo count($p['sub_services']); ?> Services
                  </span>
                </div>
                <h3 style="font-size:1.2rem; color:#fff; font-weight:700; margin-bottom:10px;">
                  <?php echo htmlspecialchars($p['title']); ?>
                </h3>
                <p style="font-size:13.5px; color:var(--text-muted); line-height:1.65; margin-bottom:16px;">
                  <?php echo htmlspecialchars($p['description']); ?>
                </p>
              </div>
              <div>
                <a href="<?php echo $base_path; ?>service/<?php echo htmlspecialchars($p['slug']); ?>" class="btn-luxury-outline w-100 text-center" style="padding:9px 14px; font-size:12.5px;">
                  Explore <?php echo htmlspecialchars($p['short_title']); ?> <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- 5. OUR APPROACH TO CLIENT PROJECTS -->
      <div class="section-header text-center mb-4">
        <span class="section-tag"><i class="fa-solid fa-diagram-project"></i> How We Work</span>
        <h2 class="section-title-lg">Our Approach to Every Client Project</h2>
        <p class="section-desc mx-auto" style="max-width: 780px;">
          We follow a disciplined, business-first process that ensures your project is delivered on time, within budget, and aligned with your commercial goals.
        </p>
      </div>

      <div class="process-timeline mb-5">
        <div class="process-step-card">
          <div class="process-step-num">01</div>
          <h3 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;">Listen &amp; Understand</h3>
          <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
            We start by understanding your business model, customers, sales process, and operational pain points before recommending any solution.
          </p>
        </div>
        <div class="process-step-card">
          <div class="process-step-num">02</div>
          <h3 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;">Clear Scope &amp; Roadmap</h3>
          <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
            You receive a written proposal detailing exact deliverables, milestones, timelines, and transparent pricing with zero hidden fees.
          </p>
        </div>
        <div class="process-step-card">
          <div class="process-step-num">03</div>
          <h3 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;">Custom Execution</h3>
          <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
            Our team builds your website, software, or marketing campaign from scratch with clean code, mobile-first design, and persuasive copy.
          </p>
        </div>
        <div class="process-step-card">
          <div class="process-step-num">04</div>
          <h3 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;">Quality &amp; Speed Testing</h3>
          <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
            We rigorously test loading speeds, mobile responsiveness, security protections, form submissions, and search readiness before launch.
          </p>
        </div>
        <div class="process-step-card">
          <div class="process-step-num">05</div>
          <h3 style="color:#fff; font-size:15px; font-weight:700; margin-bottom:6px;">Support &amp; Growth</h3>
          <p style="font-size:12.5px; color:var(--text-muted); line-height:1.6; margin:0;">
            After launch, we train your staff, monitor performance, and provide responsive ongoing support to help your business keep growing.
          </p>
        </div>
      </div>

      <!-- 6. OUR COMMITMENT TO CLIENTS & 7. WHY BUSINESSES CAN TRUST US -->
      <div class="section-header text-center mb-4">
        <span class="section-tag"><i class="fa-solid fa-shield-halved"></i> Why Businesses Trust Web Optimizer</span>
        <h2 class="section-title-lg">Our Commitment to Every Client</h2>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-lg-4 col-md-6">
          <div class="benefit-card h-100 p-4">
            <div class="benefit-icon"><i class="fa-solid fa-user-tie"></i></div>
            <h3 style="font-size:1.1rem; color:#fff; font-weight:700; margin-bottom:8px;">Direct Senior Developer Access</h3>
            <p style="font-size:13.5px; color:var(--text-muted); line-height:1.65; margin:0;">
              You communicate directly with Founder &amp; Senior Web Developer Hrushikesh Swain. Your requirements are understood accurately the first time without middleman delays.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="benefit-card h-100 p-4">
            <div class="benefit-icon"><i class="fa-solid fa-key"></i></div>
            <h3 style="font-size:1.1rem; color:#fff; font-weight:700; margin-bottom:8px;">100% Ownership of Your Assets</h3>
            <p style="font-size:13.5px; color:var(--text-muted); line-height:1.65; margin:0;">
              You retain complete ownership of your domain, website source code, custom billing database, Google Ads account, and brand files—we never lock clients in.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="benefit-card h-100 p-4">
            <div class="benefit-icon"><i class="fa-solid fa-bolt"></i></div>
            <h3 style="font-size:1.1rem; color:#fff; font-weight:700; margin-bottom:8px;">Performance &amp; Security First</h3>
            <p style="font-size:13.5px; color:var(--text-muted); line-height:1.65; margin:0;">
              Every website and application we build is optimized for sub-second loading speeds, 99+ Core Web Vitals, SSL encryption, and enterprise firewall protection.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="benefit-card h-100 p-4">
            <div class="benefit-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
            <h3 style="font-size:1.1rem; color:#fff; font-weight:700; margin-bottom:8px;">Honest, Transparent Pricing</h3>
            <p style="font-size:13.5px; color:var(--text-muted); line-height:1.65; margin:0;">
              We recommend only the services your business genuinely needs right now and provide itemized quotations with clear deliverables and timelines.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="benefit-card h-100 p-4">
            <div class="benefit-icon"><i class="fa-solid fa-chart-line"></i></div>
            <h3 style="font-size:1.1rem; color:#fff; font-weight:700; margin-bottom:8px;">Focus on Qualified Enquiries</h3>
            <p style="font-size:13.5px; color:var(--text-muted); line-height:1.65; margin:0;">
              We measure our success by the real phone calls, WhatsApp enquiries, store orders, and time savings our work generates for your business.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="benefit-card h-100 p-4">
            <div class="benefit-icon"><i class="fa-solid fa-headset"></i></div>
            <h3 style="font-size:1.1rem; color:#fff; font-weight:700; margin-bottom:8px;">Dependable Post-Launch Support</h3>
            <p style="font-size:13.5px; color:var(--text-muted); line-height:1.65; margin:0;">
              We don't disappear after launch. Whether you need a quick update, technical troubleshooting, or seasonal campaign support, our team is just a phone call or WhatsApp away.
            </p>
          </div>
        </div>
      </div>

      <!-- CTA BANNER -->
      <div class="service-cta-banner">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8 text-center">
            <span class="section-tag" style="display:inline-block;"><i class="fa-solid fa-handshake"></i> Partner With Us</span>
            <h2 style="font-family:var(--font-display); font-size:clamp(1.6rem, 2.8vw, 2.4rem); color:#fff; margin:12px 0 16px 0;">
              Let's Discuss How We Can Help Your Business Grow
            </h2>
            <p style="font-size:14.5px; color:var(--text-cream); line-height:1.7; margin-bottom:28px;">
              Whether you need a new business website, custom GST quotation &amp; billing software, higher Google rankings, or a complete digital marketing strategy, we are ready to help.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <a href="<?php echo $base_path; ?>contact" class="btn-gold" style="padding:14px 28px; font-size:15px; text-decoration:none;">
                <i class="fa-solid fa-calendar-check"></i> Get a Free Consultation
              </a>
              <a href="tel:+917735973818" class="btn-luxury-outline" style="padding:14px 26px; font-size:15px;">
                <i class="fa-solid fa-phone"></i> Call +91 7735973818
              </a>
              <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20would%20like%20to%20discuss%20a%20project%20for%20my%20business." 
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

    </div>
  </section>
</main>

<?php
require __DIR__ . '/includes/footer.php';
?>
