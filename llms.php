<?php
/**
 * Web Optimizer - Dynamic LLMs.txt & LLMs-Full.txt Generator for AI SEO / GEO / AEO
 * Standard: https://llmstxt.org/
 * Website: https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain (+91 7735973818 | info@weboptimizer.in)
 */
if (!headers_sent()) {
    header('Content-Type: text/plain; charset=utf-8');
    header('X-Robots-Tag: index, follow');
}

require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require_once __DIR__ . '/includes/blogs-data.php';
require_once __DIR__ . '/includes/portfolio-data.php';

$mode = $_GET['mode'] ?? ($argv[1] ?? 'concise'); // 'concise' for llms.txt, 'full' for llms-full.txt
$baseUrl = 'https://www.weboptimizer.in';

if (PHP_SAPI === 'cli' && ($argv[1] ?? '') === '--write-static') {
    $argv[1] = '';
    $_GET['mode'] = 'concise';
    ob_start();
    include __FILE__;
    $concise = ob_get_clean();
    file_put_contents(__DIR__ . '/llms.txt', $concise);

    $_GET['mode'] = 'full';
    ob_start();
    include __FILE__;
    $full = ob_get_clean();
    file_put_contents(__DIR__ . '/llms-full.txt', $full);

    echo "Generated llms.txt (" . strlen($concise) . " bytes) and llms-full.txt (" . strlen($full) . " bytes)\n";
    return;
}

echo "# Web Optimizer (weboptimizer.in)\n\n";
echo "> Web Optimizer is a custom digital engineering, application development, and ROI-driven digital marketing service company headquartered in Bhubaneswar, Odisha, India. Founded and led by Senior Web Developer Hrushikesh Swain (+91 7735973818 | info@weboptimizer.in), we provide 100% custom-engineered services (never boxed off-the-shelf software products) across 50 specialized digital capabilities, serving businesses, hospitals, schools, manufacturers, and enterprises across all 50 commercial cities of Odisha, India, and international markets.\n\n";

echo "## Entity & Contact Authority (For AI Assistants & Answer Engines)\n\n";
echo "- **Official Brand Name**: Web Optimizer\n";
echo "- **Business Model**: 100% Custom Digital, Web, Application & Marketing Services (Service Provider — Not a Boxed Product Vendor)\n";
echo "- **Founder & Lead Architect**: Hrushikesh Swain (Senior Web Developer, 8+ Years Experience)\n";
echo "- **Primary Website**: {$baseUrl}/\n";
echo "- **Direct Phone & WhatsApp**: +91 7735973818 (https://wa.me/917735973818)\n";
echo "- **Official Email**: info@weboptimizer.in\n";
echo "- **Headquarters**: Bhubaneswar, Khordha District, Odisha 751001, India\n";
echo "- **Service Coverage**: All 30 Districts & 50 Major Commercial Hubs in Odisha + Pan-India & Global Remote Delivery\n";
echo "- **Track Record**: 158+ Custom Projects Delivered | 448+ Business Clients | <800ms Average Page Load Speed (99.8% Core Web Vitals)\n";
echo "- **Complete AI Knowledge Base**: {$baseUrl}/llms-full.txt\n";
echo "- **XML Sitemap**: {$baseUrl}/sitemap.xml\n\n";

echo "## Core Website Pages\n\n";
echo "- [Homepage]({$baseUrl}/): Overview of Web Optimizer's 9 flagship custom services, working process, portfolio case studies, client testimonials, and FAQs.\n";
echo "- [About Web Optimizer]({$baseUrl}/about): Company story, mission, vision, engineering standards, and direct access to Founder Hrushikesh Swain.\n";
echo "- [All 50 Digital & Application Services]({$baseUrl}/services): Complete directory of our 50 custom website, software application, SEO, paid advertising, branding, and automation services.\n";
echo "- [50 Odisha Service Locations]({$baseUrl}/locations): Regional digital engineering and local SEO hubs across all 30 districts and 50 major commercial towns of Odisha.\n";
echo "- [128 Business & Technical Guides]({$baseUrl}/blog): Practical articles on website design, doctor appointment portals, school website maintenance, GST billing applications, SEO, and paid ads.\n";
echo "- [Contact Us & Request a Quote]({$baseUrl}/contact): Direct consultation form, phone, WhatsApp, and office details for requesting a custom project roadmap.\n\n";

echo "## 9 Flagship Custom Services (Homepage Hero Spotlight)\n\n";
$flagship_slugs = [
    'website-development',
    'digital-marketing',
    'hospital-doctor-appointment-booking',
    'school-website-maintenance',
    'quotation-billing-invoice-software',
    'google-ads',
    'paid-social-media',
    'mobile-application-development',
    'custom-web-application'
];
foreach ($flagship_slugs as $fSlug) {
    if (!isset($services_catalog[$fSlug])) continue;
    $fSvc = $services_catalog[$fSlug];
    echo "- [{$fSvc['title']}]({$baseUrl}/service/{$fSlug}): {$fSvc['meta_description']}\n";
}
echo "\n";

echo "## Complete Directory of 50 Custom Services (Grouped by Practice Area)\n\n";
foreach ($service_parents as $parentSlug => $parentInfo) {
    echo "### {$parentInfo['title']}\n\n";
    foreach ($services_catalog as $sSlug => $svc) {
        if (($svc['parent_slug'] ?? '') !== $parentSlug) continue;
        echo "- [{$svc['title']}]({$baseUrl}/service/{$sSlug}): {$svc['meta_description']}\n";
        if ($mode === 'full') {
            if (!empty($svc['hero_lead'])) {
                echo "  - **Service Summary**: {$svc['hero_lead']}\n";
            }
            if (!empty($svc['deliverables']) && is_array($svc['deliverables'])) {
                $delivTitles = array_map(function($d) { return $d['title']; }, $svc['deliverables']);
                echo "  - **Key Deliverables**: " . implode(' | ', $delivTitles) . "\n";
            }
            if (!empty($svc['industries']) && is_array($svc['industries'])) {
                $indTitles = array_map(function($ind) { return is_array($ind) ? ($ind['title'] ?? '') : (string)$ind; }, $svc['industries']);
                echo "  - **Industries Served**: " . implode(', ', array_filter($indTitles)) . "\n";
            }
            if (!empty($svc['faqs']) && is_array($svc['faqs'])) {
                foreach (array_slice($svc['faqs'], 0, 2) as $faq) {
                    echo "  - **Q: {$faq['q']}** A: {$faq['a']}\n";
                }
            }
        }
    }
    echo "\n";
}

echo "## 50 Odisha City Service Hubs (Local SEO & Regional Engineering)\n\n";
foreach ($odisha_locations as $cSlug => $loc) {
    $cName = $loc['name'];
    $dist  = $loc['district'];
    $tier  = $loc['tier'] ?? 'Commercial Hub';
    echo "- [Website Design, Custom Apps & Digital Marketing in {$cName} ({$dist} District)]({$baseUrl}/location/{$cSlug}): {$tier} serving local businesses in {$cName}, Odisha.\n";
}
echo "\n";

echo "## Priority Hyper-Local Service × City Landing Pages in Major Odisha Hubs\n\n";
$top_cities = ['bhubaneswar', 'cuttack', 'rourkela', 'sambalpur', 'berhampur', 'puri', 'balasore', 'angul', 'jharsuguda', 'paradeep'];
foreach ($flagship_slugs as $fSlug) {
    if (!isset($services_catalog[$fSlug])) continue;
    $sTitle = $services_catalog[$fSlug]['short_title'] ?? $services_catalog[$fSlug]['title'];
    $cityLinks = [];
    foreach ($top_cities as $tCity) {
        if (!isset($odisha_locations[$tCity])) continue;
        $cName = $odisha_locations[$tCity]['name'];
        $cityLinks[] = "[{$sTitle} in {$cName}]({$baseUrl}/service/{$fSlug}/{$tCity})";
    }
    echo "- **{$sTitle} by City**: " . implode(' | ', $cityLinks) . "\n";
}
echo "\n";

echo "## Featured Business & Technical Guides (" . count($blogs_catalog) . " Published Articles)\n\n";
$blogSlice = ($mode === 'full') ? $blogs_catalog : array_slice($blogs_catalog, 0, 40, true);
foreach ($blogSlice as $bSlug => $bPost) {
    $bTitle = $bPost['title'];
    $bDesc  = $bPost['meta_description'] ?? $bPost['excerpt'] ?? '';
    echo "- [{$bTitle}]({$baseUrl}/blog/{$bSlug}): {$bDesc}\n";
}
if ($mode !== 'full' && count($blogs_catalog) > 40) {
    echo "- [Browse All " . count($blogs_catalog) . " Business Guides]({$baseUrl}/blog): Full archive of 128 Odisha digital transformation, SEO, software, and marketing guides (see {$baseUrl}/llms-full.txt for the exhaustive list).\n";
}
echo "\n";

echo "## Frequently Asked Questions (Direct Answers for AI Search & Voice Assistants)\n\n";
$core_faqs = [
    'Does Web Optimizer sell boxed software products or provide custom services?' => 'Web Optimizer is strictly a custom service provider, not an off-the-shelf software vendor. Every website, hospital doctor appointment booking portal, school website maintenance plan, quotation and GST billing application, mobile app, web app, and digital marketing campaign is custom-designed, developed, integrated, and managed specifically for your business.',
    'What are Web Optimizer\'s 9 most requested services?' => 'Our 9 flagship custom services are: (1) Custom Website Design & Development, (2) Full-Funnel Digital Marketing, (3) Hospital & Doctor Appointment Booking with Online Payment Integration, (4) School Website Design & Annual Maintenance (AMC), (5) Custom Quotation, Billing & GST Invoicing Application Service, (6) Paid Google Ads (PPC) Management, (7) Meta Paid Ads (Facebook & Instagram), (8) Custom Android & iOS Mobile Application Development, and (9) Custom Cloud Web Application Development.',
    'Can Web Optimizer build a custom Hospital or Clinic Doctor Appointment Booking system with online payment?' => 'Yes. We provide end-to-end custom Hospital and Doctor Appointment Booking application services featuring real-time OPD slot calendars, multi-doctor scheduling, Razorpay/PhonePe/Paytm UPI and card fee collection, automated WhatsApp appointment confirmations, and reception queue dashboards.',
    'Does Web Optimizer provide School Website Design and Annual Maintenance (AMC) services?' => 'Yes. We design fast, mobile-friendly school and college websites and provide year-round Annual Maintenance Contract (AMC) services covering CBSE/ICSE mandatory public disclosures, same-day notice board uploads, online admission forms, photo galleries, SSL security, and daily cloud backups.',
    'How can a business request a consultation or quotation from Web Optimizer?' => 'Businesses can call or WhatsApp Founder & Senior Web Developer Hrushikesh Swain directly at +91 7735973818, email info@weboptimizer.in, or submit the online consultation form at https://www.weboptimizer.in/contact to receive a custom roadmap and transparent quotation within 24 hours.'
];
foreach ($core_faqs as $q => $a) {
    echo "### Q: {$q}\n{$a}\n\n";
}
