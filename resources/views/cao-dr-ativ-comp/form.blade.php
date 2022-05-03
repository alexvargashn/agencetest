<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_ativ_comp') }}
            {{ Form::text('id_ativ_comp', $caoDrAtivComp->id_ativ_comp, ['class' => 'form-control' . ($errors->has('id_ativ_comp') ? ' is-invalid' : ''), 'placeholder' => 'Id Ativ Comp']) }}
            {!! $errors->first('id_ativ_comp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoDrAtivComp->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('data') }}
            {{ Form::text('data', $caoDrAtivComp->data, ['class' => 'form-control' . ($errors->has('data') ? ' is-invalid' : ''), 'placeholder' => 'Data']) }}
            {!! $errors->first('data', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('assunto') }}
            {{ Form::text('assunto', $caoDrAtivComp->assunto, ['class' => 'form-control' . ($errors->has('assunto') ? ' is-invalid' : ''), 'placeholder' => 'Assunto']) }}
            {!! $errors->first('assunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tempo_gasto') }}
            {{ Form::text('tempo_gasto', $caoDrAtivComp->tempo_gasto, ['class' => 'form-control' . ($errors->has('tempo_gasto') ? ' is-invalid' : ''), 'placeholder' => 'Tempo Gasto']) }}
            {!! $errors->first('tempo_gasto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>