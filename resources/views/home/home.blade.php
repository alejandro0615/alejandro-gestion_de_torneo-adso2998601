<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
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
    
    .body{
        background: linear-gradient(70deg, blue, pink);
    }
</style>
<body class="body">
    <center><div><h1>Bienvenido a las SUSTOLIMPIADAS</h1></div></center>
   <center><button type="button" class="btn-shadow"><a href="{{route('cursos.index')}}">MENU PRINCIPAL</a></button></center> 
</body>
</html>
