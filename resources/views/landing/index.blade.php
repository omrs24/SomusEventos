<!DOCTYPE html>
<html lang="es-MX">

@include('shared.head')

<body>

    @include('shared.header')


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
                        <a href="{{ route('registro') }}" class="btn btn-outline-light rounded-4 fs-5 text-bold align-items-center">
                            Registrate aqui
                            <i class="bi bi-arrow-right my-auto"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section><!-- End Primary Section -->

        <section class="section guests-section d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 d-flex">
                        <div class="item">
                            <img src="{{ asset('/assets/images/invitados/tbs-100.jpg') }}" class="d-block" width="200" alt="...">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/assets/images/invitados/summa-100.jpg') }}" class="d-block" width="200" alt="...">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/assets/images/invitados/somus-100.jpg') }}" class="d-block" width="200" alt="...">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/assets/images/invitados/patria-re-100.jpg') }}" class="d-block" width="200" alt="...">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/assets/images/invitados/bms.jpg') }}" class="d-block" width="200" alt="...">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/assets/images/invitados/asegurador.png') }}" class="d-block" width="200" alt="...">
                        </div>
                    </div>
                </div><!-- Pedir imagenes sin fondo y blancas -->
            </div>

        </section>

        <section class="section map-section">
            <div class="container">
                <div class="row">
                    <div class="order-lg-2 col-lg-7 text-end fs-5 align-content-center d-flex flex-column justify-content-between">
                        <h2 class="d-flex justify-content-end">
                            <div class="span justify-content-center mx-3 text-danger">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            ¿Cómo llegar?
                        </h2>
                        <p>
                            Te esperamos en
                            <a class="text-reset" target="_blank" href="https://www.google.com.mx/maps/place/Panzacola+62,+Santa+Catarina,+Coyoac%C3%A1n,+04010+Ciudad+de+M%C3%A9xico,+CDMX/@19.3470045,-99.1793238,19z/data=!3m1!4b1!4m6!3m5!1s0x85d1ffe535022e71:0x1d13ff74a6ee340d!8m2!3d19.3470032!4d-99.1786801!16s%2Fg%2F11fq6qftcn?entry=ttu">
                                Panzacola 62, Santa Catarina, Coyoacán, 04010 Ciudad de México, CDMX
                            </a>
                        </p>
                    </div>
                    <div class="order-lg-1 col-lg-5">
                        <iframe height="250" class="w-100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.1278069908947!2d-99.17932383038247!3d19.347004464241728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffe535022e71%3A0x1d13ff74a6ee340d!2sPanzacola%2062%2C%20Santa%20Catarina%2C%20Coyoac%C3%A1n%2C%2004010%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1716316255189!5m2!1ses-419!2smx"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>


    @include('shared.footer')
</body>

</html>