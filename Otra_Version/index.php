<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- ccs boosttrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8.4.4/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/slider.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>EMA Learning</title>
</head>

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



    <!----------------------------------- CARROUSEL pt-5 pb-4 -->
    <div class="carousel slide pt-5" id="mainSlider" data-bs-ride="carousel">
        <!-- indicadores del carrousel -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner text-light mt-5 mb-4 pb-4">
            <!-- Carroucel 1  p-4 mt-5-->
            <div class="carousel-item active">
                <div class="d-flex">
                    <i class="container-fluid col m-auto text-center">
                        <div class="title fs-1">Alimenta tu mente</div>
                        <div class="sub_title fs-4 p-2">Aprende y
                            desarrolla
                            habilidades unicas</div>
                        <div class="btns">
                            <a type="button" class="btn btn-outline-light btn-lg pe-3 ps-3 border border-light border-3 m-2" href="categorias.php">Ver mas</a>
                            <a type="button" class="btn btn-light pe-3 btn-lg ps-3 border border-light border-3" id="btn2" href="#iniciar">Iniciar</a>
                        </div>
                    </i>
                    <i id="img" class="container-fluid col m-auto text-center">
                        <div class="img"><img src="img/imagenesweb/10610.png" alt="" class=""></div>
                    </i>
                </div>
            </div>
            <!-- Carroucel 2 -->
            <div class="carousel-item">
                <div class="d-flex">
                    <i id="img" class="container-fluid col m-auto text-center">
                        <div class="img"><img src="img/imagenesweb/6263.png" alt="" class=""></div>
                    </i>
                    <i class="container-fluid col m-auto text-center">
                        <div class="title fs-1">Impulsa tus conocimientos</div>
                        <div class="sub_title fs-4 pb-2">Aqui podras encontrar contenido y
                            <br> herramientas para lograrlo
                        </div>
                        <div class="btns">
                            <a type="button" class="btn btn-outline-light btn-lg pe-3 ps-3 border border-light border-3 m-2" href="categorias.php">Ver mas</a>
                            <a type="button" class="btn btn-light pe-3 btn-lg ps-3 border border-light border-3" id="btn2" href="#iniciar">Iniciar</a>
                        </div>
                    </i>
                </div>
            </div>
            <!-- Carroucel 2 -->
            <div class="carousel-item">
                <div class="d-flex">
                    <i class="container-fluid col m-auto text-center">
                        <div class="title fs-1">Ayudanos a mejorar</div>
                        <div class="sub_title fs-4 pb-3">Nos estamos preparando para hacer del
                            <br> mundo un lugar mejor
                        </div>
                        <div class="btns">
                            <a type="button" class="btn btn-outline-light btn-lg pe-3 ps-3 border border-light border-3 m-2" href="categorias.php">Ver mas</a>
                            <a type="button" class="btn btn-light pe-3 btn-lg ps-3 border border-light border-3" id="btn2" href="#iniciar">Iniciar</a>
                        </div>
                    </i>
                    <i id="img" class="container-fluid col m-auto text-center">
                        <div class="img"><img src="img/imagenesweb/11102.png" alt="" class=""></div>
                    </i>
                </div>
            </div>
        </div>
    </div>





    <!-------------------- SLIDER CURSOS --------------------->
    <h4 id="iniciar" class="title-center mt-2 pt-3 text-center">Cursos destacados</h2>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper" style="align-items: center;">
                    <?php
                    require "php/conexion.php";
                    $sql = "SELECT * FROM cursos INNER join destacados on cursos.id=destacados.destacado;";
                    $query = mysqli_query($conn, $sql);

                    foreach ($query as $row) {
                    ?>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="<?php echo $row['imagen'] ?>" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name"><?php echo $row['nombre'] ?></h2>
                                <i class="description"><?php echo $row['descripcion'] ?></i> 
                                <a href="<?php echo $row['nombre'] ?>.php" class="button">View More</a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
 
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>

        </div>


        <!-- Swiper JS -->
        <!--Uncomment this line-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@8.4.4/swiper-bundle.min.js"></script>
        <!-- JavaScript -->
        <!--Uncomment this line-->
        <script src="js/slider.js"></script>
        <!-- CURSOS -->
        <!-- SEPARADORES -->
        <!-- INFORMACION -->
        <!-- CONTACTO -->




        <!------------------------------------------------ FOOTER -->
        <?php
        require "footer.php";
        ?>
</body>

</html>