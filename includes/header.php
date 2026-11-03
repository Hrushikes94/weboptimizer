<?php
/**
 * Web Optimizer - Modular Header Component with Multi-Level Mega Menu & Sub-Menus
 * Modeled after enterprise agency standards (analyzed from dcstudio.in)
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain
 * Official Phone: +91 7735973818 | Email: info@weboptimizer.in | Location: Bhubaneswar, Odisha
 */
require_once __DIR__ . '/services-data.php';

// Handle Contact Form Submission if POSTed
$form_status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['lead_submit']) || isset($_POST['modal_submit']))) {
    $name    = htmlspecialchars(trim($_POST['lead_name'] ?? $_POST['modal_name'] ?? ''));
    $email   = filter_var(trim($_POST['lead_email'] ?? $_POST['modal_email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone   = htmlspecialchars(trim($_POST['lead_phone'] ?? $_POST['modal_phone'] ?? ''));
    $service = htmlspecialchars(trim($_POST['lead_service'] ?? $_POST['modal_service'] ?? ''));
    $message = htmlspecialchars(trim($_POST['lead_message'] ?? $_POST['modal_message'] ?? ''));

    if ($name && $email && $phone) {
        $to = 'info@weboptimizer.in';
        $subject = "Executive Inquiry: $service - $name";
        $headers = "From: Web Optimizer <noreply@weboptimizer.in>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage:\n$message\n\nIP: " . $_SERVER['REMOTE_ADDR'];

        @mail($to, $subject, $body, $headers);
        $form_status = 'success';
    } else {
        $form_status = 'error';
    }
}

// Intelligent Dynamic Base Path Resolution (works seamlessly on localhost /Portfolio/ and production /)
if (!isset($base_path) || $base_path === './') {
    $script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
    $clean_dir = str_replace('\\', '/', $script_dir);
    if ($clean_dir === '/' || $clean_dir === '.' || $clean_dir === '') {
        $base_path = '/';
    } else {
        $base_path = rtrim($clean_dir, '/') . '/';
    }
}

$page_title = $page_title ?? 'Web Optimizer | Premier Website Design & Digital Engineering Company';
$meta_desc = $meta_desc ?? "Web Optimizer is Bhubaneswar's premier website design, custom WordPress engineering, WooCommerce development, and technical SEO agency. Over 158+ bespoke projects delivered. Call +91 7735973818.";
$active_nav = $active_nav ?? 'home';
$canonical_url = $canonical_url ?? 'https://www.weboptimizer.in/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <meta name="theme-color" content="#04070e">
  <base href="<?php echo htmlspecialchars($base_path); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>" />

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <meta property="og:image" content="https://www.weboptimizer.in/assets/images/weboptimizer-logo.webp">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <meta name="twitter:image" content="https://www.weboptimizer.in/assets/images/weboptimizer-logo.webp">

  <!-- Schema.org JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "ProfessionalService",
        "@id": "https://www.weboptimizer.in/#organization",
        "name": "Web Optimizer",
        "url": "https://www.weboptimizer.in",
        "logo": "https://www.weboptimizer.in/assets/images/weboptimizer-logo.webp",
        "image": "https://www.weboptimizer.in/assets/images/weboptimizer-logo.webp",
        "description": "Premier Website Design, Custom WordPress Engineering, Performance Marketing, and Technical SEO Agency in Bhubaneswar, Odisha.",
        "telephone": "+91 7735973818",
        "email": "info@weboptimizer.in",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Bhubaneswar",
          "addressRegion": "Odisha",
          "addressCountry": "IN"
        },
        "priceRange": "$$",
        "founder": {
          "@type": "Person",
          "name": "Hrushikesh Swain",
          "jobTitle": "Senior Associate Web Developer & Founder",
          "url": "https://www.linkedin.com/in/hrushikesh-swain-a34503211/"
        }
      },
      {
        "@type": "WebSite",
        "@id": "https://www.weboptimizer.in/#website",
        "url": "https://www.weboptimizer.in",
        "name": "Web Optimizer",
        "publisher": {
          "@id": "https://www.weboptimizer.in/#organization"
        }
      }
    ]
  }
  </script>

  <!-- Favicon -->
  <link rel="icon" href="<?php echo htmlspecialchars($base_path); ?>assets/images/weboptimizer-icon.webp" sizes="32x32" />

  <!-- Bootstrap 5.3.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Google Fonts: Cinzel + Plus Jakarta Sans + JetBrains Mono -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <style>

    /* ==========================================================================
       LUXURY DESIGN SYSTEM & TOKENS
       ========================================================================== */
    :root {
      --bg-black: #04070e;
      --bg-midnight: #080d1a;
      --bg-surface: #0f1629;
      --bg-surface-elevated: #161f38;
      --bg-glass: rgba(15, 22, 41, 0.72);
      
      --gold-primary: #d4af37;
      --gold-light: #f7d774;
      --gold-dark: #aa7c11;
      --gold-glow: rgba(212, 175, 55, 0.25);
      
      --accent-cyan: #38bdf8;
      --accent-emerald: #10b981;
      --accent-rose: #f43f5e;
      
      --text-white: #ffffff;
      --text-cream: #f1f5f9;
      --text-muted: #94a3b8;
      --text-dim: #64748b;
      
      --border-gold: rgba(212, 175, 55, 0.25);
      --border-subtle: rgba(148, 163, 184, 0.1);
      
      --font-display: 'Cinzel', Georgia, serif;
      --font-sans: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
      --font-mono: 'JetBrains Mono', monospace;
      
      --radius-sm: 8px;
      --radius-md: 16px;
      --radius-lg: 24px;
      --radius-full: 9999px;
      
      --transition-luxury: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
      font-size: 16px;
    }

    body {
      background-color: var(--bg-black) !important;
      color: var(--text-cream) !important;
      font-family: var(--font-sans);
      line-height: 1.7;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }

    /* Bootstrap Overrides for Luxury Obsidian & Gold Harmony */
    a {
      color: inherit;
      text-decoration: none !important;
      transition: var(--transition-luxury);
    }
    a:hover {
      color: var(--gold-light) !important;
      text-decoration: none !important;
    }
    p {
      margin-bottom: 0;
    }
    h1, h2, h3, h4, h5, h6 {
      margin-bottom: 0;
    }
    .btn:focus, .btn:active, .form-control:focus, .btn-close:focus {
      box-shadow: none !important;
    }

    /* Ambient luxury light beams */
    .luxury-ambient {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      pointer-events: none;
      z-index: 0;
      overflow: hidden;
    }
    .beam-1 {
      position: absolute;
      top: -150px;
      left: 20%;
      width: 700px;
      height: 700px;
      background: radial-gradient(circle, rgba(212, 175, 55, 0.08) 0%, rgba(212, 175, 55, 0) 70%);
      border-radius: 50%;
      filter: blur(100px);
    }
    .beam-2 {
      position: absolute;
      top: 45%;
      right: -100px;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(56, 189, 248, 0.06) 0%, rgba(56, 189, 248, 0) 70%);
      border-radius: 50%;
      filter: blur(110px);
    }
    .beam-3 {
      position: absolute;
      bottom: -150px;
      left: 10%;
      width: 800px;
      height: 800px;
      background: radial-gradient(circle, rgba(212, 175, 55, 0.05) 0%, rgba(212, 175, 55, 0) 70%);
      border-radius: 50%;
      filter: blur(120px);
    }

    .container {
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 28px;
      position: relative;
      z-index: 1;
    }

    /* ==========================================================================
       TOP ANNOUNCEMENT & EXECUTIVE LUXURY NAVBAR
       ========================================================================== */
    .top-bar {
      background: rgba(6, 10, 22, 0.98);
      border-bottom: 1px solid rgba(212, 175, 55, 0.15);
      padding: 7px 0;
      font-size: 12px;
      color: var(--text-muted);
      position: relative;
      z-index: 1001;
    }
    .top-bar-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: nowrap;
      gap: 14px;
    }
    .top-bar-left {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-wrap: nowrap;
    }
    .top-bar-left a, .top-bar-right a {
      color: var(--text-muted);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: var(--transition-luxury);
      white-space: nowrap;
    }
    .top-bar-left a:hover, .top-bar-right a:hover {
      color: var(--gold-light);
    }
    .top-bar-badge {
      background: rgba(212, 175, 55, 0.12);
      border: 1px solid rgba(212, 175, 55, 0.3);
      color: var(--gold-light);
      padding: 3px 12px;
      border-radius: var(--radius-full);
      font-size: 11px;
      font-family: var(--font-mono);
      font-weight: 600;
      white-space: nowrap;
    }

    /* Executive Luxury Navbar */
    .navbar {
      position: sticky;
      top: 0;
      width: 100%;
      z-index: 1000;
      padding: 12px 0;
      background: rgba(4, 7, 14, 0.92);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--border-gold);
      transition: var(--transition-luxury);
    }
    .nav-container {
      display: flex !important;
      justify-content: space-between !important;
      align-items: center !important;
      flex-wrap: nowrap !important;
      gap: 16px;
      width: 100%;
    }
    .brand-logo-wrap {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
      flex-shrink: 0;
    }
    .brand-logo-img {
      height: 40px;
      width: auto;
      object-fit: contain;
      filter: drop-shadow(0 4px 12px rgba(212, 175, 55, 0.2));
    }
    .brand-text {
      display: flex;
      flex-direction: column;
    }
    .brand-name {
      font-family: var(--font-display);
      font-size: 19px;
      font-weight: 800;
      color: #fff;
      letter-spacing: 1px;
      line-height: 1.1;
    }
    .brand-tagline {
      font-size: 9.5px;
      color: var(--gold-primary);
      text-transform: uppercase;
      letter-spacing: 1.5px;
      font-weight: 600;
      font-family: var(--font-mono);
    }

    .nav-menu {
      display: flex;
      align-items: center;
      gap: clamp(14px, 1.8vw, 24px);
      list-style: none;
      margin: 0;
      padding: 0;
      white-space: nowrap;
      flex-shrink: 1;
    }
    .nav-menu a {
      text-decoration: none;
      color: var(--text-muted);
      font-size: 13px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.6px;
      transition: var(--transition-luxury);
      position: relative;
      white-space: nowrap;
      padding: 4px 0;
    }
    .nav-menu a:hover, .nav-menu a.active {
      color: var(--gold-light);
    }
    .nav-menu a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--gold-primary), var(--gold-light));
      transition: var(--transition-luxury);
    }
    .nav-menu a:hover::after, .nav-menu a.active::after {
      width: 100%;
    }

    .nav-actions {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-shrink: 0;
      white-space: nowrap;
    }
    .btn-proposal-nav {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid var(--border-gold);
      color: #fff;
      padding: 8px 16px;
      border-radius: var(--radius-sm);
      font-size: 12.5px;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 7px;
      transition: var(--transition-luxury);
      white-space: nowrap;
      cursor: pointer;
    }
    .btn-proposal-nav:hover {
      background: rgba(212, 175, 55, 0.15);
      border-color: var(--gold-primary);
      color: var(--gold-light);
      transform: translateY(-2px);
    }
    .btn-call-nav {
      background: linear-gradient(135deg, #d4af37 0%, #f7d774 50%, #aa7c11 100%);
      color: #04070e !important;
      padding: 8px 16px;
      border-radius: var(--radius-sm);
      font-size: 12.5px;
      font-weight: 700;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      letter-spacing: 0.3px;
      box-shadow: 0 4px 14px var(--gold-glow);
      transition: var(--transition-luxury);
      border: 1px solid rgba(255, 255, 255, 0.4);
      white-space: nowrap;
      cursor: pointer;
    }
    .btn-call-nav:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(212, 175, 55, 0.45);
      background: linear-gradient(135deg, #f7d774 0%, #ffd700 50%, #d4af37 100%);
    }
    .btn-gold {
      background: linear-gradient(135deg, #d4af37 0%, #f7d774 50%, #aa7c11 100%);
      color: #04070e;
      padding: 10px 22px;
      border-radius: var(--radius-sm);
      font-size: 13px;
      font-weight: 700;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      letter-spacing: 0.5px;
      box-shadow: 0 4px 18px var(--gold-glow);
      transition: var(--transition-luxury);
      border: 1px solid rgba(255, 255, 255, 0.4);
      cursor: pointer;
    }
    .btn-gold:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 26px rgba(212, 175, 55, 0.45);
      background: linear-gradient(135deg, #f7d774 0%, #ffd700 50%, #d4af37 100%);
    }
    .mobile-nav-toggle {
      display: none;
      background: rgba(212, 175, 55, 0.1);
      border: 1px solid var(--border-gold);
      color: var(--gold-primary);
      font-size: 18px;
      width: 40px;
      height: 40px;
      border-radius: var(--radius-sm);
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: var(--transition-luxury);
    }
    .mobile-nav-toggle:hover {
      background: rgba(212, 175, 55, 0.2);
      color: #fff;
    }

    /* ==========================================================================
       HERO SECTION (LUXURY AGENCY PRESENTATION)
       ========================================================================== */
    .hero {
      padding: 90px 0 80px 0;
      position: relative;
      overflow: hidden;
      background: radial-gradient(circle at 75% 30%, rgba(212, 175, 55, 0.08) 0%, rgba(14, 21, 38, 0.4) 40%, rgba(4, 7, 14, 0.98) 100%), linear-gradient(180deg, #070b14 0%, #03060c 100%);
    }
    .hero::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-image: radial-gradient(rgba(212, 175, 55, 0.12) 1px, transparent 1px);
      background-size: 32px 32px;
      opacity: 0.3;
      pointer-events: none;
    }
    .hero-grid {
      display: flex;
      flex-direction: column;
      gap: 36px;
      align-items: center;
      text-align: center;
    }
    .hero-left {
      max-width: 920px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .hero-lead {
      margin-left: auto;
      margin-right: auto;
      max-width: 780px !important;
    }
    .hero-actions, .hero-pills {
      justify-content: center;
    }
    .hero-stats-grid {
      display: grid !important;
      grid-template-columns: repeat(4, 1fr) !important;
      gap: 18px;
      width: 100%;
    }
    @media (max-width: 991px) {
      .hero-stats-grid {
        grid-template-columns: repeat(2, 1fr) !important;
      }
    }
    .full-banner-showcase-section {
      padding: 0 0 65px 0;
      background: #060914;
      position: relative;
      z-index: 2;
      border-bottom: 1px solid rgba(255, 255, 255, 0.07);
    }
    .full-banner-showcase-section .banner-visual-frame {
      max-width: 1140px;
      margin: 0 auto;
      border-radius: 24px;
      box-shadow: 0 30px 70px rgba(0, 0, 0, 0.75), 0 0 40px rgba(255, 122, 0, 0.15);
      border: 1px solid rgba(212, 175, 55, 0.35);
    }
    .full-banner-showcase-section .banner-visual-frame img {
      width: 100%;
      height: auto;
      aspect-ratio: 16 / 9;
      object-fit: cover;
    }

    .hero-badge-gold {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: rgba(212, 175, 55, 0.08);
      border: 1px solid rgba(212, 175, 55, 0.35);
      color: var(--gold-light);
      padding: 7px 18px;
      border-radius: var(--radius-full);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      font-family: var(--font-mono);
      margin-bottom: 24px;
    }
    .gold-dot {
      width: 7px;
      height: 7px;
      background: var(--gold-light);
      border-radius: 50%;
      box-shadow: 0 0 10px var(--gold-light);
      animation: goldPulse 2s infinite;
    }
    @keyframes goldPulse {
      0%, 100% { opacity: 0.4; transform: scale(0.9); }
      50% { opacity: 1; transform: scale(1.2); }
    }

    .hero-title {
      font-family: var(--font-display);
      font-size: 48px;
      font-weight: 800;
      line-height: 1.15;
      letter-spacing: -0.5px;
      color: #fff;
      margin-bottom: 20px;
    }
    .gold-gradient-text {
      background: linear-gradient(135deg, #f7d774 0%, #d4af37 50%, #aa7c11 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: inline-block;
    }

    .hero-lead {
      font-size: 16.5px;
      color: #cbd5e1;
      line-height: 1.75;
      margin-bottom: 34px;
      max-width: 600px;
    }

    .hero-actions {
      display: flex;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
      margin-bottom: 40px;
    }
    .btn-luxury-outline {
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid var(--border-gold);
      color: var(--text-white);
      padding: 12px 26px;
      border-radius: var(--radius-sm);
      font-size: 13.5px;
      font-weight: 600;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      transition: var(--transition-luxury);
    }
    .btn-luxury-outline:hover {
      background: rgba(212, 175, 55, 0.1);
      border-color: var(--gold-primary);
      color: var(--gold-light);
      transform: translateY(-2px);
    }

    /* Fast contact pills */
    .hero-pills {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }
    .hero-pill {
      background: rgba(15, 22, 41, 0.6);
      border: 1px solid var(--border-subtle);
      color: var(--text-muted);
      text-decoration: none;
      font-size: 12.5px;
      padding: 6px 14px;
      border-radius: var(--radius-full);
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: var(--transition-luxury);
    }
    .hero-pill i {
      color: var(--gold-primary);
    }
    .hero-pill:hover {
      border-color: var(--gold-primary);
      color: #fff;
      background: rgba(212, 175, 55, 0.08);
      transform: translateY(-1px);
    }

    /* Hero Right Card: The Luxury Agency Crest */
    .hero-card {
      background: linear-gradient(145deg, rgba(22, 31, 56, 0.85) 0%, rgba(8, 13, 26, 0.95) 100%);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-lg);
      padding: 36px 30px;
      backdrop-filter: blur(25px);
      box-shadow: 0 24px 60px rgba(0, 0, 0, 0.6), 0 0 30px rgba(212, 175, 55, 0.1);
      position: relative;
    }
    .hero-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 10%;
      width: 80%;
      height: 2px;
      background: linear-gradient(90deg, transparent, var(--gold-light), transparent);
    }
    .hero-card-header {
      display: flex;
      align-items: center;
      gap: 18px;
      padding-bottom: 24px;
      border-bottom: 1px solid var(--border-subtle);
      margin-bottom: 24px;
    }
    .crest-icon {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(8, 13, 26, 0.8));
      border: 1px solid var(--gold-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 26px;
      color: var(--gold-light);
      flex-shrink: 0;
      box-shadow: 0 0 20px rgba(212, 175, 55, 0.3);
    }
    .crest-meta h3 {
      font-family: var(--font-display);
      font-size: 20px;
      font-weight: 700;
      color: #fff;
    }
    .crest-meta p {
      font-size: 13px;
      color: var(--gold-primary);
      font-weight: 500;
    }
    .crest-location {
      font-size: 11.5px;
      color: var(--text-dim);
      font-family: var(--font-mono);
      margin-top: 3px;
    }

    .hero-stats-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }
    .stat-card {
      background: rgba(8, 13, 26, 0.7);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-md);
      padding: 18px;
      transition: var(--transition-luxury);
    }
    .stat-card:hover {
      border-color: var(--gold-primary);
      transform: translateY(-2px);
      background: rgba(15, 22, 41, 0.9);
      box-shadow: 0 8px 24px rgba(212, 175, 55, 0.15);
    }
    .stat-num {
      font-family: var(--font-display);
      font-size: 32px;
      font-weight: 800;
      color: var(--gold-light);
      line-height: 1;
    }
    .stat-desc {
      font-size: 12px;
      color: var(--text-muted);
      margin-top: 6px;
      font-weight: 500;
    }

    .client-callout {
      margin-top: 22px;
      background: rgba(212, 175, 55, 0.06);
      border: 1px solid rgba(212, 175, 55, 0.2);
      border-radius: var(--radius-sm);
      padding: 14px 18px;
      display: flex;
      align-items: center;
      gap: 14px;
      font-size: 13px;
      color: #f1f5f9;
    }
    .client-callout i {
      color: var(--gold-primary);
      font-size: 18px;
    }

    /* ==========================================================================
       TRUSTED CLIENT BRANDS MARQUEE (REAL BRANDS FROM SITE)
       ========================================================================== */
    .brands-section {
      padding: 40px 0;
      border-top: 1px solid rgba(212, 175, 55, 0.12);
      border-bottom: 1px solid rgba(212, 175, 55, 0.12);
      background: rgba(8, 13, 26, 0.6);
      text-align: center;
    }
    .brands-tag {
      font-family: var(--font-mono);
      font-size: 11.5px;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: var(--gold-primary);
      margin-bottom: 24px;
      display: block;
    }
    .brands-row {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 48px;
      flex-wrap: wrap;
    }
    .brand-logo-item {
      opacity: 0.75;
      transition: var(--transition-luxury);
      filter: grayscale(100%) brightness(1.8) contrast(1.1);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .brand-logo-item:hover {
      opacity: 1;
      filter: grayscale(0%) brightness(1);
      transform: scale(1.08);
    }
    .brand-logo-item img {
      max-height: 42px;
      max-width: 160px;
      object-fit: contain;
    }

    /* ==========================================================================
       SECTION HEADERS
       ========================================================================== */
    .section-wrap {
      padding: 95px 0;
      position: relative;
    }
    .section-header {
      text-align: center;
      max-width: 720px;
      margin: 0 auto 55px auto;
    }
    .section-tag {
      font-family: var(--font-mono);
      font-size: 12px;
      font-weight: 700;
      color: var(--gold-primary);
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 12px;
      display: inline-block;
      background: rgba(212, 175, 55, 0.08);
      padding: 5px 14px;
      border-radius: var(--radius-full);
      border: 1px solid rgba(212, 175, 55, 0.25);
    }
    .section-title-lg {
      font-family: var(--font-display);
      font-size: 38px;
      font-weight: 800;
      color: #fff;
      letter-spacing: -0.5px;
      margin-bottom: 16px;
      line-height: 1.2;
    }
    .section-desc {
      font-size: 15.5px;
      color: var(--text-muted);
      line-height: 1.7;
    }

    /* ==========================================================================
       CAPABILITIES & CORE SPECIALTIES SLIDER
       ========================================================================== */
    .slider-wrapper {
      position: relative;
      width: 100%;
      margin: 10px 0 20px 0;
    }
    .slider-track {
      display: flex;
      gap: 24px;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      scroll-behavior: smooth;
      padding: 16px 4px 24px 4px;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none;
    }
    .slider-track::-webkit-scrollbar {
      display: none;
    }
    .slider-track.grid-mode {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      overflow-x: visible;
      scroll-snap-type: none;
      padding: 0;
    }
    .slider-track.grid-mode > * {
      flex: none !important;
      width: 100% !important;
      scroll-snap-align: none !important;
    }

    /* Capability Card */
    .capability-card {
      flex: 0 0 calc((100% - 48px) / 3);
      min-width: 340px;
      scroll-snap-align: start;
      background: linear-gradient(180deg, rgba(22, 31, 56, 0.8) 0%, rgba(8, 13, 26, 0.95) 100%);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-md);
      padding: 30px 26px;
      display: flex;
      flex-direction: column;
      position: relative;
      transition: var(--transition-luxury);
    }
    .capability-card:hover {
      transform: translateY(-6px);
      border-color: var(--gold-light);
      box-shadow: 0 20px 45px rgba(0, 0, 0, 0.6), 0 0 25px rgba(212, 175, 55, 0.2);
    }
    .card-crest-top {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 18px;
    }
    .card-icon-box {
      width: 52px;
      height: 52px;
      border-radius: var(--radius-sm);
      background: rgba(212, 175, 55, 0.12);
      border: 1px solid var(--border-gold);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      color: var(--gold-light);
    }
    .card-badge-pill {
      font-family: var(--font-mono);
      font-size: 11px;
      font-weight: 700;
      padding: 3px 10px;
      border-radius: var(--radius-full);
      background: rgba(212, 175, 55, 0.1);
      border: 1px solid rgba(212, 175, 55, 0.3);
      color: var(--gold-light);
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .card-title {
      font-family: var(--font-display);
      font-size: 20px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 6px;
      line-height: 1.3;
    }
    .card-subtitle {
      font-size: 12.5px;
      color: var(--gold-primary);
      margin-bottom: 18px;
      padding-bottom: 14px;
      border-bottom: 1px solid var(--border-subtle);
    }

    .numbered-features {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 11px;
      margin-top: 4px;
    }
    .numbered-features li {
      font-size: 13.5px;
      color: #cbd5e1;
      display: flex;
      align-items: flex-start;
      gap: 12px;
      line-height: 1.5;
    }
    .num-pill {
      width: 22px;
      height: 22px;
      border-radius: 50%;
      background: rgba(212, 175, 55, 0.15);
      border: 1px solid rgba(212, 175, 55, 0.4);
      color: var(--gold-light);
      font-size: 11px;
      font-weight: 700;
      font-family: var(--font-mono);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      margin-top: 2px;
    }

    /* Slider Navigation Floating Arrows */
    .slider-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: rgba(8, 13, 26, 0.92);
      border: 1px solid var(--gold-primary);
      color: var(--gold-light);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 17px;
      cursor: pointer;
      z-index: 20;
      transition: var(--transition-luxury);
      backdrop-filter: blur(12px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
    }
    .slider-arrow:hover:not(:disabled) {
      background: var(--gold-primary);
      color: #04070e;
      transform: translateY(-50%) scale(1.1);
      box-shadow: 0 0 25px rgba(212, 175, 55, 0.6);
    }
    .slider-arrow:disabled {
      opacity: 0.25;
      cursor: not-allowed;
      border-color: rgba(255, 255, 255, 0.15);
      color: #64748b;
    }
    .arrow-left { left: -25px; }
    .arrow-right { right: -25px; }

    /* Slider Controls Footer */
    .slider-footer-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      margin-top: 16px;
      background: rgba(15, 22, 41, 0.6);
      border: 1px solid var(--border-gold);
      padding: 12px 24px;
      border-radius: var(--radius-full);
    }
    .slider-status-indicator {
      font-family: var(--font-mono);
      font-size: 13px;
      font-weight: 600;
      color: var(--gold-light);
      display: flex;
      align-items: center;
      gap: 8px;
      white-space: nowrap;
    }
    .progress-bar-track {
      flex: 1;
      height: 6px;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 6px;
      overflow: hidden;
    }
    .progress-bar-fill {
      height: 100%;
      width: 15%;
      background: linear-gradient(90deg, var(--gold-primary), var(--gold-light));
      border-radius: 6px;
      transition: width 0.25s ease;
    }
    .mode-switch-group {
      display: inline-flex;
      background: rgba(8, 13, 26, 0.8);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-full);
      padding: 3px;
      gap: 2px;
    }
    .mode-btn {
      background: transparent;
      border: none;
      color: var(--text-muted);
      padding: 5px 14px;
      border-radius: var(--radius-full);
      font-size: 12px;
      font-weight: 600;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: var(--transition-luxury);
    }
    .mode-btn.active {
      background: var(--gold-primary);
      color: #04070e;
      font-weight: 700;
    }

    /* ==========================================================================
       PORTFOLIO OF 29 LIVE WEBSITES (CATEGORIZED SLIDER & SEARCH)
       ========================================================================== */
    .portfolio-filter-nav {
      display: flex;
      justify-content: center;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 24px;
    }
    .port-filter-btn {
      background: rgba(15, 22, 41, 0.7);
      border: 1px solid var(--border-subtle);
      color: var(--text-muted);
      padding: 10px 22px;
      border-radius: var(--radius-full);
      font-size: 13.5px;
      font-weight: 600;
      cursor: pointer;
      transition: var(--transition-luxury);
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    .port-filter-btn .count-badge {
      background: rgba(255, 255, 255, 0.08);
      padding: 2px 8px;
      border-radius: 12px;
      font-size: 11px;
      font-family: var(--font-mono);
    }
    .port-filter-btn:hover {
      color: #fff;
      border-color: var(--gold-primary);
    }
    .port-filter-btn.active {
      background: linear-gradient(135deg, #d4af37, #aa7c11);
      color: #04070e;
      border-color: var(--gold-light);
      font-weight: 700;
    }
    .port-filter-btn.active .count-badge {
      background: rgba(0, 0, 0, 0.35);
      color: #fff;
    }

    /* Search input */
    .port-search-bar {
      max-width: 540px;
      margin: 0 auto 36px auto;
      position: relative;
    }
    .port-search-bar i {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gold-primary);
      font-size: 15px;
    }
    .port-search-input {
      width: 100%;
      background: rgba(15, 22, 41, 0.85);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-full);
      padding: 14px 22px 14px 50px;
      font-size: 14px;
      color: #fff;
      outline: none;
      transition: var(--transition-luxury);
    }
    .port-search-input:focus {
      border-color: var(--gold-light);
      box-shadow: 0 0 20px rgba(212, 175, 55, 0.25);
    }

    /* Project Cards */
        .project-card-thumb {
      width: 100%;
      height: 200px;
      overflow: hidden;
      position: relative;
      background: var(--bg-surface-elevated);
      border-bottom: 1px solid var(--border-gold);
    }
    .project-card-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .project-card:hover .project-card-thumb img {
      transform: scale(1.08);
    }
    .badge-dev {
      background: rgba(56, 189, 248, 0.12);
      color: #38bdf8;
      border: 1px solid rgba(56, 189, 248, 0.25);
    }
    .badge-digital {
      background: rgba(168, 85, 247, 0.12);
      color: #c084fc;
      border: 1px solid rgba(168, 85, 247, 0.25);
    }
    .badge-biz {
      background: rgba(212, 175, 55, 0.15);
      color: var(--gold-light);
      border: 1px solid var(--border-gold);
    }
    .badge-service {
      background: rgba(16, 185, 129, 0.12);
      color: #34d399;
      border: 1px solid rgba(16, 185, 129, 0.25);
    }

    .project-card {
      flex: 0 0 calc((100% - 48px) / 3);
      min-width: 340px;
      scroll-snap-align: start;
      background: linear-gradient(180deg, rgba(22, 31, 56, 0.75) 0%, rgba(8, 13, 26, 0.95) 100%);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-md);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: var(--transition-luxury);
      position: relative;
    }
    .project-card:hover {
      transform: translateY(-6px);
      border-color: var(--gold-light);
      box-shadow: 0 18px 45px rgba(0, 0, 0, 0.5), 0 0 25px rgba(212, 175, 55, 0.2);
    }

    .project-card-header {
      padding: 16px 20px;
      background: rgba(8, 13, 26, 0.6);
      border-bottom: 1px solid var(--border-subtle);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .sector-badge {
      font-size: 11px;
      font-weight: 700;
      padding: 4px 10px;
      border-radius: var(--radius-full);
      display: inline-flex;
      align-items: center;
      gap: 6px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .badge-health {
      background: rgba(56, 189, 248, 0.12);
      color: #38bdf8;
      border: 1px solid rgba(56, 189, 248, 0.25);
    }
    .badge-edu {
      background: rgba(168, 85, 247, 0.12);
      color: #c084fc;
      border: 1px solid rgba(168, 85, 247, 0.25);
    }
    .badge-ecom {
      background: rgba(16, 185, 129, 0.12);
      color: #34d399;
      border: 1px solid rgba(16, 185, 129, 0.25);
    }
    .badge-realty {
      background: rgba(245, 158, 11, 0.12);
      color: #fbbf24;
      border: 1px solid rgba(245, 158, 11, 0.25);
    }

    .live-status {
      font-size: 11px;
      color: var(--accent-emerald);
      font-family: var(--font-mono);
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .live-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--accent-emerald);
    }

    .project-card-body {
      padding: 24px 20px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    .project-card-title {
      font-family: var(--font-display);
      font-size: 20px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 6px;
    }
    .project-card-domain {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: var(--gold-primary);
      font-size: 12.5px;
      font-family: var(--font-mono);
      margin-bottom: 14px;
      text-decoration: none;
    }
    .project-card-domain:hover {
      text-decoration: underline;
      color: var(--gold-light);
    }
    .project-card-desc {
      font-size: 13.5px;
      color: var(--text-muted);
      line-height: 1.6;
      margin-bottom: 18px;
      flex: 1;
    }

    .project-tech-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-bottom: 20px;
    }
    .tech-pill {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.08);
      color: #cbd5e1;
      padding: 3px 9px;
      border-radius: 6px;
      font-size: 11.5px;
      font-weight: 500;
    }

    .project-card-footer {
      padding-top: 14px;
      border-top: 1px solid var(--border-subtle);
    }
    .btn-launch-site {
      color: #04070e;
      background: linear-gradient(135deg, var(--gold-primary), var(--gold-light));
      border: 1px solid var(--gold-light);
      padding: 9px 18px;
      border-radius: var(--radius-sm);
      text-decoration: none;
      font-size: 12.5px;
      font-weight: 700;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      width: 100%;
      transition: var(--transition-luxury);
    }
    .btn-launch-site:hover {
      background: linear-gradient(135deg, var(--gold-light), #fff);
      box-shadow: 0 4px 18px var(--gold-glow);
      transform: translateY(-1px);
    }

    .no-results-box {
      grid-column: 1 / -1;
      text-align: center;
      padding: 60px 20px;
      background: rgba(15, 22, 41, 0.5);
      border: 1px dashed var(--border-gold);
      border-radius: var(--radius-md);
      display: none;
    }
    .no-results-box i {
      font-size: 40px;
      color: var(--gold-primary);
      margin-bottom: 12px;
    }

    /* ==========================================================================
       ABOUT WEB OPTIMIZER & PROCESS (REAL DATA)
       ========================================================================== */
    .about-grid {
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 48px;
      align-items: center;
    }
    .about-copy h3 {
      font-family: var(--font-display);
      font-size: 30px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 16px;
      line-height: 1.25;
    }
    .about-copy p {
      font-size: 15px;
      color: var(--text-muted);
      margin-bottom: 20px;
      line-height: 1.75;
    }
    .about-pillars {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-top: 28px;
    }
    .about-pillar-box {
      background: rgba(15, 22, 41, 0.6);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-sm);
      padding: 18px;
    }
    .about-pillar-box h5 {
      font-family: var(--font-display);
      font-size: 15px;
      color: var(--gold-light);
      margin-bottom: 6px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .about-pillar-box p {
      font-size: 12.5px;
      color: var(--text-dim);
      margin: 0;
      line-height: 1.5;
    }

    .working-steps {
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    .step-item {
      background: rgba(15, 22, 41, 0.6);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-md);
      padding: 20px 24px;
      display: flex;
      align-items: flex-start;
      gap: 20px;
      transition: var(--transition-luxury);
    }
    .step-item:hover {
      border-color: var(--gold-primary);
      transform: translateX(4px);
    }
    .step-num {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: rgba(212, 175, 55, 0.12);
      border: 1px solid var(--gold-primary);
      color: var(--gold-light);
      font-family: var(--font-display);
      font-size: 18px;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .step-content h4 {
      font-size: 17px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 4px;
    }
    .step-content p {
      font-size: 13.5px;
      color: var(--text-muted);
      margin: 0;
    }

    /* ==========================================================================
       REAL BLOG INSIGHTS (AUTHORED BY HRUSHIKESH ON WEBOPTIMIZER.IN)
       ========================================================================== */
    .insights-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 26px;
    }
    .insight-card {
      background: rgba(15, 22, 41, 0.7);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-md);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: var(--transition-luxury);
    }
    .insight-card:hover {
      transform: translateY(-5px);
      border-color: var(--gold-light);
      box-shadow: 0 16px 36px rgba(0, 0, 0, 0.4);
    }
    .insight-body {
      padding: 26px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    .insight-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
      font-size: 12px;
      color: var(--gold-primary);
      font-family: var(--font-mono);
    }
    .insight-title {
      font-family: var(--font-display);
      font-size: 19px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 12px;
      line-height: 1.35;
    }
    .insight-desc {
      font-size: 13.5px;
      color: var(--text-muted);
      line-height: 1.6;
      margin-bottom: 20px;
      flex: 1;
    }
    .insight-link {
      color: var(--gold-light);
      text-decoration: none;
      font-size: 13px;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: var(--transition-luxury);
    }
    .insight-link:hover {
      color: #fff;
      transform: translateX(4px);
    }

    /* ==========================================================================
       CONTACT & CONSULTATION SECTION
       ========================================================================== */
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1.15fr;
      gap: 40px;
    }
    .contact-info-card {
      background: linear-gradient(145deg, rgba(22, 31, 56, 0.8) 0%, rgba(8, 13, 26, 0.95) 100%);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-lg);
      padding: 36px;
    }
    .contact-info-card h3 {
      font-family: var(--font-display);
      font-size: 26px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 12px;
    }
    .contact-info-card p {
      font-size: 14.5px;
      color: var(--text-muted);
      margin-bottom: 28px;
    }
    .contact-links-list {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }
    .contact-link-row {
      display: flex;
      align-items: center;
      gap: 18px;
      background: rgba(8, 13, 26, 0.7);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-sm);
      padding: 14px 18px;
      text-decoration: none;
      color: #fff;
      transition: var(--transition-luxury);
    }
    .contact-link-row:hover {
      border-color: var(--gold-primary);
      transform: translateX(4px);
      background: rgba(212, 175, 55, 0.08);
    }
    .contact-row-icon {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: rgba(212, 175, 55, 0.15);
      border: 1px solid var(--border-gold);
      color: var(--gold-light);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      flex-shrink: 0;
    }
    .contact-row-text .label {
      font-size: 11px;
      color: var(--gold-primary);
      text-transform: uppercase;
      letter-spacing: 1px;
      font-family: var(--font-mono);
    }
    .contact-row-text .val {
      font-size: 15px;
      font-weight: 600;
      color: #fff;
    }

    /* Form */
    .contact-form-wrap {
      background: rgba(15, 22, 41, 0.7);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-lg);
      padding: 36px;
    }
    .contact-form-wrap h3 {
      font-family: var(--font-display);
      font-size: 24px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 8px;
    }
    .form-field {
      margin-bottom: 18px;
    }
    .form-field label {
      display: block;
      font-size: 13px;
      font-weight: 600;
      color: var(--gold-light);
      margin-bottom: 6px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .form-input {
      width: 100%;
      background: rgba(8, 13, 26, 0.85);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-sm);
      padding: 13px 18px;
      color: #fff;
      font-size: 14px;
      outline: none;
      transition: var(--transition-luxury);
      font-family: inherit;
    }
    .form-input:focus {
      border-color: var(--gold-light);
      box-shadow: 0 0 20px rgba(212, 175, 55, 0.25);
    }
    textarea.form-input {
      min-height: 120px;
      resize: vertical;
    }

    /* ==========================================================================
       LUXURY FOOTER
       ========================================================================== */
    footer {
      border-top: 1px solid var(--border-gold);
      background: #020409;
      padding: 60px 0 35px 0;
      font-size: 13.5px;
      color: var(--text-dim);
    }
    .footer-top {
      display: grid;
      grid-template-columns: 1.4fr 1fr 1fr 1fr;
      gap: 40px;
      margin-bottom: 40px;
    }
    .footer-col h4 {
      font-family: var(--font-display);
      font-size: 16px;
      color: #fff;
      margin-bottom: 18px;
      letter-spacing: 0.5px;
    }
    .footer-links-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .footer-links-list a {
      color: var(--text-muted);
      text-decoration: none;
      transition: var(--transition-luxury);
    }
    .footer-links-list a:hover {
      color: var(--gold-light);
      padding-left: 4px;
    }
    .footer-bottom {
      border-top: 1px solid var(--border-subtle);
      padding-top: 25px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 14px;
      font-size: 12.5px;
    }

    /* ==========================================================================
       LUXURY OFFCANVAS MOBILE DRAWER & MODAL STYLES
       ========================================================================== */
    .luxury-offcanvas {
      background: rgba(8, 13, 26, 0.98) !important;
      backdrop-filter: blur(25px);
      -webkit-backdrop-filter: blur(25px);
      border-left: 1px solid var(--border-gold) !important;
      color: var(--text-cream) !important;
      max-width: 340px;
      z-index: 1055;
    }
    .luxury-offcanvas .offcanvas-header {
      border-bottom: 1px solid var(--border-subtle);
      padding: 22px 24px;
    }
    .luxury-offcanvas .offcanvas-body {
      padding: 24px;
    }
    .offcanvas-nav-link {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 13px 16px;
      border-radius: var(--radius-sm);
      color: var(--text-muted) !important;
      font-weight: 500;
      font-size: 15px;
      transition: var(--transition-luxury);
    }
    .offcanvas-nav-link i {
      color: var(--gold-primary);
      width: 22px;
      text-align: center;
    }
    .offcanvas-nav-link:hover, .offcanvas-nav-link.active {
      background: rgba(212, 175, 55, 0.1);
      color: var(--gold-light) !important;
      transform: translateX(4px);
    }
    .offcanvas-card {
      background: var(--bg-surface);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-md);
    }

    /* Luxury Bootstrap Modal */
    .luxury-modal .modal-content {
      background: rgba(8, 13, 26, 0.98) !important;
      backdrop-filter: blur(25px);
      -webkit-backdrop-filter: blur(25px);
      border: 1px solid var(--border-gold) !important;
      border-radius: var(--radius-lg);
      color: var(--text-cream);
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.85), 0 0 35px rgba(212, 175, 55, 0.2);
    }
    .luxury-modal .modal-header {
      border-bottom: 1px solid var(--border-subtle);
      padding: 24px 28px 18px;
    }
    .luxury-modal .modal-body {
      padding: 24px 28px 28px;
    }
    .luxury-form-input {
      background: var(--bg-surface);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-sm);
      color: var(--text-white);
      padding: 12px 16px;
      font-family: var(--font-sans);
      font-size: 14px;
      outline: none;
      transition: var(--transition-luxury);
      box-sizing: border-box;
    }
    .luxury-form-input:focus {
      border-color: var(--gold-primary);
      box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2);
      background: var(--bg-surface-elevated);
      color: var(--text-white);
    }
    .luxury-form-input option {
      background: var(--bg-midnight);
      color: var(--text-white);
    }

    /* Floating Actions Bar */
    .floating-actions-bar {
      position: fixed;
      bottom: 28px;
      right: 28px;
      display: flex;
      flex-direction: column;
      gap: 12px;
      z-index: 999;
      pointer-events: auto;
    }
    .floating-whatsapp-btn {
      width: 54px;
      height: 54px;
      border-radius: 50%;
      background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
      color: #fff !important;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 26px;
      box-shadow: 0 10px 25px rgba(37, 211, 102, 0.35);
      position: relative;
      transition: var(--transition-luxury);
      text-decoration: none !important;
    }
    .floating-whatsapp-btn:hover {
      transform: translateY(-4px) scale(1.06);
      box-shadow: 0 14px 30px rgba(37, 211, 102, 0.5);
    }
    .floating-tooltip {
      position: absolute;
      right: 68px;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(8, 13, 26, 0.95);
      border: 1px solid var(--border-gold);
      color: var(--text-white);
      padding: 6px 14px;
      border-radius: var(--radius-sm);
      font-size: 12px;
      font-weight: 600;
      white-space: nowrap;
      pointer-events: none;
      opacity: 0;
      transition: var(--transition-luxury);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }
    .floating-whatsapp-btn:hover .floating-tooltip {
      opacity: 1;
      transform: translateY(-50%) translateX(-4px);
    }
    .online-indicator-dot {
      position: absolute;
      top: 2px;
      right: 2px;
      width: 12px;
      height: 12px;
      background: #10b981;
      border: 2px solid var(--bg-black);
      border-radius: 50%;
      animation: pulseGreen 2s infinite;
    }
    @keyframes pulseGreen {
      0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
      70% { box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
      100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
    }
    .back-to-top-btn {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: rgba(15, 22, 41, 0.85);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      border: 1px solid var(--border-gold);
      color: var(--gold-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px);
      transition: var(--transition-luxury);
    }
    .back-to-top-btn.visible {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }
    .back-to-top-btn:hover {
      background: var(--gold-primary);
      color: var(--bg-black);
      transform: translateY(-3px);
    }

    /* ==========================================================================
       RESPONSIVE BREAKPOINTS (DESKTOP, TABLET, MOBILE)
       ========================================================================== */
    @media (max-width: 1100px) {
      .capability-card,     .project-card-thumb {
      width: 100%;
      height: 200px;
      overflow: hidden;
      position: relative;
      background: var(--bg-surface-elevated);
      border-bottom: 1px solid var(--border-gold);
    }
    .project-card-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .project-card:hover .project-card-thumb img {
      transform: scale(1.08);
    }
    .badge-dev {
      background: rgba(56, 189, 248, 0.12);
      color: #38bdf8;
      border: 1px solid rgba(56, 189, 248, 0.25);
    }
    .badge-digital {
      background: rgba(168, 85, 247, 0.12);
      color: #c084fc;
      border: 1px solid rgba(168, 85, 247, 0.25);
    }
    .badge-biz {
      background: rgba(212, 175, 55, 0.15);
      color: var(--gold-light);
      border: 1px solid var(--border-gold);
    }
    .badge-service {
      background: rgba(16, 185, 129, 0.12);
      color: #34d399;
      border: 1px solid rgba(16, 185, 129, 0.25);
    }

    .project-card {
        flex: 0 0 calc((100% - 24px) / 2);
        min-width: 310px;
      }
      .footer-top {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 992px) {
      .hero-grid, .about-grid, .contact-grid {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      .hero-title {
        font-size: 40px;
      }
      .arrow-left { left: -10px; }
      .arrow-right { right: -10px; }
    }

    @media (max-width: 1200px) {
      .btn-proposal-nav {
        padding: 7px 12px;
        font-size: 11.5px;
      }
      .btn-call-nav {
        padding: 7px 12px;
        font-size: 11.5px;
      }
      .btn-call-nav .call-label {
        display: none;
      }
      .nav-menu {
        gap: 14px;
      }
      .nav-menu a {
        font-size: 12px;
        letter-spacing: 0.4px;
      }
    }

    @media (max-width: 991.98px) {
      .top-bar {
        display: none;
      }
      .nav-menu {
        display: none !important;
      }
      .mobile-nav-toggle {
        display: inline-flex !important;
      }
      .btn-proposal-nav {
        display: none !important;
      }
      .btn-call-nav {
        padding: 7px 12px;
        font-size: 12px;
      }
      .nav-menu.active {
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: rgba(8, 13, 26, 0.98);
        padding: 24px;
        border-bottom: 1px solid var(--border-gold);
      }
      .capability-card,     .project-card-thumb {
      width: 100%;
      height: 200px;
      overflow: hidden;
      position: relative;
      background: var(--bg-surface-elevated);
      border-bottom: 1px solid var(--border-gold);
    }
    .project-card-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .project-card:hover .project-card-thumb img {
      transform: scale(1.08);
    }
    .badge-dev {
      background: rgba(56, 189, 248, 0.12);
      color: #38bdf8;
      border: 1px solid rgba(56, 189, 248, 0.25);
    }
    .badge-digital {
      background: rgba(168, 85, 247, 0.12);
      color: #c084fc;
      border: 1px solid rgba(168, 85, 247, 0.25);
    }
    .badge-biz {
      background: rgba(212, 175, 55, 0.15);
      color: var(--gold-light);
      border: 1px solid var(--border-gold);
    }
    .badge-service {
      background: rgba(16, 185, 129, 0.12);
      color: #34d399;
      border: 1px solid rgba(16, 185, 129, 0.25);
    }

    .project-card {
        flex: 0 0 100%;
        min-width: 100%;
      }
      .slider-arrow {
        width: 42px;
        height: 42px;
        font-size: 14px;
      }
      .arrow-left { left: -4px; }
      .arrow-right { right: -4px; }
      .hero-title {
        font-size: 34px;
      }
      .about-pillars {
        grid-template-columns: 1fr;
      }
      .slider-footer-bar {
        flex-direction: column;
        gap: 12px;
        border-radius: var(--radius-md);
      }
      .progress-bar-track {
        width: 100%;
      }
      .footer-top {
        grid-template-columns: 1fr;
      }
      .hero-stats-grid {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 576px) {
      .container {
        padding: 0 18px;
      }
      .hero-title {
        font-size: 28px !important;
        line-height: 1.25;
      }
      .hero-lead {
        font-size: 14px;
      }
      .hero-actions {
        flex-direction: column;
        width: 100%;
      }
      .hero-actions .btn-gold, .hero-actions .btn-luxury-outline {
        width: 100%;
        text-align: center;
        justify-content: center;
      }
      .hero-pills {
        flex-direction: column;
      }
      .hero-pill {
        width: 100%;
        justify-content: center;
      }
      .port-filters {
        overflow-x: auto;
        flex-wrap: nowrap !important;
        padding-bottom: 8px;
        -webkit-overflow-scrolling: touch;
      }
      .port-filter-btn {
        flex-shrink: 0;
        white-space: nowrap;
      }
      .floating-actions-bar {
        bottom: 20px;
        right: 18px;
      }
      .floating-whatsapp-btn {
        width: 48px;
        height: 48px;
        font-size: 22px;
      }
      .hero-stats-grid {
        grid-template-columns: 1fr;
      }
      .btn-proposal-nav {
        display: none !important;
      }
    }
  
    /* Mega Menu Dropdown */
    .nav-dropdown {
      position: relative;
    }
    .nav-dropdown-toggle {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      cursor: pointer;
    }
    .nav-dropdown-menu {
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%) translateY(12px);
      background: rgba(8, 13, 26, 0.98);
      backdrop-filter: blur(25px);
      -webkit-backdrop-filter: blur(25px);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-md);
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.85), 0 0 35px rgba(212, 175, 55, 0.15);
      padding: 24px;
      min-width: 660px;
      display: none;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      z-index: 1050;
    }
    .nav-dropdown:hover .nav-dropdown-menu {
      display: block;
      opacity: 1;
      visibility: visible;
      transform: translateX(-50%) translateY(0);
    }
    .dropdown-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }
    .dropdown-item-link {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 10px 12px;
      border-radius: var(--radius-sm);
      transition: var(--transition-luxury);
      border: 1px solid transparent;
      text-decoration: none !important;
    }
    .dropdown-item-link:hover {
      background: rgba(212, 175, 55, 0.08);
      border-color: rgba(212, 175, 55, 0.25);
      transform: translateX(4px);
    }
    .dropdown-item-icon {
      width: 36px;
      height: 36px;
      border-radius: 8px;
      background: var(--bg-surface);
      border: 1px solid var(--border-gold);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold-primary);
      font-size: 15px;
      flex-shrink: 0;
    }
    .dropdown-item-title {
      font-weight: 600;
      font-size: 13.5px;
      color: #fff;
      line-height: 1.3;
      margin-bottom: 2px;
    }
    .dropdown-item-desc {
      font-size: 11.5px;
      color: var(--text-dim);
      line-height: 1.3;
    }

    /* Service Detail Page Styles */
    .breadcrumb-nav {
      padding: 20px 0;
      font-size: 13px;
      color: var(--text-dim);
    }
    .breadcrumb-nav a {
      color: var(--text-muted);
    }
    .breadcrumb-nav a:hover {
      color: var(--gold-primary);
    }
    .breadcrumb-separator {
      margin: 0 10px;
      color: var(--gold-primary);
    }
    .service-hero-section {
      padding: 60px 0 85px 0;
      position: relative;
      overflow: hidden;
      background: radial-gradient(circle at 50% 10%, rgba(212, 175, 55, 0.08) 0%, rgba(14, 21, 38, 0.6) 55%, rgba(4, 7, 14, 0.98) 100%), linear-gradient(180deg, #070b14 0%, #03060c 100%);
      border-bottom: 1px solid rgba(212, 175, 55, 0.2);
    }
    .service-hero-section::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-image: radial-gradient(rgba(212, 175, 55, 0.12) 1px, transparent 1px);
      background-size: 32px 32px;
      opacity: 0.3;
      pointer-events: none;
    }
    .hero-banner-backdrop {
      position: absolute;
      top: 0; right: 0; bottom: 0; width: 60%;
      background-size: cover;
      background-position: center right;
      opacity: 0.15;
      mix-blend-mode: luminosity;
      mask-image: linear-gradient(to right, transparent 0%, black 75%);
      -webkit-mask-image: linear-gradient(to right, transparent 0%, black 75%);
      pointer-events: none;
    }
    .blog-card-thumb {
      position: relative;
      width: 100%;
      height: 195px;
      border-radius: var(--radius-sm);
      overflow: hidden;
      margin-bottom: 16px;
      border: 1px solid var(--border-gold);
      background: #070b14;
    }
    .blog-card-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
      display: block;
    }
    .blog-card:hover .blog-card-thumb img,
    .deliverable-card:hover .blog-card-thumb img {
      transform: scale(1.06);
    }
    .blog-card-thumb .thumb-badge {
      position: absolute;
      top: 10px;
      left: 10px;
      background: rgba(14, 21, 38, 0.88);
      backdrop-filter: blur(8px);
      border: 1px solid var(--border-gold);
      color: var(--gold-light);
      padding: 4px 10px;
      border-radius: var(--radius-full);
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.5px;
      z-index: 2;
    }
    .service-overview-box {
      background: linear-gradient(180deg, rgba(22, 31, 56, 0.75) 0%, rgba(8, 13, 26, 0.95) 100%);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-lg);
      padding: 40px;
      margin-bottom: 60px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
    }
    .deliverables-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 24px;
      margin-top: 36px;
    }
    .deliverable-card {
      background: var(--bg-surface);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-md);
      padding: 28px;
      transition: var(--transition-luxury);
      position: relative;
    }
    .deliverable-card:hover {
      transform: translateY(-6px);
      border-color: var(--gold-light);
      box-shadow: 0 15px 35px rgba(0,0,0,0.6), 0 0 20px rgba(212,175,55,0.15);
    }
    .deliverable-num {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: rgba(212, 175, 55, 0.15);
      border: 1px solid var(--gold-primary);
      color: var(--gold-light);
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 14px;
      margin-bottom: 16px;
      font-family: var(--font-mono);
    }
    .benefits-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 24px;
      margin: 40px 0;
    }
    .benefit-card {
      background: var(--bg-surface);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-md);
      padding: 26px;
      transition: var(--transition-luxury);
    }
    .benefit-card:hover {
      border-color: var(--gold-primary);
      transform: translateY(-4px);
    }
    .benefit-icon {
      font-size: 26px;
      color: var(--gold-primary);
      margin-bottom: 14px;
    }
    .tech-stack-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 20px;
    }
    .tech-badge-luxury {
      background: rgba(15, 22, 41, 0.85);
      border: 1px solid var(--border-gold);
      padding: 8px 18px;
      border-radius: var(--radius-full);
      font-size: 13px;
      color: var(--text-cream);
      font-family: var(--font-mono);
      font-weight: 500;
    }
    .process-timeline {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin: 40px 0;
    }
    .process-step-card {
      background: var(--bg-surface);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-md);
      padding: 24px 20px;
      position: relative;
    }
    .process-step-num {
      font-size: 32px;
      font-weight: 800;
      color: rgba(212, 175, 55, 0.25);
      font-family: var(--font-display);
      margin-bottom: 8px;
    }
    .accordion-luxury .accordion-item {
      background: var(--bg-surface) !important;
      border: 1px solid var(--border-gold) !important;
      border-radius: var(--radius-md) !important;
      margin-bottom: 14px;
      overflow: hidden;
    }
    .accordion-luxury .accordion-button {
      background: var(--bg-surface) !important;
      color: var(--text-white) !important;
      font-weight: 600;
      font-size: 15px;
      padding: 18px 24px;
      box-shadow: none !important;
    }
    .accordion-luxury .accordion-button:not(.collapsed) {
      color: var(--gold-light) !important;
      border-bottom: 1px solid var(--border-subtle);
    }
    .accordion-luxury .accordion-button::after {
      filter: invert(1);
    }
    .accordion-luxury .accordion-body {
      padding: 20px 24px;
      color: var(--text-muted);
      font-size: 14px;
      line-height: 1.7;
    }
    .service-cta-banner {
      background: linear-gradient(135deg, rgba(212, 175, 55, 0.15) 0%, rgba(8, 13, 26, 0.95) 100%);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-lg);
      padding: 50px 40px;
      text-align: center;
      margin: 60px 0 30px 0;
    }  

    /* Advanced Multi-Level Mega Menu & Dropdowns */
    .nav-mega-item {
      position: static !important;
    }
    .mega-menu-full {
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%) translateY(10px);
      width: min(96vw, 1280px);
      background: rgba(6, 10, 22, 0.98);
      backdrop-filter: blur(28px);
      -webkit-backdrop-filter: blur(28px);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-md);
      box-shadow: 0 30px 80px rgba(0, 0, 0, 0.9), 0 0 40px rgba(212, 175, 55, 0.12);
      padding: 28px 30px;
      display: none;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      z-index: 1100;
    }
    .nav-mega-item:hover .mega-menu-full {
      display: block;
      opacity: 1;
      visibility: visible;
      transform: translateX(-50%) translateY(0);
    }
    .mega-grid-6 {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 22px;
    }
    .mega-col-title {
      font-size: 11.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      color: var(--gold-primary);
      margin-bottom: 12px;
      display: flex;
      align-items: center;
      gap: 6px;
      padding-bottom: 8px;
      border-bottom: 1px solid rgba(212, 175, 55, 0.2);
    }
    .mega-col-title a {
      color: var(--gold-light) !important;
      text-decoration: none !important;
    }
    .mega-col-title a:hover {
      color: #fff !important;
    }
    .mega-sub-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 5px;
    }
    .mega-sub-link {
      color: #cbd5e1;
      font-size: 11.5px;
      line-height: 1.35;
      text-decoration: none !important;
      display: block;
      padding: 4px 6px;
      border-radius: 5px;
      transition: var(--transition-luxury);
    }
    .mega-sub-link:hover {
      color: #fff;
      background: rgba(212, 175, 55, 0.1);
      transform: translateX(3px);
    }

    /* Standard Dropdown */
    .nav-dropdown {
      position: relative;
    }
    .nav-dropdown-menu-standard {
      position: absolute;
      top: 100%;
      left: 0;
      transform: translateY(10px);
      min-width: 290px;
      background: rgba(6, 10, 22, 0.98);
      backdrop-filter: blur(28px);
      -webkit-backdrop-filter: blur(28px);
      border: 1px solid var(--border-gold);
      border-radius: var(--radius-md);
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.85), 0 0 30px rgba(212, 175, 55, 0.12);
      padding: 12px;
      display: none;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      z-index: 1090;
    }
    .nav-dropdown:hover .nav-dropdown-menu-standard {
      display: block;
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }
    .standard-drop-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 7px 9px;
      border-radius: 6px;
      color: #cbd5e1;
      font-size: 12.5px;
      text-decoration: none !important;
      transition: var(--transition-luxury);
    }
    .standard-drop-item:hover {
      color: #fff;
      background: rgba(212, 175, 55, 0.1);
      transform: translateX(4px);
    }
    .standard-drop-item i {
      color: var(--gold-primary);
      width: 16px;
      text-align: center;
      font-size: 12px;
    }

    /* Offcanvas Accordion Styles */
    .offcanvas-accordion .accordion-item {
      background: transparent !important;
      border: none !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
    }
    .offcanvas-accordion .accordion-button {
      background: transparent !important;
      color: #fff !important;
      padding: 12px 0 !important;
      font-size: 14px !important;
      font-weight: 600 !important;
      box-shadow: none !important;
    }
    .offcanvas-accordion .accordion-button:not(.collapsed) {
      color: var(--gold-light) !important;
    }
    .offcanvas-accordion .accordion-body {
      padding: 0 0 14px 14px !important;
    }
    .offcanvas-sub-link {
      display: block;
      padding: 6px 0;
      color: var(--text-dim);
      font-size: 13px;
      text-decoration: none !important;
      transition: var(--transition-luxury);
    }
    .offcanvas-sub-link:hover {
      color: var(--gold-light);
      transform: translateX(4px);
    }

  
    /* ==========================================================================
       MODERN DIGITAL AGENCY VISUAL ENHANCEMENT LAYER (OVERRIDE BOX-BOX DESIGN)
       ========================================================================== */
    /* 1. Distinct Section Atmospheres & Lighting */
    #hero {
      background: radial-gradient(ellipse at 25% 20%, rgba(99, 102, 241, 0.18) 0%, transparent 55%),
                  radial-gradient(ellipse at 80% 60%, rgba(6, 182, 212, 0.12) 0%, transparent 50%),
                  #050813 !important;
    }
    .brands-section {
      background: linear-gradient(180deg, #090e1c 0%, #060913 100%) !important;
      border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
    }
    #specialties {
      background: radial-gradient(ellipse at 50% 50%, rgba(99, 102, 241, 0.08) 0%, transparent 60%),
                  linear-gradient(180deg, #060913 0%, #0d152c 50%, #060913 100%) !important;
    }
    #portfolio {
      background: radial-gradient(ellipse at 50% 0%, rgba(212, 175, 55, 0.09) 0%, transparent 60%),
                  linear-gradient(180deg, #05070e 0%, #090e1e 100%) !important;
    }
    #about {
      background: radial-gradient(ellipse at 20% 50%, rgba(56, 189, 248, 0.08) 0%, transparent 55%),
                  linear-gradient(180deg, #081022 0%, #0f1c3a 50%, #081022 100%) !important;
    }
    #locations-coverage {
      background: radial-gradient(ellipse at 80% 30%, rgba(6, 182, 212, 0.10) 0%, transparent 55%),
                  linear-gradient(180deg, #050e1c 0%, #0a1a30 50%, #050e1c 100%) !important;
    }
    #insights {
      background: radial-gradient(ellipse at 30% 70%, rgba(245, 158, 11, 0.07) 0%, transparent 50%),
                  linear-gradient(180deg, #050811 0%, #090f20 100%) !important;
    }
    #contact {
      background: radial-gradient(circle at 80% 20%, rgba(99, 102, 241, 0.18) 0%, transparent 55%),
                  radial-gradient(circle at 20% 80%, rgba(139, 92, 246, 0.14) 0%, transparent 55%),
                  linear-gradient(135deg, #060914 0%, #131738 50%, #060914 100%) !important;
    }

    /* 2. Fluid Card Redesign (Soft 20px Curvature, Translucent Glass, No Rigid Box Outline) */
    .capability-card,
    .project-card,
    .hero-card,
    .about-pillar-box,
    .step-item,
    .contact-form-card {
      border-radius: 20px !important;
      border: 1px solid rgba(255, 255, 255, 0.08) !important;
      box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.12), 0 20px 40px -15px rgba(0, 0, 0, 0.5) !important;
      backdrop-filter: blur(20px) !important;
      -webkit-backdrop-filter: blur(20px) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }

    .capability-card:hover,
    .hero-card:hover {
      transform: translateY(-8px) !important;
      border-color: rgba(99, 102, 241, 0.35) !important;
      box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.2), 0 30px 60px -15px rgba(99, 102, 241, 0.25) !important;
    }
    .project-card:hover {
      transform: translateY(-8px) !important;
      border-color: rgba(212, 175, 55, 0.4) !important;
      box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.2), 0 30px 60px -15px rgba(212, 175, 55, 0.25) !important;
    }

    /* 3. Squircle Gradient Icon Orbs (Replacing Rigid Square Boxes) */
    .card-icon-box {
      width: 52px !important;
      height: 52px !important;
      border-radius: 16px !important;
      background: linear-gradient(135deg, rgba(99, 102, 241, 0.2) 0%, rgba(139, 92, 246, 0.3) 100%) !important;
      border: 1px solid rgba(99, 102, 241, 0.35) !important;
      color: #a5b4fc !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      font-size: 20px !important;
      box-shadow: 0 8px 18px rgba(99, 102, 241, 0.2) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .capability-card:hover .card-icon-box {
      transform: scale(1.1) rotate(4deg) !important;
      background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%) !important;
      color: #fff !important;
      box-shadow: 0 10px 24px rgba(99, 102, 241, 0.4) !important;
    }

    /* 4. Pills, Chips, & Filter Buttons (Modern Capsule Radii) */
    .section-tag,
    .hero-badge-gold,
    .hero-pill,
    .port-filter-btn,
    .card-badge-pill,
    .sector-badge,
    .top-bar-badge,
    .btn-gold,
    .btn-luxury-outline,
    .btn-call-nav,
    .btn-proposal-nav {
      border-radius: 9999px !important;
    }

    /* 5. Hero Right HUD Card Refinement */
    .hero-card {
      padding: 32px !important;
      background: linear-gradient(145deg, rgba(30, 41, 59, 0.65) 0%, rgba(15, 23, 42, 0.85) 100%) !important;
    }
    .crest-icon {
      border-radius: 16px !important;
      background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%) !important;
      box-shadow: 0 8px 20px rgba(99, 102, 241, 0.35) !important;
    }
    .stat-card {
      border-radius: 16px !important;
      background: rgba(255, 255, 255, 0.03) !important;
      border: 1px solid rgba(255, 255, 255, 0.07) !important;
      padding: 16px !important;
      transition: all 0.3s ease !important;
    }
    .stat-card:hover {
      background: rgba(255, 255, 255, 0.06) !important;
      border-color: rgba(99, 102, 241, 0.3) !important;
      transform: translateY(-3px) !important;
    }
    .stat-num {
      background: linear-gradient(135deg, #fff 0%, #a5b4fc 100%) !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;
    }

    /* 6. About Section Process Flow (Connected Pipeline, No Rigid Square Numbers) */
    .about-pillars {
      gap: 16px !important;
    }
    .about-pillar-box {
      padding: 20px !important;
      background: rgba(15, 23, 42, 0.65) !important;
      border: 1px solid rgba(56, 189, 248, 0.2) !important;
    }
    .about-pillar-box:hover {
      border-color: rgba(56, 189, 248, 0.45) !important;
      transform: translateY(-4px) !important;
    }
    .step-item {
      padding: 18px 22px !important;
      background: rgba(15, 23, 42, 0.65) !important;
      border: 1px solid rgba(255, 255, 255, 0.08) !important;
      margin-bottom: 14px !important;
    }
    .step-item:hover {
      border-color: rgba(99, 102, 241, 0.35) !important;
      transform: translateX(6px) !important;
    }
    .step-num {
      border-radius: 50% !important;
      background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%) !important;
      color: #fff !important;
      border: none !important;
      box-shadow: 0 4px 12px rgba(99, 102, 241, 0.35) !important;
      width: 38px !important;
      height: 38px !important;
      font-weight: 700 !important;
    }

    /* 7. Statewide Locations Hub Elements */
    .city-capsule-card {
      background: linear-gradient(145deg, rgba(255, 255, 255, 0.04) 0%, rgba(15, 23, 42, 0.7) 100%);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 18px;
      padding: 18px 12px;
      text-decoration: none !important;
      display: block;
      height: 100%;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }
    .city-capsule-card:hover {
      transform: translateY(-6px);
      border-color: var(--accent-cyan);
      box-shadow: 0 15px 35px rgba(6, 182, 212, 0.25);
    }
    .city-capsule-name {
      font-family: var(--font-display);
      font-size: 17px;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 4px;
    }
    .city-capsule-tag {
      font-size: 10px;
      color: var(--accent-cyan);
      text-transform: uppercase;
      letter-spacing: 0.8px;
      font-family: var(--font-mono);
      font-weight: 600;
      margin-bottom: 6px;
    }
    .city-live-status {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-size: 9.5px;
      color: var(--accent-emerald);
      background: rgba(16, 185, 129, 0.1);
      padding: 2px 8px;
      border-radius: 9999px;
      font-family: var(--font-mono);
    }
    .statewide-cloud-box {
      background: rgba(255, 255, 255, 0.02);
      border: 1px solid rgba(255, 255, 255, 0.07);
      border-radius: 24px;
      padding: 30px;
      margin-top: 30px;
      text-align: center;
    }
    .location-pill-link {
      display: inline-block;
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.08);
      color: #cbd5e1;
      padding: 6px 14px;
      border-radius: 9999px;
      font-size: 12px;
      text-decoration: none !important;
      margin: 4px;
      transition: all 0.25s ease;
    }
    .location-pill-link:hover {
      background: rgba(6, 182, 212, 0.15);
      border-color: var(--accent-cyan);
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(6, 182, 212, 0.2);
    }
  
    /* ==========================================================================
       DISTINCT SECTION COLOR ATMOSPHERES & MODERN DIGITAL AGENCY STYLING
       ========================================================================== */

    /* Section 1: Hero (Cosmic Indigo & Vibrant Cyan/Indigo Aurora Mesh) */
    #hero {
      background: radial-gradient(ellipse at 25% 25%, rgba(99, 102, 241, 0.22) 0%, transparent 60%),
                  radial-gradient(ellipse at 80% 65%, rgba(6, 182, 212, 0.16) 0%, transparent 55%),
                  radial-gradient(circle at 50% 10%, rgba(212, 175, 55, 0.08) 0%, transparent 45%),
                  #050814 !important;
    }
    .gradient-text-agency {
      background: linear-gradient(135deg, #ffffff 0%, #a5b4fc 45%, #38bdf8 100%) !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;
      display: inline-block;
    }

    /* Section 2: Brands Ribbon */
    .brands-section {
      background: linear-gradient(180deg, #090e1c 0%, #060913 100%) !important;
      border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
    }

    /* Section 3: Capabilities (Deep Cyber Indigo & Purple Hub) */
    #specialties {
      background: radial-gradient(ellipse at 50% 50%, rgba(99, 102, 241, 0.14) 0%, transparent 65%),
                  linear-gradient(180deg, #080c1f 0%, #121838 50%, #080c1f 100%) !important;
    }

    /* Section 4: Signature Portfolio (Obsidian & Champagne Gold Luxury Gallery) */
    #portfolio {
      background: radial-gradient(ellipse at 50% 0%, rgba(245, 158, 11, 0.12) 0%, transparent 60%),
                  linear-gradient(180deg, #04060d 0%, #080c18 100%) !important;
    }

    /* Section 5: THE HIGH-CONTRAST LUMINOUS ICE / PLATINUM SECTION (ABOUT AGENCY) */
    #about.section-about-luminous {
      background: linear-gradient(180deg, #f8fafc 0%, #ffffff 50%, #f1f5f9 100%) !important;
      color: #0f172a !important;
      position: relative !important;
      box-shadow: inset 0 20px 40px -20px rgba(0, 0, 0, 0.08), inset 0 -20px 40px -20px rgba(0, 0, 0, 0.08) !important;
      padding: 100px 0 !important;
    }
    #about.section-about-luminous h2,
    #about.section-about-luminous h3,
    #about.section-about-luminous h4,
    #about.section-about-luminous h5 {
      color: #0f172a !important;
    }
    #about.section-about-luminous p {
      color: #475569 !important;
    }
    .about-luminous-tag {
      font-family: var(--font-mono);
      font-size: 12px;
      font-weight: 700;
      color: #4338ca !important;
      text-transform: uppercase;
      letter-spacing: 1.8px;
      margin-bottom: 14px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(99, 102, 241, 0.1) !important;
      padding: 6px 18px;
      border-radius: 9999px !important;
      border: 1px solid rgba(99, 102, 241, 0.25) !important;
    }
    .about-luminous-title {
      font-family: var(--font-display);
      font-size: 40px !important;
      font-weight: 800 !important;
      color: #0f172a !important;
      line-height: 1.25 !important;
      margin-bottom: 16px !important;
      letter-spacing: -0.5px;
    }
    .about-luminous-desc {
      font-size: 16.5px !important;
      color: #475569 !important;
      line-height: 1.8 !important;
      margin-bottom: 30px !important;
    }
    .about-card-white {
      background: #ffffff !important;
      border: 1px solid rgba(226, 232, 240, 0.9) !important;
      border-radius: 20px !important;
      padding: 24px !important;
      box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.06), 0 4px 12px -2px rgba(15, 23, 42, 0.04) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .about-card-white:hover {
      transform: translateY(-6px) !important;
      box-shadow: 0 20px 40px -8px rgba(15, 23, 42, 0.14) !important;
      border-color: rgba(99, 102, 241, 0.35) !important;
    }
    .about-icon-orb {
      width: 48px;
      height: 48px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      color: #fff !important;
      margin-bottom: 16px;
      box-shadow: 0 8px 18px rgba(0, 0, 0, 0.12);
    }
    .orb-blue { background: linear-gradient(135deg, #2563eb 0%, #38bdf8 100%) !important; }
    .orb-emerald { background: linear-gradient(135deg, #059669 0%, #34d399 100%) !important; }
    .orb-purple { background: linear-gradient(135deg, #7c3aed 0%, #c084fc 100%) !important; }
    .orb-amber { background: linear-gradient(135deg, #d97706 0%, #fcd34d 100%) !important; }

    .about-card-white h4 {
      font-family: var(--font-display);
      font-size: 18px !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      margin-bottom: 8px !important;
    }
    .about-card-white p {
      font-size: 13.5px !important;
      color: #64748b !important;
      line-height: 1.65 !important;
      margin: 0 !important;
    }
    .founder-seal-card {
      background: #ffffff !important;
      border: 1px solid rgba(226, 232, 240, 0.9) !important;
      border-radius: 20px !important;
      padding: 22px !important;
      box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.06) !important;
      display: flex !important;
      align-items: center !important;
      gap: 18px !important;
      margin-top: 24px !important;
    }
    .founder-seal-avatar {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%) !important;
      color: #fff !important;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      flex-shrink: 0;
      box-shadow: 0 6px 18px rgba(99, 102, 241, 0.3);
    }
    .founder-seal-info h5 {
      font-family: var(--font-display);
      font-size: 16px !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      margin: 0 0 4px 0 !important;
    }
    .founder-seal-info p {
      font-size: 12.5px !important;
      color: #64748b !important;
      margin: 0 0 6px 0 !important;
    }
    .badge-google-verified {
      background: #eef2ff !important;
      color: #4338ca !important;
      font-size: 11px !important;
      font-weight: 700 !important;
      padding: 3px 12px !important;
      border-radius: 9999px !important;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    /* Connected 4-Step Engineering Timeline in #about */
    .protocol-steps-container {
      position: relative;
      padding-left: 20px;
    }
    .protocol-steps-container::before {
      content: '';
      position: absolute;
      left: 36px;
      top: 30px;
      bottom: 30px;
      width: 2px;
      background: linear-gradient(180deg, #6366f1 0%, #06b6d4 100%);
      border-radius: 2px;
    }
    .protocol-step-item {
      display: flex;
      align-items: flex-start;
      gap: 20px;
      margin-bottom: 22px;
      position: relative;
    }
    .protocol-step-item:last-child {
      margin-bottom: 0;
    }
    .protocol-step-num {
      width: 36px;
      height: 36px;
      border-radius: 50% !important;
      background: #ffffff !important;
      border: 2px solid #6366f1 !important;
      color: #6366f1 !important;
      font-family: var(--font-mono);
      font-size: 13.5px;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      position: relative;
      z-index: 2;
      box-shadow: 0 4px 10px rgba(99, 102, 241, 0.2);
    }
    .protocol-step-card {
      background: #ffffff !important;
      border: 1px solid rgba(226, 232, 240, 0.9) !important;
      border-radius: 20px !important;
      padding: 20px 24px !important;
      box-shadow: 0 8px 24px -4px rgba(15, 23, 42, 0.05) !important;
      flex: 1;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .protocol-step-card:hover {
      transform: translateX(6px) !important;
      border-color: #6366f1 !important;
      box-shadow: 0 12px 30px -6px rgba(99, 102, 241, 0.18) !important;
    }
    .protocol-step-card h5 {
      font-family: var(--font-display);
      font-size: 16.5px !important;
      font-weight: 700 !important;
      color: #0f172a !important;
      margin-bottom: 6px !important;
    }
    .protocol-step-card p {
      font-size: 13px !important;
      color: #64748b !important;
      margin: 0 !important;
      line-height: 1.6 !important;
    }

    /* Section 6: Statewide Locations (Deep Twilight Cyan & Sapphire Hub) */
    #locations-coverage {
      background: radial-gradient(ellipse at 80% 30%, rgba(6, 182, 212, 0.16) 0%, transparent 60%),
                  linear-gradient(180deg, #071224 0%, #0d2038 50%, #071224 100%) !important;
    }

    /* Section 7: Executive Insights / Blogs (Midnight Obsidian Slate) */
    #insights {
      background: radial-gradient(ellipse at 30% 70%, rgba(245, 158, 11, 0.08) 0%, transparent 55%),
                  linear-gradient(180deg, #050810 0%, #09101c 100%) !important;
    }

    /* Section 8: Project Kickoff / Contact (High-Voltage Electric Indigo Canvas) */
    #contact {
      background: radial-gradient(circle at 80% 20%, rgba(99, 102, 241, 0.22) 0%, transparent 55%),
                  radial-gradient(circle at 20% 80%, rgba(139, 92, 246, 0.18) 0%, transparent 55%),
                  linear-gradient(135deg, #080c1e 0%, #171d42 50%, #080c1e 100%) !important;
    }
  
    /* ==========================================================================
       PAGE BANNER SECTION (UNIFIED LUXURY HERO WITH PROMINENT BANNER IMAGE)
       ========================================================================== */
    .page-banner-section {
      position: relative;
      padding: 95px 0 70px 0;
      background: radial-gradient(ellipse at 75% 25%, rgba(99, 102, 241, 0.16) 0%, transparent 60%),
                  radial-gradient(ellipse at 20% 75%, rgba(6, 182, 212, 0.12) 0%, transparent 55%),
                  #060914;
      overflow: hidden;
      border-bottom: 1px solid rgba(255, 255, 255, 0.07);
    }
    .banner-breadcrumb {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 8px;
      font-size: 12.5px;
      color: var(--text-dim);
      margin-bottom: 18px;
    }
    .banner-breadcrumb a {
      color: var(--text-muted);
      text-decoration: none;
      transition: all 0.25s ease;
    }
    .banner-breadcrumb a:hover {
      color: var(--accent-cyan);
    }
    .banner-breadcrumb .sep {
      color: rgba(255, 255, 255, 0.25);
      font-size: 10px;
    }
    .banner-breadcrumb .current {
      color: var(--gold-light);
      font-weight: 600;
    }
    .banner-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(99, 102, 241, 0.12);
      border: 1px solid rgba(99, 102, 241, 0.3);
      padding: 6px 16px;
      border-radius: 9999px;
      font-size: 11.5px;
      font-family: var(--font-mono);
      font-weight: 700;
      color: #c7d2fe;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    .banner-title {
      font-family: var(--font-display);
      font-size: clamp(2rem, 3.8vw, 3.2rem);
      font-weight: 800;
      color: #ffffff;
      line-height: 1.2;
      margin-bottom: 18px;
      letter-spacing: -0.5px;
    }
    .banner-lead {
      font-size: 16px;
      color: #cbd5e1;
      line-height: 1.75;
      margin-bottom: 28px;
      max-width: 650px;
    }
    .banner-stat-chip {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.08);
      padding: 8px 16px;
      border-radius: 14px;
      font-size: 12.5px;
      color: #e2e8f0;
      font-weight: 600;
      transition: all 0.25s ease;
    }
    .banner-stat-chip:hover {
      background: rgba(255, 255, 255, 0.08);
      border-color: rgba(99, 102, 241, 0.3);
      transform: translateY(-2px);
    }
    .banner-visual-frame {
      position: relative;
      border-radius: 22px;
      overflow: hidden;
      background: linear-gradient(145deg, rgba(30, 41, 59, 0.8) 0%, rgba(15, 23, 42, 0.95) 100%);
      border: 1px solid rgba(255, 255, 255, 0.12);
      box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.7), inset 0 1px 0 rgba(255, 255, 255, 0.18);
      transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .banner-visual-frame:hover {
      transform: translateY(-6px) scale(1.01);
      border-color: rgba(99, 102, 241, 0.4);
      box-shadow: 0 35px 70px -15px rgba(99, 102, 241, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.25);
    }
    .banner-visual-frame img {
      width: 100%;
      height: auto;
      aspect-ratio: 16 / 9;
      object-fit: cover;
      display: block;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .banner-visual-frame:hover img {
      transform: scale(1.04);
    }
    .banner-floating-badge {
      position: absolute;
      bottom: 16px;
      left: 16px;
      background: rgba(6, 9, 19, 0.88);
      backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.15);
      padding: 6px 14px;
      border-radius: 9999px;
      font-size: 11px;
      color: #fff;
      display: flex;
      align-items: center;
      gap: 7px;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.4);
    }

  </style>
</head>
<body>

  <!-- Ambient Luxury Glow -->
  <div class="luxury-ambient">
    <div class="beam-1"></div>
    <div class="beam-2"></div>
    <div class="beam-3"></div>
  </div>

  <!-- Top Contact & Announcement Bar -->
  <aside class="top-bar">
    <div class="container-fluid px-xl-5 px-lg-4 px-3 top-bar-inner">
      <div class="top-bar-left">
        <a href="tel:+917735973818"><i class="fa-solid fa-phone"></i> +91 77359 73818</a>
        <a href="mailto:info@weboptimizer.in"><i class="fa-solid fa-envelope"></i> info@weboptimizer.in</a>
        <span><i class="fa-solid fa-location-dot" style="color:var(--gold-primary);"></i> Bhubaneswar, Odisha, India</span>
      </div>
      <div class="top-bar-right">
        <span class="top-bar-badge"><i class="fa-solid fa-crown"></i> High Performance Web Engineering & Growth</span>
      </div>
    </div>
  </aside>

  <!-- Luxury Navigation Bar with Mega Menu & Multi-Level Dropdowns -->
  <header class="navbar" id="navbar">
    <div class="container-fluid px-xl-5 px-lg-4 px-3 nav-container position-relative">
      <a href="<?php echo $base_path; ?>index.php" class="brand-logo-wrap">
        <img src="<?php echo $base_path; ?>assets/images/weboptimizer-logo.webp" 
             alt="Web Optimizer" 
             class="brand-logo-img"
             onerror="this.style.display='none'; document.getElementById('logoFallback').style.display='block';">
        <div id="logoFallback" class="brand-text" style="display:none;">
          <span class="brand-name">WEB OPTIMIZER</span>
          <span class="brand-tagline">Architects of High Performance</span>
        </div>
      </a>

      <ul class="nav-menu" id="navMenu">
        <li><a href="<?php echo $base_path; ?>index.php" class="<?php echo ($active_nav === 'home') ? 'active' : ''; ?>">Home</a></li>
        
        <!-- 1. DIGITAL MARKETING MEGA MENU (Modeled After dcstudio.in) -->
        <li class="nav-mega-item">
          <a href="<?php echo $base_path; ?>digital-marketing.php" class="<?php echo ($active_nav === 'services') ? 'active' : ''; ?>">
            Digital Marketing <i class="fa-solid fa-chevron-down" style="font-size:10px; margin-left:3px;"></i>
          </a>
          <div class="mega-menu-full">
            <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom border-secondary border-opacity-25">
              <div class="d-flex align-items-center gap-2">
                <i class="fa-solid fa-crown text-gold" style="color:var(--gold-primary);"></i>
                <span style="font-size:12px; text-transform:uppercase; letter-spacing:1px; color:var(--gold-primary); font-weight:700;">Full-Service Agency Capabilities</span>
              </div>
              <a href="<?php echo $base_path; ?>services.php" style="font-size:12.5px; color:var(--gold-light); font-weight:600; text-decoration:none;">
                View All Services <i class="fa-solid fa-arrow-right" style="margin-left:4px;"></i></a>
              <a href="<?php echo $base_path; ?>locations.php" style="font-size:12.5px; color:var(--gold-primary); font-weight:600; text-decoration:none; margin-left:14px;"><i class="fa-solid fa-map-location-dot" style="margin-right:4px;"></i> Odisha (50 Locations) <i class="fa-solid fa-arrow-right" style="margin-left:4px;"></i>
              </a>
            </div>

            <div class="mega-grid-6">
              <!-- Col 1: Social Media Marketing -->
              <div>
                <div class="mega-col-title">
                  <i class="fa-solid fa-share-nodes"></i>
                  <a href="<?php echo $base_path; ?>social-media-marketing.php">Social Media (SMM)</a>
                </div>
                <ul class="mega-sub-list">
                  <li><a href="<?php echo $base_path; ?>facebook-marketing.php" class="mega-sub-link">Facebook Marketing & Ads</a></li>
                  <li><a href="<?php echo $base_path; ?>instagram-marketing.php" class="mega-sub-link">Instagram Marketing & Reels</a></li>
                  <li><a href="<?php echo $base_path; ?>linkedin-marketing.php" class="mega-sub-link">LinkedIn B2B Marketing</a></li>
                  <li><a href="<?php echo $base_path; ?>youtube-marketing.php" class="mega-sub-link">YouTube Video Marketing</a></li>
                  <li><a href="<?php echo $base_path; ?>influencer-marketing.php" class="mega-sub-link">Influencer Marketing & UGC</a></li>
                </ul>
              </div>

              <!-- Col 2: AI SEO -->
              <div>
                <div class="mega-col-title">
                  <i class="fa-solid fa-chart-line"></i>
                  <a href="<?php echo $base_path; ?>ai-seo.php">AI SEO & Growth</a>
                </div>
                <ul class="mega-sub-list">
                  <li><a href="<?php echo $base_path; ?>seo-audit.php" class="mega-sub-link">SEO Audit Services</a></li>
                  <li><a href="<?php echo $base_path; ?>local-seo.php" class="mega-sub-link">Local SEO & Google Maps</a></li>
                  <li><a href="<?php echo $base_path; ?>link-building.php" class="mega-sub-link">Link Building Services</a></li>
                  <li><a href="<?php echo $base_path; ?>on-page-seo.php" class="mega-sub-link">On-Page SEO Optimization</a></li>
                  <li><a href="<?php echo $base_path; ?>off-page-seo.php" class="mega-sub-link">Off-Page SEO Outreach</a></li>
                  <li><a href="<?php echo $base_path; ?>technical-seo.php" class="mega-sub-link">Key Technical SEO</a></li>
                  <li><a href="<?php echo $base_path; ?>content-writing.php" class="mega-sub-link">Content Writing Agency</a></li>
                </ul>
              </div>

              <!-- Col 3: Performance Marketing -->
              <div>
                <div class="mega-col-title">
                  <i class="fa-solid fa-bullseye"></i>
                  <a href="<?php echo $base_path; ?>performance-marketing.php">Performance Marketing</a>
                </div>
                <ul class="mega-sub-list">
                  <li><a href="<?php echo $base_path; ?>paid-social-media.php" class="mega-sub-link">Paid Social Media Ads</a></li>
                  <li><a href="<?php echo $base_path; ?>google-ads.php" class="mega-sub-link">Google Ads ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Å“ PPC & PMax</a></li>
                  <li><a href="<?php echo $base_path; ?>lead-generation.php" class="mega-sub-link">High-Intent Lead Gen</a></li>
                  <li><a href="<?php echo $base_path; ?>search-engine-marketing.php" class="mega-sub-link">Search Engine Marketing</a></li>
                  <li><a href="<?php echo $base_path; ?>content-marketing.php" class="mega-sub-link">Content Marketing</a></li>
                  <li><a href="<?php echo $base_path; ?>affiliate-marketing.php" class="mega-sub-link">Affiliate Marketing</a></li>
                  <li><a href="<?php echo $base_path; ?>email-marketing.php" class="mega-sub-link">Lifecycle Email Marketing</a></li>
                </ul>
              </div>

              <!-- Col 4: Website - UI/UX -->
              <div>
                <div class="mega-col-title">
                  <i class="fa-solid fa-laptop-code"></i>
                  <a href="<?php echo $base_path; ?>web-development.php">Website & UI/UX</a>
                </div>
                <ul class="mega-sub-list">
                  <li><a href="<?php echo $base_path; ?>website-development.php" class="mega-sub-link">UI-UX Website Design</a></li>
                  <li><a href="<?php echo $base_path; ?>wordpress-development.php" class="mega-sub-link">WordPress Development</a></li>
                  <li><a href="<?php echo $base_path; ?>ecommerce-development.php" class="mega-sub-link">E-Commerce & WooCommerce</a></li>
                  <li><a href="<?php echo $base_path; ?>shopify-development.php" class="mega-sub-link">Shopify Development</a></li>
                  <li><a href="<?php echo $base_path; ?>api-integrations.php" class="mega-sub-link">API & Webhook Integrations</a></li>
                  <li><a href="<?php echo $base_path; ?>website-maintenance.php" class="mega-sub-link">Website Maintenance AMC</a></li>
                  <li><a href="<?php echo $base_path; ?>custom-web-application.php" class="mega-sub-link">Custom Web Applications</a></li>
                </ul>
              </div>



              <!-- Col 5: Allied Services -->
              <div>
                <div class="mega-col-title">
                  <i class="fa-solid fa-gears"></i>
                  <a href="<?php echo $base_path; ?>allied-services.php">Allied Services</a>
                </div>
                <ul class="mega-sub-list">
                  <li><a href="<?php echo $base_path; ?>google-my-business.php" class="mega-sub-link">Google My Business (GMB)</a></li>
                  <li><a href="<?php echo $base_path; ?>whatsapp-automation.php" class="mega-sub-link">WhatsApp Automation</a></li>
                  <li><a href="<?php echo $base_path; ?>analytics-reporting.php" class="mega-sub-link">Analytics & Reporting</a></li>
                  <li><a href="<?php echo $base_path; ?>online-reputation.php" class="mega-sub-link">Reputation Management</a></li>
                  <li><a href="<?php echo $base_path; ?>strategy-consulting.php" class="mega-sub-link">Strategy & Consulting</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>

        <!-- 2. WEBSITE & UI/UX DROPDOWN -->
        <li class="nav-dropdown">
          <a href="<?php echo $base_path; ?>web-development.php">
            Web & UI/UX <i class="fa-solid fa-chevron-down" style="font-size:9px; margin-left:2px;"></i>
          </a>
          <div class="nav-dropdown-menu-standard">
            <a href="<?php echo $base_path; ?>website-development.php" class="standard-drop-item"><i class="fa-solid fa-laptop-code"></i> UI-UX Website Design</a>
            <a href="<?php echo $base_path; ?>wordpress-development.php" class="standard-drop-item"><i class="fa-brands fa-wordpress"></i> WordPress Development</a>
            <a href="<?php echo $base_path; ?>ecommerce-development.php" class="standard-drop-item"><i class="fa-solid fa-bag-shopping"></i> WooCommerce E-Commerce</a>
            <a href="<?php echo $base_path; ?>shopify-development.php" class="standard-drop-item"><i class="fa-brands fa-shopify"></i> Shopify Development</a>
            <a href="<?php echo $base_path; ?>custom-web-application.php" class="standard-drop-item"><i class="fa-solid fa-server"></i> Custom Web Applications</a>
            <a href="<?php echo $base_path; ?>api-integrations.php" class="standard-drop-item"><i class="fa-solid fa-network-wired"></i> API Integrations</a>
            <a href="<?php echo $base_path; ?>website-maintenance.php" class="standard-drop-item"><i class="fa-solid fa-screwdriver-wrench"></i> Website Maintenance AMC</a>
            <a href="<?php echo $base_path; ?>plugin-development.php" class="standard-drop-item"><i class="fa-solid fa-puzzle-piece"></i> Plugin Development</a>
            <a href="<?php echo $base_path; ?>theme-development.php" class="standard-drop-item"><i class="fa-solid fa-palette"></i> Theme Development</a>
          </div>
        </li>

        <!-- 3. BRANDING & DESIGN DROPDOWN -->
        <li class="nav-dropdown">
          <a href="<?php echo $base_path; ?>branding-design.php">
            Branding <i class="fa-solid fa-chevron-down" style="font-size:9px; margin-left:2px;"></i>
          </a>
          <div class="nav-dropdown-menu-standard">
            <a href="<?php echo $base_path; ?>brand-identity-logo.php" class="standard-drop-item"><i class="fa-solid fa-shield-halved"></i> Brand Identity & Logo Design</a>
            <a href="<?php echo $base_path; ?>brand-strategy.php" class="standard-drop-item"><i class="fa-solid fa-chess"></i> Brand Strategy & Positioning</a>
            <a href="<?php echo $base_path; ?>corporate-branding.php" class="standard-drop-item"><i class="fa-solid fa-building"></i> Corporate Branding Systems</a>
            <a href="<?php echo $base_path; ?>marketing-collaterals.php" class="standard-drop-item"><i class="fa-solid fa-folder-open"></i> Marketing Collaterals Design</a>
            <a href="<?php echo $base_path; ?>creative-advertising.php" class="standard-drop-item"><i class="fa-solid fa-lightbulb"></i> Creative Advertising</a>
            <a href="<?php echo $base_path; ?>brand-consulting.php" class="standard-drop-item"><i class="fa-solid fa-comments"></i> Brand Consulting</a>
          </div>
        </li>

        <li><a href="<?php echo $base_path; ?>locations" class="<?php echo ($active_nav === 'locations') ? 'active' : ''; ?>">Locations</a></li>
        <li><a href="<?php echo $base_path; ?>blog" class="<?php echo ($active_nav === 'blog') ? 'active' : ''; ?>">Guides</a></li>
        <li><a href="<?php echo $base_path; ?>index.php#contact">Contact</a></li>
      </ul>

      <div class="nav-actions">
        <button type="button" class="btn-proposal-nav" data-bs-toggle="modal" data-bs-target="#inquiryModal">
          <i class="fa-solid fa-file-signature text-gold"></i> Request Proposal
        </button>
        <a href="tel:+917735973818" class="btn-call-nav">
          <i class="fa-solid fa-phone"></i> <span class="call-label">Call </span>7735973818
        </a>
        <button class="mobile-nav-toggle" id="mobileNavToggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#luxuryMobileNav" aria-controls="luxuryMobileNav" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
    </div>
  </header>
