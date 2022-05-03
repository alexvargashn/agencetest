<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_cliente') }}
            {{ Form::text('co_cliente', $caoAtividadeReport->co_cliente, ['class' => 'form-control' . ($errors->has('co_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Co Cliente']) }}
            {!! $errors->first('co_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inicio') }}
            {{ Form::text('inicio', $caoAtividadeReport->inicio, ['class' => 'form-control' . ($errors->has('inicio') ? ' is-invalid' : ''), 'placeholder' => 'Inicio']) }}
            {!! $errors->first('inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fim') }}
            {{ Form::text('fim', $caoAtividadeReport->fim, ['class' => 'form-control' . ($errors->has('fim') ? ' is-invalid' : ''), 'placeholder' => 'Fim']) }}
            {!! $errors->first('fim', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lembrete') }}
            {{ Form::text('lembrete', $caoAtividadeReport->lembrete, ['class' => 'form-control' . ($errors->has('lembrete') ? ' is-invalid' : ''), 'placeholder' => 'Lembrete']) }}
            {!! $errors->first('lembrete', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_atividade') }}
            {{ Form::text('co_atividade', $caoAtividadeReport->co_atividade, ['class' => 'form-control' . ($errors->has('co_atividade') ? ' is-invalid' : ''), 'placeholder' => 'Co Atividade']) }}
            {!! $errors->first('co_atividade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_os') }}
            {{ Form::text('co_os', $caoAtividadeReport->co_os, ['class' => 'form-control' . ($errors->has('co_os') ? ' is-invalid' : ''), 'placeholder' => 'Co Os']) }}
            {!! $errors->first('co_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('assunto') }}
            {{ Form::text('assunto', $caoAtividadeReport->assunto, ['class' => 'form-control' . ($errors->has('assunto') ? ' is-invalid' : ''), 'placeholder' => 'Assunto']) }}
            {!! $errors->first('assunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conteudo') }}
            {{ Form::text('conteudo', $caoAtividadeReport->conteudo, ['class' => 'form-control' . ($errors->has('conteudo') ? ' is-invalid' : ''), 'placeholder' => 'Conteudo']) }}
            {!! $errors->first('conteudo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $caoAtividadeReport->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tempo') }}
            {{ Form::text('tempo', $caoAtividadeReport->tempo, ['class' => 'form-control' . ($errors->has('tempo') ? ' is-invalid' : ''), 'placeholder' => 'Tempo']) }}
            {!! $errors->first('tempo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoAtividadeReport->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('data_ativ') }}
            {{ Form::text('data_ativ', $caoAtividadeReport->data_ativ, ['class' => 'form-control' . ($errors->has('data_ativ') ? ' is-invalid' : ''), 'placeholder' => 'Data Ativ']) }}
            {!! $errors->first('data_ativ', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('retorno') }}
            {{ Form::text('retorno', $caoAtividadeReport->retorno, ['class' => 'form-control' . ($errors->has('retorno') ? ' is-invalid' : ''), 'placeholder' => 'Retorno']) }}
            {!! $errors->first('retorno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_fase') }}
            {{ Form::text('co_fase', $caoAtividadeReport->co_fase, ['class' => 'form-control' . ($errors->has('co_fase') ? ' is-invalid' : ''), 'placeholder' => 'Co Fase']) }}
            {!! $errors->first('co_fase', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>