@extends('layouts.app')

@section('template_title')
    {{ $caoPermissaoHoraExtra->name ?? 'Show Cao Permissao Hora Extra' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Permissao Hora Extra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-permissao-hora-extras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Permissao:</strong>
                            {{ $caoPermissaoHoraExtra->id_permissao }}
                        </div>
                        <div class="form-group">
                            <strong>Co Movimento:</strong>
                            {{ $caoPermissaoHoraExtra->co_movimento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
