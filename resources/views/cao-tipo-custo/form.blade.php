<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_tipo_custo') }}
            {{ Form::text('co_tipo_custo', $caoTipoCusto->co_tipo_custo, ['class' => 'form-control' . ($errors->has('co_tipo_custo') ? ' is-invalid' : ''), 'placeholder' => 'Co Tipo Custo']) }}
            {!! $errors->first('co_tipo_custo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoTipoCusto->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>