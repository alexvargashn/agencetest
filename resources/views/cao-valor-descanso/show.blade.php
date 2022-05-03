@extends('layouts.app')

@section('template_title')
    {{ $caoValorDescanso->name ?? 'Show Cao Valor Descanso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Valor Descanso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-valor-descansos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoValorDescanso->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Segundos:</strong>
                            {{ $caoValorDescanso->segundos }}
                        </div>
                        <div class="form-group">
                            <strong>Mes Referencia:</strong>
                            {{ $caoValorDescanso->mes_referencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
