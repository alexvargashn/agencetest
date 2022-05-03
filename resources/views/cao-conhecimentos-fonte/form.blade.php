<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idfonte') }}
            {{ Form::text('idfonte', $caoConhecimentosFonte->idfonte, ['class' => 'form-control' . ($errors->has('idfonte') ? ' is-invalid' : ''), 'placeholder' => 'Idfonte']) }}
            {!! $errors->first('idfonte', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idconhecimento') }}
            {{ Form::text('idconhecimento', $caoConhecimentosFonte->idconhecimento, ['class' => 'form-control' . ($errors->has('idconhecimento') ? ' is-invalid' : ''), 'placeholder' => 'Idconhecimento']) }}
            {!! $errors->first('idconhecimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('datahora') }}
            {{ Form::text('datahora', $caoConhecimentosFonte->datahora, ['class' => 'form-control' . ($errors->has('datahora') ? ' is-invalid' : ''), 'placeholder' => 'Datahora']) }}
            {!! $errors->first('datahora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('arquivo') }}
            {{ Form::text('arquivo', $caoConhecimentosFonte->arquivo, ['class' => 'form-control' . ($errors->has('arquivo') ? ' is-invalid' : ''), 'placeholder' => 'Arquivo']) }}
            {!! $errors->first('arquivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('caminho') }}
            {{ Form::text('caminho', $caoConhecimentosFonte->caminho, ['class' => 'form-control' . ($errors->has('caminho') ? ' is-invalid' : ''), 'placeholder' => 'Caminho']) }}
            {!! $errors->first('caminho', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>