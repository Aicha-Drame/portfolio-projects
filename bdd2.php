<?php 
   //fichier contenant toutes les fonctions liées à la bdd 
   //gestion avec la classe PDO (Php Data Object)
   
   //données de connexion
   $utilisateur="root";
   $mp="";
   $serveur="localhost";
   $base="assurance";
   
   //fonction de connexion à la bdd
   function connexion($serveur, $utilisateur, $mp, $base)
   {   //on va crééer la chaine de connexion à la bdd
       try{
       $chaineconnexion = 
	   new PDO("mysql:host=$serveur;dbname=$base", $utilisateur, $mp); 
	   }
	   catch(Exception $e)
	   {die("Erreur lors de la connexion à la bdd :".$e->getMessage() ); }
	   //on retourne la chaine de connexion
	   return $chaineconnexion;
   }
   
   //fonction d'insertion d'un nouvel inscrit
   function insertion_nouvel_inscrit($chaineconnexion, $nom,$prenom,$ddn,$adresse,$ville,
				  $telephone,$admail,$mdp,$cp,$cgu)
   { //on prépare la chaine correspondant à l'insertion
      $requete="insert into client
	   (nom_client, prenom_client, ddn_client, adresse_client,cp_client,ville_client, 
	   tel_client,email_client,password_client,cgu_client)
	   values(\"$nom\",\"$prenom\",\"$ddn\",\"$adresse\",\"$cp\",\"$ville\",
				  \"$telephone\",\"$admail\",\"$mdp\",\"$cgu\")";
	 //on demande à mysql d'executer la requête
	  $executioninsertion=$chaineconnexion->query($requete);
	 return $requete;
	 //return $executioninsertion;  
   }
   //fonction de selection de tous les clients 
   //retourne un tableau de clients avec toutes les colonnes
   function selection_clients($chaineconnexion)
   {   //preparation d'une requete de selection
       $requeteselect="select * from client";
	   $executionselect=$chaineconnexion->query($requeteselect);
	   return $executionselect;
	   
   }
   //fonction de suppression, on lui passe en entrée le numéro de client à supprimer
function supprimer_clients($chaineconnexion, $numeroasupprimer)
   {   //preparation d'une requete de selection
       $requetesupprimer="delete from client where id_client=$numeroasupprimer";
	  $executionsupprimer=$chaineconnexion->query($requetesupprimer);
	   return $executionsupprimer;
	   
   }
?>





