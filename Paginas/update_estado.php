<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <br>
        <font size='4'><b>Estado Modificado</b></font>
        <?PHP
                $sql="update Estado set nombre= '" . $_POST["nombre"] . "' where estadoid=" . $_POST["estado"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_estado.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
