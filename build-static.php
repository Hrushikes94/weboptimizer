<?php
/**
 * Web Optimizer - Static Site Builder for GitHub Pages Deployment
 * Compiles all dynamic PHP pages into clean static HTML directories (_site/)
 */

$basePath = getenv('BASE_PATH') ?: '/';
if (substr($basePath, -1) !== '/') {
    $basePath .= '/';
}

$outDir = __DIR__ . '/_site';
if (!is_dir($outDir)) {
    mkdir($outDir, 0777, true);
}

require_once __DIR__ . '/includes/services-data.php';
require_once __DIR__ . '/includes/locations-data.php';
require_once __DIR__ . '/includes/blogs-data.php';
require_once __DIR__ . '/includes/portfolio-data.php';
require_once __DIR__ . '/includes/security-and-seo.php';

function renderPhpPage(string $scriptFile, array $getParams = [], string $basePath = '/'): string {
    global $services_catalog, $service_parents, $odisha_locations, $blogs_catalog, $portfolio_categories, $portfolio_cases;

    $_SERVER['REQUEST_METHOD'] = 'GET';
    $_SERVER['SCRIPT_NAME'] = $basePath . 'index.php';
    $_SERVER['REQUEST_URI'] = $basePath;
    $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
    $_GET = $getParams;
    $base_path = $basePath;
    $service_slug = $getParams['slug'] ?? $getParams['service'] ?? null;

    ob_start();
    include __DIR__ . '/' . $scriptFile;
    $html = ob_get_clean();

    // Rewrite internal .php links to clean static URLs for GitHub Pages
    $html = preg_replace('/href="([^"]*?)index\.php#contact"/i', 'href="$1contact"', $html);
    $html = preg_replace('/href="([^"]*?)index\.php(#[^"]*)?"/i', 'href="$1$2"', $html);
    $html = preg_replace('/href="([^"]*?)(services|locations|blog|contact)\.php(#[^"]*)?"/i', 'href="$1$2$3"', $html);
    $html = preg_replace('/href="([^"]*?)([a-z0-9\-]+)\.php(#[^"]*)?"/i', 'href="$1service/$2$3"', $html);

    if (function_exists('weboptimizer_enforce_img_attributes') && $scriptFile !== 'sitemap.php') {
        $html = weboptimizer_enforce_img_attributes($html);
    }

    return $html;
}

function writeStaticFile(string $relPath, string $content): void {
    global $outDir;
    $fullPath = $outDir . '/' . ltrim($relPath, '/');
    $dir = dirname($fullPath);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    file_put_contents($fullPath, $content);
}

echo "Building core pages (base_path: {$basePath})...\n";
writeStaticFile('index.html', renderPhpPage('index.php', [], $basePath));
writeStaticFile('404.html', renderPhpPage('index.php', [], $basePath));
writeStaticFile('services/index.html', renderPhpPage('services.php', [], $basePath));
writeStaticFile('locations/index.html', renderPhpPage('locations.php', [], $basePath));
writeStaticFile('blog/index.html', renderPhpPage('blog.php', [], $basePath));
writeStaticFile('contact/index.html', renderPhpPage('contact.php', [], $basePath));
writeStaticFile('contact-us/index.html', renderPhpPage('contact.php', [], $basePath));
writeStaticFile('resume/index.html', renderPhpPage('resume.php', [], $basePath));
writeStaticFile('resume.html', renderPhpPage('resume.php', [], $basePath));
writeStaticFile('sitemap.xml', renderPhpPage('sitemap.php', [], $basePath));
writeStaticFile('.nojekyll', '');

echo "Building " . count($services_catalog) . " service pages...\n";
foreach ($services_catalog as $slug => $svc) {
    $html = renderPhpPage('service-detail.php', ['slug' => $slug], $basePath);
    writeStaticFile("service/{$slug}/index.html", $html);
    writeStaticFile("{$slug}/index.html", $html);
}

echo "Building " . count($odisha_locations) . " location hub pages...\n";
foreach ($odisha_locations as $citySlug => $loc) {
    $html = renderPhpPage('location.php', ['city' => $citySlug], $basePath);
    writeStaticFile("location/{$citySlug}/index.html", $html);
}

echo "Building " . count($blogs_catalog) . " blog article pages...\n";
foreach ($blogs_catalog as $blogSlug => $post) {
    $html = renderPhpPage('blog-post.php', ['slug' => $blogSlug], $basePath);
    writeStaticFile("blog/{$blogSlug}/index.html", $html);
}

$priorityServices = [
    'website-development', 'quotation-billing-invoice-software', 'technical-seo', 'performance-marketing',
    'social-media-marketing', 'ecommerce-development', 'shopify-development',
    'seo-audit', 'local-seo', 'google-ads', 'whatsapp-automation'
];
echo "Building priority service + location landing pages...\n";
foreach ($priorityServices as $pSlug) {
    if (isset($services_catalog[$pSlug])) {
        foreach ($odisha_locations as $cSlug => $locItem) {
            $html = renderPhpPage('service-location.php', ['service' => $pSlug, 'city' => $cSlug], $basePath);
            writeStaticFile("service/{$pSlug}/{$cSlug}/index.html", $html);
        }
    }
}

echo "Build complete!\n";
