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
<style>
h6{
    margin-top: 4rem;

}
.form1{
    border: 2px solid #c1c78c;
    width: 50rem;
    height: 29rem;
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

<body>
    

</html>

<form  action="insert_prdt.php" method="post" class="form1">
    <center>
        <h6> Inserez les informations :</h6>
        <div class="col-md-6">
            <div class="form-group">
                <label>Libelle</label>
                <input type="text" name="Libelle" class="form-control">
            </div>
            <div class="form-group">
                <label>PU</label>
                <input type="text" name="PU" class="form-control">
            </div>
            <div class="form-group">
             <label>Qte_stck</label>
             <input type="text" name="Qte_stck" class="form-control">
            </div>
            <br>
            <tr><td colspan="2"> <center><input type="submit"   style="margin-right: 2rem;" value="Enregister" id="E2"><input type="reset" value="Annuler" id="E2"></center></td></tr>
          

        </div>
        
    </center>
</form>
</body>