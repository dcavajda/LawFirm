
/*
c:\xampp\mysql\bin\mysql -uedunova -pedunova --default_character_set=utf8 < "C:\LawFirm\LawFirm.sql"
*/

drop database if exists LawFirm;
create database LawFirm default character set utf8;
use LawFirm;
 
create table legal_case(
legal_case_id int not null primary key auto_increment,
case_date_start date,
case_date_end date
);
create table lawyer(
lawyer_id int not null primary key auto_increment,
firstname varchar (50),
lastname varchar(50),
OIB char (11),
IBAN varchar (32)
);
create table client (
client_id int not null primary key auto_increment,
firstname varchar (50),                                                                                                                                              
lastname varchar (50),
IBAN varchar (32),
OIB char (11)
);
create table legal_trainee (
legal_trainee_id int not null primary key auto_increment,
firstname varchar (50),
lastname varchar (50),
IBAN varchar (32),
OIB char (11)
);
CREATE TABLE legal_case_trainee (
legal_case_id int not null,
legal_trainee_id int not null
);

ALTER TABLE legal_case ADD FOREIGN KEY (legal_case_id) REFERENCES lawyer (lawyer_id);
ALTER TABLE client ADD FOREIGN KEY (client_id) REFERENCES legal_case (legal_case_id);
ALTER TABLE legal_case_trainee ADD FOREIGN KEY (legal_case_id) REFERENCES legal_case (legal_case_id);
ALTER TABLE legal_case_trainee ADD FOREIGN KEY (legal_trainee_id) REFERENCES legal_trainee (legal_trainee_id);




