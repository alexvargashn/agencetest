@extends('layouts.app')

@section('template_title')
    {{ $caoTipoConhecimentoUsuario->name ?? 'Show Cao Tipo Conhecimento Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Tipo Conhecimento Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-tipo-conhecimento-usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Conhecimento:</strong>
                            {{ $caoTipoConhecimentoUsuario->co_conhecimento }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Conhecimento:</strong>
                            {{ $caoTipoConhecimentoUsuario->ds_conhecimento }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoTipoConhecimentoUsuario->co_sistema }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
