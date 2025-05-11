-- SQL Schema for Omnipotency.ai CRM Website
-- Database: web_omnipotency_ai

-- Drop table if it exists to allow for easy re-application during development
-- Consider more sophisticated migration tools for production environments
DROP TABLE IF EXISTS `subscribers`;

CREATE TABLE `subscribers` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- You can add more tables here as your application grows.
-- For example:
-- CREATE TABLE `users` (...);
-- CREATE TABLE `content_pages` (...);
