<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Empresa tal - Registro</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-fondo">
<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-5 col-lg-12 col-md-5">
        <div class="card o-hidden border-0 shadow-lg my-5 bg-transparent align-items-center">
            <div class="col-lg-10">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h2 text-gray-900 mb-4">Registrate</h1>
                    </div>
                    @if(isset($estatus))
                        @if($estatus == "success")
                            <label class="text-success">{{$mensaje}}</label>
                        @elseif($estatus == "error")
                            <label class="text-warning">{{$mensaje}}</label>
                        @endif
                    @endif
                    <form class="user" action="{{route("registro.form")}}" method="post">
                        {{csrf_field()}}
                        <h1 class="h5 text-dark mb-4 text-center">Nombre</h1>
                        <div class="form-group">
                            <input style="font-size: 1rem; color: black" type="text" class="form-control  form-control-user"
                                   placeholder="Nombre" name="nombre" required>
                        </div>
                        <h1 class="h5 text-dark mb-4 text-center">Edad</h1>
                        <div class="form-group">
                            <input style="font-size: 1rem; color: black" type="text" class="form-control  form-control-user"
                                   placeholder="Edad" name="edad" required>
                        </div>
                        <h1 class="h5 text-dark mb-4 text-center">Sexo</h1>
                        <div class="btn-group text-center d-flex" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnsexo" id="btnradio1" autocomplete="Mujer" value="Mujer">
                            <label class="btn btn-outline-primary" for="btnradio1">Mujer</label>
                            <input type="radio" class="btn-check" name="btnsexo" id="btnradio2" autocomplete="Hombre" value="Hombre">
                            <label class="btn btn-outline-primary" for="btnradio2">Hombre</label>
                        </div>

                        <h1 class="h5 text-dark mb-4 text-center">Correo</h1>
                        <div class="form-group">
                            <input style="font-size: 1rem; color: black" type="email" class="form-control  form-control-user"
                                   placeholder="Correo" name="correo" required>
                        </div>
                        <h1 class="h5 text-dark mb-4 text-center">Contraseña</h1>
                        <div class="form-group">
                            <input style="font-size: 1rem; color: black" type="password" class="form-control form-control-user"
                                    placeholder="Contraseña" name="password" required>
                        </div>
                        <input type="submit" style="font-size: 1rem" value="Registrarse" class="btn btn-primary btn-user btn-block">

                        @if(isset($_GET["r"]))
                            <input type="hidden" name="url" value="{{$_GET["r"]}}">
                        @endif
                    </form>
                    <hr>
                    <div class="text-center">
                        <a style="color: black; font-size: 1rem" class="small" href="{{route("login")}}">¿Ya tienes cuenta? Inicia sesion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

</body>

</html>
