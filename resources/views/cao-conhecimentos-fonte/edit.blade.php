@extends('layouts.app')

@section('template_title')
    Update Cao Conhecimentos Fonte
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Conhecimentos Fonte</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-conhecimentos-fontes.update', $caoConhecimentosFonte->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-conhecimentos-fonte.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
