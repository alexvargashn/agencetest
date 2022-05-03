<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_servico') }}
            {{ Form::text('co_servico', $caoServico->co_servico, ['class' => 'form-control' . ($errors->has('co_servico') ? ' is-invalid' : ''), 'placeholder' => 'Co Servico']) }}
            {!! $errors->first('co_servico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_servico') }}
            {{ Form::text('ds_servico', $caoServico->ds_servico, ['class' => 'form-control' . ($errors->has('ds_servico') ? ' is-invalid' : ''), 'placeholder' => 'Ds Servico']) }}
            {!! $errors->first('ds_servico', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>