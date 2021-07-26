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

    $afficher=$dbco->prepare('SELECT*FROM cotisation');

    $executeok=$afficher-> execute();

    $cotisation= $afficher->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Listes des contisations</h1> 
   <table>
       
   <ul>
       <?php foreach($cotisation as $cotisations):?>
        <li>
            <?= $cotisations['numcotis']?> - <?= $cotisations['datecotis']?> - <?= $cotisations['mois']?>  - <?= $cotisations['motif']?> - <?= $cotisations['montant']?> - <?= $cotisations['matricule']?>
             <a href="supprimerCotisation.php?numbercotisation=<?= $cotisations['id']?>";>supprimer</a>
             <a href="ModifierPaiement.php?numbercotisation=<?= $cotisations['id']?>";>Modifier</a>
        </li>
       <?php  endforeach;?>
   </ul>
 </table>
</body> 
</html>
