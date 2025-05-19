-- Migration: Create beta_testers table
-- This table stores information for users who sign up for the beta program

CREATE TABLE IF NOT EXISTS beta_testers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255) UNIQUE,
  practice_type VARCHAR(100),
  message TEXT,
  created_at DATETIME,
  updated_at DATETIME
);

-- Add indexes for faster querying
CREATE INDEX idx_beta_testers_email ON beta_testers(email);
CREATE INDEX idx_beta_testers_created_at ON beta_testers(created_at);
