<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoSalario->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_alteracao') }}
            {{ Form::text('dt_alteracao', $caoSalario->dt_alteracao, ['class' => 'form-control' . ($errors->has('dt_alteracao') ? ' is-invalid' : ''), 'placeholder' => 'Dt Alteracao']) }}
            {!! $errors->first('dt_alteracao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('brut_salario') }}
            {{ Form::text('brut_salario', $caoSalario->brut_salario, ['class' => 'form-control' . ($errors->has('brut_salario') ? ' is-invalid' : ''), 'placeholder' => 'Brut Salario']) }}
            {!! $errors->first('brut_salario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('liq_salario') }}
            {{ Form::text('liq_salario', $caoSalario->liq_salario, ['class' => 'form-control' . ($errors->has('liq_salario') ? ' is-invalid' : ''), 'placeholder' => 'Liq Salario']) }}
            {!! $errors->first('liq_salario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>