<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Telefono Modificado</b></font><br>
        <?PHP
                $sql="update Telefono set";
                $sql = $sql . " empleadoid = " . $_POST["empleado"] . ",";
                $sql = $sql . " telefono = '" . $_POST["telefono"] . "'";
                $sql = $sql . " where telefonoid = '" . $_POST["telefonoid"] . "'";
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_telefono.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
