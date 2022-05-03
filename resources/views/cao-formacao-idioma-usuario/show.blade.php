@extends('layouts.app')

@section('template_title')
    {{ $caoFormacaoIdiomaUsuario->name ?? 'Show Cao Formacao Idioma Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Formacao Idioma Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-formacao-idioma-usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoFormacaoIdiomaUsuario->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Idioma:</strong>
                            {{ $caoFormacaoIdiomaUsuario->co_idioma }}
                        </div>
                        <div class="form-group">
                            <strong>Nv Leitura:</strong>
                            {{ $caoFormacaoIdiomaUsuario->nv_leitura }}
                        </div>
                        <div class="form-group">
                            <strong>Nv Escrita:</strong>
                            {{ $caoFormacaoIdiomaUsuario->nv_escrita }}
                        </div>
                        <div class="form-group">
                            <strong>Nv Fala:</strong>
                            {{ $caoFormacaoIdiomaUsuario->nv_fala }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
