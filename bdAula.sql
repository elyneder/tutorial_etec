create database aula;

use aula;

create table alunos(
id_aluno int not null primary key auto_increment,
nome_aluno varchar(150) not null,
idade_aluno int not null,
foto_aluno varchar(150)
);

select * from alunos

