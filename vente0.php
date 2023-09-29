<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boostsrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_v.css">
</head>
<body>
    <br>
    <br>
    <center>
    <h1 class="text text-black-50">Les produits vendus</h1>
    <hr>
</center>
<form action="Ajouter_p_v.php" method="post">
    <?php 
      include "conn.php";
      $sql_clt=mysqli_query($con,"select * from Client");
    ?>
     <div class="col-md-4">
      <label  class="form-label"> Clients :</label>
      <input  class="form-control" list="datalistOptions" id="exampleDataList"  placeholder="Type to search...">
      <datalist id="datalistOptions">
        <?php 
         while($row= mysqli_fetch_array($sql_clt))
         echo "<option value='$row[0]'> $row[1] $row[2] </option>";
        ?>
      </datalist>
      </div>
       <?php 
        include "conn.php";
        $sql_prdt=mysqli_query($con,"select * from produit");
        ?>
    <div class="col-md-4 ">
         <label  class="form-label">Produits :</label>
         <input  class="form-control" list="datalistOptions" id="exampleDataList1" placeholder="Type to search...">
         <datalist id="datalistOptions1">
          <?php 

            while( $row= mysqli_fetch_array($sql_prdt))

            echo "<option value='$row[0]'> $row[1] $row[2] </option>";
            ?>
          </datalist>
         <center> <button type="button" class="btn btn-outline-dark">Envoyer</button></center>
   </div>
 <!-- <form action="insert_v.php" method="post">
        <?php 
    //    include "conn.php";
    //    $sql_clt=mysqli_query($con,"select * from Client");
       ?>
<div class="custom-select" style="width:400px;">
    <select name="clt">
        <option>--Selectionnez le client--</option>
<?php
// while($row = mysqli_fetch_array($sql_clt))
// {
    // echo"<option value ='$row[0]'>$row[1] $row[2]</option>";
// }
?>
</select>
<?php 
// $sql_prdt=mysqli_query($con,"select * from produit");

?>
<select name="prdt">
    <option>--Selectionnez le produit--</option>
    <?php 
    // while ($row=mysqli_fetch_array($sql_prdt))
    // {
    //     echo "<option value ='$row[0]'>$row[1] $row[2] </option>";

    // }

    ?>
    </select>
</div>-->
    <button>Enregistrer</button>
    
    </form> 
    </center>
</body>
</html>