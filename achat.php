<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boostsrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_boot.css">
</head>
<body>
    <h1 class="text-black-50">Gestion des achats</h1>
    <hr>
    <div class="container">
        <table class="table table-hover" border="1">
            <tr><td>Id</td><td>Nom</td><td>Prenom</td><td>Adresse</td><td>GSM</td><td> Id_prdt</td><td> Libelle</td><td> PU</td>
                <td> Quantit&eacute;_vendu</td><td> Somme</td></tr>
            <?php
                include "conn.php";
                $sql=mysqli_query($con," Select * from detail");
                while($row=mysqli_fetch_array($sql))
                {
                    echo"<tr>";
                    echo"<td>".$row[0]."</td>";
                    echo"<td>".$row[1]."</td>";
                    echo"<td>".$row[2]."</td>";
                    echo"<td>".$row[3]."</td>";
                    // echo"<td>".$row[4]."</td>"; -->
                    
        
                    echo "<td><a href='delete_prdt.php? Id_pdt=$row[0]';> Delete </a></td>";
                    echo "<td><a href='update_prdt.php? Id_pdt=$row[0]';> Update </a></td>";
                // echo "<td><a href='update_prdt.php? Id_pdt=$row[0]';> Update </a></td>"; -->
                    echo"</tr>";
                }
            ?>
            </table>
         </center>
        </div>
        </table>
    </div>
</body>
</html>