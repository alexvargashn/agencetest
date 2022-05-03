@extends('layouts.app')

@section('template_title')
    {{ $caoHistOcorrenciasO->name ?? 'Show Cao Hist Ocorrencias O' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Hist Ocorrencias O</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-hist-ocorrencias-os.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idocorrencia:</strong>
                            {{ $caoHistOcorrenciasO->idocorrencia }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoHistOcorrenciasO->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoHistOcorrenciasO->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Data:</strong>
                            {{ $caoHistOcorrenciasO->data }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $caoHistOcorrenciasO->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $caoHistOcorrenciasO->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Responsavel:</strong>
                            {{ $caoHistOcorrenciasO->responsavel }}
                        </div>
                        <div class="form-group">
                            <strong>Data Fechamento:</strong>
                            {{ $caoHistOcorrenciasO->data_fechamento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
