@extends('layouts.app')

@section('template_title')
    {{ $caoSistemaOb->name ?? 'Show Cao Sistema Ob' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Sistema Ob</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-sistema-obs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Obs:</strong>
                            {{ $caoSistemaOb->co_obs }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoSistemaOb->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoSistemaOb->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoSistemaOb->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Obs:</strong>
                            {{ $caoSistemaOb->dt_obs }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
