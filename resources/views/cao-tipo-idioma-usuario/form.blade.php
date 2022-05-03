<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_idioma') }}
            {{ Form::text('co_idioma', $caoTipoIdiomaUsuario->co_idioma, ['class' => 'form-control' . ($errors->has('co_idioma') ? ' is-invalid' : ''), 'placeholder' => 'Co Idioma']) }}
            {!! $errors->first('co_idioma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_idioma') }}
            {{ Form::text('ds_idioma', $caoTipoIdiomaUsuario->ds_idioma, ['class' => 'form-control' . ($errors->has('ds_idioma') ? ' is-invalid' : ''), 'placeholder' => 'Ds Idioma']) }}
            {!! $errors->first('ds_idioma', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>