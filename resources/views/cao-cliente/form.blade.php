<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_cliente') }}
            {{ Form::text('co_cliente', $caoCliente->co_cliente, ['class' => 'form-control' . ($errors->has('co_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Co Cliente']) }}
            {!! $errors->first('co_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_razao') }}
            {{ Form::text('no_razao', $caoCliente->no_razao, ['class' => 'form-control' . ($errors->has('no_razao') ? ' is-invalid' : ''), 'placeholder' => 'No Razao']) }}
            {!! $errors->first('no_razao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_fantasia') }}
            {{ Form::text('no_fantasia', $caoCliente->no_fantasia, ['class' => 'form-control' . ($errors->has('no_fantasia') ? ' is-invalid' : ''), 'placeholder' => 'No Fantasia']) }}
            {!! $errors->first('no_fantasia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_contato') }}
            {{ Form::text('no_contato', $caoCliente->no_contato, ['class' => 'form-control' . ($errors->has('no_contato') ? ' is-invalid' : ''), 'placeholder' => 'No Contato']) }}
            {!! $errors->first('no_contato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_telefone') }}
            {{ Form::text('nu_telefone', $caoCliente->nu_telefone, ['class' => 'form-control' . ($errors->has('nu_telefone') ? ' is-invalid' : ''), 'placeholder' => 'Nu Telefone']) }}
            {!! $errors->first('nu_telefone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_ramal') }}
            {{ Form::text('nu_ramal', $caoCliente->nu_ramal, ['class' => 'form-control' . ($errors->has('nu_ramal') ? ' is-invalid' : ''), 'placeholder' => 'Nu Ramal']) }}
            {!! $errors->first('nu_ramal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_cnpj') }}
            {{ Form::text('nu_cnpj', $caoCliente->nu_cnpj, ['class' => 'form-control' . ($errors->has('nu_cnpj') ? ' is-invalid' : ''), 'placeholder' => 'Nu Cnpj']) }}
            {!! $errors->first('nu_cnpj', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_endereco') }}
            {{ Form::text('ds_endereco', $caoCliente->ds_endereco, ['class' => 'form-control' . ($errors->has('ds_endereco') ? ' is-invalid' : ''), 'placeholder' => 'Ds Endereco']) }}
            {!! $errors->first('ds_endereco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_numero') }}
            {{ Form::text('nu_numero', $caoCliente->nu_numero, ['class' => 'form-control' . ($errors->has('nu_numero') ? ' is-invalid' : ''), 'placeholder' => 'Nu Numero']) }}
            {!! $errors->first('nu_numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_complemento') }}
            {{ Form::text('ds_complemento', $caoCliente->ds_complemento, ['class' => 'form-control' . ($errors->has('ds_complemento') ? ' is-invalid' : ''), 'placeholder' => 'Ds Complemento']) }}
            {!! $errors->first('ds_complemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_bairro') }}
            {{ Form::text('no_bairro', $caoCliente->no_bairro, ['class' => 'form-control' . ($errors->has('no_bairro') ? ' is-invalid' : ''), 'placeholder' => 'No Bairro']) }}
            {!! $errors->first('no_bairro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_cep') }}
            {{ Form::text('nu_cep', $caoCliente->nu_cep, ['class' => 'form-control' . ($errors->has('nu_cep') ? ' is-invalid' : ''), 'placeholder' => 'Nu Cep']) }}
            {!! $errors->first('nu_cep', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_pais') }}
            {{ Form::text('no_pais', $caoCliente->no_pais, ['class' => 'form-control' . ($errors->has('no_pais') ? ' is-invalid' : ''), 'placeholder' => 'No Pais']) }}
            {!! $errors->first('no_pais', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_ramo') }}
            {{ Form::text('co_ramo', $caoCliente->co_ramo, ['class' => 'form-control' . ($errors->has('co_ramo') ? ' is-invalid' : ''), 'placeholder' => 'Co Ramo']) }}
            {!! $errors->first('co_ramo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_cidade') }}
            {{ Form::text('co_cidade', $caoCliente->co_cidade, ['class' => 'form-control' . ($errors->has('co_cidade') ? ' is-invalid' : ''), 'placeholder' => 'Co Cidade']) }}
            {!! $errors->first('co_cidade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_status') }}
            {{ Form::text('co_status', $caoCliente->co_status, ['class' => 'form-control' . ($errors->has('co_status') ? ' is-invalid' : ''), 'placeholder' => 'Co Status']) }}
            {!! $errors->first('co_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_site') }}
            {{ Form::text('ds_site', $caoCliente->ds_site, ['class' => 'form-control' . ($errors->has('ds_site') ? ' is-invalid' : ''), 'placeholder' => 'Ds Site']) }}
            {!! $errors->first('ds_site', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_email') }}
            {{ Form::text('ds_email', $caoCliente->ds_email, ['class' => 'form-control' . ($errors->has('ds_email') ? ' is-invalid' : ''), 'placeholder' => 'Ds Email']) }}
            {!! $errors->first('ds_email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_cargo_contato') }}
            {{ Form::text('ds_cargo_contato', $caoCliente->ds_cargo_contato, ['class' => 'form-control' . ($errors->has('ds_cargo_contato') ? ' is-invalid' : ''), 'placeholder' => 'Ds Cargo Contato']) }}
            {!! $errors->first('ds_cargo_contato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tp_cliente') }}
            {{ Form::text('tp_cliente', $caoCliente->tp_cliente, ['class' => 'form-control' . ($errors->has('tp_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Tp Cliente']) }}
            {!! $errors->first('tp_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_referencia') }}
            {{ Form::text('ds_referencia', $caoCliente->ds_referencia, ['class' => 'form-control' . ($errors->has('ds_referencia') ? ' is-invalid' : ''), 'placeholder' => 'Ds Referencia']) }}
            {!! $errors->first('ds_referencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_complemento_status') }}
            {{ Form::text('co_complemento_status', $caoCliente->co_complemento_status, ['class' => 'form-control' . ($errors->has('co_complemento_status') ? ' is-invalid' : ''), 'placeholder' => 'Co Complemento Status']) }}
            {!! $errors->first('co_complemento_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_fax') }}
            {{ Form::text('nu_fax', $caoCliente->nu_fax, ['class' => 'form-control' . ($errors->has('nu_fax') ? ' is-invalid' : ''), 'placeholder' => 'Nu Fax']) }}
            {!! $errors->first('nu_fax', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ddd2') }}
            {{ Form::text('ddd2', $caoCliente->ddd2, ['class' => 'form-control' . ($errors->has('ddd2') ? ' is-invalid' : ''), 'placeholder' => 'Ddd2']) }}
            {!! $errors->first('ddd2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefone2') }}
            {{ Form::text('telefone2', $caoCliente->telefone2, ['class' => 'form-control' . ($errors->has('telefone2') ? ' is-invalid' : ''), 'placeholder' => 'Telefone2']) }}
            {!! $errors->first('telefone2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>