<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql2="select distinct fecha, count(*) as value from Horario where empleadoid=". $_POST["empleado"];
			$sql2 = $sql2 . " and fecha=" . "STR_TO_DATE('" . $_POST["fecha"] . "', '%d/%m/%Y')" . " group by fecha";
			$result=mysql_query($sql2);
			$row=mysql_fetch_array($result);

			if ($row["value"]>=1) {
				echo "EMPLEADO YA TIENE ESTE DIA INGRESADO";
			}
			else 
			{
				if (($_POST["hentrada"] <= 0) || ($_POST["hsalida"] <= 0) || ($_POST["hentrada"] > 12) || ($_POST["hsalida"] > 12)) 
				{
					echo "ERROR! HORARIO NO PERMITIDO";
				} 
				else 
				{
					$sql="insert into Horario(EmpleadoId,Fecha,Entrada,Salida) values (" . $_POST["empleado"] . ", STR_TO_DATE('" . $_POST["fecha"] . "', '%d/%m/%Y'), " . $_POST["hentrada"] . " , " . $_POST["hsalida"] . ")";
					$result = mysql_query($sql);
				}
			}
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='busqueda_horario.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
