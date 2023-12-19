<!DOCTYPE html>
<html lang="en">
<?php include_once('../controllers/dbAlcaldia.php') ?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Area de Servicios</title>
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


    <input class="input" type="text" id="searchInput" placeholder="Buscar Unidad">
    <button class="btn btn-outline-primary" id="'searchButton" style="margin-top: 10px;margin-left:45%;font-size:20px" onclick="busco()">
      buscar
    </button>

  </section>

  <?php
  $query2 = "SELECT * FROM servicios";
  $result2 = $conn->query($query2);
  if (!$result2) {
    die("Error en la consulta: " . $conn->error);
  }
  while ($row = $result2->fetch_assoc()) {
    $ID = $row["ID"];
    $UNIDAD = $row["UNIDAD"];
    $NOMBRE = $row["NOMBRE"];
    $ID_ESTADO = $row["ID_ESTADO"];
    $IMG = $row["IMG"];
    if ($ID_ESTADO == 1) {

  ?>
      <div class="searchResults">
        <section class="servicios">
          <div class="columns">
            <div class="column servicio-imagen">
              <img src="<?php echo $IMG ?>" width="100px" height="120px" alt="">
            </div>
            <div class="column contenido-servicio">
              <h1>

                <?php echo $UNIDAD ?>
              </h1>
              <p>
                <?php echo $NOMBRE ?>
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
      </div>
    <?php
    }
  }
    ?>
    <script>
      //busqueda a tiempo real
      function busco() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("searchResults");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>