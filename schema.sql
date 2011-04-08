--
-- MySQL 5.1.54
-- Fri, 08 Apr 2011 18:23:26 +0000
--

CREATE TABLE `comments` (
   `id` int(11) not null auto_increment,
   `text` text not null,
   `user_id` int(11) not null,
   `idea_id` int(11) not null,
   `time` int(11) not null,
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;


CREATE TABLE `ideas` (
   `id` int(10) not null auto_increment,
   `title` text not null,
   `text` text not null,
   `user_id` int(10) not null,
   `status` varchar(20),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=4;


CREATE TABLE `responses` (
   `idea_id` int(11) not null,
   `user_id` int(11) not null,
   `text` text not null,
   PRIMARY KEY (`idea_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `users` (
   `id` int(11) not null auto_increment,
   `userid` text not null,
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=4;


CREATE TABLE `votes` (
   `user_id` int(11) not null,
   `idea_id` int(11) not null,
   `weight` int(11) not null default '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
