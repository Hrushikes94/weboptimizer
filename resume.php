<?php
/**
 * Standalone Unlisted Resume Page - Hrushikesh Swain | Senior Associate Web Developer
 * Accessible directly at /resume (not linked in navigation or footer)
 */
$script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
$clean_dir = str_replace('\\', '/', $script_dir);
$home_url = ($clean_dir === '/' || $clean_dir === '.' || $clean_dir === '') ? '/' : rtrim($clean_dir, '/') . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Resume - Hrushikesh Swain | Senior Associate Web Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    :root {
      --primary: #0284c7;
      --primary-dark: #0369a1;
      --navy: #0f172a;
      --slate-800: #1e293b;
      --slate-600: #475569;
      --slate-400: #94a3b8;
      --slate-200: #e2e8f0;
      --slate-100: #f1f5f9;
      --slate-50: #f8fafc;
      --text: #1e293b;
      --text-muted: #64748b;
      --border: #e2e8f0;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      color: var(--text);
      background-color: #cbd5e1;
      line-height: 1.5;
      font-size: 13.5px;
      -webkit-font-smoothing: antialiased;
      padding: 24px 16px;
    }

    /* Action bar on top */
    .action-bar {
      max-width: 900px;
      margin: 0 auto 18px auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #0f172a;
      padding: 12px 20px;
      border-radius: 10px;
      color: #fff;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
    }
    .action-bar .left {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 14px;
      font-weight: 500;
    }
    .action-bar .left a {
      color: #38bdf8;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-weight: 600;
    }
    .action-bar .left a:hover {
      text-decoration: underline;
    }
    .action-bar .buttons {
      display: flex;
      gap: 10px;
    }
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 16px;
      border-radius: 6px;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.2s ease;
      border: none;
    }
    .btn-primary {
      background: #0284c7;
      color: #fff;
    }
    .btn-primary:hover {
      background: #0369a1;
      transform: translateY(-1px);
    }
    .btn-secondary {
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.2);
    }

    /* Resume Document container */
    .resume-container {
      max-width: 900px;
      margin: 0 auto;
      background: #ffffff;
      padding: 40px 48px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    /* Header */
    header {
      border-bottom: 2px solid var(--slate-100);
      padding-bottom: 24px;
      margin-bottom: 24px;
    }
    .header-top {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 20px;
    }
    .name-title h1 {
      font-size: 30px;
      font-weight: 800;
      color: var(--navy);
      letter-spacing: -0.5px;
      line-height: 1.1;
    }
    .name-title .subtitle {
      font-size: 15px;
      font-weight: 600;
      color: var(--primary);
      margin-top: 6px;
      letter-spacing: 0.2px;
    }
    .experience-badge {
      background: #e0f2fe;
      color: #0369a1;
      border: 1px solid #bae6fd;
      padding: 6px 14px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 700;
      white-space: nowrap;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 8px 16px;
      margin-top: 18px;
      padding-top: 16px;
      border-top: 1px dashed var(--slate-200);
    }
    .contact-item {
      display: flex;
      align-items: center;
      gap: 8px;
      color: var(--slate-600);
      font-size: 12.5px;
    }
    .contact-item i {
      color: var(--primary);
      width: 16px;
      text-align: center;
    }
    .contact-item a {
      color: var(--slate-600);
      text-decoration: none;
      transition: color 0.2s;
    }
    .contact-item a:hover {
      color: var(--primary);
      text-decoration: underline;
    }

    /* Section structure */
    .section {
      margin-bottom: 24px;
    }
    .section-title {
      font-size: 14px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: var(--navy);
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 12px;
      position: relative;
    }
    .section-title i {
      color: var(--primary);
      font-size: 14px;
    }
    .section-title::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--slate-200);
      margin-left: 8px;
    }

    /* Summary */
    .summary-text {
      color: var(--slate-800);
      font-size: 13px;
      line-height: 1.6;
    }

    /* Skills Grid */
    .skills-table {
      display: grid;
      grid-template-columns: 1fr;
      gap: 10px;
    }
    .skill-group {
      display: flex;
      flex-direction: column;
      gap: 3px;
      background: var(--slate-50);
      padding: 10px 14px;
      border-radius: 8px;
      border: 1px solid var(--slate-200);
    }
    .skill-label {
      font-size: 12px;
      font-weight: 700;
      color: var(--navy);
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .skill-label i {
      color: var(--primary);
      font-size: 11px;
    }
    .skill-list {
      color: var(--slate-600);
      font-size: 12.5px;
      line-height: 1.45;
    }

    /* Experience timeline */
    .exp-item {
      margin-bottom: 18px;
      position: relative;
      padding-left: 20px;
      border-left: 2px solid #e2e8f0;
    }
    .exp-item:last-child {
      margin-bottom: 0;
    }
    .exp-item::before {
      content: '';
      position: absolute;
      left: -6px;
      top: 4px;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: var(--primary);
      border: 2px solid #fff;
    }
    .exp-header {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
      flex-wrap: wrap;
      gap: 4px 12px;
      margin-bottom: 4px;
    }
    .exp-role {
      font-size: 14px;
      font-weight: 700;
      color: var(--navy);
    }
    .exp-company {
      font-size: 13px;
      font-weight: 600;
      color: var(--primary-dark);
    }
    .exp-date {
      font-size: 12px;
      font-weight: 600;
      color: var(--slate-400);
      font-family: 'JetBrains Mono', monospace;
    }
    .exp-location {
      font-size: 11.5px;
      color: var(--text-muted);
    }
    .exp-points {
      margin-top: 6px;
      list-style-type: none;
    }
    .exp-points li {
      position: relative;
      padding-left: 14px;
      margin-bottom: 4px;
      color: var(--slate-800);
      font-size: 12.5px;
      line-height: 1.5;
    }
    .exp-points li::before {
      content: '▸';
      position: absolute;
      left: 0;
      color: var(--primary);
      font-size: 11px;
    }

    /* Projects section */
    .portfolio-summary-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 12px;
    }
    .port-category-card {
      border: 1px solid var(--slate-200);
      background: var(--slate-50);
      padding: 12px 14px;
      border-radius: 8px;
    }
    .port-cat-title {
      font-size: 12.5px;
      font-weight: 700;
      color: var(--navy);
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 6px;
    }
    .port-count {
      background: #e2e8f0;
      color: var(--slate-800);
      font-size: 10.5px;
      padding: 2px 7px;
      border-radius: 12px;
      font-weight: 700;
    }
    .port-links {
      font-size: 11.5px;
      color: var(--slate-600);
      line-height: 1.55;
    }
    .port-links a {
      color: var(--primary-dark);
      text-decoration: none;
      font-weight: 500;
    }
    .port-links a:hover {
      text-decoration: underline;
    }

    /* Education */
    .edu-item {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
      padding: 10px 14px;
      background: var(--slate-50);
      border-radius: 8px;
      border: 1px solid var(--slate-200);
    }
    .edu-degree {
      font-weight: 700;
      font-size: 13.5px;
      color: var(--navy);
    }
    .edu-inst {
      font-size: 12.5px;
      color: var(--slate-600);
      margin-top: 2px;
    }
    .edu-year {
      font-size: 12px;
      color: var(--slate-400);
      font-weight: 600;
      font-family: 'JetBrains Mono', monospace;
    }

    /* Print styles */
    @media print {
      body {
        background: #fff;
        padding: 0;
        font-size: 12px;
      }
      .action-bar {
        display: none !important;
      }
      .resume-container {
        box-shadow: none;
        padding: 20px 24px;
        max-width: 100%;
        border-radius: 0;
      }
      .section {
        margin-bottom: 16px;
        page-break-inside: avoid;
      }
      .exp-item {
        page-break-inside: avoid;
        margin-bottom: 12px;
      }
      .port-category-card {
        page-break-inside: avoid;
      }
      a {
        text-decoration: none !important;
        color: inherit !important;
      }
      a[href^="http"]::after {
        content: " (" attr(href) ")";
        font-size: 9px;
        color: #64748b;
      }
      .contact-item a[href^="mailto"]::after,
      .contact-item a[href^="tel"]::after {
        content: "";
      }
    }

    @media (max-width: 768px) {
      .resume-container {
        padding: 24px 20px;
      }
      .header-top {
        flex-direction: column;
      }
      .portfolio-summary-grid {
        grid-template-columns: 1fr;
      }
      .action-bar {
        flex-direction: column;
        gap: 12px;
        align-items: stretch;
      }
      .action-bar .buttons {
        justify-content: flex-end;
      }
    }
  </style>
</head>
<body>

  <!-- Top Action Bar (hidden on print) -->
  <div class="action-bar">
    <div class="left">
      <a href="<?php echo htmlspecialchars($home_url); ?>"><i class="fa-solid fa-arrow-left"></i> View Live Interactive Portfolio</a>
      <span>|</span>
      <span>Hrushikesh Swain &bull; Resume</span>
    </div>
    <div class="buttons">
      <button onclick="window.print()" class="btn btn-primary">
        <i class="fa-solid fa-print"></i> Print / Save PDF
      </button>
    </div>
  </div>

  <!-- Printable Resume Document -->
  <div class="resume-container" id="resume">
    <header>
      <div class="header-top">
        <div class="name-title">
          <h1>Hrushikesh Swain</h1>
          <div class="subtitle">Senior Associate Web Developer | WordPress &amp; Full-Stack PHP Specialist</div>
        </div>
        <div class="experience-badge">
          <i class="fa-solid fa-briefcase"></i> 6.5+ Years Experience
        </div>
      </div>

      <div class="contact-grid">
        <div class="contact-item">
          <i class="fa-solid fa-location-dot"></i>
          <span>Bengaluru, Karnataka, India</span>
        </div>
        <div class="contact-item">
          <i class="fa-solid fa-phone"></i>
          <a href="tel:+917735973818">+91 7735973818</a>
        </div>
        <div class="contact-item">
          <i class="fa-solid fa-envelope"></i>
          <a href="mailto:hrushi.swain.mail@gmail.com">hrushi.swain.mail@gmail.com</a>
        </div>
        <div class="contact-item">
          <i class="fa-brands fa-linkedin"></i>
          <a href="https://www.linkedin.com/in/hrushikesh-swain-a34503211/" target="_blank">linkedin.com/in/hrushikesh-swain</a>
        </div>
      </div>
    </header>

    <!-- Professional Summary -->
    <section class="section">
      <div class="section-title">
        <i class="fa-solid fa-user"></i> Professional Summary
      </div>
      <p class="summary-text">
        Results-driven <strong>Senior Associate Web Developer</strong> with <strong>6.5+ years of extensive hands-on experience</strong> architecting, developing, and deploying enterprise-grade web applications, custom WordPress themes/plugins, and full-stack solutions. Proven record of delivering <strong>30+ live production websites</strong> across mission-critical sectors including Healthcare &amp; Diagnostics, K-12 &amp; Higher Education, D2C E-Commerce, and Real Estate. Deep expertise in <strong>PHP 8.x, MySQL, WordPress Core, WooCommerce, JavaScript, REST APIs, and Core Web Vitals optimization</strong>, combining technical engineering with Technical SEO to maximize search visibility and conversions.
      </p>
    </section>

    <!-- Core Technical Skills -->
    <section class="section">
      <div class="section-title">
        <i class="fa-solid fa-code"></i> Technical Skills &amp; Competencies
      </div>
      <div class="skills-table">
        <div class="skill-group">
          <span class="skill-label"><i class="fa-solid fa-palette"></i> WordPress Theme Development &amp; Customization:</span>
          <span class="skill-list">1. Custom WordPress Theme Development &bull; 2. Theme Customization &amp; Editing &bull; 3. Responsive Design Optimization &bull; 4. Theme Performance Optimization &bull; 5. Theme Security &amp; Compatibility.</span>
        </div>
        <div class="skill-group">
          <span class="skill-label"><i class="fa-solid fa-puzzle-piece"></i> Plugin Development &amp; Customization:</span>
          <span class="skill-list">1. Custom WordPress Plugin Development &bull; 2. Plugin Customization &amp; Editing &bull; 3. Third-Party API Integration &bull; 4. Plugin Performance Optimization &bull; 5. Plugin Security &amp; Maintenance.</span>
        </div>
        <div class="skill-group">
          <span class="skill-label"><i class="fa-solid fa-chart-line"></i> Key Technical SEO Specialties:</span>
          <span class="skill-list">1. Website Technical Audit &bull; 2. Website Speed &amp; Core Web Vitals (LCP, FID/INP, CLS) &bull; 3. Crawling &amp; Indexing Optimization &bull; 4. Schema Markup &amp; Structured Data (JSON-LD) &bull; 5. Website Architecture &amp; URL Optimization.</span>
        </div>
        <div class="skill-group">
          <span class="skill-label"><i class="fa-solid fa-server"></i> Backend &amp; Database Administration:</span>
          <span class="skill-list">PHP 8.x (OOP), MySQL Database Administration, Query Optimization, RESTful APIs, JSON, AJAX Asynchronous Calls, SQL Schema Design, Security Hardening.</span>
        </div>
        <div class="skill-group">
          <span class="skill-label"><i class="fa-solid fa-laptop-code"></i> Frontend &amp; UI/UX Engineering:</span>
          <span class="skill-list">HTML5, CSS3, SCSS, JavaScript (ES6+), jQuery, Bootstrap 5, Tailwind CSS, Responsive &amp; Mobile-First Design, Cross-Browser Compatibility.</span>
        </div>
        <div class="skill-group">
          <span class="skill-label"><i class="fa-solid fa-screwdriver-wrench"></i> Server, Tools &amp; DevOps:</span>
          <span class="skill-list">cPanel, WHM, Linux Server Administration, Apache, Nginx, SSL Certificates, Git/GitHub, Visual Studio Code, Cloudflare CDN/DNS Management, FileZilla/FTP.</span>
        </div>
      </div>
    </section>

    <!-- Professional Experience -->
    <section class="section">
      <div class="section-title">
        <i class="fa-solid fa-briefcase"></i> Professional Experience
      </div>

      <!-- Job 1 -->
      <div class="exp-item">
        <div class="exp-header">
          <div>
            <span class="exp-role">Senior Associate Web Developer</span> &bull; 
            <span class="exp-company">UFORYA MEDIA PRIVATE LIMITED</span>
          </div>
          <div class="exp-date">Jan 2023 &ndash; Present</div>
        </div>
        <div class="exp-location"><i class="fa-solid fa-location-dot"></i> Bengaluru, Karnataka, India</div>
        <ul class="exp-points">
          <li>Spearheaded end-to-end development, architecture, and deployment of <strong>20+ custom WordPress websites</strong> for prominent hospital chains, diagnostic pathology labs, and premier educational institutions.</li>
          <li>Engineered proprietary custom WordPress plugins and lightweight bespoke PHP themes from scratch, reducing plugin bloat and improving load times by <strong>40%&ndash;60%</strong>.</li>
          <li>Architected complex patient appointment booking systems, doctor schedule directories, and OPD inquiry management workflows for major clients (Sagar Hospitals, Suguna Hospital, Dr. Klinisch, Maarga Mind Care).</li>
          <li>Developed high-converting WooCommerce storefronts with custom checkout funnels, payment gateway integrations (Razorpay, Stripe, CCAvenue), and automated inventory management.</li>
          <li>Managed and tuned MySQL relational databases, writing performant SQL queries, managing schema migrations, and maintaining zero-downtime automated backups.</li>
          <li>Implemented technical SEO, structured data (JSON-LD schema), and automated XML sitemaps to achieve top 3 organic rankings for competitive healthcare and education keywords.</li>
        </ul>
      </div>

      <!-- Job 2 -->
      <div class="exp-item">
        <div class="exp-header">
          <div>
            <span class="exp-role">Digital Marketing Executive</span> &bull; 
            <span class="exp-company">CHEMIX SPECIALTY GASES &amp; EQUIPMENT</span>
          </div>
          <div class="exp-date">Jun 2022 &ndash; Jan 2023</div>
        </div>
        <div class="exp-location"><i class="fa-solid fa-location-dot"></i> Bengaluru, Karnataka, India</div>
        <ul class="exp-points">
          <li>Maintained the industrial gas and equipment portal, structuring product catalogs and streamlining lead capture forms.</li>
          <li>Conducted comprehensive Technical SEO audits, site speed optimization, and keyword mapping, driving a <strong>35% increase in qualified organic inquiries</strong>.</li>
          <li>Monitored performance metrics via Google Analytics 4 and Google Search Console to optimize user journeys and reduce page bounce rates.</li>
        </ul>
      </div>

      <!-- Job 3 -->
      <div class="exp-item">
        <div class="exp-header">
          <div>
            <span class="exp-role">Sr. SEO Executive &amp; Senior Web Designer</span> &bull; 
            <span class="exp-company">CORNERSTONE MEDIA PRIVATE LIMITED</span>
          </div>
          <div class="exp-date">Sep 2021 &ndash; Jun 2022</div>
        </div>
        <div class="exp-location"><i class="fa-solid fa-location-dot"></i> Bengaluru, Karnataka, India</div>
        <ul class="exp-points">
          <li>Designed and built custom, SEO-first responsive client websites adhering to modern UI/UX principles and mobile responsiveness standards.</li>
          <li>Executed full Technical SEO implementations, resolving crawl budget issues, canonicalization errors, and Core Web Vitals bottlenecks.</li>
          <li>Collaborated closely with design and marketing teams to translate Figma/PSD concepts into production-ready web interfaces.</li>
        </ul>
      </div>

      <!-- Job 4 -->
      <div class="exp-item">
        <div class="exp-header">
          <div>
            <span class="exp-role">Web Designer &amp; Sr. SEO Executive</span> &bull; 
            <span class="exp-company">WEBROSE TECHNOLOGY PRIVATE LIMITED</span>
          </div>
          <div class="exp-date">Dec 2018 &ndash; Sep 2021</div>
        </div>
        <div class="exp-location"><i class="fa-solid fa-location-dot"></i> Bhubaneswar / Remote</div>
        <ul class="exp-points">
          <li>Developed and launched 25+ dynamic and static client websites utilizing HTML5, CSS3, JavaScript, PHP, and WordPress.</li>
          <li>Supervised cPanel web hosting environments, DNS routing, domain pointing, SSL certificate installation, and site migration.</li>
          <li>Formulated and executed complete search engine optimization campaigns including on-page SEO, link-building outreach, and technical site fixes.</li>
        </ul>
      </div>
    </section>

    <!-- Key Production Portfolio Summary -->
    <section class="section">
      <div class="section-title">
        <i class="fa-solid fa-diagram-project"></i> Selected Production Portfolios (30+ Live Projects)
      </div>
      <div class="portfolio-summary-grid">
        <div class="port-category-card">
          <div class="port-cat-title">
            <span><i class="fa-solid fa-hospital" style="color:#0284c7; margin-right:6px;"></i> Healthcare &amp; Diagnostics</span>
            <span class="port-count">12 Websites</span>
          </div>
          <div class="port-links">
            <a href="https://www.sagarhospitals.in/" target="_blank">Sagar Hospitals</a>, 
            <a href="https://sugunahospital.com/" target="_blank">Suguna Hospital</a>, 
            <a href="https://www.drklinisch.com/" target="_blank">Dr. Klinisch</a>, 
            <a href="https://www.maargamindcare.com/best-psychiatric-hospital-in-bangalore/" target="_blank">Maarga Mind Care</a>, 
            <a href="https://resonanceclinics.in/" target="_blank">Resonance Clinics</a>, 
            <a href="https://advaitheyehospital.com/" target="_blank">Advaith Eye Hospital</a>, 
            <a href="https://nectarmch.com/" target="_blank">Nectar MCH</a>, 
            <a href="https://jigshospital.com/" target="_blank">Jigs Hospital</a>, 
            <a href="https://pravaphysio.com/" target="_blank">Prava Physio</a>, 
            <a href="https://bharathjansewalabs.com/" target="_blank">Bharath Jansewa Labs</a>, 
            <a href="https://matoshreeclinic.com/" target="_blank">Matoshree Clinic</a>, 
            <a href="http://newonboard.co.in/" target="_blank">New Onboard</a>.
          </div>
        </div>

        <div class="port-category-card">
          <div class="port-cat-title">
            <span><i class="fa-solid fa-graduation-cap" style="color:#0284c7; margin-right:6px;"></i> Educational Institutions</span>
            <span class="port-count">9 Websites</span>
          </div>
          <div class="port-links">
            <a href="https://npsjpnagar.com/" target="_blank">NPS JP Nagar</a>, 
            <a href="https://npsvarthur.com/" target="_blank">NPS Varthur</a>, 
            <a href="https://npskrpuram.com/" target="_blank">NPS KR Puram</a>, 
            <a href="https://thelandmarkschool.com/" target="_blank">The Landmark School</a>, 
            <a href="https://myposhtell.com/" target="_blank">My Poshtell</a>, 
            <a href="https://www.preschoolnewbelroad.com/" target="_blank">Pre School New BEL Road</a>, 
            <a href="https://www.copemeds.com/" target="_blank">Cope Meds</a>, 
            <a href="https://gvpskolar.com/" target="_blank">GVPS Kolar</a>, 
            <a href="http://sudhashreevidyadhari.in/" target="_blank">Sudhashree Vidyadhari</a>.
          </div>
        </div>

        <div class="port-category-card">
          <div class="port-cat-title">
            <span><i class="fa-solid fa-cart-shopping" style="color:#0284c7; margin-right:6px;"></i> E-Commerce Stores</span>
            <span class="port-count">1 Website</span>
          </div>
          <div class="port-links">
            <a href="https://ninibabyglobal.com/" target="_blank">Nini Baby Global</a> (D2C Maternity &amp; Baby Care Store with WooCommerce &amp; Payment Gateways).
          </div>
        </div>

        <div class="port-category-card">
          <div class="port-cat-title">
            <span><i class="fa-solid fa-building" style="color:#0284c7; margin-right:6px;"></i> Real Estate &amp; Corporate</span>
            <span class="port-count">3 Websites</span>
          </div>
          <div class="port-links">
            <a href="https://siddhashreepark.com/" target="_blank">Siddhashree Park</a> (Residential plotted development showcase), 
            <a href="https://dyuloka.in/" target="_blank">Dyuloka</a> (Luxury living architectural project), 
            <a href="https://damiancorporateblr.com/" target="_blank">Damian Corporate Bangalore</a> (Commercial office interiors &amp; workspace solutions).
          </div>
        </div>
      </div>
    </section>

    <!-- Education -->
    <section class="section">
      <div class="section-title">
        <i class="fa-solid fa-user-graduate"></i> Education
      </div>
      <div class="edu-item">
        <div>
          <div class="edu-degree">Bachelor of Computer Applications (B.C.A.)</div>
          <div class="edu-inst">Utkal University, Bhubaneswar, Odisha</div>
        </div>
        <div class="edu-year">Graduated 2019</div>
      </div>
    </section>
  </div>

</body>
</html>
