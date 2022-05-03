@extends('layouts.app')

@section('template_title')
    Update Cao Atividade Consultor
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Atividade Consultor</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-atividade-consultors.update', $caoAtividadeConsultor->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-atividade-consultor.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
