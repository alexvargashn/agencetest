@extends('layouts.app')

@section('template_title')
    Update Cao Feriado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Feriado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-feriados.update', $caoFeriado->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-feriado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
