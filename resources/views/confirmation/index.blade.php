<!DOCTYPE html>
<html lang="es-MX">

@include('shared.head')

<body>

    @include('shared.header')


    <main class="main d-flex flex-column h-100 justify-content-between pt-5">
        <section class="section form px-5 py-5 ">
            <div class="container py-5">
                <div class="card mb-3">
                    <div class="card-body py-3">
                        <div class="d-flex flex-column g-0">
                            <div class="col-12 d-flex flex-row justify-content-center">
                                <i class="bi bi-check-circle text-success fs-1 px-3"></i>

                                <span class="text-secondary fs-1">¡Gracias por registrarte!</span>
                            </div>
                            <div class="col-12 d-flex flex-row justify-content-center py-4">
                                <p>
                                    Guarda este QR, ya que es tu acceso para el dia del evento.
                                    Tambien se envió a tu correo electronico.
                                </p>
                            </div>
                            <div class="col-12 d-flex flex-row justify-content-center">
                                <div class="border border-dark border-3 rounded-5 bg-light p-4">
                                    <img width="500" height="500" src="{{ asset('/assets/images/examples/joseorizabaatsomus.png') }}" alt="qrinvitacion">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('shared.footer')
    </main>
</body>

</html>