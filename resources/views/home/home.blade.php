<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
    input {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        background: rgba(255, 255, 255, 0.2);
        color: white;
        outline: none;
        }

    input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }
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
    
    body{
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    }
</style>
<body class="body">
    <center><div><h1>Bienvenido a las SUSTOLIMPIADAS 🏆🏆🏆</h1></div></center>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="" method="POST" border="12">
            @csrf
            <input type="text" name="usuario" placeholder="Nombre de usuario" required>
            <br>
            <input type="password" name="password" placeholder="Contraseña" required>
            <br>
            <button type="submit" class="btn-shadow"><a href="{{route('cursos.index')}}">INICIAR SESION</button>
        </form>
    </div>

</body>
</html>
