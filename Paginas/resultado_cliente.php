<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Clientes</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>ID</b></td>
			<td><b>Nombre</b></td> 
			<td><b>Pais</b></td> 
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select c.clienteid, c.nombre as nombre1, p.nombre as ppais from Cliente c, Pais p";
			$sql = $sql . " where p.paisid=c.paisid and c.nombre like '%" . $_POST["nombre"] . "%'";
			if ($_POST["pais"] != "-1")
			{
				$sql = $sql . " and p.paisid=" . $_POST["pais"];
			}
			$sql = $sql . " order by c.nombre";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["clienteid"];
				echo "</td>";
				echo "<td>";
				echo $row["nombre1"];
				echo "</td>";
				echo "<td>";
				echo $row["ppais"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["clienteid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["clienteid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='edit_cliente.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='delete_cliente.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_cliente.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='ingreso_cliente.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
