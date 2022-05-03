@extends('layouts.app')

@section('template_title')
    {{ $caoMovimento->name ?? 'Show Cao Movimento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Movimento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-movimentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Movimento:</strong>
                            {{ $caoMovimento->co_movimento }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoMovimento->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Entrada:</strong>
                            {{ $caoMovimento->dt_entrada }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Saida Almoco:</strong>
                            {{ $caoMovimento->dt_saida_almoco }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Volta Almoco:</strong>
                            {{ $caoMovimento->dt_volta_almoco }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Saida:</strong>
                            {{ $caoMovimento->dt_saida }}
                        </div>
                        <div class="form-group">
                            <strong>Is Encerrado:</strong>
                            {{ $caoMovimento->is_encerrado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
