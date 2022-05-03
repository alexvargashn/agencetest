<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_item') }}
            {{ Form::text('co_item', $caoOsItemMenu->co_item, ['class' => 'form-control' . ($errors->has('co_item') ? ' is-invalid' : ''), 'placeholder' => 'Co Item']) }}
            {!! $errors->first('co_item', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_item') }}
            {{ Form::text('ds_item', $caoOsItemMenu->ds_item, ['class' => 'form-control' . ($errors->has('ds_item') ? ' is-invalid' : ''), 'placeholder' => 'Ds Item']) }}
            {!! $errors->first('ds_item', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoOsItemMenu->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>