@extends('layouts.app')

@section('template_title')
    {{ $caoHelpChamado->name ?? 'Show Cao Help Chamado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Help Chamado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-help-chamados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Chamado:</strong>
                            {{ $caoHelpChamado->co_chamado }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Chamado:</strong>
                            {{ $caoHelpChamado->ds_chamado }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Solucao:</strong>
                            {{ $caoHelpChamado->ds_solucao }}
                        </div>
                        <div class="form-group">
                            <strong>Co Status:</strong>
                            {{ $caoHelpChamado->co_status }}
                        </div>
                        <div class="form-group">
                            <strong>Co Motivo:</strong>
                            {{ $caoHelpChamado->co_motivo }}
                        </div>
                        <div class="form-group">
                            <strong>Co Tela:</strong>
                            {{ $caoHelpChamado->co_tela }}
                        </div>
                        <div class="form-group">
                            <strong>Co Autor:</strong>
                            {{ $caoHelpChamado->co_autor }}
                        </div>
                        <div class="form-group">
                            <strong>Co Filial:</strong>
                            {{ $caoHelpChamado->co_filial }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoHelpChamado->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Chamado:</strong>
                            {{ $caoHelpChamado->dt_chamado }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Solucao:</strong>
                            {{ $caoHelpChamado->dt_solucao }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
