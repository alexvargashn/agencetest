@extends('layouts.app')

@section('template_title')
    {{ $caoCidade->name ?? 'Show Cao Cidade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Cidade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-cidades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Cidade:</strong>
                            {{ $caoCidade->co_cidade }}
                        </div>
                        <div class="form-group">
                            <strong>No Cidade:</strong>
                            {{ $caoCidade->no_cidade }}
                        </div>
                        <div class="form-group">
                            <strong>Co Uf:</strong>
                            {{ $caoCidade->co_uf }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
