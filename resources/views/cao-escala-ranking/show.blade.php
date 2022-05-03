@extends('layouts.app')

@section('template_title')
    {{ $caoEscalaRanking->name ?? 'Show Cao Escala Ranking' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Escala Ranking</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-escala-rankings.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idescala:</strong>
                            {{ $caoEscalaRanking->idescala }}
                        </div>
                        <div class="form-group">
                            <strong>Qtd Visual:</strong>
                            {{ $caoEscalaRanking->qtd_visual }}
                        </div>
                        <div class="form-group">
                            <strong>Pontuacao:</strong>
                            {{ $caoEscalaRanking->pontuacao }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
