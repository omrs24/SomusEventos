<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        p {
            color: #333;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">¡Confirmación de Registro Exitosa!</h1>
        <p>Estimado/a {{ $form->name . ' ' . $form->last_name }},</p>
        <p>Gracias por registrarte en nuestro sitio. Tu registro ha sido confirmado.</p>
        <p>A continuación, encontrarás tu código QR personalizado:</p>
        <!-- Coloca aquí tu código QR incrustado -->
        <img src="{{ $message->embed(public_path().'/uploads/omar.rosales@som.us.svg') }}" alt="qrcode">
        <p>Por favor, conserva este correo electrónico para futuras referencias.</p>
        <p>¡Gracias y bienvenido/a a nuestra comunidad!</p>
    </div>
</body>

</html>