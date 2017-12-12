/*CREACIÓ I UTILITZACIÓ DE LA BASE DE DADES*/



USE `1718_aramzafraanush`;

/*CREACIÓ DE LA TAULA USUARI*/

CREATE TABLE `usuari` (
  `usu_id` int(4) NOT NULL AUTO_INCREMENT,
  `usu_nom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usu_contrasenya` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  CONSTRAINT pk_usuari PRIMARY KEY(`usu_id`),
  `usu_cognoms` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_email` varchar(40) DEFAULT NULL,
  `usu_telefon` numeric(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*CREACIÓ DE LA TAULA RECURS*/
CREATE TABLE `recurs` (
  `rec_id` int(4) NOT NULL AUTO_INCREMENT,
  CONSTRAINT pk_recurs PRIMARY KEY(`rec_id`),
  `rec_nom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rec_tipus` ENUM('Aula','Despatx','Sala','Objecte','Mobil','Portatil') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `rec_inici` 	DATETIME NULL,
  `rec_alliberacio` DATETIME NULL,
  `rec_contador` NUMERIC (10,0) NOT NULL,
  `rec_estat`     BOOLEAN NOT NULL,
  `rec_imatge`    TINYTEXT NULL,
  `rec_descripcio`    TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*CREACIÓ DE LA TAULA RESERVA*/

CREATE TABLE `reserva` (
	`res_id` int(4) NOT NULL AUTO_INCREMENT,
	CONSTRAINT pk_reserva PRIMARY KEY (`res_id`),
	`rec_id` int(4) NOT NULL,
	`usu_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



/*RELACIONS BBDD*/

ALTER TABLE `reserva`
ADD CONSTRAINT `FK_usuari_reserva` FOREIGN KEY(`usu_id`) REFERENCES `usuari`(`usu_id`);

ALTER TABLE `reserva`
ADD CONSTRAINT `FK_recurs_reserva` FOREIGN KEY(`rec_id`) REFERENCES `recurs`(`rec_id`);


/*REGISTRES*/

/*USUARIS*/
INSERT INTO `usuari` (`usu_nom`, `usu_contrasenya`, `usu_cognoms`, `usu_email`, `usu_telefon`) VALUES ('SI_ADMIN', 'Admon357', '357', 'admon.intranet@gmail.com', '933376542'),
 ('Sebastian', 'Comunism2017', 'Matveyev', 'SebastianMatveyev@gmail.com', '434531085'), ('Fabiano', 'PizzaTime2017', 'Calabrese', 'FabianoCalabrese@gmail.com', '435531085'),
('John', 'WWE2017', 'Cena', 'JohnCena@gmail.com', '435531085'),
('David', 'DavidCurtis2017', 'Curtis', 'DavidCurtis@gmail.com', '436531085'),
('Alex', 'England2017', ' Bradley', 'AlexBradley@gmail.com', '437531085');

/*RECURSOS*/

INSERT INTO `recurs` (`rec_nom`, `rec_tipus`, `rec_inici`, `rec_alliberacio`, `rec_contador`, `rec_estat`,`rec_imatge`) VALUES
('Xiaomi Redmi Note 4', 'Mobil', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', '1','../img/xiaomi.png'),
('Samsung Galaxy Note 7', 'Mobil', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', '1','../img/samsung.png'),
('Carro de portàtils', 'Objecte', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', '1','../img/carro.jpg'),
('Macbook Pro', 'Portatil', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', '1','../img/mac.png'),
('ASUS F541UV-GQ1078T', 'Portatil', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', '1','../img/asus.jpg'),
('Aula de Tutoria 1', 'Aula', '2017-11-09 09:00:00', '2017-11-10 12:00:00', '0', 1,'../img/aulatuto1.jpg'),
( 'Aula de Tutoria 2', 'Aula', '2017-11-09 09:00:00', '2017-11-10 12:00:00', '0', 1,'../img/aulatuto2.jpg'),
('Aula de Tutoria 3(Sense projector)', 'Aula', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', 1,'../img/aulatuto3.jpg'),
('Aula Informatica', 'Aula', '2017-11-07 14:00:00', '2017-11-09 16:00:00', '0', 1,'../img/aulainfo.jpg'),
( 'Aula Informatica 2', 'Aula', '2017-11-06 13:00:00', '2017-11-08 17:00:00', '0', 1,'../img/aulainfo2.jpg'),
('Despatx Entrevista 1', 'Despatx', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', 1,'../img/despatx1.jpg'),
('Despatx Entrevista 2', 'Despatx', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', 1,'../img/despatx2.jpg'),
('Sala de Reunions', 'Sala', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', 1,'../img/salareunio.jpg'),
( 'Projector portatil', 'Objecte', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', 1,'../img/projector.png'),
('LENOVO Ideapad 110-15ACL', 'Portatil', '2017-11-06 13:00:00', '2017-11-08 12:00:00', '0', '1','../img/lenovo.png');
