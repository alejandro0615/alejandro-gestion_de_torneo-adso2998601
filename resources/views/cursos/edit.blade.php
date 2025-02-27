@extends('layouts.plantilla')

@section('title', 'REGISTRO DE EQUIPOS Y NOTIFICACIONES')
@section('content')
<h2>Aca podras agregar los equipos a jugar Y gestionar las notificaciones 🏆🏆🏆</h2>
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
        background: linear-gradient(to right, #587214, #D4145A); /* Fondo con degradado */
        color: white; /* Color del texto para contraste */
        text-align: center;
        font-family: 'Roboto', sans-serif;
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
    <table border="1">
    <tr>
        <td>ID del Equipo a Ingresar</td>
        </td>
        <td><input type="text" name="id" placeholder="ID DEL EQUIPO" style="width: 500px;" required></td>
    </tr>
    <tr>
        <td>Nombre Del Equipo 🏆🏆🏆</td>
        <td><input type="text" name="equipo" placeholder="EQUIPO" style="width: 500px;" required></td>
        </tr>
    <tr>
    <tr>
        <td>Tipo De Deporte a Desarrollar 🏁🏁🏁</td>
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
    <td>Nombre de la Universiad 🏦</td>
    <td><input type="text" name="universidad" placeholder="UNIVERSIDAD" style="width: 500px;" required></td>
    </tr>
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
        <tr>
            <td>Fecha a Competir 📅</td>
            <td><input type="date" name="fecha_competencia" required></td>
        </tr>
</table>
<br>
<br>
<br>
<button type="button" class="btn-shadow">REGISTRAR EQUIPO</button>
<br>
<br>
<br>
<br>
<table border="1">
    <tr><td>EQUIPO NOTIFICADO</td>
        <td>NOTIFICACION</td>
        <td>FECHA DE NOTIFICACION</td>
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">LOS HALCONES</td>
        <td style="width: 100px; height: 100px;">Coordial saludo desde administrativos de las SUSTOLIMPIADAS ⛹️‍♀️🏁
            se le notifica que el equipo a sido programado para jugar en el torneo de la semana de 20/MAYO/2025 
            en la Universidad Santamaria
        <td style="width: 100px; height: 100px;">10/ENERO/2025</td>
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">LOS TIGRES DEL NORTE</td>
        <td style="width: 100px; height: 100px;">Coordial saludo desde administrativos de las SUSTOLIMPIADAS 
            se le notifica que el equipo a sido programado para jugar en el torneo de la semana de 01/JUNIO/2025 
            en la Universidad San Jose🏆🏆🏆
        <td style="width: 100px; height: 100px;">16/ENERO/2025</td>    
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">SUPERCAMPEONES</td>
        <td style="width: 100px; height: 100px;">Coordial saludo desde administrativos de las SUSTOLIMPIADAS ⛹️‍♀️⛹️‍♂️
            se le notifica que el equipo a sido programado para jugar en el torneo de la semana de 10/MARZO/2025 
            en la Universidad Catalica👀🏦
        <td style="width: 100px; height: 100px;">22/ENERO/2025</td>
        </td>
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">LAS MONJAS</td>
        <td style="width: 100px; height: 100px;">Coordial saludo desde administrativos de las SUSTOLIMPIADAS 
            se le notifica que el equipo a sido programado para jugar en el torneo de la semana de 01/JUNIO/2025 
            en la Universidad San Jose🏆🏆🏆
        <td style="width: 100px; height: 100px;">01/FEBRERO/2025</td>
        </td>
    </tr>
</table>
<br>
<br>
<br>
<button type="button" class="btn-shadow">GESTIONAR NOTIFICACIONES</button>

<br><br>
@endsection