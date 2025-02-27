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
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: white; 
        text-align: center;
        font-family: Arial, sans-serif; 
    }

    h2 {
        margin-top: 20px;
    }

    .container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    table {
        background: linear-gradient(70deg, blue, pink);
        padding: 20px; 
        border-radius: 10px;
        color: black;
        width: 45%;
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
<center><h2>Aca podras gestionar las fechas de los torneos🙋‍♀️🙋‍♂️😎</h2></center>

<div class="container">
    <table border="1">
        <tr><td>EQUIPO LOCAL</td>
            <td>EQUIPO VISITANTE</td>
            <td>FECHA A JUGAR</td>
            <td>LUGAR</td>
        </tr>
        <tr>
            <td>LOS HALCONES</td>
            <td>SUPERCAMPEONES</td>
            <td>20/MAYO/2025</td>
            <td>UNIVERISIDAD SANTAMARIA</td>
        </tr>
        <tr>
            <td>LOS TIGRES DEL NORTE</td>
            <td>LAS MONJAS</td>
            <td>01/JUNIO/2025</td>
            <td>UNIVERISIDAD SAN JOSE</td>
        </tr>
        <tr>
            <td>SUPERCAMPEONES</td>
            <td>REYES</td>
            <td>10/MARZO/2025</td>
            <td>UNIVERISIDAD CATOLICA</td>
        </tr>
        <tr>
            <td>LAS MONJAS</td>
            <td>LOS HALCONES</td>
            <td>25/ABRIL/2025</td>
            <td>UNIVERISIDAD AUTONOMA</td>
        </tr>
    </table>

    <table border="1">
        <tr><td>NOMBRE DEL EQUIPO</td>
            <td>PUNTOS</td>
            <td>GANADOS</td>
            <td>PERDIDOS</td>
            <td>EMPATADOS</td>
        </tr>
        <tr>
            <td>LOS HALCONES</td>
            <td>15 pts</td>
            <td>5</td>
            <td>1</td>
            <td>2</td>
        </tr>
        <tr>
            <td>LOS TIGRES DEL NORTE</td>
            <td>10 pts</td>
            <td>3</td>
            <td>2</td>
            <td>3</td>    
        </tr>
        <tr>
            <td>SUPERCAMPEONES</td>
            <td>7 pts</td>
            <td>2</td>
            <td>2</td>
            <td>4</td>
        </tr>
        <tr>
            <td>LAS MONJAS</td>
            <td>3 pts</td>
            <td>1</td>
            <td>2</td>
            <td>5</td>
        </tr>
    </table>
</div>

<br>
<button type="button" class="btn-shadow">GESTIONAR FECHAS</button>
<br>
<br>
<button type="button" class="btn-shadow">GESTIONAR NOTIFICACIONES</button>
@endsection