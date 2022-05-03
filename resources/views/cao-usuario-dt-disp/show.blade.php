@extends('layouts.app')

@section('template_title')
    {{ $caoUsuarioDtDisp->name ?? 'Show Cao Usuario Dt Disp' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Usuario Dt Disp</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-usuario-dt-disps.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Dt Disp:</strong>
                            {{ $caoUsuarioDtDisp->co_dt_disp }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoUsuarioDtDisp->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Disp:</strong>
                            {{ $caoUsuarioDtDisp->dt_disp }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Alt:</strong>
                            {{ $caoUsuarioDtDisp->dt_alt }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
