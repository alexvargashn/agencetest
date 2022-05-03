<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_permissao') }}
            {{ Form::text('id_permissao', $caoPermissaoHoraExtra->id_permissao, ['class' => 'form-control' . ($errors->has('id_permissao') ? ' is-invalid' : ''), 'placeholder' => 'Id Permissao']) }}
            {!! $errors->first('id_permissao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_movimento') }}
            {{ Form::text('co_movimento', $caoPermissaoHoraExtra->co_movimento, ['class' => 'form-control' . ($errors->has('co_movimento') ? ' is-invalid' : ''), 'placeholder' => 'Co Movimento']) }}
            {!! $errors->first('co_movimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>