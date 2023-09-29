<?php
$Id=$_REQUEST['Id'];
echo $Id;
include "conn.php";
$sql=mysqli_query($con,"delete from Client where Id_Clt='$Id'");

?>
<script>
    window.location.href="client.php";
</script>