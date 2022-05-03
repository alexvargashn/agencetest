@extends('layouts.app')

@section('template_title')
    {{ $caoAtividadeReport->name ?? 'Show Cao Atividade Report' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Atividade Report</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-atividade-reports.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoAtividadeReport->co_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Inicio:</strong>
                            {{ $caoAtividadeReport->inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fim:</strong>
                            {{ $caoAtividadeReport->fim }}
                        </div>
                        <div class="form-group">
                            <strong>Lembrete:</strong>
                            {{ $caoAtividadeReport->lembrete }}
                        </div>
                        <div class="form-group">
                            <strong>Co Atividade:</strong>
                            {{ $caoAtividadeReport->co_atividade }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoAtividadeReport->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Assunto:</strong>
                            {{ $caoAtividadeReport->assunto }}
                        </div>
                        <div class="form-group">
                            <strong>Conteudo:</strong>
                            {{ $caoAtividadeReport->conteudo }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $caoAtividadeReport->status }}
                        </div>
                        <div class="form-group">
                            <strong>Tempo:</strong>
                            {{ $caoAtividadeReport->tempo }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoAtividadeReport->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Data Ativ:</strong>
                            {{ $caoAtividadeReport->data_ativ }}
                        </div>
                        <div class="form-group">
                            <strong>Retorno:</strong>
                            {{ $caoAtividadeReport->retorno }}
                        </div>
                        <div class="form-group">
                            <strong>Co Fase:</strong>
                            {{ $caoAtividadeReport->co_fase }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
