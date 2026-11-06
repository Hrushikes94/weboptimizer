<?php
/**
 * Web Optimizer - Dedicated Contact Us & Architecture Proposal Page
 * Clean URL: https://www.weboptimizer.in/contact
 * Founder & Senior Web Developer: Hrushikesh Swain (+91 7735973818)
 */
require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require_once __DIR__ . '/includes/blogs-data.php';

$page_title = 'Contact Us | Request a Free Quote | Web Optimizer';
$meta_desc  = 'Contact Web Optimizer in Bhubaneswar, Odisha for custom website design, GST billing software, SEO, and digital marketing. Call or WhatsApp +91 7735973818.';
$canonical_url = 'https://www.weboptimizer.in/contact';
$active_nav = 'contact';
$base_path = './';

// Fallback 301 redirect if accessed via contact.php directly
$req_uri = $_SERVER['REQUEST_URI'] ?? '';
if (PHP_SAPI !== 'cli' && strpos($req_uri, 'contact.php') !== false) {
    $script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
    $clean_dir = str_replace('\\', '/', $script_dir);
    $bp = ($clean_dir === '/' || $clean_dir === '.' || $clean_dir === '') ? '/' : rtrim($clean_dir, '/') . '/';
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $bp . 'contact');
    exit;
}

require __DIR__ . '/includes/header.php';
?>

<main>
  <!-- CONTACT US HERO (FULL-WIDTH SEPARATE SECTION) -->
  <section class="page-banner-section" style="padding-bottom: 45px;">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto text-center">
          <nav class="banner-breadcrumb justify-content-center" aria-label="breadcrumb">
            <a href="<?php echo $base_path; ?>"><i class="fa-solid fa-house"></i> Home</a>
            <span class="sep">/</span>
            <span class="current">Contact Us</span>
          </nav>

          <div class="banner-pill-badge mb-3">
            <span class="gold-dot"></span>
            <span>DIRECT SENIOR ENGINEERING CONSULTATION &bull; 2-HOUR RESPONSE SLA</span>
          </div>

          <h1 class="banner-title">
            Let&rsquo;s Architect Your Next <br>
            <span class="gold-gradient-text">Digital Growth Milestone</span>
          </h1>

          <p class="banner-lead mx-auto" style="max-width: 780px;">
            Whether you need a high-converting corporate website, a custom <strong>Quotation, Billing &amp; GST Invoice Software Application</strong>, #1 Google Maps dominance, or high-ROAS paid advertising across Odisha &mdash; connect directly with Founder &amp; Senior Web Developer <strong>Hrushikesh Swain</strong>.
          </p>

          <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="tel:+917735973818" class="btn-gold" style="padding: 12px 26px; font-size: 14px;">
              <i class="fa-solid fa-phone"></i> Call +91 77359 73818
            </a>
            <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20Senior%20Developer%20Hrushikesh%20Swain."
               target="_blank"
               rel="noopener noreferrer"
               class="btn-luxury-outline"
               style="border-color:#25d366; color:#25d366; padding: 12px 24px; font-size: 14px;">
              <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
            <a href="mailto:info@weboptimizer.in" class="btn-luxury-outline" style="padding: 12px 24px; font-size: 14px;">
              <i class="fa-solid fa-envelope"></i> info@weboptimizer.in
            </a>
          </div>

          <div class="d-flex flex-wrap justify-content-center gap-2">
            <span class="banner-stat-chip"><i class="fa-solid fa-clock text-gold"></i> 2-Hour Executive Response</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-shield-halved text-gold"></i> 100% NDA Protected</span>
            <span class="banner-stat-chip"><i class="fa-solid fa-map-location-dot text-gold"></i> Serving All 50 Odisha Cities</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEPARATE FULL-WIDTH CONTACT BANNER SHOWCASE SECTION -->
  <section class="full-banner-showcase-section">
    <div class="container">
      <div class="banner-visual-frame">
        <img src="<?php echo $base_path; ?>assets/images/banners/banner-contact.webp"
             alt="Contact Web Optimizer - Website Design, Custom Billing Software & Digital Marketing in Bhubaneswar, Odisha"
             title="Contact Web Optimizer | Direct Consultation with Hrushikesh Swain"
             draggable="false"
             class="img-fluid">
        <div class="banner-floating-badge">
          <span class="gold-dot"></span> Bhubaneswar HQ &bull; Mon&ndash;Sun: 8:00 AM &ndash; 10:00 PM IST
        </div>
      </div>
    </div>
  </section>

  <!-- EXECUTIVE CONTACT CHANNELS CARDS -->
  <section class="section-wrap" style="padding-top: 20px; padding-bottom: 30px;">
    <div class="container">
      <div class="row g-4">
        <div class="col-xl-3 col-md-6">
          <a href="tel:+917735973818" class="deliverable-card h-100 d-flex flex-column justify-content-between p-4 text-decoration-none" style="background: rgba(14, 21, 38, 0.85); border: 1px solid var(--border-gold);">
            <div>
              <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(212, 175, 55, 0.14); border: 1px solid var(--border-gold); display: flex; align-items: center; justify-content: center; font-size: 20px; color: var(--gold-primary); margin-bottom: 16px;">
                <i class="fa-solid fa-phone-volume"></i>
              </div>
              <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: var(--gold-primary); font-weight: 700;">Direct Engineering Line</span>
              <h3 style="font-family: var(--font-display); font-size: 1.25rem; color: #fff; font-weight: 700; margin: 6px 0 8px 0;">+91 77359 73818</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6;">
                Speak directly with Founder &amp; Senior Web Developer Hrushikesh Swain for technical architecture &amp; pricing.
              </p>
            </div>
            <div class="mt-3 pt-3 border-top border-secondary border-opacity-25" style="font-size: 12.5px; color: var(--gold-light); font-weight: 600;">
              Call Now <i class="fa-solid fa-arrow-right ms-1"></i>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-md-6">
          <a href="https://wa.me/917735973818?text=Hello%20Web%20Optimizer%2C%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="deliverable-card h-100 d-flex flex-column justify-content-between p-4 text-decoration-none" style="background: rgba(14, 21, 38, 0.85); border: 1px solid rgba(37, 211, 102, 0.35);">
            <div>
              <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(37, 211, 102, 0.14); border: 1px solid rgba(37, 211, 102, 0.4); display: flex; align-items: center; justify-content: center; font-size: 22px; color: #25d366; margin-bottom: 16px;">
                <i class="fa-brands fa-whatsapp"></i>
              </div>
              <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: #25d366; font-weight: 700;">WhatsApp Priority Desk</span>
              <h3 style="font-family: var(--font-display); font-size: 1.25rem; color: #fff; font-weight: 700; margin: 6px 0 8px 0;">Instant Live Chat</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6;">
                Share your requirements, existing website URL, or billing workflow on WhatsApp for an instant estimate.
              </p>
            </div>
            <div class="mt-3 pt-3 border-top border-secondary border-opacity-25" style="font-size: 12.5px; color: #25d366; font-weight: 600;">
              Start WhatsApp Chat <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-md-6">
          <a href="mailto:info@weboptimizer.in" class="deliverable-card h-100 d-flex flex-column justify-content-between p-4 text-decoration-none" style="background: rgba(14, 21, 38, 0.85); border: 1px solid var(--border-gold);">
            <div>
              <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(56, 189, 248, 0.14); border: 1px solid rgba(56, 189, 248, 0.35); display: flex; align-items: center; justify-content: center; font-size: 20px; color: var(--accent-cyan); margin-bottom: 16px;">
                <i class="fa-solid fa-envelope-open-text"></i>
              </div>
              <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: var(--accent-cyan); font-weight: 700;">Official Proposal Desk</span>
              <h3 style="font-family: var(--font-display); font-size: 1.15rem; color: #fff; font-weight: 700; margin: 6px 0 8px 0; word-break: break-all;">info@weboptimizer.in</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6;">
                Send RFPs, tender specifications, BOQ sheets, or scope documents for a formal itemized proposal.
              </p>
            </div>
            <div class="mt-3 pt-3 border-top border-secondary border-opacity-25" style="font-size: 12.5px; color: var(--accent-cyan); font-weight: 600;">
              Send Official Email <i class="fa-solid fa-arrow-right ms-1"></i>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="deliverable-card h-100 d-flex flex-column justify-content-between p-4" style="background: rgba(14, 21, 38, 0.85); border: 1px solid var(--border-gold);">
            <div>
              <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(212, 175, 55, 0.14); border: 1px solid var(--border-gold); display: flex; align-items: center; justify-content: center; font-size: 20px; color: var(--gold-primary); margin-bottom: 16px;">
                <i class="fa-solid fa-building-shield"></i>
              </div>
              <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: var(--gold-primary); font-weight: 700;">Headquarters &amp; Hours</span>
              <h3 style="font-family: var(--font-display); font-size: 1.2rem; color: #fff; font-weight: 700; margin: 6px 0 8px 0;">Bhubaneswar, Odisha</h3>
              <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6;">
                Khordha District, Odisha 751001, India. Active engineering deployment across all 30 Odisha districts.
              </p>
            </div>
            <div class="mt-3 pt-3 border-top border-secondary border-opacity-25" style="font-size: 12px; color: var(--gold-light); font-weight: 600;">
              <i class="fa-regular fa-clock me-1"></i> Mon&ndash;Sun: 8:00 AM &ndash; 10:00 PM
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MAIN CONTACT FORM & BUSINESS INFORMATION SECTION -->
  <section class="contact-section" id="contact" style="padding-top: 30px; padding-bottom: 70px;">
    <div class="container">
      <div class="contact-grid">
        <!-- Left Column: Business Information & Guarantees -->
        <div class="contact-info-card">
          <div>
            <span class="section-tag"><i class="fa-solid fa-handshake"></i> Direct Partnership</span>
            <h3>Why Odisha Businesses Trust Web Optimizer</h3>
            <p>
              No junior account managers or generic templates. Every project is architected directly under the supervision of Founder &amp; Senior Web Developer <strong>Hrushikesh Swain</strong> with transparent milestone deliverables.
            </p>

            <div class="contact-links-stack">
              <a href="tel:+917735973818" class="contact-link-row">
                <div class="contact-row-icon"><i class="fa-solid fa-phone"></i></div>
                <div class="contact-row-text">
                  <div class="label">Direct Engineering Line</div>
                  <div class="val">+91 77359 73818</div>
                </div>
              </a>

              <a href="https://wa.me/917735973818" target="_blank" rel="noopener noreferrer" class="contact-link-row">
                <div class="contact-row-icon" style="color:#25d366; background:rgba(37,211,102,0.12); border-color:rgba(37,211,102,0.3);"><i class="fa-brands fa-whatsapp"></i></div>
                <div class="contact-row-text">
                  <div class="label">WhatsApp Direct</div>
                  <div class="val">+91 77359 73818 (Instant Chat)</div>
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
                  <div class="label">Headquarters &amp; Service Belt</div>
                  <div class="val">Bhubaneswar, Odisha (All 50 Cities Active)</div>
                </div>
              </div>
            </div>

            <div class="mt-4 p-3 rounded-3" style="background: rgba(212, 175, 55, 0.07); border: 1px solid var(--border-gold);">
              <div style="font-size: 11.5px; text-transform: uppercase; letter-spacing: 0.8px; color: var(--gold-primary); font-weight: 700; margin-bottom: 8px;">
                <i class="fa-solid fa-certificate me-1"></i> Executive Engagement Standards
              </div>
              <ul class="list-unstyled m-0" style="font-size: 12.5px; color: var(--text-cream); line-height: 1.8;">
                <li><i class="fa-solid fa-check text-gold me-2"></i> 100% Custom Source Code &amp; Admin Ownership</li>
                <li><i class="fa-solid fa-check text-gold me-2"></i> Sub-Second Load Speed &amp; 99+ Core Web Vitals</li>
                <li><i class="fa-solid fa-check text-gold me-2"></i> GST-Compliant Billing &amp; Written NDA Protection</li>
                <li><i class="fa-solid fa-check text-gold me-2"></i> Dedicated Post-Launch Technical Support</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Right Column: Responsive Validated Contact Form -->
        <div class="contact-form-wrap">
          <h3>Request an Executive Proposal</h3>
          <p style="font-size:13.5px; color:var(--text-muted); margin-bottom:22px;">
            Fill out the form below. Your inquiry is encrypted and routed directly to our senior engineering desk.
          </p>

          <?php if (!empty($form_status) && $form_status === 'success'): ?>
            <div class="form-alert form-alert-success" style="background:rgba(16,185,129,0.15); border:1px solid #10b981; color:#10b981; padding:14px 20px; border-radius:12px; margin-bottom:20px; display:flex; align-items:center; gap:12px; font-weight:600;">
              <i class="fa-solid fa-circle-check" style="font-size:20px;"></i>
              <span>Thank you! Your executive inquiry has been transmitted. Senior Developer Hrushikesh Swain will review and contact you within 2 hours.</span>
            </div>
          <?php endif; ?>

          <div id="leadFormFeedback" style="display:none; margin-bottom:18px;"></div>

          <form id="leadContactForm" method="POST" action="<?php echo $base_path; ?>contact" onsubmit="handleLeadSubmit(event)" novalidate>
            <!-- Anti-Bot Honeypot Field -->
            <div style="position:absolute; left:-9999px; top:-9999px; opacity:0; pointer-events:none;" aria-hidden="true">
              <label for="leadWebsiteHp">Leave this field blank</label>
              <input type="text" id="leadWebsiteHp" name="website_url_hp" tabindex="-1" autocomplete="off">
            </div>

            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-field mb-0">
                  <label for="leadName">Your Name / Organization *</label>
                  <input type="text" id="leadName" name="lead_name" class="form-input" placeholder="e.g. Rajesh Mohanty / Kalinga Corp" maxlength="120" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-field mb-0">
                  <label for="leadEmail">Business Email *</label>
                  <input type="email" id="leadEmail" name="lead_email" class="form-input" placeholder="name@company.com" maxlength="150" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-field mb-0">
                  <label for="leadPhone">Phone / WhatsApp Number *</label>
                  <input type="tel" id="leadPhone" name="lead_phone" class="form-input" placeholder="+91 77359 73818" maxlength="25" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-field mb-0">
                  <label for="leadCity">Your City / Location</label>
                  <select id="leadCity" name="lead_city" class="form-input" style="background:#080d1a;">
                    <option value="Bhubaneswar">Bhubaneswar (HQ)</option>
                    <?php foreach ($odisha_locations as $cSlug => $cInfo): ?>
                      <?php if ($cSlug !== 'bhubaneswar'): ?>
                        <option value="<?php echo htmlspecialchars($cInfo['name']); ?>"><?php echo htmlspecialchars($cInfo['name'] . ' (' . $cInfo['district'] . ')'); ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                    <option value="Outside Odisha / Global">Outside Odisha / Global</option>
                  </select>
                </div>
              </div>

              <div class="col-12">
                <div class="form-field mb-0">
                  <label for="leadService">Required Service / Practice *</label>
                  <select id="leadService" name="lead_service" class="form-input" style="background:#080d1a;">
                    <option value="Custom Quotation, Billing & GST Invoice Software">Custom Quotation, Billing &amp; GST Invoice Software</option>
                    <?php foreach ($services_catalog as $sKey => $sItem): ?>
                      <?php if ($sKey !== 'quotation-billing-invoice-software'): ?>
                        <option value="<?php echo htmlspecialchars($sItem['title']); ?>"><?php echo htmlspecialchars($sItem['title']); ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="col-12">
                <div class="form-field mb-0">
                  <label for="leadMessage">Project Scope, Goals &amp; Current Website URL *</label>
                  <textarea id="leadMessage" name="lead_message" rows="4" class="form-input" maxlength="2000" placeholder="Share your project requirements, billing/software workflow, target launch timeline, or existing website URL..." required></textarea>
                </div>
              </div>
            </div>

            <div class="d-flex flex-wrap gap-2 mt-4">
              <button type="submit" id="leadSubmitBtn" name="lead_submit" class="btn-gold" style="flex:1 1 220px; justify-content:center; padding:14px;">
                <i class="fa-solid fa-paper-plane"></i> Send Inquiry Now
              </button>
              <button type="button" onclick="sendLeadViaWhatsApp()" class="btn-luxury-outline" style="flex:1 1 180px; justify-content:center; padding:14px; border-color:#25d366; color:#25d366;">
                <i class="fa-brands fa-whatsapp"></i> Send on WhatsApp
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ODISHA REGIONAL HUBS & FAQ SECTION -->
  <section class="section-wrap" style="padding-top: 20px; padding-bottom: 70px;">
    <div class="container">
      <div class="section-header text-center mb-4">
        <span class="section-tag"><i class="fa-solid fa-circle-question"></i> Common Questions</span>
        <h2 class="section-title-lg">Frequently Asked Consultation Questions</h2>
        <p class="section-desc mx-auto">
          Everything you need to know before starting your website, custom billing application, or digital marketing engagement with Web Optimizer.
        </p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="accordion luxury-accordion" id="contactFaqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="cFaqHead1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cFaqCol1" aria-expanded="true" aria-controls="cFaqCol1">
                  1. How quickly will I receive a response after submitting the contact form?
                </button>
              </h2>
              <div id="cFaqCol1" class="accordion-collapse collapse show" aria-labelledby="cFaqHead1" data-bs-parent="#contactFaqAccordion">
                <div class="accordion-body">
                  All inquiries are reviewed directly by Founder &amp; Senior Web Developer <strong>Hrushikesh Swain</strong> within <strong>2 business hours</strong>. For immediate priority discussions, you can also click the WhatsApp button or call <strong>+91 7735973818</strong> directly.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="cFaqHead2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cFaqCol2" aria-expanded="false" aria-controls="cFaqCol2">
                  2. Do you provide live demos for Custom Quotation, Billing &amp; GST Invoice Software?
                </button>
              </h2>
              <div id="cFaqCol2" class="accordion-collapse collapse" aria-labelledby="cFaqHead2" data-bs-parent="#contactFaqAccordion">
                <div class="accordion-body">
                  Yes! Select <strong>Custom Quotation, Billing &amp; GST Invoice Software</strong> in the form above or message us on WhatsApp to schedule a 1-on-1 live screen-share or in-person demonstration tailored to your retail, wholesale, manufacturing, or service workflow in Odisha.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="cFaqHead3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cFaqCol3" aria-expanded="false" aria-controls="cFaqCol3">
                  3. Do you serve clients outside Bhubaneswar across all districts of Odisha?
                </button>
              </h2>
              <div id="cFaqCol3" class="accordion-collapse collapse" aria-labelledby="cFaqHead3" data-bs-parent="#contactFaqAccordion">
                <div class="accordion-body">
                  Absolutely. While our headquarters is in Bhubaneswar, we actively serve enterprises across all 50 major cities and 30 districts of Odisha &mdash; including Cuttack, Rourkela, Sambalpur, Berhampur, Puri, Balasore, Angul, Jharsuguda, Jajpur, Paradeep, Keonjhar, and Koraput &mdash; as well as national and international clients.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
