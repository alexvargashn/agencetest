@extends('layouts.master')

@section('adminlte-plugins-css')
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
    
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
                                <a href="https://github.com/alexvargashn" class="btn btn-sm btn-secondary" target="_blank">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="https://www.linkedin.com/in/alexvargashn/" class="btn btn-sm btn-primary"
                                    target="_blank">
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
