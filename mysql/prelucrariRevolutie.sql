CREATE TABLE `proiect_diploma`.`prelucrarirevolutie` ( `id` INT NOT NULL AUTO_INCREMENT ,
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
INSERT INTO `prelucrarirevolutie` (`id`, `tipSuprafata`, `prelucrare`,`precizieEconomicaDeLa`,`precizieEconomicaPanaLa`,`precizieMaxima`, `rugozitateDeLa`, `rugozitatePanaLa`, `tratamentTermic`,`gauraSemifabricat`) 
VALUES (NULL,'Cilindrică exterioară','Strunjire exterioară de degroșare','13','11','10','50','12.5','nu','nu'),
       (NULL,'Cilindrică exterioară','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','nu','nu'),
       (NULL,'Cilindrică exterioară','Strunjire exterioară de finisare','9','8','7','3.2','0.8','nu','nu'),
       (NULL,'Cilindrică exterioară','Strunjire exterioară  foarte fină','7','6','5','0.8','0.2','nu','nu'),

       (NULL,'Cilindrică exterioară','Strunjire exterioară de degroșare','13','11','10','50','12.5','da','nu'),
       (NULL,'Cilindrică exterioară','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','da','nu'),
       (NULL,'Cilindrică exterioară','Rectificare de degroșare','10','8','7','3.2','1.6','da','nu'),
       (NULL,'Cilindrică exterioară','Rectificare de finisare','8','7','6','1.6','0.4','da','nu'),
       (NULL,'Cilindrică exterioară','Rectificare foarte fină','7','6','5','0.4','0.2','da','nu'),
       
       (NULL,'Cilindrică interioară','Găurire cu burghiul','12','10','9','12.5','6.3','nu','nu'),
       (NULL,'Cilindrică interioară','Strunjire interioară de finisare','9','8','7','6.3','1.6','nu','nu'),
       (NULL,'Cilindrică interioară','Strunjire interioară foarte fină','7','6','5','1.6','0.8','nu','nu'), 

       (NULL,'Cilindrică interioară','Găurire cu burghiul','12','10','9','25','6.3','da','nu'),
       (NULL,'Cilindrică interioară','Strunjire interioară de finisare','9','8','7','6.3','1.6','da','nu'),   
       (NULL,'Cilindrică interioară','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Cilindrică interioară','Lărgire','10','9','8','12.5','6.3','nu','da'),
       (NULL,'Cilindrică interioară','Strunjire interioară de finisare','9','8','7','6.3','1.6','nu','da'),
       (NULL,'Cilindrică interioară','Strunjire interioară foarte fină','7','6','5','1.6','0.8','nu','da'), 

       (NULL,'Cilindrică interioară','Lărgire','10','9','8','12.5','6.3','da','da'),
       (NULL,'Cilindrică interioară','Strunjire interioară de finisare','9','8','7','6.3','1.6','da','da'),   
       (NULL,'Cilindrică interioară','Rectificare de finisare','8','7','6','1.6','0.8','da','da'),

       (NULL,'Plană circulară plină','Strunjire exterioară de degroșare','13','11','10','50','12.5','nu','nu'),
       (NULL,'Plană circulară plină','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','nu','nu'),
       (NULL,'Plană circulară plină','Strunjire exterioară de finisare','9','8','7','3.2','0.8','nu','nu'),
       (NULL,'Plană circulară plină','Strunjire exterioară  foarte fină','7','6','5','0.8','0.2','nu','nu'),

       (NULL,'Plană circulară plină','Strunjire exterioară de degroșare','13','11','10','50','12.5','da','nu'),
       (NULL,'Plană circulară plină','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','da','nu'),
       (NULL,'Plană circulară plină','Rectificare de degroșare','10','8','7','3.2','1.6','da','nu'),
       (NULL,'Plană circulară plină','Rectificare de finisare','8','7','6','1.6','0.4','da','nu'),
       (NULL,'Plană circulară plină','Rectificare foarte fină','7','6','5','0.4','0.2','da','nu'),

       (NULL,'Plană circulară întreruptă','Strunjire exterioară de degroșare','13','11','10','50','12.5','nu','nu'),
       (NULL,'Plană circulară întreruptă','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','nu','nu'),
       (NULL,'Plană circulară întreruptă','Strunjire exterioară de finisare','9','8','7','3.2','0.8','nu','nu'),
       (NULL,'Plană circulară întreruptă','Strunjire exterioară  foarte fină','7','6','5','0.8','0.2','nu','nu'),

       (NULL,'Plană circulară întreruptă','Strunjire exterioară de degroșare','13','11','10','50','12.5','da','nu'),
       (NULL,'Plană circulară întreruptă','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','da','nu'),
       (NULL,'Plană circulară întreruptă','Rectificare de degroșare','10','8','7','3.2','1.6','da','nu'),
       (NULL,'Plană circulară întreruptă','Rectificare de finisare','8','7','6','1.6','0.4','da','nu'),
       (NULL,'Plană circulară întreruptă','Rectificare foarte fină','7','6','5','0.4','0.2','da','nu'),

       (NULL,'Plană frontală non-circulară','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Plană frontală non-circulară','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Plană frontală non-circulară','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),
       
       (NULL,'Plană frontală non-circulară','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Plană frontală non-circulară','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Plană frontală non-circulară','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Toroidală','Strunjire exterioară de degroșare','13','11','10','50','12.5','nu','nu'),
       (NULL,'Toroidală','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','nu','nu'),
       (NULL,'Toroidală','Strunjire exterioară de finisare','9','8','7','3.2','0.8','nu','nu'),
       (NULL,'Toroidală','Strunjire exterioară  foarte fină','7','6','5','0.8','0.2','nu','nu'),

       (NULL,'Toroidală','Strunjire exterioară de degroșare','13','11','10','50','12.5','da','nu'),
       (NULL,'Toroidală','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','da','nu'),
       (NULL,'Toroidală','Rectificare de degroșare','10','8','7','3.2','1.6','da','nu'),
       (NULL,'Toroidală','Rectificare de finisare','8','7','6','1.6','0.4','da','nu'),
       (NULL,'Toroidală','Rectificare foarte fină','7','6','5','0.4','0.2','da','nu'),
       
       (NULL,'Conică','Strunjire exterioară de degroșare','13','11','10','50','12.5','nu','nu'),
       (NULL,'Conică','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','nu','nu'),
       (NULL,'Conică','Strunjire exterioară de finisare','9','8','7','3.2','0.8','nu','nu'),
       (NULL,'Conică','Strunjire exterioară  foarte fină','7','6','5','0.8','0.2','nu','nu'),

       (NULL,'Conică','Strunjire exterioară de degroșare','13','11','10','50','12.5','da','nu'),
       (NULL,'Conică','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','da','nu'),
       (NULL,'Conică','Rectificare de degroșare','10','8','7','3.2','1.6','da','nu'),
       (NULL,'Conică','Rectificare de finisare','8','7','6','1.6','0.4','da','nu'),
       (NULL,'Conică','Rectificare foarte fină','7','6','5','0.4','0.2','da','nu'),

       (NULL,'Canal exterior','Strunjire exterioară de degroșare','13','11','10','50','12.5','nu','nu'),
       (NULL,'Canal exterior','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','nu','nu'),
       (NULL,'Canal exterior','Strunjire exterioară de finisare','9','8','7','3.2','0.8','nu','nu'),
       (NULL,'Canal exterior','Strunjire exterioară  foarte fină','7','6','5','0.8','0.2','nu','nu'),

       (NULL,'Canal exterior','Strunjire exterioară de degroșare','13','11','10','50','12.5','da','nu'),
       (NULL,'Canal exterior','Strunjire exterioară  de semifinsare','11','10','9','12.5','3.2','da','nu'),
       (NULL,'Canal exterior','Rectificare de degroșare','10','8','7','3.2','1.6','da','nu'),
       (NULL,'Canal exterior','Rectificare de finisare','8','7','6','1.6','0.4','da','nu'),
       (NULL,'Canal exterior','Rectificare foarte fină','7','6','5','0.4','0.2','da','nu'),

       (NULL,'Canal de pană','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Canal de pană','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Canal de pană','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Canal de pană','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Canal de pană','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Canal de pană','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Canal interior','Frezare de degroșare','12','10','9','50','6.3','nu','nu'),
       (NULL,'Canal interior','Frezare de finisare','10','9','8','6.3','1.6','nu','nu'),
       (NULL,'Canal interior','Frezare foarte fină','8','7','6','1.6','0.8','nu','nu'),

       (NULL,'Canal interior','Frezare de degroșare','12','10','9','50','6.3','da','nu'),
       (NULL,'Canal interior','Frezare de finisare','10','9','8','6.3','1.6','da','nu'),
       (NULL,'Canal interior','Rectificare de finisare','8','7','6','1.6','0.8','da','nu'),

       (NULL,'Canelată','Prelucrarea danturii prin rabotare','10','7','6','3.2','1.6','nu','nu'),
       (NULL,'Canelată','Prelucrarea danturii prin frezare','10','7','6','1.6','0.8','nu','nu'),
       (NULL,'Canelată','Prelucrarea danturii prin rectificare','7','6','5','0.8','0.1','nu','nu'),

       (NULL,'Canelată','Prelucrarea danturii prin rabotare','10','7','6','3.2','1.6','da','nu'),
       (NULL,'Canelată','Prelucrarea danturii prin frezare','10','7','6','1.6','0.8','da','nu'),
       (NULL,'Canelată','Rectificare de finisare','8','7','6','0.8','0.4','da','nu'),
       (NULL,'Canelată','Rectificare foarte fină','7','6','5','0.4','0.1','da','nu'),

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