@extends('layouts.app')

@section('template_title')
    Update Cao Diary Report
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Diary Report</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-diary-reports.update', $caoDiaryReport->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-diary-report.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
