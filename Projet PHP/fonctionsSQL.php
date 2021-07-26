
        <h1>Bases de données MySQL</h1>  
        <?php
        if (isset($_POST['valider'])) {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $matricule=$_POST['matricule'];
        }
        

            $servname = 'localhost';
            $dbname = 'espacemembre';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "INSERT INTO membre(nom,prenom,adresse,telephone,matricule) VALUES('$nom','$prenom','$adresse','$telephone','$matricule')"; 
                
                $dbco->exec($sql);
                echo 'membre bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>
  