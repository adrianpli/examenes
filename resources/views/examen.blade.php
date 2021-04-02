<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Empresa tal - Examen empleado</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-inicio">
<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-5 col-lg-12 col-md-5">
        <div class="card o-hidden border-0 shadow-lg my-5 bg-transparent align-items-center">
            <div class="col-lg-10">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h1 text-white mb-4">Examen de conocimientos PHP</h1>
                        <h4 class="h4 text-white">Constesta correctamente las preguntas del examen para poder aspirar a un puesto en el area de desarrollo</h4>
                        <hr>
                        <form class="user" action="{{route("examen.form")}}" method="post">
                            {{csrf_field()}}
                            <h5 class="text-white mb-4 text-center">ID de empleado</h5>
                            <div class="form-group">
                                <input style="font-size: 1rem; color: black" type="email" class="form-control  form-control-user"
                                       id="exampleInputEmail" aria-describedby="emailHelp"
                                       placeholder="Correo" name="idempleado" required readonly value="{{session('usuario')->ID}}">
                            </div>
                            <h5 class="text-white mb-4 text-center">Nombre de empleado</h5>
                            <div class="form-group">
                                <input style="font-size: 1rem; color: black" type="email" class="form-control  form-control-user"
                                       id="exampleInputEmail" aria-describedby="emailHelp"
                                       placeholder="Correo" name="correo" required readonly value="{{session('usuario')->nombre}}">
                            </div>
                            <h5 class="text-white mb-4 text-center">Examen</h5>


                            <h5 class="text-white mb-4 text-center">1.- ¿En que lugar se ejecuta el codigo PHP?</h5>
                            <div class="form-group">
                                <div class="btn-group-vertical" role="group1" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1" autocomplete="off" value="Servidor" >
                                    <label class="btn text-white  btn-outline-primary" for="btnradio1">Servidor</label>

                                    <input type="radio" class="btn-check" name="btnradio1" id="btnradio2" autocomplete="off">
                                    <label class="btn text-white  btn-outline-primary" for="btnradio2">Cliente</label>

                                    <input type="radio" class="btn-check" name="btnradio1" id="btnradio3" autocomplete="off">
                                    <label class="btn text-white  btn-outline-primary" for="btnradio3">Licuadora</label>
                                </div>
                                 </div>

                            <h5 class="text-white mb-4 text-center">2.- ¿Cual de estas instrucciones esta correctamente escrita en PHP?</h5>
                            <div class="form-group">
                                <div class="btn-group-vertical" role="group2" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio4" autocomplete="off" value="if (a==0) echo 'hola mundo';">
                                    <label class="btn text-white  btn-outline-primary" for="btnradio4">if (a==0) echo 'hola mundo';</label>

                                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio5" autocomplete="off">
                                    <label class="btn  text-white btn-outline-primary" for="btnradio5">if (a==0) { echo ok }</label>

                                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio6" autocomplete="off">
                                    <label class="btn text-white  btn-outline-primary" for="btnradio6">if (a==0): print a;</label>
                                </div>
                            </div>

                            <h5 class="text-white mb-4 text-center">3.- ¿Que es un array?</h5>
                            <div class="form-group">
                                <div class="btn-group-vertical" role="group2" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio3" id="btnradio7" autocomplete="off" >
                                    <label class="btn text-white  btn-outline-primary" for="btnradio7">Un conjunto de caracteres alfanuméricos</label>

                                    <input type="radio" class="btn-check" name="btnradio3" id="btnradio8" autocomplete="off">
                                    <label class="btn text-white  btn-outline-primary" for="btnradio8">Un sistema para convertir una variable de texto en un número</label>

                                    <input type="radio" class="btn-check" name="btnradio3" id="btnradio9" autocomplete="off" value="Un conjunto de elementos">
                                    <label class="btn text-white  btn-outline-primary" for="btnradio9">Un conjunto de elementos</label>
                                </div>
                            </div>

                            <h5 class="text-white mb-4 text-center">4.- ¿Cómo se define una variable de tipo string en PHP?</h5>
                            <div class="form-group">
                                <div class="btn-group-vertical" role="group2" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio4" id="btnradio10" autocomplete="off" >
                                    <label class="btn text-white  btn-outline-primary" for="btnradio10">char str;</label>

                                    <input type="radio" class="btn-check" name="btnradio4" id="btnradio11" autocomplete="off">
                                    <label class="btn  text-white btn-outline-primary" for="btnradio11">string str;</label>

                                    <input type="radio" class="btn-check" name="btnradio4" id="btnradio12" autocomplete="off" value="En PHP no se define el tipo de las variables explicitamente">
                                    <label class="btn  text-white btn-outline-primary" for="btnradio12">En PHP no se define el tipo de las variables explícitamente</label>
                                </div>
                            </div>

                            <h5 class="text-white mb-4 text-center">5.- Tenemos el siguiente código: $a=”10”; $b=$a + 2; ¿Cuál será el valor de $b?</h5>
                            <div class="form-group">
                                <div class="btn-group-vertical" role="group2" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio5" id="btnradio13" autocomplete="off" >
                                    <label class="btn  text-white btn-outline-primary" for="btnradio13">"12"</label>

                                    <input type="radio" class="btn-check" name="btnradio5" id="btnradio14" autocomplete="off" value="12">
                                    <label class="btn text-white  btn-outline-primary" for="btnradio14">12</label>

                                    <input type="radio" class="btn-check " name="btnradio5" id="btnradio15" autocomplete="off">
                                    <label class="btn text-white btn-outline-primary" for="btnradio15">Ninguno (no se puede sumar un número a una cadena)</label>
                                </div>
                            </div>
                            <input type="submit" style="font-size: 1rem" value="Enviar examen" class="btn btn-primary btn-user btn-block">
                            <hr>
                            @if(isset($_GET["r"]))
                                <input type="hidden" name="url" value="{{$_GET["r"]}}">
                            @endif
                        </form>
                    </div>
                    @if(isset($estatus))
                        @if($estatus == "success")
                            <label class="text-success">{{$mensaje}}</label>
                        @elseif($estatus == "error")
                            <label class="text-warning">{{$mensaje}}</label>
                        @endif
                    @endif


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
