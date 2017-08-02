DROP DATABASE IF EXISTS `ajax-chat`;
CREATE DATABASE `ajax-chat` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/*utf8 permet de prendre n'importe quel caractères mm les kanji ds les bdd ss pblm*/

DROP USER 'ajax-chat-user'@'localhost';
CREATE USER 'ajax-chat-user'@'localhost' IDENTIFIED BY 'We Love SQL API!'; /*CREATE USER 'ajax-chat-user'@'%' IDENTIFIED BY 'We Love SQL API!'; le % donne accès à tlm*/
GRANT ALL PRIVILEGES ON `ajax-chat`.* TO 'ajax-chat-user'@'localhost';

USE `ajax-chat`;

CREATE TABLE `message` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `text` TEXT NOT NULL,
    `timestamp` TIMESTAMP NOT NULL
);