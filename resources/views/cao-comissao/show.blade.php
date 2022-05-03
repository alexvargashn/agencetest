@extends('layouts.app')

@section('template_title')
    {{ $caoComissao->name ?? 'Show Cao Comissao' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Comissao</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-comissaos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Comissao:</strong>
                            {{ $caoComissao->co_comissao }}
                        </div>
                        <div class="form-group">
                            <strong>Co Fatura:</strong>
                            {{ $caoComissao->co_fatura }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Efetuado:</strong>
                            {{ $caoComissao->dt_efetuado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
