@extends('layouts.app')

@section('template_title')
    {{ $caoMovimentoJustificativa->name ?? 'Show Cao Movimento Justificativa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Movimento Justificativa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-movimento-justificativas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Movimento Justificativa:</strong>
                            {{ $caoMovimentoJustificativa->co_movimento_justificativa }}
                        </div>
                        <div class="form-group">
                            <strong>Co Movimento:</strong>
                            {{ $caoMovimentoJustificativa->co_movimento }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Os:</strong>
                            {{ $caoMovimentoJustificativa->nu_os }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Justificativa:</strong>
                            {{ $caoMovimentoJustificativa->ds_justificativa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
