@extends('layouts.master')

@section('adminlte-plugins-css')
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('/plugins/daterangepicker/daterangepicker.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
@endsection
@section('template_title')
    Performance Comercial
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                aria-selected="true">Por Consultor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile"
                                aria-selected="false">Por cliente</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                            aria-labelledby="custom-tabs-three-home-tab">
                            <div class="card card-default">

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Período de tiempo:</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control float-right" id="periodo">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <div class="form-group">
                                                <label>Consultores</label>
                                                <select class="duallistbox" multiple="multiple" id="consultores"
                                                    size="10">
                                                    @foreach ($consultores as $consultor)
                                                        <option value="{{ $consultor->co_usuario }}">
                                                            {{ $consultor->no_usuario }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card" style="top: 30px;">
                                                <div class="card-header">
                                                    <h3 class="card-title" style="word-break: break-word;">Acciones</h3>
                                                </div>
                                                <div class="card-body row">
                                                    <button type="button" class="btn btn-primary btn-block"
                                                        onclick="relatorico(event)">
                                                        <i class="fas fa-calculator fa-fw"></i>
                                                        Reporte
                                                    </button>
                                                    <button type="button" class="btn btn-info btn-block btn-flat"
                                                        onclick="grafico(event)">
                                                        <i class="fas fa-chart-bar fa-fw"></i>
                                                        Gráfico
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-block btn-sm"
                                                        onclick="pizza(event)">
                                                        <i class="fas fa-chart-pie fa-fw"></i> Pizza
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tabConsultores" style="">

                                    </div>
                                    <div id="graficoBarras" style="display: none;">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">
                                                            Gráficos
                                                        </h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <figure class="highcharts-figure">
                                                            <div id="container"></div>
                                                            <p class="highcharts-description">
                                                                Se muestra las ganancias obtenidas por cada consultor en un
                                                                periodo de tiempo
                                                                determinado, comparado al costo fijo promedio de todos
                                                                ellos.
                                                            </p>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="graficoPizza" style="display: none;">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">
                                                            Pizza
                                                        </h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <figure class="highcharts-figure">
                                                            <div id="container2"></div>
                                                            <p class="highcharts-description">
                                                                Porcentaje de ganancias generadas por cada consultor dado
                                                                un periodo de tiempo en relación al total de ganancias
                                                                generadas por todos ellos.
                                                            </p>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                            aria-labelledby="custom-tabs-three-profile-tab">
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
                <span class="fa fa-spinner fa-spin fa-3x"></span>
            </div>
        </div>
    </div>
    </div>
@endsection
<!-- jQuery -->

@section('scripts')
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script> --}}
   
    <!-- AdminLTE App -->
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


    <!-- Bootstrap4 Duallistbox -->

    <script src="{{ asset('/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('/plugins/moment/moment.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>



    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>



    <script src="{{ asset('js/performance-comercial/index.js') }}"></script>
    <script src="{{ asset('js/performance-comercial/graficos.js') }}"></script>
    <script src="{{ asset('js/performance-comercial/consumibles.js') }}"></script>



    <script>
        $(function() {
            $token = "{{ csrf_token() }}";
            $('.duallistbox').bootstrapDualListbox();
            //Date range picker
            $('#periodo').daterangepicker({
                'locale': {
                    "applyLabel": "Aceptar",
                    "cancelLabel": "Cancelar",
                    "daysOfWeek": [
                        "Do",
                        "Lu",
                        "Ma",
                        "Mi",
                        "Ju",
                        "Vi",
                        "Sa"
                    ],
                    "monthNames": [
                        "Enero",
                        "Febrero",
                        "Marzo",
                        "Abril",
                        "Mayo",
                        "Junio",
                        "Julio",
                        "Agosto",
                        "Septiembre",
                        "Octubre",
                        "Noviembre",
                        "Deciembre"
                    ]
                }
            });
        });
    </script>
@endsection
