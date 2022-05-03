@extends('layouts.app')

@section('template_title')
    {{ $caoOsChamado->name ?? 'Show Cao Os Chamado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Os Chamado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-os-chamados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Chamado:</strong>
                            {{ $caoOsChamado->co_chamado }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoOsChamado->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoOsChamado->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Chamado:</strong>
                            {{ $caoOsChamado->ds_chamado }}
                        </div>
                        <div class="form-group">
                            <strong>Co Tipo:</strong>
                            {{ $caoOsChamado->co_tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Co Prioridade:</strong>
                            {{ $caoOsChamado->co_prioridade }}
                        </div>
                        <div class="form-group">
                            <strong>Co Item:</strong>
                            {{ $caoOsChamado->co_item }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoOsChamado->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Solucao:</strong>
                            {{ $caoOsChamado->ds_solucao }}
                        </div>
                        <div class="form-group">
                            <strong>Tempo:</strong>
                            {{ $caoOsChamado->tempo }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Chamado:</strong>
                            {{ $caoOsChamado->dt_chamado }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $caoOsChamado->status }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoOsChamado->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Analista:</strong>
                            {{ $caoOsChamado->co_analista }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $caoOsChamado->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
