<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_tipo_usuario') }}
            {{ Form::text('co_tipo_usuario', $tipoUsuario->co_tipo_usuario, ['class' => 'form-control' . ($errors->has('co_tipo_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Tipo Usuario']) }}
            {!! $errors->first('co_tipo_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_tipo_usuario') }}
            {{ Form::text('ds_tipo_usuario', $tipoUsuario->ds_tipo_usuario, ['class' => 'form-control' . ($errors->has('ds_tipo_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Ds Tipo Usuario']) }}
            {!! $errors->first('ds_tipo_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $tipoUsuario->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>