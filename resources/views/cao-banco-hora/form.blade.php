<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_banc_horas') }}
            {{ Form::text('co_banc_horas', $caoBancoHora->co_banc_horas, ['class' => 'form-control' . ($errors->has('co_banc_horas') ? ' is-invalid' : ''), 'placeholder' => 'Co Banc Horas']) }}
            {!! $errors->first('co_banc_horas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoBancoHora->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('periodo') }}
            {{ Form::text('periodo', $caoBancoHora->periodo, ['class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''), 'placeholder' => 'Periodo']) }}
            {!! $errors->first('periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('min_mes') }}
            {{ Form::text('min_mes', $caoBancoHora->min_mes, ['class' => 'form-control' . ($errors->has('min_mes') ? ' is-invalid' : ''), 'placeholder' => 'Min Mes']) }}
            {!! $errors->first('min_mes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('min_ferias') }}
            {{ Form::text('min_ferias', $caoBancoHora->min_ferias, ['class' => 'form-control' . ($errors->has('min_ferias') ? ' is-invalid' : ''), 'placeholder' => 'Min Ferias']) }}
            {!! $errors->first('min_ferias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('min_pago') }}
            {{ Form::text('min_pago', $caoBancoHora->min_pago, ['class' => 'form-control' . ($errors->has('min_pago') ? ' is-invalid' : ''), 'placeholder' => 'Min Pago']) }}
            {!! $errors->first('min_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('min_total') }}
            {{ Form::text('min_total', $caoBancoHora->min_total, ['class' => 'form-control' . ($errors->has('min_total') ? ' is-invalid' : ''), 'placeholder' => 'Min Total']) }}
            {!! $errors->first('min_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>