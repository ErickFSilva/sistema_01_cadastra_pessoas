-- BANCO DE DADOS
create database db_cadastra_pessoas;
use db_cadastra_pessoas;


-- COMANDOS ADM
show databases;
show tables;

describe logins_usuarios;

drop table nome_tabela;
drop database nome_banco;


-- TABELAS
create table logins_usuarios (
	id int primary key auto_increment,
    login varchar(50) not null,
    senha varchar(30) not null,
    tipo char(5)
);


-- INSERTS
insert into logins_usuarios (login, senha, tipo) values ('erick.silva', '123456', 'users');
insert into logins_usuarios (login, senha, tipo) values ('raquezia.almeida', '123456', 'users');


-- SELECTS
select * from logins_usuarios;