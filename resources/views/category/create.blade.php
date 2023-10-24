@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-white rounded p-4 border border-2 border-dark">
                <h1 class="text-center h3">Formulario de Inscripción</h1>
                <p class="text-center mb-4">Proporcione los datos necesarios para su inscripción</p>

                <form action="{{ route() }}" method="POST" novalidate>
                    @csrf

                    <!-- Periodo -->
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar"></i></span>
                            <select class="form-select form-select-lg" name="period_id">
                                <option selected>Selecciona el periodo</option>
                                @foreach ($periodos as $periodo)
                                    <option value="{{ $periodo->id }}">{{ $periodo->nombre_periodo }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('period_id')
                            <div class="text-danger text-center">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Actividad -->
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-activity"></i></span>
                            <select class="form-select form-select-lg" name="actividad_id">
                                <option selected>Selecciona la actividad</option>
                                @foreach ($actividades as $actividad)
                                    <option value="{{ $actividad->id }}">{{ $actividad->nombre_actividad }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('actividad_id')
                            <div class="text-danger text-center">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Instructor -->
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3"><i class="bi bi-people"></i></span>
                            <select class="form-select form-select-lg" name="instructor_id">
                                <option selected>Selecciona el instructor</option>
                                @foreach ($instructores as $instructor)
                                    <option value="{{ $instructor->id }}">{{ $instructor->nombre_instructor }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('instructor_id')
                            <div class="text-danger text-center">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Grupo -->
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon4"><i class="bi bi-person-plus"></i></span>
                            <select class="form-select form-select-lg" name="grupo_id">
                                <option selected>Selecciona el grupo</option>
                                @foreach ($grupos as $grupo)
                                    <option value="{{ $grupo->id }}">{{ $grupo->nombre_grupo }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('grupo_id')
                            <div class="text-danger text-center">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Área -->
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon5"><i class="bi bi-person-workspace"></i></span>
                            <select class="form-select form-select-lg" name="area_id">
                                <option selected>Selecciona el &aacute;rea</option>
                                @foreach ($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->nombre_area }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('area_id')
                            <div class="text-danger text-center">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Número de Control (como tipo número) -->
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon6"><i class="bi bi-lock"></i></span>
                            <input
                                id="numcontrol"
                                name="numcontrol"
                                class="form-control form-control-lg"
                                placeholder="Número de Control"
                                value="{{ old('numcontrol') }}"
                                type="number"
                                inputmode="numeric">
                        </div>
                        @error('numcontrol')
                            <div class="text-danger text-center mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Calificación (como tipo número) -->
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon7"><i class="bi bi-check"></i></span>
                            <input
                                id="calificacion"
                                name="calificacion"
                                class="form-control form-control-lg"
                                placeholder="Calificación"
                                value="{{ old('calificacion') }}"
                                type="number"
                                inputmode="numeric">
                        </div>
                        @error('calificacion')
                            <div class="text-danger text-center mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Carrera -->
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon8"><i class="bi bi-book"></i></span>
                            <select class="form-select form-select-lg" name="carrera_id">
                                <option selected>Selecciona tu carrera</option>
                                @foreach ($carreras as $carrera)
                                    <option value="{{ $carrera->id }}">{{ $carrera->nombre_carrera }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('carrera_id')
                            <div class="text-danger text-center">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
