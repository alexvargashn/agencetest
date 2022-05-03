@extends('layouts.app')

@section('template_title')
    {{ $caoHelpMotivoChamado->name ?? 'Show Cao Help Motivo Chamado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Help Motivo Chamado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-help-motivo-chamados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Motivo:</strong>
                            {{ $caoHelpMotivoChamado->co_motivo }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Motivo:</strong>
                            {{ $caoHelpMotivoChamado->ds_motivo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
