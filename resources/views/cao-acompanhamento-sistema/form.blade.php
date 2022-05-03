<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_acompanhamento') }}
            {{ Form::text('co_acompanhamento', $caoAcompanhamentoSistema->co_acompanhamento, ['class' => 'form-control' . ($errors->has('co_acompanhamento') ? ' is-invalid' : ''), 'placeholder' => 'Co Acompanhamento']) }}
            {!! $errors->first('co_acompanhamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $caoAcompanhamentoSistema->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('senha') }}
            {{ Form::text('senha', $caoAcompanhamentoSistema->senha, ['class' => 'form-control' . ($errors->has('senha') ? ' is-invalid' : ''), 'placeholder' => 'Senha']) }}
            {!! $errors->first('senha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoAcompanhamentoSistema->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $caoAcompanhamentoSistema->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>