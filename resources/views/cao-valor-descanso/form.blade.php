<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoValorDescanso->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundos') }}
            {{ Form::text('segundos', $caoValorDescanso->segundos, ['class' => 'form-control' . ($errors->has('segundos') ? ' is-invalid' : ''), 'placeholder' => 'Segundos']) }}
            {!! $errors->first('segundos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mes_referencia') }}
            {{ Form::text('mes_referencia', $caoValorDescanso->mes_referencia, ['class' => 'form-control' . ($errors->has('mes_referencia') ? ' is-invalid' : ''), 'placeholder' => 'Mes Referencia']) }}
            {!! $errors->first('mes_referencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>