<header>
    <div id="header" class="header d-flex align-items-center fixed-top bg-dark" style="--bs-bg-opacity: .8;">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a class="logo d-flex align-items-center my-3" href="{{ url('/') }}">
                <img src="{{ asset('/assets/images/somus_logo-bco.png') }}" alt="Somus" width="100" height="43">
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