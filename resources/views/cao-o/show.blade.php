@extends('layouts.app')

@section('template_title')
    {{ $caoO->name ?? 'Show Cao O' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao O</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-os.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoO->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Os:</strong>
                            {{ $caoO->nu_os }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoO->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoO->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Arquitetura:</strong>
                            {{ $caoO->co_arquitetura }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Os:</strong>
                            {{ $caoO->ds_os }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Caracteristica:</strong>
                            {{ $caoO->ds_caracteristica }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Requisito:</strong>
                            {{ $caoO->ds_requisito }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Inicio:</strong>
                            {{ $caoO->dt_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Fim:</strong>
                            {{ $caoO->dt_fim }}
                        </div>
                        <div class="form-group">
                            <strong>Co Status:</strong>
                            {{ $caoO->co_status }}
                        </div>
                        <div class="form-group">
                            <strong>Diretoria Sol:</strong>
                            {{ $caoO->diretoria_sol }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Sol:</strong>
                            {{ $caoO->dt_sol }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Tel Sol:</strong>
                            {{ $caoO->nu_tel_sol }}
                        </div>
                        <div class="form-group">
                            <strong>Ddd Tel Sol:</strong>
                            {{ $caoO->ddd_tel_sol }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Tel Sol2:</strong>
                            {{ $caoO->nu_tel_sol2 }}
                        </div>
                        <div class="form-group">
                            <strong>Ddd Tel Sol2:</strong>
                            {{ $caoO->ddd_tel_sol2 }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Sol:</strong>
                            {{ $caoO->usuario_sol }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Imp:</strong>
                            {{ $caoO->dt_imp }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Garantia:</strong>
                            {{ $caoO->dt_garantia }}
                        </div>
                        <div class="form-group">
                            <strong>Co Email:</strong>
                            {{ $caoO->co_email }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os Prospect Rel:</strong>
                            {{ $caoO->co_os_prospect_rel }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
