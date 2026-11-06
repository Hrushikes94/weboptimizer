<?php
/**
 * Web Optimizer - Enterprise Malware/Injection WAF, Content/Image DRM Protection,
 * and Unified SEO + GEO (Generative & Geo-Targeting) + AEO (Answer Engine Optimization) Engine
 * https://www.weboptimizer.in | Founder: Hrushikesh Swain (+91 7735973818)
 */

if (!defined('WEBOPTIMIZER_SECURITY_SEO_LOADED')) {
    define('WEBOPTIMIZER_SECURITY_SEO_LOADED', true);

    // =========================================================================
    // 1. RUNTIME MALWARE, XSS, SQLi & PATH TRAVERSAL FIREWALL (WAF)
    // =========================================================================
    if (!headers_sent()) {
        @header_remove('X-Powered-By');
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
        header('Permissions-Policy: geolocation=(), microphone=(), camera=(), payment=(), usb=()');
        header('Cross-Origin-Opener-Policy: same-origin-allow-popups');
    }

    /**
     * Deeply inspect incoming strings for malware/injection signatures
     */
    function weboptimizer_is_malicious_payload($val) {
        if (is_array($val)) {
            foreach ($val as $sub) {
                if (weboptimizer_is_malicious_payload($sub)) return true;
            }
            return false;
        }
        if (!is_string($val) || $val === '') return false;

        $decoded = rawurldecode($val);
        $patterns = [
            '/<\s*script\b/i',
            '/javascript\s*:/i',
            '/vbscript\s*:/i',
            '/data\s*:\s*text\/html/i',
            '/on(load|error|click|mouseover|focus|blur|submit|change|keyup|keydown)\s*=/i',
            '/<\s*(iframe|object|embed|applet|meta|link|style|base)\b/i',
            '/\bunion\s+(all\s+)?select\b/i',
            '/\bselect\b.*\bfrom\b.*\binformation_schema\b/i',
            '/\b(sleep|benchmark|load_file|into\s+outfile|into\s+dumpfile)\s*\(/i',
            '/\b(base64_decode|eval|gzinflate|str_rot13|shell_exec|passthru|system|proc_open|popen)\s*\(/i',
            '/(?:\.\.\/|\.\.\\\\){2,}/',
            '/(?:etc\/passwd|etc\/shadow|boot\.ini|win\.ini|php:\/\/input|php:\/\/filter|expect:\/\/)/i',
            '/document\s*\.\s*(cookie|write|location)/i',
            '/\bGLOBALS\b|\b_REQUEST\b/i'
        ];

        foreach ($patterns as $regex) {
            if (preg_match($regex, $val) || preg_match($regex, $decoded)) {
                return true;
            }
        }
        return false;
    }

    // Run WAF check on Query String, GET, POST, and COOKIE
    $waf_sources = [
        $_SERVER['QUERY_STRING'] ?? '',
        $_GET ?? [],
        $_POST ?? [],
        $_COOKIE ?? []
    ];
    foreach ($waf_sources as $src) {
        if (weboptimizer_is_malicious_payload($src)) {
            if (!headers_sent()) {
                header('HTTP/1.1 403 Forbidden');
                header('Content-Type: text/plain; charset=UTF-8');
            }
            exit('403 Forbidden: Malicious payload blocked by Web Optimizer Security Shield.');
        }
    }

    // Strictly sanitize routing GET parameters
    foreach (['slug', 'service', 'city'] as $route_param) {
        if (isset($_GET[$route_param])) {
            $_GET[$route_param] = preg_replace('/[^a-z0-9\-]/i', '', strtolower((string)$_GET[$route_param]));
        }
    }

    // Stateless HMAC CSRF Token for Contact & Proposal Forms
    $wo_csrf_secret = 'WO_SHIELD_2026_HRUSHIKESH_' . date('Y-m');
    $wo_csrf_token = hash_hmac('sha256', 'weboptimizer_form_guard', $wo_csrf_secret);

    // =========================================================================
    // 2. ODISHA GEO COORDINATES LOOKUP (FOR GEO META & LOCALBUSINESS SCHEMA)
    // =========================================================================
    function weboptimizer_get_city_coords($city_slug) {
        $coords = [
            'bhubaneswar'   => ['lat' => '20.2961', 'lng' => '85.8245'],
            'cuttack'       => ['lat' => '20.4625', 'lng' => '85.8830'],
            'rourkela'      => ['lat' => '22.2604', 'lng' => '84.8536'],
            'berhampur'     => ['lat' => '19.3150', 'lng' => '84.7941'],
            'sambalpur'     => ['lat' => '21.4669', 'lng' => '83.9812'],
            'puri'          => ['lat' => '19.8135', 'lng' => '85.8312'],
            'balasore'      => ['lat' => '21.4934', 'lng' => '86.9135'],
            'bhadrak'       => ['lat' => '21.0574', 'lng' => '86.4963'],
            'baripada'      => ['lat' => '21.9320', 'lng' => '86.7515'],
            'jharsuguda'    => ['lat' => '21.8554', 'lng' => '84.0062'],
            'angul'         => ['lat' => '20.8409', 'lng' => '85.1016'],
            'dhenkanal'     => ['lat' => '20.6593', 'lng' => '85.5960'],
            'paradeep'      => ['lat' => '20.3166', 'lng' => '86.6114'],
            'jajpur'        => ['lat' => '20.8378', 'lng' => '86.3377'],
            'kendrapara'    => ['lat' => '20.5015', 'lng' => '86.4186'],
            'khordha'       => ['lat' => '20.1864', 'lng' => '85.6223'],
            'jatni'         => ['lat' => '20.1598', 'lng' => '85.7074'],
            'konark'        => ['lat' => '19.8876', 'lng' => '86.0945'],
            'nayagarh'      => ['lat' => '20.1287', 'lng' => '85.0984'],
            'jagatsinghpur' => ['lat' => '20.2547', 'lng' => '86.1706'],
            'keonjhar'      => ['lat' => '21.6289', 'lng' => '85.5817'],
            'barbil'        => ['lat' => '22.1167', 'lng' => '85.3833'],
            'joda'          => ['lat' => '22.0197', 'lng' => '85.4242'],
            'talcher'       => ['lat' => '20.9501', 'lng' => '85.2168'],
            'bargarh'       => ['lat' => '21.3347', 'lng' => '83.6190'],
            'balangir'      => ['lat' => '20.7011', 'lng' => '83.4846'],
            'kalahandi'     => ['lat' => '19.9137', 'lng' => '83.1649'],
            'rayagada'      => ['lat' => '19.1712', 'lng' => '83.4162'],
            'koraput'       => ['lat' => '18.8135', 'lng' => '82.7123'],
            'jeypore'       => ['lat' => '18.8562', 'lng' => '82.5716']
        ];
        return $coords[$city_slug] ?? ['lat' => '20.2961', 'lng' => '85.8245'];
    }

    // =========================================================================
    // 3. UNIFIED SEO, GEO & AEO HEAD METADATA + JSON-LD SCHEMA GENERATOR
    // =========================================================================
    function weboptimizer_render_seo_geo_aeo_head($ctx) {
        $page_title    = $ctx['page_title'] ?? 'Web Optimizer | Premier Website Design & Digital Engineering Company';
        $meta_desc     = $ctx['meta_desc'] ?? "Web Optimizer is Bhubaneswar's premier website design, custom WordPress, Custom Quotation & GST Billing Software, and AI SEO agency across all 50 Odisha cities.";
        $canonical_url = $ctx['canonical_url'] ?? 'https://www.weboptimizer.in/';
        $active_nav    = $ctx['active_nav'] ?? 'home';
        $service       = $ctx['service'] ?? null;
        $loc           = $ctx['loc'] ?? null;
        $post          = $ctx['post'] ?? null;
        $slug          = $ctx['slug'] ?? '';
        $service_slug  = $ctx['service_slug'] ?? '';
        $city_slug     = $ctx['city_slug'] ?? 'bhubaneswar';

        // Determine GEO context
        $city_name = $loc['name'] ?? 'Bhubaneswar';
        $district  = $loc['district'] ?? 'Khordha';
        $region    = $loc['region'] ?? 'Coastal Odisha';
        $coords    = weboptimizer_get_city_coords($loc['slug'] ?? $city_slug ?: 'bhubaneswar');
        $geo_placename = "{$city_name}, {$district}, Odisha, India";

        // Determine Dynamic OG / Twitter Banner Image
        $og_image = 'https://www.weboptimizer.in/assets/images/banners/banner-home.webp';
        if ($post && !empty($post['image'])) {
            $og_image = 'https://www.weboptimizer.in/' . ltrim($post['image'], '/');
        } elseif ($service && !empty($service['slug'])) {
            $og_image = 'https://www.weboptimizer.in/assets/images/banners/services/banner-' . $service['slug'] . '.webp';
        } elseif ($loc && !empty($loc['slug'])) {
            $og_image = 'https://www.weboptimizer.in/assets/images/banners/locations/banner-' . $loc['slug'] . '.webp';
        } elseif ($active_nav === 'services') {
            $og_image = 'https://www.weboptimizer.in/assets/images/banners/banner-services.webp';
        } elseif ($active_nav === 'locations') {
            $og_image = 'https://www.weboptimizer.in/assets/images/banners/banner-locations.webp';
        } elseif ($active_nav === 'blog') {
            $og_image = 'https://www.weboptimizer.in/assets/images/banners/banner-blog.webp';
        } elseif ($active_nav === 'contact') {
            $og_image = 'https://www.weboptimizer.in/assets/images/banners/banner-contact.webp';
        }

        // Dynamic SEO + GEO Keywords
        $kw_parts = [
            'Web Optimizer',
            'Hrushikesh Swain',
            'Website Design in ' . $city_name,
            'Digital Marketing Agency in ' . $city_name,
            'Custom Quotation Billing GST Invoice Software Odisha',
            'AI SEO & Google Maps Ranking ' . $city_name,
            'WordPress & WooCommerce Developer Odisha',
            $district . ' Digital Engineering'
        ];
        if ($service && !empty($service['title'])) {
            array_unshift($kw_parts, $service['title'] . ' in ' . $city_name, 'Best ' . ($service['short_title'] ?? $service['title']) . ' Odisha');
        }
        if ($post && !empty($post['title'])) {
            array_unshift($kw_parts, $post['title'], ($post['category'] ?? 'Business Guide') . ' Odisha');
        }
        $meta_keywords = implode(', ', array_unique($kw_parts));

        // Build BreadcrumbList Items
        $breadcrumbs = [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => 'https://www.weboptimizer.in/'
            ]
        ];
        if ($service && $loc) {
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => 'https://www.weboptimizer.in/services'];
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 3, 'name' => $service['short_title'] ?? $service['title'], 'item' => 'https://www.weboptimizer.in/service/' . $service['slug']];
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 4, 'name' => $city_name . ', Odisha', 'item' => $canonical_url];
        } elseif ($service) {
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => 'https://www.weboptimizer.in/services'];
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 3, 'name' => $service['title'], 'item' => $canonical_url];
        } elseif ($loc) {
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 2, 'name' => 'Odisha Locations', 'item' => 'https://www.weboptimizer.in/locations'];
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 3, 'name' => $city_name . ' (' . $district . ')', 'item' => $canonical_url];
        } elseif ($post) {
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 2, 'name' => 'Business Guides', 'item' => 'https://www.weboptimizer.in/blog'];
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => $canonical_url];
        } elseif ($active_nav === 'services') {
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 2, 'name' => 'All 47 Digital Services', 'item' => $canonical_url];
        } elseif ($active_nav === 'locations') {
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 2, 'name' => 'All 50 Odisha Service Locations', 'item' => $canonical_url];
        } elseif ($active_nav === 'blog') {
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 2, 'name' => '125 Odisha Business Guides', 'item' => $canonical_url];
        } elseif ($active_nav === 'contact') {
            $breadcrumbs[] = ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact Us', 'item' => $canonical_url];
        }

        // Build AEO FAQPage Entities for Every Page
        $faq_entities = [];
        if ($service && !empty($service['faqs']) && is_array($service['faqs'])) {
            foreach ($service['faqs'] as $f) {
                $q = $f['q'] ?? '';
                $a = $f['a'] ?? '';
                if ($loc && $q !== '') {
                    $q = rtrim($q, '?') . ' in ' . $city_name . '?';
                }
                if ($q && $a) {
                    $faq_entities[] = [
                        '@type' => 'Question',
                        'name' => $q,
                        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $a]
                    ];
                }
            }
        } elseif ($loc) {
            $faq_entities = [
                [
                    '@type' => 'Question',
                    'name' => "Which is the best website design and digital marketing agency in {$city_name}, Odisha?",
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => "Web Optimizer, led by Founder & Senior Web Developer Hrushikesh Swain (+91 7735973818), provides enterprise website design, Custom Quotation & GST Billing Software, AI SEO, Google Maps optimization, and high-ROI paid advertising in {$city_name} ({$district} District) with 158+ verified deployments."
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => "Does Web Optimizer provide Custom Quotation, Billing & GST Invoice Software in {$city_name}?",
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => "Yes. Web Optimizer builds bespoke cloud and desktop Quotation, GST Billing, POS, Barcode, Inventory, and automated WhatsApp PDF Invoice software tailored for manufacturers, traders, hospitals, and retailers in {$city_name}, Odisha."
                    ]
                ]
            ];
        } elseif ($post) {
            $faq_entities = [
                [
                    '@type' => 'Question',
                    'name' => $post['title'] . ' — What is the key takeaway for Odisha businesses?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $post['takeaway'] ?? $post['excerpt'] ?? $meta_desc
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How can I consult Web Optimizer for implementing this in Odisha?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Call or WhatsApp Senior Web Developer Hrushikesh Swain directly at +91 7735973818 or email info@weboptimizer.in for a bespoke architecture roadmap within 2 hours.'
                    ]
                ]
            ];
        } else {
            $faq_entities = [
                [
                    '@type' => 'Question',
                    'name' => 'What services does Web Optimizer provide in Bhubaneswar and across Odisha?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Web Optimizer delivers 47 specialized digital capabilities across all 50 cities in Odisha, including Custom Quotation, Billing & GST Invoice Software, Custom Web & Mobile Applications, WordPress & WooCommerce Engineering, Shopify Stores, AI SEO, Google Maps Ranking, Google & Meta Ads, Brand Identity, and Official WhatsApp Automation.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How do I request a custom website, billing software, or digital marketing proposal?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'You can submit an inquiry directly through our website proposal form, call +91 7735973818, or chat on WhatsApp for a direct consultation with Founder Hrushikesh Swain.'
                    ]
                ]
            ];
        }

        // Build Complete @graph JSON-LD (SEO + GEO + AEO)
        $graph = [
            [
                '@type' => ['ProfessionalService', 'LocalBusiness', 'SoftwareCompany'],
                '@id' => 'https://www.weboptimizer.in/#organization',
                'name' => 'Web Optimizer',
                'alternateName' => 'Web Optimizer Digital Engineering & Software Agency Odisha',
                'url' => 'https://www.weboptimizer.in/',
                'logo' => 'https://www.weboptimizer.in/assets/images/weboptimizer-logo.webp',
                'image' => $og_image,
                'description' => $meta_desc,
                'telephone' => '+91 7735973818',
                'email' => 'info@weboptimizer.in',
                'priceRange' => '$$',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => $city_name,
                    'addressRegion' => 'Odisha',
                    'postalCode' => '751001',
                    'addressCountry' => 'IN'
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => $coords['lat'],
                    'longitude' => $coords['lng']
                ],
                'openingHoursSpecification' => [
                    [
                        '@type' => 'OpeningHoursSpecification',
                        'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                        'opens' => '08:00',
                        'closes' => '22:00'
                    ]
                ],
                'aggregateRating' => [
                    '@type' => 'AggregateRating',
                    'ratingValue' => '4.9',
                    'bestRating' => '5',
                    'ratingCount' => '158',
                    'reviewCount' => '158'
                ],
                'founder' => [
                    '@type' => 'Person',
                    'name' => 'Hrushikesh Swain',
                    'jobTitle' => 'Founder & Senior Web Developer',
                    'url' => 'https://www.linkedin.com/in/hrushikesh-swain-a34503211/'
                ],
                'areaServed' => [
                    '@type' => 'State',
                    'name' => 'Odisha, India'
                ],
                'knowsAbout' => [
                    'Custom Quotation, Billing & GST Invoice Software',
                    'Website Design & UI/UX Engineering',
                    'WordPress & WooCommerce Development',
                    'Shopify E-Commerce Stores',
                    'AI SEO, Answer Engine Optimization (AEO) & Geo-Targeting (GEO)',
                    'Google Maps & Local SEO in Odisha',
                    'Google Ads & Meta PPC Performance Marketing',
                    'WhatsApp Business API Automation'
                ]
            ],
            [
                '@type' => 'WebSite',
                '@id' => 'https://www.weboptimizer.in/#website',
                'url' => 'https://www.weboptimizer.in/',
                'name' => 'Web Optimizer',
                'inLanguage' => 'en-IN',
                'publisher' => ['@id' => 'https://www.weboptimizer.in/#organization']
            ],
            [
                '@type' => 'WebPage',
                '@id' => $canonical_url . '#webpage',
                'url' => $canonical_url,
                'name' => $page_title,
                'description' => $meta_desc,
                'inLanguage' => 'en-IN',
                'isPartOf' => ['@id' => 'https://www.weboptimizer.in/#website'],
                'about' => ['@id' => 'https://www.weboptimizer.in/#organization'],
                'primaryImageOfPage' => [
                    '@type' => 'ImageObject',
                    'url' => $og_image
                ],
                'speakable' => [
                    '@type' => 'SpeakableSpecification',
                    'cssSelector' => ['.hero-title', '.banner-title', '.hero-lead', '.banner-lead', '.blog-callout', '.service-overview-box']
                ]
            ],
            [
                '@type' => 'BreadcrumbList',
                '@id' => $canonical_url . '#breadcrumb',
                'itemListElement' => $breadcrumbs
            ],
            [
                '@type' => 'FAQPage',
                '@id' => $canonical_url . '#faq',
                'mainEntity' => $faq_entities
            ]
        ];

        // Add Service + HowTo Schema on Service & Service+Location pages
        if ($service) {
            $service_node = [
                '@type' => 'Service',
                '@id' => $canonical_url . '#service-entity',
                'name' => $service['title'] . ($loc ? ' in ' . $city_name . ', Odisha' : ''),
                'serviceType' => $service['short_title'] ?? $service['title'],
                'description' => $meta_desc,
                'provider' => ['@id' => 'https://www.weboptimizer.in/#organization'],
                'areaServed' => [
                    '@type' => $loc ? 'City' : 'State',
                    'name' => $loc ? ($city_name . ', Odisha, India') : 'Odisha, India'
                ]
            ];
            $graph[] = $service_node;

            if (!empty($service['process']) && is_array($service['process'])) {
                $steps = [];
                $pos = 1;
                foreach ($service['process'] as $proc) {
                    $steps[] = [
                        '@type' => 'HowToStep',
                        'position' => $pos++,
                        'name' => $proc['title'] ?? ('Step ' . $pos),
                        'text' => $proc['desc'] ?? ''
                    ];
                }
                $graph[] = [
                    '@type' => 'HowTo',
                    '@id' => $canonical_url . '#howto',
                    'name' => 'How Web Optimizer Delivers ' . ($service['short_title'] ?? $service['title']),
                    'description' => $service['tagline'] ?? $meta_desc,
                    'step' => $steps
                ];
            }
        }

        $json_ld = json_encode([
            '@context' => 'https://schema.org',
            '@graph' => $graph
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        // Render Complete SEO, GEO, AEO & Security Meta Tags
        ?>
  <!-- Security & Anti-Injection Meta Directives -->
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <meta name="referrer" content="strict-origin-when-cross-origin">

  <!-- Core SEO Meta Directives -->
  <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
  <meta name="author" content="Hrushikesh Swain - Web Optimizer (https://www.weboptimizer.in)">
  <meta name="publisher" content="Web Optimizer">
  <meta name="copyright" content="Web Optimizer (weboptimizer.in) - All Rights Reserved">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="googlebot" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="bingbot" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="revisit-after" content="3 days">
  <meta name="rating" content="General">
  <meta name="distribution" content="global">
  <meta name="language" content="en-IN">

  <!-- GEO (Geo-Targeting & Local Search Precision) Meta Directives -->
  <meta name="geo.region" content="IN-OR">
  <meta name="geo.placename" content="<?php echo htmlspecialchars($geo_placename); ?>">
  <meta name="geo.position" content="<?php echo htmlspecialchars($coords['lat'] . ';' . $coords['lng']); ?>">
  <meta name="ICBM" content="<?php echo htmlspecialchars($coords['lat'] . ', ' . $coords['lng']); ?>">
  <meta name="DC.title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="DC.coverage" content="<?php echo htmlspecialchars($geo_placename); ?>">

  <!-- AEO (Answer Engine Optimization & AI Search Summary) Meta Directives -->
  <meta name="ai-content-summary" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <meta name="entity-authority" content="Web Optimizer | Founder: Hrushikesh Swain | Phone: +91 7735973818 | Bhubaneswar, Odisha, India">

  <!-- Hreflang Regional Targeting -->
  <link rel="alternate" hreflang="en-in" href="<?php echo htmlspecialchars($canonical_url); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo htmlspecialchars($canonical_url); ?>">
  <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($canonical_url); ?>">

  <!-- Open Graph (Facebook, LinkedIn, WhatsApp Rich Previews) -->
  <meta property="og:type" content="<?php echo $post ? 'article' : 'website'; ?>">
  <meta property="og:site_name" content="Web Optimizer">
  <meta property="og:locale" content="en_IN">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($page_title); ?>">

  <!-- Twitter / X Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">
  <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($page_title); ?>">

  <!-- Unified SEO, GEO & AEO Schema.org JSON-LD Graph -->
  <script type="application/ld+json"><?php echo $json_ld; ?></script>
<?php
    }

    // =========================================================================
    // 4. OUTPUT BUFFER POST-PROCESSOR: ENFORCE ALT + TITLE + DRM ON ALL <img>
    // =========================================================================
    function weboptimizer_enforce_img_attributes($html) {
        return preg_replace_callback('/<img\b[^>]*>/i', function ($matches) {
            $tag = $matches[0];

            // Extract existing src, alt, title
            $src = '';
            if (preg_match('/\bsrc\s*=\s*(["\'])(.*?)\1/i', $tag, $m)) {
                $src = $m[2];
            }
            $alt = '';
            $has_alt = false;
            if (preg_match('/\balt\s*=\s*(["\'])(.*?)\1/i', $tag, $m)) {
                $has_alt = true;
                $alt = trim($m[2]);
            }
            $title = '';
            $has_title = false;
            if (preg_match('/\btitle\s*=\s*(["\'])(.*?)\1/i', $tag, $m)) {
                $has_title = true;
                $title = trim($m[2]);
            }

            // Generate fallback descriptive label from filename if needed
            $fallback = 'Web Optimizer Digital Engineering & Marketing Showcase in Odisha';
            if ($src !== '') {
                $base = pathinfo(parse_url($src, PHP_URL_PATH) ?: $src, PATHINFO_FILENAME);
                $base = preg_replace('/^(banner-|port-|logo-)/i', '', $base);
                $base = ucwords(str_replace(['-', '_'], ' ', $base));
                if (strlen($base) > 2) {
                    $fallback = $base . ' - Web Optimizer Odisha';
                }
            }

            if ($alt === '') {
                $alt = ($title !== '') ? $title : $fallback;
            }
            if ($title === '') {
                $title = $alt;
                if (stripos($title, 'Web Optimizer') === false) {
                    $title .= ' | Web Optimizer';
                }
            }

            $safe_alt = htmlspecialchars(html_entity_decode($alt, ENT_QUOTES, 'UTF-8'), ENT_QUOTES, 'UTF-8');
            $safe_title = htmlspecialchars(html_entity_decode($title, ENT_QUOTES, 'UTF-8'), ENT_QUOTES, 'UTF-8');

            // Replace or inject alt
            if ($has_alt) {
                $tag = preg_replace('/\balt\s*=\s*(["\'])(.*?)\1/i', 'alt="' . $safe_alt . '"', $tag, 1);
            } else {
                $tag = preg_replace('/^<img\b/i', '<img alt="' . $safe_alt . '"', $tag, 1);
            }

            // Replace or inject title
            if ($has_title) {
                $tag = preg_replace('/\btitle\s*=\s*(["\'])(.*?)\1/i', 'title="' . $safe_title . '"', $tag, 1);
            } else {
                $tag = preg_replace('/^<img\b/i', '<img title="' . $safe_title . '"', $tag, 1);
            }

            // Enforce anti-drag and contextmenu protection on every image
            if (stripos($tag, 'draggable=') === false) {
                $tag = preg_replace('/^<img\b/i', '<img draggable="false"', $tag, 1);
            }
            if (stripos($tag, 'oncontextmenu=') === false) {
                $tag = preg_replace('/^<img\b/i', '<img oncontextmenu="return false;"', $tag, 1);
            }

            return $tag;
        }, $html);

        // Enforce 100% Clean Extensionless URLs across all internal href attributes
        $html = preg_replace('/href="([^"]*?)service-location\.php\?service=([a-z0-9\-]+)&(?:amp;)?city=([a-z0-9\-]+)"/i', 'href="$1service/$2/$3"', $html);
        $html = preg_replace('/href="([^"]*?)location\.php\?city=([a-z0-9\-]+)"/i', 'href="$1location/$2"', $html);
        $html = preg_replace('/href="([^"]*?)service-detail\.php\?slug=([a-z0-9\-]+)"/i', 'href="$1service/$2"', $html);
        $html = preg_replace('/href="([^"]*?)blog-post\.php\?slug=([a-z0-9\-]+)"/i', 'href="$1blog/$2"', $html);
        $html = preg_replace('/href="([^"]*?)index\.php#contact"/i', 'href="$1contact"', $html);
        $html = preg_replace('/href="([^"]*?)index\.php(#[^"]*)?"/i', 'href="$1$2"', $html);
        $html = preg_replace('/href="([^"]*?)(services|locations|blog|contact)\.php(#[^"]*)?"/i', 'href="$1$2$3"', $html);
        $html = preg_replace('/href="([^"]*?)([a-z0-9\-]+)\.php(#[^"]*)?"/i', 'href="$1service/$2$3"', $html);

        return $html;
    }

    // Start Output Buffering on web requests so every page's HTML goes through the ALT/TITLE/DRM enforcer
    if (PHP_SAPI !== 'cli') {
        ob_start('weboptimizer_enforce_img_attributes');
    }
}
