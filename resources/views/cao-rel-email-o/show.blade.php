@extends('layouts.app')

@section('template_title')
    {{ $caoRelEmailO->name ?? 'Show Cao Rel Email O' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Rel Email O</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-rel-email-os.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Email:</strong>
                            {{ $caoRelEmailO->co_email }}
                        </div>
                        <div class="form-group">
                            <strong>Co Os:</strong>
                            {{ $caoRelEmailO->co_os }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
