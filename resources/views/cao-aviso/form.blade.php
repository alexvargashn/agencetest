<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_aviso') }}
            {{ Form::text('co_aviso', $caoAviso->co_aviso, ['class' => 'form-control' . ($errors->has('co_aviso') ? ' is-invalid' : ''), 'placeholder' => 'Co Aviso']) }}
            {!! $errors->first('co_aviso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_aviso') }}
            {{ Form::text('ds_aviso', $caoAviso->ds_aviso, ['class' => 'form-control' . ($errors->has('ds_aviso') ? ' is-invalid' : ''), 'placeholder' => 'Ds Aviso']) }}
            {!! $errors->first('ds_aviso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>