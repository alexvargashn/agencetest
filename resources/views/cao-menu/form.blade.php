<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_menu') }}
            {{ Form::text('co_menu', $caoMenu->co_menu, ['class' => 'form-control' . ($errors->has('co_menu') ? ' is-invalid' : ''), 'placeholder' => 'Co Menu']) }}
            {!! $errors->first('co_menu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_menu') }}
            {{ Form::text('ds_menu', $caoMenu->ds_menu, ['class' => 'form-control' . ($errors->has('ds_menu') ? ' is-invalid' : ''), 'placeholder' => 'Ds Menu']) }}
            {!! $errors->first('ds_menu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_pagina') }}
            {{ Form::text('ds_pagina', $caoMenu->ds_pagina, ['class' => 'form-control' . ($errors->has('ds_pagina') ? ' is-invalid' : ''), 'placeholder' => 'Ds Pagina']) }}
            {!! $errors->first('ds_pagina', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_imagem') }}
            {{ Form::text('ds_imagem', $caoMenu->ds_imagem, ['class' => 'form-control' . ($errors->has('ds_imagem') ? ' is-invalid' : ''), 'placeholder' => 'Ds Imagem']) }}
            {!! $errors->first('ds_imagem', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>