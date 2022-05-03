@extends('layouts.app')

@section('template_title')
    {{ $caoAgendamento->name ?? 'Show Cao Agendamento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Agendamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-agendamentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Agendamento:</strong>
                            {{ $caoAgendamento->co_agendamento }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Hr Inicio:</strong>
                            {{ $caoAgendamento->dt_hr_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Hr Fim:</strong>
                            {{ $caoAgendamento->dt_hr_fim }}
                        </div>
                        <div class="form-group">
                            <strong>Co Status Agendamento:</strong>
                            {{ $caoAgendamento->co_status_agendamento }}
                        </div>
                        <div class="form-group">
                            <strong>Co Diary Report Consultor:</strong>
                            {{ $caoAgendamento->co_diary_report_consultor }}
                        </div>
                        <div class="form-group">
                            <strong>Co Complemento:</strong>
                            {{ $caoAgendamento->co_complemento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
