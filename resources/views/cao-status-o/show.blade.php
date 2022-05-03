@extends('layouts.app')

@section('template_title')
    {{ $caoStatusO->name ?? 'Show Cao Status O' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Status O</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-status-os.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Status Atual:</strong>
                            {{ $caoStatusO->co_status_atual }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Status:</strong>
                            {{ $caoStatusO->ds_status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
