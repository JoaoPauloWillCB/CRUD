CREATE DATABASE crud;
USE crud;

CREATE TABLE tb_usuarios(
	id_usuario int not null auto_increment,
    nome varchar(45) not null,
    cpf varchar(11) not null unique,
    date_nascimento date not null,
    email varchar(45) not null,
    celular varchar(11) not null,
    endereco varchar(100) not null,
    cidade varchar(20) not null,
    estado varchar(20) not null,
    
		PRIMARY KEY(id_usuario)
);