-- BANCO DE DADOS
create database db_cadastra_pessoas;
use db_cadastra_pessoas;


-- COMANDOS ADM
show databases;
show tables;

describe tb_usuarios;

drop database nome_banco;
drop table tb_pessoas;
delete from tb_usuarios;


-- TABELAS
create table if not exists tb_usuarios (
	id int primary key auto_increment,
    login varchar(50) not null,
    senha varchar(30) not null,
    tipo char(5)
);

create table if not exists tb_pessoas (
	id int primary key auto_increment,
    nome varchar(100) not null,
    telefone varchar(30) not null,
    email varchar(100),
    endereco varchar(100),
    complemento varchar(50),
    cidade varchar(50),
    estado char(2),
    pais varchar(30)
);


-- INSERTS
insert into tb_usuarios (login, senha, tipo) values ('erick.silva', '1234', 'users');


-- SELECTS
select * from tb_usuarios;
select * from tb_pessoas;
