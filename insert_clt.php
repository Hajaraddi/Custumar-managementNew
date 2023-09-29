<?php

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$adresse=$_POST["adresse"];
$gsm=$_POST["gsm"];
include "conn.php";
$sql=mysqli_query($con,"insert into Client(Nom,Prenom,Adresse,GSM) values('$nom','$prenom','$adresse','$gsm')") or die (mysqli_error($con));

?>
<script>
window.location.href="client.php"
</script>