CREATE DATABASE mobileshop;
USE mobileshop;
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2)
);
INSERT INTO products (name, price) VALUES 
('iPhone 15', 999.99),
('Samsung Galaxy S23', 899.99);