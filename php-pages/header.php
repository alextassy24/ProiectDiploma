<?php
    $current1 = $current2 = $current3 = $current4 = '';
    $pageName = basename($_SERVER['PHP_SELF']);
    if($pageName == "Home.php") { $current1 = "active";}
        else if($pageName == "Piese.php") { $current2 = "active";}
            else if($pageName == "Suprafete.php") { $current3 = "active";}
                else if($pageName == "Rezultat.php") { $current4 = "active";}
?>
<header>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler float-right mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center align-items-center align-items-stretch"
                id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-stretch">
                    <li class="<?php echo $current1; ?> nav-item curent-page ">
                        <a href="Home.php"
                            class=" nav-link link-secondary d-flex flex-column justify-content-center align-items-center text-light">
                            <i class="fa fa-home"></i><span>Acasă</span>
                        </a>
                    </li>
                    <li class="<?php echo $current2; ?> nav-item ">
                        <a href="Piese.php"
                            class="nav-link link-secondary d-flex flex-column justify-content-center align-items-center text-light">
                            <i class="fa fa-bars"></i><span>Meniu-piese</span>
                        </a>
                    </li>
                    <li class="<?php echo $current3; ?> nav-item ">
                        <a href="Suprafete.php"
                            class="nav-link link-secondary d-flex flex-column justify-content-center align-items-center text-light">
                            <i class="fa fa-cogs"></i><span>Prelucrări</span>
                        </a>
                    </li>
                    <li class="<?php echo $current4; ?> nav-item ">
                        <a href="Rezultat.php"
                            class="nav-link link-secondary d-flex flex-column justify-content-center align-items-center text-light text-light">
                            <i class="fa fa-clipboard"></i><span>Rezultate</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>