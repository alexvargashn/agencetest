<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_movimento') }}
            {{ Form::text('co_movimento', $caoMovimento->co_movimento, ['class' => 'form-control' . ($errors->has('co_movimento') ? ' is-invalid' : ''), 'placeholder' => 'Co Movimento']) }}
            {!! $errors->first('co_movimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoMovimento->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_entrada') }}
            {{ Form::text('dt_entrada', $caoMovimento->dt_entrada, ['class' => 'form-control' . ($errors->has('dt_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Dt Entrada']) }}
            {!! $errors->first('dt_entrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_saida_almoco') }}
            {{ Form::text('dt_saida_almoco', $caoMovimento->dt_saida_almoco, ['class' => 'form-control' . ($errors->has('dt_saida_almoco') ? ' is-invalid' : ''), 'placeholder' => 'Dt Saida Almoco']) }}
            {!! $errors->first('dt_saida_almoco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_volta_almoco') }}
            {{ Form::text('dt_volta_almoco', $caoMovimento->dt_volta_almoco, ['class' => 'form-control' . ($errors->has('dt_volta_almoco') ? ' is-invalid' : ''), 'placeholder' => 'Dt Volta Almoco']) }}
            {!! $errors->first('dt_volta_almoco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_saida') }}
            {{ Form::text('dt_saida', $caoMovimento->dt_saida, ['class' => 'form-control' . ($errors->has('dt_saida') ? ' is-invalid' : ''), 'placeholder' => 'Dt Saida']) }}
            {!! $errors->first('dt_saida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_encerrado') }}
            {{ Form::text('is_encerrado', $caoMovimento->is_encerrado, ['class' => 'form-control' . ($errors->has('is_encerrado') ? ' is-invalid' : ''), 'placeholder' => 'Is Encerrado']) }}
            {!! $errors->first('is_encerrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>