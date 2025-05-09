-- Create tables for the landing page forms
-- Note: Run this script in your Hostinger database to create necessary tables

-- Table for simple email signups
CREATE TABLE IF NOT EXISTS quick_signups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    signup_date DATETIME NOT NULL,
    INDEX (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for detailed form submissions
CREATE TABLE IF NOT EXISTS detailed_signups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    sector VARCHAR(100) NOT NULL,
    clients_weekly VARCHAR(20) NOT NULL,
    comments TEXT,
    signup_date DATETIME NOT NULL,
    INDEX (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Optionally create a view to see all signups
CREATE OR REPLACE VIEW all_signups AS
    SELECT 'quick' as form_type, email, NULL as full_name, NULL as phone, NULL as sector, NULL as clients_weekly, NULL as comments, signup_date 
    FROM quick_signups
    UNION ALL
    SELECT 'detailed' as form_type, email, full_name, phone, sector, clients_weekly, comments, signup_date 
    FROM detailed_signups;
