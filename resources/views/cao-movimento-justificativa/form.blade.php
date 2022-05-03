<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_movimento_justificativa') }}
            {{ Form::text('co_movimento_justificativa', $caoMovimentoJustificativa->co_movimento_justificativa, ['class' => 'form-control' . ($errors->has('co_movimento_justificativa') ? ' is-invalid' : ''), 'placeholder' => 'Co Movimento Justificativa']) }}
            {!! $errors->first('co_movimento_justificativa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_movimento') }}
            {{ Form::text('co_movimento', $caoMovimentoJustificativa->co_movimento, ['class' => 'form-control' . ($errors->has('co_movimento') ? ' is-invalid' : ''), 'placeholder' => 'Co Movimento']) }}
            {!! $errors->first('co_movimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_os') }}
            {{ Form::text('nu_os', $caoMovimentoJustificativa->nu_os, ['class' => 'form-control' . ($errors->has('nu_os') ? ' is-invalid' : ''), 'placeholder' => 'Nu Os']) }}
            {!! $errors->first('nu_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_justificativa') }}
            {{ Form::text('ds_justificativa', $caoMovimentoJustificativa->ds_justificativa, ['class' => 'form-control' . ($errors->has('ds_justificativa') ? ' is-invalid' : ''), 'placeholder' => 'Ds Justificativa']) }}
            {!! $errors->first('ds_justificativa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>