<?php
    session_start();
    include '../php-functions/index.php';
    include '../php-functions/numeTabel.php'; 
    $_SESSION['currPageName'] = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Tanase Alexandru">
    <title>Prelucrari</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="/proiect/js/script3.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="/proiect/css/style.css">
    <?php
    if(isset($_SESSION['numepiesa'])){
        $numep = $_SESSION['numepiesa'];
        include '../php-functions/datePiesa.php';
        if($ok){
            if( $tipPrelucrare == "revolutie"):
    ?>
    <script src="/proiect/js/selectRevolutie.js"></script>
    <?php else:?>
    <script src="/proiect/js/selectPrismatic.js"></script>
    <?php endif;}}?>
</head>

<body>
    <?php
        include 'header.php';
    ?>
    <div class="container-pagina">
        <?php
        if(!(isset($numep))){
    ?>
        <div class="Intro-1 text-center mt-3 mb-5">
            <h2>Nu a fost selectată nicio piesă!</h2>
            <a href="SchimbarePiesa.php" class="btn btn-primary">Alegeți o piesă</a>
        </div>
        <?php 
        }
        else{
        ?>
        <div class="Intro-1 text-center mt-3 mb-5">
            <h2>Piesa curentă este <span class="text-primary"><?php echo numeTabel($numep);?></span>.</h2>
        </div>
        <div class="d-flex justify-content-end pb-2">
            <a href="SchimbarePiesa.php" class="btn btn-primary me-2">Schimbare piesă</a>
            <a href="Suprafete.php?deleteall" class="btn btn-danger ml-auto"
                onclick="return confirm('Sunteți sigur că doriți să ștergeți toate suprafețele?');">
                Resetare
            </a>
        </div>
        <?php
        $id = 0;
        $update = false;
        $form = "../php-functions/insert.php";
        if(isset($_GET['modif']))
        {   
            $id = $_GET['modif'];
            $update = true;
            $form = "../php-functions/update.php";
            $_SESSION['modif'] = $_GET['modif'];

        } 
        ?>

        <div class="container-mare d-flex gap-5">
            <div class="form-container ms-3">
                <form action="<?php echo $form; ?>" id="form" method="POST" onsubmit="script()" class="form-suprafete">
                    <fieldset>
                        <h3>
                            <?php
                        if(isset($_GET['modif'])){
                            $id = $_GET['modif'];
                            echo "Modificați suprafața nr.". $id;   
                        }
                        else{
                            $result = mysqli_query($conn,"SELECT COUNT(id) AS total FROM $numep");
                            $values = mysqli_fetch_assoc($result);
                            $num_rows = $values['total'];
                            if($num_rows == "0"){echo "Introduceți prima suprafață";}
                                else {echo "Introduceți suprafața nr.".$num_rows+1;}
                        }
                    ?>
                        </h3>
                        <div class="mb-3 text-center">
                            <span class="text-danger fw-bold">*</span><label for="tip">Tipul suprafeței: </label>
                            <select name="tip" id="tip" class="form-select"
                                onchange="populate(this.id,'rugozitate','gauraSemifabricat')">
                                <option selected disabled>--Alege tipul suprafeței--</option>
                                <option value="Cilindrică exterioară">Cilindrică exterioară</option>
                                <option value="Cilindrică interioară">Cilindrică interioară</option>
                                <option value="Plană circulară plină">Plană circulară plină</option>
                                <option value="Plană circulară întreruptă">Plană circulară întreruptă</option>
                                <option value="Plană frontală non-circulară">Plană frontală non-circulară</option>
                                <option value="Toroidală">Toroidală</option>
                                <option value="Conică">Conică</option>
                                <option value="Canal exterior">Canal exterior</option>
                                <option value="Canal interior">Canal interior</option>
                                <option value="Canal de pană">Canal de pană</option>
                                <option value="Canelată">Canelată</option>
                                <option value="Gaură netedă">Gaură netedă</option>
                                <option value="Gaură filetată">Gaură filetată</option>
                            </select>
                            <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-tip"></div>
                        </div>
                        <div class="mb-3" id="gauraSemifabricat" style="visibility:hidden; display:none;">
                            <label class="form-label">Există gaura în semifabricat?</label>
                            <div class="d-flex justify-content-center gap-5">
                                <div>
                                    <input type="radio" id="gaura1" name="gauraSemifabricat" value="da">
                                    <label for="supr1" class="label">Da</label>
                                </div>
                                <div>
                                    <input type="radio" id="gaura2" name="gauraSemifabricat" value="nu">
                                    <label for="supr2" class="label">Nu</label>
                                </div>
                            </div>
                            <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-gauraSemifabricat"></div>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <label for="dimensiune1" class="pe-2"><span
                                    class="text-danger fw-bold">*</span>DimensiuneA:</label>
                            <label for="dimensiune2">DimensiuneB:</label>
                        </div>
                        <div class="d-flex mb-3 ">

                            <input type="text" class="form-control" id="dimensiune1" name="dimensiune1"
                                placeholder="DimensiuneA">

                            <input type="text" class="form-control" id="dimensiune2" name="dimensiune2"
                                placeholder="DimensiuneB">
                        </div>
                        <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-dim1"></div>
                        <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-dim2"></div>
                        <div class="d-flex justify-content-evenly text-center">
                            <label for="tol_sup" class="pe-2">Abatere superioară:</label>
                            <label for="tol_inf">Abatere inferioară:</label>
                        </div>
                        <div class="d-flex mb-3 flex-input">
                            <input type="text" class="form-control" id="tol_sup" name="tol_sup" placeholder="Ex:+0.025">
                            <input type="text" class="form-control" id="tol_inf" name="tol_inf" placeholder="Ex:-0.06">
                        </div>
                        <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-tol1"></div>
                        <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-tol2"></div>
                        <div class="mb-3 text-center">
                            <span class="text-danger fw-bold">*</span><label for="rugozitate">Rugozitate:</label>
                            <select name="rugozitate" id="rugozitate" class="form-select">
                                <option selected disabled>--Alege valoarea rugozității--</option>
                            </select>
                            <div class="mt-2 text-danger bg-danger bg-opacity-25" id="error-rugozitate"></div>
                        </div>
                        <div class="mb-3">
                            <?php
                                if ($update == true):
                            ?>
                            <input type="submit" value="Modifică" name="submit" id="submit"
                                class="btn btn-primary w-100">
                            <?php else: ?>
                            <input type="submit" value="Adaugă" name="submit" id="submit" class="btn btn-success w-100">
                            <?php endif; ?>
                        </div>
                    </fieldset>
                </form>

            </div>
            <?php
                    if(isset($numep)){
                    $date = "SELECT * FROM $numep";
                    $results = mysqli_query($conn,$date);
                    while( $row = mysqli_fetch_assoc($results))
                        {
                        if(isset($_GET['deleteall'])){
                                mysqli_query($conn, "DELETE FROM $numep");
                                $sql = "SET @num := 0;";
                                mysqli_query($conn, $sql);
                                $sql = "UPDATE $numep SET id = @num := (@num+1);";
                                mysqli_query($conn, $sql);
                                $sql = "ALTER TABLE $numep AUTO_INCREMENT = 1;";
                                mysqli_query($conn, $sql);
                                echo "<script> window.location.href='Suprafete.php?Suprafete sterse!' </script>";
                            }
                        }
                    }
                ?>
            <div class="table-responsive w-100">
                <table class="table table-striped table-hover">
                    <?php
                if(isset($numep)){
                    $date = "SELECT * FROM $numep";
                    $results = mysqli_query($conn,$date);
                        $sql = " SELECT COUNT(id) AS total FROM $numep";
                                $result = mysqli_query($conn,$sql);
                                $values = mysqli_fetch_assoc($result);
                                $num_rows = $values['total'];
                        if($num_rows > 0):
                        ?>
                    <tr class="table-dark">
                        <th>Sk</th>
                        <th>Tip Suprafață</th>
                        <th>Dimensiune A</th>
                        <th>Dimensiune B</th>
                        <th>Treaptă</th>
                        <th>Rugozitate(μm)</th>
                        <th>Acțiune</th>
                    </tr>
                    <?php
                        endif;
                            while( $row = mysqli_fetch_assoc($results))
                        {
                        ?>
                    <tr>
                        <td>S<?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['Tip']; ?> </td>
                        <td>
                            <?php 
                            $dimensiune = $row['Dimensiune1'];
                            $tip = $row['Tip'];
                            if($tip == "Cilindrică exterioară" || $tip == "Cilindrică interioară" ||
                            $tip == "Gaură netedă" || $tip == "Plană circulară plină" || $tip == "Plană circulară întreruptă"){
                                $piesa = "Ø ";
                                $dimensiune = $piesa.$dimensiune;
                        }
                            elseif($tip == "Toroidală"){
                                $piesa = "R ";
                                $dimensiune = $piesa.$dimensiune;
                        }
                            elseif($tip == "Gaură filetată"){
                                $piesa = "M ";
                                $dimensiune = $piesa.$dimensiune;
                            }
                            echo $dimensiune;
                        ?>
                            <sup><?php $tolSup = $row['Tol_sup']; if($tolSup) echo $tolSup; ?></sup>
                            <sub><?php $tolInf = $row['Tol_inf']; if($tolInf) echo $tolInf;  ?></sub>
                        </td>
                        <td> <?php echo $row['Dimensiune2']; ?> </td>
                        <td> <?php if(isset($row['It'])) echo'IT'.$row['It']; ?> </td>
                        <td> <?php echo $row['Rugozitate']; ?> </td>
                        <td>
                            <a href="Suprafete.php?modif=<?php echo $row['id']; ?>" class="btn btn-primary"
                                onclick="return confirm('Sunteți sigur că doriți să modificați această suprafață?');">Modifică</a>
                            <a href="Suprafete.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"
                                onclick="return confirm('Sunteți sigur că doriți să ștergeți această suprafață?');">Șterge</a>
                        </td>
                    </tr>
                    <?php  
                        }
                }
                    if(isset($_GET['delete'])){
                        $deleteid = $_GET['delete'];
                        mysqli_query($conn, "DELETE FROM $numep WHERE id='$deleteid'");
                        mysqli_query($conn, "SET @num := 0;");
                        mysqli_query($conn, "UPDATE $numep SET id = @num := (@num+1);");
                        mysqli_query($conn,"ALTER TABLE $numep AUTO_INCREMENT = 1;");
                        echo "<script> window.location.href='Suprafete.php?Suprafata stearsa!' </script>";
                    }
                ?>
                </table>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</body>

</html>