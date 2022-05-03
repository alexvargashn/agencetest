<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_obs') }}
            {{ Form::text('co_obs', $caoOsObsChamado->co_obs, ['class' => 'form-control' . ($errors->has('co_obs') ? ' is-invalid' : ''), 'placeholder' => 'Co Obs']) }}
            {!! $errors->first('co_obs', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_chamado') }}
            {{ Form::text('co_chamado', $caoOsObsChamado->co_chamado, ['class' => 'form-control' . ($errors->has('co_chamado') ? ' is-invalid' : ''), 'placeholder' => 'Co Chamado']) }}
            {!! $errors->first('co_chamado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoOsObsChamado->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoOsObsChamado->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_obs') }}
            {{ Form::text('dt_obs', $caoOsObsChamado->dt_obs, ['class' => 'form-control' . ($errors->has('dt_obs') ? ' is-invalid' : ''), 'placeholder' => 'Dt Obs']) }}
            {!! $errors->first('dt_obs', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $caoOsObsChamado->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('arquivo_obs') }}
            {{ Form::text('arquivo_obs', $caoOsObsChamado->arquivo_obs, ['class' => 'form-control' . ($errors->has('arquivo_obs') ? ' is-invalid' : ''), 'placeholder' => 'Arquivo Obs']) }}
            {!! $errors->first('arquivo_obs', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>