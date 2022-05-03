<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoBonusStatus->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('data_solic') }}
            {{ Form::text('data_solic', $caoBonusStatus->data_solic, ['class' => 'form-control' . ($errors->has('data_solic') ? ' is-invalid' : ''), 'placeholder' => 'Data Solic']) }}
            {!! $errors->first('data_solic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mes') }}
            {{ Form::text('mes', $caoBonusStatus->mes, ['class' => 'form-control' . ($errors->has('mes') ? ' is-invalid' : ''), 'placeholder' => 'Mes']) }}
            {!! $errors->first('mes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $caoBonusStatus->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_solic') }}
            {{ Form::text('is_solic', $caoBonusStatus->is_solic, ['class' => 'form-control' . ($errors->has('is_solic') ? ' is-invalid' : ''), 'placeholder' => 'Is Solic']) }}
            {!! $errors->first('is_solic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_pg') }}
            {{ Form::text('is_pg', $caoBonusStatus->is_pg, ['class' => 'form-control' . ($errors->has('is_pg') ? ' is-invalid' : ''), 'placeholder' => 'Is Pg']) }}
            {!! $errors->first('is_pg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_horas') }}
            {{ Form::text('is_horas', $caoBonusStatus->is_horas, ['class' => 'form-control' . ($errors->has('is_horas') ? ' is-invalid' : ''), 'placeholder' => 'Is Horas']) }}
            {!! $errors->first('is_horas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>