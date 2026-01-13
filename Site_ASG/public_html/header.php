
<?php //si la personne est connectée, on affiche son login 
//et son heure de connexion

if (isset($_SESSION["connexion"]) && ($_SESSION["connexion"]=="ok"))
{echo "Bonjour ".$_SESSION["login"]. " vous êtes connecté
 depuis le " .$_SESSION["heureconnexion"];}
 else echo "";
