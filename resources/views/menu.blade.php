@extends('layout.main')

@section('titulo')
    <title>Control de examenes</title>
@endsection

@section('css')

@endsection

@section('titulo-pagina')
    <h1 class="h3 mb-4 text-gray-800">Informacion de los examenes</h1>
@endsection

@section('contenido')
    <div class="col-md-12">
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Empleados</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Correo</th>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>Resultado Examen</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{{$loop -> index + 1}}</td>
                                        <td>{{$usuario -> correo}}</td>
                                        <td>{{$usuario -> nombre}}</td>
                                        <td>{{$usuario -> edad}}</td>
                                        <td>{{$usuario -> sexo}}</td>
                                        <td>{{$usuario -> res_examen}}</td>
                                        <td><a target="blank" href="{{route('enviar.datos',[
                                            "id" => $usuario -> ID,
                                            "nombre" => $usuario -> nombre,
                                            "edad" => $usuario -> edad,
                                            "sexo" => $usuario -> sexo,
                                            "correo" => $usuario -> correo,
                                            "resultado" => $usuario -> res_examen])}}
                                                " class="btn btn-outline-light btn-info"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Los 5 mejores resultados</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Correo</th>
                                                            <th>Nombre</th>
                                                            <th>Edad</th>
                                                            <th>Sexo</th>
                                                            <th>Resultado Examen</th>


                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @foreach($altos as $alto)
                                                            <tr>
                                                                <td>{{$loop -> index + 1}}</td>
                                                                <td>{{$alto -> correo}}</td>
                                                                <td>{{$alto -> nombre}}</td>
                                                                <td>{{$alto -> edad}}</td>
                                                                <td>{{$alto -> sexo}}</td>
                                                                <td>{{$alto -> res_examen}}</td>
                                                                <td><a target="blank" href="{{route('enviar.datos',[
                                            "id" => $usuario -> ID,
                                            "nombre" => $usuario -> nombre,
                                            "edad" => $usuario -> edad,
                                            "sexo" => $usuario -> sexo,
                                            "correo" => $usuario -> correo,
                                            "resultado" => $usuario -> res_examen])}}
                                                                        " class="btn btn-outline-light btn-info"><i class="fas fa-eye"></i></a></td>

                                                            </tr>

                                                        @endforeach


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                </div>
            </div>
        </div>
    </div>

                                                    <div class="col-md-12">
                                                        <div class="card shadow mb-4">

                                                            <div class="card-body">
                                                                <div class="card shadow mb-4">
                                                                    <div class="card-header py-3">
                                                                    <div class="card-header py-3">
                                                                        <h6 class="m-0 font-weight-bold text-primary">Los 5 resultados mas bajos</h6>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Correo</th>
                                                                                    <th>Nombre</th>
                                                                                    <th>Edad</th>
                                                                                    <th>Sexo</th>
                                                                                    <th>Resultado Examen</th>


                                                                                </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                @foreach($bajos as $bajo)
                                                                                    <tr>
                                                                                        <td>{{$loop -> index + 1}}</td>
                                                                                        <td>{{$bajo -> correo}}</td>
                                                                                        <td>{{$bajo -> nombre}}</td>
                                                                                        <td>{{$bajo -> edad}}</td>
                                                                                        <td>{{$bajo -> sexo}}</td>
                                                                                        <td>{{$bajo -> res_examen}}</td>
                                                                                        <td><a target="blank" href="{{route('enviar.datos',[
                                            "id" => $usuario -> ID,
                                            "nombre" => $usuario -> nombre,
                                            "edad" => $usuario -> edad,
                                            "sexo" => $usuario -> sexo,
                                            "correo" => $usuario -> correo,
                                            "resultado" => $usuario -> res_examen])}}
                                                                                                " class="btn btn-outline-light btn-info"><i class="fas fa-eye"></i></a></td>

                                                                                    </tr>

                                                                                @endforeach


                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

<h1 class="text-center text-info">Graficas</h1>
                <center>
                    <h1 class="text-center text-info">Puntaje en el examen</h1>
                    <div class="col-md-6"><canvas id="myChart" width="400" height="400"></canvas></div>
                    <h1 class="text-center text-info">Puntaje por sexo</h1>
                    <div class="col-md-6"><canvas id="myChart2" width="400" height="400"></canvas></div>
                    <h1 class="text-center text-info">Puntaje por edades asecedentes</h1>
                    <div class="col-md-6"><canvas id="myChart3" width="400" height="400"></canvas></div>
                </center>
@endsection

@section('js')
    <!-- Page level plugins -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>

    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>



    <script>

        $(document).ready(function (){

            $('#dataTable').DataTable();

        });

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [ @foreach($usuarios as $usuario)
                '{{$usuario -> nombre}}',
                    @endforeach
                ],
                datasets: [{
                    label: 'Puntaje en el examen',
                    data: [@foreach($usuarios as $usuario)
                        '{{$usuario -> res_examen}}',
                        @endforeach],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById('myChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Mujeres","Hombres"],
                datasets: [{
                    label: 'Puntaje en el examen por sexo',
                    data: [{{$respuestasM}},{{$respuestasH}}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById('myChart3').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [ @foreach($edades as $edad)
                    '{{$edad -> nombre}} {{$edad -> edad}}',
                    @endforeach
                ],
                datasets: [{
                    label: 'Puntaje en el examen por edades ascendente',
                    data: [@foreach($edades as $edad)
                        '{{$edad -> res_examen}}',
                        @endforeach],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

@endsection

