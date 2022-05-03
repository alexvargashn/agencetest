@extends('layouts.app')

@section('template_title')
    {{ $caoUf->name ?? 'Show Cao Uf' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Uf</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-ufs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Uf:</strong>
                            {{ $caoUf->co_uf }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Uf:</strong>
                            {{ $caoUf->ds_uf }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
