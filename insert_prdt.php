<?php
 $Libelle=$_POST["Libelle"];
 $PU=$_POST["PU"];
 $Qte_stck=$_POST["Qte_stck"];
// $Qte_stck=$_POST["Qte_stck"];
 include "conn.php";
  $sql=mysqli_query($con,"insert into produit (Libelle,PU,Qte_stck) values ('$Libelle','$PU','$Qte_stck')") or die (mysqli_error($con));
  ?> 
 <script>
    window.location.href="produit.php"
 </script>