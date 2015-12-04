<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Tarea Modificada</b></font><br>
        <?PHP
                $sql="update Tarea set";
                $sql = $sql . " nombre = '" . $_POST["nombre"] . "',";
                $sql = $sql . " estadoid = " . $_POST["estado"];
                $sql = $sql . " where tareaid = '" . $_POST["tarea"] . "'";
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_tarea.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
