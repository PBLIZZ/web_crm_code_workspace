<?php
// /Users/peterjamesblizzard/projects/web_omnipotency_ai/utils/mailer.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Ensure Composer's autoloader is loaded
// This path assumes mailer.php is in utils/ and vendor/ is in the project root.
require_once __DIR__ . '/../vendor/autoload.php';

// Ensure our custom get_env_value function is available
// It's defined in config/database.php, which should be included before this mailer is used.
if (!function_exists('get_env_value')) {
    // Attempt to load it if not already loaded. This is a fallback.
    // Ideally, config/database.php is included once at the start of the main script (e.g., index.php)
    $configPath = __DIR__ . '/../config/database.php';
    if (file_exists($configPath)) {
        // This will define get_env_value() if it's not already defined.
        // It also returns $pdo, which we don't need here but including it is harmless.
        require_once $configPath; 
    } else {
        // If config/database.php cannot be found, we cannot proceed with mail config.
        error_log('mailer.php: Critical error - config/database.php not found, cannot load get_env_value().');
        // Mail sending will fail if this happens, checked in sendEmail().
    }
}

/**
 * Sends an email using PHPMailer with SMTP settings from .env
 *
 * @param string $to Recipient email address
 * @param string $subject Email subject
 * @param string $body HTML email body
 * @param string $altBody Plain text email body (optional)
 * @return bool True on success, false on failure
 */
function sendEmail($to, $subject, $body, $altBody = '') {
    if (!function_exists('get_env_value')) {
        error_log('sendEmail function: get_env_value() is not available. Mail configuration cannot be loaded. Ensure config/database.php is included before calling mailer functions.');
        return false;
    }

    $mail_host = get_env_value('MAIL_HOST');
    $mail_port = get_env_value('MAIL_PORT');
    $mail_username = get_env_value('MAIL_USERNAME');
    $mail_password = get_env_value('MAIL_PASSWORD');
    $mail_encryption = get_env_value('MAIL_ENCRYPTION'); // 'ssl' or 'tls'
    $mail_from_address = get_env_value('MAIL_FROM_ADDRESS');
    $mail_from_name = get_env_value('MAIL_FROM_NAME');

    // Basic check for essential mail configuration
    if (!$mail_host || !$mail_port || !$mail_username || !$mail_password || !$mail_from_address || !$mail_from_name) {
        error_log('Email sending failed: Missing one or more required MAIL_ settings in .env or configuration cannot be loaded by get_env_value().');
        return false;
    }

    $mail = new PHPMailer(true); // Passing `true` enables exceptions

    try {
        // Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output for development ONLY
        $mail->isSMTP();
        $mail->Host       = $mail_host;
        $mail->SMTPAuth   = true;
        $mail->Username   = $mail_username;
        $mail->Password   = $mail_password;
        if (strtolower($mail_encryption) == 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // For port 465
        } else if (strtolower($mail_encryption) == 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // For port 587
        }
        $mail->Port       = (int)$mail_port;

        // Recipients
        $mail->setFrom($mail_from_address, $mail_from_name);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        if (!empty($altBody)) {
            $mail->AltBody = $altBody;
        }

        $mail->send();
        return true;
    } catch (Exception $e) {
        // Log the detailed error. Avoid exposing $mail->ErrorInfo directly to users in production.
        error_log("Message could not be sent. PHPMailer Error ({$to}): {$mail->ErrorInfo} (Underlying Exception: {$e->getMessage()})");
        return false;
    }
}

?>
