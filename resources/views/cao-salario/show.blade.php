@extends('layouts.app')

@section('template_title')
    {{ $caoSalario->name ?? 'Show Cao Salario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Salario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-salarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoSalario->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Alteracao:</strong>
                            {{ $caoSalario->dt_alteracao }}
                        </div>
                        <div class="form-group">
                            <strong>Brut Salario:</strong>
                            {{ $caoSalario->brut_salario }}
                        </div>
                        <div class="form-group">
                            <strong>Liq Salario:</strong>
                            {{ $caoSalario->liq_salario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
