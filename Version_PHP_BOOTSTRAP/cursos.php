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
  <link rel="stylesheet" href="css/cookie.css">

  <!-- AOS library   -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>EMA Learning</title>



</head>
<style>
  .bgc {

    background: rgb(0, 157, 113);
    background: radial-gradient(circle, rgba(0, 157, 113, 1) 0%, rgba(92, 205, 167, 1) 100%);
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
            <a href="categorias.php" class="btn btn-secondary my-2">Ver por categorias</a>

          </p>
        </div>
      </div>
    </section>
    <div class="album py-5 bg-light">
      <div class="container">


        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <?php
          require "php/conexion.php";
          $sql = "SELECT * FROM `cursos` INNER join categorias on cursos.categoria=categorias.id;";
          $query = mysqli_query($conn, $sql);

          foreach ($query as $row) {
          ?>





            <!-- tenemos 3 tarjetas -->
            <div class="col">
              <div data-aos="zoom-in-left" class="card shadow-sm h-100">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="80" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="<?php echo $row['color'] ?>" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">
                    <?php echo $row['nombre'] ?>
                  </text>
                </svg>
                <div class="card-body">
                  <p class="card-text">
                    <span class="fw-bold">
                      <?php echo $row['categoria'] ?>
                    </span>
                    <br>
                    <?php echo $row['descripcion'] ?>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php echo $row['nombre'] ?>.php"><input class="btn btn-sm btn-outline-success" type="button" value="Ver curso"></a>

                      <?php
                      // require 'php/database.php';

                      // $message = "";

                      // if (!empty($_POST['nombre']) && !empty($_POST['descripcion'])  && !empty($_POST['tiempo'])) {
                      //   $sql = "INSERT INTO favoritos (nomnbre, descripcion, tiempo) VALUES (:nomnbre, :descripcion, :tiempo)";
                      //   $stmt = $conn2->prepare($sql);
                      //   $stmt->bindParam(':nombre', $_POST['nombre']);
                      //   $stmt->bindParam(':descripcion', $_POST['descripcion']);
                      //   $stmt->bindParam(':tiempo', $_POST['tiempo']);
                      //   if ($stmt->execute()) {
                      //     $message = 'Successfully';
                      //     $color = 'success';
                      //   } else {
                      //     $message = error_log("a");
                      //     $color = 'danger';
                      //   }
                      // }

                      ?>
                      <?php
                      $query = "INSERT into favoritos VALUES('esto',' es una ','prueba')";
                      $result = connection_status($query);
                      ?>
                      <button type="submit" class="btn btn-sm btn-outline-danger" onclick="insertar();"><i class="fas fa-heart"></i></button>
                      <script>
                        function insertar() {
                          form1.flag.value == 1;
                          form1.action = "../misma_pagina.php";
                          form1.submit();
                        }
                      </script>
                      <!-- <form method="POST">
                        <input type="text" class="form-control d-none" name="nombre" value="php echo $row['nombre'] ?>">
                        <input type="text" class="form-control d-none" name="descripcion" value="php echo $row['descripcion'] ?>">
                        <input type="text" class="form-control d-none" name="tiempo" value="php echo $row['duracion'] ?>">
                        <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-heart"></i></button>
                      </form> -->

                    </div>
                    <small class="text-muted">
                      <?php echo $row['duracion'] ?> hrs
                    </small>
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