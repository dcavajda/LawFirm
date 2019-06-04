# sipanje na server
/*
c:\xampp\mysql\bin\mysql -uedunova -pedunova --default_character_set=utf8 < "c:\odvjetnik.sql"
*/

drop database if exists odvjetnik_ured;
create database odvjetnik_ured default character set utf8;
use odvjetnik_ured;

create table osoba (
osoba_sifra int not null primary key auto_increment,
OIB int (11) not null,
ime varchar (50) not null,                                                                                                                                               
prezime varchar (50) not null,
ulica varchar (50) not null,
kucni_broj varchar (10) not null,
grad varchar (50) not null,
postanski_broj varchar (10) not null,
IBAN varchar (32) not null
);
create table odvjetnik(
odvjetnik_sifra int not null primary key auto_increment,
osoba_sifra int not null
);
create table klijent (
klijent_sifra int not null primary key auto_increment,
osoba_sifra int not null
);
create table suradnik (
suradnik_sifra int not null primary key auto_increment,
osoba_sifra int not null
);
create table obrana (
obrana_sifra int not null primary key auto_increment,
odvjetnik_osoba_sifra int not null,
klijent_osoba_sifra int not null
);
create table suradnik_obrana (
suradnik_osoba int not NULL,
obrana_sifra int not null
);

alter table odvjetnik add foreign key (odvjetnik_sifra) references osoba (osoba_sifra);
alter table klijent add foreign key (klijent_sifra) references osoba (osoba_sifra);
alter table suradnik add foreign key (suradnik_sifra) references osoba (osoba_sifra);
ALTER TABLE obrana ADD FOREIGN KEY (odvjetnik_osoba_sifra) REFERENCES odvjetnik (odvjetnik_sifra);
ALTER TABLE obrana ADD FOREIGN KEY (klijent_osoba_sifra) REFERENCES klijent (klijent_sifra);
ALTER TABLE suradnik_obrana ADD FOREIGN KEY (suradnik_osoba) REFERENCES suradnik (suradnik_sifra);
ALTER TABLE suradnik_obrana ADD FOREIGN KEY (obrana_sifra) REFERENCES obrana (obrana_sifra);


INSERT INTO odvjetnik_ured.osoba
(`OIB`, ime, prezime, ulica, kucni_broj, grad, postanski_broj, `IBAN`) VALUES
(12345678901, 'Èedo', 'Prodanoviæ', 'Ilica', '259', 'Zagreb', '10000', 'HR12345678912345'),
(1236547891, 'Jadranka', 'Slokoviæ', 'Ilica', '259','Zagreb', '10000', 'HR12345698712321');


