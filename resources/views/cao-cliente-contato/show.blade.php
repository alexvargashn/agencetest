@extends('layouts.app')

@section('template_title')
    {{ $caoClienteContato->name ?? 'Show Cao Cliente Contato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Cliente Contato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-cliente-contatos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Cliente:</strong>
                            {{ $caoClienteContato->co_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Contato:</strong>
                            {{ $caoClienteContato->dt_contato }}
                        </div>
                        <div class="form-group">
                            <strong>Fg Agendado:</strong>
                            {{ $caoClienteContato->fg_agendado }}
                        </div>
                        <div class="form-group">
                            <strong>Hr Ini:</strong>
                            {{ $caoClienteContato->hr_ini }}
                        </div>
                        <div class="form-group">
                            <strong>Hr End:</strong>
                            {{ $caoClienteContato->hr_end }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
