CREATE DATABASE concessionaria;

USE concessionaria;

CREATE TABLE users(
    id INTEGER auto_increment PRIMARY KEY,
    name VARCHAR(32),
    email VARCHAR(128),
    phone VARCHAR(16),
    password VARCHAR(256)
);