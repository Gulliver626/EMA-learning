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

  .bg{
    background: linear-gradient(245deg, #a6dbfa, #7ec7f1, #4e7897);
  }
  .container-skill {
    max-width: 500px;
    width: 100%;
    background: #fff;
  }

  .container-skill .skill-box {
    width: 100%;
    margin: 15px 0;
  }

  .skill-box .title {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #333;
  }

  .skill-box .skill-bar {
    height: 8px;
    width: 100%;
    border-radius: 6px;
    margin-top: 6px;
    background: rgba(0, 0, 0, 0.1);
  }

  .skill-bar .skill-per {
    position: relative;
    display: block;
    height: 100%;
    width: 90%;
    border-radius: 6px;
    background: #4070f4;
    animation: progress 0.4s ease-in-out forwards;
    opacity: 0;
  }

  .skill-per.css {
    width: 70%;
    animation-delay: 0.1s;
  }

  .skill-per.javascript {
    width: 50%;
    animation-delay: 0.2s;
  }

  .skill-per.nodejs {
    width: 30%;
    animation-delay: 0.3s;
  }

  @keyframes progress {
    0% {
      width: 0;
      opacity: 1;
    }

    100% {
      opacity: 1;
    }
  }

  .skill-per .tooltip {
    position: absolute;
    right: -14px;
    top: -28px;
    font-size: 9px;
    font-weight: 500;
    color: #fff;
    padding: 2px 6px;
    border-radius: 3px;
    background: #4070f4;
    z-index: 1;
  }

  .tooltip::before {
    content: '';
    position: absolute;
    left: 50%;
    bottom: -2px;
    height: 10px;
    width: 10px;
    z-index: -1;
    background-color: #4070f4;
    transform: translateX(-50%) rotate(45deg);

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



  <div class="col bg-white p-4 ">
    space
  </div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Avance del curso</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- avances -->
          <div class="show-skill-bar">
            <div class="container-skill">
              <div class="skill-box">
                <span class="title">HTML</span>

                <div class="skill-bar">
                  <span class="skill-per html">
                    <span class="tooltip">90%</span>
                  </span>
                </div>
              </div>

              <div class="skill-box">
                <span class="title">CSS</span>

                <div class="skill-bar">
                  <span class="skill-per css">
                    <span class="tooltip">70%</span>
                  </span>
                </div>
              </div>
              <div class="skill-box">
                <span class="title">JavaScript</span>

                <div class="skill-bar">
                  <span class="skill-per javascript">
                    <span class="tooltip">50%</span>
                  </span>
                </div>
              </div>
              <div class="skill-box">
                <span class="title">NodeJS</span>

                <div class="skill-bar">
                  <span class="skill-per nodejs">
                    <span class="tooltip">30%</span>
                  </span>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <main class="bg">
    <section class="py-4 text-center container">
      <div class="row py-lg-54">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Mis cursos</h1>
        </div>
      </div>
    </section>
    <div class="album py-4 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <!-- tenemos 3 tarjetas -->
          <div class="col">
            <div data-aos="zoom-in-left" class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="80" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#007580" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail 7</text>
              </svg>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Avance</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div data-aos="zoom-in-up" class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="80" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#282846" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail 8</text>
              </svg>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div data-aos="flip-left" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
              data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"
              class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="80" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#fed049" /><text x="50%" y="50%" fill="#f181818"
                  dy=".3em">Thumbnail 9</text>
              </svg>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

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