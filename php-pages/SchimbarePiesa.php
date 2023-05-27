<?php
    include '../php-functions/index.php';
    include '../php-functions/numeTabel.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tanase Alexandru">
    <title>Suprafete</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="code" href="index.php">
    <script defer src="/proiect/js/script2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="/proiect/css/style.css">
</head>

<body>
    <?php
        include 'header.php';
    ?>
    <div class="schimbare-piesa text-center mt-4 p-3">
        <form action="../php-functions/tabelAles.php" id="form" method="GET">
            <div class="mb-3">
                <label for="numepiesa">Se va analiza piesa:</label>
                <select name="numepiesa" id="numepiesa" class="form-select">
                    <?php include 'tabeluriSelect.php'; ?>
                </select>
            </div>
            <button type="submit" name="OK" class="btn btn-success mt-1 w-50">Trimite</button>
        </form>
        <div class="mt-2 text-danger bg-danger bg-opacity-25 " id="error-piesa"></div>
    </div>
</body>

</html>