<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <font size='4'><b>Departamento Eliminado</b></font>
        <?PHP
                $sql="delete from Departamento where deptoid= " . $_POST["id"];
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
