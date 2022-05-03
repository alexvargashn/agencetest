@extends('layouts.app')

@section('template_title')
    {{ $caoFatura->name ?? 'Show Cao Fatura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Fatura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-faturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Fatura:</strong>
                            {{ $caoFatura->co_fatura }}
                        </div>
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoFatura->co_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoFatura->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoFatura->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Num Nf:</strong>
                            {{ $caoFatura->num_nf }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $caoFatura->total }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $caoFatura->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Data Emissao:</strong>
                            {{ $caoFatura->data_emissao }}
                        </div>
                        <div class="form-group">
                            <strong>Corpo Nf:</strong>
                            {{ $caoFatura->corpo_nf }}
                        </div>
                        <div class="form-group">
                            <strong>Comissao Cn:</strong>
                            {{ $caoFatura->comissao_cn }}
                        </div>
                        <div class="form-group">
                            <strong>Total Imp Inc:</strong>
                            {{ $caoFatura->total_imp_inc }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
