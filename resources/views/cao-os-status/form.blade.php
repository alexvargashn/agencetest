<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_status_atual') }}
            {{ Form::text('co_status_atual', $caoOsStatus->co_status_atual, ['class' => 'form-control' . ($errors->has('co_status_atual') ? ' is-invalid' : ''), 'placeholder' => 'Co Status Atual']) }}
            {!! $errors->first('co_status_atual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_status') }}
            {{ Form::text('ds_status', $caoOsStatus->ds_status, ['class' => 'form-control' . ($errors->has('ds_status') ? ' is-invalid' : ''), 'placeholder' => 'Ds Status']) }}
            {!! $errors->first('ds_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>