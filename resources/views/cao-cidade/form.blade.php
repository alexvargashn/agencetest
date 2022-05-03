<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_cidade') }}
            {{ Form::text('co_cidade', $caoCidade->co_cidade, ['class' => 'form-control' . ($errors->has('co_cidade') ? ' is-invalid' : ''), 'placeholder' => 'Co Cidade']) }}
            {!! $errors->first('co_cidade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_cidade') }}
            {{ Form::text('no_cidade', $caoCidade->no_cidade, ['class' => 'form-control' . ($errors->has('no_cidade') ? ' is-invalid' : ''), 'placeholder' => 'No Cidade']) }}
            {!! $errors->first('no_cidade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_uf') }}
            {{ Form::text('co_uf', $caoCidade->co_uf, ['class' => 'form-control' . ($errors->has('co_uf') ? ' is-invalid' : ''), 'placeholder' => 'Co Uf']) }}
            {!! $errors->first('co_uf', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>