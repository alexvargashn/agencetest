@extends('layouts.app')

@section('template_title')
    {{ $caoDrAtivComp->name ?? 'Show Cao Dr Ativ Comp' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Dr Ativ Comp</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-dr-ativ-comps.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Ativ Comp:</strong>
                            {{ $caoDrAtivComp->id_ativ_comp }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoDrAtivComp->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Data:</strong>
                            {{ $caoDrAtivComp->data }}
                        </div>
                        <div class="form-group">
                            <strong>Assunto:</strong>
                            {{ $caoDrAtivComp->assunto }}
                        </div>
                        <div class="form-group">
                            <strong>Tempo Gasto:</strong>
                            {{ $caoDrAtivComp->tempo_gasto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
