<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoPermissao->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('permissao_intervalo') }}
            {{ Form::text('permissao_intervalo', $caoPermissao->permissao_intervalo, ['class' => 'form-control' . ($errors->has('permissao_intervalo') ? ' is-invalid' : ''), 'placeholder' => 'Permissao Intervalo']) }}
            {!! $errors->first('permissao_intervalo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('permissao_hora_extra') }}
            {{ Form::text('permissao_hora_extra', $caoPermissao->permissao_hora_extra, ['class' => 'form-control' . ($errors->has('permissao_hora_extra') ? ' is-invalid' : ''), 'placeholder' => 'Permissao Hora Extra']) }}
            {!! $errors->first('permissao_hora_extra', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>