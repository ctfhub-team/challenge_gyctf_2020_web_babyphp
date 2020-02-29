DROP DATABASE IF EXISTS `noob123`;
CREATE DATABASE noob123;
GRANT SELECT,INSERT,UPDATE,DELETE on noob123.* to noob123@'127.0.0.1' identified by 'noob123';
GRANT SELECT,INSERT,UPDATE,DELETE on noob123.* to noob123@localhost identified by 'noob123';
use noob123;

CREATE TABLE `user`  (
  `id` integer(9) AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nickname` varchar(100) NULL,
  `age` int(5) NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `user` (`username`,`password`,`nickname`,`age`) VALUES ('admin','ctfhub_is_very_good','Admin',999);