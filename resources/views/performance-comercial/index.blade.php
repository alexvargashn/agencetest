@extends('layouts.master')

@section('adminlte-plugins-css')
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('/plugins/daterangepicker/daterangepicker.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
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
                                                    <input type="text" class="form-control float-right" id="reservation">
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
                                                        onclick="relatorico()"><i class="fas fa-calculator fa-fw"></i>
                                                        Relatórico</button>
                                                    <button type="button" class="btn btn-info btn-block btn-flat"><i
                                                            class="fa fa-bell"></i>Gráfico</button>
                                                    <button type="button" class="btn btn-danger btn-block btn-sm"><i
                                                            class="fa fa-bell"></i>Pizza</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tabConsultores">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">
                                                            Ana Paula Fontes Martins Chiodaro
                                                        </h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <table class="table table-bordered"id="tablaConsultores"
                                                            class="table table-bordered tablaConsultores">
                                                            <thead>
                                                                <tr>
                                                                    <th>Período</th>
                                                                    <th>Ganancias</th>
                                                                    <th>Costo Fijo</th>
                                                                    <th>Comisión</th>
                                                                    <th>Lucro</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Enero de 2007</td>
                                                                    <td>R$ 1.500,00</td>
                                                                    <td>- R$ 2.000,00</td>
                                                                    <td>- R$ 1.000,00</td>
                                                                    <td>- R$ 1.500,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Enero de 2007</td>
                                                                    <td>R$ 1.500,00</td>
                                                                    <td>- R$ 2.000,00</td>
                                                                    <td>- R$ 1.000,00</td>
                                                                    <td>- R$ 1.500,00</td>
                                                                </tr>
                                                                <tr class="card-header">
                                                                    <td>Saldo</td>
                                                                    <td>R$ 3.000,00</td>
                                                                    <td>- R$ 4.000,00</td>
                                                                    <td>- R$ 1.000,00</td>
                                                                    <td>- R$ 1.500,00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
    </div>
    </div>
@endsection
@push('adminlte-plugins')
    <!-- jQuery -->
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('/plugins/moment/moment.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
    <script>
        $(function() {
           /* $('.tablaConsultores').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });*/
            $('.duallistbox').bootstrapDualListbox();
            //Date range picker
            $('#reservation').daterangepicker();
        })
    </script>
    <script>
        function relatorico() {
            alert("relatorico");
            let _token = "{{ csrf_token() }}";
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                },
                url: "performancecomercial/relatorico",
                type: "POST",
                cache: false,
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: "POST",
                    consultores: getConsultores()
                },
                datatype: 'html',
                success: function(data) {
                    tabularDataConsultores(getDTConsultoresPorNombre(data[0]));
                }
            });
        }

        function getConsultores() {
            let consultores = [];
            $('#consultores option:selected').each(function(i, selected) {
                consultores[i] = $(selected).val();
            });
            return consultores;
        }

        function getDTConsultoresPorNombre(consultores) {
            let ordenada = consultores.reduce(function(resultado, actual) {
                resultado[actual.nombreusuario] = resultado[actual.nombreusuario] || [];
                resultado[actual.nombreusuario].push(actual);
                return resultado;
            }, {});
            console.log(ordenada);
            return ordenada;
        }

        function tabularDataConsultores(consultores) {
            let html = '';
            let tabla = $('#tabConsultores');
            tabla.html('');
            let j = 0;

            let sumGanancia = 0;
            let sumCostoFijo = 0;
            let sumComision = 0;
            let sumLucro = 0;
            for (i in consultores) {
                console.log(i);
                
                html += generarEncabezadoConsultor(i);
                html += generarComienzoCuerpoTablaConsultor(j);
                consultores[i].forEach(dato => {
                    html += generartrConsultor(dato);
                    console.log(dato);
                    sumGanancia += dato.ganancia;
                    sumCostoFijo += dato.costofijo;
                    sumComision += dato.comision;
                    sumLucro += dato.lucro;
                });
                html += '<tr class="card-header"><td class="font-weight: bold;">Saldo</td><td>'+sumGanancia+'</td><td>'+sumCostoFijo+'</td><td>'+sumCostoFijo+'</td><td>'+sumLucro+'</td></tr>';
                html += generarCierreTablaConsultor();
                tabla.append(html);
                $('.tablaConsultores-' + j).DataTable({
                    "paging": false,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": false,
                    "autoWidth": false,
                    "responsive": true,
                });
                html = '';
                j++;
            }
        }

        function generarEncabezadoConsultor(nombreconsultor) {
            let html = '';
            if (nombreconsultor != null) {
                html += '<div class="card">';
                html += '<div class="card-header">';
                html += '<h3 class="card-title">';
                html += nombreconsultor;
                html += '</h3>';
                html += '</div>';
            }
            return html;
        }

        function generarComienzoCuerpoTablaConsultor(i) {
            let html = '<div class="card-body">';
            html += '<table class="table table-bordered tablaConsultores-' + i + '" > ';
            html += '<thead>';
            html += '<tr>';
            html += '<th>Período</th>';
            html += '<th>Ganancias</th>';
            html += '<th>Costo Fijo</th>';
            html += '<th>Comisión</th>';
            html += '<th>Lucro</th>';
            html += '</tr>';
            html += '</thead>';
            html += '<tbody>';
            return html;
        }

        function generartrConsultor(consultor) {
            let html = '';
            if (consultor != null) {
                html += '<tr>';
                html += '<td>' + consultor.mes + '</td>'
                html += '<td>' + consultor.ganancia + '</td>';
                html += '<td>' + consultor.costofijo + '</td>';
                html += '<td>' + consultor.comision + '</td>';
                html += '<td>' + consultor.lucro + '</td>';
                html += '</tr>'
            }
            return html;
        }

        function generarCierreTablaConsultor() {
            let html = '</tr>';
            html += '</tbody>';
            html += '</table>';
            html += '</div>';
            html += '</div>';
            return html;
        }
    </script>
@endpush
