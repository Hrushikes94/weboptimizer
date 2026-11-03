<?php
/**
 * Web Optimizer - Dynamic Service Router
 * https://www.weboptimizer.in
 */
$slug = $_GET['slug'] ?? 'website-development';
$service_slug = preg_replace('/[^a-z0-9\-]/i', '', $slug);
require_once __DIR__ . '/service-detail.php';