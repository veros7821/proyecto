<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
<title>Búsqueda por nombre</title>
</head>
    <?php
    $user = "root";
    $host = "localhost";
    $clave = "analistas";
    $dbase = "alumnos";
    $table = "alumno";
    $nombre=$_POST['nombre'];
    $conexion = new mysqli($host, $user, $clave);
    if ($conexion) {
        mysqli_select_db($conexion, $dbase);
        $query = "SELECT * FROM $table WHERE nombre LIKE '$nombre%' ORDER BY nombre";
        $result = mysqli_query($conexion, $query);
        ?>
   

</body>

</html>


