
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8" >
</head>
<body>
<?php
$user="root";
$host="localhost";
$clave="analistas";
$dbase="alumnos";
$table="alumno";
$conexion = mysqli_connect($host,$user,$clave);
if ($conexion) {
    echo " Se ha establecido una conexi&oacuten con el servidor de bases de datos. " ;
    mysqli_select_db($conexion,$dbase);
    $query="SELECT * FROM $table WHERE nombre = 'Iván'";
    $result = mysqli_query($conexion,$query);
    ?>
    <table border="1" >
    <tr>
    <td><b>Id Alumno</b></td>
    <td><b>Nombre</b></td>
    <td><b>Apellido</b></td>
    </tr>
    <?php
    while ($registro = mysqli_fetch_array( $result)){
        echo "<tr>" ;
        echo "<td>".$registro["idalumno"]."</td>" ;
        echo "<td>" . $registro["nombre"] . "</td>" ;
        echo "<td>" . $registro["apellido"] . "</td>" ;
        echo "</tr>" ;
    }
    ?>
</table>
<br>
<?php 
} else {
    echo " No se ha podido establecer conexión con el servidor de bases de datos. " ;
}
?>

</body>
</html >

