
create schema if not exists projetoppw;

use projetoppw;


create table if not exists usuario (
id_usuario integer primary key AUTO_INCREMENT,
nome_usuario varchar(60) not null,
senha_usuario varchar(64) not null,
cpf_usuario varchar(14) not null,
status varchar(1));

select * from usuario;