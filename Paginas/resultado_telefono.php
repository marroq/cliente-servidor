<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Telefonos</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>ID</b></td>
			<td><b>Empleado</b></td>
			<td><b>Telefono</b></td>
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td> 
		 </tr>
		 <?PHP
			$sql = "select t.telefonoid, t.telefono, e.nombre1, e.apellido1 from Empleado e, Telefono t";
			$sql = $sql . " where e.empleadoid=t.empleadoid and t.telefono like '%" . $_POST["telefono"] . "%'";
			if ($_POST["empleado"] != "-1")
			{
				$sql = $sql . " and e.empleadoid=" . $_POST["empleado"];
			}
			$sql = $sql . " order by e.nombre1";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["telefonoid"];
				echo "</td>";
				echo "<td>";
				echo $row["nombre1"] . " " . $row["apellido1"];
				echo "</td>";
				echo "<td>";
				echo $row["telefono"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["telefonoid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["telefonoid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='edit_telefono.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='delete_telefono.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_telefono.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='ingreso_telefono.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
