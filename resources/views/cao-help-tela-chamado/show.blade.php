@extends('layouts.app')

@section('template_title')
    {{ $caoHelpTelaChamado->name ?? 'Show Cao Help Tela Chamado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Help Tela Chamado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-help-tela-chamados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Tela:</strong>
                            {{ $caoHelpTelaChamado->co_tela }}
                        </div>
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoHelpTelaChamado->co_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoHelpTelaChamado->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Tela:</strong>
                            {{ $caoHelpTelaChamado->ds_tela }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
