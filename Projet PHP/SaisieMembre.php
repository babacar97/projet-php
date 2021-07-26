<!DOCTYPE html>
<html>
    <head>

        <title>Formulaire de saisie utilisateur </title>
    </head>
    <body>
        <h1>Inscrivez-vous !</h1>
        <h2>Entrez les données demandées :</h2>
        <form name="inscription" method="post" action="fonctionsSQL.php">
            Entrez votre nom      :      <input type="text" name="nom"/> <br/>
            Garçon  votre preonom :	     <input type="text" name="prenom"/><br>
            Entrez votre adresse  :      <input type="text" name="adresse"/><br/>
            votre telephone       :      <input type="number" name="telephone"/><br/>
            matricule             :      <input type="number" name="matricule"/><br/>
                                         <input type="submit" name="valider" value="envoyer"/>
        </form>
       
    </body>
</html>