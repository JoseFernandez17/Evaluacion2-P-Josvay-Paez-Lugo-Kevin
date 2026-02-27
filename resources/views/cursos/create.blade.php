<a href="{{ route('estudiantes.index') }}"> Volver a la Lista</a>

<h2>Registrar un Nuevo Curso</h2>
<form action="{{ route('cursos.store') }}" method="POST">
    @csrf
    <label>Nombre del Curso:</label>
    <input type="text" name="nombre" required>

    <button type="submit">Guardar Curso</button>
</form>