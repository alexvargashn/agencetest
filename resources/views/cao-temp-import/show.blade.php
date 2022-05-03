@extends('layouts.app')

@section('template_title')
    {{ $caoTempImport->name ?? 'Show Cao Temp Import' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Temp Import</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-temp-imports.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $caoTempImport->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoTempImport->descricao }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
