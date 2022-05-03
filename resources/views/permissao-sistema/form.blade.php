<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $permissaoSistema->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_tipo_usuario') }}
            {{ Form::text('co_tipo_usuario', $permissaoSistema->co_tipo_usuario, ['class' => 'form-control' . ($errors->has('co_tipo_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Tipo Usuario']) }}
            {!! $errors->first('co_tipo_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $permissaoSistema->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('in_ativo') }}
            {{ Form::text('in_ativo', $permissaoSistema->in_ativo, ['class' => 'form-control' . ($errors->has('in_ativo') ? ' is-invalid' : ''), 'placeholder' => 'In Ativo']) }}
            {!! $errors->first('in_ativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario_atualizacao') }}
            {{ Form::text('co_usuario_atualizacao', $permissaoSistema->co_usuario_atualizacao, ['class' => 'form-control' . ($errors->has('co_usuario_atualizacao') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario Atualizacao']) }}
            {!! $errors->first('co_usuario_atualizacao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_atualizacao') }}
            {{ Form::text('dt_atualizacao', $permissaoSistema->dt_atualizacao, ['class' => 'form-control' . ($errors->has('dt_atualizacao') ? ' is-invalid' : ''), 'placeholder' => 'Dt Atualizacao']) }}
            {!! $errors->first('dt_atualizacao', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>