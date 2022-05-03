@extends('layouts.app')

@section('template_title')
    {{ $caoPermissao->name ?? 'Show Cao Permissao' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Permissao</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-permissaos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoPermissao->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Permissao Intervalo:</strong>
                            {{ $caoPermissao->permissao_intervalo }}
                        </div>
                        <div class="form-group">
                            <strong>Permissao Hora Extra:</strong>
                            {{ $caoPermissao->permissao_hora_extra }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
