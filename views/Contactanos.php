<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contactanos</title>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../node_modules/bulma/css/bulma.min.css" />
  <link rel="stylesheet" href="../css/fonts.css" />
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="../css/contactanos.css">
</head>

<body>
  <?php include_once('../controllers/dbAlcaldia.php')?>
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
        <a class="navbar-item"> HISTORIA </a>
        <a class="navbar-item" href="servicios.php"> SERVICIOS </a>
        <a class="navbar-item" href="noticias.php"> NOTICIAS </a>
        <a class="navbar-item activado"> CONTACTANOS </a>
      </div>
    </div>
  </nav>
  <section class="guia">
    <div class="columns">
      <div class="column relleno">
        <img src="../assets/logos/pexels-photo-105003.webp" alt="">
      </div>
      <div class="column contenido-telefono">
        <div class="texto-telefono">
          <i class="fa-solid fa-phone" style="color: #f2f2f2;"></i>
          <h1>
            GUIA TELEFONICA DE LA
          </h1>
          <h3>
            Alcaldia de Panchimalco
          </h3>
          <p>
            Llama al
          </p>
          <h2>
            2289-8300
          </h2>

        </div>

      </div>
  </section>
  <section class="guia" style="background-color: white;">
    <div class="tabla">
      <center>
        <h3>
          LUEGO DIGITE LA EXTENSION DE LA UNIDAD A LA QUE DESEAS COMUNICARTE!
        </h3>
      </center>
      <table class="table is-bordered tabla-telefono" style="margin-top: 5%;">
        <tr>
          <td class="distritos">
            Distritos
          </td>
          <td class="secciones">
            Nombre
          </td>
          <td class="extensiones">
            extension
          </td>
        </tr>
        <?php
  $query2 = "SELECT * FROM CONTACTOS";
  $result2 = $conn->query($query2);
  if (!$result2) {
    die("Error en la consulta: " . $conn->error);
  }
  while ($row = $result2->fetch_assoc()) {
    $NOMBRE=$row["NOMBRE"];
    $EXTENSION=$row["EXTENSION"];
    $DISTRITOS=$row["DISTRITOS"];
    $ID_ESTADO=$row["ID_ESTADO"];
    if ($ID_ESTADO == 1) {

  ?>
  <tr>
    <td class="distritos">
      <?php echo $DISTRITOS?>
    </td>
    <td class="secciones">
      <?php echo $NOMBRE?>
    </td>
    <td class="extensiones">
      <?php echo $EXTENSION?>
    </td>
  </tr>
  <?php
    }
  }
  ?>
      </table>
    </div>
  </section>


  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/357aae614a.js" crossorigin="anonymous"></script>
</body>

</html>