-- schema.sql (or run directly in phpMyAdmin)

-- Make sure you have selected your 'web_omnipotency_ai' database first in phpMyAdmin
-- Or add: CREATE DATABASE IF NOT EXISTS web_omnipotency_ai;
--         USE web_omnipotency_ai;

CREATE TABLE IF NOT EXISTS `leads` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NULL,                 -- Nullable, as not all forms might have it
  `meta` TEXT NULL,                         -- For storing extra form fields as JSON, also nullable
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `unique_email` (`email`)       -- Ensures no duplicate email addresses
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;