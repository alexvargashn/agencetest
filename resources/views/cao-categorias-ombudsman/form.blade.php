<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idcategoria') }}
            {{ Form::text('idcategoria', $caoCategoriasOmbudsman->idcategoria, ['class' => 'form-control' . ($errors->has('idcategoria') ? ' is-invalid' : ''), 'placeholder' => 'Idcategoria']) }}
            {!! $errors->first('idcategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoCategoriasOmbudsman->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>