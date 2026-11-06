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
    <?php
    // 9 Flagship Service Slides for the Homepage Hero Slider (100% Custom Services — Not Off-the-Shelf Products)
    $hero_slides = [
        [
            'num' => '01',
            'tab_label' => 'Website Design',
            'icon' => 'fa-solid fa-laptop-code',
            'badge' => 'CUSTOM WEBSITE DESIGN & DEVELOPMENT SERVICE',
            'slogan_main' => 'Turn Every Visitor Into a Customer With ',
            'slogan_highlight' => 'Fast, Custom Website Design',
            'lead' => 'We provide bespoke website design and engineering services tailored to your brand—delivering mobile-first responsiveness, sub-second page speeds, and conversion-focused layouts that generate daily business enquiries.',
            'cta_text' => 'Explore Website Design Service',
            'cta_url' => $base_path . 'service/website-development',
            'image' => $base_path . 'assets/images/banners/services/banner-website-development.webp',
            'image_alt' => 'Custom Website Design and Development Service by Web Optimizer in Bhubaneswar, Odisha',
            'image_title' => 'Website Design Service | Fast, Mobile-First Custom Business Websites',
            'caption' => 'Custom UI/UX • 99+ Core Web Vitals • SEO-Ready Architecture'
        ],
        [
            'num' => '02',
            'tab_label' => 'Digital Marketing',
            'icon' => 'fa-solid fa-bullhorn',
            'badge' => 'FULL-FUNNEL DIGITAL MARKETING SERVICE',
            'slogan_main' => 'Attract High-Intent Buyers & Scale Sales With ',
            'slogan_highlight' => 'Data-Driven Digital Marketing',
            'lead' => 'Our managed digital marketing services combine search engine ranking, local Google Business optimization, performance campaigns, and conversion tracking to bring qualified leads directly to your sales team.',
            'cta_text' => 'Explore Digital Marketing Service',
            'cta_url' => $base_path . 'service/digital-marketing',
            'image' => $base_path . 'assets/images/banners/services/banner-digital-marketing.webp',
            'image_alt' => 'Full-Funnel Digital Marketing Service for Business Lead Generation by Web Optimizer',
            'image_title' => 'Digital Marketing Service | SEO, Paid Ads & Conversion Growth',
            'caption' => '360° Growth Strategy • Verified Enquiries • Transparent ROI Reporting'
        ],
        [
            'num' => '03',
            'tab_label' => 'Hospital & Doctor Booking',
            'icon' => 'fa-solid fa-user-doctor',
            'badge' => 'HEALTHCARE APPOINTMENT & PAYMENT INTEGRATION SERVICE',
            'slogan_main' => 'Simplify Patient Care With Custom ',
            'slogan_highlight' => 'Hospital & Doctor Appointment Booking + Payment',
            'lead' => 'We design and integrate custom online OPD slot scheduling, multi-specialty doctor calendars, instant UPI/card fee payment gateways, and automated WhatsApp patient reminders for clinics and hospitals.',
            'cta_text' => 'Explore Doctor Booking Service',
            'cta_url' => $base_path . 'service/hospital-doctor-appointment-booking',
            'image' => $base_path . 'assets/images/banners/services/banner-hospital-doctor-appointment-booking.webp',
            'image_alt' => 'Custom Hospital and Doctor Appointment Booking with Online Payment Service by Web Optimizer',
            'image_title' => 'Hospital & Doctor Appointment Booking with Payment Service',
            'caption' => 'Live OPD Slot Calendar • Instant UPI/Card Payment • WhatsApp Patient Alerts'
        ],
        [
            'num' => '04',
            'tab_label' => 'School Website Maintenance',
            'icon' => 'fa-solid fa-Graduation-cap fa-graduation-cap',
            'badge' => 'EDUCATIONAL PORTAL & ANNUAL AMC SERVICE',
            'slogan_main' => 'Keep Your Institution Updated & Compliant With ',
            'slogan_highlight' => 'School Website Design & Maintenance Service',
            'lead' => 'Dedicated website development and year-round annual maintenance services for schools and colleges—covering CBSE/ICSE mandatory disclosures, notice boards, admission forms, event galleries, and security backups.',
            'cta_text' => 'Explore School Website Service',
            'cta_url' => $base_path . 'service/school-website-maintenance',
            'image' => $base_path . 'assets/images/banners/services/banner-school-website-maintenance.webp',
            'image_alt' => 'School Website Design and Annual Maintenance Service in Odisha by Web Optimizer',
            'image_title' => 'School Website Design & Annual Maintenance (AMC) Service',
            'caption' => 'CBSE/ICSE Mandatory Disclosure • Same-Day Notice Updates • Admission Portal'
        ],
        [
            'num' => '05',
            'tab_label' => 'Quotation & Billing App',
            'icon' => 'fa-solid fa-file-invoice-dollar',
            'badge' => 'CUSTOM QUOTATION & GST BILLING APPLICATION SERVICE',
            'slogan_main' => 'Send Branded Quotes & GST Invoices in Seconds With ',
            'slogan_highlight' => 'Custom Quotation & Billing Application Service',
            'lead' => 'We build custom web and mobile quotation, billing, and GST invoicing applications tailored to your exact pricing rules, HSN/SAC tax slabs, and inventory workflow—with one-click WhatsApp PDF delivery.',
            'cta_text' => 'Explore Quotation & Billing Service',
            'cta_url' => $base_path . 'service/quotation-billing-invoice-software',
            'image' => $base_path . 'assets/images/banners/services/banner-quotation-billing-invoice-software.webp',
            'image_alt' => 'Custom Quotation, Billing and GST Invoicing Application Development Service by Web Optimizer',
            'image_title' => 'Custom Quotation & GST Billing Application Development Service',
            'caption' => '1-Click Quote-to-Invoice • HSN/SAC GST Engine • Direct WhatsApp PDF Share'
        ],
        [
            'num' => '06',
            'tab_label' => 'Paid Google Ads',
            'icon' => 'fa-brands fa-google',
            'badge' => 'CERTIFIED PAID GOOGLE ADS MANAGEMENT SERVICE',
            'slogan_main' => 'Capture Ready-to-Buy Customers Instantly With ',
            'slogan_highlight' => 'High-ROI Paid Google Ads Service',
            'lead' => 'Our Google Ads management service puts your business at the top of Google Search the exact moment customers look for your services—maximizing phone calls and qualified form leads while eliminating wasted click spend.',
            'cta_text' => 'Explore Paid Google Ads Service',
            'cta_url' => $base_path . 'service/google-ads',
            'image' => $base_path . 'assets/images/banners/services/banner-google-ads.webp',
            'image_alt' => 'Paid Google Ads PPC Campaign Management Service by Web Optimizer',
            'image_title' => 'Paid Google Ads Service | Search, Call-Only & Lead Generation PPC',
            'caption' => 'High-Intent Search Keywords • Negative Keyword Shield • Call & Lead Tracking'
        ],
        [
            'num' => '07',
            'tab_label' => 'Meta Paid Ads',
            'icon' => 'fa-brands fa-meta',
            'badge' => 'FACEBOOK & INSTAGRAM META PAID ADS SERVICE',
            'slogan_main' => 'Turn Social Scrolling Into Daily Enquiries With ',
            'slogan_highlight' => 'Targeted Meta Paid Ads Service',
            'lead' => 'We plan, design, and manage high-converting Facebook and Instagram ad campaigns—including Click-to-WhatsApp ads, instant lead forms, and retargeting funnels that connect your business with local and national buyers.',
            'cta_text' => 'Explore Meta Paid Ads Service',
            'cta_url' => $base_path . 'service/paid-social-media',
            'image' => $base_path . 'assets/images/banners/services/banner-paid-social-media.webp',
            'image_alt' => 'Meta Paid Ads Management Service for Facebook and Instagram Lead Generation by Web Optimizer',
            'image_title' => 'Meta Paid Ads Service | Facebook & Instagram Ad Campaigns',
            'caption' => 'Click-to-WhatsApp Ads • Precision Audience Targeting • Server-Side CAPI'
        ],
        [
            'num' => '08',
            'tab_label' => 'Mobile Application',
            'icon' => 'fa-solid fa-mobile-screen-button',
            'badge' => 'CUSTOM ANDROID & iOS MOBILE APP SERVICE',
            'slogan_main' => 'Put Your Business Directly in Customers’ Hands With ',
            'slogan_highlight' => 'Custom Mobile Application Service',
            'lead' => 'End-to-end mobile application design, development, API integration, and Play Store / App Store deployment services—building fast, secure Android and iOS apps for booking, ordering, field teams, and customer loyalty.',
            'cta_text' => 'Explore Mobile Application Service',
            'cta_url' => $base_path . 'service/mobile-application-development',
            'image' => $base_path . 'assets/images/banners/services/banner-mobile-application-development.webp',
            'image_alt' => 'Custom Android and iOS Mobile Application Development Service by Web Optimizer',
            'image_title' => 'Mobile Application Development Service | Custom Android & iOS Apps',
            'caption' => 'Android & iOS Engineering • UPI & Push Notifications • Full Code Ownership'
        ],
        [
            'num' => '09',
            'tab_label' => 'Web Application',
            'icon' => 'fa-solid fa-cubes',
            'badge' => 'BESPOKE CLOUD WEB APPLICATION SERVICE',
            'slogan_main' => 'Automate Complex Business Operations With ',
            'slogan_highlight' => 'Custom Web Application Service',
            'lead' => 'Replace disconnected spreadsheets with a secure, custom-engineered web application built around your exact business rules—featuring role-based dashboards, automated reporting, CRM workflows, and API integrations.',
            'cta_text' => 'Explore Web Application Service',
            'cta_url' => $base_path . 'service/custom-web-application',
            'image' => $base_path . 'assets/images/banners/services/banner-custom-web-application.webp',
            'image_alt' => 'Custom Cloud Web Application Development Service for Business Automation by Web Optimizer',
            'image_title' => 'Web Application Development Service | Custom Portals & Dashboards',
            'caption' => 'Role-Based Cloud Portals • Automated Workflows • Enterprise Security'
        ]
    ];
    ?>

    <!-- 1. INTERACTIVE 9-SERVICE HERO SLIDER (IMAGE + SLOGAN + ONE CLEAR CTA PER SLIDE) -->
    <section class="hero hero-slider-section" id="hero">
      <div class="container" style="position: relative; z-index: 2;">
        
        <!-- Quick Service Selector Tabs (All 9 Core Services) -->
        <div class="hero-service-tabs-bar" role="tablist" aria-label="Featured Digital and Application Services">
          <?php foreach ($hero_slides as $s_idx => $slide): ?>
            <button type="button"
                    class="hero-service-tab <?php echo $s_idx === 0 ? 'active' : ''; ?>"
                    data-hero-slide="<?php echo $s_idx; ?>"
                    role="tab"
                    aria-selected="<?php echo $s_idx === 0 ? 'true' : 'false'; ?>">
              <i class="<?php echo htmlspecialchars($slide['icon']); ?>"></i>
              <span><?php echo htmlspecialchars($slide['tab_label']); ?></span>
            </button>
          <?php endforeach; ?>
        </div>

        <!-- Slides Stage -->
        <div class="hero-slides-stage" id="heroSlidesStage">
          <?php foreach ($hero_slides as $s_idx => $slide): ?>
            <div class="hero-slide-item <?php echo $s_idx === 0 ? 'active' : ''; ?>" data-slide-index="<?php echo $s_idx; ?>">
              <div class="row align-items-center g-4 g-lg-5">
                
                <!-- Left Column: Service Badge, Slogan, Description & Single CTA -->
                <div class="col-lg-6">
                  <div class="hero-badge-gold mb-3">
                    <span class="gold-dot"></span>
                    <span><?php echo $slide['num']; ?> / 09 &bull; <?php echo htmlspecialchars($slide['badge']); ?></span>
                  </div>

                  <?php if ($s_idx === 0): ?>
                    <h1 class="hero-title hero-slide-slogan">
                      <?php echo htmlspecialchars($slide['slogan_main']); ?>
                      <span class="gradient-text-agency"><?php echo htmlspecialchars($slide['slogan_highlight']); ?></span>
                    </h1>
                  <?php else: ?>
                    <h2 class="hero-title hero-slide-slogan">
                      <?php echo htmlspecialchars($slide['slogan_main']); ?>
                      <span class="gradient-text-agency"><?php echo htmlspecialchars($slide['slogan_highlight']); ?></span>
                    </h2>
                  <?php endif; ?>

                  <p class="hero-lead mb-4">
                    <?php echo htmlspecialchars($slide['lead']); ?>
                  </p>

                  <!-- Strictly ONE Focused CTA Per Slide -->
                  <div class="hero-actions mb-3">
                    <a href="<?php echo htmlspecialchars($slide['cta_url']); ?>" class="btn-gold hero-single-cta">
                      <span><?php echo htmlspecialchars($slide['cta_text']); ?></span>
                      <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                  </div>

                  <div class="hero-service-note">
                    <i class="fa-solid fa-circle-check" style="color: var(--gold-primary);"></i>
                    <span>100% Custom-Engineered Service Tailored to Your Business &bull; Direct Senior Support (+91 7735973818)</span>
                  </div>
                </div>

                <!-- Right Column: Visual Service Banner Image Frame -->
                <div class="col-lg-6">
                  <div class="hero-slide-image-card">
                    <div class="hero-slide-img-wrapper">
                      <img src="<?php echo htmlspecialchars($slide['image']); ?>"
                           alt="<?php echo htmlspecialchars($slide['image_alt']); ?>"
                           title="<?php echo htmlspecialchars($slide['image_title']); ?>"
                           width="1280"
                           height="720"
                           <?php echo $s_idx === 0 ? 'fetchpriority="high"' : 'loading="lazy"'; ?>
                           draggable="false"
                           class="img-fluid hero-slide-img">
                      <div class="hero-slide-caption-bar">
                        <span class="gold-dot"></span>
                        <span><?php echo htmlspecialchars($slide['caption']); ?></span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Slider Controls Bar: Prev/Next Arrows, Dots & Progress Bar -->
        <div class="hero-slider-controls-bar">
          <div class="d-flex align-items-center gap-2">
            <button type="button" class="hero-nav-arrow" id="heroPrevBtn" aria-label="Previous Service Slide">
              <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button type="button" class="hero-nav-arrow" id="heroNextBtn" aria-label="Next Service Slide">
              <i class="fa-solid fa-chevron-right"></i>
            </button>
            <span class="hero-slide-counter ms-2" id="heroSlideCounter">Slide 01 of 09</span>
          </div>

          <div class="hero-slider-dots" id="heroSliderDots">
            <?php foreach ($hero_slides as $s_idx => $slide): ?>
              <button type="button"
                      class="hero-dot <?php echo $s_idx === 0 ? 'active' : ''; ?>"
                      data-hero-dot="<?php echo $s_idx; ?>"
                      aria-label="Go to slide <?php echo ($s_idx + 1) . ': ' . htmlspecialchars($slide['tab_label']); ?>"></button>
            <?php endforeach; ?>
          </div>

          <div class="hero-autoplay-progress">
            <div class="hero-autoplay-fill" id="heroAutoplayFill"></div>
          </div>
        </div>

        <!-- Key Agency Credibility Metrics Strip -->
        <div class="row g-3 mt-3 pt-3 border-top border-secondary border-opacity-25">
          <div class="col-6 col-md-3">
            <div class="stat-card text-center py-3">
              <div class="stat-num" style="font-size: 1.55rem;">158+</div>
              <div class="stat-desc">Projects Delivered</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="stat-card text-center py-3">
              <div class="stat-num" style="font-size: 1.55rem;">448+</div>
              <div class="stat-desc">Business Clients</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="stat-card text-center py-3">
              <div class="stat-num" style="font-size: 1.55rem;">&lt;800ms</div>
              <div class="stat-desc">Avg Page Speed</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="stat-card text-center py-3">
              <div class="stat-num" style="font-size: 1.55rem;">8+ Yrs</div>
              <div class="stat-desc">Service Excellence</div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <style>
      .hero-slider-section {
        padding-top: 32px;
        padding-bottom: 44px;
        position: relative;
        overflow: hidden;
      }
      .hero-service-tabs-bar {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        gap: 8px;
        padding-bottom: 12px;
        margin-bottom: 24px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        scrollbar-width: thin;
      }
      .hero-service-tabs-bar::-webkit-scrollbar {
        height: 4px;
      }
      .hero-service-tabs-bar::-webkit-scrollbar-thumb {
        background: rgba(212, 175, 55, 0.35);
        border-radius: 99px;
      }
      .hero-service-tab {
        flex: 0 0 auto;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 8px 14px;
        border-radius: 999px;
        font-size: 12.5px;
        font-weight: 600;
        color: #cbd5e1;
        background: rgba(15, 23, 42, 0.75);
        border: 1px solid rgba(255, 255, 255, 0.1);
        cursor: pointer;
        transition: all 0.25s ease;
        white-space: nowrap;
      }
      .hero-service-tab i {
        color: var(--gold-primary);
        font-size: 12px;
      }
      .hero-service-tab:hover {
        color: #ffffff;
        border-color: rgba(212, 175, 55, 0.5);
        background: rgba(30, 41, 59, 0.9);
      }
      .hero-service-tab.active {
        color: #090d16;
        background: linear-gradient(135deg, #f5d061 0%, #d4af37 100%);
        border-color: #f5d061;
        font-weight: 700;
        box-shadow: 0 4px 16px rgba(212, 175, 55, 0.3);
      }
      .hero-service-tab.active i {
        color: #090d16;
      }
      .hero-slides-stage {
        position: relative;
        min-height: 410px;
      }
      .hero-slide-item {
        display: none;
        animation: heroSlideFadeIn 0.45s cubic-bezier(0.16, 1, 0.3, 1);
      }
      .hero-slide-item.active {
        display: block;
      }
      @keyframes heroSlideFadeIn {
        from {
          opacity: 0;
          transform: translateY(10px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      .hero-slide-slogan {
        font-size: clamp(1.85rem, 3.3vw, 2.85rem);
        line-height: 1.18;
        margin-bottom: 16px;
        font-weight: 800;
      }
      .hero-single-cta {
        display: inline-flex;
        align-items: center;
        padding: 14px 28px;
        font-size: 15px;
        font-weight: 700;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(212, 175, 55, 0.28);
      }
      .hero-service-note {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12.5px;
        color: #94a3b8;
        margin-top: 6px;
      }
      .hero-slide-image-card {
        position: relative;
        padding: 10px;
        border-radius: 18px;
        background: linear-gradient(145deg, rgba(30, 41, 59, 0.75), rgba(15, 23, 42, 0.92));
        border: 1px solid rgba(212, 175, 55, 0.32);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.55);
      }
      .hero-slide-img-wrapper {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        aspect-ratio: 16 / 9;
        background: #090d16;
      }
      .hero-slide-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
      }
      .hero-slide-image-card:hover .hero-slide-img {
        transform: scale(1.02);
      }
      .hero-slide-caption-bar {
        position: absolute;
        left: 12px;
        right: 12px;
        bottom: 12px;
        padding: 8px 14px;
        border-radius: 10px;
        background: rgba(9, 13, 22, 0.88);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(212, 175, 55, 0.3);
        color: #f8fafc;
        font-size: 12px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
      }
      .hero-slider-controls-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 14px;
        margin-top: 24px;
        padding-top: 16px;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
      }
      .hero-nav-arrow {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: 1px solid rgba(212, 175, 55, 0.4);
        background: rgba(15, 23, 42, 0.85);
        color: #f8fafc;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s ease;
      }
      .hero-nav-arrow:hover {
        background: var(--gold-primary);
        color: #090d16;
        border-color: var(--gold-primary);
      }
      .hero-slide-counter {
        font-size: 12.5px;
        font-weight: 700;
        color: #cbd5e1;
        letter-spacing: 0.5px;
      }
      .hero-slider-dots {
        display: flex;
        align-items: center;
        gap: 8px;
      }
      .hero-dot {
        width: 10px;
        height: 10px;
        border-radius: 99px;
        border: none;
        background: rgba(255, 255, 255, 0.22);
        cursor: pointer;
        transition: all 0.25s ease;
        padding: 0;
      }
      .hero-dot.active {
        width: 28px;
        background: var(--gold-primary);
      }
      .hero-autoplay-progress {
        width: 140px;
        height: 5px;
        border-radius: 99px;
        background: rgba(255, 255, 255, 0.12);
        overflow: hidden;
      }
      .hero-autoplay-fill {
        height: 100%;
        width: 0%;
        background: linear-gradient(90deg, var(--gold-primary), #38bdf8);
        transition: width 0.1s linear;
      }
      @media (max-width: 991.98px) {
        .hero-slides-stage {
          min-height: auto;
        }
        .hero-slide-slogan {
          font-size: 1.75rem;
        }
      }
      @media (max-width: 575.98px) {
        .hero-single-cta {
          width: 100%;
          justify-content: center;
        }
        .hero-autoplay-progress {
          display: none;
        }
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var slides = document.querySelectorAll('.hero-slide-item');
        var tabs = document.querySelectorAll('.hero-service-tab');
        var dots = document.querySelectorAll('.hero-dot');
        var prevBtn = document.getElementById('heroPrevBtn');
        var nextBtn = document.getElementById('heroNextBtn');
        var counterEl = document.getElementById('heroSlideCounter');
        var progressFill = document.getElementById('heroAutoplayFill');
        var stage = document.getElementById('heroSlidesStage');
        if (!slides.length) return;

        var currentIndex = 0;
        var totalSlides = slides.length;
        var intervalMs = 5500;
        var stepMs = 55;
        var elapsed = 0;
        var isPaused = false;

        function pad2(n) {
          return n < 10 ? '0' + n : '' + n;
        }

        function goToSlide(idx) {
          currentIndex = (idx + totalSlides) % totalSlides;
          slides.forEach(function (s, i) {
            s.classList.toggle('active', i === currentIndex);
          });
          tabs.forEach(function (t, i) {
            var active = i === currentIndex;
            t.classList.toggle('active', active);
            t.setAttribute('aria-selected', active ? 'true' : 'false');
          });
          dots.forEach(function (d, i) {
            d.classList.toggle('active', i === currentIndex);
          });
          if (counterEl) {
            counterEl.textContent = 'Slide ' + pad2(currentIndex + 1) + ' of ' + pad2(totalSlides);
          }
          elapsed = 0;
          if (progressFill) progressFill.style.width = '0%';
        }

        tabs.forEach(function (tab) {
          tab.addEventListener('click', function () {
            var target = parseInt(tab.getAttribute('data-hero-slide'), 10);
            if (!isNaN(target)) goToSlide(target);
          });
        });

        dots.forEach(function (dot) {
          dot.addEventListener('click', function () {
            var target = parseInt(dot.getAttribute('data-hero-dot'), 10);
            if (!isNaN(target)) goToSlide(target);
          });
        });

        if (prevBtn) {
          prevBtn.addEventListener('click', function () {
            goToSlide(currentIndex - 1);
          });
        }
        if (nextBtn) {
          nextBtn.addEventListener('click', function () {
            goToSlide(currentIndex + 1);
          });
        }

        // Touch swipe support on mobile/tablet
        var touchStartX = 0;
        if (stage) {
          stage.addEventListener('touchstart', function (e) {
            if (e.changedTouches && e.changedTouches.length) {
              touchStartX = e.changedTouches[0].screenX;
            }
          }, { passive: true });
          stage.addEventListener('touchend', function (e) {
            if (e.changedTouches && e.changedTouches.length) {
              var diff = e.changedTouches[0].screenX - touchStartX;
              if (Math.abs(diff) > 45) {
                if (diff < 0) goToSlide(currentIndex + 1);
                else goToSlide(currentIndex - 1);
              }
            }
          }, { passive: true });
          stage.addEventListener('mouseenter', function () { isPaused = true; });
          stage.addEventListener('mouseleave', function () { isPaused = false; });
        }

        setInterval(function () {
          if (isPaused) return;
          elapsed += stepMs;
          if (progressFill) {
            var pct = Math.min(100, (elapsed / intervalMs) * 100);
            progressFill.style.width = pct + '%';
          }
          if (elapsed >= intervalMs) {
            goToSlide(currentIndex + 1);
          }
        }, stepMs);
      });
    </script>

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
            <span style="font-size: 11px; color: var(--gold-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">Featured Services:</span>
            <a href="<?php echo $base_path; ?>service/website-development" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Website Design Service</a>
            <a href="<?php echo $base_path; ?>service/digital-marketing" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Digital Marketing Service</a>
            <a href="<?php echo $base_path; ?>service/hospital-doctor-appointment-booking" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Hospital &amp; Doctor Appointment Booking</a>
            <a href="<?php echo $base_path; ?>service/school-website-maintenance" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">School Website Maintenance</a>
            <a href="<?php echo $base_path; ?>service/quotation-billing-invoice-software" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Quotation &amp; Billing Application Service</a>
            <a href="<?php echo $base_path; ?>service/google-ads" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Paid Google Ads Service</a>
            <a href="<?php echo $base_path; ?>service/paid-social-media" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Meta Paid Ads Service</a>
            <a href="<?php echo $base_path; ?>service/mobile-application-development" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Mobile Application Service</a>
            <a href="<?php echo $base_path; ?>service/custom-web-application" class="badge text-decoration-none" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); color: #cbd5e1; font-size: 11px; padding: 6px 10px;">Web Application Service</a>
          </div>
        </div>

      </div>
    </section>

    <!-- 4. WHY CHOOSE WEB OPTIMIZER & OUR WORKING PROCESS -->
    <section class="section-wrap section-about-luminous" id="about">
      <div class="container">
        <div class="section-header text-start mb-5">
          <span class="about-luminous-tag"><i class="fa-solid fa-award"></i> Why Choose Web Optimizer</span>
          <h2 class="about-luminous-title" style="text-align: left !important;">Built on Clean Engineering, Honest Advice &amp; Measurable Business Results</h2>
          <p class="about-luminous-desc" style="text-align: left !important; margin-left: 0 !important; max-width: 860px;">
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
            <h3>Quick Enquiry / Get a Free Quote</h3>
            <p style="font-size:13.5px; color:var(--text-muted); margin-bottom:20px;">
              Share your name and phone number below and our team will call or WhatsApp you shortly.
            </p>

            <?php if ($form_status === 'success'): ?>
              <div class="form-alert form-alert-success" style="background:rgba(16,185,129,0.15); border:1px solid #10b981; color:#10b981; padding:14px 20px; border-radius:12px; margin-bottom:20px; display:flex; align-items:center; gap:12px; font-weight:600;">
                <i class="fa-solid fa-circle-check" style="font-size:20px;"></i>
                <span>Thank you! Your enquiry has been received. Our team will contact you shortly.</span>
              </div>
            <?php elseif ($form_status === 'error'): ?>
              <div class="form-alert form-alert-error" style="background:rgba(244,63,94,0.15); border:1px solid #f43f5e; color:#f43f5e; padding:14px 20px; border-radius:12px; margin-bottom:20px; display:flex; align-items:center; gap:12px; font-weight:600;">
                <i class="fa-solid fa-circle-exclamation" style="font-size:20px;"></i>
                <span>Please enter your Name and Phone / WhatsApp Number.</span>
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
                <label for="leadName">Your Name *</label>
                <input type="text" id="leadName" name="lead_name" autocomplete="name" class="form-input" placeholder="Enter your full name" maxlength="120" required>
              </div>

              <div class="form-field">
                <label for="leadPhone">Phone / WhatsApp Number (10 Digits) *</label>
                <div class="d-flex gap-2">
                  <select id="leadPhoneCode" name="lead_phone_code" aria-label="Country Code" class="form-input" style="width:120px; flex-shrink:0; background:#080d1a; padding-left:10px; padding-right:8px; font-weight:600;">
                    <option value="+91" selected>🇮🇳 +91</option>
                    <option value="+1">🇺🇸 +1</option>
                    <option value="+44">🇬🇧 +44</option>
                    <option value="+971">🇦🇪 +971</option>
                    <option value="+61">🇦🇺 +61</option>
                    <option value="+65">🇸🇬 +65</option>
                    <option value="+966">🇸🇦 +966</option>
                    <option value="+974">🇶🇦 +974</option>
                    <option value="+49">🇩🇪 +49</option>
                    <option value="+33">🇫🇷 +33</option>
                  </select>
                  <input type="tel" id="leadPhone" name="lead_phone" autocomplete="tel-national" inputmode="numeric" pattern="[0-9]{10}" minlength="10" maxlength="10" class="form-input w-100 js-phone-10digit" placeholder="Enter 10-digit mobile number" required>
                </div>
              </div>

              <div class="form-field">
                <label for="leadEmail">Email ID *</label>
                <input type="email" id="leadEmail" name="lead_email" autocomplete="email" inputmode="email" list="woGmailSuggestions" class="form-input js-smart-gmail-input" placeholder="yourname@gmail.com" maxlength="150" required>
              </div>

              <div class="form-field">
                <label for="leadService">Select Service *</label>
                <select id="leadService" name="lead_service" class="form-input" style="background:#080d1a;">
                  <option value="Website Design Service">Website Design Service</option>
                  <option value="Digital Marketing Service">Digital Marketing Service</option>
                  <option value="Hospital & Doctor Appointment Booking with Payment">Hospital &amp; Doctor Appointment Booking with Payment</option>
                  <option value="School Website Design & Maintenance">School Website Design &amp; Maintenance</option>
                  <option value="Quotation & Billing Application Service">Quotation &amp; Billing Application Service</option>
                  <option value="Paid Google Ads Service">Paid Google Ads Service</option>
                  <option value="Meta Paid Ads (Facebook & Instagram)">Meta Paid Ads (Facebook &amp; Instagram)</option>
                  <option value="Mobile Application Development Service">Mobile Application Development Service</option>
                  <option value="Web Application Development Service">Web Application Development Service</option>
                  <option value="SEO & Google Maps Ranking Service">SEO &amp; Google Maps Ranking Service</option>
                  <option value="Other Custom Service / Consultation">Other Custom Service / Consultation</option>
                </select>
              </div>

              <div class="form-field">
                <label for="leadMessage">Your Requirement (Optional)</label>
                <textarea id="leadMessage" name="lead_message" rows="3" class="form-input" maxlength="1000" placeholder="Briefly tell us how we can help your business..."></textarea>
              </div>

              <button type="submit" id="leadSubmitBtn" name="lead_submit" class="btn-gold w-100 justify-content-center" style="padding:14px; font-size:14.5px; font-weight:700;">
                <i class="fa-solid fa-paper-plane me-1"></i> Submit Enquiry
              </button>
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
