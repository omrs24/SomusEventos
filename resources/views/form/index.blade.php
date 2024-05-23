<!DOCTYPE html>
<html lang="en">

@include('shared.head')

<body>

    @include('shared.header')

    <main class="main mt-5">

        <section class="section form p-5">

            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <span> Ingresa los datos a continuacion para registrarte al evento.</span>
                    </div>
                </div>
                <form action="" method="post">

                    <div class="row g-3 my-3">

                        <div class="col-sm-6 py-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="txtNombre" placeholder="Nombre">
                                <label for="txtNombre" class="form-label"> <i class="bi bi-person"></i> Nombre</label>
                            </div>
                        </div>
                        <div class="col-sm-6 py-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="txtApellidos" placeholder="Apellido(s)">
                                <label for="txtApellidos" class="form-label"><i class="bi bi-person"></i> Apellido(s)</label>

                            </div>
                        </div>

                        <div class="col-sm-6 py-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="txtCorreo" placeholder="Correo">
                                <label for="txtCorreo" class="form-label"><i class="bi bi-at"></i> Correo</label>
                            </div>
                        </div>
                        <div class="col-sm-6 py-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="txtTeléfono" placeholder="Teléfono">
                                <label for="txtTeléfono" class="form-label"><i class="bi bi-phone"></i> Teléfono</label>
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-sm-6 py-2">
                            <div class="form-floating">
                                <select id="ddlEmpresa" class="form-control" aria-label="Empresa">
                                    <option value="-1" disabled>Selecciona...</option>
                                </select>
                                <label for="ddlEmpresa" class="form-label">Empresa</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="d-grid gap-2 col-sm-3 ms-auto orange-text-somus">
                            <button type="submit" class="btn orange-bg-somus">¡Registrarse!</button>
                        </div>
                    </div>
                </form>
            </div>

        </section>
    </main>

    @include('shared.footer')

</body>

</html>