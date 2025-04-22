-- Création de la base si elle n'existe pas
CREATE DATABASE IF NOT EXISTS kenko CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE kenko;

-- Table users
CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table user_settings
CREATE TABLE IF NOT EXISTS user_settings (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userId INT NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    city VARCHAR(255),
    postal_code VARCHAR(20),
    email VARCHAR(255) NOT NULL UNIQUE,
    country VARCHAR(255),
    avatar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Formulaire de contact
CREATE TABLE IF NOT EXISTS contact (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Témoignages des utilisateurs
CREATE TABLE IF NOT EXISTS testimonials (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userId INT,
    name VARCHAR(255),
    content TEXT NOT NULL,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES users(id) ON DELETE SET NULL
);