@extends('layouts.app')

@section('template_title')
    Create Cao Usuario Dt Disp
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Cao Usuario Dt Disp</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-usuario-dt-disps.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cao-usuario-dt-disp.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
