<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <font size='4'><b>Horario Eliminado</b></font>
        <?PHP
                $sql="delete from Horario where horarioid= " . $_POST["id"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_horario.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
