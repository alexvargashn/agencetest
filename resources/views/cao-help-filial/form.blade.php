<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_filial') }}
            {{ Form::text('co_filial', $caoHelpFilial->co_filial, ['class' => 'form-control' . ($errors->has('co_filial') ? ' is-invalid' : ''), 'placeholder' => 'Co Filial']) }}
            {!! $errors->first('co_filial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_filial') }}
            {{ Form::text('no_filial', $caoHelpFilial->no_filial, ['class' => 'form-control' . ($errors->has('no_filial') ? ' is-invalid' : ''), 'placeholder' => 'No Filial']) }}
            {!! $errors->first('no_filial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_cliente') }}
            {{ Form::text('co_cliente', $caoHelpFilial->co_cliente, ['class' => 'form-control' . ($errors->has('co_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Co Cliente']) }}
            {!! $errors->first('co_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $caoHelpFilial->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>