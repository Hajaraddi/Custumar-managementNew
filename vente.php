<style>
     h1{
            color:burlywood;
            border: 2px solid #000;
            padding: 10px;
            display: inline-block;
            box-shadow: 2px 5px 8px  rgba(208, 212, 144, 0.5);
     }
     
.form1{
    border: 2px solid #c1c78c;
    width: 30rem;
    height: 17rem;
    box-shadow: 4px 6px 7px #e2eb95;
    margin-top: 2rem;
    padding: 40px;
}
td{
    color: aliceblue;
    font-size: large;
    font-weight: 500;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

#E2{
             border-radius: 6px;
             font-size: large;
             font-weight: 600;
             background: #e5e9c4;
             letter-spacing: 1px;
             padding: 12px 28px;
             margin-top: 4rem;
             margin-bottom: 2rem;
        }
        #E2:hover{
            box-shadow: 0 0 5px rgb(243, 209, 147),
           0 0 25px rgb(233, 211, 171), 0 0 50px rgb(240, 214, 165),
           0 0 100px rgb(206, 184, 144), 
           0 0 200px rgb(199, 172, 123);
        }
    body{
        background-color: #000;
    }
</style>

<body>
    

<center>
    <h1>vente</h1>

    <form action="insert_v.php" method="post" class="form1">
        <table>
            <?php
            include("conn.php");
            $sql = mysqli_query($con, "select * from client");
            ?>
            <tr>
                <td>Client</td>
                <td colspan="1"><select name="clt_c">
                        <option>--selectionner le client--</option>
                        <?php
                        while ($row = mysqli_fetch_array($sql)) {

                            echo "<option value='$row[0]'>$row[1] $row[2] </option>";
                        }
                        ?>
                    </select></td>
            </tr> <br>

            <?php
            $sql = mysqli_query($con, "select * from produit");
            ?>
            <tr>
                <td>produit</td>
                <td><select name="clt_p">
                        <option>--selectionner le produit--</option>
                        <?php
                        while ($row = mysqli_fetch_array($sql)) {
                            echo "<option value='$row[0]'> $row[1] </option>";
                        }
                        ?>
                    </select></td>
                    
            <tr>
                <td>date</td>
                <td colspan="1"><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>qte</td>
                <td colspan="1"><input type="text" name="qte"></td>
            </tr>
            
                <td colspan="2">
                    <center><input type="submit" value="Enregister" id="E2"></center>
                </td>
            
</table>
</form>
</center>

</body>
