

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PA - Examen PHP (Diciembre, 2018)</title>
        <?php
        include_once 'libreria.php';

        session_start();

        if (!isset($_SESSION['nombre'])) {
            header('location: loginForm.php');
        } else {
            if (isset($_SESSION['nombre'])) {
                if ($_SESSION['tipo'] == 'jefe') {
                    header('location: listado_tareas_jefe.html');
                } else {
                    $mensajeBien = "<h2>Bienvenido Usuario " . $_SESSION['nombre'] . "</h2>";
                }
            } else {
                header('location: loginForm.php');
            }
        }

        if (isset($_POST['btnLogout'])) {
            logOut();
        }
        ?>

    </head>
    <body>

        <h1>Gestor tareas</h1>
        <?php echo $mensajeBien ?>
        <form action='#' method='POST'>
            <input type='submit' name='btnLogout' value='Cerrar sesi&oacute;n'/>                
        </form>
        <hr>


        <form action="#" method="POST">
            <table cellpadding="10" border="1">
                <tr>
                    <th></th>
                    <th>T&iacute;tulo</th>
                    <th>Descripci&oacute;n</th>
                    <th>Perfiles y tiempos</th>
                    <th>Anexo</th>
                    <th>Usuario</th>
                </tr>                        
                <tr>
                    <td></td>
                    <td align='center'>Prueba</td>
                    <td align='center'>Descripcion de prueba</td>
                    <td align='center'>
                        <ul type='square'>
                            <li>P: 90 minutos</li>
                            <li>A: 45 minutos</li>
                        </ul>
                    </td>
                    <td align='center'><a href='anexos/1543421325prueba1.pdf'>1543421325prueba1.pdf</a> </td>
                    <td align='center'>pepe</td>
                </tr>
                <tr>
                    <td align='center'><input type='checkbox' name='tarea1' value='7' /></td>
                    <td align='center'>Implementar login</td>
                    <td align='center'>Implementar formulario de login de la web</td>
                    <td align='center'>
                        <ul type='square'>
                            <li>AP: 60 minutos</li>
                        </ul>
                    </td>
                    <td align='center'><a href='anexos/1543423266prueba2.pdf'>1543423266prueba2.pdf</a> </td>
                    <td align='center'></td>
                </tr>   
                <tr>
                    <td><input type='checkbox' name='tarea2' value='8' /></td>
                    <td align='center'>Realizar pruebas unitarias</td>
                    <td align='center'>Pasarle las pruebas unitarias al proyecto</td>
                    <td align='center'>
                        <ul type='square'>
                            <li>P: 100 minutos</li>
                            <li>AP: 60 minutos</li>
                        </ul>
                    </td>
                    <td align='center'></td>
                    <td align='center'></td>
                </tr>				
                <input name="total_checks" type="hidden" value="2">
            </table>

            <input type='submit' name='btnTareas' value='Seleccionar tarea/s'/>
        </form>
    </body>
</html>

