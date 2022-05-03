<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_atividade') }}
            {{ Form::text('co_atividade', $caoAtividadeConsultor->co_atividade, ['class' => 'form-control' . ($errors->has('co_atividade') ? ' is-invalid' : ''), 'placeholder' => 'Co Atividade']) }}
            {!! $errors->first('co_atividade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_atividade') }}
            {{ Form::text('ds_atividade', $caoAtividadeConsultor->ds_atividade, ['class' => 'form-control' . ($errors->has('ds_atividade') ? ' is-invalid' : ''), 'placeholder' => 'Ds Atividade']) }}
            {!! $errors->first('ds_atividade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ativo') }}
            {{ Form::text('ativo', $caoAtividadeConsultor->ativo, ['class' => 'form-control' . ($errors->has('ativo') ? ' is-invalid' : ''), 'placeholder' => 'Ativo']) }}
            {!! $errors->first('ativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>