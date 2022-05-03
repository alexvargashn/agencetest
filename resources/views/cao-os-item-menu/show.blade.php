@extends('layouts.app')

@section('template_title')
    {{ $caoOsItemMenu->name ?? 'Show Cao Os Item Menu' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Os Item Menu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-os-item-menus.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Item:</strong>
                            {{ $caoOsItemMenu->co_item }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Item:</strong>
                            {{ $caoOsItemMenu->ds_item }}
                        </div>
                        <div class="form-group">
                            <strong>Co Sistema:</strong>
                            {{ $caoOsItemMenu->co_sistema }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
