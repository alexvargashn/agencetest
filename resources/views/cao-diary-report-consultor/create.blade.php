@extends('layouts.app')

@section('template_title')
    Create Cao Diary Report Consultor
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Cao Diary Report Consultor</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-diary-report-consultors.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cao-diary-report-consultor.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
