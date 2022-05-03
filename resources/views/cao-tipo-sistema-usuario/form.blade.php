<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoTipoSistemaUsuario->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_sistema') }}
            {{ Form::text('ds_sistema', $caoTipoSistemaUsuario->ds_sistema, ['class' => 'form-control' . ($errors->has('ds_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Ds Sistema']) }}
            {!! $errors->first('ds_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>