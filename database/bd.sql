create database tiktutz

use tiktutz

create table Usuarios(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome varchar(20) NOT NULL,
    sobrenome varchar(50) NOT NULL,
    genero varchar(10) NOT NULL,
    data_nascimento date NOT NULL,
    endereco varchar(100) NOT NULL,
    bairro varchar(50) NOT NULL,
    cidade varchar(50) NOT NULL,
    estado varchar(50) NOT NULL,
    CEP char(8) NOT NULL,
    email varchar(50) NOT NULL UNIQUE,
    login varchar(20) NOT NULL UNIQUE,
    senha varchar(20) NOT NULL,
    perfil_img varchar(255),
    is_online bool default 0,
    is_private bool default 0,
    data_cadastro timestamp default current_timestamp
);