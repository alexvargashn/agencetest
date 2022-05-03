<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_pagamento') }}
            {{ Form::text('co_pagamento', $caoPagamento->co_pagamento, ['class' => 'form-control' . ($errors->has('co_pagamento') ? ' is-invalid' : ''), 'placeholder' => 'Co Pagamento']) }}
            {!! $errors->first('co_pagamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoPagamento->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tp_pagamento') }}
            {{ Form::text('tp_pagamento', $caoPagamento->tp_pagamento, ['class' => 'form-control' . ($errors->has('tp_pagamento') ? ' is-invalid' : ''), 'placeholder' => 'Tp Pagamento']) }}
            {!! $errors->first('tp_pagamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_pagamento') }}
            {{ Form::text('dt_pagamento', $caoPagamento->dt_pagamento, ['class' => 'form-control' . ($errors->has('dt_pagamento') ? ' is-invalid' : ''), 'placeholder' => 'Dt Pagamento']) }}
            {!! $errors->first('dt_pagamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vl_pagamento') }}
            {{ Form::text('vl_pagamento', $caoPagamento->vl_pagamento, ['class' => 'form-control' . ($errors->has('vl_pagamento') ? ' is-invalid' : ''), 'placeholder' => 'Vl Pagamento']) }}
            {!! $errors->first('vl_pagamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_referencia_pagamento') }}
            {{ Form::text('dt_referencia_pagamento', $caoPagamento->dt_referencia_pagamento, ['class' => 'form-control' . ($errors->has('dt_referencia_pagamento') ? ' is-invalid' : ''), 'placeholder' => 'Dt Referencia Pagamento']) }}
            {!! $errors->first('dt_referencia_pagamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>