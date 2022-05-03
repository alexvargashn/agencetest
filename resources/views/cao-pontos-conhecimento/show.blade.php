@extends('layouts.app')

@section('template_title')
    {{ $caoPontosConhecimento->name ?? 'Show Cao Pontos Conhecimento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Pontos Conhecimento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-pontos-conhecimentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idpontos:</strong>
                            {{ $caoPontosConhecimento->idpontos }}
                        </div>
                        <div class="form-group">
                            <strong>Pontuacao:</strong>
                            {{ $caoPontosConhecimento->pontuacao }}
                        </div>
                        <div class="form-group">
                            <strong>Co Coordenador:</strong>
                            {{ $caoPontosConhecimento->co_coordenador }}
                        </div>
                        <div class="form-group">
                            <strong>Idconhecimento:</strong>
                            {{ $caoPontosConhecimento->idconhecimento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
