<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoConhecimentoUsuario->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_conhecimento') }}
            {{ Form::text('co_conhecimento', $caoConhecimentoUsuario->co_conhecimento, ['class' => 'form-control' . ($errors->has('co_conhecimento') ? ' is-invalid' : ''), 'placeholder' => 'Co Conhecimento']) }}
            {!! $errors->first('co_conhecimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nv_conhecimento') }}
            {{ Form::text('nv_conhecimento', $caoConhecimentoUsuario->nv_conhecimento, ['class' => 'form-control' . ($errors->has('nv_conhecimento') ? ' is-invalid' : ''), 'placeholder' => 'Nv Conhecimento']) }}
            {!! $errors->first('nv_conhecimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_certificado') }}
            {{ Form::text('is_certificado', $caoConhecimentoUsuario->is_certificado, ['class' => 'form-control' . ($errors->has('is_certificado') ? ' is-invalid' : ''), 'placeholder' => 'Is Certificado']) }}
            {!! $errors->first('is_certificado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>