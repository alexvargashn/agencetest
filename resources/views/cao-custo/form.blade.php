<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_custo') }}
            {{ Form::text('co_custo', $caoCusto->co_custo, ['class' => 'form-control' . ($errors->has('co_custo') ? ' is-invalid' : ''), 'placeholder' => 'Co Custo']) }}
            {!! $errors->first('co_custo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_tipo_custo') }}
            {{ Form::text('co_tipo_custo', $caoCusto->co_tipo_custo, ['class' => 'form-control' . ($errors->has('co_tipo_custo') ? ' is-invalid' : ''), 'placeholder' => 'Co Tipo Custo']) }}
            {!! $errors->first('co_tipo_custo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoCusto->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_escritorio') }}
            {{ Form::text('co_escritorio', $caoCusto->co_escritorio, ['class' => 'form-control' . ($errors->has('co_escritorio') ? ' is-invalid' : ''), 'placeholder' => 'Co Escritorio']) }}
            {!! $errors->first('co_escritorio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_compra') }}
            {{ Form::text('dt_compra', $caoCusto->dt_compra, ['class' => 'form-control' . ($errors->has('dt_compra') ? ' is-invalid' : ''), 'placeholder' => 'Dt Compra']) }}
            {!! $errors->first('dt_compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_pagamento') }}
            {{ Form::text('dt_pagamento', $caoCusto->dt_pagamento, ['class' => 'form-control' . ($errors->has('dt_pagamento') ? ' is-invalid' : ''), 'placeholder' => 'Dt Pagamento']) }}
            {!! $errors->first('dt_pagamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_boleto') }}
            {{ Form::text('co_boleto', $caoCusto->co_boleto, ['class' => 'form-control' . ($errors->has('co_boleto') ? ' is-invalid' : ''), 'placeholder' => 'Co Boleto']) }}
            {!! $errors->first('co_boleto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $caoCusto->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parcela') }}
            {{ Form::text('parcela', $caoCusto->parcela, ['class' => 'form-control' . ($errors->has('parcela') ? ' is-invalid' : ''), 'placeholder' => 'Parcela']) }}
            {!! $errors->first('parcela', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pag') }}
            {{ Form::text('pag', $caoCusto->pag, ['class' => 'form-control' . ($errors->has('pag') ? ' is-invalid' : ''), 'placeholder' => 'Pag']) }}
            {!! $errors->first('pag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_custo_high') }}
            {{ Form::text('co_custo_high', $caoCusto->co_custo_high, ['class' => 'form-control' . ($errors->has('co_custo_high') ? ' is-invalid' : ''), 'placeholder' => 'Co Custo High']) }}
            {!! $errors->first('co_custo_high', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>