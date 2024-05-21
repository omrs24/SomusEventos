<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Som.us</title>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
    <link rel="stylesheet" href="/icons/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl position-relative d-flex align-items-center">
                <a class="logo d-flex align-items-center" href="#">
                    <img src="/assets/images/somus-logo-dark.png" alt="Somus" width="100" height="80">
                </a>
                <nav class="navbar navbar-expand-lg bg-transparent mx-auto">
                    <div class="container">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav text-light fs-6">
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-reset" aria-current="page" href="#">Inicio</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-reset" href="#">Acerca de</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-reset" href="#">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>
    <main class="main">
        <section id="section" class="section primary-section">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-5">
                        <div id="mainMessage" class="container d-flex align-items-center">
                            <div class="row">
                                <h3 class="text-light fw-bold">Comida reaseguradores 2024</h3>
                                <span>
                                    <p class="fs-5 fw-bold orange-text-somus">
                                        Te invitamos a asistir en la proxima Comida de Reaseguradores
                                    </p>
                                </span>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-5 align-self-center d-flex justify-content-center">
                        <a href="" class="btn btn-outline-light rounded-4 fs-5 text-bold align-items-center">
                            Registrate aqui
                            <i class="bi bi-arrow-right my-auto"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section><!-- End Primary Section -->

        <section class="section guests-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 d-flex">
                        <div class="item">
                            <img src="/assets/images/invitados/tbs-100.jpg" class="d-block" width="200" alt="...">
                        </div>
                        <div class="item">
                            <img src="/assets/images/invitados/summa-100.jpg" class="d-block" width="200" alt="...">
                        </div>
                        <div class="item">
                            <img src="/assets/images/invitados/somus-100.jpg" class="d-block" width="200" alt="...">
                        </div>
                        <div class="item">
                            <img src="/assets/images/invitados/patria-re-100.jpg" class="d-block" width="200" alt="...">
                        </div>
                        <div class="item">
                            <img src="/assets/images/invitados/bms.jpg" class="d-block" width="200" alt="...">
                        </div>
                        <div class="item">
                            <img src="/assets/images/invitados/asegurador.png" class="d-block" width="200" alt="...">
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section map-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <iframe width="450" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.1278069908947!2d-99.17932383038247!3d19.347004464241728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffe535022e71%3A0x1d13ff74a6ee340d!2sPanzacola%2062%2C%20Santa%20Catarina%2C%20Coyoac%C3%A1n%2C%2004010%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1716316255189!5m2!1ses-419!2smx"></iframe>
                    </div>
                    <div class="col-lg-7 text-end fs-5 align-content-center d-flex flex-column justify-content-between">
                        <h2 class="d-flex justify-content-end">
                            <div class="span justify-content-center mx-3">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            ¿Cómo llegar?
                        </h2>
                        <p>
                            Te esperamos en
                            <a class="text-reset" href="https://www.google.com.mx/maps/place/Panzacola+62,+Santa+Catarina,+Coyoac%C3%A1n,+04010+Ciudad+de+M%C3%A9xico,+CDMX/@19.3470045,-99.1793238,19z/data=!3m1!4b1!4m6!3m5!1s0x85d1ffe535022e71:0x1d13ff74a6ee340d!8m2!3d19.3470032!4d-99.1786801!16s%2Fg%2F11fq6qftcn?entry=ttu">
                                Panzacola 62, Santa Catarina, Coyoacán, 04010 Ciudad de México, CDMX
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer" class="footer gray-bg-somus">

            <div class="container footer-top text-light">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="d-flex align-items-center text-reset">
                            <span class="sitename">Som.us</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Panzacola 62, Santa Catarina</p>
                            <p>Coyoacán, 04010 Ciudad de México, CDMX</p>
                            <p class="mt-3"><strong>Telefono:</strong> <span>+52 55 5339 1100</span></p>
                            <p><strong>Email:</strong> <span>eventos@som.us</span></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Links comunes</h4>
                        <ul class="list-group">
                            <li class="list-group-item ist-group-item-action list-group-item-dark"><a class="text-reset" href="#">Inicio</a></li>
                            <li class="list-group-item ist-group-item-action list-group-item-dark"><a class="text-reset" href="#">Acerca de</a></li>
                            <li class="list-group-item ist-group-item-action list-group-item-dark"><a class="text-reset" href="#">Contactanos</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links d-none">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12 ">
                        <h4>Follow Us</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="d-flex justify-content-center">
                            <a href=""><i class="bi bi-twitter-x text-light"></i></a>
                            <a href=""><i class="bi bi-facebook text-light"></i></a>
                            <a href=""><i class="bi bi-instagram text-light"></i></a>
                            <a href=""><i class="bi bi-linkedin text-light"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container copyright text-center mt-4 text-light">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Somus</strong> <span>All Rights Reserved</span></p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->

                </div>
            </div>

        </footer>
    </main>
</body>

</html>