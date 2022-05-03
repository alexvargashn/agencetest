@extends('layouts.app')

@section('template_title')
    {{ $caoHelpAutor->name ?? 'Show Cao Help Autor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Help Autor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-help-autors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Autor:</strong>
                            {{ $caoHelpAutor->co_autor }}
                        </div>
                        <div class="form-group">
                            <strong>No Autor:</strong>
                            {{ $caoHelpAutor->no_autor }}
                        </div>
                        <div class="form-group">
                            <strong>Co Filial:</strong>
                            {{ $caoHelpAutor->co_filial }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Ddd1:</strong>
                            {{ $caoHelpAutor->nu_ddd1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Tel1:</strong>
                            {{ $caoHelpAutor->nu_tel1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Ramal1:</strong>
                            {{ $caoHelpAutor->nu_ramal1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Ddd2:</strong>
                            {{ $caoHelpAutor->nu_ddd2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Tel2:</strong>
                            {{ $caoHelpAutor->nu_tel2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Ramal2:</strong>
                            {{ $caoHelpAutor->nu_ramal2 }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Email:</strong>
                            {{ $caoHelpAutor->ds_email }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Funcao:</strong>
                            {{ $caoHelpAutor->ds_funcao }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
