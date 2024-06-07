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
                                <div id="error-container" class="error-container animate__animated d-none">
                                    <div class="bg-danger-subtle border rounded border-danger text-danger p-4 my-auto">

                                        <span id="error-message" class="error-message"> </span>
                                    </div>
                                </div>
                                <div id="success-container" class="success-container animate__animated d-none">
                                    <div class="bg-success-subtle border rounded border-success text-success p-4 my-auto">
                                        <i class="bi bi-check-circle"></i>
                                        <span id="success-message" class="success-message"> </span>
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
                                        <div class="border">
                                            <label for="ddlEmpresa" class="form-label  fs-6 ps-2 pt-2 ms-1"><i class="bi bi-building"></i> Empresa</label>
                                            <select id="ddlEmpresa" class="form-control w-100" aria-label="Empresa">
                                                <option value="-1" disabled>Selecciona...</option>
                                            </select>

                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="d-grid gap-2 col-sm-4 ms-auto orange-text-somus me-4">
                                        <button type="button" class="btn orange-bg-somus fw-bold" style="--bs-btn-color: #fff; !important" onclick="sendForm();">¡Registrarse!</button>
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
        var timeout

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

                    if (!response.ok) {
                        response.json().then(data => {
                            var message = `<i class="bi bi-x-circle"></i> ${data.errorMsg.errorInfo} `
                            showErrorMessage(message)
                        })
                        return false
                    }

                    showSuccessMessage("Registrado Correctamente")

                }).catch(error => {
                    console.log(error);
                })
            /*.then(data => {
                console.log(data)
            })*/
        }

        async function getGuestCompanies() {

            var ddl = NiceSelect.bind(document.getElementById("ddlEmpresa"), {
                searchable: true,
                placeholder: "Selecciona...",
            })
            console.log(ddl)

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
                        ddl.update()
                        //ddlEmpresas.appendChild(`<option value='${company.id}'> ${company.company_name} </option>`)
                        document.getElementsByClassName("nice-select-dropdown")[0].classList.add("w-100")
                    })
                })

            //Para ajustar vista en views pequeñas
            //ddl.dropdown.classList.add("w-100")
            //Para ajustar vista en views pequeñas

        }

        function validateForm(data) {

            var constraints = {
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
                from: {
                    presence: {
                        allowEmpty: false,
                        message: "^Correo requerido."
                    },
                    email: {
                        message: "^Formato de correo incorrecto."
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

            if (result) {
                // enviar mensaje con cada uno de los errores
                const objectMap = (obj, fn) =>
                    Object.fromEntries(
                        Object.entries(obj).map(
                            ([k, v], i) => [k, fn(v, k, i)]
                        )
                    )

                var message = "";
                objectMap(result, errors => {
                    if (errors[0])
                        message = message + `<i class="bi bi-x-circle"></i> ${String(errors[0])} <br>`
                })

                showErrorMessage(message)

                return false
            }
            return true
        }

        function showErrorMessage(message) {
            var errorContainer = document.getElementById("error-container")
            var errorMessage = document.getElementById("error-message")

            // se puede simplificar esto
            errorContainer.classList.add("d-none")
            errorMessage.innerHTML = ""
            window.clearTimeout(timeout)

            errorContainer.classList.remove("d-none")
            errorContainer.classList.remove("animate__fadeOutRight")
            errorContainer.classList.add("animate__fadeInRight")
            errorMessage.innerHTML = message

            timeout = window.setTimeout(() => {
                errorContainer.classList.remove("animate__fadeInRight")
                errorContainer.classList.add("animate__fadeOutRight")
            }, 5500);
        }

        function showSuccessMessage(message) {
            var successContainer = document.getElementById("success-container")
            var successMessage = document.getElementById("success-message")

            // se puede simplificar esto
            successContainer.classList.add("d-none")
            successMessage.innerHTML = ""
            window.clearTimeout(timeout)

            successContainer.classList.remove("d-none")
            successContainer.classList.remove("animate__fadeOutRight")
            successContainer.classList.add("animate__fadeInRight")
            successMessage.innerHTML = message

            timeout = window.setTimeout(() => {
                successContainer.classList.remove("animate__fadeInRight")
                successContainer.classList.add("animate__fadeOutRight")
            }, 5500);
        }
    </script>

</body>

</html>