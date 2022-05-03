@extends('layouts.app')

@section('template_title')
    {{ $caoTipoCusto->name ?? 'Show Cao Tipo Custo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Tipo Custo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-tipo-custos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Tipo Custo:</strong>
                            {{ $caoTipoCusto->co_tipo_custo }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoTipoCusto->descricao }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
