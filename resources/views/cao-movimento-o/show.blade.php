@extends('layouts.app')

@section('template_title')
    {{ $caoMovimentoO->name ?? 'Show Cao Movimento O' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Movimento O</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-movimento-os.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Movimento Os:</strong>
                            {{ $caoMovimentoO->co_movimento_os }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Os:</strong>
                            {{ $caoMovimentoO->nu_os }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoMovimentoO->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Co Tipo Movimento:</strong>
                            {{ $caoMovimentoO->co_tipo_movimento }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Valor:</strong>
                            {{ $caoMovimentoO->nu_valor }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Valor:</strong>
                            {{ $caoMovimentoO->ds_valor }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Obs:</strong>
                            {{ $caoMovimentoO->usuario_obs }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Ini:</strong>
                            {{ $caoMovimentoO->dt_ini }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Fim:</strong>
                            {{ $caoMovimentoO->dt_fim }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
