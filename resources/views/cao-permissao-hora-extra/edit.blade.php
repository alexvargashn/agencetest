@extends('layouts.app')

@section('template_title')
    Update Cao Permissao Hora Extra
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Permissao Hora Extra</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-permissao-hora-extras.update', $caoPermissaoHoraExtra->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-permissao-hora-extra.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
