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


    <div class="col text-white p-3 ">
        <br>
    </div>

    <div class="">
        <div class="col">
            <h2>Curos agregados a favoritos</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Quitar de favoritos</th>
                    </tr>
                </thead>
                <tbody id="cuerpoTabla"></tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="text-end">Total</td>
                        <td colspan="2" class="text-left" id="celdaTotal"></td>
                    </tr>
                </tfoot>
            </table>
           
        </div>
    </div>

    <script src="js/ver_carrito.js"></script>

    <!------------------------------------------------ FOOTER -->
    <?php
    require "footer.php";
    ?>

</body>

</html>