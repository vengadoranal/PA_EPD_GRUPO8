
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PA - Examen PHP (Diciembre, 2018)</title>
    </head>
    <body>
        <h1>Gestor de tareas</h1>
        <h2>Autenticaci&oacute;n</h2>
        <form action="login.php" method="POST">
            Usuario: <input type="text" name="usuario" value="" /> <br>
            Password: <input type="password" name="password" /> <br><br>

            <input type="submit" name="btnLogin" value="Entrar"/>
            <input type="reset" name="btnCancelar" value="Cancelar"/> <br><br>                                
        </form>
        <form action="registro_usuario.php" method="POST">
            <input type="submit" name="btnRegistro" value="Registro"/>                                
        </form>
    </body>

    
</html> 
