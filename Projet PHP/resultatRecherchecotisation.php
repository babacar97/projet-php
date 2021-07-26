<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    $resultat=mysqli_query("SELECT * FROM cotisation where mois like'%" .$_POST["moisRecherche"] ."%' order by datecotis",$dbco);

    if ($resultat) {
        echo"<h1>Resultat de votre recherche</h1> \n";
        $nbUtilisateur = mysqli_num_rows($resultat);
        if($nbUtilisateur>0){
            echo"table border='1'>\n";
            echo"<tr>\n";
            echo"<td><strong>id</strong></td>\n";
            echo"<td><strong>numcotis</strong></td>\n";
            echo"<td><strong>datecotis</strong></td>\n";
            echo"<td><strong>mois</strong></td>\n";
            echo"<td><strong>motif</strong></td>\n";
            echo"<td><strong>montant</strong></td>\n";
            echo"<td><strong>matricule</strong></td>\n";
            echo"</tr>\n";
            while ($utilisateur = mysqli_fetch_array($resultat)) {
                echo"<tr>\n";
                echo"<td>" .$utilisateur["id"] . "</td>\n";
                echo"<td>" .$utilisateur["numcotis"] . "</td>\n";
                echo"<td>" .$utilisateur["datecotis"] . "</td>\n";
                echo"<td>" .$utilisateur["mois"] . "</td>\n";
                echo"<td>" .$utilisateur["motif"] . "</td>\n";
                echo"<td>" .$utilisateur["montant"] . "</td>\n";
                echo"<td>" .$utilisateur["matricule"] . "</td>\n";
            }
         echo "</table>\n";
        }else{
            echo"<p>Desolé pour ce mois , il n'y pas de payement</p>";
        }
    }else {
        echo"erreur dans l'exection de la requtte <br>";
        echo"le message d'erreur est : ". mysql_error($dbco);
    }
    ?>
</body>
</html>