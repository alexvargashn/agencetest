<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_pagamento') }}
            {{ Form::text('id_pagamento', $caoSalarioPag->id_pagamento, ['class' => 'form-control' . ($errors->has('id_pagamento') ? ' is-invalid' : ''), 'placeholder' => 'Id Pagamento']) }}
            {!! $errors->first('id_pagamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoSalarioPag->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_efetuado') }}
            {{ Form::text('dt_efetuado', $caoSalarioPag->dt_efetuado, ['class' => 'form-control' . ($errors->has('dt_efetuado') ? ' is-invalid' : ''), 'placeholder' => 'Dt Efetuado']) }}
            {!! $errors->first('dt_efetuado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $caoSalarioPag->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observacao') }}
            {{ Form::text('observacao', $caoSalarioPag->observacao, ['class' => 'form-control' . ($errors->has('observacao') ? ' is-invalid' : ''), 'placeholder' => 'Observacao']) }}
            {!! $errors->first('observacao', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>