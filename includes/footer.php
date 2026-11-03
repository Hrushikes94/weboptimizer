<?php
/**
 * Web Optimizer - Modular Footer Component with Expandable Mobile Drawer
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain
 */
$base_path = $base_path ?? './';
?>
  <!-- LUXURY FOOTER -->
  <footer>
    <div class="container">
      <div class="footer-top">
        <div class="footer-col">
          <img src="https://www.weboptimizer.in/wp-content/uploads/2022/01/weboptimizer-logo.png" 
               alt="Web Optimizer" 
               style="height:44px; margin-bottom:14px; object-fit:contain;"
               onerror="this.style.display='none';">
          <p style="color:var(--text-muted); font-size:13px; line-height:1.7;">
            <strong>Web Optimizer</strong> is a premier website engineering and digital marketing agency based in Bhubaneswar. Delivering bespoke WordPress, Shopify, AI SEO, and performance marketing architectures since 2017.
          </p>
        </div>

        <div class="footer-col">
          <h4>Core Practices</h4>
          <ul class="footer-links-list">
            <li><a href="<?php echo $base_path; ?>digital-marketing.php">Digital Marketing Overview</a></li>
            <li><a href="<?php echo $base_path; ?>web-development.php">Website & UI/UX Engineering</a></li>
            <li><a href="<?php echo $base_path; ?>ai-seo.php">AI SEO & Search Dominance</a></li>
            <li><a href="<?php echo $base_path; ?>performance-marketing.php">Performance Marketing</a></li>
            <li><a href="<?php echo $base_path; ?>social-media-marketing.php">Social Media Marketing</a></li>
            <li><a href="<?php echo $base_path; ?>branding-design.php">Branding & Creative Identity</a></li>
            <li><a href="<?php echo $base_path; ?>allied-services.php">Allied Automation & ORM</a></li>
            <li><a href="<?php echo $base_path; ?>locations" style="color:var(--gold-primary); font-weight:600;"><i class="fa-solid fa-map-location-dot me-1"></i> Odisha 50 Locations Hub</a></li>
            <li><a href="<?php echo $base_path; ?>blog" style="color:var(--gold-light); font-weight:600;"><i class="fa-solid fa-book-open me-1"></i> Business Guides (25 Articles)</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Popular Sub-Services</h4>
          <ul class="footer-links-list">
            <li><a href="<?php echo $base_path; ?>wordpress-development.php">WordPress Development</a></li>
            <li><a href="<?php echo $base_path; ?>shopify-development.php">Shopify Storefronts</a></li>
            <li><a href="<?php echo $base_path; ?>seo-audit.php">SEO Audit Services</a></li>
            <li><a href="<?php echo $base_path; ?>local-seo.php">Local SEO & Google Maps</a></li>
            <li><a href="<?php echo $base_path; ?>google-ads.php">Google Ads Management</a></li>
            <li><a href="<?php echo $base_path; ?>brand-identity-logo.php">Brand Identity & Logo</a></li>
            <li><a href="<?php echo $base_path; ?>whatsapp-automation.php">WhatsApp Automation</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Connect Directly</h4>
          <ul class="footer-links-list">
            <li><a href="tel:+917735973818"><i class="fa-solid fa-phone" style="color:var(--gold-primary); margin-right:6px;"></i> +91 7735973818</a></li>
            <li><a href="mailto:info@weboptimizer.in"><i class="fa-solid fa-envelope" style="color:var(--gold-primary); margin-right:6px;"></i> info@weboptimizer.in</a></li>
            <li><a href="https://wa.me/917735973818" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" style="color:#25d366; margin-right:6px;"></i> WhatsApp Support</a></li>
            <li style="margin-top:10px; color:var(--text-dim); font-size:12px;"><i class="fa-solid fa-location-dot" style="color:var(--gold-primary); margin-right:6px;"></i> Bhubaneswar, Odisha, India</li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          &copy; 2017 – <?php echo date('Y'); ?> <strong>Web Optimizer</strong> (weboptimizer.in). All Rights Reserved. Engineered by Hrushikesh Swain.
        </div>
        <div style="display:flex; gap:18px;">
          <a href="#navbar" onclick="window.scrollTo({top:0,behavior:'smooth'}); return false;" style="color:var(--gold-primary); text-decoration:none;"><i class="fa-solid fa-arrow-up"></i> Back to Top</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- BOOTSTRAP 5 OFFCANVAS MOBILE NAVIGATION DRAWER WITH ACCORDION SUB-MENUS -->
  <div class="offcanvas offcanvas-end luxury-offcanvas" tabindex="-1" id="luxuryMobileNav" aria-labelledby="luxuryMobileNavLabel">
    <div class="offcanvas-header">
      <div class="d-flex align-items-center gap-2">
        <img src="https://www.weboptimizer.in/wp-content/uploads/2022/01/cropped-weboptimizer-icon-32x32.png" 
             alt="Web Optimizer" 
             style="width:28px; height:28px; border-radius:6px; object-fit:contain;"
             onerror="this.style.display='none';">
        <span class="offcanvas-title" id="luxuryMobileNavLabel" style="font-family: var(--font-display); font-weight:700; color:var(--gold-primary); letter-spacing:1px; font-size:16px;">WEB OPTIMIZER</span>
      </div>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between">
      <div>
        <p style="font-size:12px; color:var(--text-dim); margin-bottom:14px;">Senior Web Developer & Full-Service Digital Agency</p>
        
        <!-- Mobile Navigation Accordion -->
        <div class="accordion offcanvas-accordion mb-4" id="mobileMenuAccordion">
          
          <!-- Home -->
          <div class="py-2 border-bottom border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
            <a href="<?php echo $base_path; ?>index.php" class="text-white text-decoration-none fw-semibold" style="font-size:14px;">
              <i class="fa-solid fa-house me-2" style="color:var(--gold-primary);"></i> Home
            </a>
            <a href="<?php echo $base_path; ?>blog" class="badge text-decoration-none" style="background:rgba(212,175,55,0.15); border:1px solid var(--border-gold); color:var(--gold-light); font-size:11px;">
              <i class="fa-solid fa-book-open me-1"></i> Guides (25)
            </a>
          </div>

          <!-- Digital Marketing -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileDM">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileDM" aria-expanded="false" aria-controls="collapseMobileDM">
                <i class="fa-solid fa-bullhorn me-2" style="color:var(--gold-primary);"></i> Digital Marketing
              </button>
            </h2>
            <div id="collapseMobileDM" class="accordion-collapse collapse" aria-labelledby="headingMobileDM" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>digital-marketing.php" class="offcanvas-sub-link fw-bold text-gold" style="color:var(--gold-light);">Overview & Strategy</a>
                <a href="<?php echo $base_path; ?>facebook-marketing.php" class="offcanvas-sub-link">Facebook Marketing & Ads</a>
                <a href="<?php echo $base_path; ?>instagram-marketing.php" class="offcanvas-sub-link">Instagram Marketing & Reels</a>
                <a href="<?php echo $base_path; ?>linkedin-marketing.php" class="offcanvas-sub-link">LinkedIn B2B Marketing</a>
                <a href="<?php echo $base_path; ?>youtube-marketing.php" class="offcanvas-sub-link">YouTube Video Marketing</a>
                <a href="<?php echo $base_path; ?>influencer-marketing.php" class="offcanvas-sub-link">Influencer Marketing & UGC</a>
              </div>
            </div>
          </div>

          <!-- Web & UI/UX -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileWeb">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileWeb" aria-expanded="false" aria-controls="collapseMobileWeb">
                <i class="fa-solid fa-laptop-code me-2" style="color:var(--gold-primary);"></i> Website & UI/UX
              </button>
            </h2>
            <div id="collapseMobileWeb" class="accordion-collapse collapse" aria-labelledby="headingMobileWeb" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>web-development.php" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);">All Web Capabilities</a>
                <a href="<?php echo $base_path; ?>website-development.php" class="offcanvas-sub-link">UI-UX Website Design</a>
                <a href="<?php echo $base_path; ?>wordpress-development.php" class="offcanvas-sub-link">WordPress Development</a>
                <a href="<?php echo $base_path; ?>ecommerce-development.php" class="offcanvas-sub-link">WooCommerce E-Commerce</a>
                <a href="<?php echo $base_path; ?>shopify-development.php" class="offcanvas-sub-link">Shopify Development</a>
                <a href="<?php echo $base_path; ?>custom-web-application.php" class="offcanvas-sub-link">Custom Web Applications</a>
                <a href="<?php echo $base_path; ?>api-integrations.php" class="offcanvas-sub-link">API & Webhooks</a>
                <a href="<?php echo $base_path; ?>website-maintenance.php" class="offcanvas-sub-link">Website Maintenance AMC</a>
              </div>
            </div>
          </div>

          <!-- AI SEO & Growth -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileSEO">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileSEO" aria-expanded="false" aria-controls="collapseMobileSEO">
                <i class="fa-solid fa-chart-line me-2" style="color:var(--gold-primary);"></i> AI SEO & Growth
              </button>
            </h2>
            <div id="collapseMobileSEO" class="accordion-collapse collapse" aria-labelledby="headingMobileSEO" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>ai-seo.php" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);">AI SEO Overview</a>
                <a href="<?php echo $base_path; ?>seo-audit.php" class="offcanvas-sub-link">SEO Audit Services</a>
                <a href="<?php echo $base_path; ?>local-seo.php" class="offcanvas-sub-link">Local SEO & Google Maps</a>
                <a href="<?php echo $base_path; ?>link-building.php" class="offcanvas-sub-link">Link Building Services</a>
                <a href="<?php echo $base_path; ?>on-page-seo.php" class="offcanvas-sub-link">On-Page SEO</a>
                <a href="<?php echo $base_path; ?>off-page-seo.php" class="offcanvas-sub-link">Off-Page SEO</a>
                <a href="<?php echo $base_path; ?>technical-seo.php" class="offcanvas-sub-link">Technical SEO</a>
                <a href="<?php echo $base_path; ?>content-writing.php" class="offcanvas-sub-link">Content Writing Agency</a>
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
                <a href="<?php echo $base_path; ?>performance-marketing.php" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);">Performance Marketing Hub</a>
                <a href="<?php echo $base_path; ?>google-ads.php" class="offcanvas-sub-link">Google Ads – PPC & PMax</a>
                <a href="<?php echo $base_path; ?>paid-social-media.php" class="offcanvas-sub-link">Paid Social Media Ads</a>
                <a href="<?php echo $base_path; ?>lead-generation.php" class="offcanvas-sub-link">Lead Generation Funnels</a>
                <a href="<?php echo $base_path; ?>search-engine-marketing.php" class="offcanvas-sub-link">Search Engine Marketing</a>
                <a href="<?php echo $base_path; ?>email-marketing.php" class="offcanvas-sub-link">Email Marketing & Klaviyo</a>
                <a href="<?php echo $base_path; ?>affiliate-marketing.php" class="offcanvas-sub-link">Affiliate Marketing</a>
              </div>
            </div>
          </div>

          <!-- Branding & Creative -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileBrand">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileBrand" aria-expanded="false" aria-controls="collapseMobileBrand">
                <i class="fa-solid fa-bezier-curve me-2" style="color:var(--gold-primary);"></i> Branding & Design
              </button>
            </h2>
            <div id="collapseMobileBrand" class="accordion-collapse collapse" aria-labelledby="headingMobileBrand" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>branding-design.php" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);">Branding Overview</a>
                <a href="<?php echo $base_path; ?>brand-identity-logo.php" class="offcanvas-sub-link">Brand Identity & Logo Design</a>
                <a href="<?php echo $base_path; ?>brand-strategy.php" class="offcanvas-sub-link">Brand Strategy & Positioning</a>
                <a href="<?php echo $base_path; ?>corporate-branding.php" class="offcanvas-sub-link">Corporate Branding Systems</a>
                <a href="<?php echo $base_path; ?>marketing-collaterals.php" class="offcanvas-sub-link">Marketing Collaterals</a>
                <a href="<?php echo $base_path; ?>creative-advertising.php" class="offcanvas-sub-link">Creative Advertising</a>
                <a href="<?php echo $base_path; ?>brand-consulting.php" class="offcanvas-sub-link">Brand Consulting</a>
              </div>
            </div>
          </div>

          <!-- Allied Services & Automation -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileAllied">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileAllied" aria-expanded="false" aria-controls="collapseMobileAllied">
                <i class="fa-solid fa-gears me-2" style="color:var(--gold-primary);"></i> Allied Automation & Growth
              </button>
            </h2>
            <div id="collapseMobileAllied" class="accordion-collapse collapse" aria-labelledby="headingMobileAllied" data-bs-parent="#mobileMenuAccordion">
              <div class="accordion-body">
                <a href="<?php echo $base_path; ?>whatsapp-automation.php" class="offcanvas-sub-link">WhatsApp Automation</a>
                <a href="<?php echo $base_path; ?>google-my-business.php" class="offcanvas-sub-link">Google My Business (GMB)</a>
                <a href="<?php echo $base_path; ?>analytics-reporting.php" class="offcanvas-sub-link">Analytics & Reporting</a>
                <a href="<?php echo $base_path; ?>online-reputation.php" class="offcanvas-sub-link">Reputation Management (ORM)</a>
                <a href="<?php echo $base_path; ?>strategy-consulting.php" class="offcanvas-sub-link">Strategy & Consulting</a>
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
                <a href="<?php echo $base_path; ?>locations.php" class="offcanvas-sub-link fw-bold" style="color:var(--gold-light);">All 50 Cities Directory</a>
                <a href="<?php echo $base_path; ?>location.php?city=bhubaneswar" class="offcanvas-sub-link">Bhubaneswar (HQ)</a>
                <a href="<?php echo $base_path; ?>location.php?city=cuttack" class="offcanvas-sub-link">Cuttack</a>
                <a href="<?php echo $base_path; ?>location.php?city=rourkela" class="offcanvas-sub-link">Rourkela</a>
                <a href="<?php echo $base_path; ?>location.php?city=berhampur" class="offcanvas-sub-link">Berhampur</a>
                <a href="<?php echo $base_path; ?>location.php?city=sambalpur" class="offcanvas-sub-link">Sambalpur</a>
                <a href="<?php echo $base_path; ?>location.php?city=puri" class="offcanvas-sub-link">Puri</a>
                <a href="<?php echo $base_path; ?>location.php?city=balasore" class="offcanvas-sub-link">Balasore</a>
                <a href="<?php echo $base_path; ?>location.php?city=jharsuguda" class="offcanvas-sub-link">Jharsuguda</a>
                <a href="<?php echo $base_path; ?>location.php?city=angul" class="offcanvas-sub-link">Angul</a>
                <a href="<?php echo $base_path; ?>location.php?city=paradeep" class="offcanvas-sub-link">Paradeep</a>
              </div>
            </div>
          </div>

          <!-- Static Menu Links -->
          <div class="py-2">
            <a href="<?php echo $base_path; ?>index.php#contact" class="text-white text-decoration-none fw-semibold" style="font-size:14px;">
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
          <form id="modalInquiryForm" onsubmit="handleModalSubmit(event)">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" style="font-size:11.5px; color:var(--gold-primary); text-transform:uppercase; letter-spacing:0.8px; font-weight:600;">Your Name *</label>
                <input type="text" id="modalName" required class="luxury-form-input w-100" placeholder="e.g. Rahul Sharma">
              </div>
              <div class="col-md-6">
                <label class="form-label" style="font-size:11.5px; color:var(--gold-primary); text-transform:uppercase; letter-spacing:0.8px; font-weight:600;">Business Email *</label>
                <input type="email" id="modalEmail" required class="luxury-form-input w-100" placeholder="e.g. rahul@company.com">
              </div>
              <div class="col-md-6">
                <label class="form-label" style="font-size:11.5px; color:var(--gold-primary); text-transform:uppercase; letter-spacing:0.8px; font-weight:600;">Phone / WhatsApp *</label>
                <input type="tel" id="modalPhone" required class="luxury-form-input w-100" placeholder="+91 77359 73818">
              </div>
              <div class="col-md-6">
                <label class="form-label" style="font-size:11.5px; color:var(--gold-primary); text-transform:uppercase; letter-spacing:0.8px; font-weight:600;">Primary Practice / Service *</label>
                <select id="modalService" class="luxury-form-input w-100">
                  <?php foreach ($services_catalog as $s): ?>
                    <option value="<?php echo htmlspecialchars($s['title']); ?>" <?php echo (isset($service_slug) && $service_slug === $s['slug']) ? 'selected' : ''; ?>>
                      <?php echo htmlspecialchars($s['title']); ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label" style="font-size:11.5px; color:var(--gold-primary); text-transform:uppercase; letter-spacing:0.8px; font-weight:600;">Project Scope & Current URL (Optional)</label>
                <textarea id="modalMessage" rows="3" class="luxury-form-input w-100" placeholder="Share your existing URL, project goals, timeline, or key technical challenges..."></textarea>
              </div>
            </div>
            <div class="d-flex flex-wrap gap-3 align-items-center justify-content-between mt-4 pt-3 border-top border-secondary border-opacity-25">
              <div style="font-size:12px; color:var(--text-dim);">
                <i class="fa-solid fa-lock" style="color:var(--gold-primary);"></i> Confidential & Direct NDA Protected
              </div>
              <div class="d-flex gap-2">
                <button type="button" onclick="sendModalViaWhatsApp()" class="btn-luxury-outline" style="border-color:#25d366; color:#25d366; padding:10px 18px; font-size:13px;">
                  <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp
                </button>
                <button type="submit" class="btn-gold" style="padding:10px 22px; font-size:13px;">
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

  <!-- UNIVERSAL SCRIPTS -->
  <script>
    // Lead Form submit
    function handleLeadSubmit(e) {
      e.preventDefault();
      const nameEl = document.getElementById('leadName');
      const emailEl = document.getElementById('leadEmail');
      const phoneEl = document.getElementById('leadPhone');
      const serviceEl = document.getElementById('leadService');
      const messageEl = document.getElementById('leadMessage');

      const name = nameEl ? nameEl.value : '';
      const email = emailEl ? emailEl.value : '';
      const phone = phoneEl ? phoneEl.value : '';
      const service = serviceEl ? serviceEl.value : '';
      const message = messageEl ? messageEl.value : '';

      const subject = `Executive Project Inquiry - ${service} (${name})`;
      const body = `Hi Web Optimizer Team,\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nService: ${service}\n\nProject Scope:\n${message}\n`;

      window.location.href = `mailto:info@weboptimizer.in?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    }

    // Modal proposal submit
    function handleModalSubmit(e) {
      e.preventDefault();
      const name = document.getElementById('modalName').value;
      const email = document.getElementById('modalEmail').value;
      const phone = document.getElementById('modalPhone').value;
      const service = document.getElementById('modalService').value;
      const message = document.getElementById('modalMessage').value;

      const subject = `Executive Project Inquiry - ${service} (${name})`;
      const body = `Hi Web Optimizer Team,\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nService: ${service}\n\nProject Scope:\n${message}\n`;

      window.location.href = `mailto:info@weboptimizer.in?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    }

    // Send modal info directly via WhatsApp
    function sendModalViaWhatsApp() {
      const name = document.getElementById('modalName').value.trim() || 'Client';
      const email = document.getElementById('modalEmail').value.trim() || 'Not specified';
      const phone = document.getElementById('modalPhone').value.trim() || '';
      const service = document.getElementById('modalService').value;
      const message = document.getElementById('modalMessage').value.trim();

      const text = `Hello Web Optimizer,\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nService: ${service}\n\nProject Scope:\n${message || 'Requesting architecture proposal'}`;
      const url = `https://wa.me/917735973818?text=${encodeURIComponent(text)}`;
      window.open(url, '_blank');
    }

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
