@extends('layouts.app')

@section('template_title')
    {{ $caoParticipacaoFuncionario->name ?? 'Show Cao Participacao Funcionario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Participacao Funcionario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-participacao-funcionarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Part Funcionario:</strong>
                            {{ $caoParticipacaoFuncionario->co_part_funcionario }}
                        </div>
                        <div class="form-group">
                            <strong>Pc Participacao:</strong>
                            {{ $caoParticipacaoFuncionario->pc_participacao }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoParticipacaoFuncionario->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Escritorio:</strong>
                            {{ $caoParticipacaoFuncionario->co_escritorio }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Referencia:</strong>
                            {{ $caoParticipacaoFuncionario->dt_referencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
