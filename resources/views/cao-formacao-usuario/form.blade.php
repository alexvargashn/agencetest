<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoFormacaoUsuario->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tp_curso') }}
            {{ Form::text('tp_curso', $caoFormacaoUsuario->tp_curso, ['class' => 'form-control' . ($errors->has('tp_curso') ? ' is-invalid' : ''), 'placeholder' => 'Tp Curso']) }}
            {!! $errors->first('tp_curso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_curso') }}
            {{ Form::text('ds_curso', $caoFormacaoUsuario->ds_curso, ['class' => 'form-control' . ($errors->has('ds_curso') ? ' is-invalid' : ''), 'placeholder' => 'Ds Curso']) }}
            {!! $errors->first('ds_curso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_instituicao') }}
            {{ Form::text('ds_instituicao', $caoFormacaoUsuario->ds_instituicao, ['class' => 'form-control' . ($errors->has('ds_instituicao') ? ' is-invalid' : ''), 'placeholder' => 'Ds Instituicao']) }}
            {!! $errors->first('ds_instituicao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_conclusao') }}
            {{ Form::text('dt_conclusao', $caoFormacaoUsuario->dt_conclusao, ['class' => 'form-control' . ($errors->has('dt_conclusao') ? ' is-invalid' : ''), 'placeholder' => 'Dt Conclusao']) }}
            {!! $errors->first('dt_conclusao', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>