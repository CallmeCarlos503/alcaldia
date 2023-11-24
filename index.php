<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation" >
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="./assets/logos/logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
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

                <a class="navbar-item" href="./views/servicios.php">
                    SERVICIOS
                </a>
                <a class="navbar-item" href="./views/noticias.php">
                    NOTICIAS
                </a>
                <a class="navbar-item" href="./views/Contactanos.php">
                    CONTACTANOS
                </a>


            </div>


        </div>
    </nav>
    <section class="carussel">

        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col-5">
                    <div class="imagen">
                        <img class="logo-seccion" src="./assets/logos/MicrosoftTeams-image (1).png" alt="">
                    </div>
                    <div class="slogan">
                        <p>
                            ¡Estamos listos para atenderte!
                        </p>
                        <button type="button" class="btn btn-outline-light boton-slogan">Contactanos</button>
                    </div>
                </div>
                <div class="col">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner" style="margin-left: 2%;">
                          <div class="carousel-item active"  data-bs-interval="10000">
                            <img src="https://live.staticflickr.com/5070/5603102439_ea37ff8d28_b.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item"  data-bs-interval="20000">
                            <img src="https://live.staticflickr.com/5070/5603102439_ea37ff8d28_b.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://live.staticflickr.com/5070/5603102439_ea37ff8d28_b.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>

            </div>
        </div>
    </section>
    <section class="carussel" style="background-color: white;">
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col-3 seccion-izquierdo">
                    <img src="./assets/logos/MicrosoftTeams-image (2).png" alt="" class="alcalde">
                </div>
                <div class="col">
                    <p class="descripcion">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil magnam aspernatur temporibus
                        cupiditate, recusandae repellendus fugiat in corporis voluptatibus eveniet maxime, iure soluta
                        odit itaque? Inventore ratione dolore id sed!
                    </p>
                    <footer class="mini-footer">
                        <div class="redes-alcalde">
                            <div class="container text-center">
                                <i class="fa-brands fa-facebook-f iconos-alcalde"></i>
                                <i class="fa-brands fa-square-instagram iconos-alcalde"></i>
                                <i class="fa-brands fa-square-x-twitter iconos-alcalde"></i>
                                <div class="row align-items-start">

                                    <div class="col-4 iconos">

                                    </div>
                                    <div class="col">
                                        <p class="nombre-alcalde">
                                            [Nombre alcalde]
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
    <section class="seccion-noticias">
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <div class="imagen-noticia">
                        <img src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg"
                            alt="">
                    </div>
                    <div class="contenido-noticias">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur harum soluta sit ipsum
                            tenesakpfvmkoasvnojesdnvjolwenvjolrebnrjeownbjoernobvne
                        </p>
                        <br>
                        <center>
                            <button class="button is-info is-dark">leer mas</button>
                        </center>
                    </div>
                </div>
                <div class="col">
                    <div class="imagen-noticia">
                        <img src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg"
                            alt="">

                    </div>
                    <div class="contenido-noticias">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur harum soluta sit ipsum
                            tenesakpfvmkoasvnojesdnvjolwenvjolrebnrjeownbjoernobvne
                        </p>
                        <br>
                        <center>
                            <button class="button is-info is-dark">leer mas</button>
                        </center>
                    </div>
                </div>
                <div class="col">
                    <div class="imagen-noticia">
                        <img src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg"
                            alt="">
                    </div>
                    <div class="contenido-noticias">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur harum soluta sit ipsum
                            tenesakpfvmkoasvnojesdnvjolwenvjolrebnrjeownbjoernobvne
                        </p>
                        
                        <br>
                        <center>
                            <button class="button is-info is-dark">leer mas</button>
                        </center>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <script src="https://kit.fontawesome.com/357aae614a.js" crossorigin="anonymous"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>