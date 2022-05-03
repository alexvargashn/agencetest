@extends('layouts.app')

@section('template_title')
    {{ $caoArquiteturaO->name ?? 'Show Cao Arquitetura O' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Arquitetura O</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-arquitetura-os.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Arquitetura:</strong>
                            {{ $caoArquiteturaO->co_arquitetura }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Arquitetura:</strong>
                            {{ $caoArquiteturaO->ds_arquitetura }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
