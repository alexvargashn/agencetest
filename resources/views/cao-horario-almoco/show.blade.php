@extends('layouts.app')

@section('template_title')
    {{ $caoHorarioAlmoco->name ?? 'Show Cao Horario Almoco' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Horario Almoco</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-horario-almocos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoHorarioAlmoco->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Almoco Saida Hora:</strong>
                            {{ $caoHorarioAlmoco->almoco_saida_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Almoco Volta Hora:</strong>
                            {{ $caoHorarioAlmoco->almoco_volta_hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
