@extends('layouts.app')

@section('template_title')
    Create Cao Banco Hora
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Cao Banco Hora</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-banco-horas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cao-banco-hora.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
