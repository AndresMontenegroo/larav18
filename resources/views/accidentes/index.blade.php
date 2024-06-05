<!DOCTYPE html>
    <h1>Lista de Accidentes</h1>
    <a href="{{ route('accidentes.create') }}">Crear Accidente</a>
    <table>
        <thead>
            <tr>
                <th>Hora</th>
                <th>Fecha</th>
                <th>Código</th>
                <th>Lugar</th>
                <th>Persona</th>
                <th>Vehículo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accidentes as $accidente)
                <tr>
                    <td>{{ $accidente->hora }}</td>
                    <td>{{ $accidente->fecha }}</td>
                    <td>{{ $accidente->codigo }}</td>
                    <td>{{ $accidente->lugar }}</td>
                    <td>{{ $accidente->persona->nombre }}</td>
                    <td>{{ $accidente->vehiculo->modelo }}</td>
                    <td>
                        <a href="{{ route('accidentes.show', $accidente->id) }}">Ver</a>
                        <a href="{{ route('accidentes.edit', $accidente->id) }}">Editar</a>
                        <form action="{{ route('accidentes.destroy', $accidente->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
