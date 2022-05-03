<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idocorrencia') }}
            {{ Form::text('idocorrencia', $caoHistOcorrenciasO->idocorrencia, ['class' => 'form-control' . ($errors->has('idocorrencia') ? ' is-invalid' : ''), 'placeholder' => 'Idocorrencia']) }}
            {!! $errors->first('idocorrencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_os') }}
            {{ Form::text('co_os', $caoHistOcorrenciasO->co_os, ['class' => 'form-control' . ($errors->has('co_os') ? ' is-invalid' : ''), 'placeholder' => 'Co Os']) }}
            {!! $errors->first('co_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoHistOcorrenciasO->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('data') }}
            {{ Form::text('data', $caoHistOcorrenciasO->data, ['class' => 'form-control' . ($errors->has('data') ? ' is-invalid' : ''), 'placeholder' => 'Data']) }}
            {!! $errors->first('data', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $caoHistOcorrenciasO->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoHistOcorrenciasO->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('responsavel') }}
            {{ Form::text('responsavel', $caoHistOcorrenciasO->responsavel, ['class' => 'form-control' . ($errors->has('responsavel') ? ' is-invalid' : ''), 'placeholder' => 'Responsavel']) }}
            {!! $errors->first('responsavel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('data_fechamento') }}
            {{ Form::text('data_fechamento', $caoHistOcorrenciasO->data_fechamento, ['class' => 'form-control' . ($errors->has('data_fechamento') ? ' is-invalid' : ''), 'placeholder' => 'Data Fechamento']) }}
            {!! $errors->first('data_fechamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>