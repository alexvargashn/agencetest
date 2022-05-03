@extends('layouts.app')

@section('template_title')
    {{ $caoBancoHora->name ?? 'Show Cao Banco Hora' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Banco Hora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-banco-horas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Banc Horas:</strong>
                            {{ $caoBancoHora->co_banc_horas }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoBancoHora->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $caoBancoHora->periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Min Mes:</strong>
                            {{ $caoBancoHora->min_mes }}
                        </div>
                        <div class="form-group">
                            <strong>Min Ferias:</strong>
                            {{ $caoBancoHora->min_ferias }}
                        </div>
                        <div class="form-group">
                            <strong>Min Pago:</strong>
                            {{ $caoBancoHora->min_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Min Total:</strong>
                            {{ $caoBancoHora->min_total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
