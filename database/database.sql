-- Active: 1674621862946@@127.0.0.1@3306@loja
CREATE DATABASE loja;

use loja;

create table products(

    id INT (11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(50),
    status VARCHAR(10) DEFAULT 'ACTIVE',
    quantity INT(11) NOT NULL,
    created_at TIMESTAMP DEFAULT NULL,
    updated_at TIMESTAMP DEFAULT NULL,
    deleted_at TIMESTAMP DEFAULT NULL,

    PRIMARY KEY(id)

);

CREATE TABLE municipios(
    id INT(11) NOT NULL AUTO_INCREMENT,
    ibge_id LONGTEXT,
    ibge_name LONGTEXT,

    PRIMARY KEY (id)
);
