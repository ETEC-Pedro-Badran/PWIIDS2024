create database primeiro;
use primeiro;

create table produto (
	id int primary key AUTO_INCREMENT,
    nome varchar(100) not null,
    preco decimal(12,2)
);