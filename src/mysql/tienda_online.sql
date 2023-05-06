drop database if exists `tienda_online`;
create database if not exists `tienda_online` default character set utf8 collate utf8_spanish_ci;

use  `tienda_online`;

CREATE TABLE roles(

id_rls        int(2) not null auto_increment,
rol           varchar(40) not null,

primary key (id_rls)

) engine=Innodb default charset=utf8;

CREATE TABLE usuarios(

username      varchar(30) not null,
pass          varchar(30) not null,
activo        int(1) not null,    
id_rls        int(2) not null,

primary key (username),
foreign key (id_rls) references roles(id_rls) 

) engine=Innodb default charset=utf8;




INSERT INTO roles(rol) values ('rol1');
INSERT INTO usuarios(username, pass, id_rls) values ('JuanPerez', '1234', 1);
