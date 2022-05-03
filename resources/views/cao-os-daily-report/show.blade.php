@extends('layouts.app')

@section('template_title')
    {{ $caoOsDailyReport->name ?? 'Show Cao Os Daily Report' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Os Daily Report</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-os-daily-reports.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Daily:</strong>
                            {{ $caoOsDailyReport->co_daily }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoOsDailyReport->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Co Fase:</strong>
                            {{ $caoOsDailyReport->co_fase }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoOsDailyReport->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Assunto:</strong>
                            {{ $caoOsDailyReport->ds_assunto }}
                        </div>
                        <div class="form-group">
                            <strong>Tempo Gasto:</strong>
                            {{ $caoOsDailyReport->tempo_gasto }}
                        </div>
                        <div class="form-group">
                            <strong>Data:</strong>
                            {{ $caoOsDailyReport->data }}
                        </div>
                        <div class="form-group">
                            <strong>Co Status Atual:</strong>
                            {{ $caoOsDailyReport->co_status_atual }}
                        </div>
                        <div class="form-group">
                            <strong>Co Chamado:</strong>
                            {{ $caoOsDailyReport->co_chamado }}
                        </div>
                        <div class="form-group">
                            <strong>Co Atividade:</strong>
                            {{ $caoOsDailyReport->co_atividade }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
