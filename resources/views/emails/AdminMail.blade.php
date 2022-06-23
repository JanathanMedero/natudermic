<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo mensaje de {{ $details['name'] }}</title>
</head>
<body>

    <h1>Natudermic</h1>

    <img src="{{ $message->embed(public_path().'/img/logo.png') }}" alt="Logo">

    <p style="font-size: 16px;">Hola, buen dia Georgina Ruíz, tienes un mensaje nuevo de <strong>{{ $details['name'] }}</strong></p>

    <h5>Datos</h5>
    <p style="font-size: 16px;">Nombre: <strong>{{ $details['name'] }}</strong></p>
    <p style="font-size: 16px;">Correo electrónico<strong>{{ $details['email'] }}</strong></p>
    <p style="font-size: 16px;">Asunto: <strong>{{ $details['affair'] }}</strong></p>
    <p style="font-size: 16px;">Mensaje: <strong>{{ $details['message'] }}</strong></p>
    <img src="{{ $message->embed(public_path().'/img/banner.png') }}" alt="banner">
    
</body>
</html>