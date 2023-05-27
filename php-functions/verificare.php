<?php
    function verif($dimensiune, $toleranta, $clasa, $conn, $tip) {
        $it = '';
        if($toleranta){
            $date = "SELECT * FROM tolerantefundamentale";
            $results = mysqli_query($conn,$date);
            while( $row = mysqli_fetch_assoc($results)){
                $datas = array();
                $datas[] = $row;
                foreach($datas as $data){
                    if($dimensiune > $data['dimensiuniPeste'] && $dimensiune <= $data['dimensiuniPanaLa']){  
                        if($toleranta == $data['IT01']) $it = "01";
                        else{
                            for($i = 0; $i <= 18; $i++){
                                if($toleranta == $data['IT'.$i]) {$it = $i;}
                                
                            }
                        }
                    } 
                }
            }
        } 
        else{
                if($tip == "Conică"){
                    $date = "SELECT * FROM abaterilimitatesituri";
                    $results = mysqli_query($conn, $date);
                    while( $row = mysqli_fetch_assoc($results)){
                        $datas = array();
                        $datas[] = $row;
                        foreach($datas as $data){
                            if($data['clasa'] == $clasa){
                                    if($dimensiune > $data['dimensiuniDeLa'] && $dimensiune <= $data['dimensiuniPanaLa']){
                                        $toleranta = $data['valoare'];
                                    
                                }
                            }
                        }
                    }
                }
                else{
                    $date = "SELECT * FROM abaterilimita";
                    $results = mysqli_query($conn, $date);
                    while( $row = mysqli_fetch_assoc($results)){
                        $datas = array();
                        $datas[] = $row;
                        foreach($datas as $data){
                            if($data['clasa'] == $clasa){
                                    if($dimensiune > $data['dimensiuniDeLa'] && $dimensiune <= $data['dimensiuniPanaLa']){
                                        $toleranta = $data['valoare'];
                                    
                                }
                            }
                        }
                    }
                }
                $date = "SELECT * FROM tolerantefundamentale";
                $results = mysqli_query($conn,$date);
                while( $row = mysqli_fetch_assoc($results)){
                    $datas = array();
                    $datas[] = $row;
                    foreach($datas as $data){
                            if($dimensiune > $data['dimensiuniPeste'] && $dimensiune <= $data['dimensiuniPanaLa']){  
                                if($toleranta >= $data['IT01'] && $toleranta < $data['IT0']) $it = "01";
                                else{
                                    for($i = 0; $i <= 18; $i++){
                                        if($i == 18){
                                            if($toleranta >= $data['IT'.$i]) $it = $i;
                                        }
                                        else{
                                            if($toleranta <= $data['IT'.$i] && $toleranta > $data['IT'.$i-1]) $it = $i-1;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
        return $it;
    }
?>