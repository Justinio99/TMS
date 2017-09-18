drop database tms;

create database tms;

use tms;

CREATE TABLE benutzer (
  `benutzername` VARCHAR(50) primary key NOT NULL,
  `vorname` VARCHAR(45) NULL,
  `nachname` VARCHAR(45) NULL,
  `passwort` VARCHAR(255) NOT NULL
  );

create table kategorie(
`id` INT Primary key NOT NULL AUTO_INCREMENT,
kategorie varchar(45)
);

create table task(
`id` INT Primary key NOT NULL AUTO_INCREMENT,
task_title varchar(50),
beschreibung varchar(255),
start_datum date,
end_datum date,
benutzername VARCHAR(50),
kategorie int,
FOREIGN KEY (benutzername) REFERENCES benutzer(benutzername) on delete cascade on update cascade,
FOREIGN KEY (kategorie) REFERENCES kategorie(id) on delete set null on update cascade
);


insert into kategorie(kategorie) values ('Einkauf'),
										                    ('Arbeit'),
                                        ('Familie'),
                                        ('Haushalt');

insert into benutzer(benutzername,vorname,nachname,passwort) values ('root','Admin','Admin',sha1('12345'));
