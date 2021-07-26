<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>COTISATION</h1>
    <form action="saisiecotisation.php" method="post">
     veuillez entré d'abord votre matricule
    <label for="Matricule">Matricule</label>
    <input type="number" name="matricule" placeholder="entrer votre matricule">  
    <label >Choisir votre moi de payment:</label>
    <input type="text" name="mois">
    <label >Choisir votre motif de payment de payement:</label>
    <input type="text" name="motif">
    <label >Montant</label>
    <input type="number" name="Montant" >  
    <button type="submit" name="submit">enregistrer</button>
    </form>
    <?php
        $servname = 'localhost';
        $dbname = 'espacemembre';
        $user = 'root';
        $pass = '';
        
        try{
            $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        }

        if(isset($_POST['submit'])){
            $matricule=$_POST['matricule'];
            $moiscotisation=$_POST['mois'];
            $motif=$_POST['motif'];
            $montant=$_POST['montant'];
        }
        $matricule=$_POST['matricule'];
        $montant=$_POST['montant'];
        $moiscotisation=$_POST['mois'];
        $motif=$_POST['motif'];
        $numcotisation=rand(100,1000);
        $datecotisation =date("d/m/Y");
        echo $datecotisation ;

        $matricule_Exist = $dbco->prepare("SELECT* FROM membre WHERE matricule='$matricule'");
        //On recupère les pseudo de t'as base ou les pseudo son egal au pseudo passer par le formulaire
        $matricule_Exist->execute();
        //on exécute la requête
         
        $MatriculeINbdd = $matricule_Exist->rowCount();
        //Rowcount permet de sortir le nombre de valeur que t'as requête renvoi, que l'on rentre dans la variable pseudoINbdd (ou autre )
         
        if($MatriculeINbdd == 0){
            echo"cette matricule n'existe pas";
        }else {
         echo "Enregistrement payement reussi";
          $ajoutcotisation= "INSERT INTO cotisation (numcotis,datecotis ,mois, motif, montant, matricule) VALUES ('$numcotisation','$datecotisation','$moiscotisation','$motif','$montant','$matricule')";
          $dbco->exec($ajoutcotisation);
        }
        ?>
        <h3>Voire la liste des cotisations <a href="listecotisation1.php">Cliquer ici</a></h3>
</body>
</html>
