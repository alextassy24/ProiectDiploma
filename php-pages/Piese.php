<?php
    include '../php-functions/index.php';
    include '../php-functions/numeTabel.php';
    session_start();
    $_SESSION['currPageName'] = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tanase Alexandru">
    <title>Meniu Piese</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="/proiect/js/script1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="/proiect/css/style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="flexbox1 d-flex gap-3 mt-5">
        <div class="butoane d-flex flex-column mt-2 pe-3 ps-3">
            <div class="dropdown-center mb-3 w-100">
                <button class="btn btn-primary dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Creare piesă
                </button>
                <form action="../php-functions/insertTabel.php" id="form1" method="POST"
                    class="form-piesa dropdown-menu p-3 ">
                    <div class="mb-3">
                        <input type="text" id="piesa" name="numePiesa" class="form-control"
                            placeholder="Introduceți numele piesei">
                        <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-piesa"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Clasa de toleranță:</label>
                        <select name="clasaToleranta" id="clasaToleranta" class="form-select">
                            <option selected disabled>--Alege clasă--</option>
                            <option value="f">Fină(f)</option>
                            <option value="m">Mijlocie(m)</option>
                            <option value="c">Grosieră(c)</option>
                            <option value="v">Grosolană(v)</option>
                        </select>
                        <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-clasaToleranta"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Treapta de precizie a semifabricatului este:</label>
                        <input type="number" id="precizieSemifabricat" name="precizieSemifabricat" class="form-control"
                            placeholder="Ex: 15">
                        <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-precizieSemifabricat"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Rugozitatea semifabricatului este:</label>
                        <input type="number" id="rugozitateSemifabricat" name="rugozitateSemifabricat"
                            class="form-control" placeholder="Ex: 100">
                        <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-rugozitateSemifabricat">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Piesa are tratament termic?</label>
                        <div class="d-flex justify-content-center gap-5">
                            <div>
                                <input type="radio" id="tratament1" name="tratamentTermic" value="da">
                                <label for="supr1" class="label">Da</label>
                            </div>
                            <div>
                                <input type="radio" id="tratament2" name="tratamentTermic" value="nu">
                                <label for="supr2" class="label">Nu</label>
                            </div>
                        </div>
                        <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-tratamentTermic"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Piesa este de tipul:</label>
                        <div class="d-flex justify-content-center gap-3">
                            <div>
                                <input type="radio" id="supr1" name="tipPiesa" value="revolutie">
                                <label for="supr1" class="label">Revoluție</label>
                            </div>
                            <div>
                                <input type="radio" id="supr2" name="tipPiesa" value="prismatica">
                                <label for="supr2" class="label">Prismatică</label>
                            </div>
                        </div>
                        <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-supr"></div>
                        <input type="submit" value="Creează" name="submit" id="submit"
                            class="btn btn-primary w-100 mt-2">
                    </div>
                </form>
            </div>
            <div class="dropdown-center mb-3 w-100">
                <button class="btn btn-danger dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Șterge piesă
                </button>
                <form action="../php-functions/stergeTabel.php" id="form2" method="GET"
                    class="fb1-form2 dropdown-menu  p-3">
                    <label for="piesaStergere" class="mb-2">Se va șterge piesa:</label>
                    <select name="piesaStergere" id="piesaStergere" class="form-select mb-2">
                        <?php include 'tabeluriSelect.php'; ?>
                    </select>
                    <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-piesaStergere"></div>
                    <input type="submit" class="btn btn-danger w-100 mt-2" value="Șterge" name="DeleteTB" id="DeleteTB"
                        onclick="return confirm('Sunteți sigur că doriți să ștergeți această piesă?');">
                </form>
            </div>
            <div class="dropdown-center mb-3 w-100">
                <button class="btn btn-warning dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Prelucrare piesă
                </button>
                <form action="../php-functions/tabelAles.php" id="form3" method="GET"
                    class="fb1-form3 dropdown-menu  p-3">
                    <label for="numepiesa" class="mb-2">Se va prelucra piesa:</label>
                    <select name="numepiesa" id="numepiesa" class="form-select mb-2">
                        <?php include 'tabeluriSelect.php'; ?>
                    </select>
                    <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-numepiesa"></div>
                    <input type="submit" value="Trimite" name="OK" class="btn btn-success w-100 mt-2">
                </form>
            </div>
        </div>
        <div class="content d-flex gap-4">
            <div>
                <?php 
                echo "<h2> Piese de revoluție</h2>" ;
                $sql = "SELECT numePiesa FROM piese WHERE tipPrelucrare = 'revolutie'";
                $res = mysqli_query($conn, $sql);
                $sql = "SELECT COUNT(numepiesa) FROM piese WHERE tipPrelucrare = 'revolutie'";
                $count = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($count);
                if($row[0]):
            ?>
                <ul class="list-group list-group-numbered">
                    <?php
                        while($table = mysqli_fetch_array($res)){
                            if($table[0]!= "abaterilimita" && $table[0]!= "tolerantefundamentale" && $table[0]!= "prelucrarirevolutie" 
                            && $table[0]!= "prelucrariprismatice" && $table[0]!= "piese"){ 
                                    $tabel = numeTabel($table[0]);
            ?>
                    <li class="list-group-item list-group-item-primary"><?php echo $tabel;?> </li>
                    <?php 
                    }
                }
            ?>
                </ul>
                <?php else: ?>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-warning">Nu există piese de revoluție!</li>
                </ul>
                <?php endif;?>
            </div>
            <div>
                <?php 
                echo "<h2> Piese prismatice</h2>" ;
                $sql = "SELECT numePiesa FROM piese WHERE tipPrelucrare = 'prismatica'";
                $res = mysqli_query($conn, $sql);
                $sql = "SELECT COUNT(numepiesa) FROM piese WHERE tipPrelucrare = 'prismatica'";
                $count = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($count);
                if($row[0]):
            ?>
                <ul class="list-group list-group-numbered">
                    <?php
                        while($table = mysqli_fetch_array($res)){
                            if($table[0]!= "abaterilimita" && $table[0]!= "tolerantefundamentale" && $table[0]!= "prelucrarirevolutie" 
                            && $table[0]!= "prelucrariprismatice" && $table[0]!= "piese"){ 
                                    $tabel = numeTabel($table[0]);
            ?>
                    <li class="list-group-item list-group-item-info"><?php echo $tabel;?> </li>
                    <?php 
                    }
                }
            ?>
                </ul>
                <?php else: ?>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-warning">Nu există piese prismatice!</li>
                </ul>
                <?php endif;?>
            </div>
        </div>
    </div>
</body>

</html>