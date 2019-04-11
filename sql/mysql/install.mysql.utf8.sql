CREATE TABLE IF NOT EXISTS `#__mod_mymodule` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`campo` varchar(50) NOT NULL,
	`content` text NOT NULL,
	`extra`   json NOT NULL,
	`posit` int(10) NOT NULL,
	`present` boolean NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `#__mod_mymodule` (`campo`, `content`, `extra`, `posit`, `present`) VALUES ('Fondo', 'images/imagenfondo.png', '[{}]',  0, true);
INSERT INTO `#__mod_mymodule` (`campo`, `content`, `extra`, `posit`, `present`) VALUES ('Titulo', 'Welcome To Our Studio!', '[{}]', 1, true);
INSERT INTO `#__mod_mymodule` (`campo`, `content`, `extra`, `posit`, `present`) VALUES ('Subtitulo', 'Its Nice To Meet You', '[{}]', 2, true);
INSERT INTO `#__mod_mymodule` (`campo`, `content`, `extra`, `posit`, `present`) VALUES ('Boton', 'Saber mas', '[{ "linkButom":"#" }]',  3, true);
