create database agenda_telefonica;

use agenda_telefonica;
create table contato(id int primary key auto_increment,
nome varchar(100), telefone varchar(50));

insert into contato values("","Joao da Silva","(85) 987654321");
insert into contato values("","Maria da Costa","(85) 987651234");
insert into contato values("","Lucas Almeida","(85) 986123456");



