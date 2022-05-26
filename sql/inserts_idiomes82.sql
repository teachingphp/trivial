INSERT INTO traduccions (IDIOMA_ES, IDIOMA_CAT, IDIOMA_ENG,APARTAT) VALUES ('Antes de crear avatar','Abans de crear avatar','Before creating avatar','INICI');

select * from traduccions;

ALTER TABLE traduccions AUTO_INCREMENT = 335;

delete from traduccions where id in(335,336,337);
