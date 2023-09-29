<?php
$Id_pdt=$_REQUEST['Id_pdt'];
echo $Id;
include "conn.php";
$sql=mysqli_query($con,"delete from produit where Id_pdt='$Id_pdt'");

?>

<script>
    window.location.href="produit.php";
</script>