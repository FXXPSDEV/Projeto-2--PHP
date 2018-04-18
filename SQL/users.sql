create database login_db;


use login_db;
CREATE TABLE `users` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `username` varchar(255) DEFAULT NULL,
  
  `lastname` varchar(255) DEFAULT NULL,
  
  `cpf` varchar(255) DEFAULT NULL,
  
  `rg` varchar(255) DEFAULT NULL,
  
  `tfc` varchar(255) DEFAULT NULL,
  
  `tfr` varchar(255) DEFAULT NULL,
  
  `email` varchar(255) DEFAULT NULL,

  `password` varchar(255) DEFAULT NULL,
  
  `endereco` varchar(255) DEFAULT NULL,
  
  `complemento` varchar(255) DEFAULT NULL,
  
  `cidade` varchar(255) DEFAULT NULL,
  
  `estado` varchar(255) DEFAULT NULL,
  
  `cep` varchar(255) DEFAULT NULL,
  
  `pergunta` varchar(255) DEFAULT NULL,
  
  `resposta` varchar(255) DEFAULT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

SELECT * from users
