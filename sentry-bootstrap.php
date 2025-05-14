<?php
// sentry-bootstrap.php
require_once __DIR__ . '/vendor/autoload.php';   // Composer autoloader

\Sentry\init([
    // ① Paste your project DSN from https://sentry.io/settings > Projects > “Client Keys”
    'dsn'            => getenv('SENTRY_DSN') ?: 'https://9daf775ef90c3b150061b401ec0ee71a@o4509315461218304.ingest.sentry.io/4509316121755728',

    // ② (Optional) Tag events with env + release
    'environment'    => getenv('APP_ENV') ?: 'production',
    'release'        => 'omnipotency-website@1.0.0+' . trim(`git rev-parse --short HEAD 2>/dev/null`),

    // ③ (Optional) Performance tracing - set to 0 to disable.
    'traces_sample_rate' => 0.2,
]);

// Quick smoke-test (remove after you see the event in Sentry)
if (isset($_GET['sentry_test'])) {
    \Sentry\captureMessage('🎉 Sentry is wired up!');
    echo "Test event sent — check your Sentry dashboard.";
}