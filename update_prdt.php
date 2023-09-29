<style>
  body{
        background-color: #000;
        }
        h2{
            font-size:larger;
            color: aliceblue;
            margin-top: 4rem;
            margin-bottom: 1.5rem;
            font-family: Georgia, 'Times New Roman', Times, serif;

        }
        #E2{
             border-radius: 6px;
             font-size: large;
             font-weight: 600;
             background: #e5e9c4;
             letter-spacing: 1px;
             padding: 12px 28px;
        }
        #E2:hover{
            box-shadow: 0 0 5px rgb(243, 209, 147),
           0 0 25px rgb(233, 211, 171), 0 0 50px rgb(240, 214, 165),
           0 0 100px rgb(206, 184, 144), 
           0 0 200px rgb(199, 172, 123);
        }
        .form1{
    border: 2px solid #c1c78c;
    width: 30rem;
    height: 17rem;
    box-shadow: 4px 6px 7px #e2eb95;
 
        }
.form-group label{
    color: aliceblue;
}
td{
    color: aliceblue;
    font-size: larger;
}
input{
    font-size: larger;
}
</style>


<body>
    <center>
<h2>La modification des produits:</h2>
<form action="update_p.php" method="post" class="form1">
    <?php
    $Id_pdt=$_REQUEST['Id_pdt'];
    ?>
    <input type="hidden" name="id" value='<?php echo $Id_pdt; ?>'>
<?php
include "conn.php";
$sql=mysqli_query($con,"select * from produit where Id_pdt='$Id_pdt'");
while ($row=mysqli_fetch_array($sql))
{
    ?>
    
        <table style="margin-top: 1.7rem;">
            <td >Libelle :</td><td><input type="text" name="Libelle" value='<?php echo $row[1];?>'></td></tr>
           <tr><td>PU :</td><td><input type="text" name="PU" value='<?php echo $row[2];?>'></td></tr>
           <tr><td>Qte_stck:</td><td><input type="text" name="Qte_stck" value='<?php echo $row[3];?>'></td></tr>
          
           <tr><td colspan="2"><center><input type="submit" value="Modifier" id="E2" style="margin-right: 3rem; margin-top: 2.3rem;"><input type="reset" value="Annuler" id="E2"></center></td></tr>
        </table>
    </center>
    <?php
}
?>
</form>

</body>