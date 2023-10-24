@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
<div class="row my-4">
    <div class="col-12">
        <h1 class="text-center">Lista de publicaciones</h1>
        <p class="text-end">
            <a href="{{ route('categorias.create') }}" target="_blank">
                <button type="button" class="btn btn-primary" style="margin-right: 5px;">Agregar</button>
            </a>
        </p>
    </div>
</div>

<div class="row">
    <div class="col-md-10 offset-md-2">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Periodo</th>
                    <th scope="col">Actividad</th>
                    <th scope="col">Instructor</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Área</th>
                    <th scope="col">Número de control</th>
                    <th scope="col">Calificación</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->periodo->title }}</td>
                    <td>{{ $category->actividad->title }}</td>
                    <td>{{ $category->instructor->title }}</td>
                    <td>{{ $category->grupo->title }}</td>
                    <td>{{ $category->area->title }}</td>
                    <td>{{ $category->numcontrol }}</td>
                    <td>{{ $category->grade }}</td>
                    <td>{{ $category->carrera->title }}</td>
                    <td>
                        <div class="d-flex flex-row mb-3">
                            <div class="p-2">
                                <a href="{{ route('categories.edit', $category) }}">
                                    <button type="button" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M3.293 12.293l7-7 .707-.707 1.414 1.414-.707.707-7 7-1.414-1.414z"/>
                                            <path fill-rule="evenodd" d="M2.5 13a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H7.207a.5.5 0 0 0-.354.146l-6 6a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708 0z"/>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="{{ route('categories.show', $category) }}">
                                    <button type="button" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.830 1.120-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                            <div class="p-2">
                                <form action="{{ route('categories.destroy', $category) }}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6a.5.5 0 0 0 .5-.5Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
