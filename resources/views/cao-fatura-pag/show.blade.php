@extends('layouts.app')

@section('template_title')
    {{ $caoFaturaPag->name ?? 'Show Cao Fatura Pag' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Fatura Pag</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-fatura-pags.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Fatura Pag:</strong>
                            {{ $caoFaturaPag->id_fatura_pag }}
                        </div>
                        <div class="form-group">
                            <strong>Co Fatura:</strong>
                            {{ $caoFaturaPag->co_fatura }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Efetuado:</strong>
                            {{ $caoFaturaPag->dt_efetuado }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Pago:</strong>
                            {{ $caoFaturaPag->valor_pago }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
