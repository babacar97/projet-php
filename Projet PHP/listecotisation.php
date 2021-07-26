<?php
  $host = 'localhost';
  $dbname = 'espacemembre';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM cotisation";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
 <h1>Liste des cotisation </h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Numcotis</th>
       <th>datecotis</th>
       <th>mois</th>
       <th>motif</th>
       <th>montant</th>
       <th>matricule</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['numcotis']); ?></td>
       <td><?php echo htmlspecialchars($row['datecotis']); ?></td>
       <td><?php echo htmlspecialchars($row['mois']); ?></td>
       <td><?php echo htmlspecialchars($row['motif']); ?></td>
       <td><?php echo htmlspecialchars($row['montant']); ?></td>
       <td><?php echo htmlspecialchars($row['matricule']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
</html>