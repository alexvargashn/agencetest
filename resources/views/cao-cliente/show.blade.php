@extends('layouts.app')

@section('template_title')
    {{ $caoCliente->name ?? 'Show Cao Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoCliente->co_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>No Razao:</strong>
                            {{ $caoCliente->no_razao }}
                        </div>
                        <div class="form-group">
                            <strong>No Fantasia:</strong>
                            {{ $caoCliente->no_fantasia }}
                        </div>
                        <div class="form-group">
                            <strong>No Contato:</strong>
                            {{ $caoCliente->no_contato }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Telefone:</strong>
                            {{ $caoCliente->nu_telefone }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Ramal:</strong>
                            {{ $caoCliente->nu_ramal }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Cnpj:</strong>
                            {{ $caoCliente->nu_cnpj }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Endereco:</strong>
                            {{ $caoCliente->ds_endereco }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Numero:</strong>
                            {{ $caoCliente->nu_numero }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Complemento:</strong>
                            {{ $caoCliente->ds_complemento }}
                        </div>
                        <div class="form-group">
                            <strong>No Bairro:</strong>
                            {{ $caoCliente->no_bairro }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Cep:</strong>
                            {{ $caoCliente->nu_cep }}
                        </div>
                        <div class="form-group">
                            <strong>No Pais:</strong>
                            {{ $caoCliente->no_pais }}
                        </div>
                        <div class="form-group">
                            <strong>Co Ramo:</strong>
                            {{ $caoCliente->co_ramo }}
                        </div>
                        <div class="form-group">
                            <strong>Co Cidade:</strong>
                            {{ $caoCliente->co_cidade }}
                        </div>
                        <div class="form-group">
                            <strong>Co Status:</strong>
                            {{ $caoCliente->co_status }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Site:</strong>
                            {{ $caoCliente->ds_site }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Email:</strong>
                            {{ $caoCliente->ds_email }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Cargo Contato:</strong>
                            {{ $caoCliente->ds_cargo_contato }}
                        </div>
                        <div class="form-group">
                            <strong>Tp Cliente:</strong>
                            {{ $caoCliente->tp_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Referencia:</strong>
                            {{ $caoCliente->ds_referencia }}
                        </div>
                        <div class="form-group">
                            <strong>Co Complemento Status:</strong>
                            {{ $caoCliente->co_complemento_status }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Fax:</strong>
                            {{ $caoCliente->nu_fax }}
                        </div>
                        <div class="form-group">
                            <strong>Ddd2:</strong>
                            {{ $caoCliente->ddd2 }}
                        </div>
                        <div class="form-group">
                            <strong>Telefone2:</strong>
                            {{ $caoCliente->telefone2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
