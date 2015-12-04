<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nueva Tarea</b></font>
		<br><br>
		<form form class="form-horizontal" name='datos' method='post' action='insert_tarea.php'>
			<div class="form-group">
    		<label class="col-sm-4 control-label">Nombre</label>
    		<div class="col-sm-5">
    			<input type="text" name="nombre" class="form-control" placeholder="Nombre">
    		</div>
    		</div>

			<div class="form-group">
    		<label class="col-sm-4 control-label">Estatus</label>
			<div class="col-sm-5">
			<select name="estado" class="form-control">
				<option value="-1" selected></option>
				<?PHP
					$sql = "select estadoid, nombre from Estado";
					$sql = $sql . " order by nombre";
					$result = mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{
						echo "<option value='" . $row["estadoid"] . "'>";
						echo $row["nombre"] . "</option>";
					}
				?>
			</select></div></div>
			
			<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
			<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
