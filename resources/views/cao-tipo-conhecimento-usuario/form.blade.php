<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_conhecimento') }}
            {{ Form::text('co_conhecimento', $caoTipoConhecimentoUsuario->co_conhecimento, ['class' => 'form-control' . ($errors->has('co_conhecimento') ? ' is-invalid' : ''), 'placeholder' => 'Co Conhecimento']) }}
            {!! $errors->first('co_conhecimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_conhecimento') }}
            {{ Form::text('ds_conhecimento', $caoTipoConhecimentoUsuario->ds_conhecimento, ['class' => 'form-control' . ($errors->has('ds_conhecimento') ? ' is-invalid' : ''), 'placeholder' => 'Ds Conhecimento']) }}
            {!! $errors->first('ds_conhecimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoTipoConhecimentoUsuario->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>