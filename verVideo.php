<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Peliculas
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/video.css">
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="./index.php" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>Pe<span class="main-color">lic</span>ulas
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="./index.php">Inicio</a></li>
                    <li><a href="./Peliculas.php">Peliculas</a></li>
                    <li><a href="./series.php">Series</a></li>
                    <li><a href="./acercaDe.php">Acerca de</a></li>
                    <li>
                        <a href="./main.php" class="btn btn-hover">
                            <span>Iniciar sesion</span>
                        </a>
                    </li>
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->

    <div id="playercontainer">
        <video id="player" src="#"></video>
        <div id="controls">
            <div id="progressholder">
                <div id="buffered"></div>
                <div id="progress"></div>
                <div id="progressorb"></div>
            </div>
            <div id="playpause" class="fa fa-play"></div>
            <div id="progresstime">loading...</div>
            <div id="fullscreen" class="fa fa-arrows-alt"></div>
        </div>
    </div>

    <!-- FOOTER SECTION -->
    <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="content">
                        <a href="#" class="logo">
                            <i class='bx bx-movie-play bx-tada main-color'></i>Pe<span class="main-color">lic</span>ulas
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut veniam ex quos hic id nobis
                            beatae earum sapiente! Quod ipsa exercitationem officiis non error illum minima iusto et.
                            Dolores, quibusdam?
                        </p>
                    </div>
                </div>
                <div class="col-8 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Help</b></p>
                                <ul class="footer-menu">
                                    <li><a href="/acercaDe.php">ACERCA DE NOSOTROS</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="social-list">
                            <a href="#" class="social-item">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

</body>

</html>