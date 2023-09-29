<?php
$id=$_POST["id"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$adresse=$_POST["adresse"];
$gsm=$_POST["gsm"];
include "conn.php";
$sql=mysqli_query($con,"update client set Nom ='$nom',Prenom='$prenom',
Adresse='$adresse',GSM='$gsm' where Id_Clt='$id'") or die(mysqli_error($con));

?>
<script>
    window.location.href="client.php";
</script>