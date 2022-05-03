<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('bon_categoria') }}
            {{ Form::text('bon_categoria', $caoBonu->bon_categoria, ['class' => 'form-control' . ($errors->has('bon_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Bon Categoria']) }}
            {!! $errors->first('bon_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bon_inicio') }}
            {{ Form::text('bon_inicio', $caoBonu->bon_inicio, ['class' => 'form-control' . ($errors->has('bon_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Bon Inicio']) }}
            {!! $errors->first('bon_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bon_fim') }}
            {{ Form::text('bon_fim', $caoBonu->bon_fim, ['class' => 'form-control' . ($errors->has('bon_fim') ? ' is-invalid' : ''), 'placeholder' => 'Bon Fim']) }}
            {!! $errors->first('bon_fim', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bon_valor_sem') }}
            {{ Form::text('bon_valor_sem', $caoBonu->bon_valor_sem, ['class' => 'form-control' . ($errors->has('bon_valor_sem') ? ' is-invalid' : ''), 'placeholder' => 'Bon Valor Sem']) }}
            {!! $errors->first('bon_valor_sem', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bon_valor_fimsem') }}
            {{ Form::text('bon_valor_fimsem', $caoBonu->bon_valor_fimsem, ['class' => 'form-control' . ($errors->has('bon_valor_fimsem') ? ' is-invalid' : ''), 'placeholder' => 'Bon Valor Fimsem']) }}
            {!! $errors->first('bon_valor_fimsem', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>