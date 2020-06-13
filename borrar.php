<?php
$user = "root";
$host = "localhost";
$clave = "analistas";
$dbase = "alumnos";
$table = "alumno";
$conexion = new mysqli($host, $user, $clave);

// selección de la base de datos con la que vamos a trabajar
mysqli_select_db($conexion, $dbase);
?>
<form method="post" action="borrar2.php">
<?php
// Creamos la sentencia SQL y la ejecutamos

?>
<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
body {
	margin: 0px
} /* Configuramos la página */
#vacia {
	display: none
} /* Ocultamos la tabla con la fila vacía */
.icono {
	height: 24px
} /* Definimos el alto de los iconos */
td {
	text-align: center;
	padding-left: 2px;
	padding-right: 2px;
} /* Definimos el estilo de las celdas de la tabla */
input {
	padding-left: 5px;
	padding-right: 5px;
	border: solid 1px rgba(0, 0, 0, 0.30);
	background-color: rgba(255, 255, 255, 0.75)
} /* Definimos las características de los campos de texto */
tr:nth-child(odd) {
	background-color: rgba(225, 222, 222, 1.00);
	border-spacing: 1px;
	border-collapse: collapse;
} /* Definimos el estilo de las filas pares de la tabla */
#datos {
	border: rgba(0, 0, 0, 1.00) solid 1px;
	border-collapse: collapse;
} /* Definimos el estilo de la tabla que contiene los datos */
th {
	background: rgba(0, 0, 0, 1.00);
	color: white;
	text-align: center;
	padding-left: 2px;
	padding-right: 2px;
}
/* Definimos el estilo de la cabecera de la tabla que contiene los datos */
</style>
	<form action="borrar2.php" method="post">
		<div id="ui">

			<!-- Esta tabla presenta los datos de la base -->
			<table>
				<tr>
					<td>
					
					<th WIDTH="100">
					
					<th>C&oacutedigo</th>
					<th WIDTH="100">
					
					<th>Nombre</th>
					<th WIDTH="240">
					
					<th>Apellido</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>


				</tr>
						<?php
    $query = "SELECT * FROM $table ORDER BY nombre";
    $result = mysqli_query($conexion, $query);
    
    while ($row = mysqli_fetch_array($result)) {
        ?>
                 	 <table>
					<tr>
						<td>
							<form action="borrar2.php" method="post">
								<input type="text" name="idalumno" value="<?=$row['idalumno']?>">
								<input type="text" name="nombre" value="<?=$row['nombre']?>"> <input
									type="text" name="apellido" value="<?=$row['apellido']?>"> <input
									type="hidden" name="idalumno" value="<?=$row['idalumno']?>"> <input
									type="hidden" name="accion" value="Eliminar">
								<button type="submit" class="btn btn-danger">
									<span class="glyphicon glyphicon-trash"></span> Eliminar
								</button>
								<input type="submit" href="borrar2.php" class="btn btn-success"
									name="accion" value="Modificar">
							</form>
						</td>

					</tr>
				</table>
				</tr>
			
					<?php
    }
    ?>
    <!-- Añadir un nuevo cliente /////////////////////////////////-->
    <form action="carga_datos.php" method="post">
    <input type="hidden" name="accion" value="Nuevo cliente">
    <tr>
    <td><input type="text" name="idalumno" size="10"></td>
    <td><input type="text" name="nombre"></td>
    <td><input type="text" name="apellido"></td>
    <td colspan="2">
    <button type="submit" class="btn btn-success">
    <span class="glyphicon glyphicon-ok"></span> Nuevo cliente
    </button>
    </td>
    
    </tr>
    </form>
    
					 
					

