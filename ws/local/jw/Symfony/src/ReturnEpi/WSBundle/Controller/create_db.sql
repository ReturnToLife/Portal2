CREATE DATABASE IF NOT EXISTS `return-to_life`;
USE `return-to_life`;

CREATE TABLE IF NOT EXISTS `article` (
`id` int(11) NOT NULL auto_increment,
`titre` varchar(200) NOT NULL,
`categ` tinyint(1) NOT NULL,
`parution` datetime NOT NULL,
`contenu` text NOT NULL,
`type` tinyint(1) NOT NULL,
`statut` tinyint(1) NOT NULL,
`ecole` varchar(200) NOT NULL,
`promo` varchar(10) NOT NULL,
`ville` varchar(100) NOT NULL,
PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `article_assoc` (
`id_student` int(11) NOT NULL,
`id_article` int(11) NOT NULL,
`approbation` tinyint(1) NOT NULL,
`vu` int(11) NOT NULL,
PRIMARY KEY  (`id_student`,`id_article`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `contrib_article` (
`id_contrib_type` int(11) NOT NULL,
`id_article` int(11) NOT NULL,
`id_student` int(11) NOT NULL,
PRIMARY KEY  (`id_contrib_type`,`id_article`,`id_student`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `contrib_flash` (
`id_contrib_type` int(11) NOT NULL,
`id_flash` int(11) NOT NULL,
`id_student` int(11) NOT NULL,
PRIMARY KEY  (`id_contrib_type`,`id_flash`,`id_student`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `contrib_type` (
`id` int(11) NOT NULL auto_increment,
`name` varchar(100) NOT NULL,
PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `droit` (
`id_outil_gestion` int(11) NOT NULL,
`id_group` int(11) NOT NULL,
`id_group_effect` int(11) NOT NULL,
PRIMARY KEY  (`id_outil_gestion`,`id_group`,`id_group_effect`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `flash` (
`id` int(11) NOT NULL auto_increment,
`contenu` varchar(500) NOT NULL,
`parution` datetime NOT NULL,
`statut` tinyint(1) NOT NULL,
PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `flash_assoc` (
`id_student` int(11) NOT NULL,
`id_flash` int(11) NOT NULL,
`approbation` tinyint(1) NOT NULL,
PRIMARY KEY  (`id_student`,`id_flash`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `group_assoc` (
`id_parent` int(11) NOT NULL,
`id_child` int(11) NOT NULL,
PRIMARY KEY  (`id_parent`,`id_child`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `group_member` (
`id_group` int(11) NOT NULL,
`id_student` int(11) NOT NULL,
PRIMARY KEY  (`id_group`,`id_student`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `group_name` (
`id` int(11) NOT NULL auto_increment,
`name` varchar(300) NOT NULL,
PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ionisusersinformations` (
`id` int(10) unsigned NOT NULL auto_increment,
`login` varchar(128) NOT NULL,
`uid` int(11) NOT NULL,
`promo` int(11) NOT NULL,
`pass` varchar(255) NOT NULL,
`school` varchar(255) NOT NULL,
`groupe` varchar(255) NOT NULL,
`name` varchar(255) NOT NULL,
`city` varchar(128) NOT NULL,
PRIMARY KEY  (`id`),
UNIQUE KEY `login` (`login`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `todos` (
`id` int NOT NULL AUTO_INCREMENT,
`group_id` int NOT NULL,
`assignee_id` int UNSIGNED NOT NULL,
`text` TEXT NOT NULL,
PRIMARY KEY (`id`),
FOREIGN KEY `group` (`group_id`) REFERENCES group_name (`id`) ON DELETE CASCADE,
FOREIGN KEY `assignee` (`assignee_id`) REFERENCES ionisusersinformations (`id`) ON DELETE CASCADE
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `outil_gestion` (
`id` int(11) NOT NULL auto_increment,
`name` varchar(200) NOT NULL,
PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `preference` (
`id` int(11) NOT NULL auto_increment,
`id_student` int(11) NOT NULL,
PRIMARY KEY  (`id`),
KEY `id_student` (`id_student`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tag` (
`id` int(11) NOT NULL auto_increment,
`name` varchar(200) NOT NULL,
PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tag_assoc` (
`id_tag` int(11) NOT NULL,
`id_article` int(11) NOT NULL,
PRIMARY KEY  (`id_tag`,`id_article`)
) DEFAULT CHARSET=utf8;
