CREATE TABLE `proiect_diploma`.`piese` ( `id` INT NOT NULL AUTO_INCREMENT ,
                                    `numePiesa` VARCHAR(50) NOT NULL ,
                                    `tipPrelucrare` VARCHAR(50) NOT NULL ,
                                    `clasaTolerante` VARCHAR(50) NOT NULL ,
                                    `precizieSemifabricat` VARCHAR(50) NOT NULL ,
                                    `rugozitateSemifabricat` VARCHAR(50) NOT NULL ,
                                    `tratamentTermic` VARCHAR(50) NOT NULL ,
                                    PRIMARY KEY (`id`)) ENGINE = InnoDB;