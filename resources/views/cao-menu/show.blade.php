@extends('layouts.app')

@section('template_title')
    {{ $caoMenu->name ?? 'Show Cao Menu' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Menu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-menus.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Menu:</strong>
                            {{ $caoMenu->co_menu }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Menu:</strong>
                            {{ $caoMenu->ds_menu }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Pagina:</strong>
                            {{ $caoMenu->ds_pagina }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Imagem:</strong>
                            {{ $caoMenu->ds_imagem }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
