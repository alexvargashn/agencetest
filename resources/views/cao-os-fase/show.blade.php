@extends('layouts.app')

@section('template_title')
    {{ $caoOsFase->name ?? 'Show Cao Os Fase' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Os Fase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-os-fases.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Fase:</strong>
                            {{ $caoOsFase->co_fase }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoOsFase->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao Ingl:</strong>
                            {{ $caoOsFase->descricao_ingl }}
                        </div>
                        <div class="form-group">
                            <strong>Ordem:</strong>
                            {{ $caoOsFase->ordem }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
