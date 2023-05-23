<?php error_reporting(E_ALL ^ E_NOTICE); ?>
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/cookie.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8.4.4/swiper-bundle.min.css">

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
    require 'php/database.php';


    $message = '';

    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];



    if ($pass == $cpass) {
        echo $cpass;
        if (!empty($_POST['email']) && !empty($_POST['nombre'])  && !empty($_POST['password'])) {
            $sql = "INSERT INTO usuarios (email, nombre, password) VALUES (:email, :nombre, :password)";
            $stmt = $conn2->prepare($sql);
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->bindParam(':nombre', $_POST['nombre']);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $password);

            if ($stmt->execute()) {
                $message = 'Successfully created new user';
                $color = 'success';
            } else {
                $message = 'Sorry there must have been an issue creating your account';
                $color = 'danger';
            }
        }
    } else {
        $message = ' Las contraseñas no coinciden ';
        $color = 'danger';
    }



    ?>


    <?php
    require "header.php";
    ?>

    <!-- MARGIN TOP -->
    <div class="col bg-white text text-white p-3 ">
        a
    </div>



    <?php if (!empty($message)) : ?>
        <p class="text-black text-center bg-<?= $color ?>"> <?= $message ?></p>
    <?php endif; ?>

    <!-- CUADRO DE LOG AND REG -->

    <div class="container w-75 bg-white bg-gradient my-4 rounded shadow">
        <div class="row align-items-lg-stretch">


            <input type="checkbox" id="flip" class="oculto" />


            <div id="singin-in" class="col m-2">
                <div class="text-end">
                    <i class="fas fa-brain fs-3" style="color: #010a11;"></i>
                </div>


                <!-- SINGIN -->
                <form action="#" method="POST">

                    <div class="mb-2">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="email" placeholder="correo@email.com" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Nombre de usuario</label>
                        <input type="text" class="form-control" name="nombre" placeholder="SinEspacios" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Constraseña</label>
                        <input type="password" class="form-control" name="password" required>

                    </div class="mb-2 form-check">

                    <div class="mb-2">
                        <label for="cpassword" class="form-label">Confirmación de contraseña</label>
                        <input type="password" class="form-control" name="cpassword" required>


                    </div class="mb-2 form-check">
                    <div>
                        <input type="checkbox" name="connected" class="mb-2 form-check-input" required>
                        <a>No soy un robot</a>
                    </div>

                    <div class="mb-2 d-grid">
                        <input type="submit" class="btn btn-primary" value="Registrarse">
                    </div>

                    <div class="my-3 text-center col d-flex">
                        <div class="col">Ya tienes una cuenta? <label id="flip-label" for="flip">Inicia sesión</label>
                        </div>

                    </div>

                    <!-- LOGIN CON REDES SOCIALES -->

                    <div class="container w-100 my-3">
                        <div class="row text-center">
                            <div class="col-12">Iniciar Sesión</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-primary w-100 my-1">
                                    <div class="row justify-content-center aling-items-center">
                                        <div class="col-2 me-auto d-none d-sm-block">
                                            <img src="https://cdn-icons-png.flaticon.com/512/3670/3670144.png" width="30" alt="">
                                        </div>
                                        <div class="col text-center">Facebook</div>
                                    </div>
                                </button>
                            </div>
                            <div class="col justify-content-center aling-items-center">
                                <button class="btn btn-outline-danger w-100 my-1">
                                    <div class="row justify-content-center aling-items-center align-content-center">
                                        <div class="col-2 me-auto d-none d-sm-block">
                                            <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" width="30" alt="">
                                        </div>
                                        <div class="col text-center">Google</div>
                                    </div>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>


            <div id="imglog" class="imagenes col bg text-center  col-md-5 col-lg-5 col-xl-6 rounded">
                <div class="col mt-5">
                    <!--  d-none d-xl-block -->
                    <img class="col h-auto mt-5" src="img/login/5098292.png" width="80%" alt="">
                </div>
            </div>

            <div id="imgsig" class="imagenes col bg2 text-center  col-md-5 col-lg-5 col-xl-6 rounded">
                <div class="col mt-5">
                    <!--  d-none d-xl-block -->
                    <img class="col h-auto mt-5" src="img/login/5208993.png" width="80%" alt="">
                </div>
            </div>





            <div id="login-in" class="col m-2">
                <div class="text-end">
                    <i class="fas fa-brain fs-3" style="color: #010a11;"></i>
                </div>

                <h2 class="fw-bold-text-center pb-2">Bienvenido</h2>

                <!-- LOGIN -->

                <form action="login.php" method="GET">
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="email" placeholder="correo@email.com" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Constraseña</label>
                        <input type="password" class="form-control" name="password"  required>
                    </div class="mb-4 form-check">
                    <div>
                        <input type="checkbox" name="connected" class="form-check-input" >
                        <label for="connected" class="mb-2 form-check-label">Mantener conectado</label>
                    </div>

                    <div class="d-grid">
                        <input type="submit" value="Iniciar Sesión" class="btn btn-primary">
                    </div>

                    <div class="my-2 text-center col d-flex">
                        <div class="col">No tienes cuenta? <label id="flip-label" for="flip">Regístrate</label> </div>
                        <div class="col"><a href="#log-form">Olvide mi contraseña</a></div>
                    </div>

                    <!-- LOGIN CON REDES SOCIALES -->

                    <div class="container w-100 my-2">
                        <div class="row text-center mb-2">
                            <div class="col-12">Iniciar Sesión</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-primary w-100 my-1">
                                    <div class="row justify-content-center aling-items-center">
                                        <div class="col-2 me-auto d-none d-sm-block">
                                            <img src="https://cdn-icons-png.flaticon.com/512/3670/3670144.png" width="30" alt="">
                                        </div>
                                        <div class="col text-center">Facebook</div>
                                    </div>
                                </button>
                            </div>
                            <div class="col justify-content-center aling-items-center">
                                <button class="btn btn-outline-danger w-100 my-1">
                                    <div class="row justify-content-center aling-items-center">
                                        <div class="col-2 me-auto d-none d-sm-block">
                                            <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" width="30" alt="">
                                        </div>
                                        <div class="col text-center">Google</div>
                                    </div>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>

    <?php

    session_start();
   

    if (isset($_SESSION['user_id'])) {
        header('Location: /proyectos/proyecto');
    }
    require 'php/database.php';

    if (!empty($_GET['email']) && !empty($_GET['password'])) {
        $records = $conn2->prepare('SELECT * FROM usuarios WHERE email = :email');
        $records->bindParam(':email', $_GET['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (count($results) > 0 && password_verify($_GET['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            header("Location: /proyectos/proyecto");
        } else {
            $message = 'Sorry, those credentials do not match';
        }
    }
    ?>


    <!------------------------------------------------ FOOTER -->
    <?php
    require "footer.php";
    ?>

</body>

</html>