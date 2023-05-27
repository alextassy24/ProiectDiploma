CREATE TABLE `proiect_diploma`.`abaterilimita` ( `id` INT NOT NULL AUTO_INCREMENT ,
                                            `clasa` TEXT NOT NULL ,
                                            `dimensiuniDeLa` TEXT NOT NULL ,
                                            `dimensiuniPanaLa` TEXT NOT NULL ,
                                            `valoare` TEXT NOT NULL ,
                                            PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `abaterilimita` (`id`, `clasa`, `dimensiuniDeLa`, `dimensiuniPanaLa`, `Valoare`) 
VALUES (NULL, 'f', '0.5', '3', '100'),
       (NULL, 'f', '3', '6', '100'),
       (NULL, 'f', '6', '30', '200'),
       (NULL, 'f', '30', '120', '300'),
       (NULL, 'f', '120', '400', '400'),
       (NULL, 'f', '400', '1000', '600'),
       (NULL, 'f', '1000', '2000', '1000'),
       (NULL, 'f', '2000', '4000', '-'),
       (NULL, 'm', '0.5', '3', '200'),
       (NULL, 'm', '3', '6', '200'),
       (NULL, 'm', '6', '30', '400'),
       (NULL, 'm', '30', '120', '600'),
       (NULL, 'm', '120', '400', '1000'),
       (NULL, 'm', '400', '1000', '1600'),
       (NULL, 'm', '1000', '2000', '2400'),
       (NULL, 'm', '2000', '4000', '4000'),
       (NULL, 'c', '0.5', '3', '400'),
       (NULL, 'c', '3', '6', '600'),
       (NULL, 'c', '6', '30', '1000'),
       (NULL, 'c', '30', '120', '1600'),
       (NULL, 'c', '120', '400', '2400'),
       (NULL, 'c', '400', '1000', '4000'),
       (NULL, 'c', '1000', '2000', '6000'),
       (NULL, 'c', '2000', '4000', '8000'),
       (NULL, 'v', '0.5', '3', '-'),
       (NULL, 'v', '3', '6', '1000'),
       (NULL, 'v', '6', '30', '2000'),
       (NULL, 'v', '30', '120', '3000'),
       (NULL, 'v', '120', '400', '5000'),
       (NULL, 'v', '400', '1000', '8000'),
       (NULL, 'v', '1000', '2000', '12000'),
       (NULL, 'v', '2000', '4000', '16000');