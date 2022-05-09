CREATE TABLE usuaris_registrats (ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT, usr_username varchar(50) UNIQUE, usr_email varchar(50), usr_pwd varchar(50), usr_avatar varchar(200), usr_registerDate DATETIME, usr_lastLogin DATETIME, usr_exp INTEGER, PRIMARY KEY (ID)); 
CREATE TABLE partida (ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT, part_nom varchar(50), part_rondes INTEGER, part_preguntes INTEGER, part_fechaInicio DATETIME, part_fechaFinalizacion DATETIME, PRIMARY KEY(ID));
CREATE TABLE jugadors (ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT, usr_id INTEGER, jug_nom varchar(50),jug_punts INTEGER,jug_aciertos INTEGER, PRIMARY KEY(ID), FOREIGN KEY (usr_id) REFERENCES usuaris_registrats(ID));
CREATE TABLE categories (ID INTEGER NOT NULL UNIQUE, cat_nom varchar(50), cat_desc varchar(200), PRIMARY KEY (ID));
CREATE TABLE preguntes(ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT, categoria_id INTEGER NOT NULL, preg_pregunta varchar(200),preg_img varchar(200), PRIMARY KEY (ID), FOREIGN KEY (categoria_id) REFERENCES categories(ID));
CREATE TABLE respostes(ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT, resp_correcte varchar(200), resp_incorrecte_1 varchar(200),resp_incorrecte_2 varchar(200),resp_incorrecte_3 varchar(200), preg_id INTEGER UNIQUE, PRIMARY KEY(ID), FOREIGN KEY(preg_id) REFERENCES preguntes(ID));
CREATE TABLE pistes(ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT, preg_id INTEGER, pist_desc varchar(200), pist_cost INTEGER, PRIMARY KEY(ID), FOREIGN KEY(preg_id) REFERENCES preguntes(ID));
CREATE TABLE resposta_jugador (ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT, pregunta_id INTEGER NOT NULL, jugador_id INTEGER NOT NULL, partida_id INTEGER NOT NULL, resposta_sel varchar(200), resposte_correcte BOOLEAN, PRIMARY KEY(ID), FOREIGN KEY(pregunta_id) REFERENCES preguntes(ID), FOREIGN KEY(jugador_id) REFERENCES jugadors(ID), FOREIGN KEY(partida_id) REFERENCES partida(ID));
CREATE TABLE categories_partida(part_id INTEGER, cat_id INTEGER, FOREIGN KEY(part_id) REFERENCES partida(ID), FOREIGN KEY(cat_id) REFERENCES categories(ID));
CREATE TABLE jugadors_partida(part_id INTEGER, jug_id INTEGER, FOREIGN KEY(part_id) REFERENCES partida(ID), FOREIGN KEY(jug_id) REFERENCES jugadors(ID));
CREATE TABLE ranking_total(ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT, usr_id INTEGER UNIQUE, usr_exp INTEGER, PRIMARY KEY(ID), FOREIGN KEY(usr_id) REFERENCES usuaris_registrats(ID));
/* trigger update ranking_total usr_exp quan es modifiqui el del usuari */

CREATE TABLE Historial_Partides(ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT, part_id INTEGER UNIQUE, part_fechaInicio DATETIME, part_fechaFinalizacion DATETIME, hist_duracio FLOAT, hist_numplayers INTEGER, PRIMARY KEY(ID), FOREIGN KEY(part_id) REFERENCES partida(ID));
CREATE TABLE Historial_Usuari(ID INTEGER NOT NULL UNIQUE AUTO_INCREMENT, usr_id INTEGER, usr_punts INTEGER, part_id INTEGER, part_fechaInicio DATETIME, part_fechaFinalizacion DATETIME, PRIMARY KEY(ID), FOREIGN KEY(usr_id) REFERENCES usuaris_registrats(ID), FOREIGN KEY(part_id) REFERENCES partida(ID));  
/*Taula Traduccions */
CREATE TABLE traduccions(
ID INT NOT NULL UNIQUE AUTO_INCREMENT, 
IDIOMA_ES varchar(50),
IDIOMA_CAT varchar(50),
IDIOMA_ENG	 varchar(50),
APARTAT varchar(25),
PRIMARY KEY(ID)	
);