<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoHorarioAlmoco->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('almoco_saida_hora') }}
            {{ Form::text('almoco_saida_hora', $caoHorarioAlmoco->almoco_saida_hora, ['class' => 'form-control' . ($errors->has('almoco_saida_hora') ? ' is-invalid' : ''), 'placeholder' => 'Almoco Saida Hora']) }}
            {!! $errors->first('almoco_saida_hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('almoco_volta_hora') }}
            {{ Form::text('almoco_volta_hora', $caoHorarioAlmoco->almoco_volta_hora, ['class' => 'form-control' . ($errors->has('almoco_volta_hora') ? ' is-invalid' : ''), 'placeholder' => 'Almoco Volta Hora']) }}
            {!! $errors->first('almoco_volta_hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>