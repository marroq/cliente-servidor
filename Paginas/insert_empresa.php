<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into Empresa(Nombre,Telefono,Direccion) values ('" . $_POST["nombre"] ."' , '" . $_POST["telefono"] ."' , '" . $_POST["direccion"] ."')";
			$result = mysql_query($sql);

			$sql = "select LAST_INSERT_ID() as id";
			$result2 = mysql_query($sql);

			while ($row = mysql_fetch_array($result2))
			{
				$id = $row["id"];
			}
			if (isset($_POST['depto']))
			{
				foreach ($_POST['depto'] as $depto) 
				{
					$sql = "insert into Empresa_Departamento(empresaid,deptoid)";
					$sql = $sql . " values(" . $id . ", " . $depto . ")";
					$result = mysql_query($sql);
				}
			}
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='busqueda_empresa.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
