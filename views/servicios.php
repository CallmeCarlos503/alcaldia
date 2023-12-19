<!DOCTYPE html>
<html lang="en">
<?php include_once('../controllers/dbAlcaldia.php')?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../node_modules/bulma/css/bulma.min.css" />
  <link rel="stylesheet" href="../css/fonts.css" />
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="../css/servicios.css" />
</head>

<body>
  <nav class="navbar" role="navigation" aria-label="main navigation" style="background-color: #183859">
    <div class="navbar-brand">

      <img src="../assets/logos/logo.png" width="112" height="28" />


      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="index.php"> HOME </a>
        <a class="navbar-item" href=""> HISTORIA </a>
        <a class="navbar-item activado"> SERVICIOS </a>
        <a class="navbar-item" href="noticias.php"> NOTICIAS </a>
        <a class="navbar-item" href="Contactanos.php"> CONTACTANOS </a>
      </div>
    </div>
  </nav>
  <section class="search">


    <input class="input" type="text" placeholder="Buscar Unidad">
    <a href="" class="btn btn-outline-primary">
      buscar
    </a>

  </section>
  <section class="servicios">
    <div class="columns">
      <div class="column servicio-imagen">
        <img src="../assets/logos/MicrosoftTeams-image (2).png" alt="">
      </div>
      <div class="column contenido-servicio">
        <h1>
          Unidad de Registro familiar
        </h1>
        <p>
          Partida de nacimiento
        </p>
        <div class="botones">

          <a href="">
            llamar
          </a>
          <button onclick="myFunction()">
            Llenar Formulario
          </button>
        </div>
      </div>

    </div>
  </section>
 <?php
 
 ?>
  <script>
    
    function myFunction() {
      Swal.fire({
        title: '¿Quieres llenar el formulario?',
        text: '¡No te preocupes!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, llenar!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Llenado!',
            'Tu formulario ha sido llenado correctamente',
          'success'
        

          )
        }
      })
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>