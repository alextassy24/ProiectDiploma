<?php
    include 'index.php';
    include 'verificare.php';
    session_start();
    if(isset($_SESSION['numepiesa'])){$numep = $_SESSION['numepiesa'];}
    $tip = $_POST['tip'];
    $dimensiune1 = (float)$_POST['dimensiune1'];
    $dimensiune2 = $_POST['dimensiune2'];
    $rugozitate = $_POST['rugozitate'];
    if(!isset($tol1)) $tol1 = (float)$_POST['tol_sup'];
    if(!isset($tol2)) $tol2 = (float)$_POST['tol_inf'];
    $toleranta = ($tol1 - $tol2)*1000;
    include 'datePiesa.php';
    $it = verif($dimensiune1, $toleranta, $clasaTolerante, $conn, $tip);
    if(isset($_POST['gauraSemifabricat']))$gauraSemifabricat = $_POST['gauraSemifabricat'];
    else $gauraSemifabricat = "-";
    $sql = "INSERT INTO $numep(tip,dimensiune1,dimensiune2,tol_sup,tol_inf,it,rugozitate,gauraSemifabricat) 
    values ('$tip','$dimensiune1','$dimensiune2','$tol1','$tol2','$it','$rugozitate','$gauraSemifabricat')";
    mysqli_query($conn, $sql);
    echo "<script> window.location.href='../php-pages/Suprafete.php?Suprafata adaugata!'</script>";
    exit;
?>