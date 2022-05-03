@extends('layouts.master')

@section('adminlte-plugins-css')
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
@endsection

@section('template_title')
    Performance Comercial
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Bootstrap Duallistbox</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Multiple</label>
                                <select class="duallistbox" multiple="multiple">
                                    @foreach ($consultores as $consultor)
                                    <option>{{$consultor->no_usuario}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('adminlte-plugins')
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <script>
        $(function() {
            $('.duallistbox').bootstrapDualListbox();
        })
    </script>
@endpush
