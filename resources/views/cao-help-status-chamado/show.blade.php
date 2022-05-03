@extends('layouts.app')

@section('template_title')
    {{ $caoHelpStatusChamado->name ?? 'Show Cao Help Status Chamado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Help Status Chamado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-help-status-chamados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Status:</strong>
                            {{ $caoHelpStatusChamado->co_status }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Status:</strong>
                            {{ $caoHelpStatusChamado->ds_status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
