@extends('layouts.app')

@section('template_title')
    {{ $caoDocumentacaoSistema->name ?? 'Show Cao Documentacao Sistema' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Documentacao Sistema</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-documentacao-sistemas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoDocumentacaoSistema->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoDocumentacaoSistema->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Pasta:</strong>
                            {{ $caoDocumentacaoSistema->pasta }}
                        </div>
                        <div class="form-group">
                            <strong>Sub Grupo:</strong>
                            {{ $caoDocumentacaoSistema->sub_grupo }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoDocumentacaoSistema->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Doc:</strong>
                            {{ $caoDocumentacaoSistema->dt_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Arquivo:</strong>
                            {{ $caoDocumentacaoSistema->arquivo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
