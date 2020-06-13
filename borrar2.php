<?php
$user = "root";
$host = "localhost";
$clave = "analistas";
$dbase = "alumnos";
$table = "alumno";
$conexion = new mysqli($host, $user, $clave);
// selección de la base de datos con la que vamos a trabajar
mysqli_select_db($conexion, $dbase);
// Creamos la sentencia SQL y la ejecutamos
if($_POST['accion'] == "Eliminar") {
        $id = $_POST['idalumno'];
        echo $id;
        $borra = "delete from $table where idalumno=$id";
        echo $table;
        echo $borra;
        mysqli_query($conexion, $borra);
        ?>
        <h1>
        <div align="center">Registro Borrado</div>
        </h1>
        <?php 
        
    }
if($_POST['accion'] == "Modificar") {
        $id = $_POST['idalumno'];
        $modifica = "UPDATE alumno SET nombre=\"$_POST[nombre]\", apellido=\"$_POST[apellido]\" WHERE idalumno=\"$_POST[idalumno]\"";
        mysqli_query($conexion, $modifica);
        ?>
        <h1>
        <div align="center">Registro Modificado</div>
        </h1>
        <?php 
    }
    
?>



<div align="center">
	<a href="borrar.php">Visualizar el contenido de la base</a>
</div>

</BODY>
</HTML>