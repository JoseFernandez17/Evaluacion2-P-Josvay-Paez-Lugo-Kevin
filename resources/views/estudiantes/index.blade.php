<nav style="margin-bottom: 20px;">
    <a href="{{ route('cursos.create') }}" style="background: #28a745; color: aqua; padding: 10px; text-decoration: none; border-radius: 5px;">
        + Registrar Curso
    </a>
    <a href="{{ route('estudiantes.create') }}" style="background: #007bff; color: blue; padding: 10px; text-decoration: none; border-radius: 5px;">
        + Registrar Estudiantes
    </a>
</nav>

<hr>
<h1>Lista de Estudiantes</h1>
<hr>

<table border="1" style="width: 100%; text-align: left; border-collapse: collapse;">
    <thead>
        <tr style="background-color: aliceblue;">
        <th>Nombre</th>
        <th>Email</th>
        <th>Curso Asignado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
        <tr>
            <td>{{ $estudiante->nombre }}</td>
            <td>{{ $estudiante->email }}</td>
            <td>{{ $estudiante ->curso->nombre }}</td>
        </tr>
        @endforeach
    </tbody>
</table>