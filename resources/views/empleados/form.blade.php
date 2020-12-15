{{ $Modo == 'crear' ? 'Agregar empleado' : 'Modificar empleado' }}
<div class="form-group">
    <label class="nv-label" for="Nombres">{{ 'Nombres' }}</label>
    <input type="text" class="form-control {{ $errors->has('Nombres') ? 'is-invalid' : '' }}" name="Nombres"
        autocomplete="" id="Nombres" value="{{ isset($empleado->Nombres) ? $empleado->Nombres : old('Nombres') }}">
    {!! $errors->first('Nombres', '<div class="invalid-feedback">:message</div>') !!}

</div>
<div class="form-group">
    <label class="nv-label" for="Apellidos">{{ 'Apellidos' }}</label>
    <input type="text" class="form-control {{ $errors->has('Apellidos') ? 'is-invalid' : '' }}" name="Apellidos"
        autocomplete="" id="Apellidos"
        value="{{ isset($empleado->Apellidos) ? $empleado->Apellidos : old('Nombres') }}">
    {!! $errors->first('Apellidos', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <label class="nv-label" for="Correo">{{ 'Correo' }}</label>
    <input type="email" class="form-control {{ $errors->has('Correo') ? 'is-invalid' : '' }}" name="Correo"
        autocomplete="" id="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Nombres') }}">
    {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <label class="nv-label" for="Foto">{{ 'Foto' }}</label>
    @if (isset($empleado->Foto))
        <img src="{{ asset('storage') . '/' . $empleado->Foto }}" alt="" class="img img-thumbnail img-fluid"
            width="100">
        </br>
    @endif
    <input type="file" class="form-control {{ $errors->has('Foto') ? 'is-invalid' : '' }}" name="Foto" id="Foto"
        value="">
    {!! $errors->first('Foto', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success" value="{{ $Modo == 'crear' ? 'Agregar' : 'Modificar' }}">
    <a href="{{ url('empleados') }}" class="btn btn-primary">Regresar</a>
