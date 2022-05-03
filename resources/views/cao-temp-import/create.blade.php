@extends('layouts.app')

@section('template_title')
    Create Cao Temp Import
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Cao Temp Import</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-temp-imports.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cao-temp-import.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
