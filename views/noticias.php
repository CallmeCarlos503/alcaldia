<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Noticias</title>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../node_modules/bulma/css/bulma.min.css" />
  <link rel="stylesheet" href="../css/fonts.css" />
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="../css/noticias.css" />
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
        <a class="navbar-item" href="servicios.php"> SERVICIOS </a>
        <a class="navbar-item activado" href="#"> NOTICIAS </a>
        <a class="navbar-item" href="Contactanos.php"> CONTACTANOS </a>
      </div>
    </div>
  </nav>
  <?php include_once('../controllers/dbAlcaldia.php')
  ?>
  <?php

  //isset con ID
  if (isset($_REQUEST['ID'])) {
    $ID = $_REQUEST['ID'];
    $query3 = 'SELECT * FROM noticia where ID=' . $ID;
  } else {
    $query3 = 'SELECT * FROM noticia ORDER BY ID ASC LIMIT 1';
  }
  $result3 = $conn->query($query3);
  if (!$result3) {
    die("Error en la consulta: " . $conn->error);
  }
  while ($row = $result3->fetch_assoc()) {
    $TITULO = $row['TITULO'];
    $SUBENCABEZADO = $row['SUBENCABEZADO'];
    $COLUMNA1 = $row['COLUMNA1'];
    $COLUMNA2 = $row['COLUMNA2'];
    $IMAGEN1 = $row['IMAGEN1'];
    $IMAGEN2 = $row['IMAGEN2'];
    $IMAGEN3 = $row['IMAGEN3'];
  ?>

    <section class="noticia-detalles">
      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col-8">
            <img src='<?php echo $IMAGEN1 ?>' alt="" class="imagen-noticia" />

            <h1><?php echo $TITULO ?></h1>
            <br />
            <p>
              <?php
              echo $COLUMNA1;
              ?>
            </p>
          </div>
          <div class="col">
            <p>
              <?php
              echo $COLUMNA2;
              ?>
            </p>
            <br />
            <img class="img-not" src='<?php echo $IMAGEN2 ?>' width="450px" />

            <h2><?php echo $SUBENCABEZADO ?></h2>
            <br />
            <img class="img-not" src='<?php echo $IMAGEN3 ?>' width="450px" />
          </div>
        </div>
      </div>
    </section>
  <?php
  }
  ?>
  <section class="noticias-seleccion">
    <div class="columns noticias">
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
                    <div class='column'>
        <img class='noti-img' src='$IMAGEN1' width=200px height=250px />
        <p>
         $TITULO;
        </p> 
        <br>
        <center>
          <a href='noticias.php?ID=$ID' class='btn btn-dark'> ver mas</a>
        </center>
      </div>
                    
                    ";
      }
      ?>
    </div>
  </section>
  <br />
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/357aae614a.js" crossorigin="anonymous"></script>
</body>

</html>