<?php session_start();


require 'php/database.php';

if (isset($_SESSION['user_id'])) {
    $records = $conn2->prepare('SELECT * FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
        </path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>
</svg>

<?php require 'cookie.php'; ?>
<main>
    <script src="js/carrito.js"></script>
    <script src="js/tienda.js"></script>

    <?php 
    // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));  
    ?>

    <!-- MENU 1 -->

    <header class="p-2 opacity-75 bg-white fixed-top" id="menu_1">

        <div class="d-flex flex-wrap px-2 align-items-center justify-content-center 
                         col">

            <div class="col-auto">
                <a href="index.php" class="d-flex fw-semibold fs-3 align-items-center mb-0 
                                 text-dark text-decoration-none">
                    <i class="fas fa-brain fs-2 pe-2"></i> EMA Learning
                </a>
            </div>
            <div class="col">
                <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center  fs-5 ">
                    <li><a href="index.php" class="nav-link px-2 py-1 link-dark ">Inicio</a></li>
                    <li><a href="acerca_de.php" class="nav-link px-2 py-1 link-dark ">Acerca de</a></li>
                    <li class="nav-item dropdown link-dark">
                        <a class="nav-link dropdown-toggle px-2 py-1 link-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="cursos.php">Cursos</a>
                            </li>


                            <li>
                                <a class="dropdown-item" href="categorias.php">Categorias</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="acerca_de.php#contacto" class="nav-link px-2 py-1 link-dark ">Contacto</a></li>
                </ul>
            </div>




            <div class="d-flex" style="align-items: center ;">
                <form class="d-flex col-lg-auto   me-2" role="search">
                    <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
                </form>

                <!-- <div class="navbar-item me-2">
                    <div class="buttons">
                        <a href="ver_carrito.php" class="carrito is-success bx bxs-box fs-4 text-black">
                            <span id="conteoCarrito">

                            </span>
                        </a>
                    </div>
                </div>
                <script src="js/refrescar.js"></script>

                <?php if (!empty($user)) : ?>

                    <div class="me-2" style="display: flex; justify-content: center; align-items: center;">
                        <a href="mis_cursos.php" style="display: flex; justify-content: center; align-items: center;">
                            <i class='bx bxs-box fs-4 text-black'></i></a>
                    </div>

                <?php else : ?>
                    <div class="d-flex me-2 d-none" style="display: flex; justify-content: center; align-items: center;">
                        <a href="#" style="display: flex; justify-content: center; align-items: center;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                            <i class='bx bxs-box fs-4 text-black'></i></a>
                    </div>

                <?php endif; ?> -->
            </div>

   
            <?php if (!empty($user)) : ?>

                <div class="dropdown text-end">
                    <span class="d-flex link-dark text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= $user['foto']; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                    </span>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="mis_cursos.php">Mis cursos</a></li>
                        <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="php/logout.php">Cerrar sesion</a></li>
                    </ul>
                </div>
            <?php else : ?>
                <div class="dropdown text-end">
                    <span class="d-flex link-dark text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">

                        <div class="d-flex align-items-center col">
                            <i class='bx bxs-user-circle fs-1' style='color:#233eb7'></i>
                        </div>
                    </span>
                    <ul class="dropdown-menu text-small">

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>


    </header>



    <!-- MENU 2 -->


    <nav class="navbar p-2 opacity-75 bg-white fixed-top  flex-wrap" id="menu_2">
        <div class="container-fluid d-flex">

            <div class="d-flex ">
                <span class="d-flex bx bx-menu fw-semibold fs-3 pe-2 ps-2 align-items-center
                col-lg-4  link-dark text-decoration-none " data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                </span>


            </div>

            <div class="d-flex justify-content-center">

                <a class="d-flex col fw-semibold fs-3 px-2 align-items-center
                col-lg-4  link-dark text-decoration-none " href="index.php">
                    <i class="fas fa-brain fs-2 pe-2"></i> EMA Learning
                </a>
            </div>




            <div class="flex-shrink-0 dropdown d-flex align-items-center">

                <!-- <div class="d-flex align-items-center ">

                    <div class="darkLight-searchBox col-1 ">

                        <div class="searchBox ">
                            <div class="searchToggle col ">
                                <i class='bx bx-x cancel fw-semibold'></i>
                                <i class='bx bx-search search fw-semibold'></i>
                            </div>

                            <div class="search-field">
                                <input type="text" placeholder="Buscar...">
                                <i class="bx bx-search text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (!empty($user)) : ?>

                    <div class="me-2" style="display: flex; justify-content: center; align-items: center;">
                        <a href="mis_cursos.php" style="display: flex; justify-content: center; align-items: center;">
                            <i class='bx bxs-box fs-4 text-black'></i></a>
                    </div>

                <?php else : ?>
                    <div class="d-flex me-2" style="display: flex; justify-content: center; align-items: center;">
                        <a href="#" style="display: flex; justify-content: center; align-items: center;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                            <i class='bx bxs-box fs-4 text-black'></i></a>
                    </div>

                <?php endif; ?> -->

                <?php if (!empty($user)) : ?>
                    <span class="link-dark text-decoration-none d-flex" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= $user['foto']; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                    </span>
                    <ul class="dropdown-menu text-small shadow dropdown-menu-end">
                        <li><a class="dropdown-item" href="mis_cursos.php">Mis cursos</a></li>
                        <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                    </ul>
                <?php else : ?>
                    <span class="link-dark text-decoration-none d-flex" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex align-items-center col">
                            <i class='bx bxs-user-circle fs-1' style='color:#233eb7'></i>
                        </div>
                    </span>
                    <ul class="dropdown-menu text-small shadow dropdown-menu-end">
                        <li><a class="dropdown-item" href="mis_cursos.php">Mis cursos</a></li>
                        <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                    </ul>
                <?php endif; ?>

            </div>



            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <span type="button" class="bx bx-menu fs-3 fw-semibold pe-2 ps-2 " data-bs-dismiss="offcanvas" aria-label="Close"></span>
                </div>
                <div class="offcanvas-body col">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acerca_de.php">Acerca de</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cursos
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="cursos.php">Cursos</a>
                                </li>


                                <li>
                                    <a class="dropdown-item" href="categorias.php">Categorias</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acerca_de.php#contacto">Contacto</a>
                        </li>
                    </ul>




                </div>
            </div>

        </div>

    </nav>


</main>


<!-- Modal -->
<div class="modal fade p-5" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-body text-center">
                Debe iniciar sesión
            </div>
            <div class="modal-footer text-center justify-content-center">

                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
            </div>
        </div>
    </div>
</div>