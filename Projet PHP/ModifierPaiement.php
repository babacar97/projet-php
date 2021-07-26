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

 
$modifier= $dbco->prepare('DELETE FROM cotisation WHERE id=:num');

$modifier->bindValue(':num',$_GET['numbercotisation'], PDO::PARAM_INT);

$executeok=$modifier-> execute();

$cotisation= $modifier->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="saisiecotisation.php" method="post">
     veuillez entré d'abord votre matricule
    <label for="Matricule">Matricule</label>
    <input type="number" name="matricule" value="<?=$cotisation['matricule'];?>">  
    <label >Choisir votre moi de payment:</label>
    <input type="text" name="mois" value="<?=$cotisation['mois'];?>">
    <label >Choisir votre motif de payment de payement:</label>
    <input type="text" name="motif" value="<?=$cotisation['motif'];?>">
    <label >Montant</label>
    <input type="number" name="Montant" value="<?=$cotisation['montant'];?>" >  
    <button type="submit" name="submit">enregistrer</button>
    </form>
</body>
</html>

