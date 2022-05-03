<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoMenuContador->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_menu') }}
            {{ Form::text('co_menu', $caoMenuContador->co_menu, ['class' => 'form-control' . ($errors->has('co_menu') ? ' is-invalid' : ''), 'placeholder' => 'Co Menu']) }}
            {!! $errors->first('co_menu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_pontos') }}
            {{ Form::text('nu_pontos', $caoMenuContador->nu_pontos, ['class' => 'form-control' . ($errors->has('nu_pontos') ? ' is-invalid' : ''), 'placeholder' => 'Nu Pontos']) }}
            {!! $errors->first('nu_pontos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('in_processado') }}
            {{ Form::text('in_processado', $caoMenuContador->in_processado, ['class' => 'form-control' . ($errors->has('in_processado') ? ' is-invalid' : ''), 'placeholder' => 'In Processado']) }}
            {!! $errors->first('in_processado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>