<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<style>
    .button{
        border: radius 25px;
    }
</style>
<body>
    <center>
        <a href="{{route('cursos.index')}}" class="button" 
        style="display: inline-block; padding: 10px; background-color: blue; color: white; border: 2px solid white; border-radius: 5px;">VER FECHAS</a>
        
        <a href="{{route('cursos.create')}}" class="button" 
        style="display: inline-block; padding: 10px; background-color: blue; color: white; border: 2px solid white; border-radius: 5px;">REGISTRO DE JUGADORES</a>
        
        
        <a href="{{route('cursos.edit', 0)}}" class="button" 
        style="display: inline-block; padding: 10px; background-color: blue; color: white; border: 2px solid white; border-radius: 5px;">REGISTRO DE EQUIPOS</a>
        
        
        <a href="/" class="button" 
        style="display: inline-block; padding: 10px; background-color: blue; color: white; border: 2px solid white; border-radius: 5px;">IR AL HOME PRINCIPAL</a>
        
        @yield('content')
    </center>
    
</body>
</html>