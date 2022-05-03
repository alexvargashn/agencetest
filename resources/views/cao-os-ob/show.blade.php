@extends('layouts.app')

@section('template_title')
    {{ $caoOsOb->name ?? 'Show Cao Os Ob' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Os Ob</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-os-obs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Obs:</strong>
                            {{ $caoOsOb->co_obs }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoOsOb->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoOsOb->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoOsOb->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Obs:</strong>
                            {{ $caoOsOb->dt_obs }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
