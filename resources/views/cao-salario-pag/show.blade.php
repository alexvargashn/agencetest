@extends('layouts.app')

@section('template_title')
    {{ $caoSalarioPag->name ?? 'Show Cao Salario Pag' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Salario Pag</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-salario-pags.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pagamento:</strong>
                            {{ $caoSalarioPag->id_pagamento }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoSalarioPag->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Efetuado:</strong>
                            {{ $caoSalarioPag->dt_efetuado }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $caoSalarioPag->status }}
                        </div>
                        <div class="form-group">
                            <strong>Observacao:</strong>
                            {{ $caoSalarioPag->observacao }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
