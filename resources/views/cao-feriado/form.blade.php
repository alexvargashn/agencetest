<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('dia') }}
            {{ Form::text('dia', $caoFeriado->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {!! $errors->first('dia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mes') }}
            {{ Form::text('mes', $caoFeriado->mes, ['class' => 'form-control' . ($errors->has('mes') ? ' is-invalid' : ''), 'placeholder' => 'Mes']) }}
            {!! $errors->first('mes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ano') }}
            {{ Form::text('ano', $caoFeriado->ano, ['class' => 'form-control' . ($errors->has('ano') ? ' is-invalid' : ''), 'placeholder' => 'Ano']) }}
            {!! $errors->first('ano', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>