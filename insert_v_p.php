<?php
$vente=$_POST['vente'];
$clt_p=$_POST['clt_p'];
$qte=$_POST['qte'];
include("conn.php");
$sqld=mysqli_query($con,"insert into  detail (Code_v,code_prdt,Quantité_vendu) values('$vente','$clt_p','$qte')")or die(mysqli_error($con));
$sqlppp=mysqli_query($con,"update produit set Qte_stck=Qte_stck-$qte where Id_pdt='$clt_p'")or die(mysqli_error($con));
header("Location:Ajouter_p_v.php?vte=$vente");
?>
