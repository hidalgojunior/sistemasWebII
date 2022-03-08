create database login;

create table login(
    usuario varchar (20) not null primary key,
    senha varchar (40) not null,
    permissao int
);
-- 1 Adm, 2 Aluno

insert into login (usuario, senha, permissao) values ('adm2', md5('123'), 1);
insert into login (usuario, senha, permissao) values ('aluno', md5('aluno'), 2);
