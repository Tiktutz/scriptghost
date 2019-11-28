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

create table Eventos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome varchar(20) NOT NULL,
    descricao text NOT NULL,
    datetime_inicio datetime NOT NULL,
    datetime_final datetime NOT NULL,
    categoria varchar(100) NOT NULL,
    endereco varchar(100) NOT NULL,
    bairro varchar(50) NOT NULL,
    cidade varchar(50) NOT NULL,
    estado varchar(50) NOT NULL,
    CEP char(8) NOT NULL,
    banner_img varchar(255),
    id_admin int NOT NULL,
    is_online bool default 0,
    is_private bool default 0,
    data_cadastro timestamp default current_timestamp,

    FOREIGN KEY (id_admin) REFERENCES Usuarios (id)


);

INSERT INTO Eventos (nome, descricao, datetime_inicio, datetime_final, categoria, endereco, bairro, cidade, estado, cep, banner_img, id_admin) VALUES (
'Festa das Cores', 'Muito Show', '2019-11-28 13:24:33', '2019-11-28 13:24:33', 'social', 'Rua dos bobos', 'Chapada', 'Ilhéus', 'Bahia', '45651440', 'assets/img/evento.png', 1
);