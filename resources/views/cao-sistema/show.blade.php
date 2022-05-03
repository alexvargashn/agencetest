@extends('layouts.app')

@section('template_title')
    {{ $caoSistema->name ?? 'Show Cao Sistema' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Sistema</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-sistemas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoSistema->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoSistema->co_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoSistema->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Arquitetura:</strong>
                            {{ $caoSistema->co_arquitetura }}
                        </div>
                        <div class="form-group">
                            <strong>No Sistema:</strong>
                            {{ $caoSistema->no_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Sistema Resumo:</strong>
                            {{ $caoSistema->ds_sistema_resumo }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Caracteristica:</strong>
                            {{ $caoSistema->ds_caracteristica }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Requisito:</strong>
                            {{ $caoSistema->ds_requisito }}
                        </div>
                        <div class="form-group">
                            <strong>No Diretoria Solic:</strong>
                            {{ $caoSistema->no_diretoria_solic }}
                        </div>
                        <div class="form-group">
                            <strong>Ddd Telefone Solic:</strong>
                            {{ $caoSistema->ddd_telefone_solic }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Telefone Solic:</strong>
                            {{ $caoSistema->nu_telefone_solic }}
                        </div>
                        <div class="form-group">
                            <strong>No Usuario Solic:</strong>
                            {{ $caoSistema->no_usuario_solic }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Solicitacao:</strong>
                            {{ $caoSistema->dt_solicitacao }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Entrega:</strong>
                            {{ $caoSistema->dt_entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Co Email:</strong>
                            {{ $caoSistema->co_email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
