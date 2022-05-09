/*INSERTS USUARIS_REGISTRATS*/

INSERT INTO usuaris_registrats(usr_username, usr_email, usr_pwd, usr_avatar, usr_registerDate, usr_lastLogin, usr_exp) VALUES ('xXPartyGamer666Xz','pepito2015@gmail.com','123','', '2022-03-15 23:59:59','2022-05-02 13:13:07',5000);
INSERT INTO usuaris_registrats(usr_username, usr_email, usr_pwd, usr_avatar, usr_registerDate, usr_lastLogin, usr_exp) VALUES ('testUser','test@gmail.com','12345', '','2022-01-01 06:35:20','2022-05-02 13:10:37',2300);
INSERT INTO usuaris_registrats(usr_username, usr_email, usr_pwd, usr_avatar, usr_registerDate, usr_lastLogin, usr_exp) VALUES ('testUser2','test2@gmail.com','12345','','2022-04-27 10:06:50','2022-05-02 13:13:46',560);
INSERT INTO usuaris_registrats(usr_username, usr_email, usr_pwd, usr_avatar, usr_registerDate, usr_lastLogin, usr_exp) VALUES ('testUser3','test3@gmail.com','abcde','', '2022-04-15 23:59:59','2022-05-02 13:13:07',1780);


/*INSERTS CATEGORIES*/

INSERT INTO categories(ID, cat_nom, cat_desc) VALUES (1,'PELIS Y SERIES','En esta categoria habrán preguntas sobre actores, directores y personajes relacionados con el mundo del cine y de las series ');
INSERT INTO categories(ID, cat_nom, cat_desc) VALUES (2,'AUTOMOVILES','En esta categoria habrán preguntas sobre automoviles y motor');
INSERT INTO categories(ID, cat_nom, cat_desc) VALUES (3,'DEPORTES','En esta categoria habrán preguntas sobre el mundo del deporte');
INSERT INTO categories(ID, cat_nom, cat_desc) VALUES (4,'ARTE Y LITERATURA','En esta categoria habrán preguntas sobre arte y literatura');
INSERT INTO categories(ID, cat_nom, cat_desc) VALUES (5,'CIENCIA Y NATURALEZA','En esta categoria habrán preguntas sobre curiosidades sobre la Ciencia y la Naturaleza');
INSERT INTO categories(ID, cat_nom, cat_desc) VALUES (6,'MUSICA','En esta categoria habrán preguntas sobre diferentes cantantes y obras.');


/*INSERTS PREGUNTES_RESPOSTES*/

INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,'¿Que Any es considera el Jazz com musica?','https://okdiario.com/img/2018/10/29/pasos-jazz.jpeg');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (2,'¿Quins van ser els primers cotxes que va fer Ford?','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.3djake.es%2Frevell%2Fmodelo-1913-ford-model-t-road&psig=AOvVaw2HTwLuP8rgZGjEs4whV815&ust=1651054739017000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCPiv283AsfcCFQAAAAAdAAAAABAD');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Quien era Federico Garcia Lorca?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Que pasaria si chutas una pelota a la velocidad de la luz?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'Com es diu el personatge que surt a la foto?','https://static.wikia.nocookie.net/tomyjerry/images/e/ee/Tom_%28gato%29.png/revision/latest/scale-to-width-down/180?cb=20141026114040&path-prefix=es');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,'De qui és la canço amb la lletra "Te quiero ride como mi bike"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿De qué película es este personaje?','https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2018/05/30/15276918010543.jpg');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Quien es el autor de esta obra?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,'A qui es considera com el rei del rock?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Que falta entre los arcos del Coliseo Romano?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,"Como se llama el company de Tom clancy's Jack Rayan ?",'');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿De quien trata la película "La teoría del todo"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿ A que libro infantil de la saga de Harry Potter pertenece el cuento "La fábula de los tres hermanos"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Como se llama el phsicologo de la pelicula Jolt ?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Con las matematicas actuales se puede calcular la densidad de un agujero negro?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'¿Cual és el deporte electrònico mas competitivo del mundo?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Quien era "Halston"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,"¿A quien pertenece la canción don't go breaking my heart?",'');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,'Com continua la següent cançó ? "Last Christmas, I gave you my..."','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cuanto mide el universo observable hasta la fecha?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (2,'¿Quin es un dels super cotxes mes rapids del mon?','https://thumbs.dreamstime.com/b/koenigsegg-jesko-ginebra-suiza-de-marzo-el-modelo-la-preproducci%C3%B3n-del-supercar-present%C3%B3-en-sal%C3%B3n-autom%C3%B3vil-internacional-143060616.jpg');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'E=mc2 es una fórmula incluida en una teoría científica. ¿Cuál?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,'Quina banda anglesa és considera com la millor de tots els temps?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Quién es el autor de la Ilíada y la Odisea?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'Quin és el llibre més venut del món?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cual es el pez mas inutil del mundo?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Quien de estas personas es una autora feminista del siglo XVII?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,"Qui és l'home de la foto?",'https://static-abcblogs.abc.es/wp-content/uploads/sites/250/2019/12/sinatra-516x315.jpg');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'A quin element químic es refereix el símbol Ag?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,'Com es diu aquesta canço?','https://hips.hearstapps.com/es.h-cdn.co/hares/images/cultura/ocio/michael-jackson-thriller-video/2711550-1-esl-ES/thriller-el-videoclip-que-lo-cambio-todo.jpg');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Que acción realizan las amantis religiosas durante el coito?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Quien es el autor del "Quijote"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'Quina es la pel·lícula amb més ventes de la història ?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿De que época son realmente las melodías de "Los bridgerton"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿En que lugar se situa la famosa estátua de "Eros y Psique o Psique y cupído"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'El Episkyros es una de las primeras formas de un deporte. ¿Cuál?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿De que tratan los comics de "Joe Bar team"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cual fue la bomba cuyo unico impedimento de que explotara, era un destornillador?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,"Com es diu la pelicula que surt a l'imatge?",'');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,'Quin artista o grup musical té el record de visites en 24h a youtube?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'Quants punts suma un tir lliure a basquet?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,'Quina es la cançó més escoltada de la història','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,"Quants jugadors de camp hi ha en l'handbol?",'');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'Quin ha sigut el fichatge més car de la història del futbol ?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿En que ciudad se situa el museo "Guggenheim"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'¿En que deporte se realiza la postura del "Gato Vaca"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'Cual de los siguentes personajes es un científico?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Como se llama la actriz que interpreta "Maléfica"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Cual de estas películas protagoiza Anne Hathaway?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿En que Lugar están situadas las ruinas de el Partenón?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'¿Cual de las siguientes respuestas hace referència a una penalización en un campeonato de rítmica?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'¿Cual de estos objetos es usual en bailes de rítmica?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cual es el animal más grande del mundo?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cuanto dura la vida de una mosca?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'¿Que tipo de terreno manejan las motos de motocross?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Cuantas películas tiene la saga del señor de los anillos?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Quien fue Julius Caesar?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,"Persona més jove en guanyar el millor album de l'any",'');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,'¿A quien pertenece la 5ta sinfonía?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (6,'¿Cual es el nombre real de Bad Bunnny?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cual es la famosa formula de Einstein que aportó a la creacion de la bomba atómica?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'Qui té el rècord de major velocitat aconseguida a peu durant un event esportiu ?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (2,'¿Quan es va crear el primer motor de combustio?','https://www.google.com/url?sa=i&url=https%3A%2F%2Fes.wikipedia.org%2Fwiki%2FHistoria_del_motor_de_combusti%25C3%25B3n_interna&psig=AOvVaw33E3lhniKrYbFhcAYsVnTF&ust=1651054879495000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCOC2k_PAsfcCFQAAAAAdAAAAABAD');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Cual de estas películas está basda en un libro?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (2,'¿Qui va disenyar el primer automobil?','https://www.google.com/url?sa=i&url=https%3A%2F%2Fes.wikipedia.org%2Fwiki%2FCarl_Benz&psig=AOvVaw3QV_8yU4cyWu238V4l2osB&ust=1651055003910000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCLjKuLDBsfcCFQAAAAAdAAAAABAV');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (2,'¿Quants caballs de potencia te un Bugatti Veyron?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿De que color es la sangre del cangrejo erradura?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿A quien pertenece el cuadro de "El sol naciente"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (2,'¿Quina es la velocitat punta del Hennessey venom gt?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿A quien pertenece el cuadro "Noche Estrellada"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (2,'¿Que es la rueda donut?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cuantos Kilómetros por hora puede alcanzar una chita adulto?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Que le pasa al protagonista de Breaking Bad?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Cuantas temporadas tiene "Anatomía de Grey"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Que dos actores protagonizan la película de Moulin Rouge?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cuantas neuronas tiene un cerebro adulto?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cuanto cuesta un cerebro humano?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Quien construyó la Torre Eiffel?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Cual de estas series está basada en personas reales?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Quien protagoniza Pretty Woman?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Cuantos oscars consiguió "La lista de Schiendleer"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Quien protagonizó "El zorro"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Quien dirigió "El lobo de Wall Street"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Cuantos libros tiene "Geronimo Stilton?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Cual de las opciones pertenece a la mitología griega?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cada cuanto tiempo tiene la menstrución de un perro?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (5,'¿Cual de estas opciones no pertenece a la tabla periodica?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'¿Quien es el mejor nadador/a de todos los tiempos?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Quien era Virginia Wolf?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Cuál es el tema principal de "La Naranja Mecánica"?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿Quien era Friederich Nietzsche?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (3,'¿Cuando se jugó el primer partido de baloncesto?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (1,'¿Que película protagonza Robin Williams?','');
INSERT INTO preguntes (categoria_id, preg_pregunta, preg_img) VALUES (4,'¿ De que trata realmete el famoso cuento de "La caperucita Roja"','');

