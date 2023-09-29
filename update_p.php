<?php
$Id_pdt=$_POST["id"];
$Libelle=$_POST["Libelle"];
$PU=$_POST["PU"];
$Qte_stck=$_POST["Qte_stck"];
include "conn.php";
// $con=mysqli_connect("localhost","root","");
// $db=mysqli_select_db($con,"itag");
$sql =mysqli_query($con,"update produit set Libelle='$Libelle',PU='$PU',Qte_stck='$Qte_stck' where Id_pdt='$Id_pdt'")or die(mysqli_error($con));

?>
<script>
    window.location.href="produit.php";
</script>
