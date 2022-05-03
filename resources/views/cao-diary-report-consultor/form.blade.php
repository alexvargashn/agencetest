<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_diary_report_consultor') }}
            {{ Form::text('co_diary_report_consultor', $caoDiaryReportConsultor->co_diary_report_consultor, ['class' => 'form-control' . ($errors->has('co_diary_report_consultor') ? ' is-invalid' : ''), 'placeholder' => 'Co Diary Report Consultor']) }}
            {!! $errors->first('co_diary_report_consultor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_movimento') }}
            {{ Form::text('co_movimento', $caoDiaryReportConsultor->co_movimento, ['class' => 'form-control' . ($errors->has('co_movimento') ? ' is-invalid' : ''), 'placeholder' => 'Co Movimento']) }}
            {!! $errors->first('co_movimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_atividade') }}
            {{ Form::text('co_atividade', $caoDiaryReportConsultor->co_atividade, ['class' => 'form-control' . ($errors->has('co_atividade') ? ' is-invalid' : ''), 'placeholder' => 'Co Atividade']) }}
            {!! $errors->first('co_atividade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_empresa') }}
            {{ Form::text('ds_empresa', $caoDiaryReportConsultor->ds_empresa, ['class' => 'form-control' . ($errors->has('ds_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Ds Empresa']) }}
            {!! $errors->first('ds_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_assunto') }}
            {{ Form::text('ds_assunto', $caoDiaryReportConsultor->ds_assunto, ['class' => 'form-control' . ($errors->has('ds_assunto') ? ' is-invalid' : ''), 'placeholder' => 'Ds Assunto']) }}
            {!! $errors->first('ds_assunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_agendamento') }}
            {{ Form::text('dt_agendamento', $caoDiaryReportConsultor->dt_agendamento, ['class' => 'form-control' . ($errors->has('dt_agendamento') ? ' is-invalid' : ''), 'placeholder' => 'Dt Agendamento']) }}
            {!! $errors->first('dt_agendamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_agendamento_fim') }}
            {{ Form::text('dt_agendamento_fim', $caoDiaryReportConsultor->dt_agendamento_fim, ['class' => 'form-control' . ($errors->has('dt_agendamento_fim') ? ' is-invalid' : ''), 'placeholder' => 'Dt Agendamento Fim']) }}
            {!! $errors->first('dt_agendamento_fim', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vl_fechamento') }}
            {{ Form::text('vl_fechamento', $caoDiaryReportConsultor->vl_fechamento, ['class' => 'form-control' . ($errors->has('vl_fechamento') ? ' is-invalid' : ''), 'placeholder' => 'Vl Fechamento']) }}
            {!! $errors->first('vl_fechamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_cliente') }}
            {{ Form::text('co_cliente', $caoDiaryReportConsultor->co_cliente, ['class' => 'form-control' . ($errors->has('co_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Co Cliente']) }}
            {!! $errors->first('co_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>