<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_uf') }}
            {{ Form::text('co_uf', $caoUf->co_uf, ['class' => 'form-control' . ($errors->has('co_uf') ? ' is-invalid' : ''), 'placeholder' => 'Co Uf']) }}
            {!! $errors->first('co_uf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_uf') }}
            {{ Form::text('ds_uf', $caoUf->ds_uf, ['class' => 'form-control' . ($errors->has('ds_uf') ? ' is-invalid' : ''), 'placeholder' => 'Ds Uf']) }}
            {!! $errors->first('ds_uf', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>