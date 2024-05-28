<!DOCTYPE html>
<html lang="en">

@include('shared.head')

<body>

    @include('shared.header')

    <main class="main d-flex flex-column h-100 justify-content-between pt-5">

        <section class="section form px-5 py-5">

            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <span> Ingresa los datos a continuacion para registrarte al evento.</span>
                    </div>
                </div>
                @csrf <!-- {{ csrf_field() }} -->
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
                            <input type="text" class="form-control" id="txtTelefono" placeholder="Teléfono">
                            <label for="txtTelefono" class="form-label"><i class="bi bi-phone"></i> Teléfono</label>
                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-sm-6 py-2">
                        <div class="form-floating">
                            <select id="ddlEmpresa" class="form-control" aria-label="Empresa">
                                <option value="-1" disabled>Selecciona...</option>
                            </select>
                            <label for="ddlEmpresa" class="form-label"><i class="bi bi-building"></i> Empresa</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="d-grid gap-2 col-sm-3 ms-auto orange-text-somus">
                        <button type="button" class="btn orange-bg-somus" onclick="sendForm();">¡Registrarse!</button>
                    </div>
                </div>
            </div>

        </section>

        @include('shared.footer')
    </main>

    <script>
        async function sendForm() {

            let data = {
                "_token": "{{ csrf_token() }}",
                "name": document.getElementById("txtNombre").value,
                "lastName": document.getElementById("txtApellidos").value,
                "email": document.getElementById("txtCorreo").value,
                "phone": document.getElementById("txtTelefono").value,
            }

            let fetchData = {
                method: 'POST',
                headers: new Headers({
                    'Content-Type': 'application/json; charset=UTF-8'
                }),
                body: JSON.stringify(data),
            }

            fetch("{{ route('saveData') }}", fetchData)
                .then((response) => {
                    console.log(response)
                }).catch((error) => {
                    console.log(`error ${error}`)
                })
        }
    </script>

</body>

</html>