@extends('layouts.app')

@section('template_title')
    {{ $caoConhecimento->name ?? 'Show Cao Conhecimento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Conhecimento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-conhecimentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idconhecimento:</strong>
                            {{ $caoConhecimento->idconhecimento }}
                        </div>
                        <div class="form-group">
                            <strong>Assunto:</strong>
                            {{ $caoConhecimento->assunto }}
                        </div>
                        <div class="form-group">
                            <strong>Conhecimento:</strong>
                            {{ $caoConhecimento->conhecimento }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $caoConhecimento->url }}
                        </div>
                        <div class="form-group">
                            <strong>Tags:</strong>
                            {{ $caoConhecimento->tags }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $caoConhecimento->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Datahora:</strong>
                            {{ $caoConhecimento->datahora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
