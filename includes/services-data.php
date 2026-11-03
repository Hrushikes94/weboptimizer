<?php
/**
 * Web Optimizer - Master Services & Sub-Services Catalog
 * Modeled after enterprise agency hierarchy (analyzed from dcstudio.in & brandshark.com)
 * Web Optimizer (https://www.weboptimizer.in)
 * Founder & Senior Web Developer: Hrushikesh Swain
 * Official Phone: +91 7735973818 | Email: info@weboptimizer.in | Location: Bhubaneswar, Odisha
 */

// 1. Master Service Parents (Categories)
$service_parents = [
    'web-development' => [
        'slug' => 'web-development',
        'title' => 'Website & UI/UX Engineering',
        'short_title' => 'Web & UI/UX',
        'icon' => 'fa-laptop-code',
        'badge' => 'CORE PILLAR',
        'category_name' => 'Web & UI/UX',
        'description' => 'Bespoke WordPress architectures, headless web applications, luxury UI/UX, and high-concurrency e-commerce storefronts engineered for sub-second speeds.',
        'sub_services' => [
            'website-development', 'wordpress-development', 'ecommerce-development', 'shopify-development',
            'custom-web-application', 'quotation-billing-invoice-software', 'api-integrations', 'website-maintenance', 'plugin-development', 'theme-development'
        ]
    ],
    'ai-seo' => [
        'slug' => 'ai-seo',
        'title' => 'AI SEO & Search Engine Optimization',
        'short_title' => 'AI SEO & Growth',
        'icon' => 'fa-chart-line',
        'badge' => 'ALGORITHMIC',
        'category_name' => 'Growth & SEO',
        'description' => 'Surgical technical SEO audits, Core Web Vitals optimization, semantic schema markup, and high-authority link acquisition for top Google rankings.',
        'sub_services' => [
            'technical-seo', 'seo-audit', 'local-seo', 'link-building', 'on-page-seo', 'off-page-seo', 'content-writing'
        ]
    ],
    'performance-marketing' => [
        'slug' => 'performance-marketing',
        'title' => 'Performance Marketing & Paid Acquisition',
        'short_title' => 'Performance Marketing',
        'icon' => 'fa-bullseye',
        'badge' => 'ROI & ADS',
        'category_name' => 'Performance Ads',
        'description' => 'Data-backed Google Ads, Meta PPC, high-intent lead generation funnels, and programmatic remarketing engineered to maximize ROAS and slash CAC.',
        'sub_services' => [
            'google-ads', 'paid-social-media', 'lead-generation', 'search-engine-marketing', 'email-marketing', 'affiliate-marketing', 'content-marketing'
        ]
    ],
    'social-media-marketing' => [
        'slug' => 'social-media-marketing',
        'title' => 'Social Media Marketing (SMM) & Brand Community',
        'short_title' => 'Social Media (SMM)',
        'icon' => 'fa-share-nodes',
        'badge' => 'ENGAGEMENT',
        'category_name' => 'Social & Creators',
        'description' => 'Authoritative multi-channel social management, viral creative production, community engagement, and creator-led influencer campaigns.',
        'sub_services' => [
            'facebook-marketing', 'instagram-marketing', 'linkedin-marketing', 'youtube-marketing', 'influencer-marketing'
        ]
    ],
    'branding' => [
        'slug' => 'branding-design',
        'title' => 'Branding, Creative & Visual Identity',
        'short_title' => 'Branding & Design',
        'icon' => 'fa-bezier-curve',
        'badge' => 'CREATIVE',
        'category_name' => 'Creative & Identity',
        'description' => 'Bespoke crest and logo design, comprehensive brand guidelines, corporate identity suites, and strategic market positioning for luxury brands.',
        'sub_services' => [
            'branding-design', 'brand-identity-logo', 'brand-strategy', 'corporate-branding', 'marketing-collaterals', 'creative-advertising', 'brand-consulting'
        ]
    ],

    'allied-services' => [
        'slug' => 'allied-services',
        'title' => 'Allied Growth, Automation & Consulting',
        'short_title' => 'Allied Services',
        'icon' => 'fa-gears',
        'badge' => 'AUTOMATION',
        'category_name' => 'Growth & Automation',
        'description' => 'WhatsApp Business API automation, Google My Business (GMB) domination, real-time analytics dashboards, and executive reputation management (ORM).',
        'sub_services' => [
            'whatsapp-automation', 'google-my-business', 'analytics-reporting', 'online-reputation', 'strategy-consulting'
        ]
    ]
];

// 2. Master Services & Sub-Services Catalog
$services_catalog = [
    'digital-marketing' => [
        'slug' => 'digital-marketing',
        'title' => 'Full-Service Digital Marketing Agency',
        'short_title' => 'Digital Marketing',
        'parent_slug' => 'digital-marketing',
        'parent_name' => 'Digital Marketing Ecosystem',
        'badge' => 'FULL SUITE',
        'badge_color' => 'gold',
        'category' => 'digital-marketing',
        'category_name' => 'Digital Marketing',
        'icon' => 'fa-solid fa-bullhorn',
        'meta_description' => 'Full-service digital marketing agency in Bhubaneswar, Odisha. End-to-end Social Media, AI SEO, Performance Marketing, UI/UX, Media Production, and Allied Automations.',
        'hero_headline' => 'Orchestrating Market Leadership With <span class="gold-gradient-text">Full-Service Digital Marketing</span>.',
        'hero_lead' => 'We unify AI SEO, ROI-driven performance marketing, authoritative social media, cinematic production, and intelligent automation into an unstoppable customer acquisition engine.',
        'overview' => 'In today\'s hyper-competitive digital landscape, fragmented marketing tactics create friction and wasted ad spend. When your SEO agency does not communicate with your web developers, or your social media creative does not match your paid ad funnels, conversion suffers. Web Optimizer delivers unified digital marketing engineering. Modeled after top tier agencies and guided by Senior Web Developer Hrushikesh Swain, we synchronize all 6 core growth pillars into a seamless, compounding growth ecosystem.',
        'deliverables' => [
            [
                'title' => 'Omnichannel Digital Strategy & Growth Architecture',
                'desc' => 'Integrated roadmaps synchronizing organic SEO, paid media, social authority, and conversion funnels.'
            ],
            [
                'title' => 'AI SEO & Search Engine Dominance Pipeline',
                'desc' => 'Capture high-intent organic search volume across Google, Bing, and AI search interfaces.'
            ],
            [
                'title' => 'Multi-Platform Performance Marketing & Paid Funnels',
                'desc' => 'Surgical paid customer acquisition across Google Ads, Meta Ads, and LinkedIn with proven ROAS.'
            ],
            [
                'title' => 'High-Retention Social Media & Creator Ecosystem',
                'desc' => 'Command industry authority with aesthetic grid curation, viral Reels, and creator influencer partnerships.'
            ],
            [
                'title' => 'Full Martech Automation & Business Intelligence',
                'desc' => 'Deploy WhatsApp chatbots, CRM lead routing, and real-time Looker Studio executive dashboards.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-cubes', 'title' => 'Single Unified Agency Partner', 'text' => 'Eliminate the headache of managing 5 different specialized agencies with zero finger-pointing.'],
            ['icon' => 'fa-chart-pie', 'title' => 'Compounding Multichannel ROI', 'text' => 'Cross-pollinate insights: search data informs social hooks, and ad creatives fuel conversion funnels.'],
            ['icon' => 'fa-bolt', 'title' => 'Sub-Second Digital Polish', 'text' => 'Every marketing asset is engineered for speed, mobile responsiveness, and high conversion rates.'],
            ['icon' => 'fa-user-tie', 'title' => 'Direct Senior Leadership Oversight', 'text' => 'Work directly with seasoned engineers and strategists dedicated to your company\'s bottom line.'],
        ],
        'tech_stack' => ['Google Marketing Platform', 'Meta Ads Manager', 'Ahrefs / SEMrush', 'Klaviyo / HubSpot', 'Looker Studio', 'WhatsApp Business API'],
        'metrics' => [
            ['num' => '6 Pillars', 'label' => 'Complete Digital Ecosystem'],
            ['num' => '3.8x', 'label' => 'Average Blended Marketing ROAS'],
            ['num' => '158+', 'label' => 'Digital Projects Delivered'],
        ],
        'faqs' => [
            [
                'q' => 'How does Web Optimizer coordinate all digital marketing services together?',
                'a' => 'We designate a senior strategist who oversees your entire growth ecosystem—ensuring that design, copywriting, technical SEO, and paid media teams operate from a single unified message.'
            ],
            [
                'q' => 'Can we begin with a single service before expanding to full-service marketing?',
                'a' => 'Yes. Many clients start with a bespoke website redesign or technical SEO sprint, then scale into performance marketing and social media once their technical foundation is rock-solid.'
            ],
            [
                'q' => 'What reporting do we receive on marketing performance?',
                'a' => 'You receive a live, 24/7 accessible Looker Studio dashboard tracking real-time impressions, clicks, qualified leads, and ROAS, complemented by bi-weekly strategy reviews.'
            ],
        ]
    ],

    'web-development' => [
        'slug' => 'web-development',
        'title' => 'Website Design & UI/UX Engineering',
        'short_title' => 'Web & UI/UX',
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'badge' => 'CORE PILLAR',
        'badge_color' => 'gold',
        'category' => 'web',
        'category_name' => 'Web & UI/UX',
        'icon' => 'fa-solid fa-laptop-code',
        'meta_description' => 'Bespoke website design, custom WordPress development, WooCommerce storefronts, Shopify, custom web apps, and API integrations engineered for speed and conversion.',
        'hero_headline' => 'Architecting <span class="gold-gradient-text">Luxury Websites & UI/UX</span> With Unrivaled Speed.',
        'hero_lead' => 'We engineer bespoke digital platforms, enterprise WordPress backends, and headless web applications tailored for brands that refuse to settle for slow, bloated templates.',
        'overview' => 'In a digital ecosystem where attention spans are measured in milliseconds, your website is your primary business asset. Web Optimizer eliminates generic page builders and code bloat in favor of handcrafted WordPress architectures, semantic HTML5, modern SCSS, and optimized PHP 8.x. Every deployment is precision-engineered to load in under a second, pass Google Core Web Vitals with flawless 95+ scores, and guide high-intent prospects effortlessly toward conversion.',
        'deliverables' => [
            [
                'title' => 'Custom WordPress & Enterprise CMS Development',
                'desc' => 'Hand-coded WordPress backends with zero plugin bloat, tailored Gutenberg blocks, custom post types, and intuitive editorial controls.'
            ],
            [
                'title' => 'Mobile-First Responsive UI/UX Architecture',
                'desc' => 'Fluid responsive grids ensuring flawless visual hierarchy and micro-interactions across smartphones, tablets, and desktops.'
            ],
            [
                'title' => 'Sub-Second Page Speed & 99+ Core Web Vitals Pass',
                'desc' => 'Rigorous frontend optimization achieving sub-800ms load times, optimal LCP, and minimal INP.'
            ],
            [
                'title' => 'Headless Web Applications & REST API Handlers',
                'desc' => 'Decoupled web interfaces powered by lightweight JavaScript, serverless functions, and asynchronous API integrations.'
            ],
            [
                'title' => 'Enterprise Security Hardening & Zero-Downtime Maintenance',
                'desc' => 'Multi-layer security protocols, brute-force shielding, SSL/TLS hardening, automated off-site backups, and proactive monitoring.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-gauge-high', 'title' => 'Sub-Second Loading', 'text' => 'Fast loading reduces bounce rates by up to 60% and increases search engine crawl frequency.'],
            ['icon' => 'fa-shield-halved', 'title' => 'Hardened Security', 'text' => 'Custom architectures eliminate vulnerable third-party plugins, preventing exploits and unauthorized access.'],
            ['icon' => 'fa-chart-pie', 'title' => 'Higher Conversions', 'text' => 'Frictionless navigation and strategic call-to-actions directly amplify inbound inquiry and sales rates.'],
            ['icon' => 'fa-mobile-screen', 'title' => '100% Cross-Device Fluidity', 'text' => 'Pixel-perfect responsiveness across all screen dimensions and modern mobile browsers.'],
        ],
        'tech_stack' => ['PHP 8.x', 'WordPress Core', 'Shopify Liquid', 'Bootstrap 5', 'MySQL', 'REST API', 'SCSS / CSS3', 'Cloudflare CDN'],
        'metrics' => [
            ['num' => '99.8%', 'label' => 'Core Web Vitals Pass'],
            ['num' => '<800ms', 'label' => 'Average Page Load Time'],
            ['num' => '158+', 'label' => 'Custom Projects Delivered'],
        ],
        'faqs' => [
            [
                'q' => 'Why choose custom WordPress over pre-made ThemeForest themes?',
                'a' => 'Pre-made commercial themes are packed with hundreds of unused scripts, sliders, and heavy page builders that severely bottleneck site speed. Web Optimizer builds custom, lightweight themes containing only the exact features your business requires—guaranteeing peak performance and security.'
            ],
            [
                'q' => 'Will my team be able to update content without technical knowledge?',
                'a' => 'Yes. We build intuitive custom fields and native WordPress block patterns so your marketing team can effortlessly publish blogs, update banners, and edit case studies without touching a single line of code.'
            ],
            [
                'q' => 'How long does a bespoke website design and engineering project take?',
                'a' => 'A custom luxury website typically takes between 3 to 6 weeks from initial architecture, UI wireframing, and code development to final speed audits and production deployment.'
            ],
        ]
    ],

    'ai-seo' => [
        'slug' => 'ai-seo',
        'title' => 'AI SEO & Search Engine Optimization',
        'short_title' => 'AI SEO & Growth',
        'parent_slug' => 'ai-seo',
        'parent_name' => 'AI SEO & Search Engine Optimization',
        'badge' => 'ALGORITHMIC',
        'badge_color' => 'gold',
        'category' => 'growth',
        'category_name' => 'AI SEO & Growth',
        'icon' => 'fa-solid fa-chart-line',
        'meta_description' => 'Next-generation AI SEO, technical audits, Core Web Vitals, local SEO map pack domination, high-authority link building, on-page topical clustering, and content writing.',
        'hero_headline' => 'Dominating Search Engines With <span class="gold-gradient-text">AI SEO & Algorithmic Growth</span>.',
        'hero_lead' => 'We combine cutting-edge AI search intelligence, surgical code audits, and authoritative link acquisitions to capture top Google rankings and high-intent buyers.',
        'overview' => 'Search engines have evolved from keyword counters into sophisticated AI neural matching systems. Traditional keyword stuffing no longer works. Web Optimizer deploys advanced AI SEO strategies aligned with Google\'s RankBrain, BERT, and MUM algorithms. We conduct code-level technical audits, build semantic topical entity clusters, acquire high-DA editorial backlinks, and optimize for AI generative search answers to guarantee your brand is cited as the primary authority.',
        'deliverables' => [
            [
                'title' => 'Website Technical Audit & Crawlability Diagnostics',
                'desc' => 'Comprehensive site crawl uncovering orphaned pages, status code errors, canonical conflicts, and crawl budget bottlenecks.'
            ],
            [
                'title' => 'Core Web Vitals & Sub-Second Speed Engineering',
                'desc' => 'Frontend diagnostic optimization eliminating render-blocking CSS/JS and achieving green scores across Google PageSpeed.'
            ],
            [
                'title' => 'Topical Entity Clustering & Search Intent Architecture',
                'desc' => 'Build comprehensive semantic topic clusters that satisfy user intent and establish unshakeable topical authority.'
            ],
            [
                'title' => 'High-Authority Editorial Link Building & Digital PR',
                'desc' => 'Manual outreach securing contextual, do-follow editorial backlinks from high-traffic industry publications (DA 50+).'
            ],
            [
                'title' => 'Local 3-Pack & Google Map Pack Domination',
                'desc' => 'Optimize Google Business Profile and local citations to capture high-intent local buyers in your target cities.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-magnifying-glass-chart', 'title' => '100% Indexing Health', 'text' => 'Ensure every commercial page is indexed accurately by Google and Bing without crawler waste.'],
            ['icon' => 'fa-bolt', 'title' => 'Google Core Web Vitals Pass', 'text' => 'Gain an immediate ranking advantage over competitors failing Google Page Experience metrics.'],
            ['icon' => 'fa-star', 'title' => 'Rich Snippet Visibility', 'text' => 'Stand out in SERPs with star ratings, FAQs, and price attributes that increase organic click-through rates.'],
            ['icon' => 'fa-arrow-trend-up', 'title' => 'Sustained Organic Growth', 'text' => 'Build a resilient technical foundation immune to volatile Google core search algorithm updates.'],
        ],
        'tech_stack' => ['Google Search Console', 'Screaming Frog SEO Spider', 'Schema.org JSON-LD', 'Google Lighthouse', 'Ahrefs / SEMrush', 'SurferSEO'],
        'metrics' => [
            ['num' => '+320%', 'label' => 'Organic Impression Growth'],
            ['num' => '100%', 'label' => 'Crawl Indexation Health'],
            ['num' => '0', 'label' => 'Critical SERP Errors'],
        ],
        'faqs' => [
            [
                'q' => 'How does AI SEO differ from traditional SEO?',
                'a' => 'Traditional SEO focused primarily on inserting keywords into title tags and acquiring generic directory links. AI SEO optimizes for semantic entities, user engagement signals, search intent fulfillment, and direct AI-answer citations.'
            ],
            [
                'q' => 'How soon will I see ranking improvements after an SEO campaign starts?',
                'a' => 'Technical and on-page fixes typically produce ranking and impression gains within 3 to 6 weeks, with competitive commercial keywords steadily climbing into top 3 positions over 3 to 6 months.'
            ],
            [
                'q' => 'Do you provide transparent keyword and traffic ranking reports?',
                'a' => 'Yes. You receive live Looker Studio dashboard tracking daily keyword position movements, organic impression growth, and qualified inbound lead conversions.'
            ],
        ]
    ],



    'allied-services' => [
        'slug' => 'allied-services',
        'title' => 'Allied Growth, Automation & Consulting',
        'short_title' => 'Allied Services',
        'parent_slug' => 'allied-services',
        'parent_name' => 'Allied Growth, Automation & Consulting',
        'badge' => 'AUTOMATION',
        'badge_color' => 'emerald',
        'category' => 'growth',
        'category_name' => 'Growth & Automation',
        'icon' => 'fa-solid fa-gears',
        'meta_description' => 'Turnkey WhatsApp Business API chatbots, Google My Business (GMB) optimization, advanced GA4/Looker reporting, online reputation management, and executive consulting.',
        'hero_headline' => 'Unlock Operational Scale With <span class="gold-gradient-text">Intelligent Automation & ORM</span>.',
        'hero_lead' => 'We deploy enterprise WhatsApp chatbots, local search dominance, custom analytics reporting, and reputation defense shields to protect and scale your operations.',
        'overview' => 'True business scalability occurs when operations and customer interactions run automatically without friction. Web Optimizer builds specialized allied growth systems designed to streamline client touchpoints. From automated WhatsApp Business chatbots that qualify leads within seconds to Google My Business rank 1 dominance, executive reputation management, and real-time Looker Studio dashboards, we empower your business to run with clockwork precision.',
        'deliverables' => [
            [
                'title' => 'Official WhatsApp Business API & Conversational Chatbots',
                'desc' => 'Automate instant lead qualification, meeting bookings, and order updates with official green tick trust.'
            ],
            [
                'title' => 'Google Business Profile (GMB) Rank 1 Domination',
                'desc' => 'Weekly geo-tagged posting, category optimization, and review funnels to conquer local map packs.'
            ],
            [
                'title' => 'Advanced Web Analytics & Looker Studio Dashboards',
                'desc' => 'Real-time multi-channel attribution tracking connecting ad spend directly to closed customer revenue.'
            ],
            [
                'title' => 'Online Reputation Management (ORM) & Review Engineering',
                'desc' => 'Suppress defamatory search results, monitor brand sentiment 24/7, and generate verified 5-star reviews.'
            ],
            [
                'title' => 'Executive Digital Transformation Consulting',
                'desc' => 'CXO-level advisory on martech stack consolidation, software architecture, and acquisition funnels.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-bolt', 'title' => 'Sub-5 Second Lead Response', 'text' => 'Engage incoming inquiries immediately via WhatsApp before they leave your website.'],
            ['icon' => 'fa-shield-halved', 'title' => 'Bulletproof Online Reputation', 'text' => 'Protect your brand from unfair negative search results and competitor attacks.'],
            ['icon' => 'fa-chart-pie', 'title' => 'Total Data Transparency', 'text' => 'Real-time dashboards that prove exactly where your marketing revenue originates.'],
            ['icon' => 'fa-coins', 'title' => 'Eliminate Administrative Overhead', 'text' => 'Automate repetitive follow-ups and data entry, freeing staff to focus on high-value closing.'],
        ],
        'tech_stack' => ['Meta WhatsApp Cloud API', 'Google Business Profile Manager', 'Looker Studio', 'Brand24', 'Zapier / Make', 'CallRail'],
        'metrics' => [
            ['num' => '98%', 'label' => 'WhatsApp Message Open Rate'],
            ['num' => '<5s', 'label' => 'Automated Bot Response Time'],
            ['num' => '24/7', 'label' => 'Continuous Reputation Defense'],
        ],
        'faqs' => [
            [
                'q' => 'Can WhatsApp automation integrate with our existing website and CRM?',
                'a' => 'Yes. Every incoming WhatsApp lead, consultation request, or form submission automatically synchronizes with your CRM, Google Sheets, and team notifications.'
            ],
            [
                'q' => 'How does Online Reputation Management protect our company?',
                'a' => 'We monitor the web 24/7 for brand mentions, appeal false or defamatory reviews, and execute search suppression strategies to keep page 1 Google results positive and clean.'
            ],
            [
                'q' => 'What is the implementation timeline for allied growth services?',
                'a' => 'Most allied automations (WhatsApp chatbots, GMB optimization, and analytics dashboards) are fully configured and deployed within 5 to 10 business days.'
            ],
        ]
    ],

    'wordpress-development' => [
        'slug' => 'wordpress-development',
        'title' => 'Custom WordPress Website Development',
        'short_title' => 'WordPress Development',
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'badge' => 'ENTERPRISE CMS',
        'badge_color' => 'gold',
        'category' => 'web',
        'category_name' => 'Web & UI/UX',
        'icon' => 'fa-brands fa-wordpress',
        'meta_description' => 'Custom WordPress theme and architecture development with zero page builder bloat, Gutenberg custom blocks, ACF Pro, sub-second load times, and hardened security.',
        'hero_headline' => 'Bespoke <span class="gold-gradient-text">Enterprise WordPress</span> Built For Sub-Second Speed & Complete Editorial Control.',
        'hero_lead' => 'We hand-code clean, modular WordPress architectures tailored for high-growth enterprises—eliminating bloated commercial themes in favor of lightning-fast native Gutenberg blocks.',
        'overview' => 'WordPress powers over 43% of the internet, but standard pre-packaged themes suffer from severe code bloat, fragile dependencies, and sluggish load times. Web Optimizer engineers custom WordPress solutions from the core up. We build lightweight block patterns, custom post types, tailored admin controls, and object-cached database layers that empower your editorial team to publish seamlessly while maintaining flawless 95+ Google PageSpeed scores.',
        'deliverables' => [
            [
                'title' => 'Custom Theme Hierarchy & Native Gutenberg Blocks',
                'desc' => 'Handcrafted PHP templates and modular block patterns allowing editors to assemble rich pages without code.'
            ],
            [
                'title' => 'Advanced Custom Fields (ACF Pro) Architecture',
                'desc' => 'Structured content modeling with bespoke metaboxes and intuitive publishing controls tailored to your business.'
            ],
            [
                'title' => 'Database Optimization & Object Caching (Redis/Memcached)',
                'desc' => 'Optimized MySQL query schemas and in-memory object caching ensuring instant page response under high concurrency.'
            ],
            [
                'title' => 'REST API & Headless CMS Integrations',
                'desc' => 'Decoupled WordPress architectures feeding content into mobile apps, React/Vue frontends, and third-party CRMs.'
            ],
            [
                'title' => 'Multi-Tier Security Hardening & Zero-Vulnerability Protocols',
                'desc' => 'Custom login routing, two-factor authentication, XML-RPC disabling, and enterprise file integrity shields.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-bolt', 'title' => 'Sub-Second Page Loads', 'text' => 'Clean custom code eliminates 80% of unused scripts, guaranteeing green Core Web Vitals.'],
            ['icon' => 'fa-pen-ruler', 'title' => 'Intuitive Admin Panel', 'text' => 'No complex builder interfaces; your team can create landing pages in minutes.'],
            ['icon' => 'fa-shield-halved', 'title' => 'Fortified Security', 'text' => 'Custom architectures eliminate vulnerable third-party plugins that invite malware and hacks.'],
            ['icon' => 'fa-arrows-rotate', 'title' => 'Frictionless Upgrades', 'text' => 'Strict adherence to WordPress core standards ensures updates never break your site.'],
        ],
        'tech_stack' => ['PHP 8.2+', 'WordPress Core', 'ACF Pro', 'Gutenberg Blocks', 'Redis Caching', 'MySQL Indexing', 'Bootstrap 5', 'Cloudflare'],
        'metrics' => [
            ['num' => '99+', 'label' => 'Google PageSpeed Score'],
            ['num' => '<700ms', 'label' => 'Server Response (TTFB)'],
            ['num' => '100%', 'label' => 'Clean Code Compliance'],
        ],
        'faqs' => [
            [
                'q' => 'Can you migrate our existing bloated WordPress theme to a custom lightweight theme?',
                'a' => 'Yes. We specialize in non-destructive migrations—preserving all your existing posts, media, URLs, and SEO authority while rebuilding your frontend into a bespoke, sub-second architecture.'
            ],
            [
                'q' => 'Will my team be able to edit all sections without technical help?',
                'a' => 'Absolutely. We configure custom field groups and native Gutenberg blocks so that every headline, button, image, and testimonial is editable via a simple form.'
            ],
            [
                'q' => 'How do you ensure our WordPress site remains secure against brute-force attacks?',
                'a' => 'We implement custom login endpoints, non-standard database prefixes, strict file permissions, and cloud firewall rules that block automated exploit attempts before they reach the server.'
            ],
        ]
    ],

    'shopify-development' => [
        'slug' => 'shopify-development',
        'title' => 'Shopify Storefront & Liquid Architecture',
        'short_title' => 'Shopify Development',
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'badge' => 'D2C COMMERCE',
        'badge_color' => 'emerald',
        'category' => 'web',
        'category_name' => 'Web & UI/UX',
        'icon' => 'fa-brands fa-shopify',
        'meta_description' => 'Bespoke Shopify theme development, custom Liquid code, checkout conversion rate optimization, and third-party ERP integration for high-volume D2C brands.',
        'hero_headline' => 'Scale D2C Sales With <span class="gold-gradient-text">High-Velocity Shopify Storefronts</span> & Frictionless Checkout.',
        'hero_lead' => 'We design and code bespoke Shopify themes that combine luxury brand aesthetics with sub-second browsing speeds and streamlined checkout funnels.',
        'overview' => 'In direct-to-consumer e-commerce, user experience directly dictates your bottom line. Off-the-shelf Shopify templates are laden with generic code and conflicting app scripts that slow down product pages and elevate cart abandonment. Web Optimizer hand-crafts high-performance Shopify Liquid themes featuring bespoke product customizers, instant AJAX cart drawers, and frictionless one-page checkout flows designed to maximize average order value (AOV) and conversion rates.',
        'deliverables' => [
            [
                'title' => 'Custom Shopify Liquid Theme Development',
                'desc' => 'Bespoke theme built from scratch without bulky framework dependencies, fully compatible with Shopify 2.0.'
            ],
            [
                'title' => 'Instant AJAX Cart Drawer & Upsell Engine',
                'desc' => 'Slide-out cart drawer with dynamic free-shipping progress bars, in-cart cross-sells, and one-click coupon codes.'
            ],
            [
                'title' => 'Custom Product Customizers & Variant Selectors',
                'desc' => 'Tailored swatch pickers, bundle builders, and subscription selectors that streamline the purchase decision.'
            ],
            [
                'title' => 'Third-Party App Consolidation & Speed Optimization',
                'desc' => 'Eliminate 10+ slow app dependencies by hard-coding high-speed native JavaScript equivalents.'
            ],
            [
                'title' => 'ERP, Inventory & Shipping Logistics Integration',
                'desc' => 'Seamless API bridges connecting your Shopify store with Shiprocket, Delhivery, Zoho, and ERP systems.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-cart-shopping', 'title' => '+30% Checkout Conversion', 'text' => 'Optimized checkout flows and fast cart drawers reduce drop-offs dramatically.'],
            ['icon' => 'fa-gauge-high', 'title' => 'Sub-Second Product Loads', 'text' => 'Fast-loading product imagery and clean code keep mobile shoppers engaged.'],
            ['icon' => 'fa-dollar-sign', 'title' => 'Lower App Subscription Costs', 'text' => 'Native features replace monthly recurring fees from bloated third-party apps.'],
            ['icon' => 'fa-mobile-screen', 'title' => '100% Mobile D2C Polish', 'text' => 'Thumb-friendly navigation and instant payment methods including Apple Pay & UPI.'],
        ],
        'tech_stack' => ['Shopify OS 2.0', 'Liquid Engine', 'Tailwind / SCSS', 'Shopify Storefront API', 'AJAX Cart Endpoints', 'Klaviyo Integration'],
        'metrics' => [
            ['num' => '+32%', 'label' => 'Average Conversion Uplift'],
            ['num' => '<1.1s', 'label' => 'Mobile Product Page Load'],
            ['num' => '0', 'label' => 'Unused App Script Bloat'],
        ],
        'faqs' => [
            [
                'q' => 'Why build a custom Shopify theme instead of using an existing theme from the Shopify Store?',
                'a' => 'Commercial themes include hundreds of features your brand does not need, creating script clutter that hurts mobile conversion. A custom theme is precision-tailored to your exact catalog, brand aesthetic, and conversion funnel.'
            ],
            [
                'q' => 'Can you migrate our store from WooCommerce or Magento to Shopify?',
                'a' => 'Yes. We manage full data migrations including product catalogs, customer histories, order logs, and 301 redirect mapping to protect your organic SEO rankings.'
            ],
            [
                'q' => 'Do you support Shopify Plus and headless architectures?',
                'a' => 'Yes. We build advanced Shopify Plus architectures including custom checkout extensions (Checkout UI), B2B wholesale portals, and headless storefronts.'
            ],
        ]
    ],

    'custom-web-application' => [
        'slug' => 'custom-web-application',
        'title' => 'Custom Web Application & SaaS Portal Engineering',
        'short_title' => 'Custom Web Apps',
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'badge' => 'FULL STACK',
        'badge_color' => 'cyan',
        'category' => 'web',
        'category_name' => 'Web & UI/UX',
        'icon' => 'fa-solid fa-server',
        'meta_description' => 'Scalable custom web applications, SaaS dashboards, bespoke customer portals, and database-driven cloud solutions engineered with modern PHP and secure APIs.',
        'hero_headline' => 'Engineer Scalable <span class="gold-gradient-text">Custom Web Applications & Cloud Portals</span>.',
        'hero_lead' => 'When off-the-shelf software falls short, we engineer tailor-made web applications, high-security client portals, and bespoke SaaS platforms with enterprise data architecture.',
        'overview' => 'Generic SaaS tools often force businesses into clunky workarounds and recurring licensing fees. Web Optimizer designs and builds bespoke web applications engineered around your exact workflow. From multi-role customer portals and interactive calculation engines to secure B2B transaction hubs, our engineering team crafts fast, secure, and scalable architectures designed for enterprise longevity.',
        'deliverables' => [
            [
                'title' => 'Custom Portal & Multi-Role User Management',
                'desc' => 'Secure authentication, role-based access control (RBAC), and customizable executive dashboards.'
            ],
            [
                'title' => 'High-Performance Relational Database Architecture',
                'desc' => 'Optimized MySQL/PostgreSQL schema modeling with query indexing and automated data replication.'
            ],
            [
                'title' => 'RESTful API Engineering & Secure Endpoints',
                'desc' => 'Token-based API gateways enabling seamless communication between your web app and external platforms.'
            ],
            [
                'title' => 'Real-Time Interactive Data Tables & Reports',
                'desc' => 'Dynamic AJAX filtering, live status updates, and automated PDF/CSV report generation.'
            ],
            [
                'title' => 'Enterprise Security, Encryption & GDPR Compliance',
                'desc' => 'Bcrypt password hashing, CSRF shields, SQL injection prevention, and encrypted data at rest.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-cube', 'title' => '100% Tailored Workflows', 'text' => 'Software designed specifically for your operational procedures—no bloated excess.'],
            ['icon' => 'fa-unlock-keyhole', 'title' => 'Zero Monthly Seat Licenses', 'text' => 'Own your software asset outright without paying recurring per-user fees.'],
            ['icon' => 'fa-shield-halved', 'title' => 'Strict Data Confidentiality', 'text' => 'Your proprietary client data remains solely on your private, dedicated server infrastructure.'],
            ['icon' => 'fa-chart-line', 'title' => 'Infinite Horizontal Scalability', 'text' => 'Engineered to handle exponential user growth without architecture redesigns.'],
        ],
        'tech_stack' => ['PHP 8.2+', 'MySQL / MariaDB', 'Bootstrap 5', 'Vanilla JS (ES6+)', 'REST APIs', 'JWT Authentication', 'Redis Cache', 'NGINX'],
        'metrics' => [
            ['num' => '99.9%', 'label' => 'Guaranteed SLA Uptime'],
            ['num' => '<300ms', 'label' => 'Average Query Execution'],
            ['num' => '100%', 'label' => 'Proprietary IP Ownership'],
        ],
        'faqs' => [
            [
                'q' => 'How do you handle data security in custom web applications?',
                'a' => 'We apply OWASP Top 10 security standards: parameterized SQL queries, strict CSRF token validation, data sanitization, SSL/TLS encryption, and multi-factor authentication (MFA).'
            ],
            [
                'q' => 'Do we own the full source code once the application is built?',
                'a' => 'Yes. You receive 100% intellectual property ownership of the codebase, documentation, and database schemas with zero vendor lock-in.'
            ],
            [
                'q' => 'Can the application integrate with our existing accounting or ERP software?',
                'a' => 'Yes. We build custom API endpoints and webhooks to synchronize data automatically with Tally, SAP, Zoho, QuickBooks, and payment gateways.'
            ],
        ]
    ],

    'api-integrations' => [
        'slug' => 'api-integrations',
        'title' => 'Custom API Integration & Webhook Architecture',
        'short_title' => 'API Integrations',
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'badge' => 'CONNECTIVITY',
        'badge_color' => 'cyan',
        'category' => 'web',
        'category_name' => 'Web & UI/UX',
        'icon' => 'fa-solid fa-network-wired',
        'meta_description' => 'Seamless third-party API integrations, payment gateways (Razorpay, Stripe), CRM synchronization, shipping webhooks, and automated data pipelines.',
        'hero_headline' => 'Unify Your Digital Ecosystem With <span class="gold-gradient-text">Precision API & Webhook Bridges</span>.',
        'hero_lead' => 'We engineer secure, low-latency API connections and automated webhook handlers that synchronize customer data, payments, inventory, and lead pipelines without manual effort.',
        'overview' => 'Modern business requires interconnected systems. Disjointed applications lead to lost leads, manual data-entry errors, and frustrated customers. Web Optimizer architects robust API integrations and bi-directional synchronization pipelines connecting your website with payment gateways, CRMs, shipping providers, and marketing automation platforms. Every integration is built with failover logging, request retry logic, and end-to-end encryption.',
        'deliverables' => [
            [
                'title' => 'Payment Gateway Handshakes (Razorpay, Stripe, CCAvenue)',
                'desc' => 'Flawless checkout integrations supporting UPI auto-debit, international cards, and automated refund hooks.'
            ],
            [
                'title' => 'CRM & Lead Routing Bridges (HubSpot, Zoho, Salesforce)',
                'desc' => 'Real-time synchronization of inbound leads, consultation requests, and custom attribution parameters.'
            ],
            [
                'title' => 'Shipping Logistics & Courier APIs (Shiprocket, Delhivery)',
                'desc' => 'Automated AWB generation, real-time rate calculation at checkout, and customer tracking webhooks.'
            ],
            [
                'title' => 'WhatsApp Business API & Automated Notification Triggers',
                'desc' => 'Instant WhatsApp order confirmations, delivery updates, and lead alerts delivered to team phones.'
            ],
            [
                'title' => 'Error Logging, Queue Management & Retry Mechanics',
                'desc' => 'Resilient asynchronous message queues ensuring no API payload is lost during network dropouts.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-clock', 'title' => 'Zero Manual Data Entry', 'text' => 'Automate repetitive administrative workflows and eliminate human error completely.'],
            ['icon' => 'fa-bolt', 'title' => 'Real-Time Sync', 'text' => 'Data reflects across your website, CRM, and accounting software in milliseconds.'],
            ['icon' => 'fa-shield-halved', 'title' => 'Encrypted Transmissions', 'text' => 'HMAC signature verification and SSL/TLS encryption protect sensitive financial payloads.'],
            ['icon' => 'fa-rotate', 'title' => 'Failover Reliability', 'text' => 'Automatic retry queues guarantee delivery even if an external provider undergoes downtime.'],
        ],
        'tech_stack' => ['RESTful APIs', 'cURL / Guzzle', 'Webhooks & HMAC', 'OAuth 2.0', 'Razorpay & Stripe APIs', 'JSON / XML Pipelines', 'Redis Queues'],
        'metrics' => [
            ['num' => '99.99%', 'label' => 'Webhook Delivery Success'],
            ['num' => '<150ms', 'label' => 'Payload Response Time'],
            ['num' => '0', 'label' => 'Data Loss with Queue Handlers'],
        ],
        'faqs' => [
            [
                'q' => 'Can you integrate custom or legacy internal software with no public API?',
                'a' => 'Yes. If your internal database or software supports ODBC, SQL queries, or file exports (CSV/XML), we can engineer a custom bridge to synchronize data seamlessly.'
            ],
            [
                'q' => 'How do you prevent duplicate charges or double lead submissions?',
                'a' => 'We implement idempotent request headers and database transaction locking, guaranteeing that a payload is processed exactly once even if network retries occur.'
            ],
            [
                'q' => 'What payment gateways do you support for domestic and international clients?',
                'a' => 'We support all major gateways including Razorpay, Stripe, Cashfree, PayU, CCAvenue, PayPal, Apple Pay, and Google Pay with multi-currency conversion.'
            ],
        ]
    ],

    'website-maintenance' => [
        'slug' => 'website-maintenance',
        'title' => 'Website Maintenance, Security & Speed AMC',
        'short_title' => 'Website Maintenance',
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'badge' => '24/7 UPTIME',
        'badge_color' => 'emerald',
        'category' => 'web',
        'category_name' => 'Web & UI/UX',
        'icon' => 'fa-solid fa-screwdriver-wrench',
        'meta_description' => 'Comprehensive annual maintenance contracts (AMC), proactive security patching, daily offsite backups, core speed optimization, and 24/7 technical support.',
        'hero_headline' => 'Proactive <span class="gold-gradient-text">Website Maintenance & Security AMC</span> For Total Peace Of Mind.',
        'hero_lead' => 'We protect and maintain your digital flagship with 24/7 uptime monitoring, daily automated off-site backups, routine security patching, and ongoing speed optimization.',
        'overview' => 'A high-value website requires continual maintenance to sustain peak speed, resist evolving security threats, and operate without downtime. Neglected platforms accumulate plugin conflicts, database bloat, and security vulnerabilities. Web Optimizer provides executive Annual Maintenance Contracts (AMC) managed directly by senior web developers. We monitor your site around the clock, conduct regular staging updates, and perform emergency restorations within minutes.',
        'deliverables' => [
            [
                'title' => '24/7 Real-Time Uptime & Heartbeat Monitoring',
                'desc' => 'Instant alerting on server downtime, SSL expiration, or critical HTTP errors with 15-minute response times.'
            ],
            [
                'title' => 'Automated Daily Off-Site Cloud Backups',
                'desc' => 'Encrypted full-site backups stored securely on Amazon S3 with one-click disaster recovery.'
            ],
            [
                'title' => 'Safe Staging Updates & Regression Testing',
                'desc' => 'All WordPress core, theme, and plugin updates are tested on staging servers before deploying to production.'
            ],
            [
                'title' => 'Continuous Database Cleanup & Speed Upkeep',
                'desc' => 'Periodic clearing of transient data, post revisions, and database query re-indexing to maintain sub-second speed.'
            ],
            [
                'title' => 'Dedicated Monthly Engineering Hours',
                'desc' => 'Direct access to senior developers for banner updates, copy changes, new feature additions, and speed audits.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-shield-halved', 'title' => 'Zero Downtime or Hacks', 'text' => 'Proactive patching prevents 99.9% of common web exploits and malware infections.'],
            ['icon' => 'fa-gauge-high', 'title' => 'Sustained 95+ PageSpeed', 'text' => 'Ongoing cache tuning prevents performance decay over time.'],
            ['icon' => 'fa-clock-rotate-left', 'title' => 'Instant Disaster Recovery', 'text' => 'Restore any previous version within minutes in the event of server corruption.'],
            ['icon' => 'fa-user-gear', 'title' => 'Direct Senior Developer Access', 'text' => 'No call-center runarounds; deal directly with experienced web engineers.'],
        ],
        'tech_stack' => ['AWS S3 Backups', 'UptimeRobot API', 'Staging Deployments', 'Malware Scanners', 'Git Version Control', 'SSL Cert Handlers', 'Cloudflare WAF'],
        'metrics' => [
            ['num' => '99.95%', 'label' => 'Average Client Uptime'],
            ['num' => '<15min', 'label' => 'Emergency Response SLA'],
            ['num' => '100%', 'label' => 'Off-Site Backup Redundancy'],
        ],
        'faqs' => [
            [
                'q' => 'What happens if our website goes down outside of business hours?',
                'a' => 'Our automated monitoring pings your server every 60 seconds. In the rare event of an outage, our on-call engineering team receives immediate SMS alerts and initiates triage immediately.'
            ],
            [
                'q' => 'Can we use our monthly maintenance hours for adding new landing pages?',
                'a' => 'Yes. Unused monthly hours can be allocated toward content updates, new page designs, form enhancements, or speed audits.'
            ],
            [
                'q' => 'Do you clean malware if our existing site was already hacked before joining?',
                'a' => 'Yes. We offer emergency malware removal and site disinfection services to clean corrupted files, restore clean backups, and harden server access.'
            ],
        ]
    ],

    'seo-audit' => [
        'slug' => 'seo-audit',
        'title' => 'Comprehensive SEO Audit & Crawl Diagnostics',
        'short_title' => 'SEO Audit Services',
        'parent_slug' => 'ai-seo',
        'parent_name' => 'AI SEO & Search Engine Optimization',
        'badge' => 'IN-DEPTH AUDIT',
        'badge_color' => 'gold',
        'category' => 'growth',
        'category_name' => 'AI SEO & Growth',
        'icon' => 'fa-solid fa-magnifying-glass-chart',
        'meta_description' => 'Deep technical SEO audits analyzing crawlability, indexation bloat, Core Web Vitals, backlink quality, semantic content gaps, and ranking barriers.',
        'hero_headline' => 'Uncover Hidden Ranking Barriers With An <span class="gold-gradient-text">Executive Technical SEO Audit</span>.',
        'hero_lead' => 'We perform deep-dive technical diagnostics across your entire domain—identifying crawl budget leaks, indexing errors, schema gaps, and speed bottlenecks that suppress Google rankings.',
        'overview' => 'Most SEO audits produce generic 50-page automated PDF reports that offer zero practical value. Web Optimizer conducts forensic manual audits backed by code-level analysis. We inspect server log files, analyze JavaScript rendering behavior, review internal link topology, and dissect competitor ranking moats. Every audit concludes with a prioritized, developer-ready execution roadmap that shows you exactly what code to modify to trigger organic ranking gains.',
        'deliverables' => [
            [
                'title' => 'Server Log File & Crawl Budget Analysis',
                'desc' => 'Identify how Googlebot explores your domain, eliminate crawler traps, and direct crawlers to high-value pages.'
            ],
            [
                'title' => 'Indexation Health & Canonical Audit',
                'desc' => 'Detect orphaned pages, non-indexable status codes, redirect chains, and duplicate parameter bloat.'
            ],
            [
                'title' => 'Core Web Vitals & Frontend Performance Diagnostics',
                'desc' => 'Pinpoint render-blocking scripts, unoptimized assets, and layout shifts hurting Google Page Experience scores.'
            ],
            [
                'title' => 'Structured Data & Schema.org Rich Result Verification',
                'desc' => 'Audit JSON-LD markup to ensure full qualification for Google FAQs, reviews, breadcrumbs, and snippets.'
            ],
            [
                'title' => 'Competitor Reverse-Engineering & Keyword Gap Analysis',
                'desc' => 'Identify high-intent commercial keywords where your competitors are capturing market share that belongs to you.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-bullseye', 'title' => 'Identify Exact Bottlenecks', 'text' => 'Know precisely why your rankings have stagnated or declined.'],
            ['icon' => 'fa-code', 'title' => 'Developer-Ready Action Plan', 'text' => 'Detailed tickets with code snippets and server directives ready for implementation.'],
            ['icon' => 'fa-arrow-trend-up', 'title' => 'Fast Ranking Recovers', 'text' => 'Resolving technical barriers often produces noticeable ranking lifts in 2 to 4 weeks.'],
            ['icon' => 'fa-shield', 'title' => 'Algorithm Penalty Protection', 'text' => 'Detect and resolve toxic links or thin content before Google penalties strike.'],
        ],
        'tech_stack' => ['Screaming Frog SEO Spider', 'Google Search Console', 'Ahrefs Enterprise', 'SEMrush', 'Google Lighthouse', 'Deep Log Analyzer'],
        'metrics' => [
            ['num' => '100%', 'label' => 'Crawl Barrier Detection'],
            ['num' => '48h', 'label' => 'Comprehensive Audit Turnaround'],
            ['num' => '+45%', 'label' => 'Avg Crawl Efficiency Lift'],
        ],
        'faqs' => [
            [
                'q' => 'How is your SEO audit different from free online audit tools?',
                'a' => 'Free automated checkers only look at basic surface tags like title lengths. Our manual audit inspects server response headers, log files, JavaScript rendering, internal PageRank flow, and competitive entity gaps.'
            ],
            [
                'q' => 'Will you implement the fixes identified in the audit?',
                'a' => 'Yes. As full-stack web engineers and technical SEO specialists, our team can implement every single recommendation directly on your website.'
            ],
            [
                'q' => 'How often should a business perform a comprehensive SEO audit?',
                'a' => 'We recommend a deep audit at least twice a year, or immediately before and after any major website redesign or CMS migration.'
            ],
        ]
    ],

    'local-seo' => [
        'slug' => 'local-seo',
        'title' => 'Local SEO & Google Maps (GMB) Dominance',
        'short_title' => 'Local SEO Services',
        'parent_slug' => 'ai-seo',
        'parent_name' => 'AI SEO & Search Engine Optimization',
        'badge' => 'MAP PACK TOP 3',
        'badge_color' => 'gold',
        'category' => 'growth',
        'category_name' => 'AI SEO & Growth',
        'icon' => 'fa-solid fa-location-dot',
        'meta_description' => 'Dominate Google Local 3-Pack and Maps rankings, optimize Google Business Profile, build authoritative local citations, and capture high-intent near-me buyers.',
        'hero_headline' => 'Dominate The Google Map Pack & Capture <span class="gold-gradient-text">High-Intent Local Customers</span>.',
        'hero_lead' => 'We engineer local search dominance—securing top 3 rankings on Google Maps and Local Pack queries for businesses looking to attract affluent clients in their geographic market.',
        'overview' => 'Over 46% of all Google searches have local commercial intent, and 78% of local mobile searches result in an offline purchase within 24 hours. Web Optimizer deploys hyper-local SEO campaigns engineered to conquer the coveted Google Local 3-Pack. We optimize your Google Business Profile, inject geo-specific Schema.org markup, build consistent local directory citations, and establish review funnels that position your firm as the undisputed local authority.',
        'deliverables' => [
            [
                'title' => 'Google Business Profile (GBP) Surgical Optimization',
                'desc' => 'Complete profile configuration with strategic primary/secondary categories, geo-tagged photos, and keyword-rich copy.'
            ],
            [
                'title' => 'Geo-Targeted Schema.org Structured Data',
                'desc' => 'Inject LocalBusiness JSON-LD markup with precise latitude/longitude, opening hours, service areas, and reviews.'
            ],
            [
                'title' => 'High-Authority Local NAP Citation Syndication',
                'desc' => 'Build and audit Name, Address, Phone (NAP) consistency across 50+ tier-1 business directories and maps.'
            ],
            [
                'title' => 'Automated 5-Star Customer Review Generation Pipeline',
                'desc' => 'WhatsApp and SMS review funnels that guide happy clients effortlessly toward leaving 5-star Google feedback.'
            ],
            [
                'title' => 'Hyper-Local Landing Pages & Neighborhood Targeting',
                'desc' => 'Dedicated service area pages crafted to rank for neighborhood and regional "near me" search queries.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-map-pin', 'title' => 'Google Maps Top 3 Placement', 'text' => 'Appear in front of prospects the exact moment they need your service locally.'],
            ['icon' => 'fa-phone-volume', 'title' => '+60% Direct Inbound Phone Calls', 'text' => 'Map pack placement drives direct click-to-call conversions with high commercial intent.'],
            ['icon' => 'fa-star', 'title' => 'Dominant Review Reputation', 'text' => 'Outshine local competitors with an authentic, verified 5-star Google review portfolio.'],
            ['icon' => 'fa-mobile-screen', 'title' => 'Mobile "Near Me" Supremacy', 'text' => 'Capture affluent mobile searchers looking for services in your immediate vicinity.'],
        ],
        'tech_stack' => ['Google Business Profile Manager', 'BrightLocal', 'Whitespark', 'Geo-Coordinates JSON-LD', 'Google Maps API', 'Local Falcon'],
        'metrics' => [
            ['num' => 'Top 3', 'label' => 'Average Google Map Pack Position'],
            ['num' => '+74%', 'label' => 'Increase in Direct Inbound Calls'],
            ['num' => '100%', 'label' => 'NAP Consistency Across Directories'],
        ],
        'faqs' => [
            [
                'q' => 'How long does it take to rank in Google Local 3-Pack?',
                'a' => 'Most clients see substantial rank improvements in their primary service area within 30 to 60 days of profile optimization, citation cleanup, and geo-schema implementation.'
            ],
            [
                'q' => 'Can you help us rank in neighboring cities where we do not have physical offices?',
                'a' => 'Yes. We build geo-targeted service area pages and optimize your Google profile service radii to capture high-value search intent in surrounding localities.'
            ],
            [
                'q' => 'How do you handle inconsistent phone numbers or old business addresses?',
                'a' => 'We conduct a complete NAP citation audit and manually claim, update, or remove incorrect listings across all major data aggregators.'
            ],
        ]
    ],

    'link-building' => [
        'slug' => 'link-building',
        'title' => 'High-Authority Link Building & Digital PR Outreach',
        'short_title' => 'Link Building Services',
        'parent_slug' => 'ai-seo',
        'parent_name' => 'AI SEO & Search Engine Optimization',
        'badge' => 'HIGH DA BACKLINKS',
        'badge_color' => 'gold',
        'category' => 'growth',
        'category_name' => 'AI SEO & Growth',
        'icon' => 'fa-solid fa-link',
        'meta_description' => 'White-hat manual link building, digital PR outreach, editorial guest placements, and niche-relevant backlink acquisition to elevate Domain Authority.',
        'hero_headline' => 'Elevate Domain Authority With <span class="gold-gradient-text">High-Authority Editorial Backlinks</span> & Digital PR.',
        'hero_lead' => 'We execute bespoke, white-hat link acquisition campaigns—securing contextual placements on real, high-traffic publications to compound your domain authority and organic rankings.',
        'overview' => 'Backlinks remain one of Google\'s primary organic ranking signals, but low-quality link farms and automated PBNs guarantee algorithmic penalties. Web Optimizer executes 100% manual, editorial link outreach. We identify tier-1 industry publications, craft authoritative data-driven studies, and build real relationships with journalists and editors. Every backlink we secure is contextual, do-follow, and hosted on genuine websites with real organic traffic.',
        'deliverables' => [
            [
                'title' => 'Manual Editorial Outreach on Real Traffic Websites',
                'desc' => 'Bespoke relationship outreach securing contextual brand mentions on genuine publications (DA 50+).'
            ],
            [
                'title' => 'Digital PR & Original Industry Data Studies',
                'desc' => 'Create newsworthy industry statistics and surveys that attract organic citations from top media outlets.'
            ],
            [
                'title' => 'Strategic Anchor Text Distribution Architecture',
                'desc' => 'Maintain natural brand, exact-match, and partial-match anchor text ratios immune to Google Penguin filters.'
            ],
            [
                'title' => 'Competitor Backlink Intersect & Replication',
                'desc' => 'Reverse-engineer the backlink profiles of page-1 competitors to capture their strongest referral links.'
            ],
            [
                'title' => 'Toxic Link Disavow & Spam Cleaning',
                'desc' => 'Continuous backlink auditing to identify and disavow harmful automated scrape sites and negative SEO attacks.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-chart-line', 'title' => 'Accelerated Domain Authority (DA)', 'text' => 'High-quality backlinks directly elevate your site\'s baseline algorithmic trust in Google.'],
            ['icon' => 'fa-award', 'title' => 'Top 3 Keyword Rankings', 'text' => 'Competitive commercial keywords require high-authority link equity to reach page 1.'],
            ['icon' => 'fa-users', 'title' => 'Referral Traffic', 'text' => 'Gain qualified referral visitors from authoritative industry publications and news portals.'],
            ['icon' => 'fa-shield-halved', 'title' => '100% White-Hat Safety', 'text' => 'No PBNs, no link farms, and zero risk of manual Google search penalties.'],
        ],
        'tech_stack' => ['Ahrefs Site Explorer', 'Pitchbox', 'Hunter.io', 'BuzzStream', 'SEMrush Authority Score', 'Google Disavow Tool'],
        'metrics' => [
            ['num' => 'DA 50-80+', 'label' => 'Average Placement Authority'],
            ['num' => '100%', 'label' => 'Do-Follow Editorial Links'],
            ['num' => '0', 'label' => 'Automated Link Networks / PBNs'],
        ],
        'faqs' => [
            [
                'q' => 'Do you use Private Blog Networks (PBNs) or paid link farms?',
                'a' => 'Never. PBNs and link farms are toxic and result in permanent Google de-indexation. We only secure genuine editorial links on real websites with established organic traffic.'
            ],
            [
                'q' => 'How many backlinks do we need to rank on page 1?',
                'a' => 'Quality matters infinitely more than quantity. A single backlink from an authoritative DA 75 publication has greater ranking impact than hundreds of low-tier forum links.'
            ],
            [
                'q' => 'Do you provide a full transparent report of secured links?',
                'a' => 'Yes. Every client receives live reporting detailing the exact publishing URL, Domain Authority, organic traffic metrics, and anchor text used.'
            ],
        ]
    ],

    'on-page-seo' => [
        'slug' => 'on-page-seo',
        'title' => 'On-Page SEO Optimization & Semantic Content Architecture',
        'short_title' => 'On-Page SEO',
        'parent_slug' => 'ai-seo',
        'parent_name' => 'AI SEO & Search Engine Optimization',
        'badge' => 'TOPICAL AUTHORITY',
        'badge_color' => 'gold',
        'category' => 'growth',
        'category_name' => 'AI SEO & Growth',
        'icon' => 'fa-solid fa-file-lines',
        'meta_description' => 'Advanced on-page SEO, entity-based keyword optimization, semantic search alignment, header tag hierarchy, and internal PageRank link sculpting.',
        'hero_headline' => 'Maximize Organic Relevance With <span class="gold-gradient-text">Semantic On-Page SEO</span> & Entity Clustering.',
        'hero_lead' => 'We re-architect your landing pages and content around modern semantic search engines—optimizing topical entities, heading structures, internal links, and search intent.',
        'overview' => 'Google no longer ranks pages based on simple keyword stuffing; modern search algorithms evaluate semantic topical completeness and entity relationships. Web Optimizer restructures your on-page architecture to satisfy both AI crawlers and human readers. We optimize heading hierarchies (H1-H4), sculpt internal PageRank flow, write compelling click-optimized metadata, and integrate rich JSON-LD schema to secure dominant positions for your most profitable keywords.',
        'deliverables' => [
            [
                'title' => 'Topical Entity & Search Intent Alignment',
                'desc' => 'Map target queries to search intent and inject missing semantic entities to build topical authority.'
            ],
            [
                'title' => 'Click-Through Rate (CTR) Optimized Metadata',
                'desc' => 'Craft irresistible title tags and meta descriptions with emotional hooks and character-count precision.'
            ],
            [
                'title' => 'Heading Structure (H1-H4) & Readability Tuning',
                'desc' => 'Reorganize content hierarchy with scannable headings, bulleted lists, and structured summary cards.'
            ],
            [
                'title' => 'Internal PageRank Link Sculpting',
                'desc' => 'Strategically link sub-pages to parent cornerstone assets to channel maximum link authority across your domain.'
            ],
            [
                'title' => 'Image SEO & Alt Attribute Optimization',
                'desc' => 'Optimize image filenames, WebP compression, descriptive alt tags, and lazy loading for Google Image search.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-arrow-up-right-dots', 'title' => '+40% Organic CTR', 'text' => 'Compelling title tags and meta descriptions attract more clicks from existing search impressions.'],
            ['icon' => 'fa-brain', 'title' => 'Topical Authority Moat', 'text' => 'Comprehensive semantic coverage signals to Google that you are the authoritative industry source.'],
            ['icon' => 'fa-network-wired', 'title' => 'Better Internal Link Flow', 'text' => 'Channel PageRank smoothly toward your primary revenue-generating landing pages.'],
            ['icon' => 'fa-bolt', 'title' => 'Sub-Second Page Experience', 'text' => 'Clean HTML layouts improve engagement metrics and reduce bounce rates.'],
        ],
        'tech_stack' => ['SurferSEO', 'Clearscope', 'Google Search Console', 'Ahrefs Content Explorer', 'Schema.org JSON-LD', 'Yoast / RankMath'],
        'metrics' => [
            ['num' => '+48%', 'label' => 'Average Organic Traffic Growth'],
            ['num' => '100%', 'label' => 'Topical Entity Coverage'],
            ['num' => '1st Page', 'label' => 'Target Search Intent Match'],
        ],
        'faqs' => [
            [
                'q' => 'How does On-Page SEO work alongside Technical SEO?',
                'a' => 'Technical SEO ensures search engines can crawl, index, and load your website efficiently. On-Page SEO ensures that once crawlers arrive, they recognize your content as the most relevant and authoritative answer on the web.'
            ],
            [
                'q' => 'Will updating on-page content harm our existing rankings?',
                'a' => 'No. We conduct pre-optimization keyword tracking to ensure all existing high-ranking keywords are preserved, and only expand content with missing semantic entities.'
            ],
            [
                'q' => 'How long until on-page optimizations take effect?',
                'a' => 'Once Google recrawls the updated pages (usually within 7 to 21 days), ranking and click-through improvements become visible in Google Search Console.'
            ],
        ]
    ],

    'off-page-seo' => [
        'slug' => 'off-page-seo',
        'title' => 'Off-Page SEO & Brand Authority Outreach',
        'short_title' => 'Off-Page SEO',
        'parent_slug' => 'ai-seo',
        'parent_name' => 'AI SEO & Search Engine Optimization',
        'badge' => 'DOMAIN TRUST',
        'badge_color' => 'gold',
        'category' => 'growth',
        'category_name' => 'AI SEO & Growth',
        'icon' => 'fa-solid fa-bullhorn',
        'meta_description' => 'Strategic off-page SEO, brand mention amplification, digital PR, podcast citations, unlinked brand mention claims, and domain reputation building.',
        'hero_headline' => 'Build Irresistible Market Trust With <span class="gold-gradient-text">Off-Page SEO & Brand Authority</span>.',
        'hero_lead' => 'We expand your digital footprint beyond your website—earning authoritative brand mentions, executive quotes, digital PR coverage, and trust signals that search engines reward.',
        'overview' => 'Search engines evaluate external signals across the entire web to determine your company\'s credibility. Having a great website is not enough if your brand has no presence in external conversations. Web Optimizer executes comprehensive off-page campaigns that establish your company as a recognized industry leader. We claim unlinked brand mentions, secure guest contributor columns, coordinate executive podcast appearances, and build trust signals.',
        'deliverables' => [
            [
                'title' => 'Unlinked Brand Mention Claiming & Reclamation',
                'desc' => 'Scan the web for mentions of your company and founder and convert them into authoritative backlinks.'
            ],
            [
                'title' => 'Executive Guest Contributor Placements',
                'desc' => 'Ghostwrite and place high-level industry thought leadership articles on prominent editorial platforms.'
            ],
            [
                'title' => 'Digital PR & Corporate News Distribution',
                'desc' => 'Distribute optimized corporate announcements, milestone press releases, and research findings.'
            ],
            [
                'title' => 'Podcast & Media Interview Placement',
                'desc' => 'Position your founder and executives on top business podcasts, earning high-authority show-note backlinks.'
            ],
            [
                'title' => 'Brand Entity Verification on Google Knowledge Graph',
                'desc' => 'Synchronize brand references across Wikidata, Crunchbase, and directories to establish a verified Google Knowledge Panel.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-crown', 'title' => 'Industry Leadership', 'text' => 'Position your leadership team as go-to experts in your market niche.'],
            ['icon' => 'fa-shield-halved', 'title' => 'Knowledge Graph Authority', 'text' => 'Secure a verified Google Knowledge Panel and entity recognition.'],
            ['icon' => 'fa-link', 'title' => 'Contextual Inbound Equity', 'text' => 'Earn organic editorial links that reinforce your technical SEO foundation.'],
            ['icon' => 'fa-handshake', 'title' => 'Direct Partnership Opportunities', 'text' => 'Media coverage drives high-ticket B2B inquiries and investor interest.'],
        ],
        'tech_stack' => ['Brand24', 'HARO / Connectively', 'Ahrefs Brand Mentions', 'Google Knowledge Graph API', 'Muck Rack', 'Wikidata'],
        'metrics' => [
            ['num' => '100%', 'label' => 'Brand Entity Recognition'],
            ['num' => '+65%', 'label' => 'Growth in Branded Search Volume'],
            ['num' => 'Top Tier', 'label' => 'Media Outlet Placements'],
        ],
        'faqs' => [
            [
                'q' => 'What is the difference between off-page SEO and link building?',
                'a' => 'Link building is a specific subset of off-page SEO focused on backlinks. Off-page SEO includes the complete external ecosystem: digital PR, unlinked brand mentions, social signals, podcast features, and Google Knowledge Graph entity building.'
            ],
            [
                'q' => 'Can off-page SEO help our brand get a Google Knowledge Panel?',
                'a' => 'Yes. By establishing clear entity relationships across verified databases (Wikidata, Crunchbase, press releases, and structured schema), we help Google assemble a verified Knowledge Panel for your brand.'
            ],
            [
                'q' => 'Do you ghostwrite the media articles on our behalf?',
                'a' => 'Yes. Our senior editorial team researches, writes, and edits all thought leadership articles, submitting them for your final review before pitching to publications.'
            ],
        ]
    ],

    'content-writing' => [
        'slug' => 'content-writing',
        'title' => 'SEO Content Writing & Conversion Copywriting',
        'short_title' => 'Content Writing Agency',
        'parent_slug' => 'ai-seo',
        'parent_name' => 'AI SEO & Search Engine Optimization',
        'badge' => 'EDITORIAL EXCELLENCE',
        'badge_color' => 'gold',
        'category' => 'growth',
        'category_name' => 'AI SEO & Growth',
        'icon' => 'fa-solid fa-pen-nib',
        'meta_description' => 'High-retention SEO blog writing, conversion copywriting, executive thought leadership, and technical whitepapers engineered to rank on page 1 and convert readers.',
        'hero_headline' => 'Captivate High-Value Clients With <span class="gold-gradient-text">Elite SEO & Conversion Copywriting</span>.',
        'hero_lead' => 'We craft compelling, data-backed articles, landing page copy, and executive thought leadership pieces engineered to satisfy both search engine algorithms and discerning human buyers.',
        'overview' => 'Generic AI-generated filler content damages brand credibility and fails to rank in modern search results. Web Optimizer delivers artisanal content writing crafted by senior subject matter specialists. We combine deep competitive keyword research with persuasive behavioral copywriting principles. Every piece is meticulously researched, structured for scannability, and infused with authoritative insights that keep readers engaged from the first sentence to the final call to action.',
        'deliverables' => [
            [
                'title' => 'In-Depth Cornerstone SEO Guides & Pillar Articles',
                'desc' => 'Long-form, comprehensive 2,500+ word authority guides engineered to dominate competitive commercial keywords.'
            ],
            [
                'title' => 'High-Converting Landing Page Sales Copy',
                'desc' => 'Persuasive sales copy written with proven psychological frameworks (PAS, AIDA) that drive immediate action.'
            ],
            [
                'title' => 'Executive Ghostwriting & Thought Leadership',
                'desc' => 'Articles and LinkedIn essays crafted for founders and CEOs that establish authoritative market prestige.'
            ],
            [
                'title' => 'Case Study & Success Story Journalism',
                'desc' => 'Compelling narrative case studies detailing client challenges, methodologies, and quantitative results.'
            ],
            [
                'title' => 'Conversion Rate Optimization Copy Tuning',
                'desc' => 'Iterative testing of micro-copy, hero headlines, form labels, and CTAs to increase inquiry conversions.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-book-open', 'title' => 'Zero AI Fluff', 'text' => 'Original, deeply researched content that reflects authentic human expertise and industry nuance.'],
            ['icon' => 'fa-arrow-trend-up', 'title' => 'Top Google Rankings', 'text' => 'Written to satisfy Google E-E-A-T (Experience, Expertise, Authoritativeness, Trustworthiness).'],
            ['icon' => 'fa-mouse-pointer', 'title' => 'Higher Conversion Velocity', 'text' => 'Engaging storytelling and clear value propositions convert readers into qualified leads.'],
            ['icon' => 'fa-clock', 'title' => 'Extended Time-on-Page', 'text' => 'Rich formatting, scannable layouts, and custom graphics lower bounce rates significantly.'],
        ],
        'tech_stack' => ['Grammarly Business', 'Hemingway Editor', 'SurferSEO', 'Copyscape Premium', 'Google Docs / Notion', 'Keyword Insights'],
        'metrics' => [
            ['num' => '100%', 'label' => 'Human-Crafted Originality'],
            ['num' => '4.5min', 'label' => 'Average Reader Dwell Time'],
            ['num' => 'Top 3', 'label' => 'Keyword Target Ranking Rate'],
        ],
        'faqs' => [
            [
                'q' => 'Do you use automated AI tools to write your articles?',
                'a' => 'No. While we use data tools for keyword research and semantic entity mapping, every sentence is handcrafted and reviewed by experienced human copywriters with real industry expertise.'
            ],
            [
                'q' => 'How do you ensure the content matches our brand voice and tone?',
                'a' => 'Before writing, we create a custom brand voice guide capturing your preferred vocabulary, sentence rhythm, formal/conversational register, and forbidden phrases.'
            ],
            [
                'q' => 'Do you provide graphics and featured imagery for the articles?',
                'a' => 'Yes. Every article includes custom featured banners, inline infographics, and formatted charts ready for direct publishing on your CMS.'
            ],
        ]
    ],

    'google-ads' => [
        'slug' => 'google-ads',
        'title' => 'Google Ads Management (PPC, Search & Performance Max)',
        'short_title' => 'Google Ads & PPC',
        'parent_slug' => 'performance-marketing',
        'parent_name' => 'Performance Marketing & Paid Acquisition',
        'badge' => 'HIGH INTENT',
        'badge_color' => 'cyan',
        'category' => 'growth',
        'category_name' => 'Performance Ads',
        'icon' => 'fa-brands fa-google',
        'meta_description' => 'ROI-driven Google Ads management, Search PPC, Performance Max, Google Shopping, and negative keyword sculpting designed to maximize commercial ROAS.',
        'hero_headline' => 'Capture High-Intent Buyers With <span class="gold-gradient-text">Precision Google Ads & PPC</span>.',
        'hero_lead' => 'We engineer high-ROI Google Ads campaigns that place your business in front of qualified buyers at the exact moment they search for your high-value services.',
        'overview' => 'Google Ads is the fastest channel to capture commercial intent, but without surgical bid management and landing page optimization, ad budgets evaporate quickly. Web Optimizer manages your Google Ads account as an investment in predictable revenue. We design single-theme ad groups, curate exhaustive negative keyword lists, implement smart bidding algorithms, and continuously optimize landing pages to lower cost per lead (CPL) and maximize return on ad spend (ROAS).',
        'deliverables' => [
            [
                'title' => 'Google Search Ads & Exact-Match Bidding Strategy',
                'desc' => 'Target high-intent transactional search queries with laser-focused ad copy and negative keyword protection.'
            ],
            [
                'title' => 'Google Performance Max (PMax) Full-Funnel Campaigns',
                'desc' => 'Harness Google\'s machine learning across Search, YouTube, Gmail, Display, and Maps to scale acquisitions.'
            ],
            [
                'title' => 'Google Shopping Feed & Merchant Center Optimization',
                'desc' => 'Optimize product titles, descriptions, and custom labels to secure top placement in Google Shopping carousels.'
            ],
            [
                'title' => 'Dynamic Search Ads & Retargeting Audiences',
                'desc' => 'Re-engage past website visitors who did not convert with customized promotional incentives and social proof.'
            ],
            [
                'title' => 'Conversion Tracking & Offline Conversion Import (OCI)',
                'desc' => 'Integrate CRM lead status data back into Google Ads to train bidding algorithms on actual closed revenue.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-chart-pie', 'title' => '3x - 7x Campaign ROAS', 'text' => 'Data-driven bid strategies engineered to deliver profitable return on advertising investment.'],
            ['icon' => 'fa-filter', 'title' => 'Zero Wasted Ad Spend', 'text' => 'Exhaustive negative keyword lists prevent clicks from unqualified job seekers or researchers.'],
            ['icon' => 'fa-bolt', 'title' => 'Instant Lead Flow', 'text' => 'Generate qualified inquiries and sales within 48 hours of campaign launch.'],
            ['icon' => 'fa-bullseye', 'title' => 'High Commercial Intent', 'text' => 'Reach customers who have already decided to purchase and are comparing providers.'],
        ],
        'tech_stack' => ['Google Ads Manager', 'Google Tag Manager', 'Looker Studio', 'Google Merchant Center', 'Optmyzr', 'CallRail'],
        'metrics' => [
            ['num' => '4.2x', 'label' => 'Average Google Ads ROAS'],
            ['num' => '-38%', 'label' => 'Reduction in Cost Per Lead (CPL)'],
            ['num' => '100%', 'label' => 'Offline Conversion Tracking'],
        ],
        'faqs' => [
            [
                'q' => 'What monthly ad budget do you recommend for Google Ads?',
                'a' => 'We typically recommend a minimum ad spend of ₹30,000 to ₹1,00,000+ per month depending on your industry and competition. This budget goes directly to Google, while we manage campaign strategy and execution.'
            ],
            [
                'q' => 'How do you prevent competitors from clicking on our ads?',
                'a' => 'We implement automated click fraud protection software (such as ClickCease) and exclude suspicious IP ranges to ensure your budget is spent only on genuine human prospects.'
            ],
            [
                'q' => 'Who owns the Google Ads account?',
                'a' => 'You do. The Google Ads account is set up under your business name and payment card. You maintain 100% full administrative ownership at all times.'
            ],
        ]
    ],

    'paid-social-media' => [
        'slug' => 'paid-social-media',
        'title' => 'Paid Advertising – Social Media (Meta, IG & TikTok)',
        'short_title' => 'Paid Social Media',
        'parent_slug' => 'performance-marketing',
        'parent_name' => 'Performance Marketing & Paid Acquisition',
        'badge' => 'SCALE FUNNEL',
        'badge_color' => 'cyan',
        'category' => 'growth',
        'category_name' => 'Performance Ads',
        'icon' => 'fa-solid fa-rectangle-ad',
        'meta_description' => 'High-converting paid social media advertising on Facebook, Instagram, LinkedIn, and YouTube with rapid creative testing and server-side tracking.',
        'hero_headline' => 'Scale Profitable Customer Acquisition With <span class="gold-gradient-text">Paid Social Media Ads</span>.',
        'hero_lead' => 'We design and scale high-converting Meta and Instagram ad campaigns that turn social scrollers into paying customers using compelling creative and automated funnels.',
        'overview' => 'In an era of rising ad costs and post-iOS tracking restrictions, winning on social media requires exceptional creative and robust tracking infrastructure. Web Optimizer builds full-funnel paid social campaigns. We produce thumb-stopping video hooks, high-converting carousel ads, and direct-response static creatives. By combining server-side Conversions API (CAPI) with algorithmic audience testing, we build resilient customer acquisition machines that scale profitably.',
        'deliverables' => [
            [
                'title' => 'Full-Funnel Meta Advertising Architecture (TOF, MOF, BOF)',
                'desc' => 'Top-of-funnel brand awareness, middle-of-funnel consideration, and bottom-of-funnel direct response conversion.'
            ],
            [
                'title' => 'High-Velocity Creative Testing Framework',
                'desc' => 'Systematic testing of 10+ creative hooks, headlines, and visuals weekly to uncover runaway winning ads.'
            ],
            [
                'title' => 'Meta Conversions API (CAPI) Server-Side Implementation',
                'desc' => 'Bypass ad-blockers and iOS privacy restrictions for 100% accurate conversion data and optimal smart bidding.'
            ],
            [
                'title' => 'Dynamic Product Ads (DPA) & Retargeting Funnels',
                'desc' => 'Automatically show abandoning shoppers the exact products they viewed with customized limited-time offers.'
            ],
            [
                'title' => 'Lookalike Audience Modeling & First-Party Data Mining',
                'desc' => 'Leverage your existing customer lists to train Meta algorithms to find lookalike high-net-worth buyers.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-chart-line', 'title' => 'Predictable Scale', 'text' => 'Scale ad spend confidently with creative frameworks that resist ad fatigue.'],
            ['icon' => 'fa-video', 'title' => 'Thumb-Stopping Creatives', 'text' => 'Engaging UGC-style videos and luxury visuals that capture attention in the first 3 seconds.'],
            ['icon' => 'fa-database', 'title' => 'Flawless Attribution', 'text' => 'Server-side CAPI tracking ensures zero data loss from browser cookie blockers.'],
            ['icon' => 'fa-users', 'title' => 'Targeted High-Ticket Buyers', 'text' => 'Exclude bargain hunters and target verified affluent buyers with tailored copy.'],
        ],
        'tech_stack' => ['Meta Ads Manager', 'Meta Conversions API (CAPI)', 'Google Tag Manager Server', 'Looker Studio', 'Motion App', 'Canva Pro'],
        'metrics' => [
            ['num' => '3.6x', 'label' => 'Average Meta Campaign ROAS'],
            ['num' => '10+', 'label' => 'New Ad Creatives Tested Weekly'],
            ['num' => '99.8%', 'label' => 'Server-Side Event Match Quality'],
        ],
        'faqs' => [
            [
                'q' => 'Do you create the ad visuals and videos, or do we have to provide them?',
                'a' => 'Our creative team designs all static graphics, motion banners, and edited video creatives as part of our full-service management.'
            ],
            [
                'q' => 'How do you combat Meta ad fatigue when ad performance drops?',
                'a' => 'We run a continuous creative sprint pipeline—introducing fresh visual hooks, angles, and formats weekly to ensure your campaigns never suffer from ad decay.'
            ],
            [
                'q' => 'How does Meta Conversions API (CAPI) improve ad performance?',
                'a' => 'Standard browser pixels lose up to 30% of conversion data due to iOS blocks and ad blockers. CAPI sends data directly from your server to Meta, feeding the algorithm 100% accurate signals for lower acquisition costs.'
            ],
        ]
    ],

    'lead-generation' => [
        'slug' => 'lead-generation',
        'title' => 'High-Intent B2B & B2C Lead Generation',
        'short_title' => 'Lead Generation',
        'parent_slug' => 'performance-marketing',
        'parent_name' => 'Performance Marketing & Paid Acquisition',
        'badge' => 'QUALIFIED PIPELINE',
        'badge_color' => 'cyan',
        'category' => 'growth',
        'category_name' => 'Performance Ads',
        'icon' => 'fa-solid fa-filter-circle-dollar',
        'meta_description' => 'Turnkey high-intent lead generation funnels, multi-step qualification landing pages, CRM automated routing, and appointment booking funnels.',
        'hero_headline' => 'Fill Your Sales Pipeline With <span class="gold-gradient-text">Pre-Qualified, High-Intent Leads</span>.',
        'hero_lead' => 'We engineer turnkey lead generation systems that attract, qualify, and deliver high-value prospects directly into your CRM or WhatsApp ready for sales calls.',
        'overview' => 'Volume without qualification is a waste of your sales team\'s time. Web Optimizer builds intelligent lead generation engines designed for high-ticket services and B2B enterprises. We combine targeted paid acquisition with interactive multi-step qualification funnels, behavioral lead scoring, and instant CRM routing. Your team spends zero time chasing tire-kickers and focuses 100% of their energy closing pre-qualified prospects.',
        'deliverables' => [
            [
                'title' => 'Bespoke Multi-Step Lead Qualification Funnels',
                'desc' => 'Interactive form funnels that filter out low-intent inquiries and collect crucial project scope details.'
            ],
            [
                'title' => 'Automated Calendar & Appointment Booking Flows',
                'desc' => 'Direct Calendly or HubSpot meeting scheduling embedded on confirmation pages for instant booking.'
            ],
            [
                'title' => 'Instant Lead Notification via WhatsApp & SMS',
                'desc' => 'Alert your sales executives on their phones within 10 seconds of lead submission for instant response times.'
            ],
            [
                'title' => 'Two-Way CRM Integration (HubSpot, Zoho, Salesforce)',
                'desc' => 'Automatic contact creation, deal pipeline assignment, and lead source attribution tracking.'
            ],
            [
                'title' => 'Automated Lead Nurture & Email Drip Sequences',
                'desc' => 'Pre-meeting educational emails establishing your company\'s authority before the discovery call.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-user-check', 'title' => '100% Qualified Inquiries', 'text' => 'Custom questionnaire filters ensure only prospects matching your minimum budget reach your team.'],
            ['icon' => 'fa-clock', 'title' => 'Sub-Minute Lead Response', 'text' => 'Instant WhatsApp notifications enable your team to call leads while they are still on your website.'],
            ['icon' => 'fa-calendar-check', 'title' => 'Automated Meeting Bookings', 'text' => 'High-intent leads book discovery calls directly onto your executives\' Google or Outlook calendars.'],
            ['icon' => 'fa-chart-line', 'title' => 'Lower Cost Per Closed Deal', 'text' => 'Higher lead quality yields significantly higher sales conversion rates.'],
        ],
        'tech_stack' => ['Typeform / Jotform Enterprise', 'HubSpot CRM', 'Zoho CRM', 'Zapier / Make', 'WhatsApp Business API', 'Google Sheets Sync'],
        'metrics' => [
            ['num' => '<60s', 'label' => 'Average Lead Contact Speed'],
            ['num' => '+62%', 'label' => 'Discovery Call Show-Up Rate'],
            ['num' => 'Zero', 'label' => 'Tire-Kicker / Junk Leads'],
        ],
        'faqs' => [
            [
                'q' => 'How do you prevent fake or spam lead submissions?',
                'a' => 'We implement OTP mobile number verification, business email filters, honeypot spam traps, and Google reCAPTCHA v3.'
            ],
            [
                'q' => 'Can you route leads to different sales reps based on geographic region or project size?',
                'a' => 'Yes. We configure intelligent conditional logic to route leads to specific sales representatives based on territory, budget, or service requested.'
            ],
            [
                'q' => 'Do you provide lead follow-up scripts and sales templates?',
                'a' => 'Yes. We provide your sales team with proven high-converting discovery call frameworks, follow-up WhatsApp templates, and email nurture sequences.'
            ],
        ]
    ],

    'search-engine-marketing' => [
        'slug' => 'search-engine-marketing',
        'title' => 'Search Engine Marketing (SEM) & Bid Management',
        'short_title' => 'Search Engine Marketing',
        'parent_slug' => 'performance-marketing',
        'parent_name' => 'Performance Marketing & Paid Acquisition',
        'badge' => 'BID OPTIMIZATION',
        'badge_color' => 'cyan',
        'category' => 'growth',
        'category_name' => 'Performance Ads',
        'icon' => 'fa-solid fa-magnifying-glass-dollar',
        'meta_description' => 'Full-spectrum search engine marketing (SEM), cross-engine PPC across Google and Bing, automated bid adjustments, and quality score engineering.',
        'hero_headline' => 'Maximize Market Share With <span class="gold-gradient-text">Algorithmic SEM & Bid Optimization</span>.',
        'hero_lead' => 'We synchronize paid search marketing across Google and Bing—optimizing Quality Scores, keyword bidding hierarchies, and ad extensions to outrank competitors at lower CPCs.',
        'overview' => 'Search Engine Marketing is an auction where the highest bidder does not always win; Google and Microsoft reward advertisers with high Quality Scores and exceptional landing page relevance. Web Optimizer engineers search engine marketing campaigns that combine algorithmic bidding with bespoke page design. By driving up Quality Scores to 8/10 or higher, we systematically reduce your Cost Per Click (CPC) and secure top ad positions over competitors spending twice as much.',
        'deliverables' => [
            [
                'title' => 'Quality Score Optimization & Ad Copy Tuning',
                'desc' => 'Achieve 8/10 to 10/10 Quality Scores through surgical keyword relevance, high expected CTR, and fast pages.'
            ],
            [
                'title' => 'Cross-Engine Search Campaigns (Google & Microsoft Bing)',
                'desc' => 'Capture affluent corporate desktop users on Microsoft Bing at up to 40% lower cost per click.'
            ],
            [
                'title' => 'Strategic Ad Extensions & Asset Architecture',
                'desc' => 'Deploy sitelinks, callout assets, structured snippets, call extensions, and lead form assets for maximum real estate.'
            ],
            [
                'title' => 'Dayparting & Geographic Geo-Bid Modifiers',
                'desc' => 'Increase bids during peak commercial hours and high-converting postal codes while throttling non-performing times.'
            ],
            [
                'title' => 'Competitor Brand Conquesting & Brand Defense',
                'desc' => 'Protect your own branded search terms from aggressive competitor bidding while capturing competitor searchers.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-percent', 'title' => '-35% Lower Cost Per Click', 'text' => 'Higher Quality Scores earn preferential auction pricing from search engine algorithms.'],
            ['icon' => 'fa-expand', 'title' => 'Maximum SERP Screen Real Estate', 'text' => 'Rich ad extensions push competitor organic and paid listings below the fold on mobile and desktop.'],
            ['icon' => 'fa-bullseye', 'title' => 'Hyper-Targeted Geo-Fencing', 'text' => 'Focus ad capital exclusively in affluent commercial regions where your ideal clients live and work.'],
            ['icon' => 'fa-shield-halved', 'title' => 'Brand Defense Shield', 'text' => 'Ensure competitors cannot steal clients searching for your company by name.'],
        ],
        'tech_stack' => ['Google Ads API', 'Microsoft Advertising (Bing Ads)', 'Optmyzr', 'Google Data Studio', 'SEMrush PPC Toolkit'],
        'metrics' => [
            ['num' => '8.8/10', 'label' => 'Average Keyword Quality Score'],
            ['num' => 'Top 1', 'label' => 'Target Impression Share'],
            ['num' => '-32%', 'label' => 'Average CPC Reduction'],
        ],
        'faqs' => [
            [
                'q' => 'Is Microsoft Bing Ads really worth running alongside Google Ads?',
                'a' => 'Yes. Bing powers default searches across Windows desktop devices used in corporate offices. Bing users typically have higher household incomes, and click costs are frequently 30% to 50% cheaper than Google.'
            ],
            [
                'q' => 'How does Quality Score affect our advertising costs?',
                'a' => 'Google uses Quality Score as a direct multiplier in ad rank auctions. A keyword with a Quality Score of 9 pays significantly less for the top position than an advertiser with a Quality Score of 5.'
            ],
            [
                'q' => 'Can we bid on competitor brand names legally?',
                'a' => 'Yes. Under Google Ads policies, you can bid on competitor brand keywords as long as you do not use their trademarked name deceptively inside your actual ad copy.'
            ],
        ]
    ],

    'email-marketing' => [
        'slug' => 'email-marketing',
        'title' => 'Lifecycle Email Marketing & Klaviyo Automation',
        'short_title' => 'Email Marketing',
        'parent_slug' => 'performance-marketing',
        'parent_name' => 'Performance Marketing & Paid Acquisition',
        'badge' => 'RETENTION & LTV',
        'badge_color' => 'cyan',
        'category' => 'growth',
        'category_name' => 'Performance Ads',
        'icon' => 'fa-solid fa-envelope-open-text',
        'meta_description' => 'High-converting email marketing automation, Klaviyo workflows, abandoned cart recovery, VIP loyalty sequences, and personalized subscriber campaigns.',
        'hero_headline' => 'Maximize Customer Lifetime Value With <span class="gold-gradient-text">Automated Email Marketing</span>.',
        'hero_lead' => 'We design and code bespoke email marketing architectures that nurture leads, recover abandoned carts, and generate compounding repeat revenue on autopilot.',
        'overview' => 'Email marketing consistently yields the highest ROI of any digital channel—averaging ₹42 for every ₹1 invested. However, generic batch-and-blast newsletters get ignored or trapped in spam folders. Web Optimizer builds sophisticated lifecycle email automation tailored for high-ticket service brands and D2C storefronts. From automated welcome series and VIP loyalty programs to dynamic cart abandonment workflows, we turn your email database into a predictable revenue stream.',
        'deliverables' => [
            [
                'title' => 'Automated Lifecycle Email Flows (Welcome, Cart, Win-Back)',
                'desc' => 'Multi-stage email sequences triggered by user behavior, driving automated conversions 24/7.'
            ],
            [
                'title' => 'Custom HTML Email Template Design',
                'desc' => 'Bespoke, mobile-responsive email templates reflecting your brand\'s luxury aesthetics and typography.'
            ],
            [
                'title' => 'Advanced Subscriber Segmentation & RFM Modeling',
                'desc' => 'Segment audiences based on Recency, Frequency, and Monetary value for hyper-personalized messaging.'
            ],
            [
                'title' => 'Inbox Deliverability Optimization & Domain Authentication',
                'desc' => 'Configure SPF, DKIM, and DMARC DNS records to guarantee your emails land in the primary inbox.'
            ],
            [
                'title' => 'Weekly / Bi-Weekly Curated Editorial Broadcasts',
                'desc' => 'Engaging, value-packed newsletter broadcasts that maintain brand recall and drive consistent bookings.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-arrow-rotate-right', 'title' => '+28% Repeat Revenue', 'text' => 'Automated email flows systematically drive repeat purchases without additional ad spend.'],
            ['icon' => 'fa-inbox', 'title' => '99% Primary Inbox Delivery', 'text' => 'Strict domain authentication protocols prevent emails from landing in spam or promotions tabs.'],
            ['icon' => 'fa-robot', 'title' => '100% Autopilot Execution', 'text' => 'Automated trigger sequences nurture new subscribers and recover lost revenue while you sleep.'],
            ['icon' => 'fa-gem', 'title' => 'Luxury Brand Presentation', 'text' => 'Pixel-perfect typography and imagery that reflect an elite corporate identity.'],
        ],
        'tech_stack' => ['Klaviyo Enterprise', 'Mailchimp Pro', 'ActiveCampaign', 'Brevo (Sendinblue)', 'DMARC / DKIM / SPF', 'Litmus Email Testing'],
        'metrics' => [
            ['num' => '42x', 'label' => 'Average Email Marketing ROI'],
            ['num' => '48.2%', 'label' => 'Average Email Open Rate'],
            ['num' => '99.4%', 'label' => 'Primary Inbox Deliverability'],
        ],
        'faqs' => [
            [
                'q' => 'Which email platform do you recommend for e-commerce and services?',
                'a' => 'For e-commerce, Klaviyo is the undisputed industry leader due to its granular customer purchase data integration. For B2B and professional services, we recommend ActiveCampaign or HubSpot.'
            ],
            [
                'q' => 'How do you ensure our emails do not go to the Spam or Promotions tab?',
                'a' => 'We configure custom sending domains with DKIM, SPF, and DMARC alignment, warm up domain IP reputation, and optimize image-to-text ratios to maintain optimal sender score.'
            ],
            [
                'q' => 'Do you write the email copy and design the layouts?',
                'a' => 'Yes. Our creative team writes all persuasive copy, designs bespoke mobile-first graphics, and builds the automated workflow logic inside your email platform.'
            ],
        ]
    ],

    'affiliate-marketing' => [
        'slug' => 'affiliate-marketing',
        'title' => 'Affiliate Marketing & Partner Program Architecture',
        'short_title' => 'Affiliate Marketing',
        'parent_slug' => 'performance-marketing',
        'parent_name' => 'Performance Marketing & Paid Acquisition',
        'badge' => 'PARTNERSHIP ROI',
        'badge_color' => 'cyan',
        'category' => 'growth',
        'category_name' => 'Performance Ads',
        'icon' => 'fa-solid fa-handshake',
        'meta_description' => 'Turnkey affiliate marketing program setup, partner recruitment, commission tracking pipelines, and high-ROI publisher alliances for scalable growth.',
        'hero_headline' => 'Scale Revenue Risk-Free With <span class="gold-gradient-text">Affiliate & Partner Marketing</span>.',
        'hero_lead' => 'We architect and manage scalable affiliate marketing programs—recruiting high-authority publishers, influencers, and industry partners who promote your brand on pure performance.',
        'overview' => 'Paying for advertising upfront carries risk; affiliate marketing allows you to pay exclusively when a verified sale or qualified lead occurs. Web Optimizer designs and launches turnkey affiliate and partner referral programs. We select and configure tracking platforms, structure profitable commission tiers, recruit tier-1 industry publishers, and provide partners with high-converting marketing assets that drive compounding customer acquisition.',
        'deliverables' => [
            [
                'title' => 'Affiliate Platform Setup & Pixel Tracking Integration',
                'desc' => 'Deploy secure, cookie-less affiliate tracking software (Impact, Post Affiliate Pro, UpPromote, Refersion).'
            ],
            [
                'title' => 'Publisher & Influencer Partner Recruitment Strategy',
                'desc' => 'Identify and recruit authoritative industry bloggers, review sites, and content creators to promote your offerings.'
            ],
            [
                'title' => 'Tiered Commission Structure & Margin Protection',
                'desc' => 'Design profitable commission models that reward top performers while safeguarding your gross profit margins.'
            ],
            [
                'title' => 'Turnkey Partner Asset Kits & Creatives',
                'desc' => 'Equip affiliates with high-converting banner suites, copy templates, coupon codes, and landing pages.'
            ],
            [
                'title' => 'Affiliate Fraud Prevention & Attribution Auditing',
                'desc' => 'Monitor referral traffic to prevent coupon poaching, brand bidding violations, and fraudulent submissions.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-shield-halved', 'title' => 'Zero Upfront Risk', 'text' => 'You only pay commissions on verified, closed sales or qualified leads.'],
            ['icon' => 'fa-network-wired', 'title' => 'Vast Publisher Reach', 'text' => 'Enlist hundreds of motivated industry publishers promoting your brand across the web.'],
            ['icon' => 'fa-magnifying-glass', 'title' => 'Strict Fraud Protection', 'text' => 'Automated monitoring ensures commissions are only credited to legitimate partner referrals.'],
            ['icon' => 'fa-chart-line', 'title' => 'Compounding Channel Growth', 'text' => 'Top affiliate relationships produce reliable, recurring monthly revenue for years.'],
        ],
        'tech_stack' => ['Impact.com', 'Post Affiliate Pro', 'UpPromote', 'Refersion', 'Everflow', 'Stripe Connect / PayPal Payouts'],
        'metrics' => [
            ['num' => '100%', 'label' => 'Performance-Based Model'],
            ['num' => '+35%', 'label' => 'New Revenue from Partner Channel'],
            ['num' => '0', 'label' => 'Attribution Leakage / Fraud'],
        ],
        'faqs' => [
            [
                'q' => 'How does an affiliate program differ from standard influencer marketing?',
                'a' => 'Influencer marketing typically involves upfront fixed fees for sponsored posts. Affiliate marketing operates on a pure revenue-share model where partners receive a pre-agreed commission only when an order is completed.'
            ],
            [
                'q' => 'How do you prevent affiliates from bidding on our brand name in Google Ads?',
                'a' => 'We draft strict Affiliate Terms of Service explicitly prohibiting brand keyword bidding, negative-match keyword violations, and cookie stuffing, enforcing these rules with automated compliance software.'
            ],
            [
                'q' => 'Can we run an affiliate program for high-ticket B2B services?',
                'a' => 'Yes. For B2B firms, we structure referral partner programs with lucrative finder\'s fees for qualified discovery meetings and closed contract values.'
            ],
        ]
    ],

    'content-marketing' => [
        'slug' => 'content-marketing',
        'title' => 'Strategic Content Marketing & Authority Funnels',
        'short_title' => 'Content Marketing',
        'parent_slug' => 'performance-marketing',
        'parent_name' => 'Performance Marketing & Paid Acquisition',
        'badge' => 'COMPOUNDING ROI',
        'badge_color' => 'cyan',
        'category' => 'growth',
        'category_name' => 'Performance Ads',
        'icon' => 'fa-solid fa-book-open-reader',
        'meta_description' => 'Full-funnel content marketing strategy, downloadable lead magnets, case study libraries, whitepapers, and customer acquisition nurture funnels.',
        'hero_headline' => 'Educate & Convert With <span class="gold-gradient-text">Full-Funnel Content Marketing</span>.',
        'hero_lead' => 'We craft comprehensive content marketing ecosystems—from strategic whitepapers and case studies to educational video series that guide prospective buyers through the sales funnel.',
        'overview' => 'Modern buyers conduct over 70% of their research before ever speaking to a sales representative. If your brand does not provide the answers they seek, your competitors will. Web Optimizer develops authoritative content marketing assets that position your firm as the definitive category leader. We produce data-driven industry reports, interactive calculators, in-depth case studies, and nurture funnels that convert passive readers into paying clients.',
        'deliverables' => [
            [
                'title' => 'Full-Funnel Content Journey & Topic Clustering',
                'desc' => 'Map content topics across the buyer\'s journey: problem-aware, solution-aware, and decision-ready stages.'
            ],
            [
                'title' => 'High-Value Downloadable Lead Magnets & Whitepapers',
                'desc' => 'Authoritative industry whitepapers, checklists, and templates that generate qualified business email leads.'
            ],
            [
                'title' => 'Enterprise Case Study & Video Testimonial Production',
                'desc' => 'Proof-driven customer transformation stories showcasing measurable ROI, methodology, and client praise.'
            ],
            [
                'title' => 'Multi-Channel Content Atomization Strategy',
                'desc' => 'Repurpose one core monthly cornerstone asset into 15+ micro-assets across LinkedIn, newsletters, and video.'
            ],
            [
                'title' => 'Content Attribution & Revenue Tracking',
                'desc' => 'Track first-touch and multi-touch content attribution to measure which articles directly drive sales pipeline.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-award', 'title' => 'Category Authority', 'text' => 'Establish your brand as the premier thought leader and trusted advisory source in your industry.'],
            ['icon' => 'fa-filter-circle-dollar', 'title' => 'Shorter Sales Cycles', 'text' => 'Pre-educated prospects close faster and have fewer price objections during discovery calls.'],
            ['icon' => 'fa-recycle', 'title' => 'Compounding Lifetime Value', 'text' => 'High-quality content assets continue generating organic leads and backlinks for years.'],
            ['icon' => 'fa-arrow-down-short-wide', 'title' => 'Lower Paid CAC', 'text' => 'Organic content funnels systematically reduce reliance on expensive paid advertising.'],
        ],
        'tech_stack' => ['Notion Enterprise', 'HubSpot Content Hub', 'Canva Pro', 'Google Analytics 4', 'Ahrefs Content Explorer', 'Loom / Vimeo'],
        'metrics' => [
            ['num' => '+55%', 'label' => 'Inbound Lead Quality Score'],
            ['num' => '3.2x', 'label' => 'Average Pipeline Velocity Lift'],
            ['num' => '100%', 'label' => 'Multi-Touch Revenue Attribution'],
        ],
        'faqs' => [
            [
                'q' => 'How long does it take for content marketing to generate measurable leads?',
                'a' => 'While organic SEO content begins compounding within 3 to 6 months, gated lead magnets and promoted case studies on social channels generate qualified leads within the first 14 days.'
            ],
            [
                'q' => 'How do you decide what topics to write about?',
                'a' => 'We interview your sales team to uncover the exact questions and objections prospects ask, then combine this with search volume data and competitor gap analysis.'
            ],
            [
                'q' => 'Do you help distribute the content, or just create it?',
                'a' => 'We manage full-cycle distribution: optimizing for search engines, syndicating across LinkedIn and newsletters, and promoting through targeted paid social funnels.'
            ],
        ]
    ],

    'facebook-marketing' => [
        'slug' => 'facebook-marketing',
        'title' => 'Facebook Marketing, Ads & Community Growth',
        'short_title' => 'Facebook Marketing',
        'parent_slug' => 'social-media-marketing',
        'parent_name' => 'Social Media Marketing (SMM) & Brand Community',
        'badge' => 'META ECOSYSTEM',
        'badge_color' => 'purple',
        'category' => 'creative',
        'category_name' => 'Social Media & Creators',
        'icon' => 'fa-brands fa-facebook',
        'meta_description' => 'Comprehensive Facebook marketing, business page curation, viral video reels, high-converting Facebook Ads, and active community management.',
        'hero_headline' => 'Engage Millions With <span class="gold-gradient-text">High-Impact Facebook Marketing</span> & Paid Scale.',
        'hero_lead' => 'We manage and scale your Facebook brand presence with authoritative page curation, engaging video reels, viral community engagement, and profitable ad funnels.',
        'overview' => 'With over 3 billion active users, Facebook remains one of the world\'s most powerful platforms for customer acquisition and community building. Web Optimizer manages your Facebook ecosystem as an engine for brand prestige and direct revenue. We produce engaging video content, design luxury carousel graphics, moderate customer conversations, and build targeted paid advertising funnels that turn casual browsers into loyal brand advocates.',
        'deliverables' => [
            [
                'title' => 'Brand Page Curation & Luxury Aesthetic Design',
                'desc' => 'Custom header visuals, verified page optimization, custom action buttons, and pinned highlight posts.'
            ],
            [
                'title' => 'High-Retention Video Reels & Carousel Creation',
                'desc' => 'Short-form video reels, educational carousels, and milestone announcements designed for viral reach.'
            ],
            [
                'title' => 'Active Community Moderation & Comment Engagement',
                'desc' => 'Timely responses to customer inquiries, comment moderation, and active community dialogue building.'
            ],
            [
                'title' => 'Hyper-Targeted Facebook Ad Campaigns & Funnels',
                'desc' => 'Laser-focused lead generation, conversion campaigns, and dynamic catalog ads targeting affluent demographics.'
            ],
            [
                'title' => 'Monthly Audience Growth & Sentiment Analytics',
                'desc' => 'In-depth reporting on reach, viral impressions, engagement rates, and inbound message volume.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-users', 'title' => 'Massive Brand Reach', 'text' => 'Engage thousands of prospective clients across Facebook\'s desktop and mobile user base.'],
            ['icon' => 'fa-comments', 'title' => 'Direct Customer Dialogue', 'text' => 'Build real-time relationships and address customer inquiries directly via Messenger.'],
            ['icon' => 'fa-chart-pie', 'title' => 'Profitable Ad Scaling', 'text' => 'Scale targeted ad campaigns with lookalike audiences built from your best customers.'],
            ['icon' => 'fa-shield-halved', 'title' => 'Protected Brand Sentiment', 'text' => 'Active 24/7 comment moderation protects your brand reputation from spam and negative trolls.'],
        ],
        'tech_stack' => ['Meta Business Suite', 'Facebook Ads Manager', 'Canva Pro', 'Sprout Social', 'Meta Creator Studio', 'ManyChat'],
        'metrics' => [
            ['num' => '+310%', 'label' => 'Organic Facebook Reach Growth'],
            ['num' => '<10min', 'label' => 'Average Inquiry Response Time'],
            ['num' => '3.4x', 'label' => 'Paid Ad Return on Ad Spend (ROAS)'],
        ],
        'faqs' => [
            [
                'q' => 'Is Facebook still effective for business marketing in 2026?',
                'a' => 'Yes. Facebook remains the world\'s largest social network, with exceptional purchasing power among decision-makers aged 25-55+. When paired with high-quality video reels and targeted ads, it delivers unmatched ROI.'
            ],
            [
                'q' => 'How many times per week will you post on our Facebook page?',
                'a' => 'We typically publish 3 to 5 custom-designed posts per week, including a curated mix of short-form reels, informative carousels, and client success stories.'
            ],
            [
                'q' => 'Do you manage Facebook Messenger customer inquiries as well?',
                'a' => 'Yes. We set up automated Messenger greeting flows and FAQ auto-responders, while notifying your team immediately when a high-value sales lead arrives.'
            ],
        ]
    ],

    'instagram-marketing' => [
        'slug' => 'instagram-marketing',
        'title' => 'Instagram Marketing, Reels & Viral Brand Aesthetics',
        'short_title' => 'Instagram Marketing',
        'parent_slug' => 'social-media-marketing',
        'parent_name' => 'Social Media Marketing (SMM) & Brand Community',
        'badge' => 'VIRAL AESTHETICS',
        'badge_color' => 'purple',
        'category' => 'creative',
        'category_name' => 'Social Media & Creators',
        'icon' => 'fa-brands fa-instagram',
        'meta_description' => 'Luxury Instagram grid curation, viral Instagram Reels production, engaging Stories, influencer collaborations, and high-converting Instagram Ads.',
        'hero_headline' => 'Curate A Prestigious Brand Presence With <span class="gold-gradient-text">Elite Instagram Marketing</span>.',
        'hero_lead' => 'We craft visually breathtaking Instagram profiles—combining aesthetic grid curation, viral Reels production, interactive Stories, and direct-response DM funnels.',
        'overview' => 'Instagram is the modern storefront for luxury, lifestyle, and high-end professional services. A disjointed or neglected profile immediately erodes brand credibility. Web Optimizer curates an unmistakable, prestigious visual identity on Instagram. We produce cinematic Reels, design educational carousels, create daily engaging Stories, and manage automated DM conversation funnels that transform followers into paying clients.',
        'deliverables' => [
            [
                'title' => 'Luxury Grid Aesthetic Architecture & Brand Cohesion',
                'desc' => 'Harmonious color palettes, cohesive typography, and polished visual layouts that captivate profile visitors.'
            ],
            [
                'title' => 'High-Engagement Instagram Reels Production',
                'desc' => 'Short-form video concepts with viral audio selection, pacing, kinetic typography, and strong hooks.'
            ],
            [
                'title' => 'Interactive Daily Stories & Highlight Organization',
                'desc' => 'Engaging polls, Q&As, behind-the-scenes updates, and custom highlight covers organizing key services.'
            ],
            [
                'title' => 'Automated Direct Message (DM) Lead Funnels',
                'desc' => 'Instant automated DM workflows delivering links, discount codes, and consultation bookings via ManyChat.'
            ],
            [
                'title' => 'Influencer Collaboration & Co-Author Post Management',
                'desc' => 'Co-branded collab posts with niche creators to cross-pollinate audiences and accelerate growth.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-gem', 'title' => 'Luxury Brand Perception', 'text' => 'Ensure your brand looks prestigious, authoritative, and visually world-class.'],
            ['icon' => 'fa-video', 'title' => 'Viral Algorithm Reach', 'text' => 'Engaging Reels capitalize on Instagram\'s discovery algorithm to attract thousands of non-followers.'],
            ['icon' => 'fa-paper-plane', 'title' => 'Automated DM Conversions', 'text' => 'Turn story replies and keyword comments into instant qualified sales leads.'],
            ['icon' => 'fa-heart', 'title' => 'Devoted Community', 'text' => 'Build an authentic emotional connection with an engaged audience that loves your brand.'],
        ],
        'tech_stack' => ['ManyChat Instagram API', 'CapCut Pro', 'Adobe After Effects', 'Canva Pro', 'Flick Hashtags', 'Meta Business Suite'],
        'metrics' => [
            ['num' => '+420%', 'label' => 'Average Reels Impression Growth'],
            ['num' => '8.4%', 'label' => 'Average Post Engagement Rate'],
            ['num' => 'Top 1%', 'label' => 'Aesthetic Profile Polish'],
        ],
        'faqs' => [
            [
                'q' => 'How do you create Instagram Reels if we do not have our own video team?',
                'a' => 'We can either coordinate professional on-site video shoots, or work with footage and photos your team sends us to edit into cinematic, high-retention Reels with professional voiceovers and captions.'
            ],
            [
                'q' => 'How does automated DM marketing work on Instagram?',
                'a' => 'We set up keyword automation via official Meta APIs (ManyChat). When a user comments "PROPOSAL" on your reel, an automated DM sends them the proposal link instantly, capturing their email.'
            ],
            [
                'q' => 'Do you help with Instagram account verification (Blue Tick)?',
                'a' => 'Yes. We assist in preparing your press portfolio and documentation to apply for Meta Verified or official public figure/brand verification.'
            ],
        ]
    ],

    'linkedin-marketing' => [
        'slug' => 'linkedin-marketing',
        'title' => 'LinkedIn B2B Marketing & Executive Thought Leadership',
        'short_title' => 'LinkedIn Marketing',
        'parent_slug' => 'social-media-marketing',
        'parent_name' => 'Social Media Marketing (SMM) & Brand Community',
        'badge' => 'B2B LEVERAGE',
        'badge_color' => 'purple',
        'category' => 'creative',
        'category_name' => 'Social Media & Creators',
        'icon' => 'fa-brands fa-linkedin',
        'meta_description' => 'B2B LinkedIn marketing, executive personal branding for founders and CXOs, thought leadership copywriting, company page growth, and targeted B2B ads.',
        'hero_headline' => 'Conquer The B2B Market With <span class="gold-gradient-text">Executive LinkedIn Marketing</span>.',
        'hero_lead' => 'We transform founders, executives, and enterprise brands into respected industry authorities on LinkedIn—driving high-value B2B partnerships and contract inquiries.',
        'overview' => 'LinkedIn is the undisputed social platform for high-ticket B2B business development, enterprise partnerships, and corporate credibility. Generic corporate updates generate zero engagement. Web Optimizer ghostwrites compelling, authoritative thought leadership for your executives and builds a commanding company page. We articulate your company\'s vision, share deep technical insights, and build relationships with C-suite decision-makers.',
        'deliverables' => [
            [
                'title' => 'Executive Personal Branding & Founder Ghostwriting',
                'desc' => 'Craft high-retention LinkedIn essays, opinion pieces, and tactical frameworks under your executives\' names.'
            ],
            [
                'title' => 'Company Page Brand Management & Showcase Pages',
                'desc' => 'Curate polished company updates, employee spotlights, milestone celebrations, and hiring announcements.'
            ],
            [
                'title' => 'High-Impact Document Carousels & Infographics',
                'desc' => 'Design PDF document carousels that provide actionable frameworks and generate massive organic reshares.'
            ],
            [
                'title' => 'B2B LinkedIn Lead Gen Ads & InMail Campaigns',
                'desc' => 'Precision paid advertising targeting decision-makers by exact job title, company size, and industry.'
            ],
            [
                'title' => 'Executive Network Expansion & Engagement Routine',
                'desc' => 'Strategic commenting on peer industry leaders and active connection requests with target enterprise accounts.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-user-tie', 'title' => 'C-Suite Market Authority', 'text' => 'Position your founder as an undisputed thought leader in the national and global market.'],
            ['icon' => 'fa-briefcase', 'title' => 'High-Ticket B2B Inquiries', 'text' => 'Attract enterprise contracts, joint venture proposals, and speaking engagements.'],
            ['icon' => 'fa-arrows-split-up-and-left', 'title' => 'Massive Organic Reach', 'text' => 'LinkedIn\'s algorithm actively promotes quality text and carousel insights across 2nd/3rd degree networks.'],
            ['icon' => 'fa-users-gear', 'title' => 'Top-Tier Talent Attraction', 'text' => 'Attract elite engineering and creative talent who want to work with recognized industry visionaries.'],
        ],
        'tech_stack' => ['LinkedIn Campaign Manager', 'Taplio Pro', 'Canva Pro PDF Carousels', 'Shield Analytics', 'Sales Navigator', 'Lemlist'],
        'metrics' => [
            ['num' => '+380%', 'label' => 'Executive Post Impression Growth'],
            ['num' => 'Top 5%', 'label' => 'Industry Social Selling Index (SSI)'],
            ['num' => '100%', 'label' => 'Executive Voice Customization'],
        ],
        'faqs' => [
            [
                'q' => 'How much time does the founder need to commit each week?',
                'a' => 'Less than 30 minutes. We conduct a quick bi-weekly voice memo interview to extract your strategic thoughts, then our senior editorial team drafts, formats, and schedules all posts for your final sign-off.'
            ],
            [
                'q' => 'Can you help us generate qualified B2B client meetings through LinkedIn?',
                'a' => 'Yes. By pairing authoritative organic thought leadership with targeted LinkedIn InMail and lead form campaigns, we generate warm inquiries from vetted decision-makers.'
            ],
            [
                'q' => 'Do you manage both the Company Page and personal executive profiles?',
                'a' => 'Yes. We recommend a hybrid strategy where executive personal accounts drive viral reach and thought leadership, while the company page serves as the official corporate anchor.'
            ],
        ]
    ],

    'youtube-marketing' => [
        'slug' => 'youtube-marketing',
        'title' => 'YouTube Marketing, Channel SEO & Pre-Roll Ads',
        'short_title' => 'YouTube Marketing',
        'parent_slug' => 'social-media-marketing',
        'parent_name' => 'Social Media Marketing (SMM) & Brand Community',
        'badge' => 'VIDEO REACH',
        'badge_color' => 'purple',
        'category' => 'creative',
        'category_name' => 'Social Media & Creators',
        'icon' => 'fa-brands fa-youtube',
        'meta_description' => 'End-to-end YouTube channel management, long-form video SEO, custom thumbnail design, YouTube Shorts syndication, and high-converting YouTube Ads.',
        'hero_headline' => 'Build Everlasting Brand Authority With <span class="gold-gradient-text">YouTube Video Marketing</span>.',
        'hero_lead' => 'We optimize and scale your YouTube channel—from keyword-targeted video SEO and custom thumbnail design to YouTube Shorts syndication and targeted pre-roll video ads.',
        'overview' => 'YouTube is the world\'s second-largest search engine. Unlike ephemeral social feeds where posts disappear after 24 hours, YouTube videos compound in organic search value for years. Web Optimizer builds and manages authoritative YouTube video channels. We research high-volume search queries, design high-CTR thumbnails, write engaging scripts, optimize metadata for Google and YouTube search, and manage high-ROI pre-roll advertising.',
        'deliverables' => [
            [
                'title' => 'YouTube Channel Architecture & Visual Identity',
                'desc' => 'Custom channel banner design, watermark branding, structured playlists, and channel trailer curation.'
            ],
            [
                'title' => 'Video Keyword SEO & Search Tag Optimization',
                'desc' => 'Comprehensive keyword research to rank long-form videos for competitive search queries on YouTube and Google.'
            ],
            [
                'title' => 'Click-Through Rate (CTR) Thumbnail Design & Testing',
                'desc' => 'Bespoke custom thumbnails engineered with psychology principles, high contrast, and scannable visual hierarchy.'
            ],
            [
                'title' => 'YouTube Shorts Creation & Vertical Syndication',
                'desc' => 'Repurpose long-form video moments into high-energy vertical shorts to accelerate channel subscriber growth.'
            ],
            [
                'title' => 'YouTube Skippable & Non-Skippable Video Ad Campaigns',
                'desc' => 'Target prospects actively watching competitor videos or researching high-intent keywords with video ads.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-infinity', 'title' => 'Compounding Evergreen Views', 'text' => 'Videos published today continue driving organic views and qualified inquiries 3 years from now.'],
            ['icon' => 'fa-video', 'title' => 'Unrivaled Trust & Connection', 'text' => 'Video builds immediate credibility and emotional resonance that text alone cannot replicate.'],
            ['icon' => 'fa-magnifying-glass', 'title' => 'Google Video Carousel Rankings', 'text' => 'Rank for high-value search queries directly on Google\'s primary organic search results page.'],
            ['icon' => 'fa-bullseye', 'title' => 'Precision Video Ad Targeting', 'text' => 'Place your commercials in front of targeted viewers right before they watch relevant industry content.'],
        ],
        'tech_stack' => ['VidIQ Enterprise', 'TubeBuddy Pro', 'Adobe Premiere Pro', 'Photoshop CC', 'Google Ads (YouTube Video)', 'YouTube Studio Analytics'],
        'metrics' => [
            ['num' => '+260%', 'label' => 'Organic YouTube Search Views'],
            ['num' => '12.4%', 'label' => 'Average Thumbnail Click-Through Rate'],
            ['num' => 'Top 3', 'label' => 'Video Search Rankings on Target Queries'],
        ],
        'faqs' => [
            [
                'q' => 'Can YouTube videos really help generate B2B and high-ticket service clients?',
                'a' => 'Absolutely. In-depth case study breakdowns, customer interview documentaries, and technical walkthroughs create unmatched credibility, prompting high-budget clients to reach out directly.'
            ],
            [
                'q' => 'Do you help with video editing and thumbnail creation?',
                'a' => 'Yes. We manage full post-production: pacing cuts, kinetic title typography, color grading, background music licensing, and custom high-CTR thumbnail design.'
            ],
            [
                'q' => 'How does YouTube SEO help our main website?',
                'a' => 'YouTube videos frequently rank at the top of Google search results for "how-to" and commercial evaluation queries, channeling thousands of high-intent visitors directly to your website.'
            ],
        ]
    ],

    'brand-identity-logo' => [
        'slug' => 'brand-identity-logo',
        'title' => 'Bespoke Brand Identity & Luxury Logo Design',
        'short_title' => 'Logo & Brand Identity',
        'parent_slug' => 'branding',
        'parent_name' => 'Branding, Creative & Visual Identity',
        'badge' => 'VISUAL CREST',
        'badge_color' => 'gold',
        'category' => 'creative',
        'category_name' => 'Creative & Identity',
        'icon' => 'fa-solid fa-shield-halved',
        'meta_description' => 'Bespoke luxury crest design, minimalist corporate logos, custom typography, brand color theory, and vector asset guidelines tailored for market leadership.',
        'hero_headline' => 'Forge An Unmistakable Legacy With <span class="gold-gradient-text">Bespoke Brand Crests & Logos</span>.',
        'hero_lead' => 'We design timeless visual identities, luxury crests, and distinctive corporate logos that command instant respect and elevate your enterprise above competitors.',
        'overview' => 'Your logo is the visual signature of your enterprise. Cookie-cutter stock icons and generic symbols diminish perceived brand value and fail to inspire trust. Web Optimizer crafts bespoke brand marks, monograms, and luxury crests rooted in deep brand strategy. Every line, curve, and geometric ratio is engineered to embody your company\'s heritage, core values, and market ambition—delivering a mark that remains modern for decades.',
        'deliverables' => [
            [
                'title' => 'Bespoke Logo Mark & Crest Architecture',
                'desc' => 'Custom conceptual logo design with primary, secondary, and sub-mark variations for diverse use cases.'
            ],
            [
                'title' => 'Custom Typography Pairing & Font Licensing Guidance',
                'desc' => 'Curate distinctive primary display typefaces and complementary body fonts tailored to your brand personality.'
            ],
            [
                'title' => 'Psychological Color Palette & Hierarchy Formulation',
                'desc' => 'Define primary, secondary, and accent colors with precise CMYK, RGB, HEX, and Pantone specifications.'
            ],
            [
                'title' => 'Complete Vector Asset Suite (AI, EPS, SVG, PNG)',
                'desc' => 'Deliver production-ready vector files optimized for digital screens, signage, embroidery, and luxury print.'
            ],
            [
                'title' => 'Clear Space, Minimum Sizing & Logo Usage Rules',
                'desc' => 'Establish exact usage rules to protect visual integrity across all future corporate applications.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-crown', 'title' => 'Instant Market Prestige', 'text' => 'Communicate premium luxury and professionalism before a word is spoken.'],
            ['icon' => 'fa-infinity', 'title' => 'Timeless Aesthetic Longevity', 'text' => 'Rooted in classic design theory, ensuring your logo never looks dated or trendy.'],
            ['icon' => 'fa-vector-square', 'title' => 'Infinite Vector Scalability', 'text' => 'Renders crisply whether printed on a tiny 16px favicon or a 50-foot highway billboard.'],
            ['icon' => 'fa-trademark', 'title' => '100% Unique & Trademarkable', 'text' => 'Original craftsmanship guaranteed free of stock templates, ready for trademark registration.'],
        ],
        'tech_stack' => ['Adobe Illustrator CC', 'Adobe Photoshop CC', 'Figma Enterprise', 'Pantone Color Bridge', 'Glyphs Typography'],
        'metrics' => [
            ['num' => '100%', 'label' => 'Original Bespoke Craftsmanship'],
            ['num' => '3-5', 'label' => 'Unique Creative Concept Directions'],
            ['num' => 'Zero', 'label' => 'Stock Clip-Art or Generic Templates'],
        ],
        'faqs' => [
            [
                'q' => 'How many logo concepts do you present initially?',
                'a' => 'We typically present 3 to 5 distinct creative directions, each backed by strategic rationale, typography pairings, and real-world mockups (signage, business cards, website).'
            ],
            [
                'q' => 'Will we own the full copyright and trademark rights to our new logo?',
                'a' => 'Yes. Upon final approval and handover, you receive 100% full intellectual property ownership and copyright transfer, ready for legal trademark registration.'
            ],
            [
                'q' => 'Can you modernize our existing logo without losing our established brand recognition?',
                'a' => 'Yes. We specialize in delicate brand identity evolution—refining proportions, modernizing typography, and cleaning up line weights while honoring your existing brand equity.'
            ],
        ]
    ],

    'brand-strategy' => [
        'slug' => 'brand-strategy',
        'title' => 'Brand Strategy, Value Proposition & Market Positioning',
        'short_title' => 'Brand Strategy',
        'parent_slug' => 'branding',
        'parent_name' => 'Branding, Creative & Visual Identity',
        'badge' => 'MARKET MOAT',
        'badge_color' => 'gold',
        'category' => 'creative',
        'category_name' => 'Creative & Identity',
        'icon' => 'fa-solid fa-chess',
        'meta_description' => 'Comprehensive brand positioning frameworks, customer archetype profiling, competitive moat analysis, value proposition refinement, and brand messaging.',
        'hero_headline' => 'Carve A Dominant Category Position With <span class="gold-gradient-text">Strategic Brand Architecture</span>.',
        'hero_lead' => 'We formulate the strategic foundation of your business—defining your unique market positioning, core value proposition, ideal customer archetypes, and competitive moats.',
        'overview' => 'Branding is far more than colors and logos; it is the deliberate psychological positioning your company occupies in the minds of your target audience. In competitive markets, unclear positioning forces businesses to compete on price. Web Optimizer conducts forensic market research to carve out an unassailable strategic position. We articulate your unique differentiators, define your brand narrative, and craft a value proposition that commands premium pricing.',
        'deliverables' => [
            [
                'title' => 'Core Brand Architecture & Positioning Framework',
                'desc' => 'Define your vision, mission, purpose, core values, and strategic position relative to market competitors.'
            ],
            [
                'title' => 'Ideal Customer Profile (ICP) & Persona Archetypes',
                'desc' => 'Detailed profiles of primary decision-makers, their core motivations, emotional triggers, and objections.'
            ],
            [
                'title' => 'Irresistible Value Proposition & Elevator Pitch',
                'desc' => 'Crisp, compelling articulation of what makes your offering superior, unique, and essential.'
            ],
            [
                'title' => 'Competitive Moat & White Space Opportunity Mapping',
                'desc' => 'Identify underserved gaps in your competitor landscape where your company can claim undisputed leadership.'
            ],
            [
                'title' => 'Brand Tone-of-Voice & Key Messaging Matrix',
                'desc' => 'Guidelines on vocabulary, emotional cadence, and key messaging pillars across all sales and marketing touchpoints.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-gem', 'title' => 'Command Premium Pricing', 'text' => 'Clear positioning elevates perceived value, eliminating the need to discount your fees.'],
            ['icon' => 'fa-compass', 'title' => 'Total Company Alignment', 'text' => 'Provide your sales, marketing, and product teams with a unified strategic north star.'],
            ['icon' => 'fa-bullseye', 'title' => 'Attract High-Value Clients', 'text' => 'Target and win discerning clients who value specialized expertise over low cost.'],
            ['icon' => 'fa-shield-halved', 'title' => 'Defensible Market Moat', 'text' => 'Build a durable brand moat that competitors cannot easily copy or undermine.'],
        ],
        'tech_stack' => ['Brand Archetype Frameworks', 'Kano Model Analysis', 'Competitor Landscape Audits', 'Miro Collaborative Strategy', 'Executive Workshop Interviews'],
        'metrics' => [
            ['num' => '100%', 'label' => 'Clarity of Unique Value Proposition'],
            ['num' => 'Top 10%', 'label' => 'Market Positioning Differentiation'],
            ['num' => '0', 'label' => 'Vague Generic Corporate Jargon'],
        ],
        'faqs' => [
            [
                'q' => 'Why do we need brand strategy before designing our website or marketing collateral?',
                'a' => 'Without strategy, design is purely aesthetic guesswork. Brand strategy dictates who we are speaking to, what problem we solve, and why clients should choose you over competitors—informing every design and copy decision.'
            ],
            [
                'q' => 'How is the brand strategy delivered?',
                'a' => 'We deliver a comprehensive Brand Strategy Deck and Executive Playbook, accompanied by an interactive presentation workshop with your leadership team.'
            ],
            [
                'q' => 'Can brand strategy help our sales team close deals faster?',
                'a' => 'Yes. With unified messaging, crisp elevator pitches, and objection-handling narratives, your sales executives communicate authority with supreme confidence.'
            ],
        ]
    ],

    'corporate-branding' => [
        'slug' => 'corporate-branding',
        'title' => 'Corporate Branding Systems & Design Guidelines',
        'short_title' => 'Corporate Branding',
        'parent_slug' => 'branding',
        'parent_name' => 'Branding, Creative & Visual Identity',
        'badge' => 'ENTERPRISE STANDARD',
        'badge_color' => 'gold',
        'category' => 'creative',
        'category_name' => 'Creative & Identity',
        'icon' => 'fa-solid fa-building',
        'meta_description' => 'Enterprise corporate branding guidelines, brand book creation, stationary systems, digital presentation templates, and corporate identity standards.',
        'hero_headline' => 'Unify Your Enterprise Identity With <span class="gold-gradient-text">Complete Corporate Branding Systems</span>.',
        'hero_lead' => 'We document and standardize your entire brand ecosystem into an authoritative Corporate Brand Book—ensuring flawless visual consistency across every office, vendor, and channel.',
        'overview' => 'As enterprises scale, brand consistency often breaks down. Different teams, agencies, and regional offices use mismatched fonts, altered logos, and conflicting color codes. Web Optimizer develops exhaustive Corporate Brand Style Guides and design systems. We establish definitive rules for every visual and verbal asset, accompanied by production-ready templates for corporate stationery, pitch decks, email signatures, and signage.',
        'deliverables' => [
            [
                'title' => 'Comprehensive Corporate Brand Book (PDF & Interactive Digital)',
                'desc' => 'Authoritative 40+ page documentation governing logo usage, colors, typography, iconography, and photography.'
            ],
            [
                'title' => 'Executive Corporate Stationery Suite',
                'desc' => 'Bespoke designs for business cards, letterheads, envelopes, folders, and corporate wax seals / stamps.'
            ],
            [
                'title' => 'Master Corporate Presentation Deck (PowerPoint & Keynote)',
                'desc' => 'Custom-designed, modular slide deck with 30+ reusable layouts for investor pitches and client proposals.'
            ],
            [
                'title' => 'Digital Brand Assets & HTML Email Signatures',
                'desc' => 'Standardized company-wide email signatures, LinkedIn banners, and corporate Zoom/Teams virtual backdrops.'
            ],
            [
                'title' => 'Signage & Environmental Branding Specifications',
                'desc' => 'Material, lighting, and fabrication guidelines for corporate office reception signage and building facades.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-check-double', 'title' => '100% Visual Consistency', 'text' => 'Eliminate brand dilution across all global offices, vendors, and external agencies.'],
            ['icon' => 'fa-file-powerpoint', 'title' => 'Investor-Ready Decks', 'text' => 'Present proposals and pitch decks that look polished, authoritative, and world-class.'],
            ['icon' => 'fa-book-bookmark', 'title' => 'Seamless Vendor Handoff', 'text' => 'Give printers, developers, and designers exact specifications so projects are executed flawlessly.'],
            ['icon' => 'fa-award', 'title' => 'Enterprise Prestige', 'text' => 'Project the stability, scale, and sophistication of an established industry leader.'],
        ],
        'tech_stack' => ['Adobe InDesign CC', 'Figma Design Systems', 'Microsoft PowerPoint Master', 'Apple Keynote', 'HTML5 Email Signatures'],
        'metrics' => [
            ['num' => '40+ Page', 'label' => 'Exhaustive Brand Style Guide'],
            ['num' => '30+', 'label' => 'Custom Presentation Slide Layouts'],
            ['num' => '100%', 'label' => 'Cross-Channel Visual Alignment'],
        ],
        'faqs' => [
            [
                'q' => 'What is included in a Corporate Brand Book?',
                'a' => 'Our Brand Book covers brand story, logo anatomy, clear space rules, incorrect logo usage, full color formulas (CMYK/RGB/HEX/Pantone), typography hierarchies, grid systems, iconography, and stationery specs.'
            ],
            [
                'q' => 'Can our internal team easily edit the PowerPoint presentation templates?',
                'a' => 'Yes. We build master slide layouts with clean placeholder fields so non-designers on your team can create stunning slides in minutes.'
            ],
            [
                'q' => 'Do you oversee the printing of corporate stationery to ensure color accuracy?',
                'a' => 'Yes. We provide print-ready press files with exact bleed marks and Pantone color codes, and can coordinate directly with commercial printers to guarantee color accuracy.'
            ],
        ]
    ],

    'marketing-collaterals' => [
        'slug' => 'marketing-collaterals',
        'title' => 'Marketing Collaterals, Pitch Decks & Corporate Suites',
        'short_title' => 'Marketing Collaterals',
        'parent_slug' => 'branding',
        'parent_name' => 'Branding, Creative & Visual Identity',
        'badge' => 'INVESTOR READY',
        'badge_color' => 'gold',
        'category' => 'creative',
        'category_name' => 'Creative & Identity',
        'icon' => 'fa-solid fa-folder-open',
        'meta_description' => 'Luxury marketing collaterals, bespoke brochure design, corporate annual reports, investor pitch decks, trade show booth graphics, and digital catalogs.',
        'hero_headline' => 'Leave An Indelible Impression With <span class="gold-gradient-text">Luxury Marketing Collaterals</span>.',
        'hero_lead' => 'We design high-impact marketing collaterals, corporate brochures, investor decks, and digital catalogs that command attention and accelerate high-value deal closures.',
        'overview' => 'High-value transactions often hinge on physical and digital collateral. When prospects hold a poorly designed, flimsy brochure or view a cluttered pitch deck, doubts arise regarding your service quality. Web Optimizer engineers marketing collateral with luxury art direction, meticulous typography, and compelling visual hierarchy. Whether preparing for an investor roadshow, a marquee trade exhibition, or an executive sales meeting, our collaterals reflect excellence.',
        'deliverables' => [
            [
                'title' => 'Luxury Corporate Brochures & Product Catalogs',
                'desc' => 'Bespoke multi-page brochures designed with sophisticated grid systems, spot UV specifications, and foil accents.'
            ],
            [
                'title' => 'Investor Pitch Decks & Capital-Raise Presentations',
                'desc' => 'Compelling financial charts, problem/solution slides, and market sizing graphics that win investor confidence.'
            ],
            [
                'title' => 'Corporate Annual Reports & ESG Disclosures',
                'desc' => 'Polished editorial layouts transforming dense corporate data and financial tables into engaging reading.'
            ],
            [
                'title' => 'Trade Show Exhibition Booths & Backdrop Displays',
                'desc' => 'Large-format graphics, pop-up banners, and booth environment designs engineered to stand out in exhibition halls.'
            ],
            [
                'title' => 'Interactive Digital PDFs & Case Study One-Pagers',
                'desc' => 'Clickable PDF sales one-pagers with interactive links, table of contents, and embedded video links.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-file-signature', 'title' => 'Higher Deal Close Rates', 'text' => 'Equip your sales team with materials that make saying "yes" natural and easy.'],
            ['icon' => 'fa-crown', 'title' => 'Luxury Art Direction', 'text' => 'Stand out dramatically from competitors using generic Canva templates.'],
            ['icon' => 'fa-chart-pie', 'title' => 'Visualized Complex Data', 'text' => 'Transform complex technical architecture and financial metrics into intuitive graphics.'],
            ['icon' => 'fa-print', 'title' => 'Press-Ready Precision', 'text' => 'Pre-flighted print files prepared with exact bleeds, crop marks, and color profiles.'],
        ],
        'tech_stack' => ['Adobe InDesign CC', 'Adobe Illustrator CC', 'Adobe Photoshop CC', 'Vector Data Visualization', 'Interactive PDF Engines'],
        'metrics' => [
            ['num' => '100%', 'label' => 'Custom Luxury Art Direction'],
            ['num' => 'Press Ready', 'label' => 'Commercial Print Compliance'],
            ['num' => 'Top Tier', 'label' => 'Investor Deck Engagement'],
        ],
        'faqs' => [
            [
                'q' => 'Do you create both physical print collaterals and digital versions?',
                'a' => 'Yes. We deliver both high-resolution pre-flighted print PDFs (with bleed/crop marks) and lightweight interactive digital PDFs optimized for email and screen viewing.'
            ],
            [
                'q' => 'Can you write the copywriting for the brochures and pitch decks as well?',
                'a' => 'Yes. Our senior copywriters craft all headline copy, value statements, executive summaries, and product descriptions tailored to your target audience.'
            ],
            [
                'q' => 'What is your turnaround time for an investor pitch deck or brochure?',
                'a' => 'A standard custom collateral design project typically takes 1 to 2 weeks, depending on page count and review rounds.'
            ],
        ]
    ],

    'creative-advertising' => [
        'slug' => 'creative-advertising',
        'title' => 'Creative Advertising & Conceptual Campaigns',
        'short_title' => 'Creative Advertising',
        'parent_slug' => 'branding',
        'parent_name' => 'Branding, Creative & Visual Identity',
        'badge' => 'CONCEPT & COPY',
        'badge_color' => 'gold',
        'category' => 'creative',
        'category_name' => 'Creative & Identity',
        'icon' => 'fa-solid fa-lightbulb',
        'meta_description' => 'Big-idea creative advertising campaigns, conceptual visual storytelling, outdoor billboard design, multi-channel print campaigns, and viral digital concepts.',
        'hero_headline' => 'Break Through The Noise With <span class="gold-gradient-text">Big-Idea Creative Advertising</span>.',
        'hero_lead' => 'We conceive bold, unforgettable advertising concepts—combining sharp copy, provocative visual hooks, and strategic insight to spark conversations and capture market share.',
        'overview' => 'In an oversaturated media world, safe advertising is the most expensive mistake a brand can make. Ads that blend in simply get ignored. Web Optimizer conceives "Big-Idea" creative advertising campaigns engineered to provoke emotion, stimulate curiosity, and ignite commercial action. From national print campaigns and luxury outdoor billboards to disruptive digital activations, we craft campaigns that leave an indelible mark on culture.',
        'deliverables' => [
            [
                'title' => 'Big-Idea Campaign Concepts & Storyboards',
                'desc' => 'Develop central creative themes with multi-channel adaptations across print, outdoor, video, and social.'
            ],
            [
                'title' => 'Luxury Outdoor & Billboard Advertising (OOH)',
                'desc' => 'Large-scale billboard, airport terminal, and transit visual designs optimized for rapid 3-second comprehension.'
            ],
            [
                'title' => 'National Print Magazine & Newspaper Advertisements',
                'desc' => 'Editorial-grade full-page and double-page spread advertisements designed for premium publications.'
            ],
            [
                'title' => 'Disruptive Guerilla & Digital Activation Ideas',
                'desc' => 'Unconventional interactive marketing campaigns engineered to earn massive organic PR and social media buzz.'
            ],
            [
                'title' => 'Master Copywriting & Headline Crafting',
                'desc' => 'Sharp, memorable headlines and narrative copy that lodge into the audience\'s memory.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-bullhorn', 'title' => 'Unforgettable Market Recall', 'text' => 'Ads that people remember, quote, and talk about long after seeing them.'],
            ['icon' => 'fa-trophy', 'title' => 'Award-Caliber Creativity', 'text' => 'Bold artistic execution that establishes your brand as an imaginative market pioneer.'],
            ['icon' => 'fa-newspaper', 'title' => 'Earned Organic PR', 'text' => 'Creative concepts so provocative that media outlets write about them for free.'],
            ['icon' => 'fa-bolt', 'title' => 'Instant Category Differentiation', 'text' => 'Break away decisively from the clichés and tropes used by everyone else in your industry.'],
        ],
        'tech_stack' => ['Creative Concept Storyboarding', 'Adobe Creative Cloud', 'Large-Format OOH Specs', 'Print Press Standards', 'Viral Narrative Modeling'],
        'metrics' => [
            ['num' => '3-5', 'label' => 'Bold Conceptual Ad Angles'],
            ['num' => '100%', 'label' => 'Original Intellectual Craftsmanship'],
            ['num' => 'Zero', 'label' => 'Boring Clichés or Stock Tropes'],
        ],
        'faqs' => [
            [
                'q' => 'How do you develop creative concepts for advertising campaigns?',
                'a' => 'We start by uncovering a deep, unspoken customer truth or industry tension. We then brainstorm around this insight to craft unexpected, memorable visual and verbal connections that subvert expectations.'
            ],
            [
                'q' => 'Can you adapt creative campaign ideas for digital social ads?',
                'a' => 'Yes. Every big idea we create is designed to translate seamlessly into digital formats: Instagram Reels, YouTube bumpers, interactive web banners, and billboard displays.'
            ],
            [
                'q' => 'Do you manage media buying for billboards and print magazines?',
                'a' => 'We handle all creative direction, copywriting, and production-ready artwork, and can coordinate directly with your media buying agency or media owners.'
            ],
        ]
    ],

    'brand-consulting' => [
        'slug' => 'brand-consulting',
        'title' => 'Executive Brand Consulting & Tone-of-Voice Architecture',
        'short_title' => 'Brand Consulting',
        'parent_slug' => 'branding',
        'parent_name' => 'Branding, Creative & Visual Identity',
        'badge' => 'STRATEGIC ADVISORY',
        'badge_color' => 'gold',
        'category' => 'creative',
        'category_name' => 'Creative & Identity',
        'icon' => 'fa-solid fa-comments',
        'meta_description' => 'Senior-level brand advisory, brand equity audits, repositioning guidance, corporate rebranding leadership, and strategic tone-of-voice frameworks for CXOs.',
        'hero_headline' => 'Navigate Rebranding & Growth With <span class="gold-gradient-text">Executive Brand Consulting</span>.',
        'hero_lead' => 'We provide senior strategic advisory for founders, boards, and CXOs navigating high-stakes rebranding, corporate mergers, category repositioning, or luxury market transitions.',
        'overview' => 'As enterprises evolve through growth phases, acquisitions, or market shifts, their brand must be strategically re-aligned to reflect new realities. Mismanaging a rebrand or pivot can alienate loyal customers and erase millions in hard-won brand equity. Web Optimizer acts as trusted brand counsel to executive leadership. We conduct comprehensive brand perception audits, evaluate market risks, and architect seamless transition roadmaps.',
        'deliverables' => [
            [
                'title' => 'Brand Perception & Equity Diagnostic Audit',
                'desc' => 'Quantitative and qualitative review of current brand perception among customers, employees, and stakeholders.'
            ],
            [
                'title' => 'Corporate Rebranding & Transition Roadmap',
                'desc' => 'Step-by-step migration plan mitigating brand equity risks during major name, visual, or structural changes.'
            ],
            [
                'title' => 'Comprehensive Tone-of-Voice & Verbal Identity Guide',
                'desc' => 'Codify how your brand speaks, writes, and communicates across executive emails, PR, and social media.'
            ],
            [
                'title' => 'Mergers & Acquisitions (M&A) Brand Architecture',
                'desc' => 'Determine whether to consolidate acquired entities under a branded house, house of brands, or hybrid model.'
            ],
            [
                'title' => 'Board & Executive Alignment Workshops',
                'desc' => 'Facilitate collaborative consensus workshops with founders, investors, and leadership teams.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-shield-halved', 'title' => 'De-Risk Major Rebranding', 'text' => 'Protect existing brand loyalty, customer recognition, and SEO equity throughout brand pivots.'],
            ['icon' => 'fa-scale-balanced', 'title' => 'Objective Outside Perspective', 'text' => 'Unvarnished, data-backed strategic counsel that cuts through internal corporate politics.'],
            ['icon' => 'fa-arrow-trend-up', 'title' => 'Accelerated Enterprise Valuation', 'text' => 'A cohesive, prestigious brand directly commands higher multiples in capital raises or acquisitions.'],
            ['icon' => 'fa-handshake', 'title' => 'Leadership Consensus', 'text' => 'Align your executive board around a single, inspiring vision for the next decade.'],
        ],
        'tech_stack' => ['Stakeholder Interview Methodologies', 'Perceptual Brand Mapping', 'M&A Brand Frameworks', 'Tone-of-Voice Lexicons', 'Executive Briefing Decks'],
        'metrics' => [
            ['num' => 'CXO', 'label' => 'Senior-Level Advisory'],
            ['num' => '100%', 'label' => 'Brand Equity Preservation'],
            ['num' => 'Zero', 'label' => 'Internal Political Bias'],
        ],
        'faqs' => [
            [
                'q' => 'When is the right time for a company to undergo a strategic rebrand?',
                'a' => 'Key indicators include: outgrowing your original name/logo, pivoting to a higher-end customer demographic, confusing brand architecture after mergers, or suffering from brand fatigue compared to modern competitors.'
            ],
            [
                'q' => 'How do you ensure our employees embrace the new brand identity?',
                'a' => 'We build internal brand launch kits, culture guides, and town hall presentation decks that inspire employees to become proud ambassadors of the new brand vision.'
            ],
            [
                'q' => 'Can brand consulting be done remotely or in-person?',
                'a' => 'We conduct executive discovery workshops both in-person at your corporate offices or virtually via interactive digital strategy sessions.'
            ],
        ]
    ],





    'whatsapp-automation' => [
        'slug' => 'whatsapp-automation',
        'title' => 'WhatsApp Business API & Chatbot Automation',
        'short_title' => 'WhatsApp Automation',
        'parent_slug' => 'allied-services',
        'parent_name' => 'Allied Growth, Automation & Consulting',
        'badge' => 'INSTANT ENGAGEMENT',
        'badge_color' => 'emerald',
        'category' => 'growth',
        'category_name' => 'Growth & Automation',
        'icon' => 'fa-brands fa-whatsapp',
        'meta_description' => 'Official WhatsApp Business API setup, green tick verification, automated lead qualification chatbots, CRM integration, and high-converting broadcast campaigns.',
        'hero_headline' => 'Convert Leads Instantly With <span class="gold-gradient-text">WhatsApp Business API & Chatbots</span>.',
        'hero_lead' => 'We deploy official WhatsApp Business API solutions—powering automated instant lead responses, CRM-synced chatbots, green tick verification, and broadcast messaging.',
        'overview' => 'With open rates exceeding 98%, WhatsApp is the primary communication channel for Indian and international consumers. Slow response times cause hot leads to buy from competitors. Web Optimizer implements enterprise WhatsApp Business API automation. We build intelligent conversational chatbots that qualify leads, answer FAQs, deliver product catalogs, and book appointments—freeing your sales team to focus on closing.',
        'deliverables' => [
            [
                'title' => 'Official Meta WhatsApp Business API & Green Tick Application',
                'desc' => 'Secure verified enterprise WhatsApp API access with your official brand name and green verification badge.'
            ],
            [
                'title' => 'Interactive Conversational Lead Qualification Chatbots',
                'desc' => 'Build automated interactive question flows that collect budget, requirements, and contact info in seconds.'
            ],
            [
                'title' => 'Bi-Directional CRM & Website Synchronization',
                'desc' => 'Every WhatsApp chat and captured detail syncs instantly into HubSpot, Zoho, or Google Sheets.'
            ],
            [
                'title' => 'Broadcast Campaigns & Promotional Catalogs',
                'desc' => 'Send approved marketing template broadcasts to opted-in customer lists with 98% open rates.'
            ],
            [
                'title' => 'Multi-Agent Shared Team Inbox',
                'desc' => 'Empower your entire sales and support team to respond from a single verified corporate WhatsApp number.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-bolt', 'title' => 'Sub-5 Second Response', 'text' => 'Engage incoming inquiries immediately, before they leave your website.'],
            ['icon' => 'fa-comments', 'title' => '98% Message Open Rate', 'text' => 'WhatsApp messages are read within 3 minutes, outperforming email marketing 4x.'],
            ['icon' => 'fa-circle-check', 'title' => 'Official Green Tick Trust', 'text' => 'The verified green badge confirms your status as a legitimate, trusted brand.'],
            ['icon' => 'fa-users-gear', 'title' => 'Unified Shared Team Inbox', 'text' => 'No more lost customer chats on individual employee personal phones.'],
        ],
        'tech_stack' => ['Meta WhatsApp Cloud API', 'Wati / AiSensy / Gallabox', 'ManyChat WhatsApp', 'Webhooks & REST APIs', 'HubSpot / Zoho CRM Sync'],
        'metrics' => [
            ['num' => '98%', 'label' => 'Average WhatsApp Open Rate'],
            ['num' => '<5s', 'label' => 'Instant Automated Response'],
            ['num' => '+45%', 'label' => 'Lead-to-Meeting Conversion Rate'],
        ],
        'faqs' => [
            [
                'q' => 'What is the difference between WhatsApp Business App and the official WhatsApp Business API?',
                'a' => 'The free WhatsApp Business app is tied to a single phone and cannot support multi-agent teams or automated webhooks. The official API supports multiple team members, automated chatbots, CRM integrations, and green tick verification.'
            ],
            [
                'q' => 'Will our WhatsApp number get blocked for sending marketing messages?',
                'a' => 'No. By using official Meta-approved template messages and sending only to opted-in contacts, your phone number remains 100% compliant and protected against bans.'
            ],
            [
                'q' => 'Can leads on our website initiate WhatsApp conversations with 1 click?',
                'a' => 'Yes. We place smart floating WhatsApp buttons and pre-filled message triggers on your website so users can start chatting with one touch on their phones.'
            ],
        ]
    ],

    'google-my-business' => [
        'slug' => 'google-my-business',
        'title' => 'Google My Business (GMB) Optimization & Maps Domination',
        'short_title' => 'GMB Optimization',
        'parent_slug' => 'allied-services',
        'parent_name' => 'Allied Growth, Automation & Consulting',
        'badge' => 'LOCAL PACK TOP 3',
        'badge_color' => 'emerald',
        'category' => 'growth',
        'category_name' => 'Growth & Automation',
        'icon' => 'fa-solid fa-map-pin',
        'meta_description' => 'Complete Google Business Profile (GBP) management, weekly geo-tagged updates, review generation funnels, category optimization, and local map pack dominance.',
        'hero_headline' => 'Conquer Local Search With <span class="gold-gradient-text">Google My Business (GMB) Optimization</span>.',
        'hero_lead' => 'We manage and optimize your Google Business Profile to outrank local competitors, drive direct phone inquiries, and dominate the top 3 Google Map results.',
        'overview' => 'When clients search for services "near me", Google\'s Map Pack is the first thing they see. An unoptimized or abandoned Google profile sends customers directly to your competitors. Web Optimizer provides active Google Business Profile management. We optimize primary and secondary business categories, post weekly geo-tagged updates, manage customer review responses, and build local trust signals that push your profile into the top 3 map rankings.',
        'deliverables' => [
            [
                'title' => 'Comprehensive Profile Audit & Category Re-Alignment',
                'desc' => 'Identify optimal primary and secondary Google business categories to maximize local keyword visibility.'
            ],
            [
                'title' => 'Weekly Geo-Tagged Photo & Update Publishing',
                'desc' => 'Publish high-resolution, geo-tagged photos and weekly promotional posts that signal active local operations.'
            ],
            [
                'title' => 'Product & Service Catalog Architecture on Google',
                'desc' => 'Build an exhaustive menu of services with rich descriptions, pricing guidance, and direct booking links.'
            ],
            [
                'title' => 'Professional Review Response & Sentiment Management',
                'desc' => 'Craft professional, keyword-rich responses to all client reviews to reinforce local SEO ranking signals.'
            ],
            [
                'title' => 'Spam Competitor Listing Takedown',
                'desc' => 'Identify and report fake or keyword-stuffed competitor listings that violate Google guidelines.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-map-location-dot', 'title' => 'Top 3 Map Pack Placement', 'text' => 'Secure the most prominent local visual real estate on Google search results.'],
            ['icon' => 'fa-phone', 'title' => '+70% Direct Phone Inquiries', 'text' => 'Make calling your business frictionless for local prospects on smartphones.'],
            ['icon' => 'fa-directions', 'title' => 'Drive Physical Footfall', 'text' => 'Guide prospects directly to your office, clinic, or showroom with Google Maps directions.'],
            ['icon' => 'fa-star', 'title' => 'Stellar 5-Star Reputation', 'text' => 'Build an authoritative review portfolio that gives potential clients instant confidence.'],
        ],
        'tech_stack' => ['Google Business Profile Manager', 'Geo-Tagging EXIF Tools', 'Local Falcon Rank Tracker', 'Google Maps API', 'BrightLocal'],
        'metrics' => [
            ['num' => 'Top 3', 'label' => 'Target Map Pack Placement'],
            ['num' => '+68%', 'label' => 'Growth in Direct Phone Calls'],
            ['num' => '100%', 'label' => 'Active Weekly Profile Maintenance'],
        ],
        'faqs' => [
            [
                'q' => 'How often should a Google Business Profile be updated?',
                'a' => 'Google favors active businesses. We publish new geo-tagged photos and promotional updates every week to maintain maximum algorithmic search freshness.'
            ],
            [
                'q' => 'Can you help remove fake or malicious negative Google reviews?',
                'a' => 'Yes. While Google does not allow removal of genuine customer feedback, we can flag and successfully appeal reviews that violate Google\'s prohibited content guidelines (spam, hate speech, competitor attacks).'
            ],
            [
                'q' => 'Do we need a physical office address to have a Google Business Profile?',
                'a' => 'You need a physical location for initial postcard or video verification, but we can configure your profile as a "Service Area Business" to hide your street address if you serve clients at their locations.'
            ],
        ]
    ],

    'analytics-reporting' => [
        'slug' => 'analytics-reporting',
        'title' => 'Advanced Analytics, Conversions API & Looker Reporting',
        'short_title' => 'Analytics & Reporting',
        'parent_slug' => 'allied-services',
        'parent_name' => 'Allied Growth, Automation & Consulting',
        'badge' => 'REAL-TIME DATA',
        'badge_color' => 'emerald',
        'category' => 'growth',
        'category_name' => 'Growth & Automation',
        'icon' => 'fa-solid fa-chart-pie',
        'meta_description' => 'Enterprise web analytics, Google Analytics 4 (GA4), Google Tag Manager (GTM), Meta Conversions API (CAPI), and custom Looker Studio executive dashboards.',
        'hero_headline' => 'Make Data-Backed Decisions With <span class="gold-gradient-text">Advanced Analytics & Dashboards</span>.',
        'hero_lead' => 'We architect enterprise tracking and analytics infrastructure—giving your leadership team transparent, real-time dashboards that prove exactly where your revenue originates.',
        'overview' => 'Marketing without accurate attribution is flying blind. Relying on disconnected reports leads to misallocated ad capital and missed growth opportunities. Web Optimizer builds enterprise data tracking architectures using Google Analytics 4, server-side Google Tag Manager, and interactive Looker Studio dashboards. We track every form submission, button click, phone call, and closed sale back to the original marketing touchpoint.',
        'deliverables' => [
            [
                'title' => 'Google Analytics 4 (GA4) Custom Event & Funnel Setup',
                'desc' => 'Track custom micro-conversions, scroll depths, video plays, and multi-step form progress.'
            ],
            [
                'title' => 'Server-Side Google Tag Manager (GTM) Architecture',
                'desc' => 'Execute tag tracking on private cloud servers for enhanced security, faster page speeds, and data accuracy.'
            ],
            [
                'title' => 'Interactive Executive Looker Studio Dashboards',
                'desc' => 'Real-time custom dashboards consolidating Google Ads, Meta Ads, SEO traffic, and revenue in one view.'
            ],
            [
                'title' => 'Call Tracking & Dynamic Number Insertion (DNI)',
                'desc' => 'Track phone calls back to specific keywords and campaigns with call recording and duration logs.'
            ],
            [
                'title' => 'E-Commerce Purchase Funnel & Cart Drop-Off Tracking',
                'desc' => 'Granular e-commerce analytics tracking product impressions, add-to-carts, checkouts, and refund rates.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-chart-simple', 'title' => '100% Attribution Transparency', 'text' => 'Know exactly which channels, keywords, and ads produce real revenue.'],
            ['icon' => 'fa-bolt', 'title' => 'Faster Website Speed', 'text' => 'Server-side tracking moves heavy third-party tracking scripts off the visitor\'s browser.'],
            ['icon' => 'fa-gauge', 'title' => 'Real-Time Executive Clarity', 'text' => 'Access live performance metrics anytime without waiting for end-of-month manual reports.'],
            ['icon' => 'fa-arrow-down-short-wide', 'title' => 'Eliminate Wasted Budget', 'text' => 'Quickly cut non-performing campaigns and double down on high-ROI channels.'],
        ],
        'tech_stack' => ['Google Analytics 4 (GA4)', 'Google Tag Manager (GTM & Server)', 'Looker Studio', 'Meta Conversions API', 'BigQuery', 'CallRail'],
        'metrics' => [
            ['num' => '100%', 'label' => 'Tracking Accuracy & Data Hygiene'],
            ['num' => 'Real-Time', 'label' => 'Live Looker Studio Dashboard'],
            ['num' => '0', 'label' => 'Unattributed Conversion Gaps'],
        ],
        'faqs' => [
            [
                'q' => 'Why is Google Analytics 4 (GA4) so different from Universal Analytics?',
                'a' => 'GA4 is built on an event-based data model designed for cross-platform mobile and web tracking. It requires custom event configuration to track lead submissions and e-commerce transactions properly.'
            ],
            [
                'q' => 'Will our team be able to understand the Looker Studio dashboard?',
                'a' => 'Yes. We design dashboards tailored specifically for business executives: clean charts, clear ROI numbers, and no confusing technical jargon.'
            ],
            [
                'q' => 'How does server-side tagging protect customer privacy?',
                'a' => 'Server-side GTM filters and anonymizes IP addresses and sensitive user data on your private server before passing only compliant event signals to ad platforms.'
            ],
        ]
    ],

    'online-reputation' => [
        'slug' => 'online-reputation',
        'title' => 'Online Reputation Management (ORM) & Review Engineering',
        'short_title' => 'Reputation Management',
        'parent_slug' => 'allied-services',
        'parent_name' => 'Allied Growth, Automation & Consulting',
        'badge' => 'BRAND DEFENSE',
        'badge_color' => 'emerald',
        'category' => 'growth',
        'category_name' => 'Growth & Automation',
        'icon' => 'fa-solid fa-star-half-stroke',
        'meta_description' => 'Proactive online reputation management (ORM), negative review suppression, brand sentiment defense, Glassdoor/Google review engineering, and crisis management.',
        'hero_headline' => 'Safeguard Your Corporate Image With <span class="gold-gradient-text">Elite Online Reputation Management</span>.',
        'hero_lead' => 'We protect and engineer your digital reputation—suppressing defamatory search results, generating verified 5-star customer reviews, and monitoring brand sentiment 24/7.',
        'overview' => 'In business, perception is reality. A single negative Google search result or defamatory review can cost an enterprise millions in lost contracts and investor confidence. Web Optimizer provides discreet, aggressive Online Reputation Management (ORM). We push negative search results off page 1 through positive asset promotion, establish automated review funnels that flood your profiles with 5-star feedback, and actively monitor brand mentions.',
        'deliverables' => [
            [
                'title' => 'SERP Suppression of Negative & Defamatory Search Results',
                'desc' => 'Promote authoritative web assets (press releases, LinkedIn, YouTube, media features) to push negative links to page 2+.'
            ],
            [
                'title' => 'Automated 5-Star Customer Review Generation Funnel',
                'desc' => 'WhatsApp and SMS post-purchase sequences that capture positive reviews on Google, Trustpilot, and Clutch.'
            ],
            [
                'title' => 'Negative Review Mitigation & Legal Removal Filing',
                'desc' => 'Draft legal takedown requests and policy violation appeals for false, defamatory, or competitor review attacks.'
            ],
            [
                'title' => '24/7 Real-Time Brand Mention & Crisis Monitoring',
                'desc' => 'Instant alerts whenever your brand, founder, or key executives are mentioned online across news and forums.'
            ],
            [
                'title' => 'Executive Personal Reputation Shield',
                'desc' => 'Curate authoritative digital profiles for founders and CXOs to dominate branded search queries.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-shield-halved', 'title' => 'Protected Brand Equity', 'text' => 'Ensure prospective clients and investors only see positive, credible news about your company.'],
            ['icon' => 'fa-arrow-down', 'title' => 'Negative Link Suppression', 'text' => 'Bury unflattering search results past page 2 where 99% of searchers never look.'],
            ['icon' => 'fa-star', 'title' => 'Abundant 5-Star Social Proof', 'text' => 'Generate a continuous stream of verified positive reviews on Google and industry portals.'],
            ['icon' => 'fa-bell', 'title' => 'Early Crisis Detection', 'text' => 'Catch public relations flare-ups early before they snowball into full-blown crises.'],
        ],
        'tech_stack' => ['Brand24', 'Google Alerts', 'Trustpilot Enterprise', 'Google Business Profile Manager', 'Muck Rack', 'ReviewPush'],
        'metrics' => [
            ['num' => 'Page 1', 'label' => 'Positive Brand SERP Dominance'],
            ['num' => '99%', 'label' => 'Defamatory Search Suppression'],
            ['num' => '24/7', 'label' => 'Continuous Sentiment Monitoring'],
        ],
        'faqs' => [
            [
                'q' => 'Can negative Google search results be removed completely?',
                'a' => 'If a link violates Google legal terms or contains defamatory content, we can file for direct legal removal. In other cases, we execute "SERP suppression"—building and ranking authoritative positive assets to push negative links off page 1.'
            ],
            [
                'q' => 'How do you encourage clients to leave 5-star reviews?',
                'a' => 'We build seamless SMS and WhatsApp review funnels triggered when a client has a great experience. By making the review process a one-click experience on their phone, review completion rates jump by over 60%.'
            ],
            [
                'q' => 'Is reputation management confidential?',
                'a' => '100% confidential. All reputation management and crisis communications services are conducted under strict non-disclosure agreements (NDAs).'
            ],
        ]
    ],

    'strategy-consulting' => [
        'slug' => 'strategy-consulting',
        'title' => 'Digital Transformation Strategy & Executive Consulting',
        'short_title' => 'Strategy & Consulting',
        'parent_slug' => 'allied-services',
        'parent_name' => 'Allied Growth, Automation & Consulting',
        'badge' => 'CXO ADVISORY',
        'badge_color' => 'emerald',
        'category' => 'growth',
        'category_name' => 'Growth & Automation',
        'icon' => 'fa-solid fa-compass',
        'meta_description' => 'CXO-level digital transformation strategy, martech stack evaluation, enterprise technology roadmaps, conversion auditing, and executive growth consulting.',
        'hero_headline' => 'Accelerate Enterprise Growth With <span class="gold-gradient-text">Digital Transformation Consulting</span>.',
        'hero_lead' => 'We provide senior strategic counsel for enterprise leaders—evaluating technology stacks, redesigning customer acquisition roadmaps, and eliminating operational friction.',
        'overview' => 'Many companies invest heavily in digital tools, software, and marketing agencies without seeing a proportionate return on investment. The culprit is almost always strategic fragmentation—disjointed tools that do not talk to each other and marketing that does not align with business economics. Web Optimizer provides executive-level digital transformation advisory. We audit your entire technology and acquisition stack, eliminate wasteful spending, and architect an integrated roadmap designed for compounding growth.',
        'deliverables' => [
            [
                'title' => 'Enterprise Digital Ecosystem & Martech Stack Audit',
                'desc' => 'Comprehensive review of your software tools, subscriptions, CMS, and analytics to eliminate bloat and redundancy.'
            ],
            [
                'title' => 'Full-Funnel Customer Acquisition Architecture',
                'desc' => 'Design unified customer journeys connecting top-of-funnel traffic, middle-of-funnel nurture, and sales closing.'
            ],
            [
                'title' => 'Technology Vendor & Agency Oversight Advisory',
                'desc' => 'Act as your technical advocate in evaluating third-party software contracts and external agency performance.'
            ],
            [
                'title' => 'Quarterly Strategic Growth Roadmaps & OKR Alignment',
                'desc' => 'Establish quantitative milestones, KPI dashboards, and quarterly operational sprints for your internal teams.'
            ],
            [
                'title' => 'Executive Discovery Workshops & Board Presentations',
                'desc' => 'Facilitate executive workshops to align founders, directors, and division heads on digital priorities.'
            ],
        ],
        'benefits' => [
            ['icon' => 'fa-scale-balanced', 'title' => 'Objective Technical Guidance', 'text' => 'Make technology decisions based on genuine engineering merit, not agency sales pitches.'],
            ['icon' => 'fa-coins', 'title' => 'Eliminate Redundant Software Costs', 'text' => 'Consolidate bloated SaaS subscriptions and save thousands annually in unused tools.'],
            ['icon' => 'fa-arrow-trend-up', 'title' => 'Unified Growth Acceleration', 'text' => 'Align marketing, engineering, and sales into a synchronized revenue engine.'],
            ['icon' => 'fa-compass', 'title' => 'Clear 12-Month Execution Roadmap', 'text' => 'Know exactly what digital initiatives to tackle each quarter for maximum ROI.'],
        ],
        'tech_stack' => ['Enterprise Martech Frameworks', 'Gartner & Forrester Research', 'Customer Journey Mapping', 'KPI Dashboards', 'Executive Decision Matrix'],
        'metrics' => [
            ['num' => 'CXO', 'label' => 'Senior Technical Counsel'],
            ['num' => '-25%', 'label' => 'Average Martech Cost Reduction'],
            ['num' => '3x', 'label' => 'Operational Efficiency Acceleration'],
        ],
        'faqs' => [
            [
                'q' => 'How does digital consulting differ from hiring a marketing agency?',
                'a' => 'Marketing agencies focus on running specific campaigns (ads, social media). Our digital consulting evaluates the entire business engine: software infrastructure, data flow, operational bottlenecks, team capabilities, and agency performance.'
            ],
            [
                'q' => 'Who leads the consulting engagements?',
                'a' => 'Our consulting engagements are led personally by Founder & Senior Web Developer Hrushikesh Swain and senior technology strategists with over a decade of real-world enterprise experience.'
            ],
            [
                'q' => 'How long does a strategic consulting engagement last?',
                'a' => 'We offer both 4-week intensive digital audits and ongoing quarterly advisory retainers for companies executing long-term digital transformation.'
            ],
        ]
    ],

    'website-development' => [
        'slug' => 'website-development', 
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'title' => 'Website Design & Custom Development',
        'short_title' => 'Web Development',
        'badge' => 'CORE PILLAR',
        'badge_color' => 'gold',
        'category' => 'web',
        'category_name' => 'Web & Development',
        'icon' => 'fa-laptop-code',
        'meta_description' => 'Bespoke WordPress solutions, custom PHP web applications, and luxury responsive websites engineered for speed, conversion, and 99+ Core Web Vitals.',
        'hero_headline' => 'Architecting <span class="gold-gradient-text">Luxury Websites</span> With Unrivaled Speed & Conversion.',
        'hero_lead' => 'We engineer bespoke digital platforms, enterprise WordPress architectures, and high-performance web applications tailored for brands that refuse to settle for slow, bloated templates.',
        'overview' => 'In a digital ecosystem where attention spans are measured in milliseconds, your website is your primary business asset. Web Optimizer eliminates generic page builders and code bloat in favor of handcrafted WordPress architectures, semantic HTML5, modern SCSS, and optimized PHP 8.x. Every deployment is precision-engineered to load in under a second, pass Google Core Web Vitals with flawless 95+ scores, and guide high-intent prospects effortlessly toward conversion.',
        'deliverables' => [
            [
                'title' => 'Custom WordPress & Enterprise CMS Development',
                'desc' => 'Hand-coded WordPress backends with zero plugin bloat, tailored Gutenberg blocks, custom post types, and intuitive editorial controls for your team.'
            ],
            [
                'title' => 'Mobile-First Responsive UI/UX Architecture',
                'desc' => 'Fluid responsive grids ensuring flawless visual hierarchy and micro-interactions across smartphones, tablets, high-res laptops, and ultra-wide monitors.'
            ],
            [
                'title' => 'Sub-Second Page Speed & 99+ Core Web Vitals Pass',
                'desc' => 'Rigorous frontend optimization achieving sub-800ms load times, optimal Largest Contentful Paint (LCP), and minimal Interaction to Next Paint (INP).'
            ],
            [
                'title' => 'Headless Web Applications & REST API Handlers',
                'desc' => 'Decoupled web interfaces powered by lightweight JavaScript, serverless functions, and asynchronous API integrations for enterprise agility.'
            ],
            [
                'title' => 'Enterprise Security Hardening & Zero-Downtime Maintenance',
                'desc' => 'Multi-layer security protocols, brute-force shielding, SSL/TLS hardening, automated off-site backups, and proactive uptime monitoring.'
            ]
        ],
        'benefits' => [
            ['icon' => 'fa-gauge-high', 'title' => 'Sub-Second Loading', 'text' => 'Fast loading reduces bounce rates by up to 60% and increases search engine crawl frequency.'],
            ['icon' => 'fa-shield-halved', 'title' => 'Hardened Security', 'text' => 'Custom architectures eliminate vulnerable third-party plugins, preventing exploits and unauthorized access.'],
            ['icon' => 'fa-chart-pie', 'title' => 'Higher Conversions', 'text' => 'Frictionless navigation and strategic call-to-actions directly amplify inbound inquiry and sales rates.'],
            ['icon' => 'fa-mobile-screen', 'title' => '100% Cross-Device Fluidity', 'text' => 'Pixel-perfect responsiveness across all screen dimensions and modern mobile browsers.']
        ],
        'tech_stack' => ['PHP 8.x', 'WordPress Core', 'Bootstrap 5', 'MySQL', 'REST API', 'SCSS / CSS3', 'JavaScript (ES6+)', 'Cloudflare CDN'],
        'metrics' => [
            ['num' => '99.8%', 'label' => 'Core Web Vitals Pass'],
            ['num' => '<800ms', 'label' => 'Average Page Load Time'],
            ['num' => '158+', 'label' => 'Custom Projects Delivered']
        ],
        'faqs' => [
            [
                'q' => 'Why choose custom WordPress over pre-made ThemeForest themes?',
                'a' => 'Pre-made commercial themes are packed with hundreds of unused scripts, sliders, and heavy page builders that severely bottleneck site speed. Web Optimizer builds custom, lightweight themes containing only the exact features your business requires—guaranteeing peak performance and security.'
            ],
            [
                'q' => 'Will my team be able to update content without technical knowledge?',
                'a' => 'Yes. We build intuitive custom fields and native WordPress block patterns so your marketing team can effortlessly publish blogs, update banners, and edit case studies without touching a single line of code.'
            ],
            [
                'q' => 'How long does a bespoke website design and engineering project take?',
                'a' => 'A custom luxury website typically takes between 3 to 6 weeks from initial architecture, UI wireframing, and code development to final speed audits and production deployment.'
            ]
        ]
    ],

    'technical-seo' => [
        'slug' => 'technical-seo', 
        'parent_slug' => 'ai-seo',
        'parent_name' => 'AI SEO & Search Engine Optimization',
        'title' => 'Key Technical SEO & AI Search Growth',
        'short_title' => 'Technical SEO',
        'badge' => 'HIGH IMPACT',
        'badge_color' => 'gold',
        'category' => 'growth',
        'category_name' => 'Growth & SEO',
        'icon' => 'fa-chart-line',
        'meta_description' => 'Comprehensive website technical audits, Core Web Vitals optimization, schema markup, and crawl indexing architecture for page 1 Google rankings.',
        'hero_headline' => 'Dominating Search Engine Rankings With <span class="gold-gradient-text">Algorithmic Precision</span>.',
        'hero_lead' => 'We execute surgical technical SEO audits, site speed re-engineering, structured data injection, and crawl budget optimization to guarantee top Google visibility and AI search discoverability.',
        'overview' => 'Content and backlinks are ineffective if search engine crawlers cannot properly discover, index, and render your site. Web Optimizer treats Technical SEO as a high-precision engineering discipline. We audit every layer of your digital architecture—eliminating redirect chains, resolving indexation bloat, accelerating server response times (TTFB), and implementing rich Schema.org structured data to capture Google rich snippets and generative search visibility.',
        'deliverables' => [
            [
                'title' => 'Website Technical Audit & Crawlability Diagnostics',
                'desc' => 'Comprehensive site crawl using enterprise tools to uncover orphaned pages, status code errors, canonical conflicts, and crawl budget bottlenecks.'
            ],
            [
                'title' => 'Website Speed & Core Web Vitals (LCP, INP, CLS)',
                'desc' => 'In-depth diagnostic optimization eliminating render-blocking CSS/JS, minimizing main-thread execution time, and achieving green scores across Google PageSpeed.'
            ],
            [
                'title' => 'Crawling & Indexing Optimization Pipeline',
                'desc' => 'Surgical configuration of robots.txt, XML sitemaps, pagination headers, and noindex directives to direct crawler attention to high-value landing pages.'
            ],
            [
                'title' => 'Schema Markup & Structured Data (JSON-LD)',
                'desc' => 'Enterprise Schema.org integration for LocalBusiness, ProfessionalService, Organization, FAQ, Article, and Product to secure Google Rich Results.'
            ],
            [
                'title' => 'Website Architecture & URL Hierarchy Optimization',
                'desc' => 'Strategic internal link sculpting, breadcrumb hierarchy structuring, and clean URL routing to maximize PageRank distribution across your domain.'
            ]
        ],
        'benefits' => [
            ['icon' => 'fa-magnifying-glass-chart', 'title' => '100% Indexing Health', 'text' => 'Ensure every commercial page is indexed accurately by Google and Bing without crawler waste.'],
            ['icon' => 'fa-bolt', 'title' => 'Google Core Web Vitals Pass', 'text' => 'Gain an immediate ranking advantage over competitors failing Google Page Experience metrics.'],
            ['icon' => 'fa-star', 'title' => 'Rich Snippet Visibility', 'text' => 'Stand out in SERPs with star ratings, FAQs, and price attributes that increase organic click-through rates.'],
            ['icon' => 'fa-arrow-trend-up', 'title' => 'Sustained Organic Growth', 'text' => 'Build a resilient technical foundation immune to volatile Google core search algorithm updates.']
        ],
        'tech_stack' => ['Google Search Console', 'Screaming Frog SEO Spider', 'Schema.org JSON-LD', 'Google Lighthouse', 'Deep Log Analyzer', 'Ahrefs / SEMrush'],
        'metrics' => [
            ['num' => '+320%', 'label' => 'Organic Impression Growth'],
            ['num' => '100%', 'label' => 'Crawl Indexation Health'],
            ['num' => '0', 'label' => 'Critical SERP Errors']
        ],
        'faqs' => [
            [
                'q' => 'What is the difference between Technical SEO and On-Page SEO?',
                'a' => 'On-Page SEO focuses on keyword targeting, headings, and copy. Technical SEO focuses on the underlying infrastructure: server response, code rendering, mobile performance, XML sitemaps, crawl efficiency, and structured data that allow search engines to access and index your content effortlessly.'
            ],
            [
                'q' => 'How soon will I see ranking improvements after a Technical SEO overhaul?',
                'a' => 'Once technical issues like crawl blocks, speed bottlenecks, and schema errors are resolved and recrawled by Google, clients typically observe ranking and impression improvements within 2 to 6 weeks.'
            ],
            [
                'q' => 'Do you provide detailed technical reports with code-level fixes?',
                'a' => 'Yes. We deliver comprehensive audit documentation accompanied by exact code snippets, server directives, and direct hands-on implementation by our senior engineering team.'
            ]
        ]
    ],

    'performance-marketing' => [
        'slug' => 'performance-marketing', 
        'parent_slug' => 'performance-marketing',
        'parent_name' => 'Performance Marketing & Paid Acquisition',
        'title' => 'Performance Marketing & Paid Acquisition',
        'short_title' => 'Performance Marketing',
        'badge' => 'ROI & ADS',
        'badge_color' => 'cyan',
        'category' => 'growth',
        'category_name' => 'Growth & SEO',
        'icon' => 'fa-bullseye',
        'meta_description' => 'Data-backed performance marketing, Google Search Ads, Meta Ads, and full-funnel paid acquisition engineered to maximize ROAS and minimize CAC.',
        'hero_headline' => 'Scale Revenue With <span class="gold-gradient-text">High-Precision Paid Advertising</span> & Proven ROAS.',
        'hero_lead' => 'We engineer data-driven PPC campaigns, Google Performance Max ads, and high-converting Meta funnels designed to acquire qualified customers with measurable, transparent return on ad spend.',
        'overview' => 'Paid media is an investment in measurable revenue, not vanity impressions. Web Optimizer designs full-funnel acquisition strategies targeting prospects at the exact moment of commercial intent. By pairing algorithmic bid management with bespoke landing page conversion rate optimization (CRO) and server-side tracking, we eliminate wasted ad budget, slash customer acquisition costs (CAC), and scale profitable campaigns across Google Search, Display, YouTube, and Meta.',
        'deliverables' => [
            [
                'title' => 'Google Search, Display & Performance Max Ad Campaigns',
                'desc' => 'High-intent keyword bidding, negative keyword sculpting, responsive search ads, and smart bidding models tailored for qualified lead capture.'
            ],
            [
                'title' => 'Meta Ads (Facebook & Instagram High-Converting Funnels)',
                'desc' => 'Multi-tier creative testing, lookalike audience modeling, and dynamic catalog ads engineered for e-commerce and high-ticket service conversions.'
            ],
            [
                'title' => 'Conversion Rate Optimization (CRO) & A/B Page Testing',
                'desc' => 'Design and continuous A/B testing of high-converting landing pages with speed-optimized code and persuasive behavioral psychology triggers.'
            ],
            [
                'title' => 'Dynamic Remarketing, Retargeting & CAC Minimization',
                'desc' => 'Precision audience segmentation re-engaging cart abandoners and past website visitors with tailored promotional incentives and social proof.'
            ],
            [
                'title' => 'Real-Time Multi-Touch Analytics & Attribution Tracking',
                'desc' => 'Server-side Conversions API (CAPI), Google Tag Manager architecture, and customized Looker Studio reporting dashboards.'
            ]
        ],
        'benefits' => [
            ['icon' => 'fa-chart-line', 'title' => 'Predictable ROAS', 'text' => 'Transparent ad spend allocation engineered to yield consistent 3x-6x return on advertising capital.'],
            ['icon' => 'fa-arrow-down-short-wide', 'title' => 'Lower Acquisition Costs', 'text' => 'Continuous creative testing and negative keyword pruning systematically reduce cost per acquisition (CPA).'],
            ['icon' => 'fa-users', 'title' => 'High-Intent Traffic', 'text' => 'Target prospects actively searching for your high-value solutions rather than broadcasting to passive audiences.'],
            ['icon' => 'fa-database', 'title' => 'Zero Attribution Loss', 'text' => 'Server-side tracking bypasses iOS browser cookie restrictions for 100% accurate conversion data.']
        ],
        'tech_stack' => ['Google Ads (PPC / PMax)', 'Meta Ads Manager', 'Google Tag Manager', 'Conversions API (CAPI)', 'Looker Studio', 'Hotjar'],
        'metrics' => [
            ['num' => '3.8x', 'label' => 'Average Campaign ROAS'],
            ['num' => '-42%', 'label' => 'Reduction in Customer Acquisition Cost'],
            ['num' => '100%', 'label' => 'Attribution Tracking Accuracy']
        ],
        'faqs' => [
            [
                'q' => 'What advertising platforms do you manage?',
                'a' => 'We manage Google Search, Google Shopping, Performance Max, YouTube Ads, Meta Ads (Facebook & Instagram), LinkedIn Sponsored Content, and programmatic retargeting networks.'
            ],
            [
                'q' => 'How do you prevent ad spend wastage?',
                'a' => 'We implement rigorous negative keyword lists, tight geo-fencing, device-specific bid adjustments, and server-side tracking to ensure every single rupee is directed toward qualified prospects.'
            ],
            [
                'q' => 'Do you design the ad creatives and landing pages as well?',
                'a' => 'Yes. As a full-service engineering and marketing agency, our creative team designs high-converting ad visuals, copy, and bespoke landing pages optimized for maximum conversion rate.'
            ]
        ]
    ],

    'social-media-marketing' => [
        'slug' => 'social-media-marketing', 
        'parent_slug' => 'social-media-marketing',
        'parent_name' => 'Social Media Marketing (SMM) & Brand Community',
        'title' => 'Social Media Marketing & Brand Growth',
        'short_title' => 'Social Media Marketing',
        'badge' => 'ENGAGEMENT',
        'badge_color' => 'purple',
        'category' => 'creative',
        'category_name' => 'Creative & Media',
        'icon' => 'fa-share-nodes',
        'meta_description' => 'Strategic social media marketing, bespoke carousel design, viral video reels, and active community management across LinkedIn, Instagram, and Meta.',
        'hero_headline' => 'Build Industry Authority With <span class="gold-gradient-text">Compelling Social Storytelling</span>.',
        'hero_lead' => 'We architect full-funnel social media narratives, high-engagement visual assets, and active community management strategies that transform passive scrollers into passionate brand advocates.',
        'overview' => 'Modern social media is saturated with noise. To capture attention and build genuine enterprise authority, brands need strategic visual storytelling, consistent design language, and thought leadership. Web Optimizer curates comprehensive content calendars, designs bespoke educational carousels, crafts short-form video reels, and manages community interactions across LinkedIn, Instagram, X, and Meta to elevate your brand prestige and drive organic inbound pipeline.',
        'deliverables' => [
            [
                'title' => 'Full-Funnel Social Strategy & Brand Storytelling',
                'desc' => 'Content pillar definition, audience demographic mapping, and executive positioning strategies tailored to your target commercial sectors.'
            ],
            [
                'title' => 'High-Impact Graphic Design & Carousel Creation',
                'desc' => 'Bespoke infographics, educational carousels, and thumb-stopping visual assets that establish industry leadership and visual consistency.'
            ],
            [
                'title' => 'Active Community Management & Organic Growth',
                'desc' => 'Proactive audience engagement, comment moderation, brand voice interaction, and relationship building with prospective corporate clients.'
            ],
            [
                'title' => 'Multi-Channel Syndication (LinkedIn, Instagram, X, Meta)',
                'desc' => 'Format-optimized content distribution engineered for each platform’s specific algorithm, peak viewing hours, and engagement habits.'
            ],
            [
                'title' => 'Audience Retention, Viral Reach & Growth Analytics',
                'desc' => 'Monthly analytical audits evaluating follower growth velocity, engagement rates, shareability metrics, and lead conversions.'
            ]
        ],
        'benefits' => [
            ['icon' => 'fa-crown', 'title' => 'Brand Authority', 'text' => 'Position your executives and brand as the indisputable market leaders in your specific niche.'],
            ['icon' => 'fa-heart', 'title' => 'Loyal Community', 'text' => 'Cultivate an active community of followers who champion your products and refer new business.'],
            ['icon' => 'fa-eye', 'title' => 'Maximized Organic Reach', 'text' => 'Leverage algorithm-aligned content structures that achieve organic reach without constant ad spend.'],
            ['icon' => 'fa-palette', 'title' => 'Design Consistency', 'text' => 'Every single post reflects the polished, luxury aesthetic of your corporate identity.']
        ],
        'tech_stack' => ['Figma', 'Adobe Creative Suite', 'Sprout Social', 'Meta Creator Studio', 'LinkedIn Analytics', 'Canva Enterprise'],
        'metrics' => [
            ['num' => '4.5x', 'label' => 'Average Engagement Rate Lift'],
            ['num' => '100%', 'label' => 'Bespoke Non-Stock Visuals'],
            ['num' => '24/7', 'label' => 'Active Brand Monitoring']
        ],
        'faqs' => [
            [
                'q' => 'Which social channels are best suited for B2B enterprises?',
                'a' => 'For B2B companies, LinkedIn is the primary driver of corporate authority and high-value lead generation, supplemented by Twitter/X for thought leadership and YouTube for in-depth educational content.'
            ],
            [
                'q' => 'How many posts will be published each week?',
                'a' => 'Depending on your package and objectives, we typically publish 3 to 5 premium, handcrafted posts per week per platform, prioritizing deep value and engagement over superficial spam.'
            ],
            [
                'q' => 'Do you handle incoming comments and direct messages?',
                'a' => 'Yes. Our community management team monitors interactions daily, answering inquiries using approved brand guidelines and routing high-intent business leads directly to your sales team.'
            ]
        ]
    ],

    'branding-design' => [
        'slug' => 'branding-design', 
        'parent_slug' => 'branding',
        'parent_name' => 'Branding, Creative & Visual Identity',
        'title' => 'Branding & Visual Identity Design',
        'short_title' => 'Branding & Design',
        'badge' => 'CREATIVE',
        'badge_color' => 'gold',
        'category' => 'creative',
        'category_name' => 'Creative & Media',
        'icon' => 'fa-bezier-curve',
        'meta_description' => 'Luxury brand identity design, bespoke logo marks, corporate design systems, brand guidelines, and high-impact pitch decks for modern enterprises.',
        'hero_headline' => 'Sculpt An Unforgettable <span class="gold-gradient-text">Luxury Brand Identity</span> That Demands Respect.',
        'hero_lead' => 'We build iconic brand marks, comprehensive visual identity guidelines, luxury design tokens, and corporate collateral that establish enduring prestige and commanding market presence.',
        'overview' => 'Great brands are not born by accident; they are systematically engineered. Web Optimizer combines strategic positioning with world-class graphic artistry to craft brand identities that resonate deeply with discerning clienteles. From corporate logo mark architecture and custom typography hierarchies to tokenized design systems and executive pitch presentations, we ensure every brand touchpoint communicates uncompromising quality and authority.',
        'deliverables' => [
            [
                'title' => 'Bespoke Logo Design & Brand Mark Architecture',
                'desc' => 'End-to-end conceptualization and vector creation of primary logo marks, sub-marks, monograms, and responsive app icons.'
            ],
            [
                'title' => 'Comprehensive Visual Identity & Color Guidelines',
                'desc' => 'Scientifically selected primary, secondary, and accent color palettes with exact CMYK, RGB, HEX, and Pantone specifications.'
            ],
            [
                'title' => 'Typography, Iconography & Digital Design Systems',
                'desc' => 'Carefully curated font pairings, bespoke icon sets, and digital UI component tokens for seamless digital and print execution.'
            ],
            [
                'title' => 'Marketing Collateral, Pitch Decks & Corporate Suites',
                'desc' => 'High-end business cards, letterheads, invoice templates, corporate brochures, and investor-ready presentation decks.'
            ],
            [
                'title' => 'Brand Narrative, Positioning & Tone-of-Voice Strategy',
                'desc' => 'Authoritative brand books defining your mission, brand personality, core value proposition, and communication dos and don’ts.'
            ]
        ],
        'benefits' => [
            ['icon' => 'fa-gem', 'title' => 'Premium Market Perception', 'text' => 'Command higher prices and prestige by projecting the visual sophistication of a tier-1 market leader.'],
            ['icon' => 'fa-fingerprint', 'title' => '100% Unique Architecture', 'text' => 'Zero template usage. Every mark is hand-crafted and eligible for trademark registration.'],
            ['icon' => 'fa-book-open', 'title' => 'Operational Consistency', 'text' => 'Equip your internal teams and external agencies with comprehensive guidelines to avoid brand dilution.'],
            ['icon' => 'fa-arrows-rotate', 'title' => 'Omnichannel Versatility', 'text' => 'Assets designed to look stunning on mobile screens, giant billboards, and luxury print packaging alike.']
        ],
        'tech_stack' => ['Adobe Illustrator', 'Adobe Photoshop', 'Figma Design System', 'Adobe InDesign', 'Vector Math Geometry', 'Pantone Color Bridge'],
        'metrics' => [
            ['num' => '100%', 'label' => 'Bespoke Vector Craftsmanship'],
            ['num' => '40+ Page', 'label' => 'Comprehensive Brand Book'],
            ['num' => 'Enduring', 'label' => 'Timeless Brand Value']
        ],
        'faqs' => [
            [
                'q' => 'What files will I receive upon project completion?',
                'a' => 'You will receive complete vector source files (AI, EPS, SVG, PDF) alongside high-resolution raster formats (PNG transparent, JPG) across light, dark, and monochrome variations.'
            ],
            [
                'q' => 'Can you help rebrand an established business without losing brand equity?',
                'a' => 'Yes. We specialize in strategic brand evolutions—modernizing outdated visual elements and enhancing luxury perception while preserving the recognizable heritage and customer trust you have built.'
            ],
            [
                'q' => 'How many logo concepts do you present initially?',
                'a' => 'We present 3 to 4 distinct, fully developed strategic visual directions, each contextualized on real mockups (stationery, mobile screens, signage) to help you visualize the final real-world impact.'
            ]
        ]
    ],



    'influencer-marketing' => [
        'slug' => 'influencer-marketing', 
        'parent_slug' => 'social-media-marketing',
        'parent_name' => 'Social Media Marketing (SMM) & Brand Community',
        'title' => 'Influencer Marketing & UGC Campaigns',
        'short_title' => 'Influencer & UGC',
        'badge' => 'INFLUENCE',
        'badge_color' => 'emerald',
        'category' => 'creative',
        'category_name' => 'Creative & Media',
        'icon' => 'fa-users-viewfinder',
        'meta_description' => 'Strategic influencer collaborations, user-generated content (UGC) video production, creator whitelisting, and performance amplification.',
        'hero_headline' => 'Amplify Brand Trust With <span class="gold-gradient-text">Authentic Creator Endorsements</span>.',
        'hero_lead' => 'We curate vetted influencer partnerships, high-converting User-Generated Content (UGC), and creator ad whitelisting campaigns that bridge the gap between social proof and profitable acquisition.',
        'overview' => 'Modern consumers trust peer recommendations far more than corporate claims. Web Optimizer removes the friction and risk from influencer marketing. We identify authentic creators whose audience demographics precisely mirror your target buyers, negotiate transparent deliverables, oversee script alignment, and whitelist creator handles for paid advertising to dramatically scale social proof and lower your acquisition costs.',
        'deliverables' => [
            [
                'title' => 'Targeted Creator Discovery & Audience Verification',
                'desc' => 'Rigorous data auditing of follower authenticity, genuine engagement ratios, and demographic alignment to eliminate fake-follower fraud.'
            ],
            [
                'title' => 'High-Trust User Generated Content (UGC) Production',
                'desc' => 'Scripted and authentic creator testimonials, unboxing videos, problem-solution demonstrations, and real customer reviews.'
            ],
            [
                'title' => 'End-to-End Campaign Management & Briefing',
                'desc' => 'Comprehensive contract drafting, creative guideline briefs, product shipping coordination, and revision management.'
            ],
            [
                'title' => 'Product Seeding & Strategic Brand Ambassador Programs',
                'desc' => 'Cultivating long-term relationships with influential niche tastemakers to generate consistent, ongoing brand advocacy.'
            ],
            [
                'title' => 'Paid Ad Whitelisting & Influencer ROI Amplification',
                'desc' => 'Running targeted paid campaigns directly through creator handles (Partnership Ads) to lower CPA and scale conversion volume.'
            ]
        ],
        'benefits' => [
            ['icon' => 'fa-shield-heart', 'title' => 'Instant Social Proof', 'text' => 'Borrow credibility and trust from established creators whom your target audience already admires.'],
            ['icon' => 'fa-chart-simple', 'title' => '3.2x Higher Trust', 'text' => 'User-generated content drives up to 3.2x higher conversion rates compared to traditional studio ads.'],
            ['icon' => 'fa-file-shield', 'title' => 'Zero Fraud Risk', 'text' => 'Our proprietary verification audits ensure you never waste budget on bots or inflated engagement.'],
            ['icon' => 'fa-bullhorn', 'title' => 'Whitelisted Ad Scaling', 'text' => 'Amplify top-performing creator posts with targeted paid ad budgets for sustained ROI.']
        ],
        'tech_stack' => ['Creator Analytics Database', 'Meta Partnership Ads', 'Modash / Upfluence', 'UGC Video Engine', 'DocuSign Contracts'],
        'metrics' => [
            ['num' => '50+', 'label' => 'Vetted Creator Network'],
            ['num' => '3.2x', 'label' => 'Higher Conversion vs Studio Ads'],
            ['num' => '100%', 'label' => 'Verified Engagement Only']
        ],
        'faqs' => [
            [
                'q' => 'How do you ensure influencers actually have real followers?',
                'a' => 'We perform forensic audits checking audience location distribution, follower growth velocity curves, comment authenticity, and engagement rates before presenting any creator for approval.'
            ],
            [
                'q' => 'What is creator ad whitelisting (Partnership Ads)?',
                'a' => 'Whitelisting allows our media buyers to run targeted paid ads directly through the influencer’s verified social handle. This blends seamlessly into user feeds as a genuine recommendation rather than a corporate ad.'
            ],
            [
                'q' => 'Can you produce UGC videos without high-cost celebrity influencers?',
                'a' => 'Absolutely. High-performing UGC video ads are typically created by micro-creators and authentic everyday customers. They deliver exceptionally high trust and conversions at a fraction of the cost.'
            ]
        ]
    ],

    'plugin-development' => [
        'slug' => 'plugin-development', 
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'title' => 'Plugin Development & Customization',
        'short_title' => 'Plugin Development',
        'badge' => 'SPECIALTY',
        'badge_color' => 'gold',
        'category' => 'web',
        'category_name' => 'Web & Development',
        'icon' => 'fa-puzzle-piece',
        'meta_description' => 'Custom WordPress plugin development from scratch, third-party API integration, plugin customization, speed optimization, and security audits.',
        'hero_headline' => 'Bespoke Functional Architecture Without <span class="gold-gradient-text">Plugin Bloat</span>.',
        'hero_lead' => 'We engineer lightweight, custom WordPress plugins and third-party API integrations engineered precisely to your business workflow requirements without slowing down your site.',
        'overview' => 'Relying on dozens of generic WordPress plugins introduces severe performance drag, database bloat, and alarming security vulnerabilities. Web Optimizer develops custom, single-purpose WordPress plugins following strict WordPress Coding Standards (WPCS). Whether you need custom payment gateways, CRM integrations, ERP data synchronizers, or proprietary calculation engines, our plugins run efficiently and securely.',
        'deliverables' => [
            [
                'title' => 'Custom WordPress Plugin Development',
                'desc' => 'Bespoke object-oriented PHP architecture built from the ground up to solve your exact business, data, or operational requirements.'
            ],
            [
                'title' => 'Plugin Customization & Editing',
                'desc' => 'Modifying existing open-source plugins, extending core hooks and filters, and removing unnecessary bloat without breaking update paths.'
            ],
            [
                'title' => 'Third-Party API & Payment Gateway Integration',
                'desc' => 'Seamless asynchronous API integrations connecting WordPress with payment gateways, CRMs (HubSpot, Zoho), shipping APIs, and ERPs.'
            ],
            [
                'title' => 'Plugin Performance Optimization & Caching',
                'desc' => 'Database query optimization, transient caching, lazy script enqueueing, and memory footprint reduction.'
            ],
            [
                'title' => 'Plugin Security Audits & Code Maintenance',
                'desc' => 'Vulnerability audits, nonces verification, data sanitization, secure capabilities management, and PHP 8.x compatibility testing.'
            ]
        ],
        'benefits' => [
            ['icon' => 'fa-feather', 'title' => 'Zero Performance Drag', 'text' => 'Custom plugins execute in single-digit milliseconds without loading hundreds of unnecessary assets.'],
            ['icon' => 'fa-lock', 'title' => 'Impervious Security', 'text' => 'Strict data sanitization and nonce verification eliminate SQL injection and cross-site scripting risks.'],
            ['icon' => 'fa-network-wired', 'title' => 'Seamless Integrations', 'text' => 'Connect your website directly to external CRMs, billing systems, and inventory databases in real-time.'],
            ['icon' => 'fa-code-branch', 'title' => 'Maintainable Codebase', 'text' => 'Clean, fully documented object-oriented PHP that any developer can easily understand and extend.']
        ],
        'tech_stack' => ['PHP 8.x', 'WordPress Plugin API', 'WordPress Hooks & Filters', 'Transients API', 'cURL & Guzzle', 'MySQL Indexing'],
        'metrics' => [
            ['num' => '0%', 'label' => 'Unnecessary Code Bloat'],
            ['num' => '100%', 'label' => 'WPCS Standards Compliant'],
            ['num' => 'PHP 8.3', 'label' => 'Fully Compatible Architecture']
        ],
        'faqs' => [
            [
                'q' => 'Can you replace multiple existing plugins with one custom plugin?',
                'a' => 'Yes. We frequently consolidate 5 to 15 slow, generic plugins into a single lightweight, custom-built plugin, dramatically boosting site speed and eliminating plugin update conflicts.'
            ],
            [
                'q' => 'Will custom plugins break when WordPress updates?',
                'a' => 'No. Because we use standard WordPress actions, filters, and core APIs rather than modifying core files, our custom plugins remain fully compatible across future WordPress version upgrades.'
            ],
            [
                'q' => 'Do you provide documentation for the custom plugin?',
                'a' => 'Yes. Every custom plugin is delivered with complete inline code documentation, hook references, and an admin user guide for your team.'
            ]
        ]
    ],

    'theme-development' => [
        'slug' => 'theme-development', 
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'title' => 'WordPress Theme Development & Customization',
        'short_title' => 'Theme Development',
        'badge' => 'SPECIALTY',
        'badge_color' => 'gold',
        'category' => 'web',
        'category_name' => 'Web & Development',
        'icon' => 'fa-palette',
        'meta_description' => 'Custom WordPress theme development from scratch, responsive design optimization, child theme customization, and speed-optimized layouts.',
        'hero_headline' => 'Pixel-Perfect Luxury Themes Engineered For <span class="gold-gradient-text">Sub-Second Responsiveness</span>.',
        'hero_lead' => 'We hand-code bespoke WordPress themes from scratch, delivering luxury aesthetics, semantic HTML5, clean CSS, and lightning-fast loading speeds across every screen dimension.',
        'overview' => 'A great website begins with a clean codebase. Heavy commercial themes rely on bloated visual builders that generate thousands of lines of unnecessary code. Web Optimizer hand-crafts bespoke WordPress themes from scratch using clean PHP, modern CSS Grid, and lightweight JavaScript. The result is a breathtaking, luxury presentation that loads instantly, passes Core Web Vitals, and provides an effortless content management experience.',
        'deliverables' => [
            [
                'title' => 'Custom WordPress Theme Development From Scratch',
                'desc' => 'Bespoke template hierarchy hand-coded without bloated commercial frameworks or external dependencies.'
            ],
            [
                'title' => 'Theme Customization, Editing & Child Themes',
                'desc' => 'Tailoring existing premium themes via safe child theme architectures to achieve your exact visual and functional desires.'
            ],
            [
                'title' => 'Responsive Design Optimization',
                'desc' => 'Mobile-first CSS layouts tested rigorously across modern iPhone, Android, tablet, and desktop viewports.'
            ],
            [
                'title' => 'Theme Performance Optimization & Asset Minification',
                'desc' => 'CSS/JS tree-shaking, lazy asset loading, webp image pipelines, and streamlined DOM tree architectures.'
            ],
            [
                'title' => 'Theme Security & Cross-Browser Compatibility',
                'desc' => 'Strict security sanitation, cross-browser compatibility (Chrome, Safari, Firefox, Edge), and PHP 8.x compliance.'
            ]
        ],
        'benefits' => [
            ['icon' => 'fa-gem', 'title' => 'Bespoke Luxury Aesthetics', 'text' => 'Your website looks entirely unique—never resembling a cookie-cutter template used by competitors.'],
            ['icon' => 'fa-gauge-high', 'title' => '99+ PageSpeed Scores', 'text' => 'Zero page-builder bloat guarantees green metrics across Google PageSpeed Insights and GTmetrix.'],
            ['icon' => 'fa-mobile', 'title' => 'Flawless Mobile Rendering', 'text' => 'Silky smooth mobile interactions, sticky navigation drawers, and touch-optimized controls.'],
            ['icon' => 'fa-code', 'title' => 'Zero Lock-in Code', 'text' => 'Clean, semantic templates allow you to switch hosts or add future features without breaking layouts.']
        ],
        'tech_stack' => ['PHP 8.x', 'Custom Theme Hierarchy', 'Bootstrap 5 / SCSS', 'HTML5 Semantic Elements', 'Vanilla JS (ES6)', 'Gutenberg Blocks'],
        'metrics' => [
            ['num' => '100%', 'label' => 'Hand-Coded Clean Architecture'],
            ['num' => '<50kb', 'label' => 'Core CSS Footprint'],
            ['num' => 'A Grade', 'label' => 'GTmetrix Performance Score']
        ],
        'faqs' => [
            [
                'q' => 'Can you convert our Figma or Adobe XD design into a WordPress theme?',
                'a' => 'Yes. We specialize in pixel-perfect conversions from Figma, Adobe XD, or Photoshop into clean, fully responsive WordPress themes.'
            ],
            [
                'q' => 'Do you use page builders like Elementor or WPBakery?',
                'a' => 'We avoid heavy page builders whenever possible because they cause severe code bloat. We prefer native Gutenberg blocks or ACF Flexible Content layouts, which provide identical editing flexibility with 10x faster load speeds.'
            ],
            [
                'q' => 'Can you fix or customize our current WordPress theme?',
                'a' => 'Yes. We can audit your current theme, remove bottlenecks, resolve layout bugs, and implement child theme customizations to modernize your existing website.'
            ]
        ]
    ],

    'ecommerce-development' => [
        'slug' => 'ecommerce-development', 
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'title' => 'WooCommerce & E-Commerce Engineering',
        'short_title' => 'E-Commerce Engineering',
        'badge' => 'E-COMMERCE',
        'badge_color' => 'emerald',
        'category' => 'web',
        'category_name' => 'Web & Development',
        'icon' => 'fa-bag-shopping',
        'meta_description' => 'Enterprise WooCommerce development, custom checkout funnels, payment gateway integration, high-concurrency scaling, and conversion optimization.',
        'hero_headline' => 'Engineer High-Converting <span class="gold-gradient-text">E-Commerce Storefronts</span> Built To Scale.',
        'hero_lead' => 'We engineer frictionless WooCommerce and custom e-commerce platforms designed for maximum transaction velocity, sub-second checkout speeds, and high-concurrency database scalability.',
        'overview' => 'In e-commerce, every second of checkout delay costs money. Web Optimizer builds high-velocity online shopping experiences tailored for D2C brands, luxury retailers, and B2B distributors. By re-engineering the WooCommerce checkout flow, integrating high-speed payment gateways, and implementing database caching, we eliminate cart abandonment and empower your store to handle thousands of simultaneous shoppers.',
        'deliverables' => [
            [
                'title' => 'Custom WooCommerce & Shopify Store Development',
                'desc' => 'Bespoke e-commerce storefront architecture designed for luxury visual presentation and intuitive catalog browsing.'
            ],
            [
                'title' => 'Payment Gateway Integration (Razorpay, Stripe, PayPal)',
                'desc' => 'Seamless, secure multi-currency payment checkout integrations supporting UPI, Net Banking, credit cards, and wallets.'
            ],
            [
                'title' => 'Inventory & Multi-Warehouse Sync Architecture',
                'desc' => 'Real-time synchronization between your online storefront and ERPs, inventory management software, and shipping logistics APIs.'
            ],
            [
                'title' => 'Cart Abandonment Recovery & Funnel Optimization',
                'desc' => 'Single-page checkout flows, address auto-completion, and automated abandoned cart recovery sequences via WhatsApp and email.'
            ],
            [
                'title' => 'High-Concurrency Database Scaling & Security',
                'desc' => 'Redis object caching, database query optimization, and load-tested server architecture ready for major flash sales.'
            ]
        ],
        'benefits' => [
            ['icon' => 'fa-cart-shopping', 'title' => 'Lower Cart Abandonment', 'text' => 'Single-page checkouts and instant UPI payments increase completed transactions by up to 35%.'],
            ['icon' => 'fa-bolt', 'title' => 'Instant Product Filtering', 'text' => 'Faceted AJAX search and category filtering display results in milliseconds without page refreshes.'],
            ['icon' => 'fa-shield-halved', 'title' => 'PCI-DSS Compliant Security', 'text' => 'Encrypted data transmission and secure gateway handshakes protect client financial data.'],
            ['icon' => 'fa-server', 'title' => 'Flash Sale Scalability', 'text' => 'Optimized database queries ensure your storefront never crashes during high-traffic promotional events.']
        ],
        'tech_stack' => ['WooCommerce Core', 'Redis Object Cache', 'Razorpay & Stripe APIs', 'AJAX Cart Endpoints', 'Shiprocket / Delhivery APIs', 'MySQL High-Volume Indexing'],
        'metrics' => [
            ['num' => '+35%', 'label' => 'Checkout Completion Rate'],
            ['num' => '<1.2s', 'label' => 'Cart & Checkout Velocity'],
            ['num' => '100k+', 'label' => 'SKUs Scalability Capacity']
        ],
        'faqs' => [
            [
                'q' => 'Can WooCommerce handle tens of thousands of products and high traffic?',
                'a' => 'Yes. When properly engineered with clean code, dedicated server caching (Redis), optimized MySQL tables, and Cloudflare CDN, WooCommerce effortlessly handles hundreds of thousands of products and high concurrent traffic.'
            ],
            [
                'q' => 'Which payment gateways do you integrate?',
                'a' => 'We integrate all major Indian and international payment gateways including Razorpay, Cashfree, PayU, CCAvenue, Stripe, PayPal, and Apple Pay/Google Pay.'
            ],
            [
                'q' => 'Can you connect our online store with our offline billing or ERP system?',
                'a' => 'Yes. We build custom API bridges to synchronize inventory levels, order data, and customer details automatically between WooCommerce and your ERP or billing software.'
            ]
        ]
    ],

    'quotation-billing-invoice-software' => [
        'slug' => 'quotation-billing-invoice-software',
        'parent_slug' => 'web-development',
        'parent_name' => 'Website & UI/UX Engineering',
        'title' => 'Custom Quotation, Billing & GST Invoice Software Application',
        'short_title' => 'Quotation, Billing & Invoice App',
        'badge' => 'BILLING & ERP APP',
        'badge_color' => 'gold',
        'category' => 'web',
        'category_name' => 'Web & Business Apps',
        'icon' => 'fa-file-invoice-dollar',
        'meta_description' => 'Custom quotation, billing, and GST invoice software application development in Bhubaneswar, Odisha. 1-click quotation-to-invoice conversion, WhatsApp PDF sharing, inventory ledger, and payment tracking.',
        'hero_headline' => 'Custom <span class="gold-gradient-text">Quotation, Billing &amp; GST Invoice</span> Service Applications.',
        'hero_lead' => 'We engineer bespoke web and mobile quotation, billing, and GST invoicing applications tailored to your exact business workflow—with 1-click WhatsApp PDF sharing, automated tax calculation, and real-time payment tracking.',
        'overview' => 'Generic off-the-shelf accounting software forces your staff to adapt to rigid templates, confusing menus, and recurring per-user license fees. At Web Optimizer, we build custom-engineered Quotation, Billing, and GST Invoicing applications designed specifically around how your Odisha business operates—whether you run a manufacturing unit, B2B wholesale distribution, construction/interior firm, hospital/clinic, or service agency. Generate branded quotations in 30 seconds, convert approved quotes into GST-compliant tax invoices with one click, dispatch PDF bills directly to your client\'s WhatsApp, and track every pending payment and stock item in real time.',
        'deliverables' => [
            [
                'title' => 'Custom Branded Quotation & Proforma Invoice Builder',
                'desc' => 'Generate professional, multi-item quotations with your company logo, custom terms, HSN/SAC codes, discounts, and dynamic scope tables in under 30 seconds.'
            ],
            [
                'title' => '1-Click Quotation-to-GST Tax Invoice Conversion',
                'desc' => 'Convert approved client estimates or proforma invoices into final CGST/SGST/IGST tax invoices and delivery challans with a single click—zero duplicate data entry.'
            ],
            [
                'title' => 'Instant WhatsApp & Email PDF Invoice Dispatch',
                'desc' => 'Send branded PDF quotations, GST bills, and payment reminders with embedded UPI QR codes and Razorpay payment links directly to your customer\'s WhatsApp.'
            ],
            [
                'title' => 'Customer Ledger, Due Reminders & Payment Tracking',
                'desc' => 'Track partial payments, credit limits, overdue receivables, client-wise account statements, and automated WhatsApp follow-ups for pending bills.'
            ],
            [
                'title' => 'Inventory, Purchase Order & Multi-User Role Management',
                'desc' => 'Real-time stock deduction on billing, low-stock alerts, vendor purchase tracking, CA-ready GSTR-1/GSTR-3B export sheets, and role-based staff permissions.'
            ]
        ],
        'benefits' => [
            ['icon' => 'fa-file-invoice', 'title' => '30-Second Quotations & Bills', 'text' => 'Eliminate manual Excel/Word formatting errors and generate accurate, branded quotes and GST invoices on desktop or mobile.'],
            ['icon' => 'fa-brands fa-whatsapp', 'title' => '1-Click WhatsApp Delivery', 'text' => 'Share PDF quotations and invoices directly on WhatsApp with embedded UPI QR codes for faster payment collection.'],
            ['icon' => 'fa-calculator', 'title' => '100% GST & CA Compliant', 'text' => 'Automated HSN/SAC tax calculations (CGST, SGST, IGST) with 1-click Excel/JSON exports ready for your Chartered Accountant.'],
            ['icon' => 'fa-lock', 'title' => '100% Data Ownership & No Per-User Rent', 'text' => 'Hosted on your own secure cloud or local server with unlimited staff logins, custom permissions, and zero per-invoice charges.']
        ],
        'tech_stack' => ['PHP 8.x / Laravel', 'React / Progressive Web App (PWA)', 'MySQL Encrypted DB', 'Automated PDF Engine', 'WhatsApp Cloud API', 'UPI Dynamic QR & Razorpay', 'GST Excel/JSON Exporter'],
        'metrics' => [
            ['num' => '<30 Sec', 'label' => 'Quote & Invoice Generation'],
            ['num' => '100%', 'label' => 'Custom Workflow Fit'],
            ['num' => '0 Fee', 'label' => 'Per-User License Lock-in']
        ],
        'faqs' => [
            [
                'q' => 'How is your custom quotation and billing application better than ready-made billing apps?',
                'a' => 'Ready-made billing apps force you into fixed formats, charge yearly per-user or per-device fees, and cannot handle custom pricing formulas (such as square-foot calculations for interiors/fabrication, multi-tier dealer discounts, or service AMC milestones). We customize every field, print template, and calculation rule to match your exact business.'
            ],
            [
                'q' => 'Can my sales team create quotations and bills from their mobile phones?',
                'a' => 'Yes. Our application works seamlessly on smartphones, tablets, laptops, and POS thermal/A4 printers. Your field sales staff can create a quotation on-site and send the PDF to the client on WhatsApp immediately.'
            ],
            [
                'q' => 'Can we export data for GST filing and our Chartered Accountant?',
                'a' => 'Absolutely. The system includes 1-click sales register, purchase register, HSN summary, and GSTR-1 / GSTR-3B ready Excel and CSV exports so your CA can file returns effortlessly.'
            ]
        ]
    ]
];
