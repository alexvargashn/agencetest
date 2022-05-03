<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idtipo') }}
            {{ Form::text('idtipo', $caoOmbudsman->idtipo, ['class' => 'form-control' . ($errors->has('idtipo') ? ' is-invalid' : ''), 'placeholder' => 'Idtipo']) }}
            {!! $errors->first('idtipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcategoria') }}
            {{ Form::text('idcategoria', $caoOmbudsman->idcategoria, ['class' => 'form-control' . ($errors->has('idcategoria') ? ' is-invalid' : ''), 'placeholder' => 'Idcategoria']) }}
            {!! $errors->first('idcategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('data') }}
            {{ Form::text('data', $caoOmbudsman->data, ['class' => 'form-control' . ($errors->has('data') ? ' is-invalid' : ''), 'placeholder' => 'Data']) }}
            {!! $errors->first('data', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentario') }}
            {{ Form::text('comentario', $caoOmbudsman->comentario, ['class' => 'form-control' . ($errors->has('comentario') ? ' is-invalid' : ''), 'placeholder' => 'Comentario']) }}
            {!! $errors->first('comentario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_escritorio') }}
            {{ Form::text('co_escritorio', $caoOmbudsman->co_escritorio, ['class' => 'form-control' . ($errors->has('co_escritorio') ? ' is-invalid' : ''), 'placeholder' => 'Co Escritorio']) }}
            {!! $errors->first('co_escritorio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>