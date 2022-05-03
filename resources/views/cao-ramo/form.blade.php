<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_ramo') }}
            {{ Form::text('co_ramo', $caoRamo->co_ramo, ['class' => 'form-control' . ($errors->has('co_ramo') ? ' is-invalid' : ''), 'placeholder' => 'Co Ramo']) }}
            {!! $errors->first('co_ramo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_ramo') }}
            {{ Form::text('ds_ramo', $caoRamo->ds_ramo, ['class' => 'form-control' . ($errors->has('ds_ramo') ? ' is-invalid' : ''), 'placeholder' => 'Ds Ramo']) }}
            {!! $errors->first('ds_ramo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>