CREATE TABLE `proiect_diploma`.`abaterilimitatesituri` ( `id` INT NOT NULL AUTO_INCREMENT ,
                                            `clasa` TEXT NOT NULL ,
                                            `dimensiuniDeLa` TEXT NOT NULL ,
                                            `dimensiuniPanaLa` TEXT NOT NULL ,
                                            `valoare` TEXT NOT NULL ,
                                            PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `abaterilimitatesituri` (`id`, `clasa`, `dimensiuniDeLa`, `dimensiuniPanaLa`, `Valoare`) 
VALUES (NULL, 'f', '0.5', '3', '400'),
       (NULL, 'f', '3', '6', '1000'),
       (NULL, 'f', '6', '4000', '2000'),
       (NULL, 'm', '0.5', '3', '400'),
       (NULL, 'm', '3', '6', '1000'),
       (NULL, 'm', '6', '4000', '2000'),
       (NULL, 'c', '0.5', '3', '800'),
       (NULL, 'c', '3', '6', '2000'),
       (NULL, 'c', '6', '4000', '4000'),
       (NULL, 'v', '0.5', '3', '800'),
       (NULL, 'v', '3', '6', '2000'),
       (NULL, 'v', '6', '4000', '4000');