<a href="{{ route('estudiantes.index') }}">Volver a la Lista</a>
<h1>Registrar Estudiante</h1>
<form action="{{ route('estudiantes.store') }}" method="PoST">
    @csrf <div>
        <label>Nombre del Estudiante:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        @error('nombre') <small style="color:crimson">{{ $message }}</small> @enderror
    </div>

    <br>

    @csrf <div>
        <label>Gmail del Estudiante:</label><br>
        <input type="text" name="email" value="{{ old('email') }}">
        @error('email') <small style="color:black">{{ $message }}</small> @enderror
    </div>

    <br>

    <div>
        <label>Curso:</label><br>
        <select name="curso_id">
            <option value="" selected disabled>Selecciona un curso</option>
            @foreach($curso as $cursos)
            <option value="{{ $cursos->id }}" {{ old('curso_id') == $cursos->id ? 'select' : '' }}>{{ $cursos->nombre }}

            </option>
        @endforeach
        </select>
        @error('curso_id') <small style="color:darkred">{{ $message }}</small> @enderror
    </div>

    <br>

    <button type="submit">Guardar</button>
</form>