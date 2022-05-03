@extends('layouts.app')

@section('template_title')
    {{ $tipoUsuario->name ?? 'Show Tipo Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipo Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Tipo Usuario:</strong>
                            {{ $tipoUsuario->co_tipo_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Tipo Usuario:</strong>
                            {{ $tipoUsuario->ds_tipo_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $tipoUsuario->co_sistema }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
