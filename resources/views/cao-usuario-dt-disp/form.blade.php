<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_dt_disp') }}
            {{ Form::text('co_dt_disp', $caoUsuarioDtDisp->co_dt_disp, ['class' => 'form-control' . ($errors->has('co_dt_disp') ? ' is-invalid' : ''), 'placeholder' => 'Co Dt Disp']) }}
            {!! $errors->first('co_dt_disp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoUsuarioDtDisp->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_disp') }}
            {{ Form::text('dt_disp', $caoUsuarioDtDisp->dt_disp, ['class' => 'form-control' . ($errors->has('dt_disp') ? ' is-invalid' : ''), 'placeholder' => 'Dt Disp']) }}
            {!! $errors->first('dt_disp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_alt') }}
            {{ Form::text('dt_alt', $caoUsuarioDtDisp->dt_alt, ['class' => 'form-control' . ($errors->has('dt_alt') ? ' is-invalid' : ''), 'placeholder' => 'Dt Alt']) }}
            {!! $errors->first('dt_alt', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>