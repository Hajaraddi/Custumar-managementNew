<?php
$vente=$_REQUEST['vte'];

echo $vente;

?>
<center>
    <h1>vente</h1>

    <form action="insert_v_p.php" method="post">
        <table border="1">
            <?php
            include("conn.php");
           ?>
           

            <?php
            $sql = mysqli_query($con, "select * from produit where Id_pdt not in ( select code_prdt from detail where Code_v='$vente')")or die(mysqli_error($con));
            ?>
            <tr>
                <td>produit</td>
                <td>
				<input type="hidden" name="vente" value="<?php  echo $vente; ?>">
				<select name="clt_p">
                        <option>--selectionner le produit--</option>
                        <?php
                        while ($row = mysqli_fetch_array($sql)) 
                        {
                            echo "<option value='$row[0]'> $row[1] </option>";
                        }
                        ?>
                  </select></td>
                    
           
            <tr>
                <td>qte</td>
                <td colspan="1"><input type="text" name="qte"></td>
            </tr>
            
                <td colspan="2">
                    <center><input type="submit" value="Enregister"></center>
                </td>
            
</table>
       <a href="vente.php"> <p>Retour</p></a>
    </form>
</center>