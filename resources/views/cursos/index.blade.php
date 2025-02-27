@extends('layouts.plantilla')


@section('title', 'Fechas')
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
    background: linear-gradient(to right, #587214, #D4145A);
    color: white; 
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
<br>
<br>
<br>
<center><h2>Aca podras gestionar las fechas de los torneos🙋‍♀️🙋‍♂️😎</h2></center>
<table border="1">
    <tr><td>EQUIPO LOCAL</td>
        <td>EQUIPO VISITANTE</td>
        <td>FECHA A JUGAR</td>
        <td>LUGAR</td>
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">LOS HALCONES</td>
        <td style="width: 100px; height: 100px;">SUPERCAMPEONES</td>
        <td style="width: 100px; height: 100px;">20/MAYO/2025</td>
        <td style="width: 100px; height: 100px;">UNIVERISIDAD SANTAMARIA</td>
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">LOS TIGRES DEL NORTE</td>
        <td style="width: 100px; height: 100px;">LAS MONJAS</td>
        <td style="width: 100px; height: 100px;">01/JUNIO/2025</td>
        <td style="width: 100px; height: 100px;">UNIVERISIDAD SAN JOSE</td>
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">SUPERCAMPEONES</td>
        <td style="width: 100px; height: 100px;">REYES</td>
        <td style="width: 100px; height: 100px;">10/MARZO/2025</td>
        <td style="width: 100px; height: 100px;">UNIVERISIDAD CATOLICA</td>
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">LAS MONJAS</td>
        <td style="width: 100px; height: 100px;">LOS HALCONES</td>
        <td style="width: 100px; height: 100px;">25/ABRIL/2025</td>
        <td style="width: 100px; height: 100px;">UNIVERISIDAD AUTONOMA</td>
    </tr>
</table>
<br>
<br>
<br>
<button type="button" class="btn-shadow">GESTIONAR FECHAS</button>
<br>
<br>
<br>
<br>
<table border="1">
    <tr><td>NOMBRE DEL EQUIPO</td>
        <td>PUNTOS</td>
        <td>GANADOS</td>
        <td>PERDIDOS</td>
        <td>EMPATADOS</td>
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">LOS HALCONES</td>
        <td style="width: 100px; height: 100px;">15 pts</td>
        <td style="width: 100px; height: 100px;">5</td>
        <td style="width: 100px; height: 100px;">1</td>
        <td style="width: 100px; height: 100px;">2</td>
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">LOS TIGRES DEL NORTE</td>
        <td style="width: 100px; height: 100px;">10 pts</td>
        <td style="width: 100px; height: 100px;">3</td>
        <td style="width: 100px; height: 100px;">2</td>
        <td style="width: 100px; height: 100px;">3</td>    
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">SUPERCAMPEONES</td>
        <td style="width: 100px; height: 100px;">7 pts</td>
        <td style="width: 100px; height: 100px;">2</td>
        <td style="width: 100px; height: 100px;">2</td>
        <td style="width: 100px; height: 100px;">4</td>
    </tr>
    <tr>
        <td style="width: 100px; height: 100px;">LAS MONJAS</td>
        <td style="width: 100px; height: 100px;">3 pts</td>
        <td style="width: 100px; height: 100px;">1</td>
        <td style="width: 100px; height: 100px;">2</td>
        <td style="width: 100px; height: 100px;">5</td>
        </td>
    </tr>
</table>
<br>
<br>
<br>
<button type="button" class="btn-shadow">GESTIONAR NOTIFICACIONES</button>

@endsection


