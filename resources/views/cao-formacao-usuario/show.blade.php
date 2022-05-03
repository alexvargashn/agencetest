@extends('layouts.app')

@section('template_title')
    {{ $caoFormacaoUsuario->name ?? 'Show Cao Formacao Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Formacao Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-formacao-usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoFormacaoUsuario->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Tp Curso:</strong>
                            {{ $caoFormacaoUsuario->tp_curso }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Curso:</strong>
                            {{ $caoFormacaoUsuario->ds_curso }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Instituicao:</strong>
                            {{ $caoFormacaoUsuario->ds_instituicao }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Conclusao:</strong>
                            {{ $caoFormacaoUsuario->dt_conclusao }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
