@extends('layouts.app')

@section('template_title')
    {{ $caoBonusStatus->name ?? 'Show Cao Bonus Status' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Bonus Status</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-bonus-statuses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoBonusStatus->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Data Solic:</strong>
                            {{ $caoBonusStatus->data_solic }}
                        </div>
                        <div class="form-group">
                            <strong>Mes:</strong>
                            {{ $caoBonusStatus->mes }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $caoBonusStatus->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Is Solic:</strong>
                            {{ $caoBonusStatus->is_solic }}
                        </div>
                        <div class="form-group">
                            <strong>Is Pg:</strong>
                            {{ $caoBonusStatus->is_pg }}
                        </div>
                        <div class="form-group">
                            <strong>Is Horas:</strong>
                            {{ $caoBonusStatus->is_horas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
