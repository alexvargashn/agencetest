@extends('layouts.app')

@section('template_title')
    {{ $caoServico->name ?? 'Show Cao Servico' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Servico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-servicos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Servico:</strong>
                            {{ $caoServico->co_servico }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Servico:</strong>
                            {{ $caoServico->ds_servico }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
