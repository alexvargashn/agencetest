@extends('layouts.app')

@section('template_title')
    {{ $caoOsAnalistum->name ?? 'Show Cao Os Analistum' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Os Analistum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-os-analista.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Analista:</strong>
                            {{ $caoOsAnalistum->co_analista }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoOsAnalistum->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoOsAnalistum->co_usuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
