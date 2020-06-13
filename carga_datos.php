<?php 
$user="root";
$host="localhost";
$clave="analistas";
$dbase="alumnos";
$table="alumno";
$conexion = new mysqli($host,$user,$clave);

if ( $conexion-> connect_error > 0) {
    echo " No se ha podido establecer conexión con el servidor de bases de datos.<br> " ;
    die ( " Error: " . $conexion-> connect_error);
}
    
//
$error=false;
//
// Validar entradas
//
if($_POST['accion'] == "Nuevo cliente") {
if (!isset($_POST["idalumno"])) {
    $error=true;
    echo "Error: Campo de código de alumno vacio";
    }
if (!isset($_POST["nombre"])){
    $error=true;
    echo "Error: Campo de nombre vacio";    
    }
if (!isset($_POST["apellido"])) {
    $error=true;
    echo "Error: Campo de apellido vacio";
    }

//
if(!$error) { // Si no hubo error, proceder
    $idalumno = $_POST["idalumno"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
  
    
    // conecto con la base de datos
    mysqli_select_db($conexion, $dbase);
    // crear cadena de inserción SQL
    $sql = "INSERT INTO alumno (idalumno, nombre, apellido)
            VALUES ('$idalumno', '$nombre', '$apellido')";

    // Ejecutar y validar el comando SQL 
    $result = mysqli_query($conexion, $sql);
    if ($result) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    mysqli_close($conexion);
    }
}
    echo "<BR><BR>";
    echo "<center><a href='borrar.php'>Volver a la carga de datos</a></center>"
?>