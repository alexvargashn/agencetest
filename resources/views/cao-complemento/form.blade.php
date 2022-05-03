<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_complemento') }}
            {{ Form::text('co_complemento', $caoComplemento->co_complemento, ['class' => 'form-control' . ($errors->has('co_complemento') ? ' is-invalid' : ''), 'placeholder' => 'Co Complemento']) }}
            {!! $errors->first('co_complemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_complemento') }}
            {{ Form::text('ds_complemento', $caoComplemento->ds_complemento, ['class' => 'form-control' . ($errors->has('ds_complemento') ? ' is-invalid' : ''), 'placeholder' => 'Ds Complemento']) }}
            {!! $errors->first('ds_complemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>