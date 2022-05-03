<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_email') }}
            {{ Form::text('co_email', $caoOsEmail->co_email, ['class' => 'form-control' . ($errors->has('co_email') ? ' is-invalid' : ''), 'placeholder' => 'Co Email']) }}
            {!! $errors->first('co_email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_os') }}
            {{ Form::text('co_os', $caoOsEmail->co_os, ['class' => 'form-control' . ($errors->has('co_os') ? ' is-invalid' : ''), 'placeholder' => 'Co Os']) }}
            {!! $errors->first('co_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $caoOsEmail->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('senha') }}
            {{ Form::text('senha', $caoOsEmail->senha, ['class' => 'form-control' . ($errors->has('senha') ? ' is-invalid' : ''), 'placeholder' => 'Senha']) }}
            {!! $errors->first('senha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nome') }}
            {{ Form::text('nome', $caoOsEmail->nome, ['class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : ''), 'placeholder' => 'Nome']) }}
            {!! $errors->first('nome', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_cliente') }}
            {{ Form::text('co_cliente', $caoOsEmail->co_cliente, ['class' => 'form-control' . ($errors->has('co_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Co Cliente']) }}
            {!! $errors->first('co_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ativo') }}
            {{ Form::text('ativo', $caoOsEmail->ativo, ['class' => 'form-control' . ($errors->has('ativo') ? ' is-invalid' : ''), 'placeholder' => 'Ativo']) }}
            {!! $errors->first('ativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ddd') }}
            {{ Form::text('ddd', $caoOsEmail->ddd, ['class' => 'form-control' . ($errors->has('ddd') ? ' is-invalid' : ''), 'placeholder' => 'Ddd']) }}
            {!! $errors->first('ddd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel') }}
            {{ Form::text('tel', $caoOsEmail->tel, ['class' => 'form-control' . ($errors->has('tel') ? ' is-invalid' : ''), 'placeholder' => 'Tel']) }}
            {!! $errors->first('tel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $caoOsEmail->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>