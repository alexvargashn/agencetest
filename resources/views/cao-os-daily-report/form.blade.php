<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_daily') }}
            {{ Form::text('co_daily', $caoOsDailyReport->co_daily, ['class' => 'form-control' . ($errors->has('co_daily') ? ' is-invalid' : ''), 'placeholder' => 'Co Daily']) }}
            {!! $errors->first('co_daily', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_os') }}
            {{ Form::text('co_os', $caoOsDailyReport->co_os, ['class' => 'form-control' . ($errors->has('co_os') ? ' is-invalid' : ''), 'placeholder' => 'Co Os']) }}
            {!! $errors->first('co_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_fase') }}
            {{ Form::text('co_fase', $caoOsDailyReport->co_fase, ['class' => 'form-control' . ($errors->has('co_fase') ? ' is-invalid' : ''), 'placeholder' => 'Co Fase']) }}
            {!! $errors->first('co_fase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoOsDailyReport->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_assunto') }}
            {{ Form::text('ds_assunto', $caoOsDailyReport->ds_assunto, ['class' => 'form-control' . ($errors->has('ds_assunto') ? ' is-invalid' : ''), 'placeholder' => 'Ds Assunto']) }}
            {!! $errors->first('ds_assunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tempo_gasto') }}
            {{ Form::text('tempo_gasto', $caoOsDailyReport->tempo_gasto, ['class' => 'form-control' . ($errors->has('tempo_gasto') ? ' is-invalid' : ''), 'placeholder' => 'Tempo Gasto']) }}
            {!! $errors->first('tempo_gasto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('data') }}
            {{ Form::text('data', $caoOsDailyReport->data, ['class' => 'form-control' . ($errors->has('data') ? ' is-invalid' : ''), 'placeholder' => 'Data']) }}
            {!! $errors->first('data', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_status_atual') }}
            {{ Form::text('co_status_atual', $caoOsDailyReport->co_status_atual, ['class' => 'form-control' . ($errors->has('co_status_atual') ? ' is-invalid' : ''), 'placeholder' => 'Co Status Atual']) }}
            {!! $errors->first('co_status_atual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_chamado') }}
            {{ Form::text('co_chamado', $caoOsDailyReport->co_chamado, ['class' => 'form-control' . ($errors->has('co_chamado') ? ' is-invalid' : ''), 'placeholder' => 'Co Chamado']) }}
            {!! $errors->first('co_chamado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_atividade') }}
            {{ Form::text('co_atividade', $caoOsDailyReport->co_atividade, ['class' => 'form-control' . ($errors->has('co_atividade') ? ' is-invalid' : ''), 'placeholder' => 'Co Atividade']) }}
            {!! $errors->first('co_atividade', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>