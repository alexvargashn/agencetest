@extends('layouts.app')

@section('template_title')
    {{ $caoTipoSistemaUsuario->name ?? 'Show Cao Tipo Sistema Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Tipo Sistema Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-tipo-sistema-usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoTipoSistemaUsuario->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Sistema:</strong>
                            {{ $caoTipoSistemaUsuario->ds_sistema }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
