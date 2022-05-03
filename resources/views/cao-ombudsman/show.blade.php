@extends('layouts.app')

@section('template_title')
    {{ $caoOmbudsman->name ?? 'Show Cao Ombudsman' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Ombudsman</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-ombudsmen.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtipo:</strong>
                            {{ $caoOmbudsman->idtipo }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategoria:</strong>
                            {{ $caoOmbudsman->idcategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Data:</strong>
                            {{ $caoOmbudsman->data }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $caoOmbudsman->comentario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Escritorio:</strong>
                            {{ $caoOmbudsman->co_escritorio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
