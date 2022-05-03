<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idconhecimento') }}
            {{ Form::text('idconhecimento', $caoConhecimento->idconhecimento, ['class' => 'form-control' . ($errors->has('idconhecimento') ? ' is-invalid' : ''), 'placeholder' => 'Idconhecimento']) }}
            {!! $errors->first('idconhecimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('assunto') }}
            {{ Form::text('assunto', $caoConhecimento->assunto, ['class' => 'form-control' . ($errors->has('assunto') ? ' is-invalid' : ''), 'placeholder' => 'Assunto']) }}
            {!! $errors->first('assunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conhecimento') }}
            {{ Form::text('conhecimento', $caoConhecimento->conhecimento, ['class' => 'form-control' . ($errors->has('conhecimento') ? ' is-invalid' : ''), 'placeholder' => 'Conhecimento']) }}
            {!! $errors->first('conhecimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('url', $caoConhecimento->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tags') }}
            {{ Form::text('tags', $caoConhecimento->tags, ['class' => 'form-control' . ($errors->has('tags') ? ' is-invalid' : ''), 'placeholder' => 'Tags']) }}
            {!! $errors->first('tags', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $caoConhecimento->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('datahora') }}
            {{ Form::text('datahora', $caoConhecimento->datahora, ['class' => 'form-control' . ($errors->has('datahora') ? ' is-invalid' : ''), 'placeholder' => 'Datahora']) }}
            {!! $errors->first('datahora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>