@extends('layouts.app')

@section('template_title')
    {{ $caoMenuContador->name ?? 'Show Cao Menu Contador' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Menu Contador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-menu-contadors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoMenuContador->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Co Menu:</strong>
                            {{ $caoMenuContador->co_menu }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Pontos:</strong>
                            {{ $caoMenuContador->nu_pontos }}
                        </div>
                        <div class="form-group">
                            <strong>In Processado:</strong>
                            {{ $caoMenuContador->in_processado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
