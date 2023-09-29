<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Client</title>
     <link rel="stylesheet" href="boostsrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="stylee.css">
      <style>
        h1{
            color:burlywood;
            border: 2px solid #000;
            padding: 10px;
            display: inline-block;
            box-shadow: 2px 5px 8px rgba(208, 212, 144, 0.5);
            margin-bottom: 3rem;
        }
        table{
            border: 2px solid #000;
            box-shadow: 10px 4px 8px #96916c;
        }
        tr{
            background: #ece9cc;
        }
        td a {
            text-decoration: none;
            color: #000;
            font-size: large;
        }
      </style>
</head>
<body style="background-color: #000;">
   <center>
       <br>
         
        <h1>Gestion des Clients</h1>
        
        <br>
        <br>
        <?php
        include "Ajouter_clt.php";
        ?>
        <br><br>
        <div class="container">       
 <table class="table table-hover">

       <tr><td>Id</td><td>Nom</td><td>Prenom</td><td>Adresse</td><td>GSM</td><td>Vente</td><td colspan="2" ><center> Action </center></td></tr>
        <?php
	      include "conn.php";
          $sql=mysqli_query($con,"select * from client")or die(mysqli_error($con));
	   
       while($row=mysqli_fetch_array($sql))
       {   

        echo"<tr>";
        echo"<td>".$row[0]."</td>";
        echo"<td>".$row[1]."</td>";
        echo"<td>".$row[2]."</td>";
        echo"<td>".$row[3]."</td>";
        echo"<td>".$row[4]."</td>";
		echo"<td>" ?>
        <a href="Detail_V.php?code_clt=<?php  echo $row[0]; ?>">Detail Vente</a></td>
       
        <?php
	    echo"<td><a href='delete_clt.php? Id=$row[0]';> Delete </a></td>";
        echo"<td><a href='update_clt.php? Id=$row[0]';> Update </a></td>";
	   }
       ?>
       </table>
   
</div> 
</center>
</body>
</html>
