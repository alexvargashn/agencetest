<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoDocumentacaoSistema->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoDocumentacaoSistema->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pasta') }}
            {{ Form::text('pasta', $caoDocumentacaoSistema->pasta, ['class' => 'form-control' . ($errors->has('pasta') ? ' is-invalid' : ''), 'placeholder' => 'Pasta']) }}
            {!! $errors->first('pasta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sub_grupo') }}
            {{ Form::text('sub_grupo', $caoDocumentacaoSistema->sub_grupo, ['class' => 'form-control' . ($errors->has('sub_grupo') ? ' is-invalid' : ''), 'placeholder' => 'Sub Grupo']) }}
            {!! $errors->first('sub_grupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoDocumentacaoSistema->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_doc') }}
            {{ Form::text('dt_doc', $caoDocumentacaoSistema->dt_doc, ['class' => 'form-control' . ($errors->has('dt_doc') ? ' is-invalid' : ''), 'placeholder' => 'Dt Doc']) }}
            {!! $errors->first('dt_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('arquivo') }}
            {{ Form::text('arquivo', $caoDocumentacaoSistema->arquivo, ['class' => 'form-control' . ($errors->has('arquivo') ? ' is-invalid' : ''), 'placeholder' => 'Arquivo']) }}
            {!! $errors->first('arquivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>