@extends('layouts.app')

@section('template_title')
    {{ $caoAcompanhamentoSistema->name ?? 'Show Cao Acompanhamento Sistema' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Acompanhamento Sistema</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-acompanhamento-sistemas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Acompanhamento:</strong>
                            {{ $caoAcompanhamentoSistema->co_acompanhamento }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $caoAcompanhamentoSistema->email }}
                        </div>
                        <div class="form-group">
                            <strong>Senha:</strong>
                            {{ $caoAcompanhamentoSistema->senha }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoAcompanhamentoSistema->co_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $caoAcompanhamentoSistema->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
