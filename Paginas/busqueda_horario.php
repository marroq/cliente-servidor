<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
	<br><br>
	<font size='4'><b>Busqueda Horarios</b></font>
	<br><br>
	<form class="form-horizontal" name='datos' method='post' action='resultado_horario.php'>
		<div class="form-group">
    		<label class="col-sm-4 control-label">Empleado</label>
			<div class="col-sm-5">
			<select name="empleado" class="form-control">
			<option value="-1" selected></option>
			<?PHP
				$sql = "select empleadoid, nombre1, apellido1 from Empleado";
				$sql = $sql . " order by nombre1";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
				{
					echo "<option value='" . $row["empleadoid"] . "'>";
					echo $row["nombre1"] . " " . $row["apellido1"] .  "</option>";
				}
			?>
		</select>
		</div>
		</div>

		<div class="form-group">
    		<label class="col-sm-4 control-label">Fecha</label>
    		<div class="col-sm-5">
    			<input type="text" name="fecha" class="form-control" placeholder="YYYY-mm-dd">
    		</div>
    	</div>

		<div class="form-group">
    		<label class="col-sm-4 control-label">Hora Entrada</label>
    		<div class="col-sm-5">
    			<input type="text" name="hentrada" class="form-control" placeholder="Hora Entrada">
    		</div>
    	</div>

		<div class="form-group">
    		<label class="col-sm-4 control-label">Hora Salida</label>
    		<div class="col-sm-5">
    			<input type="text" name="hsalida" class="form-control" placeholder="Hora Salida">
    		</div>
    	</div>
		
		<button type="submit" class="btn btn-primary" onClick="window.location='resultado_horario.php';">Busqueda</button>
		<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
		<button type="button" class="btn btn-primary" onClick="window.location='ingreso_horario.php';">Nuevo</button>
	</form>
	</div>
</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
