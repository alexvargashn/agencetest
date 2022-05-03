@extends('layouts.app')

@section('template_title')
    {{ $caoDocumentacaoCasosUso->name ?? 'Show Cao Documentacao Casos Uso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Documentacao Casos Uso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-documentacao-casos-usos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $caoDocumentacaoCasosUso->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoDocumentacaoCasosUso->co_sistema }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
