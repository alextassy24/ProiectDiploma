<option selected disabled>--Alege piesă--</option>
<option disabled>--Piese de revoluție--</option>
<?php
    $sql = "SELECT numePiesa FROM piese WHERE tipPrelucrare = 'revolutie'";
    $res = mysqli_query($conn, $sql);
    if(mysqli_query($conn, $sql)){
        while($table = mysqli_fetch_array($res)){
            if($table[0]!= "abaterilimita" && $table[0]!= "tolerantefundamentale" && $table[0]!= "prelucrariprismatice" 
            && $table[0]!= "prelucrarirevolutie" && $table[0]!= "piese"){
                $tabel = numeTabel($table[0]);
                echo "<option value = $table[0]>$tabel</option>"; 
            }
        }
    }
?>
<option disabled>--Piese prismatice--</option>
<?php
    $sql = "SELECT numePiesa FROM piese WHERE tipPrelucrare = 'prismatica'";
    $res = mysqli_query($conn, $sql);
    if(mysqli_query($conn, $sql)){
        while($table = mysqli_fetch_array($res)){
            if($table[0]!= "abaterilimita" && $table[0]!= "tolerantefundamentale" && $table[0]!= "prelucrariprismatice" 
            && $table[0]!= "prelucrarirevolutie"  && $table[0]!= "piese"){
                $tabel = numeTabel($table[0]);
                echo "<option value = $table[0]>$tabel</option>";
            }
        }
    }
?>