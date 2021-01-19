-- users
CREATE TABLE `weight-manager`. ( `id` INT(11) NOT NULL AUTO_INCREMENT , `userId` INT(11) NOT NULL , `name` VARCHAR(255) NOT NULL , `picture` VARCHAR(255) NOT NULL , `height` INT(11) NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;


-- weights
CREATE TABLE `weight-manager`.`weights` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `user_id` INT(11) NOT NULL , `weight` INT(11) NOT NULL , `created_at` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
