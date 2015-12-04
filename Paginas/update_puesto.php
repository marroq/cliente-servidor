<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <br><br>
        <font size='4'><b>Puesto Modificado</b></font>
        <?PHP
                $sql="update Puesto set nombre= '" . $_POST["nombre"] . "' where puestoid=" . $_POST["puesto"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_puesto.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
