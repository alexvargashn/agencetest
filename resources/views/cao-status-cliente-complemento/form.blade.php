<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_complemento_status') }}
            {{ Form::text('co_complemento_status', $caoStatusClienteComplemento->co_complemento_status, ['class' => 'form-control' . ($errors->has('co_complemento_status') ? ' is-invalid' : ''), 'placeholder' => 'Co Complemento Status']) }}
            {!! $errors->first('co_complemento_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_status') }}
            {{ Form::text('ds_status', $caoStatusClienteComplemento->ds_status, ['class' => 'form-control' . ($errors->has('ds_status') ? ' is-invalid' : ''), 'placeholder' => 'Ds Status']) }}
            {!! $errors->first('ds_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_status') }}
            {{ Form::text('co_status', $caoStatusClienteComplemento->co_status, ['class' => 'form-control' . ($errors->has('co_status') ? ' is-invalid' : ''), 'placeholder' => 'Co Status']) }}
            {!! $errors->first('co_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>