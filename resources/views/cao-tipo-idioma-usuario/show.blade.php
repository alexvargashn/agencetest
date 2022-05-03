@extends('layouts.app')

@section('template_title')
    {{ $caoTipoIdiomaUsuario->name ?? 'Show Cao Tipo Idioma Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Tipo Idioma Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-tipo-idioma-usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Idioma:</strong>
                            {{ $caoTipoIdiomaUsuario->co_idioma }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Idioma:</strong>
                            {{ $caoTipoIdiomaUsuario->ds_idioma }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
