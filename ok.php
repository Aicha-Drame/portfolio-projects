<?php include("bdd2.php");

// page de suppression 

//on va se connecter à la bdd
$chaineconnexion=connexion($serveur, $utilisateur, $mp, $base);?>
<!doctype html>
	<html>
		<head>
			<title>
				Mon très joli site web
			</title>
			<meta charset="utf-8" />
			<link type="text/css" href="style.css" rel="stylesheet"/>
		</head>
		<body>
			<?php
				// récupération uniquement si formulaire validé
				if (isset($_POST["ok"]))
				{
				  $nom=$_POST["nom"];
				  $prenom=$_POST["prenom"];
				  $ddn=$_POST["ddn"];
				  $adresse=$_POST["adresse"];
				  $ville=$_POST["ville"];
				  $telephone=$_POST["telephone"];
				  $admail=$_POST["admail"];
				  $mdp=$_POST["mdp"];
				  $cp=$_POST["cp"];
				  if (isset($_POST["cgu"]))
				  {$cgu=1;}
			       else {$cgu=0;}
				  $cgu=$_POST["cgu"];
				  //on appelle la requete d'insertion, on lui passe la chaine de connexion
				  $resultatinsertion=insertion_nouvel_inscrit($chaineconnexion, $nom,$prenom,$ddn,$adresse,$ville,
				  $telephone,$admail,$mdp,$cp,$cgu);
				  echo $resultatinsertion;
				}
				//on va récuperer dans le cas d'une demande de suppression
				if (isset($_POST["supprimer"]))
				{$numeroasupprimer=$_POST["numero_delete"];
			$resultatsuppression=supprimer_clients($chaineconnexion, $numeroasupprimer);
			echo $resultatsuppression;
				}
			
			?>
			
		</body>
	</html>