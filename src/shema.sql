CREATE DATABASE 'Sys_d_authentification_MVC';
USE Sys_d_authentification_MVC;
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_id INT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE,
    FOREIGN KEY (role_id) REFERENCES role(id)
);
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(255)
);