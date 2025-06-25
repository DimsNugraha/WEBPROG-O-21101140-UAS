CREATE DATABASE inventaris;

USE inventaris;

CREATE TABLE barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    jumlah INT
);