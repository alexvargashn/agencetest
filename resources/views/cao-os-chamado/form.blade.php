<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_chamado') }}
            {{ Form::text('co_chamado', $caoOsChamado->co_chamado, ['class' => 'form-control' . ($errors->has('co_chamado') ? ' is-invalid' : ''), 'placeholder' => 'Co Chamado']) }}
            {!! $errors->first('co_chamado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoOsChamado->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_os') }}
            {{ Form::text('co_os', $caoOsChamado->co_os, ['class' => 'form-control' . ($errors->has('co_os') ? ' is-invalid' : ''), 'placeholder' => 'Co Os']) }}
            {!! $errors->first('co_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_chamado') }}
            {{ Form::text('ds_chamado', $caoOsChamado->ds_chamado, ['class' => 'form-control' . ($errors->has('ds_chamado') ? ' is-invalid' : ''), 'placeholder' => 'Ds Chamado']) }}
            {!! $errors->first('ds_chamado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_tipo') }}
            {{ Form::text('co_tipo', $caoOsChamado->co_tipo, ['class' => 'form-control' . ($errors->has('co_tipo') ? ' is-invalid' : ''), 'placeholder' => 'Co Tipo']) }}
            {!! $errors->first('co_tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_prioridade') }}
            {{ Form::text('co_prioridade', $caoOsChamado->co_prioridade, ['class' => 'form-control' . ($errors->has('co_prioridade') ? ' is-invalid' : ''), 'placeholder' => 'Co Prioridade']) }}
            {!! $errors->first('co_prioridade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_item') }}
            {{ Form::text('co_item', $caoOsChamado->co_item, ['class' => 'form-control' . ($errors->has('co_item') ? ' is-invalid' : ''), 'placeholder' => 'Co Item']) }}
            {!! $errors->first('co_item', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoOsChamado->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_solucao') }}
            {{ Form::text('ds_solucao', $caoOsChamado->ds_solucao, ['class' => 'form-control' . ($errors->has('ds_solucao') ? ' is-invalid' : ''), 'placeholder' => 'Ds Solucao']) }}
            {!! $errors->first('ds_solucao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tempo') }}
            {{ Form::text('tempo', $caoOsChamado->tempo, ['class' => 'form-control' . ($errors->has('tempo') ? ' is-invalid' : ''), 'placeholder' => 'Tempo']) }}
            {!! $errors->first('tempo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_chamado') }}
            {{ Form::text('dt_chamado', $caoOsChamado->dt_chamado, ['class' => 'form-control' . ($errors->has('dt_chamado') ? ' is-invalid' : ''), 'placeholder' => 'Dt Chamado']) }}
            {!! $errors->first('dt_chamado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $caoOsChamado->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoOsChamado->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_analista') }}
            {{ Form::text('co_analista', $caoOsChamado->co_analista, ['class' => 'form-control' . ($errors->has('co_analista') ? ' is-invalid' : ''), 'placeholder' => 'Co Analista']) }}
            {!! $errors->first('co_analista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $caoOsChamado->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>