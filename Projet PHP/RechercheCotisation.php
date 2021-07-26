<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        rechercher les cotisations par mois: <input type="text" name="search">
        <input type="submit" name="submit">
    </form>
    <?php 
    $con = new PDO("mysql:host=localhost;dbname=espacemembre" ,'root','');
    if (isset($_POST["submit"])) {
       $mois=$_POST["search"];
       $mois= $con-> prepare("SELECT * FROM cotisation WHERE mois='$mois'");

       $mois->setfetchMode(PDO:: FETCH_OBJ);
       $mois ->execute();

       if($row=$mois->fetch()) {
           ?>
           <br><br><br>
           <table>
               <tr>
                   <th>numcotis</th>
                   <th>datecotis</th>
                   <th>mois</th>
                   <th>motif</th>
                   <th>montant</th>
                   <th>matricule</th>
                   
               </tr>
               <tr>
                   <td><?php echo $row->numcotis;?></td> 
                   <td><?php echo $row->datecotis;?></td>
                   <td><?php echo $row->mois;?></td>
                   <td><?php echo $row->motif;?></td>
                   <td><?php echo $row->montant;?></td>
                   <td><?php echo $row->matricule;?></td>
               </tr>
           </table>
           <?php
       }
       
       else {
           echo "Desolé ce mois y'a pas de payement";
       }
    }
    ?>
    <a href="listecotisation1.php"><h1>liste des cotisations</h1></a>
</body>
</html>