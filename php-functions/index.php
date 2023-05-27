<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName =  "proiect_diploma";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
    if(!$conn){
        echo "Nu s-a putut realiza conectarea!";
    }
 ?>