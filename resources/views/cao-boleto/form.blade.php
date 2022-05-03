<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_boleto') }}
            {{ Form::text('co_boleto', $caoBoleto->co_boleto, ['class' => 'form-control' . ($errors->has('co_boleto') ? ' is-invalid' : ''), 'placeholder' => 'Co Boleto']) }}
            {!! $errors->first('co_boleto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_cliente') }}
            {{ Form::text('co_cliente', $caoBoleto->co_cliente, ['class' => 'form-control' . ($errors->has('co_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Co Cliente']) }}
            {!! $errors->first('co_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoBoleto->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_os') }}
            {{ Form::text('co_os', $caoBoleto->co_os, ['class' => 'form-control' . ($errors->has('co_os') ? ' is-invalid' : ''), 'placeholder' => 'Co Os']) }}
            {!! $errors->first('co_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $caoBoleto->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vencimento') }}
            {{ Form::text('vencimento', $caoBoleto->vencimento, ['class' => 'form-control' . ($errors->has('vencimento') ? ' is-invalid' : ''), 'placeholder' => 'Vencimento']) }}
            {!! $errors->first('vencimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $caoBoleto->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('boleto') }}
            {{ Form::text('boleto', $caoBoleto->boleto, ['class' => 'form-control' . ($errors->has('boleto') ? ' is-invalid' : ''), 'placeholder' => 'Boleto']) }}
            {!! $errors->first('boleto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('linha_dig') }}
            {{ Form::text('linha_dig', $caoBoleto->linha_dig, ['class' => 'form-control' . ($errors->has('linha_dig') ? ' is-invalid' : ''), 'placeholder' => 'Linha Dig']) }}
            {!! $errors->first('linha_dig', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parcela') }}
            {{ Form::text('parcela', $caoBoleto->parcela, ['class' => 'form-control' . ($errors->has('parcela') ? ' is-invalid' : ''), 'placeholder' => 'Parcela']) }}
            {!! $errors->first('parcela', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>