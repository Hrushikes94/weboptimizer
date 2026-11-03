<?php
/**
 * Web Optimizer - Secure Executive Lead & Proposal Submission Endpoint
 * Protected against Malware Injection, XSS, Header Injection & Bot Spam
 * https://www.weboptimizer.in | Founder: Hrushikesh Swain (+91 7735973818)
 */
require_once __DIR__ . '/includes/security-and-seo.php';

if (!headers_sent()) {
    header('Content-Type: application/json; charset=UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Method Not Allowed. Please submit via the official form.'
    ]);
    exit;
}

// Check Honeypot field (bots fill hidden fields)
$honeypot = trim($_POST['website_url_hp'] ?? '');
if ($honeypot !== '') {
    // Silently pretend success to fool bots
    echo json_encode([
        'status' => 'success',
        'ref_id' => 'WO-' . date('Ymd') . '-BOT',
        'message' => 'Thank you! Your inquiry has been received.'
    ]);
    exit;
}

// Extract and strictly sanitize inputs (preventing email header injection & XSS)
function wo_clean_input($str, $max_len = 500) {
    $str = strip_tags((string)$str);
    $str = preg_replace('/[\r\n\t]+/', ' ', $str);
    $str = trim($str);
    return mb_substr($str, 0, $max_len, 'UTF-8');
}

$name    = wo_clean_input($_POST['lead_name'] ?? $_POST['modal_name'] ?? '', 120);
$email   = filter_var(trim($_POST['lead_email'] ?? $_POST['modal_email'] ?? ''), FILTER_VALIDATE_EMAIL);
$phone   = wo_clean_input($_POST['lead_phone'] ?? $_POST['modal_phone'] ?? '', 30);
$service = wo_clean_input($_POST['lead_service'] ?? $_POST['modal_service'] ?? 'General Digital Consultation', 150);
$message = strip_tags(trim($_POST['lead_message'] ?? $_POST['modal_message'] ?? ''));
$message = mb_substr($message, 0, 2000, 'UTF-8');
$page_url = wo_clean_input($_POST['page_url'] ?? '', 250);

if ($name === '' || !$email || $phone === '') {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Please enter a valid Name, Business Email, and Phone/WhatsApp Number.'
    ]);
    exit;
}

$ref_id = 'WO-' . date('Ymd') . '-' . strtoupper(substr(md5($name . $phone . microtime()), 0, 5));

$to = 'info@weboptimizer.in';
$subject = "[$ref_id] Executive Proposal Inquiry: $service - $name";
$headers  = "From: Web Optimizer Portal <noreply@weboptimizer.in>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$body  = "==========================================================\n";
$body .= "WEB OPTIMIZER - NEW EXECUTIVE INQUIRY ($ref_id)\n";
$body .= "==========================================================\n\n";
$body .= "Reference ID : $ref_id\n";
$body .= "Client Name  : $name\n";
$body .= "Email        : $email\n";
$body .= "Phone/WA     : $phone\n";
$body .= "Service      : $service\n";
$body .= "Source Page  : $page_url\n";
$body .= "Timestamp    : " . date('Y-m-d H:i:s P') . "\n";
$body .= "Client IP    : " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n\n";
$body .= "Project Details / Scope:\n";
$body .= "----------------------------------------------------------\n";
$body .= ($message !== '' ? $message : 'Requested direct architectural consultation.') . "\n";
$body .= "==========================================================\n";

@mail($to, $subject, $body, $headers);

$wa_text = "Hello Web Optimizer (Ref: $ref_id),\n\nName: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nProject Details:\n" . ($message !== '' ? $message : 'Requesting architecture proposal');
$wa_url = 'https://wa.me/917735973818?text=' . rawurlencode($wa_text);

echo json_encode([
    'status'       => 'success',
    'ref_id'       => $ref_id,
    'message'      => "Thank you, {$name}! Your inquiry ({$ref_id}) has been registered. Senior Developer Hrushikesh Swain will review and respond within 2 hours.",
    'whatsapp_url' => $wa_url
]);
exit;
