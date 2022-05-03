<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idpontos') }}
            {{ Form::text('idpontos', $caoPontosConhecimento->idpontos, ['class' => 'form-control' . ($errors->has('idpontos') ? ' is-invalid' : ''), 'placeholder' => 'Idpontos']) }}
            {!! $errors->first('idpontos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pontuacao') }}
            {{ Form::text('pontuacao', $caoPontosConhecimento->pontuacao, ['class' => 'form-control' . ($errors->has('pontuacao') ? ' is-invalid' : ''), 'placeholder' => 'Pontuacao']) }}
            {!! $errors->first('pontuacao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_coordenador') }}
            {{ Form::text('co_coordenador', $caoPontosConhecimento->co_coordenador, ['class' => 'form-control' . ($errors->has('co_coordenador') ? ' is-invalid' : ''), 'placeholder' => 'Co Coordenador']) }}
            {!! $errors->first('co_coordenador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idconhecimento') }}
            {{ Form::text('idconhecimento', $caoPontosConhecimento->idconhecimento, ['class' => 'form-control' . ($errors->has('idconhecimento') ? ' is-invalid' : ''), 'placeholder' => 'Idconhecimento']) }}
            {!! $errors->first('idconhecimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>