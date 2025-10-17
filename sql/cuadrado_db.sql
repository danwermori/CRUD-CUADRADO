CREATE DATABASE cuadrado_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE cuadrado_db;

CREATE TABLE mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lado DECIMAL(10,2) NOT NULL,
    area DECIMAL(10,2) NOT NULL,
    perimetro DECIMAL(10,2) NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO mensajes (lado, area, perimetro) VALUES (5, 25, 20);

SELECT * FROM mensajes;