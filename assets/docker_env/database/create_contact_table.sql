CREATE DATABASE IF NOT EXISTS mydb;
USE mydb;

CREATE TABLE IF NOT EXISTS contact (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    surname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    message TEXT(500) NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
