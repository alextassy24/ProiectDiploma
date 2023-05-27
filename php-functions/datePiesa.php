<?php
    include 'index.php';
    $sql = "SELECT * FROM piese"; 
    $res = mysqli_query($conn, $sql);
    $ok = 0;
    while($row = mysqli_fetch_array($res)){
        if($row['numePiesa'] == $numep){
            $tipPrelucrare = $row['tipPrelucrare']; 
            $clasaTolerante = $row['clasaTolerante'];
            $tratamentTermic = $row['tratamentTermic']; 
            $ok=1;
        }
    }
    if($ok){
        if($tipPrelucrare == "revolutie"){
            $numeTabel = "prelucrarirevolutie";
        }
        else{
            $numeTabel = "prelucrariprismatice";
        }
    }
?>