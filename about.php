<?php

    include 'db/conections.php'

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Daviel Sanchez">
    <link rel="shortcut icon" href="Favicon.ico">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>BookStore | Autores</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index.php">BookStore<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li><a class="nav-link" href="index.php">Inicio</a></li>
                    <li><a class="nav-link" href="shop.php">Libros</a></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Autores</a>
                    </li>
                    <li><a class="nav-link" href="contact.php">Contactanos</a></li>

                    <!-- <li><a class="nav-link" href="about.php">Autores</a></li>
                    <li><a class="nav-link" href="blog.php">Blog</a></li> -->
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Autores de nuestro catalogo</h1>
                        <p class="mb-4">En nuestro espacio dedicado a los autores, te invitamos a descubrir las mentes creativas detrás de tus libros favoritos. Sumérgete en un entorno inspirador donde podrás explorar las historias, motivaciones y trayectorias de los
                            escritores que dan vida a las páginas que tanto amas.</p>
                        <p><a href="" class="btn btn-secondary me-2">Ver libros</a><a href="#" class="btn btn-white-outline">Explorar autores</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/Libro_portada.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


    <!-- Start Team Section -->
    <div class="untree_co-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center">
                    <h2 class="section-title">Nuestros autores</h2>
                </div>
            </div>

            <div class="row">

                <?php
                    $Library = new Library;
                    $Writters = $Library->getWritters();
                    foreach($Writters as $Writter){
                        print(
                            '<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0 mb-3">
                                <img src="images/avatar.jpg" class="img-fluid mb-5">
                                <h3><a href="#"><span class="">'. $Writter['nombre']. ' ' . $Writter['apellido'].'</a></h3>
                                <span class="d-block position mb-5">Ciudad, Pais</span>
                            </div>'
                        );
                    }
                ?> 




            </div>
        </div>
    </div>
    <!-- End Team Section -->



    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">

            <div class="sofa-img sm-mb-5">
                <img src="images/page_logo.png" alt="Image" class="img-fluid">
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">BookStore<span>.</span></a></div>
                    <p class="mb-4">Bienvenido a BookStore, tu destino literario favorito. En nuestra librería en línea, te sumergirás en un mundo de conocimiento, imaginación y descubrimiento. Con una cuidadosa selección de libros que abarcan desde los clásicos más
                        atemporales hasta las últimas novedades literarias, ofrecemos una experiencia de lectura única para todos los amantes de los libros.</p>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="./index.php">Inicio</a></li>
                                <li><a href="./shop.php">Libros</a></li>
                                <li><a href="#">Autores</a></li>
                                <li><a href="./contact.php">Contactanos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Sitio web desarrollado por <a href="https://github.com/DavielSanchez">Daviel Sanchez</a>, Diseñado por <a href="https://untree.co">Untree.co</a>
                            <!-- License information: https://untree.co/license/ -->
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4">Terms &amp; Conditions</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>