<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <br><br>
        <font size='4'><b>Departamento Modificado</b></font>
        <?PHP
                $sql="update Departamento set nombre= '" . $_POST["nombre"] . "' where deptoid=" . $_POST["depto"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_depto.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
