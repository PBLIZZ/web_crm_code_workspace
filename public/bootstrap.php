<?php
// public/bootstrap.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Environment specific error reporting (consider Sentry for production)
$appEnv = getenv('APP_ENV') ?: 'production'; // Assume production if not set

if ($appEnv === 'development') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0); // Sentry will handle production errors
}

// Set default timezone (IMPORTANT for date/time functions)
// Replace 'UTC' with your preferred timezone if necessary, e.g., 'America/New_York'
date_default_timezone_set('UTC');

// Autoload Composer dependencies
require_once __DIR__ . '/../vendor/autoload.php';

// Sentry Initialization (moved from sentry-bootstrap.php for central management)
// Ensure getenv is reliable or load .env here if not already globally available
// For simplicity, assuming .env is loaded by the router before this, or Sentry DSN is directly set
$sentryDsn = getenv('SENTRY_DSN') ?: 'https://9daf775ef90c3b150061b401ec0ee71a@o4509315461218304.ingest.sentry.io/4509316121755728'; // Fallback
$gitSha = trim(@shell_exec('git rev-parse --short HEAD')) ?: 'unknown'; // @ to suppress errors if git not available

\Sentry\init([
    'dsn'            => $sentryDsn,
    'environment'    => $appEnv,
    'release'        => 'omnipotency-website@1.0.0+' . $gitSha,
    'traces_sample_rate' => ($appEnv === 'development' ? 1.0 : 0.2), // Sample more in dev
    // Consider adding integrations or options as needed
]);

// Load API keys and other ENV variables (ensure load_env.php is robust)
// This path assumes bootstrap.php is in public/
$loadEnvPath = __DIR__ . '/api/load_env.php'; 
if (file_exists($loadEnvPath)) {
    require_once $loadEnvPath; 
} else {
    // Fallback or error logging if .env loading is critical here
    error_log("bootstrap.php: load_env.php not found at " . $loadEnvPath);
    // Set critical fallbacks if absolutely necessary, though ideally load_env.php should always exist.
    $_ENV['API_KEY'] = $_ENV['API_KEY'] ?? 'FALLBACK_KEY_BOOTSTRAP';
}

// Quick smoke-test (remove after you see the event in Sentry)
if (isset($_GET['sentry_test'])) {
    \Sentry\captureMessage('🎉 Sentry is wired up!');
    echo "Test event sent — check your Sentry dashboard.";
    // Force a notice error to test error tracking
    echo $undefined_variable;
}
?>
