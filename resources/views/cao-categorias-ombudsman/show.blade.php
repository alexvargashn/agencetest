@extends('layouts.app')

@section('template_title')
    {{ $caoCategoriasOmbudsman->name ?? 'Show Cao Categorias Ombudsman' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Categorias Ombudsman</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-categorias-ombudsmen.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcategoria:</strong>
                            {{ $caoCategoriasOmbudsman->idcategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoCategoriasOmbudsman->descricao }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
