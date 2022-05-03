@extends('layouts.app')

@section('template_title')
    {{ $caoStatusClienteComplemento->name ?? 'Show Cao Status Cliente Complemento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Status Cliente Complemento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-status-cliente-complementos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Complemento Status:</strong>
                            {{ $caoStatusClienteComplemento->co_complemento_status }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Status:</strong>
                            {{ $caoStatusClienteComplemento->ds_status }}
                        </div>
                        <div class="form-group">
                            <strong>Co Status:</strong>
                            {{ $caoStatusClienteComplemento->co_status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
