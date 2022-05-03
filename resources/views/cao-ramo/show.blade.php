@extends('layouts.app')

@section('template_title')
    {{ $caoRamo->name ?? 'Show Cao Ramo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Ramo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-ramos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Ramo:</strong>
                            {{ $caoRamo->co_ramo }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Ramo:</strong>
                            {{ $caoRamo->ds_ramo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
