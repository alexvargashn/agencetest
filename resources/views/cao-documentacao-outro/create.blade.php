@extends('layouts.app')

@section('template_title')
    Create Cao Documentacao Outro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Cao Documentacao Outro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-documentacao-outros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cao-documentacao-outro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
