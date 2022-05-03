@extends('layouts.app')

@section('template_title')
    {{ $caoComplemento->name ?? 'Show Cao Complemento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Complemento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-complementos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Complemento:</strong>
                            {{ $caoComplemento->co_complemento }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Complemento:</strong>
                            {{ $caoComplemento->ds_complemento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
