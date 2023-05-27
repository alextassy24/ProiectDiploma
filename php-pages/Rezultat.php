<?php
    session_start();
    include '../php-functions/index.php';
    include '../php-functions/verificare.php';
    include '../php-functions/numeTabel.php';
    if(isset($_SESSION['numepiesa'])){$numep = $_SESSION['numepiesa'];}
    $_SESSION['currPageName'] = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tanase Alexandru">
    <title>Rezultat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="/proiect/css/style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container-pagina">
        <div class="Intro-1 text-center mt-3 mb-5">
            <?php if(!(isset($numep))): ?>
            <h2> Nu a fost selectată nicio piesă!</h2>
            <a href="SchimbarePiesa.php" class="btn btn-primary">Alegeți o piesă</a>
            <?php else : ?>
            <h2>Piesa curentă este <span class="text-primary"><?php echo numeTabel($numep);?></span>.
            </h2>

        </div>
        <div class="d-flex justify-content-between align-items-end pb-2">
            <div>
                <h3>Etapele de prelucrare</h3>
                <p>În tabelul alăturat se regăsește soluția aplicației informatice pentru suprafețele introduse.</p>
            </div>
            <div>
                <button class="btn btn-success btn-lg" id="export_button">Export</button>
            </div>
        </div>
        <div class="table-responsive w-100">
            <?php
                include '../php-functions/rezultatPrelucrari.php';
                endif;   
            ?>
        </div>
    </div>
</body>
<script>
function html_table_to_excel(type) {
    var data = document.getElementById('tabelRezultat');
    var file = XLSX.utils.table_to_book(data, {
        sheet: "sheet1"
    });
    XLSX.write(file, {
        bookType: type,
        bookSST: true,
        type: 'base64'
    });
    XLSX.writeFile(file, 'RezultatPrelucrari.' + type);
}
const export_button = document.getElementById('export_button');
export_button.addEventListener('click', () => {
    html_table_to_excel('xlsx');
});
</script>

</html>