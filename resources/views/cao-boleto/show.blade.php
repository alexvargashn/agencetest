@extends('layouts.app')

@section('template_title')
    {{ $caoBoleto->name ?? 'Show Cao Boleto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Boleto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-boletos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Boleto:</strong>
                            {{ $caoBoleto->co_boleto }}
                        </div>
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoBoleto->co_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoBoleto->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoBoleto->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $caoBoleto->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Vencimento:</strong>
                            {{ $caoBoleto->vencimento }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $caoBoleto->status }}
                        </div>
                        <div class="form-group">
                            <strong>Boleto:</strong>
                            {{ $caoBoleto->boleto }}
                        </div>
                        <div class="form-group">
                            <strong>Linha Dig:</strong>
                            {{ $caoBoleto->linha_dig }}
                        </div>
                        <div class="form-group">
                            <strong>Parcela:</strong>
                            {{ $caoBoleto->parcela }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
