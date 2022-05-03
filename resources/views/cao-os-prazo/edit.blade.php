@extends('layouts.app')

@section('template_title')
    Update Cao Os Prazo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Os Prazo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-os-prazos.update', $caoOsPrazo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-os-prazo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
