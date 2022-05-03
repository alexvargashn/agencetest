<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_chamado') }}
            {{ Form::text('co_chamado', $caoLogChamado->co_chamado, ['class' => 'form-control' . ($errors->has('co_chamado') ? ' is-invalid' : ''), 'placeholder' => 'Co Chamado']) }}
            {!! $errors->first('co_chamado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_chamado') }}
            {{ Form::text('dt_chamado', $caoLogChamado->dt_chamado, ['class' => 'form-control' . ($errors->has('dt_chamado') ? ' is-invalid' : ''), 'placeholder' => 'Dt Chamado']) }}
            {!! $errors->first('dt_chamado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoLogChamado->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_daily') }}
            {{ Form::text('co_daily', $caoLogChamado->co_daily, ['class' => 'form-control' . ($errors->has('co_daily') ? ' is-invalid' : ''), 'placeholder' => 'Co Daily']) }}
            {!! $errors->first('co_daily', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>