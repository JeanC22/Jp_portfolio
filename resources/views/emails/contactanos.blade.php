<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo electronico</h1>
    <p><strong>Nombre:</strong>{{$contacto['name']}}</p>
    <p><strong>Asunto:</strong>{{$contacto['subject']}}</p>
    <p><strong>Correo:</strong>{{$contacto['email']}}</p>
    <p><strong>Mensaje:</strong>{{$contacto['message']}}</p>
</body>
</html>