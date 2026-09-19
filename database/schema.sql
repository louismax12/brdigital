CREATE DATABASE IF NOT EXISTS brdigital CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE brdigital;

CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL,
    username VARCHAR(80) NULL UNIQUE,
    email VARCHAR(190) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('admin','team_member','client') NOT NULL DEFAULT 'client',
    status ENUM('active','inactive') NOT NULL DEFAULT 'active',
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
) ENGINE=InnoDB;

-- Initial User Seed (Louis Maximillian / louis@digital.com)
INSERT INTO users (name, username, email, password_hash, role, status, created_at, updated_at)
VALUES (
    'Louis Maximillian',
    'louis@digital.com',
    'louis@digital.com',
    '$2y$10$wT8K.u9ZJz0F7Qy.7eH3l1Jd1qF6M3yP9B2c4V5b6N7m8O9p0q1r2',
    'admin',
    'active',
    NOW(),
    NOW()
) ON DUPLICATE KEY UPDATE name=VALUES(name), username=VALUES(username);

CREATE TABLE leads (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    business_name VARCHAR(160) NOT NULL,
    contact_name VARCHAR(120) NOT NULL,
    whatsapp VARCHAR(30) NOT NULL,
    email VARCHAR(190) NULL,
    service_type VARCHAR(100) NULL,
    message TEXT NOT NULL,
    status ENUM('New','Contacted','Qualified','Proposal Sent','Negotiation','Won','Lost') NOT NULL DEFAULT 'New',
    source VARCHAR(80) NOT NULL DEFAULT 'website',
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL,
    INDEX idx_leads_status (status),
    INDEX idx_leads_created_at (created_at)
) ENGINE=InnoDB;

CREATE TABLE projects (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    client_id BIGINT UNSIGNED NULL,
    name VARCHAR(160) NOT NULL,
    description TEXT NULL,
    status ENUM('Draft','Onboarding','Requirement Gathering','Design','Development','Internal Review','Client Review','Revision','Deployment','Handover','Maintenance','Completed','On Hold','Cancelled') NOT NULL DEFAULT 'Draft',
    start_date DATE NULL,
    target_date DATE NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL,
    INDEX idx_projects_status (status),
    CONSTRAINT fk_projects_client FOREIGN KEY (client_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB;

CREATE TABLE site_settings (
    setting_key VARCHAR(100) PRIMARY KEY,
    setting_value TEXT NOT NULL,
    updated_at DATETIME NOT NULL
) ENGINE=InnoDB;
