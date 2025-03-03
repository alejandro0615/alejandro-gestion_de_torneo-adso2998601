@extends('layouts.plantilla')

@section('title', 'REGISTRO DE JUGADORES')
@section('content')

<style>
     .btn-shadow {
    background-color: #a2e77d;
    color: rgb(0, 0, 0);
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-shadow:hover {
    transform: translateY(-3px);
    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.3);
    }
    body {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: white; /* Color del texto para contraste */
        text-align: center;
        font-family: Arial, sans-serif;
    }

    h2 {
        margin-top: 20px;
    }

    table {
        background: linear-gradient(70deg, blue, pink);
        margin: auto; /* Centrar la tabla */
        padding: 20px;
        border-radius: 10px; /* Bordes redondeados */
        color: black;
    }

    input, select {
        padding: 5px;
        border-radius: 5px;
        border: none;
    }

    td {
        padding: 10px;
    }
</style>

<h2>En este lado podrás registrar jugadores 👨‍💻👩‍💻🧑‍💻</h2>

<table border="1">
    <tr>
        <td>Numero de Documento del Participante 🙋‍♂️🙋‍♀️</td>
        <td><input type="text" name="nombre" placeholder="DOCUMENTO SIN PUNTOS NI COMAS" style="width: 500px;" required></td>
    </tr>
    <tr>
        <td>Tipo de Documento👀</td>
        <td>
            <select name="documento" required>
                <option value=""></option>
                <option value="futbol">T.I</option>
                <option value="basketball">C.C</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Nombre del Participante 🙋‍♂️🙋‍♀️</td>
        <td><input type="text" name="nombre" placeholder="NOMBRE COMPLETO" style="width: 500px;" required></td>
    </tr>
    <tr>
        <td>Numero de Camisa😎🎖️</td>
        <td>
            <input type="text" name="camisa" placeholder="NUMERO DE CAMISA" style="width: 500px;" required>
        </td>
    </tr>
    <tr>
        <td>Tipo de Deporte a Desarrollar🏁🏁🏁</td>
        <td>
            <select name="deporte" required>
                <option value=""></option>
                <option value="futbol">Fútbol</option>
                <option value="basketball">Basketball</option>
                <option value="tenis">Tenis</option>
                <option value="tenis de mesa">Tenis de Mesa</option>
                <option value="voleibol">Voleibol</option>
            </select>
        </td>
    </tr>
    <tr>
    <td>Nombre de la Universidad🏦</td>
    <td><input type="text" name="universidad" placeholder="UNIVERSIDAD" style="width: 500px;" required></td>
    </tr>
    <tr>
        <td>Entrenador Asignado</td>
        <td>
            <select name="entrenador" required>
                <option value=""></option>
                <option value="oscar">Oscar Galves (Futbol)</option>
                <option value="oscar">Romulo Gallegos (Baloncesto)</option>
                <option value="oscar">Jessica Pineda (Voleibol)</option>
                <option value="oscar"> Mauricio Gallego(Tenis)</option>
                <option value="oscar">Carolina Aristizabal (Tenis de Mesa)</option>
                <option value="oscar">Diana Giraldo(Voleibol)</option>
            </select>
        </td>
        </tr>
</table>
<br>
<br>
<br>
<button type="button" class="btn-shadow">Registrar Jugador</button>


<br><br>
@if(session('success'))
    <div style="background: green; color: white; padding: 10px; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
    
@endif
@endsection
