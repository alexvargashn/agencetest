<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_comissao') }}
            {{ Form::text('co_comissao', $caoComissao->co_comissao, ['class' => 'form-control' . ($errors->has('co_comissao') ? ' is-invalid' : ''), 'placeholder' => 'Co Comissao']) }}
            {!! $errors->first('co_comissao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_fatura') }}
            {{ Form::text('co_fatura', $caoComissao->co_fatura, ['class' => 'form-control' . ($errors->has('co_fatura') ? ' is-invalid' : ''), 'placeholder' => 'Co Fatura']) }}
            {!! $errors->first('co_fatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_efetuado') }}
            {{ Form::text('dt_efetuado', $caoComissao->dt_efetuado, ['class' => 'form-control' . ($errors->has('dt_efetuado') ? ' is-invalid' : ''), 'placeholder' => 'Dt Efetuado']) }}
            {!! $errors->first('dt_efetuado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>