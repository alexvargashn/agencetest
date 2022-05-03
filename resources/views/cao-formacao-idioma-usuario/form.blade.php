<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoFormacaoIdiomaUsuario->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_idioma') }}
            {{ Form::text('co_idioma', $caoFormacaoIdiomaUsuario->co_idioma, ['class' => 'form-control' . ($errors->has('co_idioma') ? ' is-invalid' : ''), 'placeholder' => 'Co Idioma']) }}
            {!! $errors->first('co_idioma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nv_leitura') }}
            {{ Form::text('nv_leitura', $caoFormacaoIdiomaUsuario->nv_leitura, ['class' => 'form-control' . ($errors->has('nv_leitura') ? ' is-invalid' : ''), 'placeholder' => 'Nv Leitura']) }}
            {!! $errors->first('nv_leitura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nv_escrita') }}
            {{ Form::text('nv_escrita', $caoFormacaoIdiomaUsuario->nv_escrita, ['class' => 'form-control' . ($errors->has('nv_escrita') ? ' is-invalid' : ''), 'placeholder' => 'Nv Escrita']) }}
            {!! $errors->first('nv_escrita', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nv_fala') }}
            {{ Form::text('nv_fala', $caoFormacaoIdiomaUsuario->nv_fala, ['class' => 'form-control' . ($errors->has('nv_fala') ? ' is-invalid' : ''), 'placeholder' => 'Nv Fala']) }}
            {!! $errors->first('nv_fala', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>