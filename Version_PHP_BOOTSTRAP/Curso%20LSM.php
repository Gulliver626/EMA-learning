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

  

  <iframe src="https://edu.gcfglobal.org/es/topics/educacion-financiera/" width="100%" height="1080px"></iframe>



  <!------------------------------------------------ FOOTER -->
  <?php
  require "footer.php";
  ?>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->


  <script src="https://www.lsm.cdmx.gob.mx"></script>
  <script>
    //AOS.init();// inicialización básica
    AOS.init({
      easing: 'ease-out-back',
      duration: 1500
    });
  </script>

</body>

</html>