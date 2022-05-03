@extends('layouts.app')

@section('template_title')
    {{ $caoHelpFilial->name ?? 'Show Cao Help Filial' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Help Filial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-help-filials.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Filial:</strong>
                            {{ $caoHelpFilial->co_filial }}
                        </div>
                        <div class="form-group">
                            <strong>No Filial:</strong>
                            {{ $caoHelpFilial->no_filial }}
                        </div>
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoHelpFilial->co_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $caoHelpFilial->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
