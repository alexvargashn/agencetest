@extends('layouts.app')

@section('template_title')
    Update Cao Atividade Teste
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Atividade Teste</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-atividade-testes.update', $caoAtividadeTeste->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-atividade-teste.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
