<?php
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nuevo Estatus</b></font>
		<br><br>
		<form class="form-horizontal" name='datos' method='post' action='insert_estado.php'>
			<div class="form-group">
    		<label class="col-sm-4 control-label">Estado</label>
    		<div class="col-sm-5">
    			<input type="text" name="estado" class="form-control" placeholder="Nombre">
    		</div>
    		</div>
			
			<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
			<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
