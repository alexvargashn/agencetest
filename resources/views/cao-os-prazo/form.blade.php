<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_prazo') }}
            {{ Form::text('co_prazo', $caoOsPrazo->co_prazo, ['class' => 'form-control' . ($errors->has('co_prazo') ? ' is-invalid' : ''), 'placeholder' => 'Co Prazo']) }}
            {!! $errors->first('co_prazo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_os') }}
            {{ Form::text('co_os', $caoOsPrazo->co_os, ['class' => 'form-control' . ($errors->has('co_os') ? ' is-invalid' : ''), 'placeholder' => 'Co Os']) }}
            {!! $errors->first('co_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_fase') }}
            {{ Form::text('co_fase', $caoOsPrazo->co_fase, ['class' => 'form-control' . ($errors->has('co_fase') ? ' is-invalid' : ''), 'placeholder' => 'Co Fase']) }}
            {!! $errors->first('co_fase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_analista') }}
            {{ Form::text('total_analista', $caoOsPrazo->total_analista, ['class' => 'form-control' . ($errors->has('total_analista') ? ' is-invalid' : ''), 'placeholder' => 'Total Analista']) }}
            {!! $errors->first('total_analista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_hora') }}
            {{ Form::text('total_hora', $caoOsPrazo->total_hora, ['class' => 'form-control' . ($errors->has('total_hora') ? ' is-invalid' : ''), 'placeholder' => 'Total Hora']) }}
            {!! $errors->first('total_hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>