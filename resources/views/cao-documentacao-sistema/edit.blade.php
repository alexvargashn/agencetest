@extends('layouts.app')

@section('template_title')
    Update Cao Documentacao Sistema
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Documentacao Sistema</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-documentacao-sistemas.update', $caoDocumentacaoSistema->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-documentacao-sistema.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection