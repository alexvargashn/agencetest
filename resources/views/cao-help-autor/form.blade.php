<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_autor') }}
            {{ Form::text('co_autor', $caoHelpAutor->co_autor, ['class' => 'form-control' . ($errors->has('co_autor') ? ' is-invalid' : ''), 'placeholder' => 'Co Autor']) }}
            {!! $errors->first('co_autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_autor') }}
            {{ Form::text('no_autor', $caoHelpAutor->no_autor, ['class' => 'form-control' . ($errors->has('no_autor') ? ' is-invalid' : ''), 'placeholder' => 'No Autor']) }}
            {!! $errors->first('no_autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_filial') }}
            {{ Form::text('co_filial', $caoHelpAutor->co_filial, ['class' => 'form-control' . ($errors->has('co_filial') ? ' is-invalid' : ''), 'placeholder' => 'Co Filial']) }}
            {!! $errors->first('co_filial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_ddd1') }}
            {{ Form::text('nu_ddd1', $caoHelpAutor->nu_ddd1, ['class' => 'form-control' . ($errors->has('nu_ddd1') ? ' is-invalid' : ''), 'placeholder' => 'Nu Ddd1']) }}
            {!! $errors->first('nu_ddd1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_tel1') }}
            {{ Form::text('nu_tel1', $caoHelpAutor->nu_tel1, ['class' => 'form-control' . ($errors->has('nu_tel1') ? ' is-invalid' : ''), 'placeholder' => 'Nu Tel1']) }}
            {!! $errors->first('nu_tel1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_ramal1') }}
            {{ Form::text('nu_ramal1', $caoHelpAutor->nu_ramal1, ['class' => 'form-control' . ($errors->has('nu_ramal1') ? ' is-invalid' : ''), 'placeholder' => 'Nu Ramal1']) }}
            {!! $errors->first('nu_ramal1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_ddd2') }}
            {{ Form::text('nu_ddd2', $caoHelpAutor->nu_ddd2, ['class' => 'form-control' . ($errors->has('nu_ddd2') ? ' is-invalid' : ''), 'placeholder' => 'Nu Ddd2']) }}
            {!! $errors->first('nu_ddd2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_tel2') }}
            {{ Form::text('nu_tel2', $caoHelpAutor->nu_tel2, ['class' => 'form-control' . ($errors->has('nu_tel2') ? ' is-invalid' : ''), 'placeholder' => 'Nu Tel2']) }}
            {!! $errors->first('nu_tel2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_ramal2') }}
            {{ Form::text('nu_ramal2', $caoHelpAutor->nu_ramal2, ['class' => 'form-control' . ($errors->has('nu_ramal2') ? ' is-invalid' : ''), 'placeholder' => 'Nu Ramal2']) }}
            {!! $errors->first('nu_ramal2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_email') }}
            {{ Form::text('ds_email', $caoHelpAutor->ds_email, ['class' => 'form-control' . ($errors->has('ds_email') ? ' is-invalid' : ''), 'placeholder' => 'Ds Email']) }}
            {!! $errors->first('ds_email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_funcao') }}
            {{ Form::text('ds_funcao', $caoHelpAutor->ds_funcao, ['class' => 'form-control' . ($errors->has('ds_funcao') ? ' is-invalid' : ''), 'placeholder' => 'Ds Funcao']) }}
            {!! $errors->first('ds_funcao', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>