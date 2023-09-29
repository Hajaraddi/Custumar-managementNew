<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boostsrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylee.css">
</head>
<style>
        h1{
            color:burlywood;
            border: 2px solid #000;
            padding: 10px;
            display: inline-block;
            box-shadow: 2px 5px 8px rgba(208, 212, 144, 0.5);
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
<body style="background-color: #000;">
    <center>
        <br>
        <!-- <img src="photo1.jpeg" width="100%" height="250px"> -->
        <!-- <img src="WhatsApp Image 2023-04-15 at 13.54.06.jpeg" width="100%" height="350px"> -->
        <br>
    <h1 style="margin-bottom: 3rem;">Gestion des produits</h1>
    
    <?php
    include "Ajouter_prdt.php";
    ?>
    <br><br>
    <div class="container">
   
    <table class="table table-hover" border="1">
        <tr><td>Id_pdt</td><td>Libelle</td><td>PU</td><td> Qte_stck </td><td colspan="2"> Action</td></tr>
        <?php
        include "conn.php";
        $sql=mysqli_query($con," Select * from produit");
        while($row=mysqli_fetch_array($sql))
        {
            echo"<tr>";
            echo"<td>".$row[0]."</td>";
            echo"<td>".$row[1]."</td>";
            echo"<td>".$row[2]."</td>";
            echo"<td>".$row[3]."</td>";
            // echo"<td>".$row[4]."</td>";
            

            echo "<td><a href='delete_prdt.php? Id_pdt=$row[0]';> Delete </a></td>";
            echo "<td><a href='update_prdt.php? Id_pdt=$row[0]';> Update </a></td>";
            // echo "<td><a href='update_prdt.php? Id_pdt=$row[0]';> Update </a></td>";
            echo"</tr>";
        }
        ?>
    </table>
 </center>
</div>
</body>

</html>