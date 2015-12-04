<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <font size='4'><b>Proyecto Eliminado</b></font>
        <?PHP
                $sql="delete from Proyecto_Tarea where proyectoid= " . $_POST["id"];
                $result = mysql_query($sql);

                $sql="delete from Proyecto where proyectoid= " . $_POST["id"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_proyecto.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
