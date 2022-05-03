<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_fatura') }}
            {{ Form::text('co_fatura', $caoFatura->co_fatura, ['class' => 'form-control' . ($errors->has('co_fatura') ? ' is-invalid' : ''), 'placeholder' => 'Co Fatura']) }}
            {!! $errors->first('co_fatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_cliente') }}
            {{ Form::text('co_cliente', $caoFatura->co_cliente, ['class' => 'form-control' . ($errors->has('co_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Co Cliente']) }}
            {!! $errors->first('co_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoFatura->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_os') }}
            {{ Form::text('co_os', $caoFatura->co_os, ['class' => 'form-control' . ($errors->has('co_os') ? ' is-invalid' : ''), 'placeholder' => 'Co Os']) }}
            {!! $errors->first('co_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_nf') }}
            {{ Form::text('num_nf', $caoFatura->num_nf, ['class' => 'form-control' . ($errors->has('num_nf') ? ' is-invalid' : ''), 'placeholder' => 'Num Nf']) }}
            {!! $errors->first('num_nf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $caoFatura->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $caoFatura->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('data_emissao') }}
            {{ Form::text('data_emissao', $caoFatura->data_emissao, ['class' => 'form-control' . ($errors->has('data_emissao') ? ' is-invalid' : ''), 'placeholder' => 'Data Emissao']) }}
            {!! $errors->first('data_emissao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('corpo_nf') }}
            {{ Form::text('corpo_nf', $caoFatura->corpo_nf, ['class' => 'form-control' . ($errors->has('corpo_nf') ? ' is-invalid' : ''), 'placeholder' => 'Corpo Nf']) }}
            {!! $errors->first('corpo_nf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comissao_cn') }}
            {{ Form::text('comissao_cn', $caoFatura->comissao_cn, ['class' => 'form-control' . ($errors->has('comissao_cn') ? ' is-invalid' : ''), 'placeholder' => 'Comissao Cn']) }}
            {!! $errors->first('comissao_cn', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_imp_inc') }}
            {{ Form::text('total_imp_inc', $caoFatura->total_imp_inc, ['class' => 'form-control' . ($errors->has('total_imp_inc') ? ' is-invalid' : ''), 'placeholder' => 'Total Imp Inc']) }}
            {!! $errors->first('total_imp_inc', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>