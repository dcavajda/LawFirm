drop database if exists LawFirm;
create database LawFirm default character set utf8;
use LawFirm;
create table law_case(
law_case_id int not null primary key auto_increment,
lawyer_case_id int not null,
client_case_id int not null,
legal_trainee_case_id int not null
);
create table lawyer(
lawyer_id int not null primary key auto_increment,
law_case int not null,
legal_trainee int not null,
lawyer_partner int not null,
firstname varchar (50),
lastname varchar(50),
field_of_law varchar (100)
);
create table client (
client_id int not null primary key auto_increment,
lawyer_id int not null,
firstname varchar (50) not null,                                                                                                                                               
lastname varchar (50) not null
);
create table legal_trainee (
legal_trainee_id int not null primary key auto_increment,
firstname varchar (50),
lastname varchar (50)
);
create table partner (
partner_id int not null primary key auto_increment
);
alter table law_case add foreign key (lawyer_case_id) references lawyer (lawyer_id);
alter table law_case add foreign key (client_case_id) references client (client_id);
alter table lawyer add foreign key (lawyer_partner) references partner (partner_id);
alter table lawyer add foreign key (legal_trainee) references legal_trainee (legal_trainee_id);
alter table client add foreign key (client_id) references lawyer (lawyer_id);





