<?php
// phinx.php

// Load .env variables
$dotenvFilePath = __DIR__ . '/.env';
if (file_exists($dotenvFilePath)) {
    $lines = file($dotenvFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        if (strpos($line, '=') !== false) {
            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);
            if (strlen($value) > 1 && (($value[0] == '"' && substr($value, -1) == '"') || ($value[0] == "'" && substr($value, -1) == "'"))) {
                $value = substr($value, 1, -1);
            }
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
} else {
    die('.env file not found for Phinx configuration.' . PHP_EOL);
}

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development', // Or use APP_ENV
        'development' => [
            'adapter' => getenv('DB_CONNECTION') ?: 'mysql',
            'host' => getenv('DB_HOST') ?: '127.0.0.1',
            'name' => getenv('DB_DATABASE') ?: 'web_omnipotency_ai',
            'user' => getenv('DB_USERNAME') ?: 'root',
            'pass' => getenv('DB_PASSWORD') ?: 'root',
            'port' => getenv('DB_PORT') ?: '3306',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'unix_socket' => getenv('DB_SOCKET') ?: null,
        ],
        'production' => [ // Example for production, adjust as needed
            'adapter' => getenv('DB_CONNECTION_PROD') ?: getenv('DB_CONNECTION'),
            'host' => getenv('DB_HOST_PROD') ?: getenv('DB_HOST'),
            'name' => getenv('DB_DATABASE_PROD') ?: getenv('DB_DATABASE'),
            'user' => getenv('DB_USERNAME_PROD') ?: getenv('DB_USERNAME'),
            'pass' => getenv('DB_PASSWORD_PROD') ?: getenv('DB_PASSWORD'),
            'port' => getenv('DB_PORT_PROD') ?: getenv('DB_PORT'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ]
    ],
    'version_order' => 'creation'
];
