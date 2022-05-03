@extends('layouts.app')

@section('template_title')
    {{ $caoCusto->name ?? 'Show Cao Custo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Custo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-custos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Custo:</strong>
                            {{ $caoCusto->co_custo }}
                        </div>
                        <div class="form-group">
                            <strong>Co Tipo Custo:</strong>
                            {{ $caoCusto->co_tipo_custo }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoCusto->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Co Escritorio:</strong>
                            {{ $caoCusto->co_escritorio }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Compra:</strong>
                            {{ $caoCusto->dt_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Pagamento:</strong>
                            {{ $caoCusto->dt_pagamento }}
                        </div>
                        <div class="form-group">
                            <strong>Co Boleto:</strong>
                            {{ $caoCusto->co_boleto }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $caoCusto->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Parcela:</strong>
                            {{ $caoCusto->parcela }}
                        </div>
                        <div class="form-group">
                            <strong>Pag:</strong>
                            {{ $caoCusto->pag }}
                        </div>
                        <div class="form-group">
                            <strong>Co Custo High:</strong>
                            {{ $caoCusto->co_custo_high }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
