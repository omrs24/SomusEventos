<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        p {
            font-size: 12px;
        }

        .signature {
            font-style: italic;
        }
    </style>
</head>

<body>
    <div>
        <p>Hey,</p>
        <p>Can your Laravel app send HTML emails yet? 😉 </p>
        <p class="signature">Mailtrap</p>
        <object data="{{ asset('/uploads/'.$fileName) }}" width="300" height="300"> </object>

        {!! $qr !!}
    </div>
</body>

</html>