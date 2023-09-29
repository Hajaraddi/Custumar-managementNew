<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boostsrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_boot.css">
    <style>
h6{
    margin-top: 4rem;

}
.form1{
    border: 2px solid #c1c78c;
    width: 50rem;
    height: 30rem;
    box-shadow: 4px 6px 7px #e2eb95;
}
h6{
    color: aliceblue;
    font-size: medium;
    margin-bottom: 3rem;
}
.form-group label{
    color: aliceblue;
}
        #E2{
             border-radius: 6px;
             font-size: large;
             font-weight: 600;
             background: #e5e9c4;
             letter-spacing: 1px;
             padding: 12px 28px;
        }
        #E2:hover{
            box-shadow: 0 0 5px rgb(243, 209, 147),
           0 0 25px rgb(233, 211, 171), 0 0 50px rgb(240, 214, 165),
           0 0 100px rgb(206, 184, 144), 
           0 0 200px rgb(199, 172, 123);
        }
    </style>
</head>
<body>
<form action="insert_clt.php" method="post" class="form1">
    <center>
         <h6> Inserez les informations :</h6>
        <div class="col-md-6">
          
        <div class="form-group">
            <label> Entrez le nom</label>
            <input type="text" name="nom" class="form-control" >
        </div>
       <div class="form-group">
            <label>Entrez le prenom</label>
            <input type="text" name="prenom" class="form-control">
        </div>
        <div class="form-group">
            <label> Entrez l'adresse</label>
            <input type="text" name="adresse" class="form-control">
        </div>
        <div class="form-group">
            <label > Entrez GSM </label>
            <input type="text" name="gsm" class="form-control">
        </div>
        <br>
        <!-- <tr><td><button type="button" value ="env"> Envoyer </button></td></tr> -->
        <tr><td colspan="2"><center><input type="submit" id="E2" style="margin-right: 2rem; " value="Enregistrer"> <input type="reset" id="E2" value="Annuler"></center></td></tr>

        <!-- <div>
            <button type="button" class="btn btn-outline-primary">Enregister</button>
        </div>
    </div>
       <table bgcolor="wheat" width:400px>
    <tr><td>Nom:</td><td><input type="text" name="nom"></td></tr>
    <tr><td>Prenom:</td><td><input type="text" name="prenom"></td></tr> 
    <tr><td>Adresse:</td><td><input type="text" name="adresse"></td></tr> 
    <tr><td>GSM:</td><td><input type="text" name="gsm"></td></tr>   
   <tr><td colspan="2"><center><input type="submit" value="Enregistrer"><input type="reset" value="Annuler"></center></td></tr>
</table> -->
    </center>
</form> 
</body>
</html>
