@extends('layouts.app')

@section('template_title')
    {{ $caoAtividade->name ?? 'Show Cao Atividade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Atividade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-atividades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Atividade:</strong>
                            {{ $caoAtividade->co_atividade }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Atividade:</strong>
                            {{ $caoAtividade->ds_atividade }}
                        </div>
                        <div class="form-group">
                            <strong>Co Tipo Usuario:</strong>
                            {{ $caoAtividade->co_tipo_usuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
