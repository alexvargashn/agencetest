@extends('layouts.app')

@section('template_title')
    {{ $caoConhecimentosFonte->name ?? 'Show Cao Conhecimentos Fonte' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Conhecimentos Fonte</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-conhecimentos-fontes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idfonte:</strong>
                            {{ $caoConhecimentosFonte->idfonte }}
                        </div>
                        <div class="form-group">
                            <strong>Idconhecimento:</strong>
                            {{ $caoConhecimentosFonte->idconhecimento }}
                        </div>
                        <div class="form-group">
                            <strong>Datahora:</strong>
                            {{ $caoConhecimentosFonte->datahora }}
                        </div>
                        <div class="form-group">
                            <strong>Arquivo:</strong>
                            {{ $caoConhecimentosFonte->arquivo }}
                        </div>
                        <div class="form-group">
                            <strong>Caminho:</strong>
                            {{ $caoConhecimentosFonte->caminho }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
