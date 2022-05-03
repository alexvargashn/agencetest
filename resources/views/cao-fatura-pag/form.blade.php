<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_fatura_pag') }}
            {{ Form::text('id_fatura_pag', $caoFaturaPag->id_fatura_pag, ['class' => 'form-control' . ($errors->has('id_fatura_pag') ? ' is-invalid' : ''), 'placeholder' => 'Id Fatura Pag']) }}
            {!! $errors->first('id_fatura_pag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_fatura') }}
            {{ Form::text('co_fatura', $caoFaturaPag->co_fatura, ['class' => 'form-control' . ($errors->has('co_fatura') ? ' is-invalid' : ''), 'placeholder' => 'Co Fatura']) }}
            {!! $errors->first('co_fatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_efetuado') }}
            {{ Form::text('dt_efetuado', $caoFaturaPag->dt_efetuado, ['class' => 'form-control' . ($errors->has('dt_efetuado') ? ' is-invalid' : ''), 'placeholder' => 'Dt Efetuado']) }}
            {!! $errors->first('dt_efetuado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_pago') }}
            {{ Form::text('valor_pago', $caoFaturaPag->valor_pago, ['class' => 'form-control' . ($errors->has('valor_pago') ? ' is-invalid' : ''), 'placeholder' => 'Valor Pago']) }}
            {!! $errors->first('valor_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>