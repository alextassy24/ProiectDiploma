<?php
    include 'index.php';
    session_start();
    $piesa = $_GET['piesaStergere'];
    if(isset($_GET['DeleteTB'])){
        $sql = "DELETE FROM piese WHERE numePiesa ='$piesa'";
            mysqli_query($conn, $sql);
        $sql = "SET @num := 0;";
            mysqli_query($conn, $sql);
        $sql = "UPDATE piese SET id = @num := (@num+1);";
            mysqli_query($conn, $sql);
        $sql = "ALTER TABLE piese AUTO_INCREMENT = 1;";
            mysqli_query($conn, $sql);
        $sql = "DROP TABLE proiect_diploma.$piesa;";
            mysqli_query($conn, $sql);
        if($_SESSION['numepiesa'] == $piesa)$_SESSION['numepiesa'] = null;
    }
    header("Location:../php-pages/Piese.php?Piesa ".$piesa." a fost stearsa!");
    exit;
?>