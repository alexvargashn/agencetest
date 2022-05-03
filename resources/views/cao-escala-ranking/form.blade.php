<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idescala') }}
            {{ Form::text('idescala', $caoEscalaRanking->idescala, ['class' => 'form-control' . ($errors->has('idescala') ? ' is-invalid' : ''), 'placeholder' => 'Idescala']) }}
            {!! $errors->first('idescala', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('qtd_visual') }}
            {{ Form::text('qtd_visual', $caoEscalaRanking->qtd_visual, ['class' => 'form-control' . ($errors->has('qtd_visual') ? ' is-invalid' : ''), 'placeholder' => 'Qtd Visual']) }}
            {!! $errors->first('qtd_visual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pontuacao') }}
            {{ Form::text('pontuacao', $caoEscalaRanking->pontuacao, ['class' => 'form-control' . ($errors->has('pontuacao') ? ' is-invalid' : ''), 'placeholder' => 'Pontuacao']) }}
            {!! $errors->first('pontuacao', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>