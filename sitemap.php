<?php
/**
 * Web Optimizer - Dynamic Clean XML Sitemap Engine
 * Generates valid XML for 2,500+ Programmatic Clean SEO / AEO / GEO URLs
 * https://www.weboptimizer.in
 * Founder & Senior Web Developer: Hrushikesh Swain (+91 7735973818)
 */
if (!headers_sent()) {
    header('Content-Type: application/xml; charset=utf-8');
}

require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require_once __DIR__ . '/includes/blogs-data.php';

$baseUrl = 'https://www.weboptimizer.in';

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <!-- Core Main Pages -->
  <url>
    <loc><?php echo $baseUrl; ?>/</loc>
    <priority>1.0</priority>
    <changefreq>weekly</changefreq>
  </url>
  <url>
    <loc><?php echo $baseUrl; ?>/about</loc>
    <priority>0.9</priority>
    <changefreq>monthly</changefreq>
  </url>
  <url>
    <loc><?php echo $baseUrl; ?>/services</loc>
    <priority>0.9</priority>
    <changefreq>weekly</changefreq>
  </url>
  <url>
    <loc><?php echo $baseUrl; ?>/locations</loc>
    <priority>0.9</priority>
    <changefreq>weekly</changefreq>
  </url>
  <url>
    <loc><?php echo $baseUrl; ?>/blog</loc>
    <priority>0.9</priority>
    <changefreq>weekly</changefreq>
  </url>
  <url>
    <loc><?php echo $baseUrl; ?>/contact</loc>
    <priority>0.9</priority>
    <changefreq>monthly</changefreq>
  </url>

  <!-- All Services & Practice Area Clean URLs -->
  <?php foreach ($services_catalog as $s): ?>
    <url>
      <loc><?php echo $baseUrl . '/service/' . $s['slug']; ?></loc>
      <priority>0.85</priority>
      <changefreq>monthly</changefreq>
    </url>
  <?php endforeach; ?>

  <!-- All 50 City Hubs in Odisha (Clean SEO URLs) -->
  <?php foreach ($odisha_locations as $loc): ?>
    <url>
      <loc><?php echo $baseUrl . '/location/' . $loc['slug']; ?></loc>
      <priority>0.85</priority>
      <changefreq>monthly</changefreq>
    </url>
  <?php endforeach; ?>

  <!-- Top Hyper-Local Service + Location Clean Programmatic Landing Pages -->
  <?php 
  $priority_services = [
    'website-development', 'digital-marketing', 'hospital-doctor-appointment-booking',
    'school-website-maintenance', 'quotation-billing-invoice-software', 'google-ads',
    'paid-social-media', 'mobile-application-development', 'custom-web-application',
    'technical-seo', 'performance-marketing', 'social-media-marketing',
    'ecommerce-development', 'shopify-development', 'seo-audit', 'local-seo', 'whatsapp-automation'
  ];
  foreach ($priority_services as $pSlug):
    if (isset($services_catalog[$pSlug])):
      foreach ($odisha_locations as $lSlug => $lItem):
  ?>
    <url>
      <loc><?php echo $baseUrl . '/service/' . $pSlug . '/' . $lSlug; ?></loc>
      <priority>0.75</priority>
      <changefreq>monthly</changefreq>
    </url>
  <?php 
      endforeach;
    endif;
  endforeach; 
  ?>

  <!-- All 25 Practical Client Guides for Odisha Businesses -->
  <?php foreach ($blogs_catalog as $bSlug => $bPost): ?>
    <url>
      <loc><?php echo $baseUrl . '/blog/' . $bSlug; ?></loc>
      <priority>0.8</priority>
      <changefreq>monthly</changefreq>
    </url>
  <?php endforeach; ?>
</urlset>
