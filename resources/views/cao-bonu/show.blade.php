@extends('layouts.app')

@section('template_title')
    {{ $caoBonu->name ?? 'Show Cao Bonu' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Bonu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-bonus.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Bon Categoria:</strong>
                            {{ $caoBonu->bon_categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Bon Inicio:</strong>
                            {{ $caoBonu->bon_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Bon Fim:</strong>
                            {{ $caoBonu->bon_fim }}
                        </div>
                        <div class="form-group">
                            <strong>Bon Valor Sem:</strong>
                            {{ $caoBonu->bon_valor_sem }}
                        </div>
                        <div class="form-group">
                            <strong>Bon Valor Fimsem:</strong>
                            {{ $caoBonu->bon_valor_fimsem }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
