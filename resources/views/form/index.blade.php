<!DOCTYPE html>
<html lang="en">

@include('shared.head')

<body>

    @include('shared.header')

    <main class="main d-flex flex-column h-100 justify-content-between pt-5 bg-dark" style="--bs-bg-opacity: .1;">

        <section class="section form px-5 py-5 ">

            <div class="container py-5">

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="d-none d-lg-block col-lg-4">
                            <img src="{{ asset('/assets/images/cena2.jpg') }}" class="img-fluid rounded-start h-100" alt="...">
                        </div>
                        <div class="d-md-block d-lg-none col-lg-4">
                            <img src="{{ asset('/assets/images/cena2.jpg') }}" class="img-fluid rounded-top h-100" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body py-3">
                                <div class="row mx-4 mt-2">
                                    <div class="col-12">
                                        <span> Ingresa los datos a continuacion para registrarte al evento.</span>
                                    </div>
                                </div>
                                @csrf <!-- {{ csrf_field() }} -->
                                <div class="row g-2 m-4">

                                    <div class="col-12 py-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="txtNombre" placeholder="Nombre">
                                            <label for="txtNombre" class="form-label"> <i class="bi bi-person"></i> Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-12 py-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="txtApellidos" placeholder="Apellido(s)">
                                            <label for="txtApellidos" class="form-label"><i class="bi bi-person"></i> Apellido(s)</label>

                                        </div>
                                    </div>

                                    <div class="col-12 py-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="txtCorreo" placeholder="Correo">
                                            <label for="txtCorreo" class="form-label"><i class="bi bi-at"></i> Correo</label>
                                        </div>
                                    </div>
                                    <div class="col-12 py-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="txtTelefono" placeholder="Teléfono">
                                            <label for="txtTelefono" class="form-label"><i class="bi bi-phone"></i> Teléfono</label>
                                        </div>
                                    </div>
                                    <div class="col-12 py-2">
                                        <div class="form-floating">
                                            <select id="ddlEmpresa" class="form-control" aria-label="Empresa">
                                                <option value="-1" disabled>Selecciona...</option>
                                            </select>
                                            <label for="ddlEmpresa" class="form-label text-reset"><i class="bi bi-building"></i> Empresa</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="d-grid gap-2 col-sm-4 ms-auto orange-text-somus">
                                        <button type="button" class="btn orange-bg-somus" onclick="sendForm();">¡Registrarse!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-8">

                    </div>
                </div>

            </div>

        </section>

        @include('shared.footer')
    </main>

    <script>
        getGuestCompanies()

        async function sendForm() {

            let data = {
                "_token": "{{ csrf_token() }}",
                "name": document.getElementById("txtNombre").value,
                "lastName": document.getElementById("txtApellidos").value,
                "email": document.getElementById("txtCorreo").value,
                "phone": document.getElementById("txtTelefono").value,
                "guest_companies_id": document.getElementById("ddlEmpresa").value,
            }

            if (!validateForm(data))
                return

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

        async function getGuestCompanies() {
            let fetchData = {
                method: 'GET',
                headers: new Headers({
                    'Content-Type': 'application/json; charset=UTF-8'
                })
            }

            fetch("{{ route('getGuestCompanies') }}", fetchData)
                .then(response => response.json())
                .then(data => {
                    data.guestCompanies.map((company) => {
                        var ddlEmpresas = document.getElementById("ddlEmpresa")
                        var option = document.createElement("option");
                        option.text = company.company_name;
                        option.value = company.id;

                        ddlEmpresas.appendChild(option)

                        //ddlEmpresas.appendChild(`<option value='${company.id}'> ${company.company_name} </option>`)
                    })
                })

        }

        function validateForm(data) {

            var constraints = {
                from: {
                    presence: {
                        allowEmpty: false,
                        message: "^Correo requerido."
                    },
                    email: {
                        message: "^Formato de correo incorrecto."
                    },
                },
                name: {
                    presence: {
                        allowEmpty: false,
                        message: "^Nombre requerido.",
                    },
                },
                lastName: {
                    presence: {
                        allowEmpty: false,
                        message: "^Apellido requerido.",
                    },
                },
                phone: {
                    presence: {
                        allowEmpty: false,
                        message: "^Telefono requerido."
                    },
                    numericality: {
                        onlyInteger: true,
                        greaterThan: 0,
                        message: "^Ingrese solo numeros."
                    },

                }
            }

            var result = validate({
                from: data.email,
                name: data.name,
                lastName: data.lastName,
                phone: data.phone
            }, constraints)

            const objectMap = (obj, fn) =>
                Object.fromEntries(
                    Object.entries(obj).map(
                        ([k, v], i) => [k, fn(v, k, i)]
                    )
                )
            var message
            objectMap(result, errors => {
                message = message + `${errors[0]} \n`
            })

            alert(message)
            /*if (result) {
                // enviar mensaje con cada uno de los errores
                result.map((input, key) => {
                    console.log(input + " " + key)
                })

                return false
            }*/
        }
    </script>

</body>

</html>