<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <br><br>
        <font size='4'><b>Pais Modificado</b></font>
        <?PHP
                $sql="update Pais set nombre= '" . $_POST["nombre"] . "' where paisid=" . $_POST["pais"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_pais.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
