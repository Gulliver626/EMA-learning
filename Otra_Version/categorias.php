<?php 
 require "php/conexion.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <!-- ===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- ccs boosttrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <!-- AOS library   -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>EMA Learning</title>



</head>
<style>
  .bgc {
    background: rgb(237, 208, 115);
    background: radial-gradient(circle, rgba(237, 208, 115, 1) 0%, rgba(254, 186, 42, 1) 100%);
  }

  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>

<body>
  <!-- RECURSOS -->
  <!-- librerias basicas de java script para bootsrap -->
  <script src="js/popper.min.js"></script>
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>


  <!----------------------- NAVBAR  fixed-top  navbar-toggler-->
  <?php
    require "header.php";
    ?>   


  <div class="bgc col text-white p-4 ">

  </div>



  <main class="bgc">
    <section class="py-3 text-center container">
      <div class="row py-lg-4">
        <div class="col col-md-8 mx-auto">
          <h1 class="fw-light">Cursos</h1>
          <p class="lead text-muted">Aqui encontraras todo tipo de cursos para tu desarrollo
            personal, mejoraras tus cualdidades, aprenderas cosas nuevas... <br>
            <span class="fw-bold">¡Tu capacidad de conocimientos no tiene limites!</span>
          </p>
          <p>
            <a href="cursos.php" class="btn btn-secondary my-2">Ver todos los  cursos</a>
          </p>
        </div>
      </div>
    </section>
    <div class="album py-5 bg-light">
      <div class="container">


        <div class="col">

          <?php
         
          $sql = "SELECT * FROM categorias ";
          $query = mysqli_query($conn, $sql);

          foreach ($query as $row) {
          ?>

            <!-- tenemos 3 tarjetas -->

            <div class="col mt-4">
              <div data-aos="fade-up" class="card shadow-sm">
                <div class="row justify-content-center">
                  <div class="col-auto ">
                    <svg class="bd-placeholder-img card-img" width="300" height="auto" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                      <title>Placeholder</title>
                      <rect width="100%" height="100%" fill="#289672" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php echo $row['categoria'] ?></text>
                    </svg>
                  </div>
                  <div class="col  ">
                    <div class="card-body ">
                      <p class="card-text"><?php echo $row['descripcion'] ?></p>

                      <ul>
                        <?php
                         $tema = $row['categoria'];
                         $sql_ = "SELECT * FROM categorias INNER JOIN cursos on categorias.id = cursos.categoria WHERE categorias.categoria = '".$tema."'";
                         $query2 = mysqli_query($conn, $sql_);
                         foreach ($query2 as $row2) {
                        ?>
                        <li><a href="/<?php echo $row2['nombre'] ?>.php" target="_blank">
                            <span class="text-muted"><?php echo $row2['nombre'] ?></span>
                          </a></li>
                         <?php } ?> 
                      </ul>

                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="cursos/<?php echo $row['nombre'] ?>.php"><input class="btn btn-sm btn-outline-secondary" type="button" value="Ver listado de cursos"></a>

                        </div>
                        <small class="text-muted"><?php echo $row['id'] ?></small>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          <?php
          }
          ?>
        </div>
      </div>
    </div>

  </main>



  <!------------------------------------------------ FOOTER -->
  <?php
    require "footer.php";
    ?> 

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    //AOS.init();// inicialización básica
    AOS.init({
      easing: 'ease-out-back',
      duration: 1500
    });
  </script>

</body>

</html>