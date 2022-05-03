@extends('layouts.app')

@section('template_title')
    {{ $caoNoticium->name ?? 'Show Cao Noticium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Noticium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-noticia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Noticia:</strong>
                            {{ $caoNoticium->co_noticia }}
                        </div>
                        <div class="form-group">
                            <strong>Assunto:</strong>
                            {{ $caoNoticium->assunto }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoNoticium->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $caoNoticium->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoNoticium->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Noticia:</strong>
                            {{ $caoNoticium->dt_noticia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
