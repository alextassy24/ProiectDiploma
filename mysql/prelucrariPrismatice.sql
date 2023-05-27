CREATE TABLE `proiect_diploma`.`prelucrariprismatice` ( `id` INT NOT NULL AUTO_INCREMENT ,
                                                `tipSuprafata` VARCHAR(40) NOT NULL ,
                                                `prelucrare` VARCHAR(40) NOT NULL ,
                                                `precizieEconomicaDeLa` VARCHAR(10) NOT NULL ,
                                                `precizieEconomicaPanaLa` VARCHAR(10) NOT NULL ,
                                                `precizieMaxima` VARCHAR(10) NOT NULL ,
                                                `rugozitateDeLa` FLOAT NOT NULL ,
                                                `rugozitatePanaLa` FLOAT NOT NULL ,
                                                `tratamentTermic` VARCHAR(10) NOT NULL ,
                                                `gauraSemifabricat` VARCHAR(10) NOT NULL ,
                                                PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `prelucrariprismatice` (`id`, `tipSuprafata`, `prelucrare`,`precizieEconomicaDeLa`,`precizieEconomicaPanaLa`,`precizieMaxima`, `rugozitateDeLa`, `rugozitatePanaLa`, `tratamentTermic`,`gauraSemifabricat`) 
VALUES (NULL,'Cilindrică exterioară','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Cilindrică exterioară','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Cilindrică exterioară','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Cilindrică exterioară','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Cilindrică exterioară','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Cilindrică exterioară','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Cilindrică interioară','Găurire cu burghiul','12','10','9','12.5','6.3','nu','nu'),
       (NULL,'Cilindrică interioară','Alezare de degroșare','9','8','7','6.3','1.6','nu','nu'),
       (NULL,'Cilindrică interioară','Alezare de finisare','7','6','6','1.6','0.8','nu','nu'),
       (NULL,'Cilindrică interioară','Alezare foarte fină','7','6','5','0.8','0.4','nu','nu'),

       (NULL,'Cilindrică interioară','Găurire cu burghiul','12','10','9','12.5','6.3','da','nu'),
       (NULL,'Cilindrică interioară','Alezare de degroșare','9','8','7','6.3','1.6','da','nu'),
       (NULL,'Cilindrică interioară','Rectificare de finisare','8','7','6','1.6','0.4','da','nu'),
       
       (NULL,'Cilindrică interioară','Lărgire','10','9','8','12.5','6.3','nu','da'),
       (NULL,'Cilindrică interioară','Alezare de degroșare','9','8','7','6.3','1.6','nu','da'),
       (NULL,'Cilindrică interioară','Alezare de finisare','7','6','6','1.6','0.8','nu','da'),
       (NULL,'Cilindrică interioară','Alezare foarte fină','7','6','5','0.8','0.4','nu','da'),

       (NULL,'Cilindrică interioară','Lărgire','10','9','8','12.5','6.3','da','da'),
       (NULL,'Cilindrică interioară','Alezare de degroșare','9','8','7','6.3','1.6','da','da'),
       (NULL,'Cilindrică interioară','Rectificare de finisare','8','7','6','1.6','0.4','da','da'),

       (NULL,'Plană circulară plină','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Plană circulară plină','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Plană circulară plină','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Plană circulară plină','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Plană circulară plină','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Plană circulară plină','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Plană circulară întreruptă','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Plană circulară întreruptă','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Plană circulară întreruptă','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Plană circulară întreruptă','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Plană circulară întreruptă','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Plană circulară întreruptă','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Plană frontală non-circulară','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Plană frontală non-circulară','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Plană frontală non-circulară','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Plană frontală non-circulară','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Plană frontală non-circulară','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Plană frontală non-circulară','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Toroidală','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Toroidală','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Toroidală','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Toroidală','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Toroidală','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Toroidală','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Conică','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Conică','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Conică','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Conică','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Conică','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Conică','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Canal exterior','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Canal exterior','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Canal exterior','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Canal exterior','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Canal exterior','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Canal exterior','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Canal interior','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Canal interior','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Canal interior','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Canal interior','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Canal interior','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Canal interior','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Canal de pană','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Canal de pană','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Canal de pană','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Canal de pană','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Canal de pană','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Canal de pană','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Canelată','Prelucrarea danturii prin rabotare','10','7','6','3.2','1.6','nu','nu'),
       (NULL,'Canelată','Prelucrarea danturii prin frezare','10','7','6','1.6','0.8','nu','nu'),
       (NULL,'Canelată','Prelucrarea danturii prin rectificare','7','6','5','0.8','0.2','nu','nu'),

       (NULL,'Canelată','Prelucrarea danturii prin rabotare','10','7','6','3.2','1.6','da','nu'),
       (NULL,'Canelată','Prelucrarea danturii prin frezare','10','7','6','1.6','0.8','da','nu'),
       (NULL,'Canelată','Rectificare de finisare','8','7','6','0.8','0.4','da','nu'),
       (NULL,'Canelată','Rectificare foarte fină','7','6','5','0.4','0.2','da','nu'),

       (NULL,'Gaură netedă','Găurire cu burghiul','12','10','9','12.5','6.3','nu','nu'),
       (NULL,'Gaură netedă','Alezare de degroșare','9','8','7','6.3','1.6','nu','nu'),
       (NULL,'Gaură netedă','Alezare de finisare','7','6','6','1.6','0.8','nu','nu'),
       (NULL,'Gaură netedă','Alezare foarte fină','7','6','5','0.8','0.4','nu','nu'),

       (NULL,'Gaură netedă','Găurire cu burghiul','12','10','9','12.5','6.3','da','nu'),
       (NULL,'Gaură netedă','Alezare de degroșare','9','8','7','6.3','1.6','da','nu'),
       (NULL,'Gaură netedă','Rectificare de finisare','8','7','6','1.6','0.4','da','nu'),

       (NULL,'Gaură netedă','Lărgire','10','9','8','12.5','6.3','nu','da'),
       (NULL,'Gaură netedă','Alezare de degroșare','9','8','7','6.3','1.6','nu','da'),
       (NULL,'Gaură netedă','Alezare de finisare','7','6','6','1.6','0.8','nu','da'),
       (NULL,'Gaură netedă','Alezare foarte fină','7','6','5','0.8','0.4','nu','da'),

       (NULL,'Gaură netedă','Lărgire','10','9','8','12.5','6.3','da','da'),
       (NULL,'Gaură netedă','Alezare de degroșare','9','8','7','6.3','1.6','da','da'),
       (NULL,'Gaură netedă','Rectificare de finisare','8','7','6','1.6','0.4','da','da'),
       
       (NULL,'Gaură filetată','Găurire cu burghiul','12','10','9','12.5','6.3','nu','nu'),
       (NULL,'Gaură filetată','Filetare interioară cu tarod','10','9','9','6.3','1.6','nu','nu'),
       (NULL,'Gaură filetată','Filetare interioară cu cuțit','9','7','7','1.6','0.8','nu','nu'),

       (NULL,'Gaură filetată','Găurire cu burghiul','12','10','9','12.5','6.3','da','nu'),
       (NULL,'Gaură filetată','Filetare interioară cu tarod','10','9','9','6.3','1.6','da','nu'),
       (NULL,'Gaură filetată','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Gaură filetată','Lărgire','10','9','8','12.5','6.3','nu','da'),
       (NULL,'Gaură filetată','Filetare interioară cu tarod','10','9','9','6.3','1.6','nu','da'),
       (NULL,'Gaură filetată','Filetare interioară cu cuțit','9','7','7','1.6','0.8','nu','da'),

       (NULL,'Gaură filetată','Lărgire','10','9','8','12.5','6.3','da','da'),
       (NULL,'Gaură filetată','Filetare interioară cu tarod','10','9','9','6.3','1.6','da','da'),
       (NULL,'Gaură filetată','Rectificare de finisare','8','7','6','1.6','0.8','da','da');