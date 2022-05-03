<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idtipo') }}
            {{ Form::text('idtipo', $caoTipoOmbudsman->idtipo, ['class' => 'form-control' . ($errors->has('idtipo') ? ' is-invalid' : ''), 'placeholder' => 'Idtipo']) }}
            {!! $errors->first('idtipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoTipoOmbudsman->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>