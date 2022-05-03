<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_tela') }}
            {{ Form::text('co_tela', $caoHelpTelaChamado->co_tela, ['class' => 'form-control' . ($errors->has('co_tela') ? ' is-invalid' : ''), 'placeholder' => 'Co Tela']) }}
            {!! $errors->first('co_tela', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_cliente') }}
            {{ Form::text('co_cliente', $caoHelpTelaChamado->co_cliente, ['class' => 'form-control' . ($errors->has('co_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Co Cliente']) }}
            {!! $errors->first('co_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoHelpTelaChamado->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_tela') }}
            {{ Form::text('ds_tela', $caoHelpTelaChamado->ds_tela, ['class' => 'form-control' . ($errors->has('ds_tela') ? ' is-invalid' : ''), 'placeholder' => 'Ds Tela']) }}
            {!! $errors->first('ds_tela', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>