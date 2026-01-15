<?php
//on va chercher s'il y a dans l'url un ? le mot
// clé id et une valeur pour cette variable id
//on cherche s'il existe ces éléments
if (isset($_GET["id"]) && $_GET["id"]!="")
{   //je récupère dans une variable le mot clé du lien
	$id=$_GET["id"];
}
else { //s'il n'y a pas de ?id= ou que le mot clé est supprimé
      $id="accueil";
	 
}

//on va switcher la page à inclure en fonction du mot clé qui se trouve
//dans $id

switch($id)
{case "accueil" : include_once("accueil.php");
                  break;
case "qui" : include_once("qui.php");
                  break;
case "contrat" : include_once("contrat.php");
                  break;
case "contact" : include_once("contact.php");
                  break;
case "mentions" : include_once("mentions.php");
                  break;
case "cgu" : include_once("cgu.php");
                  break;
default : include_once("accueil.php");
                  break;
}


?>