<?php
$client=$_REQUEST['code_clt'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boostsrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="stylee.css">
     <style>
    body{
        background-color: #000;
    }
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
        .rtr{
            font-size: larger;
            color: #96916c;
            text-decoration: none;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          
        
        }
     </style>
</head>
<body>
    <center>
    <br>
   
      
        <h1>Les Achats <php echo $nom ?></h1>
       
        <br>
        <br>
      
        <br><br>
         <div class="container">
            
            
         <table class="table table-hover">
            <tr><td>Id</td><td>Nom</td><td>Prenom</td><td>Adresse</td><td>GSM</td><td> Id_prdt</td><td> Libelle</td><td> PU</td>
            <td> Quantit&eacute;_vendu</td><td> Somme</td></tr>
			
			
            <?php
			$tot=0;
	        $pu=0;
	        $qte=0;
	        $somme=0;
	        $ht=0;
	        $tva=0;
	        $tt=0;
            $ttc=0;
	      
            include "conn.php";
         $sql=mysqli_query($con,"SELECT * FROM client,produit,vente,detail WHERE
          client.Id_Clt=vente.code_clt AND produit.Id_pdt=detail.code_prdt AND
          detail.Code_v=vente.Code_v and client.Id_Clt=$client")or die(mysqli_error($con));
	  
	  
       while($row=mysqli_fetch_array($sql))
       {
	  
	     $pu=$row[7];
	     $qte=$row[14];
	     $tot=$pu*$qte; 
	     $somme=$somme + $tot;
        echo"<tr>";
        echo"<td>".$row[0]."</td>";
        echo"<td>".$row[1]."</td>";
        echo"<td>".$row[2]."</td>";
        echo"<td>".$row[3]."</td>";
        echo"<td>".$row[4]."</td>";
		echo"<td>".$row[5]."</td>";
        echo"<td>".$row[6]."</td>";
        echo"<td>".$row[7]."</td>";
		echo"<td>".$row[14]."</td>";
		echo"<td>".$somme."</td>";
        echo "</tr>"; 

           $ht=$somme;   
		   $tva=$ht*0.2;
		   $ttc=$ht*1.2;
		   }
		
		   
       ?>
        </table>
        <table class="table table-hover">
            
	   <tr> <center><td>HT  </td><td><input type="text" value="<?php echo $ht ;?>"></td></center></tr><br>
       <tr> <center><td> TVA </td><td><input type="text" value="<?php echo $tva ;?>"></td></center></tr><br>
       <tr> <center><td> TTC  </td><td><input type="text" value="<?php echo $ttc; ?>"></td></center></tr><br>
       </table>
   
</div> </center>
</body>
</html>
     <a href="Client.php" class="rtr"><center> Retour</center></a>



