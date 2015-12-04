<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
    <div align='center'>
        <br><br>
        <font size='4'><b>Modificar Puesto</b></font>
        <br><br>
        <form class="form-horizontal" name='datos' method='post' action='update_puesto.php'>
            <?PHP
                $sql="select nombre from Puesto";
                $sql= $sql . " where puestoid= " . $_POST["id"];
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                    $nombre = $row["nombre"];
                }
            ?>
            
            <input type='hidden' name="puesto" value='<?PHP echo $_POST["id"];?>'>

            <div class="form-group">
            <label class="col-sm-4 control-label">Nombre</label>
            <div class="col-sm-5">
                <input type="text" name="nombre" value="<?PHP echo $nombre; ?>" class="form-control" placeholder="Nombre">
            </div>
            </div>
            
            <input type='submit' class="btn btn-success" value='Grabar'> <br><br>
            <button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
            </form>
        </div>
    </body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
