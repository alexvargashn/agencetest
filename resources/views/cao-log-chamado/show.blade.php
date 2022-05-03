@extends('layouts.app')

@section('template_title')
    {{ $caoLogChamado->name ?? 'Show Cao Log Chamado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Log Chamado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-log-chamados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Chamado:</strong>
                            {{ $caoLogChamado->co_chamado }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Chamado:</strong>
                            {{ $caoLogChamado->dt_chamado }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoLogChamado->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Daily:</strong>
                            {{ $caoLogChamado->co_daily }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
