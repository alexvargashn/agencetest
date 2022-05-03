@extends('layouts.app')

@section('template_title')
    {{ $caoBancoDeHora->name ?? 'Show Cao Banco De Hora' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Banco De Hora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-banco-de-horas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoBancoDeHora->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Data Cadastro:</strong>
                            {{ $caoBancoDeHora->data_cadastro }}
                        </div>
                        <div class="form-group">
                            <strong>Segundos:</strong>
                            {{ $caoBancoDeHora->segundos }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $caoBancoDeHora->tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
