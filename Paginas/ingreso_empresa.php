<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nueva Empresa</b></font>
		<br><br>
		<form class="form-horizontal" name='datos' method='post' action='insert_empresa.php'>
			<div class="form-group">
    		<label class="col-sm-4 control-label">Nombre</label>
    		<div class="col-sm-5">
    			<input type="text" name="nombre" class="form-control" placeholder="Nombre">
    		</div>
    		</div>
		
			<div class="form-group">
    		<label class="col-sm-4 control-label">Telefono</label>
    		<div class="col-sm-5">
    			<input type="text" name="telefono" class="form-control" placeholder="Telefono">
    		</div>
    		</div>
		
			<div class="form-group">
    		<label class="col-sm-4 control-label">Direccion</label>
    		<div class="col-sm-5">
			<textarea class="form-control" name="direccion" cols='22' row='3'></textarea>
			</div>
			</div>

			<table>
			<tr>
			<td><b>Departamentos</b></td>
			<td>
			<?PHP
				$sql = "select deptoid, nombre from Departamento";
				$sql = $sql . " order by nombre";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
				{
					echo "<input type='checkbox' name='depto[]' value='" . $row["deptoid"] . "'>";
					echo $row["nombre"] . "<br>";
				}
			?>
			<br>
			</td>
			</tr>
			</table>
			
			<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
			<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
