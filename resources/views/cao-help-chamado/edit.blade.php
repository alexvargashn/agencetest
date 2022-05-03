@extends('layouts.app')

@section('template_title')
    Update Cao Help Chamado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cao Help Chamado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-help-chamados.update', $caoHelpChamado->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cao-help-chamado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
