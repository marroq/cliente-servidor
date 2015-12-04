<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="col-sm-offset-4 col-sm-5">
	<font size='4'><b>Tareas</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>Proyecto</b></td> 
			<td><b>Tarea</b></td>
		 </tr>
		 <?PHP
			$sql = "select p.nombre as nombrep, t.nombre as nombret from Proyecto p, Tarea t, Proyecto_Tarea pt";
			$sql = $sql . " where p.proyectoid=pt.proyectoid and t.tareaid=pt.tareaid";
			$sql = $sql . " and pt.proyectoid=" . $_POST["id"];
			$sql = $sql . " order by t.nombre";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["nombrep"];
				echo "</td>";
				echo "<td>";
				echo $row["nombret"];
				echo "</td>";
			}
		?>
	</table>
	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_proyecto.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
