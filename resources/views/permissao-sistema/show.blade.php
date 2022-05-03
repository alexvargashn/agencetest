@extends('layouts.app')

@section('template_title')
    {{ $permissaoSistema->name ?? 'Show Permissao Sistema' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Permissao Sistema</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('permissao-sistemas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $permissaoSistema->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Tipo Usuario:</strong>
                            {{ $permissaoSistema->co_tipo_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $permissaoSistema->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>In Ativo:</strong>
                            {{ $permissaoSistema->in_ativo }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario Atualizacao:</strong>
                            {{ $permissaoSistema->co_usuario_atualizacao }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Atualizacao:</strong>
                            {{ $permissaoSistema->dt_atualizacao }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
