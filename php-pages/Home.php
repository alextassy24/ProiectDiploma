<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tanase Alexandru">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="/proiect/css/style.css">
    <title>Acasă</title>

</head>

<body>
    <?php
            include 'header.php';
        ?>
    <div class="container mt-3">
        <div class="home">
            <h1 class="pb-2"><u>Bine ați venit!</u></h1>
            <h3>Cerința proiectului de licență</h3>
            <p>Proiectarea unui algoritm și realizarea unui aplicații informatice pentru determinarea fazelor de
                prelucrare
                in funcție de condițiile tehnice impuse.</p>
            <h3>Modalitatea de funcționare a aplicației</h3>
            <ol>
                <li>Pe pagina "Meniu piese" se regăseste meniul principal de administrare al tabelelor aferente
                    pieselor ce urmează a fi analizate, tabele ce pot fi șterse de către utilizator, la nevoie.</li>
                <li>În cadrul paginii "Prelucrări" utilizatorul poate introduce date despre suprafețele piesei, prin
                    intermediul unui formular, date precum: tipul suprafeței, constrângerile geometrice,
                    abaterile dimensionale și rugozitatea.</li>
                <li>Iar pe pagina "Rezultate" se regăseste soluția aplicației informatice pentru prelucrarea
                    suprafetelor
                    introduse,
                    aceasta fiind scrisă sub forma unui tabel, ce poate fi exportat într-un fișier Excel(.XLSX).</li>
            </ol>
        </div>
    </div>
</body>

</html>