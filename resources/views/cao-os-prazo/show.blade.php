@extends('layouts.app')

@section('template_title')
    {{ $caoOsPrazo->name ?? 'Show Cao Os Prazo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Os Prazo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-os-prazos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Prazo:</strong>
                            {{ $caoOsPrazo->co_prazo }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoOsPrazo->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Co Fase:</strong>
                            {{ $caoOsPrazo->co_fase }}
                        </div>
                        <div class="form-group">
                            <strong>Total Analista:</strong>
                            {{ $caoOsPrazo->total_analista }}
                        </div>
                        <div class="form-group">
                            <strong>Total Hora:</strong>
                            {{ $caoOsPrazo->total_hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
