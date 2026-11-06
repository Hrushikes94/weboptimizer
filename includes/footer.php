<?php
/**
 * Web Optimizer - Modular Footer Component with Expandable Mobile Drawer
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain
 */
$base_path = $base_path ?? './';
?>
  <!-- REDESIGNED MODERN LUXURY FOOTER -->
  <style>
    .wo-luxury-footer {
      background: radial-gradient(ellipse at 50% 0%, rgba(212, 175, 55, 0.08) 0%, transparent 65%),
                  linear-gradient(180deg, #060a15 0%, #03050b 100%);
      border-top: 1px solid rgba(212, 175, 55, 0.28);
      padding: 64px 0 28px 0;
      position: relative;
      z-index: 2;
    }
    .wo-footer-cta-strip {
      background: linear-gradient(135deg, rgba(15, 24, 48, 0.92) 0%, rgba(8, 13, 26, 0.96) 100%);
      border: 1px solid rgba(212, 175, 55, 0.32);
      border-radius: 20px;
      padding: 32px 36px;
      margin-bottom: 52px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.55), 0 0 30px rgba(212, 175, 55, 0.08);
    }
    .wo-footer-grid {
      display: grid;
      grid-template-columns: 1.35fr 0.9fr 1.05fr 1.05fr 1.15fr;
      gap: 32px;
      padding-bottom: 44px;
      border-bottom: 1px solid rgba(148, 163, 184, 0.12);
    }
    .wo-footer-col h4 {
      font-family: var(--font-display);
      font-size: 14px;
      font-weight: 700;
      color: var(--gold-light);
      text-transform: uppercase;
      letter-spacing: 0.9px;
      margin-bottom: 18px;
      padding-bottom: 10px;
      border-bottom: 1px solid rgba(212, 175, 55, 0.2);
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .wo-footer-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 9px;
    }
    .wo-footer-list li a {
      color: #cbd5e1;
      font-size: 13px;
      font-weight: 500;
      text-decoration: none !important;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: var(--transition-luxury);
      line-height: 1.45;
    }
    .wo-footer-list li a i.link-arrow {
      font-size: 10px;
      color: var(--gold-primary);
      opacity: 0.7;
      transition: transform 0.25s ease, opacity 0.25s ease;
    }
    .wo-footer-list li a:hover {
      color: var(--gold-light) !important;
      transform: translateX(4px);
    }
    .wo-footer-list li a:hover i.link-arrow {
      opacity: 1;
      transform: translateX(2px);
    }
    .wo-social-row {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 18px;
    }
    .wo-social-btn {
      width: 38px;
      height: 38px;
      border-radius: 10px;
      background: rgba(15, 22, 41, 0.85);
      border: 1px solid rgba(212, 175, 55, 0.25);
      color: var(--gold-light) !important;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 15px;
      text-decoration: none !important;
      transition: var(--transition-luxury);
    }
    .wo-social-btn:hover {
      background: var(--gold-primary);
      color: #04070e !important;
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(212, 175, 55, 0.35);
    }
    .wo-city-pills {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-top: 14px;
    }
    .wo-city-pill {
      font-size: 11px;
      color: #cbd5e1 !important;
      background: rgba(15, 22, 41, 0.75);
      border: 1px solid rgba(148, 163, 184, 0.2);
      padding: 4px 10px;
      border-radius: 999px;
      text-decoration: none !important;
      transition: var(--transition-luxury);
    }
    .wo-city-pill:hover {
      border-color: var(--gold-primary);
      color: var(--gold-light) !important;
      background: rgba(212, 175, 55, 0.12);
    }
    .wo-footer-bottom {
      padding-top: 24px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      font-size: 12.5px;
      color: var(--text-muted);
    }
    .wo-footer-bottom-links {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 18px;
    }
    .wo-footer-bottom-links a {
      color: #cbd5e1;
      text-decoration: none;
      font-size: 12.5px;
      font-weight: 500;
      transition: var(--transition-luxury);
    }
    .wo-footer-bottom-links a:hover {
      color: var(--gold-light);
    }
    @media (max-width: 1199px) {
      .wo-footer-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }
    @media (max-width: 767px) {
      .wo-luxury-footer {
        padding: 44px 0 24px 0;
      }
      .wo-footer-cta-strip {
        padding: 24px 20px;
        margin-bottom: 36px;
        text-align: center;
        justify-content: center;
      }
      .wo-footer-grid {
        grid-template-columns: 1fr;
        gap: 28px;
      }
      .wo-footer-bottom {
        flex-direction: column;
        text-align: center;
        justify-content: center;
      }
      .wo-footer-bottom-links {
        justify-content: center;
        gap: 14px;
      }
    }
  </style>

  <footer class="wo-luxury-footer">
    <div class="container">
      <!-- Top Executive CTA Banner -->
      <div class="wo-footer-cta-strip">
        <div style="max-width: 660px;">
          <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 1.2px; color: var(--gold-primary); font-weight: 700; margin-bottom: 6px;">
            <i class="fa-solid fa-bolt me-1"></i> Start Your Digital Transformation in Odisha
          </div>
          <h3 style="font-family: var(--font-display); font-size: clamp(1.35rem, 2.5vw, 1.85rem); color: #fff; font-weight: 800; margin-bottom: 6px;">
            Need a High-Speed Website, Custom Billing App, or #1 Google Ranking?
          </h3>
          <p style="font-size: 13.5px; color: var(--text-muted); margin: 0;">
            Consult directly with Founder &amp; Senior Web Developer <strong>Hrushikesh Swain</strong>. Get a custom roadmap &amp; quotation within 2 hours.
          </p>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-2">
          <button type="button" class="btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding: 12px 22px; font-size: 13px;">
            <i class="fa-solid fa-file-signature"></i> Request Proposal
          </button>
          <a href="<?php echo $base_path; ?>contact" class="btn-luxury-outline" style="padding: 12px 20px; font-size: 13px;">
            <i class="fa-solid fa-envelope"></i> Contact Us Page
          </a>
          <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="btn-luxury-outline" style="border-color: #25d366; color: #25d366; padding: 12px 20px; font-size: 13px;">
            <i class="fa-brands fa-whatsapp"></i> WhatsApp Live
          </a>
        </div>
      </div>

      <!-- Main 5-Column Footer Grid -->
      <div class="wo-footer-grid">
        <!-- Col 1: Brand Identity, Stats & Social Media -->
        <div class="wo-footer-col">
          <a href="<?php echo $base_path; ?>" class="d-inline-block mb-3">
            <img src="<?php echo $base_path; ?>assets/images/weboptimizer-logo.webp" 
                 alt="Web Optimizer - Premier Website Design, Billing Software & Digital Marketing Agency" 
                 title="Web Optimizer | Official Footer Brand Logo"
                 draggable="false"
                 style="height:44px; object-fit:contain;"
                 onerror="this.style.display='none';">
          </a>
          <p style="color:var(--text-muted); font-size:13px; line-height:1.7; margin-bottom:14px;">
            <strong>Web Optimizer</strong> is Bhubaneswar&rsquo;s premier website engineering, custom <strong>Quotation &amp; GST Billing Software</strong>, AI SEO, and performance marketing agency delivering measurable commercial growth across all 30 districts of Odisha since 2017.
          </p>
          <div class="d-flex flex-wrap gap-2 mb-2">
            <span style="font-size:11px; background:rgba(212,175,55,0.1); border:1px solid var(--border-gold); color:var(--gold-light); padding:3px 10px; border-radius:999px; font-weight:600;">158+ Projects</span>
            <span style="font-size:11px; background:rgba(16,185,129,0.1); border:1px solid rgba(16,185,129,0.3); color:#34d399; padding:3px 10px; border-radius:999px; font-weight:600;">99.8% CWV Speed</span>
            <span style="font-size:11px; background:rgba(56,189,248,0.1); border:1px solid rgba(56,189,248,0.3); color:#38bdf8; padding:3px 10px; border-radius:999px; font-weight:600;">50 Odisha Cities</span>
          </div>
          <div class="wo-social-row" aria-label="Social Media Links">
            <a href="https://www.linkedin.com/in/hrushikesh-swain-a34503211/" target="_blank" rel="noopener noreferrer" class="wo-social-btn" title="Connect on LinkedIn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://wa.me/917735973818" target="_blank" rel="noopener noreferrer" class="wo-social-btn" title="Chat on WhatsApp" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="wo-social-btn" title="Follow on Facebook" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="wo-social-btn" title="Follow on Instagram" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" class="wo-social-btn" title="Subscribe on YouTube" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            <a href="mailto:info@weboptimizer.in" class="wo-social-btn" title="Email Web Optimizer" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
          </div>
        </div>

        <!-- Col 2: Navigation & Company Hub (Locations, Guides, Contact Us) -->
        <div class="wo-footer-col">
          <h4><i class="fa-solid fa-compass"></i> Quick Navigation</h4>
          <ul class="wo-footer-list">
            <li><a href="<?php echo $base_path; ?>"><i class="fa-solid fa-chevron-right link-arrow"></i> Home</a></li>
            <li><a href="<?php echo $base_path; ?>services"><i class="fa-solid fa-chevron-right link-arrow"></i> All 47 Digital Services</a></li>
            <li><a href="<?php echo $base_path; ?>locations" style="color:var(--gold-light); font-weight:700;"><i class="fa-solid fa-map-location-dot" style="color:var(--gold-primary); font-size:12px;"></i> Odisha 50 Locations</a></li>
            <li><a href="<?php echo $base_path; ?>blog" style="color:var(--gold-light); font-weight:700;"><i class="fa-solid fa-book-open" style="color:var(--gold-primary); font-size:12px;"></i> Business Guides (125)</a></li>
            <li><a href="<?php echo $base_path; ?>contact" style="color:var(--gold-light); font-weight:700;"><i class="fa-solid fa-paper-plane" style="color:var(--gold-primary); font-size:12px;"></i> Contact Us</a></li>
            <li><a href="<?php echo $base_path; ?>#portfolio"><i class="fa-solid fa-chevron-right link-arrow"></i> Client Case Studies</a></li>
            <li><a href="<?php echo $base_path; ?>#about"><i class="fa-solid fa-chevron-right link-arrow"></i> About Web Optimizer</a></li>
            <li><a href="<?php echo $base_path; ?>service/faqs"><i class="fa-solid fa-chevron-right link-arrow"></i> Frequently Asked Questions</a></li>
          </ul>
        </div>

        <!-- Col 3: Web, Apps & Billing Software -->
        <div class="wo-footer-col">
          <h4><i class="fa-solid fa-laptop-code"></i> Web &amp; Billing Apps</h4>
          <ul class="wo-footer-list">
            <li><a href="<?php echo $base_path; ?>service/quotation-billing-invoice-software" style="color:var(--gold-light); font-weight:700;"><i class="fa-solid fa-file-invoice-dollar" style="color:var(--gold-primary); font-size:12px;"></i> Quotation, Billing &amp; GST App</a></li>
            <li><a href="<?php echo $base_path; ?>service/web-development"><i class="fa-solid fa-chevron-right link-arrow"></i> Website &amp; UI/UX Engineering</a></li>
            <li><a href="<?php echo $base_path; ?>service/website-development"><i class="fa-solid fa-chevron-right link-arrow"></i> UI/UX Website Design</a></li>
            <li><a href="<?php echo $base_path; ?>service/wordpress-development"><i class="fa-solid fa-chevron-right link-arrow"></i> Custom WordPress Dev</a></li>
            <li><a href="<?php echo $base_path; ?>service/ecommerce-development"><i class="fa-solid fa-chevron-right link-arrow"></i> WooCommerce E-Commerce</a></li>
            <li><a href="<?php echo $base_path; ?>service/shopify-development"><i class="fa-solid fa-chevron-right link-arrow"></i> Shopify Storefronts</a></li>
            <li><a href="<?php echo $base_path; ?>service/custom-web-application"><i class="fa-solid fa-chevron-right link-arrow"></i> Custom Web &amp; ERP Apps</a></li>
            <li><a href="<?php echo $base_path; ?>service/api-integrations"><i class="fa-solid fa-chevron-right link-arrow"></i> API &amp; Webhook Integrations</a></li>
            <li><a href="<?php echo $base_path; ?>service/website-maintenance"><i class="fa-solid fa-chevron-right link-arrow"></i> Website Maintenance AMC</a></li>
          </ul>
        </div>

        <!-- Col 4: Digital Marketing, AI SEO & Branding -->
        <div class="wo-footer-col">
          <h4><i class="fa-solid fa-chart-line"></i> SEO, Ads &amp; Growth</h4>
          <ul class="wo-footer-list">
            <li><a href="<?php echo $base_path; ?>service/digital-marketing"><i class="fa-solid fa-chevron-right link-arrow"></i> Digital Marketing Overview</a></li>
            <li><a href="<?php echo $base_path; ?>service/ai-seo"><i class="fa-solid fa-chevron-right link-arrow"></i> AI SEO &amp; Search Dominance</a></li>
            <li><a href="<?php echo $base_path; ?>service/local-seo"><i class="fa-solid fa-chevron-right link-arrow"></i> Local SEO &amp; Google Maps</a></li>
            <li><a href="<?php echo $base_path; ?>service/technical-seo"><i class="fa-solid fa-chevron-right link-arrow"></i> Technical SEO &amp; Speed Audit</a></li>
            <li><a href="<?php echo $base_path; ?>service/performance-marketing"><i class="fa-solid fa-chevron-right link-arrow"></i> Performance Marketing</a></li>
            <li><a href="<?php echo $base_path; ?>service/google-ads"><i class="fa-solid fa-chevron-right link-arrow"></i> Google Ads &ndash; PPC &amp; PMax</a></li>
            <li><a href="<?php echo $base_path; ?>service/paid-social-media"><i class="fa-solid fa-chevron-right link-arrow"></i> Facebook &amp; Instagram Ads</a></li>
            <li><a href="<?php echo $base_path; ?>service/brand-identity-logo"><i class="fa-solid fa-chevron-right link-arrow"></i> Brand Identity &amp; Logo Design</a></li>
            <li><a href="<?php echo $base_path; ?>service/whatsapp-automation"><i class="fa-solid fa-chevron-right link-arrow"></i> Official WhatsApp Automation</a></li>
          </ul>
        </div>

        <!-- Col 5: Direct Contact Info & Odisha City Hubs -->
        <div class="wo-footer-col">
          <h4><i class="fa-solid fa-headset"></i> Get In Touch</h4>
          <ul class="wo-footer-list">
            <li>
              <a href="tel:+917735973818" style="color:#fff; font-weight:700;">
                <i class="fa-solid fa-phone" style="color:var(--gold-primary); width:16px;"></i> +91 77359 73818
              </a>
            </li>
            <li>
              <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" style="color:#25d366; font-weight:600;">
                <i class="fa-brands fa-whatsapp" style="color:#25d366; width:16px;"></i> WhatsApp Priority Support
              </a>
            </li>
            <li>
              <a href="mailto:info@weboptimizer.in">
                <i class="fa-solid fa-envelope" style="color:var(--gold-primary); width:16px;"></i> info@weboptimizer.in
              </a>
            </li>
            <li style="color:var(--text-muted); font-size:12.5px; display:flex; align-items:flex-start; gap:8px; margin-top:4px;">
              <i class="fa-solid fa-location-dot" style="color:var(--gold-primary); width:16px; margin-top:4px;"></i>
              <span>Bhubaneswar, Khordha District, Odisha 751001, India</span>
            </li>
            <li style="color:var(--text-dim); font-size:12px; display:flex; align-items:center; gap:8px;">
              <i class="fa-regular fa-clock" style="color:var(--gold-primary); width:16px;"></i>
              <span>Mon &ndash; Sun: 08:00 AM &ndash; 10:00 PM IST</span>
            </li>
          </ul>

          <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid rgba(148,163,184,0.12);">
            <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gold-primary); font-weight: 700; margin-bottom: 6px;">
              Major Odisha Service Hubs
            </div>
            <div class="wo-city-pills">
              <a href="<?php echo $base_path; ?>location/bhubaneswar" class="wo-city-pill">Bhubaneswar</a>
              <a href="<?php echo $base_path; ?>location/cuttack" class="wo-city-pill">Cuttack</a>
              <a href="<?php echo $base_path; ?>location/rourkela" class="wo-city-pill">Rourkela</a>
              <a href="<?php echo $base_path; ?>location/berhampur" class="wo-city-pill">Berhampur</a>
              <a href="<?php echo $base_path; ?>location/sambalpur" class="wo-city-pill">Sambalpur</a>
              <a href="<?php echo $base_path; ?>location/puri" class="wo-city-pill">Puri</a>
              <a href="<?php echo $base_path; ?>location/balasore" class="wo-city-pill">Balasore</a>
              <a href="<?php echo $base_path; ?>location/angul" class="wo-city-pill">Angul</a>
              <a href="<?php echo $base_path; ?>locations" class="wo-city-pill" style="border-color:var(--gold-primary); color:var(--gold-light) !important;">All 50 Cities &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Bottom Copyright & Quick Links -->
      <div class="wo-footer-bottom">
        <div>
          &copy; 2017 &ndash; <?php echo date('Y'); ?> <strong>Web Optimizer</strong> (weboptimizer.in). All Rights Reserved. Engineered by <strong>Hrushikesh Swain</strong>.
        </div>
        <div class="wo-footer-bottom-links">
          <a href="<?php echo $base_path; ?>services">Services</a>
          <a href="<?php echo $base_path; ?>locations">Locations (50)</a>
          <a href="<?php echo $base_path; ?>blog">Guides (125)</a>
          <a href="<?php echo $base_path; ?>contact">Contact Us</a>
          <a href="<?php echo $base_path; ?>sitemap.xml">XML Sitemap</a>
          <a href="#navbar" onclick="window.scrollTo({top:0,behavior:'smooth'}); return false;" style="color:var(--gold-primary); font-weight:700;">
            <i class="fa-solid fa-arrow-up"></i> Back to Top
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- BOOTSTRAP 5 OFFCANVAS MOBILE NAVIGATION DRAWER WITH ACCORDION SUB-MENUS -->
  <div class="offcanvas offcanvas-end luxury-offcanvas" tabindex="-1" id="luxuryMobileNav" aria-labelledby="luxuryMobileNavLabel">
    <div class="offcanvas-header">
      <div class="d-flex align-items-center gap-2">
        <img src="<?php echo $base_path; ?>assets/images/weboptimizer-icon.webp" 
             alt="Web Optimizer Crest Icon" 
             title="Web Optimizer Mobile Navigation Crest"
             draggable="false"
             style="width:28px; height:28px; border-radius:6px; object-fit:contain;"
             onerror="this.style.display='none';">
        <span class="offcanvas-title" id="luxuryMobileNavLabel" style="font-family: var(--font-display); font-weight:700; color:var(--gold-primary); letter-spacing:1px; font-size:16px;">WEB OPTIMIZER</span>
      </div>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between">
      <div>
        <p style="font-size:12px; color:var(--text-dim); margin-bottom:14px;">Senior Web Developer &amp; Full-Service Digital Agency</p>
        
        <!-- Mobile Navigation Accordion -->
        <div class="accordion offcanvas-accordion mb-4" id="mobileMenuAccordion">
          
          <!-- Home & Quick Pills -->
          <div class="py-2 border-bottom border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
            <a href="<?php echo $base_path; ?>" class="text-white text-decoration-none fw-semibold" style="font-size:14px;">
              <i class="fa-solid fa-house me-2" style="color:var(--gold-primary);"></i> Home
            </a>
            <a href="<?php echo $base_path; ?>services" class="badge text-decoration-none" style="background:rgba(212,175,55,0.15); border:1px solid var(--border-gold); color:var(--gold-light); font-size:11px;">
              <i class="fa-solid fa-layer-group me-1"></i> 47 Services
            </a>
          </div>

          <!-- Digital Marketing (Complete Submenu) -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileDM">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileDM" aria-expanded="false" aria-controls="collapseMobileDM">
                <i class="fa-solid fa-bullhorn me-2" style="color:var(--gold-primary);"></i> Digital Marketing
              </button>
            </h2>
            <div id="collapseMobileDM" class="accordion-collapse collapse" aria-labelledby="headingMobileDM" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>service/digital-marketing" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);">Digital Marketing Overview</a>
                <a href="<?php echo $base_path; ?>service/social-media-marketing" class="offcanvas-sub-link">Social Media Marketing (SMM)</a>
                <a href="<?php echo $base_path; ?>service/facebook-marketing" class="offcanvas-sub-link">Facebook Marketing &amp; Ads</a>
                <a href="<?php echo $base_path; ?>service/instagram-marketing" class="offcanvas-sub-link">Instagram Marketing &amp; Reels</a>
                <a href="<?php echo $base_path; ?>service/linkedin-marketing" class="offcanvas-sub-link">LinkedIn B2B Marketing</a>
                <a href="<?php echo $base_path; ?>service/youtube-marketing" class="offcanvas-sub-link">YouTube Video Marketing</a>
                <a href="<?php echo $base_path; ?>service/influencer-marketing" class="offcanvas-sub-link">Influencer Marketing &amp; UGC</a>
                <a href="<?php echo $base_path; ?>services" class="offcanvas-sub-link fw-semibold" style="color:var(--gold-primary);">View All 47 Services &rarr;</a>
              </div>
            </div>
          </div>

          <!-- Web, Apps & Billing Software -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileWeb">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileWeb" aria-expanded="false" aria-controls="collapseMobileWeb">
                <i class="fa-solid fa-laptop-code me-2" style="color:var(--gold-primary);"></i> Website &amp; Billing Apps
              </button>
            </h2>
            <div id="collapseMobileWeb" class="accordion-collapse collapse" aria-labelledby="headingMobileWeb" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>service/quotation-billing-invoice-software" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);"><i class="fa-solid fa-file-invoice-dollar me-1"></i> Quotation, Billing &amp; Invoice App</a>
                <a href="<?php echo $base_path; ?>service/web-development" class="offcanvas-sub-link">All Web Capabilities</a>
                <a href="<?php echo $base_path; ?>service/website-development" class="offcanvas-sub-link">UI-UX Website Design</a>
                <a href="<?php echo $base_path; ?>service/wordpress-development" class="offcanvas-sub-link">WordPress Development</a>
                <a href="<?php echo $base_path; ?>service/ecommerce-development" class="offcanvas-sub-link">WooCommerce E-Commerce</a>
                <a href="<?php echo $base_path; ?>service/shopify-development" class="offcanvas-sub-link">Shopify Development</a>
                <a href="<?php echo $base_path; ?>service/custom-web-application" class="offcanvas-sub-link">Custom Web Applications</a>
                <a href="<?php echo $base_path; ?>service/api-integrations" class="offcanvas-sub-link">API &amp; Webhooks</a>
                <a href="<?php echo $base_path; ?>service/website-maintenance" class="offcanvas-sub-link">Website Maintenance AMC</a>
              </div>
            </div>
          </div>

          <!-- AI SEO & Growth -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileSEO">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileSEO" aria-expanded="false" aria-controls="collapseMobileSEO">
                <i class="fa-solid fa-chart-line me-2" style="color:var(--gold-primary);"></i> AI SEO &amp; Growth
              </button>
            </h2>
            <div id="collapseMobileSEO" class="accordion-collapse collapse" aria-labelledby="headingMobileSEO" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>service/ai-seo" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);">AI SEO Overview</a>
                <a href="<?php echo $base_path; ?>service/seo-audit" class="offcanvas-sub-link">SEO Audit Services</a>
                <a href="<?php echo $base_path; ?>service/local-seo" class="offcanvas-sub-link">Local SEO &amp; Google Maps</a>
                <a href="<?php echo $base_path; ?>service/technical-seo" class="offcanvas-sub-link">Technical SEO</a>
                <a href="<?php echo $base_path; ?>service/on-page-seo" class="offcanvas-sub-link">On-Page SEO</a>
                <a href="<?php echo $base_path; ?>service/off-page-seo" class="offcanvas-sub-link">Off-Page SEO</a>
                <a href="<?php echo $base_path; ?>service/link-building" class="offcanvas-sub-link">Link Building Services</a>
                <a href="<?php echo $base_path; ?>service/content-writing" class="offcanvas-sub-link">Content Writing Agency</a>
              </div>
            </div>
          </div>

          <!-- Performance Marketing -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileAds">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileAds" aria-expanded="false" aria-controls="collapseMobileAds">
                <i class="fa-solid fa-bullseye me-2" style="color:var(--gold-primary);"></i> Performance Ads
              </button>
            </h2>
            <div id="collapseMobileAds" class="accordion-collapse collapse" aria-labelledby="headingMobileAds" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>service/performance-marketing" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);">Performance Marketing Hub</a>
                <a href="<?php echo $base_path; ?>service/google-ads" class="offcanvas-sub-link">Google Ads &ndash; PPC &amp; PMax</a>
                <a href="<?php echo $base_path; ?>service/paid-social-media" class="offcanvas-sub-link">Paid Social Media Ads</a>
                <a href="<?php echo $base_path; ?>service/lead-generation" class="offcanvas-sub-link">Lead Generation Funnels</a>
                <a href="<?php echo $base_path; ?>service/search-engine-marketing" class="offcanvas-sub-link">Search Engine Marketing</a>
                <a href="<?php echo $base_path; ?>service/email-marketing" class="offcanvas-sub-link">Email Marketing &amp; Klaviyo</a>
                <a href="<?php echo $base_path; ?>service/affiliate-marketing" class="offcanvas-sub-link">Affiliate Marketing</a>
              </div>
            </div>
          </div>

          <!-- Branding & Creative -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileBrand">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileBrand" aria-expanded="false" aria-controls="collapseMobileBrand">
                <i class="fa-solid fa-bezier-curve me-2" style="color:var(--gold-primary);"></i> Branding &amp; Design
              </button>
            </h2>
            <div id="collapseMobileBrand" class="accordion-collapse collapse" aria-labelledby="headingMobileBrand" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>service/branding-design" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);">Branding Overview</a>
                <a href="<?php echo $base_path; ?>service/brand-identity-logo" class="offcanvas-sub-link">Brand Identity &amp; Logo Design</a>
                <a href="<?php echo $base_path; ?>service/brand-strategy" class="offcanvas-sub-link">Brand Strategy &amp; Positioning</a>
                <a href="<?php echo $base_path; ?>service/corporate-branding" class="offcanvas-sub-link">Corporate Branding Systems</a>
                <a href="<?php echo $base_path; ?>service/marketing-collaterals" class="offcanvas-sub-link">Marketing Collaterals</a>
                <a href="<?php echo $base_path; ?>service/creative-advertising" class="offcanvas-sub-link">Creative Advertising</a>
                <a href="<?php echo $base_path; ?>service/brand-consulting" class="offcanvas-sub-link">Brand Consulting</a>
              </div>
            </div>
          </div>

          <!-- Allied Services & Automation -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileAllied">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileAllied" aria-expanded="false" aria-controls="collapseMobileAllied">
                <i class="fa-solid fa-gears me-2" style="color:var(--gold-primary);"></i> Allied Automation &amp; Growth
              </button>
            </h2>
            <div id="collapseMobileAllied" class="accordion-collapse collapse" aria-labelledby="headingMobileAllied" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>service/whatsapp-automation" class="offcanvas-sub-link">WhatsApp Automation</a>
                <a href="<?php echo $base_path; ?>service/google-my-business" class="offcanvas-sub-link">Google My Business (GMB)</a>
                <a href="<?php echo $base_path; ?>service/analytics-reporting" class="offcanvas-sub-link">Analytics &amp; Reporting</a>
                <a href="<?php echo $base_path; ?>service/online-reputation" class="offcanvas-sub-link">Reputation Management (ORM)</a>
                <a href="<?php echo $base_path; ?>service/strategy-consulting" class="offcanvas-sub-link">Strategy &amp; Consulting</a>
              </div>
            </div>
          </div>

          <!-- Odisha Locations (50 Cities) -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileLocs">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileLocs" aria-expanded="false" aria-controls="collapseMobileLocs">
                <i class="fa-solid fa-map-location-dot me-2" style="color:var(--gold-primary);"></i> Odisha (50 Locations)
              </button>
            </h2>
            <div id="collapseMobileLocs" class="accordion-collapse collapse" aria-labelledby="headingMobileLocs" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>locations" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);">All 50 Cities Directory</a>
                <a href="<?php echo $base_path; ?>location/bhubaneswar" class="offcanvas-sub-link">Bhubaneswar (HQ)</a>
                <a href="<?php echo $base_path; ?>location/cuttack" class="offcanvas-sub-link">Cuttack</a>
                <a href="<?php echo $base_path; ?>location/rourkela" class="offcanvas-sub-link">Rourkela</a>
                <a href="<?php echo $base_path; ?>location/berhampur" class="offcanvas-sub-link">Berhampur</a>
                <a href="<?php echo $base_path; ?>location/sambalpur" class="offcanvas-sub-link">Sambalpur</a>
                <a href="<?php echo $base_path; ?>location/puri" class="offcanvas-sub-link">Puri</a>
                <a href="<?php echo $base_path; ?>location/balasore" class="offcanvas-sub-link">Balasore</a>
                <a href="<?php echo $base_path; ?>location/jharsuguda" class="offcanvas-sub-link">Jharsuguda</a>
                <a href="<?php echo $base_path; ?>location/angul" class="offcanvas-sub-link">Angul</a>
                <a href="<?php echo $base_path; ?>location/paradeep" class="offcanvas-sub-link">Paradeep</a>
              </div>
            </div>
          </div>

          <!-- Direct Quick Links (Guides & Contact Us) -->
          <div class="py-2 border-bottom border-secondary border-opacity-25">
            <a href="<?php echo $base_path; ?>blog" class="text-white text-decoration-none fw-semibold d-block" style="font-size:14px;">
              <i class="fa-solid fa-book-open me-2" style="color:var(--gold-primary);"></i> Business Guides (125)
            </a>
          </div>
          <div class="py-2">
            <a href="<?php echo $base_path; ?>contact" class="text-white text-decoration-none fw-semibold d-block" style="font-size:14px;">
              <i class="fa-solid fa-envelope me-2" style="color:var(--gold-primary);"></i> Contact Us
            </a>
          </div>

        </div>

        <div class="offcanvas-card p-3 mb-3">
          <div style="font-size:11px; text-transform:uppercase; letter-spacing:1px; color:var(--gold-primary); margin-bottom:6px; font-weight:700;">Direct Engineering Line</div>
          <a href="tel:+917735973818" class="d-flex align-items-center gap-2 text-white mb-2" style="font-size:14px; font-weight:600;"><i class="fa-solid fa-phone text-gold" style="color:var(--gold-primary);"></i> +91 7735973818</a>
          <a href="mailto:info@weboptimizer.in" class="d-flex align-items-center gap-2 text-muted" style="font-size:13px;"><i class="fa-solid fa-envelope text-gold" style="color:var(--gold-primary);"></i> info@weboptimizer.in</a>
        </div>
      </div>

      <div class="d-flex flex-column gap-2 pt-3 border-top border-secondary border-opacity-25">
        <button type="button" class="btn-gold w-100 text-center" data-bs-dismiss="offcanvas" data-bs-toggle="modal" data-bs-target="#inquiryModal" style="padding:12px 20px;">
          <i class="fa-solid fa-file-signature"></i> Request Proposal
        </button>
        <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="btn-luxury-outline w-100 text-center" style="border-color: #25d366; color: #25d366; padding:12px 20px;">
          <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </div>

  <!-- BOOTSTRAP 5 LUXURY PROPOSAL & CONSULTATION MODAL -->
  <div class="modal fade luxury-modal" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header border-bottom-0 pb-0">
          <div class="d-flex align-items-center gap-3">
            <div class="crest-icon" style="width:42px; height:42px; font-size:18px; border-radius:50%; background:rgba(212,175,55,0.15); border:1px solid var(--border-gold); display:flex; align-items:center; justify-content:center;">
              <i class="fa-solid fa-crown" style="color:var(--gold-primary);"></i>
            </div>
            <div>
              <h4 class="modal-title" id="inquiryModalLabel" style="font-family:var(--font-display); font-size:20px; font-weight:700; color:var(--text-white); margin:0;">
                Bespoke Digital Proposal
              </h4>
              <p style="font-size:12.5px; color:var(--text-muted); margin:0;">
                Direct review with Senior Web Developer Hrushikesh Swain. Response within 2 hours.
              </p>
            </div>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-3">
          <div id="modalFormFeedback" style="display:none; margin-bottom:16px;"></div>
          <form id="modalInquiryForm" onsubmit="handleModalSubmit(event)" novalidate>
            <!-- Anti-Bot Honeypot Field -->
            <div style="position:absolute; left:-9999px; top:-9999px; opacity:0; pointer-events:none;" aria-hidden="true">
              <label for="modalWebsiteHp">Leave this field blank</label>
              <input type="text" id="modalWebsiteHp" name="website_url_hp" tabindex="-1" autocomplete="off">
            </div>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" style="font-size:11.5px; color:var(--gold-primary); text-transform:uppercase; letter-spacing:0.8px; font-weight:600;">Your Name *</label>
                <input type="text" id="modalName" name="modal_name" required maxlength="120" class="luxury-form-input w-100" placeholder="e.g. Rahul Sharma">
              </div>
              <div class="col-md-6">
                <label class="form-label" style="font-size:11.5px; color:var(--gold-primary); text-transform:uppercase; letter-spacing:0.8px; font-weight:600;">Business Email *</label>
                <input type="email" id="modalEmail" name="modal_email" required maxlength="150" class="luxury-form-input w-100" placeholder="e.g. rahul@company.com">
              </div>
              <div class="col-md-6">
                <label class="form-label" style="font-size:11.5px; color:var(--gold-primary); text-transform:uppercase; letter-spacing:0.8px; font-weight:600;">Phone / WhatsApp *</label>
                <input type="tel" id="modalPhone" name="modal_phone" required maxlength="25" class="luxury-form-input w-100" placeholder="+91 77359 73818">
              </div>
              <div class="col-md-6">
                <label class="form-label" style="font-size:11.5px; color:var(--gold-primary); text-transform:uppercase; letter-spacing:0.8px; font-weight:600;">Primary Practice / Service *</label>
                <select id="modalService" name="modal_service" class="luxury-form-input w-100">
                  <?php foreach ($services_catalog as $s): ?>
                    <option value="<?php echo htmlspecialchars($s['title']); ?>" <?php echo (isset($service_slug) && $service_slug === $s['slug']) ? 'selected' : ''; ?>>
                      <?php echo htmlspecialchars($s['title']); ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label" style="font-size:11.5px; color:var(--gold-primary); text-transform:uppercase; letter-spacing:0.8px; font-weight:600;">Project Scope & Current URL (Optional)</label>
                <textarea id="modalMessage" name="modal_message" rows="3" maxlength="2000" class="luxury-form-input w-100" placeholder="Share your existing URL, project goals, timeline, or key technical challenges..."></textarea>
              </div>
            </div>
            <div class="d-flex flex-wrap gap-3 align-items-center justify-content-between mt-4 pt-3 border-top border-secondary border-opacity-25">
              <div style="font-size:12px; color:var(--text-dim);">
                <i class="fa-solid fa-shield-halved" style="color:var(--gold-primary);"></i> WAF Protected &bull; Confidential &amp; NDA Secured
              </div>
              <div class="d-flex gap-2">
                <button type="button" onclick="sendModalViaWhatsApp()" class="btn-luxury-outline" style="border-color:#25d366; color:#25d366; padding:10px 18px; font-size:13px;">
                  <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp
                </button>
                <button type="submit" id="modalSubmitBtn" class="btn-gold" style="padding:10px 22px; font-size:13px;">
                  <i class="fa-solid fa-paper-plane"></i> Send Proposal
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- FLOATING ACTIONS BAR -->
  <aside class="floating-actions-bar" aria-label="Quick Actions">
    <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20am%20interested%20in%20your%20services." 
       target="_blank" 
       rel="noopener noreferrer" 
       class="floating-whatsapp-btn" 
       title="Chat with Senior Engineer on WhatsApp (+91 7735973818)">
      <i class="fa-brands fa-whatsapp"></i>
      <span class="floating-tooltip">Chat on WhatsApp</span>
      <span class="online-indicator-dot"></span>
    </a>
    <button id="backToTopBtn" class="back-to-top-btn" title="Back to top" aria-label="Back to top">
      <i class="fa-solid fa-arrow-up"></i>
    </button>
  </aside>

  <!-- DRM CONTENT & IMAGE PROTECTION TOAST -->
  <div id="woDrmToast" role="status" aria-live="polite">
    <i class="fa-solid fa-shield-halved" style="color:var(--gold-primary);"></i>
    <span>Protected by Web Optimizer Security Shield &mdash; Content &amp; Images are Copyright Protected</span>
  </div>

  <!-- UNIVERSAL SCRIPTS: MULTI-CHANNEL CONTACT ENGINE, ANTI-MALWARE SANITIZER & DRM PROTECTION -->
  <script>
    // =========================================================================
    // 1. CLIENT-SIDE MALWARE & XSS INPUT SANITIZER
    // =========================================================================
    function woSanitizeText(val) {
      if (!val || typeof val !== 'string') return '';
      return val
        .replace(/<\s*script[^>]*>[\s\S]*?<\s*\/\s*script\s*>/gi, '')
        .replace(/<\/?[a-z][^>]*>/gi, '')
        .replace(/(javascript|vbscript|data)\s*:/gi, '')
        .replace(/on(load|error|click|mouseover|focus|submit)\s*=/gi, '')
        .replace(/\b(union\s+select|information_schema|base64_decode|eval\()\b/gi, '')
        .trim();
    }

    // Generate Reference ID
    function woGenerateRefId() {
      const d = new Date();
      const ymd = d.getFullYear().toString() + String(d.getMonth() + 1).padStart(2, '0') + String(d.getDate()).padStart(2, '0');
      const rnd = Math.random().toString(36).substring(2, 7).toUpperCase();
      return 'WO-' + ymd + '-' + rnd;
    }

    // Render feedback alert box inside form
    function woRenderFormAlert(containerEl, type, htmlContent) {
      if (!containerEl) return;
      containerEl.style.display = 'block';
      if (type === 'success') {
        containerEl.innerHTML = `
          <div style="background:rgba(16,185,129,0.14); border:1px solid #10b981; color:#ecfdf5; padding:16px 20px; border-radius:14px; font-size:13.5px; line-height:1.6;">
            ${htmlContent}
          </div>`;
      } else {
        containerEl.innerHTML = `
          <div style="background:rgba(244,63,94,0.14); border:1px solid #f43f5e; color:#ffe4e6; padding:14px 18px; border-radius:12px; font-size:13px; font-weight:600; display:flex; align-items:center; gap:10px;">
            <i class="fa-solid fa-triangle-exclamation" style="color:#f43f5e; font-size:18px;"></i>
            <span>${htmlContent}</span>
          </div>`;
      }
    }

    // Unified Multi-Channel Submission (Works on PHP Servers AND Static GitHub Pages)
    async function woProcessFormSubmission(opts) {
      const name = woSanitizeText(opts.name);
      const email = woSanitizeText(opts.email);
      const phone = woSanitizeText(opts.phone);
      const service = woSanitizeText(opts.service || 'General Digital Consultation');
      const message = woSanitizeText(opts.message || '');
      const honeypot = opts.honeypot || '';
      const feedbackEl = opts.feedbackEl;
      const submitBtn = opts.submitBtn;
      const formEl = opts.formEl;

      if (honeypot !== '') return;

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const phoneClean = phone.replace(/[^\d+]/g, '');
      if (!name || name.length < 2) {
        woRenderFormAlert(feedbackEl, 'error', 'Please enter your full name or organization name.');
        return;
      }
      if (!email || !emailRegex.test(email)) {
        woRenderFormAlert(feedbackEl, 'error', 'Please enter a valid business email address.');
        return;
      }
      if (!phoneClean || phoneClean.length < 8) {
        woRenderFormAlert(feedbackEl, 'error', 'Please enter a valid 10-digit Phone / WhatsApp number.');
        return;
      }

      const origBtnHtml = submitBtn ? submitBtn.innerHTML : '';
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Encrypting & Sending...';
      }

      let refId = woGenerateRefId();
      const waText = `Hello Web Optimizer (Ref: ${refId}),\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nService: ${service}\n\nProject Details:\n${message || 'Requesting architecture proposal & consultation'}`;
      let waUrl = `https://wa.me/917735973818?text=${encodeURIComponent(waText)}`;
      const mailSubject = `[${refId}] Executive Project Inquiry - ${service} (${name})`;
      const mailUrl = `mailto:info@weboptimizer.in?subject=${encodeURIComponent(mailSubject)}&body=${encodeURIComponent(waText)}`;

      // Channel 1: Try PHP Backend (contact-submit.php)
      try {
        const fd = new FormData();
        fd.append('lead_name', name);
        fd.append('lead_email', email);
        fd.append('lead_phone', phone);
        fd.append('lead_service', service);
        fd.append('lead_message', message);
        fd.append('page_url', window.location.href);
        fd.append('website_url_hp', honeypot);

        const res = await fetch('<?php echo $base_path; ?>contact-submit.php', {
          method: 'POST',
          body: fd
        });
        if (res.ok) {
          const data = await res.json();
          if (data && data.ref_id) refId = data.ref_id;
          if (data && data.whatsapp_url) waUrl = data.whatsapp_url;
        }
      } catch (err) {
        // Static host fallback handled below
      }

      // Channel 2: Serverless Cloud Email Relay (FormSubmit AJAX for static hosting)
      try {
        fetch('https://formsubmit.co/ajax/info@weboptimizer.in', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
          body: JSON.stringify({
            _subject: mailSubject,
            Reference_ID: refId,
            Name: name,
            Email: email,
            Phone: phone,
            Service: service,
            Project_Details: message || 'Requested proposal',
            Source_URL: window.location.href
          })
        }).catch(() => {});
      } catch (e) {}

      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="fa-solid fa-check-double"></i> Inquiry Registered';
        setTimeout(() => { submitBtn.innerHTML = origBtnHtml; }, 5000);
      }

      woRenderFormAlert(feedbackEl, 'success', `
        <div class="d-flex align-items-start gap-3">
          <i class="fa-solid fa-circle-check" style="color:#10b981; font-size:22px; margin-top:3px;"></i>
          <div class="w-100">
            <div style="font-weight:700; font-size:14.5px; color:#fff; margin-bottom:4px;">
              Executive Inquiry Registered! <span style="color:var(--gold-light); font-family:var(--font-mono); font-size:12px;">[${refId}]</span>
            </div>
            <p style="color:#d1fae5; font-size:13px; margin-bottom:12px;">
              Thank you, <strong>${name}</strong>. Your requirement for <strong>${service}</strong> has been logged for Senior Developer Hrushikesh Swain. For instant priority response, click below to connect on WhatsApp or Email:
            </p>
            <div class="d-flex flex-wrap gap-2">
              <a href="${waUrl}" target="_blank" rel="noopener noreferrer" class="btn-gold" style="padding:8px 16px; font-size:12.5px; background:#25d366; color:#04070e; border:none;">
                <i class="fa-brands fa-whatsapp"></i> Instant WhatsApp Priority (+91 7735973818)
              </a>
              <a href="${mailUrl}" class="btn-luxury-outline" style="padding:8px 14px; font-size:12px;">
                <i class="fa-solid fa-envelope"></i> Open in Email App
              </a>
            </div>
          </div>
        </div>
      `);

      if (formEl) formEl.reset();
    }

    // Homepage Lead Form Submit Handler
    function handleLeadSubmit(e) {
      if (e) e.preventDefault();
      woProcessFormSubmission({
        name: (document.getElementById('leadName') || {}).value || '',
        email: (document.getElementById('leadEmail') || {}).value || '',
        phone: (document.getElementById('leadPhone') || {}).value || '',
        service: (document.getElementById('leadService') || {}).value || '',
        message: (document.getElementById('leadMessage') || {}).value || '',
        honeypot: (document.getElementById('leadWebsiteHp') || {}).value || '',
        feedbackEl: document.getElementById('leadFormFeedback'),
        submitBtn: document.getElementById('leadSubmitBtn'),
        formEl: document.getElementById('leadContactForm')
      });
    }

    // Send Homepage Lead Form directly via WhatsApp
    function sendLeadViaWhatsApp() {
      const name = woSanitizeText((document.getElementById('leadName') || {}).value) || 'Client';
      const email = woSanitizeText((document.getElementById('leadEmail') || {}).value) || 'Not specified';
      const phone = woSanitizeText((document.getElementById('leadPhone') || {}).value) || '';
      const service = woSanitizeText((document.getElementById('leadService') || {}).value) || 'Digital Engineering';
      const message = woSanitizeText((document.getElementById('leadMessage') || {}).value);

      const text = `Hello Web Optimizer,\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nService: ${service}\n\nProject Details:\n${message || 'Requesting architecture proposal'}`;
      window.open(`https://wa.me/917735973818?text=${encodeURIComponent(text)}`, '_blank');
    }

    // Modal Proposal Form Submit Handler
    function handleModalSubmit(e) {
      if (e) e.preventDefault();
      woProcessFormSubmission({
        name: (document.getElementById('modalName') || {}).value || '',
        email: (document.getElementById('modalEmail') || {}).value || '',
        phone: (document.getElementById('modalPhone') || {}).value || '',
        service: (document.getElementById('modalService') || {}).value || '',
        message: (document.getElementById('modalMessage') || {}).value || '',
        honeypot: (document.getElementById('modalWebsiteHp') || {}).value || '',
        feedbackEl: document.getElementById('modalFormFeedback'),
        submitBtn: document.getElementById('modalSubmitBtn'),
        formEl: document.getElementById('modalInquiryForm')
      });
    }

    // Send Modal Info directly via WhatsApp
    function sendModalViaWhatsApp() {
      const name = woSanitizeText((document.getElementById('modalName') || {}).value) || 'Client';
      const email = woSanitizeText((document.getElementById('modalEmail') || {}).value) || 'Not specified';
      const phone = woSanitizeText((document.getElementById('modalPhone') || {}).value) || '';
      const service = woSanitizeText((document.getElementById('modalService') || {}).value) || 'Digital Proposal';
      const message = woSanitizeText((document.getElementById('modalMessage') || {}).value);

      const text = `Hello Web Optimizer,\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nService: ${service}\n\nProject Scope:\n${message || 'Requesting architecture proposal'}`;
      window.open(`https://wa.me/917735973818?text=${encodeURIComponent(text)}`, '_blank');
    }

    // =========================================================================
    // 2. CONTENT & IMAGE ANTI-THEFT DRM PROTECTION ENGINE
    // =========================================================================
    (function() {
      let toastTimer = null;
      function showDrmNotice() {
        const toast = document.getElementById('woDrmToast');
        if (!toast) return;
        toast.classList.add('active');
        clearTimeout(toastTimer);
        toastTimer = setTimeout(() => {
          toast.classList.remove('active');
        }, 2400);
      }

      function isEditableInput(el) {
        if (!el) return false;
        const tag = (el.tagName || '').toUpperCase();
        return tag === 'INPUT' || tag === 'TEXTAREA' || tag === 'SELECT' || el.isContentEditable;
      }

      // Block Right-Click Context Menu on Images & Page Content
      document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
        showDrmNotice();
        return false;
      }, false);

      // Block Dragging of Images & Links
      document.addEventListener('dragstart', function(e) {
        e.preventDefault();
        return false;
      }, false);

      // Block Copy & Cut Outside Form Inputs
      ['copy', 'cut'].forEach(function(evtName) {
        document.addEventListener(evtName, function(e) {
          if (!isEditableInput(e.target)) {
            e.preventDefault();
            showDrmNotice();
            return false;
          }
        }, false);
      });

      // Block Keyboard Shortcuts (Ctrl+C, Ctrl+U, Ctrl+S, Ctrl+P, Ctrl+A, F12, Ctrl+Shift+I/J/C)
      document.addEventListener('keydown', function(e) {
        const key = (e.key || '').toLowerCase();
        const ctrlOrCmd = e.ctrlKey || e.metaKey;

        // F12 or PrintScreen
        if (e.key === 'F12' || e.keyCode === 123 || e.key === 'PrintScreen' || e.keyCode === 44) {
          e.preventDefault();
          showDrmNotice();
          return false;
        }

        // Ctrl+Shift+I / J / C (DevTools Inspector)
        if (ctrlOrCmd && e.shiftKey && (key === 'i' || key === 'j' || key === 'c')) {
          e.preventDefault();
          showDrmNotice();
          return false;
        }

        // Ctrl+U (View Source), Ctrl+S (Save Page), Ctrl+P (Print Page)
        if (ctrlOrCmd && (key === 'u' || key === 's' || key === 'p')) {
          e.preventDefault();
          showDrmNotice();
          return false;
        }

        // Ctrl+C, Ctrl+X, Ctrl+A outside form fields
        if (ctrlOrCmd && (key === 'c' || key === 'x' || key === 'a') && !isEditableInput(e.target)) {
          e.preventDefault();
          showDrmNotice();
          return false;
        }
      }, false);

      // Ensure every <img> in DOM has non-empty alt, title, and anti-drag attributes
      document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('img').forEach(function(img) {
          img.setAttribute('draggable', 'false');
          const alt = (img.getAttribute('alt') || '').trim();
          const title = (img.getAttribute('title') || '').trim();
          if (!alt) {
            img.setAttribute('alt', title || 'Web Optimizer Digital Engineering Showcase Odisha');
          }
          if (!title) {
            img.setAttribute('title', (img.getAttribute('alt') || 'Web Optimizer') + ' | Web Optimizer');
          }
        });

        // Interactive Desktop/Tablet Mega Menu & Dropdown Controller
        const dropItems = document.querySelectorAll('.nav-mega-item, .nav-dropdown');
        dropItems.forEach(function(item) {
          let closeTimeout = null;
          const trigger = item.querySelector('.js-dropdown-trigger');

          item.addEventListener('mouseenter', function() {
            clearTimeout(closeTimeout);
            dropItems.forEach(function(other) {
              if (other !== item) other.classList.remove('is-open');
            });
            item.classList.add('is-open');
            if (trigger) trigger.setAttribute('aria-expanded', 'true');
          });

          item.addEventListener('mouseleave', function() {
            closeTimeout = setTimeout(function() {
              item.classList.remove('is-open');
              if (trigger) trigger.setAttribute('aria-expanded', 'false');
            }, 140);
          });

          if (trigger) {
            trigger.addEventListener('click', function(e) {
              // On touch screens or if menu is not yet open, toggle open first
              if (!item.classList.contains('is-open') || ('ontouchstart' in window && !item.dataset.clickedOnce)) {
                e.preventDefault();
                dropItems.forEach(function(other) {
                  if (other !== item) {
                    other.classList.remove('is-open');
                    delete other.dataset.clickedOnce;
                  }
                });
                item.classList.add('is-open');
                item.dataset.clickedOnce = '1';
                trigger.setAttribute('aria-expanded', 'true');
              }
            });
          }
        });

        document.addEventListener('click', function(e) {
          if (!e.target.closest('.nav-mega-item, .nav-dropdown')) {
            dropItems.forEach(function(item) {
              item.classList.remove('is-open');
              delete item.dataset.clickedOnce;
              const trig = item.querySelector('.js-dropdown-trigger');
              if (trig) trig.setAttribute('aria-expanded', 'false');
            });
          }
        });

        document.addEventListener('keydown', function(e) {
          if (e.key === 'Escape') {
            dropItems.forEach(function(item) {
              item.classList.remove('is-open');
              delete item.dataset.clickedOnce;
            });
          }
        });
      });
    })();

    // Back to top
    const backToTopBtn = document.getElementById('backToTopBtn');
    if (backToTopBtn) {
      window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
          backToTopBtn.classList.add('visible');
        } else {
          backToTopBtn.classList.remove('visible');
        }
      }, { passive: true });

      backToTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    }
  </script>

  <!-- Bootstrap 5.3.3 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
