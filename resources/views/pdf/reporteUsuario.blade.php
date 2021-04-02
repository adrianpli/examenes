<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<center>
<h1 class="text-center h3 mb-4 text-gray-800">Información de Usuario</h1>
<table style="width: 100%; border:solid 1px black">
    <thead>
    <tr style="background-color: #ff9a60; border-bottom: solid 1px black">
    <td>ID</td>
    <td>Nombre</td>
    <td>Correo</td>
    <td>Edad</td>
    <td>Sexo</td>
    <td>Resultado examen</td>
    </tr>
    </thead>
    <tbody>
    @foreach($datos as $dato)
        <tr>
            <td>{{$dato -> ID}}</td>
            <td>{{$dato -> nombre}}</td>
            <td>{{$dato -> correo}}</td>
            <td>{{$dato -> edad}}</td>
            <td>{{$dato -> sexo}}</td>
            <td>{{$dato -> res_examen}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</center>
</body>
</html>
