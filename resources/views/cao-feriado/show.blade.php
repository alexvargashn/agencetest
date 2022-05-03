@extends('layouts.app')

@section('template_title')
    {{ $caoFeriado->name ?? 'Show Cao Feriado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Feriado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-feriados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $caoFeriado->dia }}
                        </div>
                        <div class="form-group">
                            <strong>Mes:</strong>
                            {{ $caoFeriado->mes }}
                        </div>
                        <div class="form-group">
                            <strong>Ano:</strong>
                            {{ $caoFeriado->ano }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
