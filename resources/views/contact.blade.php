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
    Contacto
@endsection

@section('namepage')
Contacto
@endsection

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="card bg-light d-flex justify-content-center">
                        <div class="card-header text-muted border-bottom-0">
                            Ingeniero en Sistemas
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Alex vargas</b></h2>
                                    <p class="text-muted text-sm"><b>Acerca de: </b> Ingeniero en Sistemas / Full Stack
                                        Developer </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-building"></i></span> Dirección: Tegucigalpa,
                                            Honduras</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="../../dist/img/alexvargas.jpg" alt="alex-vargas-photo"
                                        class="img-circle img-fluid" width="135" height="135">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="https://github.com/alexvargashn" class="btn btn-sm btn-secondary">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="https://www.linkedin.com/in/alexvargashn/" class="btn btn-sm btn-primary">
                                    <i class="fab fa-linkedin-in"></i> LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
@endsection
@push('adminlte-plugins')
    <!-- jQuery -->
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>

    <script>

    </script>
@endpush