<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_noticia') }}
            {{ Form::text('co_noticia', $caoNoticium->co_noticia, ['class' => 'form-control' . ($errors->has('co_noticia') ? ' is-invalid' : ''), 'placeholder' => 'Co Noticia']) }}
            {!! $errors->first('co_noticia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('assunto') }}
            {{ Form::text('assunto', $caoNoticium->assunto, ['class' => 'form-control' . ($errors->has('assunto') ? ' is-invalid' : ''), 'placeholder' => 'Assunto']) }}
            {!! $errors->first('assunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoNoticium->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto') }}
            {{ Form::text('foto', $caoNoticium->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoNoticium->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_noticia') }}
            {{ Form::text('dt_noticia', $caoNoticium->dt_noticia, ['class' => 'form-control' . ($errors->has('dt_noticia') ? ' is-invalid' : ''), 'placeholder' => 'Dt Noticia']) }}
            {!! $errors->first('dt_noticia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>