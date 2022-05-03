@extends('layouts.app')

@section('template_title')
    Create Cao Escala Ranking
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Cao Escala Ranking</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cao-escala-rankings.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cao-escala-ranking.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
