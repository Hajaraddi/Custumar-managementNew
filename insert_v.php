<!-- <?php 
// $clt = $_POST['clt'];
// $prdt = $_POST['prdt'];
// echo $clt;
// echo $prdt;
?> -->

<?php
$clt_c=$_POST["clt_c"];
$clt_p=$_POST["clt_p"];
$date=$_POST["date"];
$qte=$_POST["qte"];
$Code_v=0;
include("conn.php");

$sqlv=mysqli_query($con,"insert into  vente (Date_v,code_clt) values('$date','$clt_c')")or die(mysqli_error($con));
$sql=mysqli_query($con,"select max(Code_v)as maxi from  vente ")or die(mysqli_error($con));
while($row=mysqli_fetch_array($sql)){
$id_v=$row[0];
}

$sqld=mysqli_query($con,"insert into  detail (Code_v,code_prdt,Quantité_vendu) values('$id_v','$clt_p','$qte')")or die(mysqli_error($con));
$sqlppp=mysqli_query($con,"update produit set Qte_stck=Qte_stck-$qte where Id_pdt='$clt_p'")or die(mysqli_error($con));
header("Location:Ajouter_p_v.php?vte=$id_v");
?>
