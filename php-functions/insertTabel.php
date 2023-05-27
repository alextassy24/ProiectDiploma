<?php
    include 'index.php';
    if(isset($_POST['numePiesa'])) $numePiesa = $_POST['numePiesa'];
    if(isset($_POST['tipPiesa'])) $tipPiesa = $_POST['tipPiesa'];
    if(isset($_POST['precizieSemifabricat'])) $precizieSemifabricat = $_POST['precizieSemifabricat'];
    if(isset($_POST['clasaToleranta'])) $clasaToleranta = $_POST['clasaToleranta'];
    if(isset($_POST['tratamentTermic'])) $tratamentTermic = $_POST['tratamentTermic'];
    if(isset($_POST['rugozitateSemifabricat'])) $rugozitateSemifabricat = $_POST['rugozitateSemifabricat'];
    $numePiesa = str_replace(' ','_',$numePiesa);
    $sql = "CREATE TABLE $numePiesa (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,\n"

    . "                                      Tip VARCHAR(50) NOT NULL,\n"

    . "                                      Dimensiune1 FLOAT NOT NULL,\n"

    . "                                      Dimensiune2 FLOAT NOT NULL,\n"

    . "                                      Tol_sup FLOAT NULL,\n"

    . "                                      Tol_inf FLOAT NULL,\n"

    . "                                      It VARCHAR(50) NOT NULL,\n"

    . "                                      gauraSemifabricat VARCHAR(3) NOT NULL,\n"

    . "                                      Rugozitate FLOAT NOT NULL);";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO piese(numePiesa,tipPrelucrare,clasaTolerante, precizieSemifabricat, rugozitateSemifabricat, tratamentTermic) 
    values ('$numePiesa','$tipPiesa','$clasaToleranta','$precizieSemifabricat','$rugozitateSemifabricat','$tratamentTermic')";
    mysqli_query($conn, $sql);
    header("Location:../php-pages/Piese.php?Piesa adaugata!");
?>