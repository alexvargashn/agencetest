<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_obs') }}
            {{ Form::text('co_obs', $caoObsSistema->co_obs, ['class' => 'form-control' . ($errors->has('co_obs') ? ' is-invalid' : ''), 'placeholder' => 'Co Obs']) }}
            {!! $errors->first('co_obs', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoObsSistema->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoObsSistema->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoObsSistema->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_obs') }}
            {{ Form::text('dt_obs', $caoObsSistema->dt_obs, ['class' => 'form-control' . ($errors->has('dt_obs') ? ' is-invalid' : ''), 'placeholder' => 'Dt Obs']) }}
            {!! $errors->first('dt_obs', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>