<html>
    <head>
        <meta charset="UTF-8">
        <title>PA - Examen PHP (Diciembre, 2018)</title>
    </head>
    <body>
        <h1>Gestor de tareas</h1>
        <h2>Registro de usuario</h2>
        <form action="registro.php" method="POST">
            Nombre: <input type="text" name="usuario" value=""> <br>
            Password: <input type="password" name="password"> <br>
            Email: <input type="text" name="email"> <br>
            Perfil: <select name="perfil">
                <option value="P">Programador</option>
                <option value="AP">Analista-Programador</option>
                <option value="A">Analista</option>
            </select> <br><br>
            <input type="submit" name="btnRegistrar" value="Registrar"><br><br>                                
        </form>


    </body>

   

</html>