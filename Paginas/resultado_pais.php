<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Paises</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>ID</b></td>
			<td><b>Nombre</b></td> 
			<td><b>Modificar</b></td>
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select paisid, nombre from Pais";
			$sql = $sql . " where nombre like '%" . $_POST["nombre"] . "%'";
			$sql = $sql . " order by nombre";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["paisid"];
				echo "</td>";
				echo "<td>";
				echo $row["nombre"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["paisid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["paisid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='edit_pais.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='delete_pais.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_pais.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='ingreso_pais.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
