<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update client</title>
    <link rel="stylesheet" href="boostsrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_boot.css">
</head>
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
    width: 50rem;
    height: 26rem;
    box-shadow: 4px 6px 7px #e2eb95;
 
        }
.form-group label{
    color: aliceblue;
}
</style>

<body>
    <center>
    <h2>La modification des informations des clients:</h2>
<form action="update_c.php" method="post" class="form1">
    
    <?php
    $Id=$_REQUEST['Id'];
    ?>
    <input type="hidden" name="id" value='<?php echo $Id; ?>'>
<?php
include "conn.php";
$sql=mysqli_query($con,"select * from Client where Id_Clt='$Id'");
while ($row=mysqli_fetch_array($sql))
{
    ?>
    
        <div class="col-md-6">
          
            <div class="form-group">
                <label style="margin-top: 3rem;"> Entrez le nom</label>
                <input type="text" name="nom" class="form-control" value='<?php echo $row[1];?>' >
            </div>
           <div class="form-group">
                <label>Entrez le prenom</label>
                <input type="text" name="prenom" class="form-control" value='<?php echo $row[2];?>'>
            </div>
            <div class="form-group">
                <label> Entrez l'adresse</label>
                <input type="text" name="adresse" class="form-control" value='<?php echo $row[3];?>'>
            </div>
            <div class="form-group">
                <label > Entrez GSM </label>
                <input type="text" name="gsm" class="form-control" value ='<?php echo $row[4];?>'>
            </div>
            <br>
    
        <table>
            
            <!-- <tr><td>Nom :</td><td><input type="text" name="nom" value='<?php echo $row[1];?>'></td></tr> -->
           <!-- <tr><td>Prenom :</td><td><input type="text" name="prenom" value='<?php echo $row[2];?>'></td></tr>
           <tr><td>Adresse :</td><td><input type="text" name="adresse" value='<?php echo $row[3];?>'></td></tr>
           <tr><td>GSM :</td><td><input type="text" name="gsm" value ='<?php echo $row[4];?>'></td></tr> -->
           <tr><td colspan="2"><center><input type="submit" value="Modifier" id="E2" style="margin-right: 3rem;"><input type="reset" value="Annuler" id="E2"></center></td></tr>
        </table>
    </center>
    <?php
}
?>
</form>
</body>
</html>
