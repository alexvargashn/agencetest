@extends('layouts.app')

@section('template_title')
    Update Cao Usuario Dt Disp
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Usuario Dt Disp</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-usuario-dt-disps.update', $caoUsuarioDtDisp->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-usuario-dt-disp.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
