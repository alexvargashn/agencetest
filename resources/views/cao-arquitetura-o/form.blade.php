<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_arquitetura') }}
            {{ Form::text('co_arquitetura', $caoArquiteturaO->co_arquitetura, ['class' => 'form-control' . ($errors->has('co_arquitetura') ? ' is-invalid' : ''), 'placeholder' => 'Co Arquitetura']) }}
            {!! $errors->first('co_arquitetura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_arquitetura') }}
            {{ Form::text('ds_arquitetura', $caoArquiteturaO->ds_arquitetura, ['class' => 'form-control' . ($errors->has('ds_arquitetura') ? ' is-invalid' : ''), 'placeholder' => 'Ds Arquitetura']) }}
            {!! $errors->first('ds_arquitetura', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>