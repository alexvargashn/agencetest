@extends('layouts.app')

@section('template_title')
    {{ $caoDiaryReport->name ?? 'Show Cao Diary Report' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Diary Report</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-diary-reports.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Diary Report:</strong>
                            {{ $caoDiaryReport->co_diary_report }}
                        </div>
                        <div class="form-group">
                            <strong>Hr Gasta:</strong>
                            {{ $caoDiaryReport->hr_gasta }}
                        </div>
                        <div class="form-group">
                            <strong>Co Atividade:</strong>
                            {{ $caoDiaryReport->co_atividade }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Assunto:</strong>
                            {{ $caoDiaryReport->ds_assunto }}
                        </div>
                        <div class="form-group">
                            <strong>Co Movimento:</strong>
                            {{ $caoDiaryReport->co_movimento }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Os:</strong>
                            {{ $caoDiaryReport->nu_os }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoDiaryReport->co_sistema }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
