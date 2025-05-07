-- Veritabanı zaten docker-compose'da tanımlandığı için CREATE DATABASE gerekmez

-- 1. users tablosu
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    is_admin BOOLEAN DEFAULT FALSE
);

-- 2. packages tablosu (image_path eklendi)
CREATE TABLE IF NOT EXISTS packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    image_path VARCHAR(255)
);

-- 3. demo_requests tablosu (name ve email eklendi!)
CREATE TABLE IF NOT EXISTS demo_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    package_id INT,
    name VARCHAR(100),
    email VARCHAR(100),
    company_name VARCHAR(100),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (package_id) REFERENCES packages(id)
);

-- Örnek veriler (paketler)
INSERT INTO packages (name, description, price, image_path) VALUES
('Standard', 'Temel CRM özellikleri.', 29.99, 'image6.png'),
('Intermediate', 'Gelişmiş raporlama ve entegrasyon.', 59.99, 'image7.png'),
('Desk', 'Çağrı merkezi ve destek çözümleri.', 49.99, 'image8.png'),
('Analytics', 'Veri analiz ve BI çözümleri.', 89.99, 'image9.png');
