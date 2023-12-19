<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

            <img src="../assets/logos/logo.png" width="112" height="28">


            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item activado" href="/index.php">
                    HOME
                </a>

                <a class="navbar-item" href="">
                    HISTORIA
                </a>

                <a class="navbar-item" href="servicios.php">
                    SERVICIOS
                </a>
                <a class="navbar-item" href="noticias.php">
                    NOTICIAS
                </a>
                <a class="navbar-item" href="Contactanos.php">
                    CONTACTANOS
                </a>


            </div>


        </div>
    </nav>
    <section class="carussel">
        <?php
        include_once('../controllers/dbAlcaldia.php');
        ?>
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col-5">
                    <div class="imagen">
                        <img class="logo-seccion" src="../assets/logos/MicrosoftTeams-image (1).png" alt="">
                    </div>
                    <div class="slogan">
                        <p>
                            ¡Estamos listos para atenderte!
                        </p>
                        <a href="Contactanos.php">
                        <button type="button" class="btn btn-outline-light boton-slogan">Contactanos</button>
                        </a>
                        
                    </div>
                </div>
                <div class="col">

                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="margin-left: 2%;">
                        <?php
                             $query3 = "SELECT * FROM carrousel";
                             $result3 = $conn->query($query3);
                             if (!$result3) {
                                 die("Error en la consulta: " . $conn->error);
                             }
                             while ($row = $result3->fetch_assoc()) {
                                $IMAGEN= $row['IMAGEN'];
                                
                            echo"
                            <div class='carousel-item active'>
                                <img src='$IMAGEN' class='d-block w-100' alt='...' data-bs-interval='500'>
                            </div>
                            ";
                            
                            }
                        ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php

    $query = "SELECT * FROM alcalde where ID_ESTADO=1 limit 1";
    $result = $conn->query($query);
    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }
    while ($row = $result->fetch_assoc()) {
        $NOMBRE = $row['NOMBRE'];
        $APELLIDO = $row['APELLIDO'];
        $IMAGEN = $row['IMAGEN'];
        $REDSOCIAL1 = $row['REDSOCIAL1'];
        $REDSOCIAL2 = $row['REDSOCIAL2'];
        $REDSOCIAL3 = $row['REDSOCIAL3'];
        $DESCRIPCION = $row['DESCRIPCION'];
        
        echo "
            <section class='carussel' style='background-color: white;'>
            <div class='container text-center'>
            <div class='row align-items-start'>
                <div class='col-3 seccion-izquierdo'>
                    <img src='$IMAGEN' alt='' class='alcalde' style='width:250px;'>
                </div>
                <div class='col'>
                    <p class='descripcion' style='text-align:center'>
                        $DESCRIPCION
                        
                    </p>
                    <footer class='mini-footer'>
                        <div class='redes-alcalde'>
                            <div class='container text-center'>
                            <a href='$REDSOCIAL1' class='iconografia'>
                            <i class='fa-brands fa-facebook-f iconos-alcalde'>
                                </i>
                            </a>
                                <a href='$REDSOCIAL2' class='iconografia'>
                                <i class='fa-brands fa-square-instagram iconos-alcalde'></i>
                                </a>
                                <a href='$REDSOCIAL3' class='iconografia'>
                                <i class='fa-brands fa-square-x-twitter iconos-alcalde'></i>
                                </a>
                                <div class='row align-items-start'>

                                    <div class='col-4 iconos'>

                                    </div>
                                    <div class='col'>
                                        <p class='nombre-alcalde'>
                                            $NOMBRE 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </footer>
                </div>
            </div>
        </div>
        </section>
            ";
    }

    ?>


    <section class="seccion-noticias">
        <div class="container text-center">
            <div class="row align-items-start">
                <?php
                $query2 = "SELECT * FROM noticia ORDER BY ID ASC LIMIT 3";
                $result2 = $conn->query($query2);
                if (!$result2) {
                    die("Error en la consulta: " . $conn->error);
                }
                while ($row = $result2->fetch_assoc()) {
                    $TITULO = $row["TITULO"];
                    $IMAGENN = $row["IMAGEN1"];
                    $COLUMNA1 = $row["COLUMNA1"];
                    $ID = $row["ID"];
                    $TITULO = strtoupper($TITULO);
                    echo "
                    <div class='col'>
                    <div class='imagen-noticia'>
                        <img src='$IMAGENN' alt=''>
                    </div>
                    <div class='contenido-noticias'>
                        <p>
                        <center>
                        
                        $TITULO
                        </center>
                        
                        </p>
                        <br>
                        <center>
                            <a href='noticias.php?ID=$ID'>
                            
                                <button class='button is-info is-dark'>leer mas</button>
                            </a>

                        </center>
                    </div>
                </div>
                    ";
                }
                ?>


            </div>
        </div>
        </div>
    </section>
    <br><br>
    <script src="https://kit.fontawesome.com/357aae614a.js" crossorigin="anonymous"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>