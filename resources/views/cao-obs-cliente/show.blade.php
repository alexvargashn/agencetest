@extends('layouts.app')

@section('template_title')
    {{ $caoObsCliente->name ?? 'Show Cao Obs Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Obs Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-obs-clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Obs:</strong>
                            {{ $caoObsCliente->co_obs }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoObsCliente->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoObsCliente->co_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoObsCliente->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Obs:</strong>
                            {{ $caoObsCliente->dt_obs }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
