@extends('layouts.app')

@section('template_title')
    {{ $caoObsSistema->name ?? 'Show Cao Obs Sistema' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Obs Sistema</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-obs-sistemas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Obs:</strong>
                            {{ $caoObsSistema->co_obs }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoObsSistema->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoObsSistema->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoObsSistema->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Obs:</strong>
                            {{ $caoObsSistema->dt_obs }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
