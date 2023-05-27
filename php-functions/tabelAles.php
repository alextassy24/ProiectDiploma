<?php
    session_start();
    if(isset($_GET['numepiesa'])){
        $_SESSION['numepiesa'] = $_GET['numepiesa'];
    }
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    if($curPageName == "tabelAles.php" && ($_SESSION['currPageName'] == "Suprafete.php" 
    || $_SESSION['currPageName'] == "Piese.php")) 
    {
        header("Location:../php-pages/Suprafete.php?Piesa ".$_GET['numepiesa']." a fost aleasa!");
        exit;
    }
?>