@extends('layouts.app')

@section('template_title')
    {{ $caoStatusAgendamento->name ?? 'Show Cao Status Agendamento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Status Agendamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-status-agendamentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Status Agendamento:</strong>
                            {{ $caoStatusAgendamento->co_status_agendamento }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Status Agendamento:</strong>
                            {{ $caoStatusAgendamento->ds_status_agendamento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
