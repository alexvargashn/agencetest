@extends('layouts.app')

@section('template_title')
    {{ $caoOsEmail->name ?? 'Show Cao Os Email' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Os Email</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-os-emails.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Email:</strong>
                            {{ $caoOsEmail->co_email }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoOsEmail->co_os }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $caoOsEmail->email }}
                        </div>
                        <div class="form-group">
                            <strong>Senha:</strong>
                            {{ $caoOsEmail->senha }}
                        </div>
                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $caoOsEmail->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoOsEmail->co_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Ativo:</strong>
                            {{ $caoOsEmail->ativo }}
                        </div>
                        <div class="form-group">
                            <strong>Ddd:</strong>
                            {{ $caoOsEmail->ddd }}
                        </div>
                        <div class="form-group">
                            <strong>Tel:</strong>
                            {{ $caoOsEmail->tel }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $caoOsEmail->cargo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
