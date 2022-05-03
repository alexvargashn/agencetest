<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_movimento_os') }}
            {{ Form::text('co_movimento_os', $caoMovimentoO->co_movimento_os, ['class' => 'form-control' . ($errors->has('co_movimento_os') ? ' is-invalid' : ''), 'placeholder' => 'Co Movimento Os']) }}
            {!! $errors->first('co_movimento_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_os') }}
            {{ Form::text('nu_os', $caoMovimentoO->nu_os, ['class' => 'form-control' . ($errors->has('nu_os') ? ' is-invalid' : ''), 'placeholder' => 'Nu Os']) }}
            {!! $errors->first('nu_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoMovimentoO->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_tipo_movimento') }}
            {{ Form::text('co_tipo_movimento', $caoMovimentoO->co_tipo_movimento, ['class' => 'form-control' . ($errors->has('co_tipo_movimento') ? ' is-invalid' : ''), 'placeholder' => 'Co Tipo Movimento']) }}
            {!! $errors->first('co_tipo_movimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_valor') }}
            {{ Form::text('nu_valor', $caoMovimentoO->nu_valor, ['class' => 'form-control' . ($errors->has('nu_valor') ? ' is-invalid' : ''), 'placeholder' => 'Nu Valor']) }}
            {!! $errors->first('nu_valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_valor') }}
            {{ Form::text('ds_valor', $caoMovimentoO->ds_valor, ['class' => 'form-control' . ($errors->has('ds_valor') ? ' is-invalid' : ''), 'placeholder' => 'Ds Valor']) }}
            {!! $errors->first('ds_valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_obs') }}
            {{ Form::text('usuario_obs', $caoMovimentoO->usuario_obs, ['class' => 'form-control' . ($errors->has('usuario_obs') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Obs']) }}
            {!! $errors->first('usuario_obs', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_ini') }}
            {{ Form::text('dt_ini', $caoMovimentoO->dt_ini, ['class' => 'form-control' . ($errors->has('dt_ini') ? ' is-invalid' : ''), 'placeholder' => 'Dt Ini']) }}
            {!! $errors->first('dt_ini', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_fim') }}
            {{ Form::text('dt_fim', $caoMovimentoO->dt_fim, ['class' => 'form-control' . ($errors->has('dt_fim') ? ' is-invalid' : ''), 'placeholder' => 'Dt Fim']) }}
            {!! $errors->first('dt_fim', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>