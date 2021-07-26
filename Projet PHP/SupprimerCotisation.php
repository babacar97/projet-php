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


$supprime= $dbco->prepare('DELETE FROM cotisation WHERE id=:num LIMIT 1');

$supprime ->bindValue(':num',$_GET['numbercotisation'], PDO::PARAM_INT);

$executeok=$supprime-> execute();

if ($executeok) {
    $message='le payment a ete supprimé';
}else {
   $message='Echec de la suppréssion du contact';
}
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
   <h1>Suppresion</h1>
   <p><?=$message ?></p> 
   <h1><a href="listeCotisation1.php">Listes des cotisations</a></h1>
</body>
</html>