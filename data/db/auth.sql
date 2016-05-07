-- create standard 'users', 'groups' and 'groups_users' tables in 
-- Mako framework (copied from official Mako framework documentation)
-- @dbType: MYSQL 

-- users table
CREATE TABLE `users` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `action_token` char(64) COLLATE utf8_unicode_ci DEFAULT '',
    `access_token` char(64) COLLATE utf8_unicode_ci DEFAULT '',
    `activated` tinyint(1) NOT NULL DEFAULT 0,
    `banned` tinyint(1) NOT NULL DEFAULT 0,
    `failed_attempts` int(11) NOT NULL DEFAULT '0',
    `last_fail_at` datetime DEFAULT NULL,
    `locked_until` datetime DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`),
    UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- groups table
CREATE TABLE `groups` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- groups_users table
CREATE TABLE `groups_users` (
    `group_id` int(11) unsigned NOT NULL,
    `user_id` int(11) unsigned NOT NULL,
    UNIQUE KEY `group_user` (`group_id`,`user_id`),
    KEY `group_id` (`group_id`),
    KEY `user_id` (`user_id`),
    CONSTRAINT `groups`
        FOREIGN KEY (`group_id`)
        REFERENCES `groups` (`id`)
        ON DELETE CASCADE ON UPDATE NO ACTION,
    CONSTRAINT `users`
        FOREIGN KEY (`user_id`)
        REFERENCES `users` (`id`)
        ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
