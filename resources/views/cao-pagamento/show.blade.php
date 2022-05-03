@extends('layouts.app')

@section('template_title')
    {{ $caoPagamento->name ?? 'Show Cao Pagamento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Pagamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-pagamentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Pagamento:</strong>
                            {{ $caoPagamento->co_pagamento }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoPagamento->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Tp Pagamento:</strong>
                            {{ $caoPagamento->tp_pagamento }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Pagamento:</strong>
                            {{ $caoPagamento->dt_pagamento }}
                        </div>
                        <div class="form-group">
                            <strong>Vl Pagamento:</strong>
                            {{ $caoPagamento->vl_pagamento }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Referencia Pagamento:</strong>
                            {{ $caoPagamento->dt_referencia_pagamento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
