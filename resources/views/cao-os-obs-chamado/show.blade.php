@extends('layouts.app')

@section('template_title')
    {{ $caoOsObsChamado->name ?? 'Show Cao Os Obs Chamado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Os Obs Chamado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-os-obs-chamados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Obs:</strong>
                            {{ $caoOsObsChamado->co_obs }}
                        </div>
                        <div class="form-group">
                            <strong>Co Chamado:</strong>
                            {{ $caoOsObsChamado->co_chamado }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoOsObsChamado->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoOsObsChamado->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Obs:</strong>
                            {{ $caoOsObsChamado->dt_obs }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $caoOsObsChamado->email }}
                        </div>
                        <div class="form-group">
                            <strong>Arquivo Obs:</strong>
                            {{ $caoOsObsChamado->arquivo_obs }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
