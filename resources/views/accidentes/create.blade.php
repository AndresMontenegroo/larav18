    <!DOCTYPE html>
    <h1>Crear Accidente</h1>
    <form action="{{ route('accidentes.store') }}" method="POST">
        @csrf
        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" required>
        
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required>
        
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" required>
        
        <label for="lugar">Lugar:</label>
        <input type="text" name="lugar" id="lugar" required>
        
        <label for="persona_id">Persona:</label>
        <select name="persona_id" id="persona_id" required>
            @foreach($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
            @endforeach
        </select>
        
        <label for="vehiculo_id">Vehículo:</label>
        <select name="vehiculo_id" id="vehiculo_id" required>
            @foreach($vehiculos as $vehiculo)
                <option value="{{ $vehiculo->id }}">{{ $vehiculo->modelo }}</option>
            @endforeach
        </select>
        
        <button type="submit">Guardar</button>
    </form>
