<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_part_funcionario') }}
            {{ Form::text('co_part_funcionario', $caoParticipacaoFuncionario->co_part_funcionario, ['class' => 'form-control' . ($errors->has('co_part_funcionario') ? ' is-invalid' : ''), 'placeholder' => 'Co Part Funcionario']) }}
            {!! $errors->first('co_part_funcionario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pc_participacao') }}
            {{ Form::text('pc_participacao', $caoParticipacaoFuncionario->pc_participacao, ['class' => 'form-control' . ($errors->has('pc_participacao') ? ' is-invalid' : ''), 'placeholder' => 'Pc Participacao']) }}
            {!! $errors->first('pc_participacao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoParticipacaoFuncionario->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_escritorio') }}
            {{ Form::text('co_escritorio', $caoParticipacaoFuncionario->co_escritorio, ['class' => 'form-control' . ($errors->has('co_escritorio') ? ' is-invalid' : ''), 'placeholder' => 'Co Escritorio']) }}
            {!! $errors->first('co_escritorio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_referencia') }}
            {{ Form::text('dt_referencia', $caoParticipacaoFuncionario->dt_referencia, ['class' => 'form-control' . ($errors->has('dt_referencia') ? ' is-invalid' : ''), 'placeholder' => 'Dt Referencia']) }}
            {!! $errors->first('dt_referencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>