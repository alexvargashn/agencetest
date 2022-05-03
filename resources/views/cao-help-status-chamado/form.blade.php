<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_status') }}
            {{ Form::text('co_status', $caoHelpStatusChamado->co_status, ['class' => 'form-control' . ($errors->has('co_status') ? ' is-invalid' : ''), 'placeholder' => 'Co Status']) }}
            {!! $errors->first('co_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_status') }}
            {{ Form::text('ds_status', $caoHelpStatusChamado->ds_status, ['class' => 'form-control' . ($errors->has('ds_status') ? ' is-invalid' : ''), 'placeholder' => 'Ds Status']) }}
            {!! $errors->first('ds_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>