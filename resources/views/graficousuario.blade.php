@extends('layout.impresion')

@section('titulo')
    <title>Informacion</title>
@endsection

@section('css')

@endsection

@section('titulo-pagina')
    <h1 class="text-center h3 mb-4 text-gray-800">Información de {{$nombre}}</h1>
@endsection

@section('contenido')

    <div class="col-md-12">

<a class="btn btn-info" href="{{route('imprimir.datos',["id" => $id])}}">Imprimir PDF</a>
            <div class="card-body">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="text-center m-0 font-weight-bold text-primary">Datos de {{$nombre}}</h6>

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
                                <tr>
                                    <td>{{$id}}</td>
                                    <td>{{$correo}}</td>
                                    <td>{{$nombre}}</td>
                                    <td>{{$edad}}</td>
                                    <td>{{$sexo}}</td>
                                    <td>{{$resultado}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center text-info">Grafica</h1>
    <center>
        <h1 class="text-center text-info">Puntaje en el examen</h1>
        <div class="col-md-6"><canvas id="myChart" width="400" height="400"></canvas></div>
    </center>

    @endsection

    @section('js')

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function (){
                $('#dataTable').DataTable();
            });

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        '{{$nombre}}',

                    ],
                    datasets: [{
                        label: 'Puntaje en el examen',
                        data: [
                            '{{$resultado}}',5
                        ],
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

