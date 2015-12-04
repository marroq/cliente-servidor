<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Cliente Modificado</b></font><br>
        <?PHP
                $sql="update Cliente set";
                $sql = $sql . " nombre = '" . $_POST["nombre"] . "',";
                $sql = $sql . " paisid = " . $_POST["pais"];
                $sql = $sql . " where clienteid = '" . $_POST["cliente"] . "'";
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_cliente.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
