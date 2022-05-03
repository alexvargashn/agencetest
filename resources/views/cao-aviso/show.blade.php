@extends('layouts.app')

@section('template_title')
    {{ $caoAviso->name ?? 'Show Cao Aviso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Aviso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-avisos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Aviso:</strong>
                            {{ $caoAviso->co_aviso }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Aviso:</strong>
                            {{ $caoAviso->ds_aviso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
