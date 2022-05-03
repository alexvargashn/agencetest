<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoBancoDeHora->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('data_cadastro') }}
            {{ Form::text('data_cadastro', $caoBancoDeHora->data_cadastro, ['class' => 'form-control' . ($errors->has('data_cadastro') ? ' is-invalid' : ''), 'placeholder' => 'Data Cadastro']) }}
            {!! $errors->first('data_cadastro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundos') }}
            {{ Form::text('segundos', $caoBancoDeHora->segundos, ['class' => 'form-control' . ($errors->has('segundos') ? ' is-invalid' : ''), 'placeholder' => 'Segundos']) }}
            {!! $errors->first('segundos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $caoBancoDeHora->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>