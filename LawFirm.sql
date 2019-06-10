
drop database if exists LawFirm;
create database LawFirm default character set utf8;
use LawFirm;
 
create table law_case(
law_case_id int not null primary key auto_increment,
case_date_start date not null,
case_date_end date not NULL
);
create table lawyer(
lawyer_id int not null primary key auto_increment,
firstname varchar (50),
lastname varchar(50),
OIB char (11) NOT NULL,
field_of_law varchar (100)
);
create table client (
client_id int not null primary key auto_increment,
firstname varchar (50) not null,                                                                                                                                               
lastname varchar (50) not null,
OIB char (11) not null
);
create table legal_trainee (
legal_trainee_id int not null primary key auto_increment,
firstname varchar (50),
lastname varchar (50),
OIB char (11) not null,
IBAN varchar (32) not NULL
);

ALTER TABLE law_case ADD FOREIGN KEY (law_case_id) REFERENCES lawyer (lawyer_id);
ALTER TABLE lawyer ADD FOREIGN KEY (lawyer_id) REFERENCES legal_trainee (legal_trainee_id);
ALTER TABLE law_case ADD FOREIGN KEY (law_case_id) REFERENCES legal_trainee (legal_trainee_id);
ALTER TABLE client ADD FOREIGN KEY (client_id) REFERENCES lawyer (lawyer_id);




