<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_fase') }}
            {{ Form::text('co_fase', $caoOsFase->co_fase, ['class' => 'form-control' . ($errors->has('co_fase') ? ' is-invalid' : ''), 'placeholder' => 'Co Fase']) }}
            {!! $errors->first('co_fase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $caoOsFase->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao_ingl') }}
            {{ Form::text('descricao_ingl', $caoOsFase->descricao_ingl, ['class' => 'form-control' . ($errors->has('descricao_ingl') ? ' is-invalid' : ''), 'placeholder' => 'Descricao Ingl']) }}
            {!! $errors->first('descricao_ingl', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ordem') }}
            {{ Form::text('ordem', $caoOsFase->ordem, ['class' => 'form-control' . ($errors->has('ordem') ? ' is-invalid' : ''), 'placeholder' => 'Ordem']) }}
            {!! $errors->first('ordem', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>