<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Natudermic Email</title>
</head>
<body>

    <h1>Natudermic</h1>

    <img src="{{ $message->embed(public_path().'/img/logo.png') }}" alt="Logo">

    <p style="font-size: 16px;">Hola <strong>{{ $details['name'] }}</strong> gracias por interesarte en nuestros productos, a continuación pondremos a disposición nuestras mejores ofertas, esperamos sean de tu agrado.</p>

    <p style="font-size: 16px;">Si gustas puedes ponerte en contacto con nosotros al siguiente número de telefono: <strong>4432256669</strong></p>

    <img src="{{ $message->embed(public_path().'/img/banner.png') }}" alt="banner">
    
</body>
</html>