@extends('layouts.app')

@section('template_title')
    Update Cao Os Ob
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Os Ob</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-os-obs.update', $caoOsOb->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-os-ob.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
