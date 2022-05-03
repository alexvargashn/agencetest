@extends('layouts.app')

@section('template_title')
    {{ $caoConhecimentoUsuario->name ?? 'Show Cao Conhecimento Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Conhecimento Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-conhecimento-usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoConhecimentoUsuario->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Conhecimento:</strong>
                            {{ $caoConhecimentoUsuario->co_conhecimento }}
                        </div>
                        <div class="form-group">
                            <strong>Nv Conhecimento:</strong>
                            {{ $caoConhecimentoUsuario->nv_conhecimento }}
                        </div>
                        <div class="form-group">
                            <strong>Is Certificado:</strong>
                            {{ $caoConhecimentoUsuario->is_certificado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
