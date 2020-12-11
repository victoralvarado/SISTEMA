@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Session::has('Mensaje'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('Mensaje') }}
            </div>
        @endif
        <a href="{{ url('empleados/create') }}" class="btn btn-success">Agregar Empleado</a>
        <a href="{{ route('descargarPDF') }}" class="btn btn-info">Generar pdf</a>
        </br>
        </br>
        <!-- Search form
            <form class="form-inline ml-3">
                <input class="form-control form-control-sm mr-1" name="search" type="text" placeholder="Search"
                    aria-label="Search">
                <i class="fas fa-search" aria-hidden="true"></i>
            </form>
        -->
        </br>

        <table class="table table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre Completo</th>
                    <th>Correo</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('storage') . '/' . $empleado->Foto }}" alt=""
                                class="img img-thumbnail img-fluid" width="100">
                        </td>
                        <td>{{ $empleado->Nombres }} {{ $empleado->Apellidos }}</td>
                        <td>{{ $empleado->Correo }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ url('/empleados/' . $empleado->id . '/edit') }}">Editar</a>

                            <form method="POST" action="{{ url('/empleados/' . $empleado->id) }}" style="display: inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Borrar?');">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $empleados->links() }}
    </div>
@endsection
