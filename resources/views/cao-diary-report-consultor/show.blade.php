@extends('layouts.app')

@section('template_title')
    {{ $caoDiaryReportConsultor->name ?? 'Show Cao Diary Report Consultor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Diary Report Consultor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-diary-report-consultors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Diary Report Consultor:</strong>
                            {{ $caoDiaryReportConsultor->co_diary_report_consultor }}
                        </div>
                        <div class="form-group">
                            <strong>Co Movimento:</strong>
                            {{ $caoDiaryReportConsultor->co_movimento }}
                        </div>
                        <div class="form-group">
                            <strong>Co Atividade:</strong>
                            {{ $caoDiaryReportConsultor->co_atividade }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Empresa:</strong>
                            {{ $caoDiaryReportConsultor->ds_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Assunto:</strong>
                            {{ $caoDiaryReportConsultor->ds_assunto }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Agendamento:</strong>
                            {{ $caoDiaryReportConsultor->dt_agendamento }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Agendamento Fim:</strong>
                            {{ $caoDiaryReportConsultor->dt_agendamento_fim }}
                        </div>
                        <div class="form-group">
                            <strong>Vl Fechamento:</strong>
                            {{ $caoDiaryReportConsultor->vl_fechamento }}
                        </div>
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoDiaryReportConsultor->co_cliente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
