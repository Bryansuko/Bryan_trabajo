<div class="box box-info padding-1">
    <div class="box-body">
        

        <div class="form-group">
            {{ Form::label('usuarios_id') }}
            {{ Form::select('usuarios_id', $usuarios , $asignacion->usuarios_id, ['class' => 'form-control' . ($errors->has('usuarios_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuarios Id']) }}
            {!! $errors->first('usuarios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('rol_id') }}
            {{ Form::select('rol_id', $roles , $asignacion->rol_id, ['class' => 'form-control' . ($errors->has('rol_id') ? ' is-invalid' : ''), 'placeholder' => 'Rol Id']) }}
            {!! $errors->first('rol_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>