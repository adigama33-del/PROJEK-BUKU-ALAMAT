create database buku_alamat;

use buku_alamat;
CREATE TABLE contacts (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	phone VARCHAR(20) NOT NULL,
	email VARCHAR(100),
	address TEXT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

use buku_alamat;
INSERT INTO contacts (name, phone, email, address) VALUES
('Alice Johnson', '123-456-7890', 'alice@example.com', '123 Main St, City, Country');
	