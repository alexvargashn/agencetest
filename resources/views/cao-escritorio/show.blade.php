@extends('layouts.app')

@section('template_title')
    {{ $caoEscritorio->name ?? 'Show Cao Escritorio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Escritorio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-escritorios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Escritorio:</strong>
                            {{ $caoEscritorio->co_escritorio }}
                        </div>
                        <div class="form-group">
                            <strong>Local:</strong>
                            {{ $caoEscritorio->local }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
