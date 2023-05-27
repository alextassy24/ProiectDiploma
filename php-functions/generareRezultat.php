<?php
while( $row = mysqli_fetch_assoc($results)){
    $datas = array();
    $datas[] = $row; 
    foreach($datas as $data){
        $prelucrareEtapa1 = $prelucrareEtapa2 = $prelucrareEtapa3 = $prelucrareEtapa4 = $prelucrareEtapa5 = $prelucrareEtapa6 =null;
        $itEtapa1 = $itEtapa2 = $itEtapa3 = $itEtapa4 = $itEtapa5 =  $itEtapa6 =null;
        $rugozitateEtapa1 = $rugozitateEtapa2 = $rugozitateEtapa3 = $rugozitateEtapa4 =  $rugozitateEtapa5 = $rugozitateEtapa6 = null;
        $eroareEtapa1 = $eroareEtapa2 = $eroareEtapa3 = $eroareEtapa4 =  $eroareEtapa5 = $eroareEtapa6 = null;
        $it = $data['It'];
        $tipSuprafata = $data['Tip'];
        $idSuprafata = $data['id'];
        $dimensiuneSuprafata = $data['Dimensiune1'];
        $gauraSemifabricat = $data['gauraSemifabricat'];
        $rugozitateFinala = str_replace('μm','',$data['Rugozitate']);
        include 'datePiesa.php';
        if($gauraSemifabricat == "da" || $gauraSemifabricat == "nu")
        $sql = "SELECT * FROM $numeTabel WHERE tipSuprafata = '$tipSuprafata' AND tratamentTermic = '$tratamentTermic' AND gauraSemifabricat = '$gauraSemifabricat'";
        else $sql = "SELECT * FROM $numeTabel WHERE tipSuprafata = '$tipSuprafata' AND tratamentTermic = '$tratamentTermic'";
        $rezultat = mysqli_query($conn,$sql);
        $c = $i = 0;
        while( $row2 = mysqli_fetch_assoc($rezultat)){
            if($i == 0){$prelucrareEtapa1 = $row2['prelucrare'];
                if($it >= $row2['precizieMaxima'] && $it <= $row2['precizieEconomicaDeLa'] 
                && $rugozitateFinala >= $row2['rugozitatePanaLa']) 
                    {$itEtapa1 = $it;
                    $rugozitateEtapa1 = $rugozitateFinala;
                    if($tratamentTermic == "da") $prelucrareEtapa2 = "Tratament termic";
                    }
                else if($it>$row2['precizieEconomicaDeLa'] && $rugozitateFinala >= $row2['rugozitatePanaLa']){
                    $itEtapa1 = $row2['precizieEconomicaDeLa'];
                    $rugozitateEtapa1 = $rugozitateFinala;
                }
                $i++;
            }
            if($rugozitateFinala < $row2['rugozitateDeLa']){
                if($c == 0){
                    if($it >= $row2['precizieMaxima'] && $it <= $row2['precizieEconomicaDeLa']  
                    && $rugozitateFinala >= $row2['rugozitatePanaLa']) 
                    {$itEtapa1 = $it;$rugozitateEtapa1 = $rugozitateFinala;}
                    else{
                        $itEtapa1 = $row2['precizieEconomicaDeLa'];
                        if($rugozitateFinala >= $row2['rugozitatePanaLa']) 
                        $rugozitateEtapa1 = $rugozitateFinala;
                        else {$rugozitateEtapa1 = $row2['rugozitatePanaLa'];}
                        if($tratamentTermic == "da") $prelucrareEtapa2 = "Tratament termic";
                    }
                    $prelucrareEtapa1 = $row2['prelucrare'];
                    $c++;
                }
                else if($c == 1) {
                    if($it >= $row2['precizieMaxima'] && $it <= $row2['precizieEconomicaDeLa']  
                    && $rugozitateFinala >= $row2['rugozitatePanaLa']) 
                        {$itEtapa2 = $it;$prelucrareEtapa2 = $row2['prelucrare'];
                            $rugozitateEtapa2 = $rugozitateFinala;}
                     else {
                        $itEtapa2 = $row2['precizieEconomicaDeLa'];
                        $prelucrareEtapa2 = $row2['prelucrare'];
                        if($rugozitateFinala >= $row2['rugozitatePanaLa']) 
                        $rugozitateEtapa2 = $rugozitateFinala;
                        else {$rugozitateEtapa2 = $row2['rugozitatePanaLa'];$c++;}
                    }
                    if($tratamentTermic == "da") $prelucrareEtapa3 = "Tratament termic";
                }
                else if($c == 2) {
                    if($tratamentTermic == "da") {
                    if($it >= $row2['precizieMaxima'] && $it <= $row2['precizieEconomicaDeLa']  
                    && $rugozitateFinala >= $row2['rugozitatePanaLa']) 
                        {$itEtapa4 = $it;$prelucrareEtapa4 = $row2['prelucrare'];
                            $rugozitateEtapa4 = $rugozitateFinala;}
                     else {
                        $itEtapa4 = $row2['precizieEconomicaDeLa'];
                        $prelucrareEtapa4 = $row2['prelucrare'];
                        if($rugozitateFinala >= $row2['rugozitatePanaLa']) 
                        $rugozitateEtapa4 = $rugozitateFinala;
                        else {$rugozitateEtapa4 = $row2['rugozitatePanaLa']; $c++;}
                    }
                    }
                    else{
                        if($it >= $row2['precizieMaxima'] && $it <= $row2['precizieEconomicaDeLa']  
                        && $rugozitateFinala >= $row2['rugozitatePanaLa']) 
                            {$itEtapa3 = $it;$prelucrareEtapa3 = $row2['prelucrare'];
                                $rugozitateEtapa3 = $rugozitateFinala;}
                        else {
                            $itEtapa3 = $row2['precizieEconomicaDeLa'];
                            $prelucrareEtapa3 = $row2['prelucrare'];
                            if($rugozitateFinala >= $row2['rugozitatePanaLa']) 
                            $rugozitateEtapa3 = $rugozitateFinala;
                            else {$rugozitateEtapa3 = $row2['rugozitatePanaLa'];$c++;}
                        }
                    }
                }
                else if($c == 3) {
                    if($tratamentTermic == "da") {
                    if($it >= $row2['precizieMaxima'] && $it <= $row2['precizieEconomicaDeLa']  
                    && $rugozitateFinala >= $row2['rugozitatePanaLa']) 
                        {$itEtapa5 = $it;$prelucrareEtapa5 = $row2['prelucrare'];
                            $rugozitateEtapa5 = $rugozitateFinala;}
                     else {
                        $itEtapa5 = $row2['precizieEconomicaDeLa'];
                        $prelucrareEtapa5 = $row2['prelucrare'];
                        if($rugozitateFinala >= $row2['rugozitatePanaLa']) 
                        $rugozitateEtapa5 = $rugozitateFinala;
                        else {$rugozitateEtapa5 = $row2['rugozitatePanaLa'];$c++;}
                    }
                    }
                    else{
                        if($it >= $row2['precizieMaxima'] && $it <= $row2['precizieEconomicaDeLa']  
                        && $rugozitateFinala >= $row2['rugozitatePanaLa']) 
                            {$itEtapa4 = $it;$prelucrareEtapa4 = $row2['prelucrare'];
                                $rugozitateEtapa4 = $rugozitateFinala;}
                        else {
                            $itEtapa4 = $row2['precizieEconomicaDeLa'];
                            $prelucrareEtapa4 = $row2['prelucrare'];
                            if($rugozitateFinala >= $row2['rugozitatePanaLa']) 
                            $rugozitateEtapa4 = $rugozitateFinala;
                            else {$rugozitateEtapa4 = $row2['rugozitatePanaLa'];$c++;}
                        }
                    }
                }
                else if($c == 4 && $tratamentTermic == "da"){
                     $prelucrareEtapa6 = $row2['prelucrare'];
                    if($it >= $row2['precizieMaxima'] && $it <= $row2['precizieEconomicaDeLa']  
                    && $rugozitateFinala >= $row2['rugozitatePanaLa'])
                    {$itEtapa6 = $it;$rugozitateEtapa6 = $rugozitateFinala;}
                    else {$itEtapa6 = $row2['precizieEconomicaDeLa'];
                        if($rugozitateFinala >= $row2['rugozitatePanaLa']) 
                        $rugozitateEtapa6 = $rugozitateFinala;
                        else $rugozitateEtapa6 = $row2['rugozitatePanaLa'];}
                }
            }
        }
        
    if($itEtapa6!=''){
        if($it != $itEtapa6 ) $eroareEtapa6 ="Posibilă introducere greșită a datelor!";
    }else if($itEtapa5!=''){
        if($it != $itEtapa5 ) $eroareEtapa5 ="Posibilă introducere greșită a datelor!";
    }else if($itEtapa4!=''){
        if($it != $itEtapa4 ) $eroareEtapa4 ="Posibilă introducere greșită a datelor!";
    }else if($itEtapa3!=''){
        if($it != $itEtapa3 ) $eroareEtapa3 ="Posibilă introducere greșită a datelor!";
    }else if($itEtapa2!=''){
        if($it != $itEtapa2 ) $eroareEtapa2 ="Posibilă introducere greșită a datelor!";
    }else if($itEtapa1!=''){
        if($it != $itEtapa1 ) $eroareEtapa1 ="Posibilă introducere greșită a datelor!";
    }
    if($tratamentTermic =="nu"):   
?>
<tr>
    <td>S<?php echo $idSuprafata.' '."<br>".'IT'.$data['It']." Ra".$rugozitateFinala;?>
    </td>
    <td><?php echo $prelucrareEtapa1.' '."<br>";if($rugozitateEtapa1) echo 'IT'.$itEtapa1." Ra".$rugozitateEtapa1."<br>";?><span
            class="text-danger"><?php echo $eroareEtapa1;?></span>
    </td>
    <td><?php echo $prelucrareEtapa2.' '."<br>";if($rugozitateEtapa2) echo 'IT'.$itEtapa2." Ra".$rugozitateEtapa2."<br>";?><span
            class="text-danger"><?php echo $eroareEtapa2;?></span>
    </td>
    <td><?php echo $prelucrareEtapa3.' '."<br>";if($rugozitateEtapa3) echo 'IT'.$itEtapa3." Ra".$rugozitateEtapa3."<br>";?><span
            class="text-danger"><?php echo $eroareEtapa3;?></span>
    </td>
    <td><?php echo $prelucrareEtapa4.' '."<br>";if($rugozitateEtapa4) echo 'IT'.$itEtapa4." Ra".$rugozitateEtapa4."<br>";?><span
            class="text-danger"><?php echo $eroareEtapa4;?></span>
    </td>
</tr>
<?php else: ?>
<tr>
    <td>S<?php echo $idSuprafata.' '."<br>".'IT'.$data['It']." Ra".$rugozitateFinala;?>
    </td>
    <td><?php echo $prelucrareEtapa1.' '."<br>";if($rugozitateEtapa1) echo 'IT'.$itEtapa1." Ra".$rugozitateEtapa1."<br>";?><span
            class="text-danger"><?php echo $eroareEtapa1;?></span>
    </td>
    <td><?php echo $prelucrareEtapa2.' '."<br>";if($rugozitateEtapa2) echo 'IT'.$itEtapa2." Ra".$rugozitateEtapa2."<br>";?><span
            class="text-danger"><?php echo $eroareEtapa2;?></span>
    </td>
    <td><?php echo $prelucrareEtapa3.' '."<br>";?>
    </td>
    <td><?php echo $prelucrareEtapa4.' '."<br>";if($rugozitateEtapa4) echo'IT'. $itEtapa4." Ra".$rugozitateEtapa4."<br>";?><span
            class="text-danger"><?php echo $eroareEtapa4;?></span>
    </td>
    <td><?php echo $prelucrareEtapa5.' '."<br>";if($rugozitateEtapa5) echo 'IT'.$itEtapa5." Ra".$rugozitateEtapa5."<br>";?><span
            class="text-danger"><?php echo $eroareEtapa5;?></span>
    </td>
    <td><?php echo $prelucrareEtapa6.' '."<br>";if($rugozitateEtapa6) echo 'IT'.$itEtapa6." Ra".$rugozitateEtapa6."<br>";?><span
            class="text-danger"><?php echo $eroareEtapa6;?></span>
    </td>
</tr>
<?php
endif;
    }
}
?>