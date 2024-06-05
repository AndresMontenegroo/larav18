<!DOCTYPE html>
    <h1>Detalles del Accidente</h1>
    <p>Hora: {{ $accidente->hora }}</p>
    <p>Fecha: {{ $accidente->fecha }}</p>
    <p>Código: {{ $accidente->codigo }}</p>
    <p>Lugar: {{ $accidente->lugar }}</p>
    <p>Persona: {{ $accidente->persona->nombre }}</p>
    <p>Vehículo: {{ $accidente->vehiculo->modelo }}</p>
    <a href="{{ route('accidentes.index') }}">Volver a la lista</a>
