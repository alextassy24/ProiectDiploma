<?php
    include 'index.php';
    include 'verificare.php';
    include 'datePiesa.php';
    session_start();
    if(isset($_SESSION['numepiesa']))
    {$numep = $_SESSION['numepiesa'];}
    $id = $_SESSION['modif'];
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
    $sql = "UPDATE $numep SET tip = '$tip', dimensiune1 = '$dimensiune1',
    dimensiune2 = '$dimensiune2', tol_sup = '$tol1', tol_inf = '$tol2',
    rugozitate = '$rugozitate', it = '$it', gauraSemifabricat = '$gauraSemifabricat' WHERE id = '$id' ";
    mysqli_query($conn, $sql);
    echo "<script> window.location.href='../php-pages/Suprafete.php?Suprafata modificata!'</script>"; 
    exit;
?>