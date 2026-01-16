<?php
// bdd.php

// données de connexion
$utilisateur = "root";
$mp = "";
$serveur = "localhost";
$base = "assurance";

// fonction de connexion à la bdd
function connexion($serveur, $utilisateur, $mp, $base)
{
    $chaineconnexion = mysqli_connect($serveur, $utilisateur, $mp, $base) or die("Erreur lors de la connexion à la base de données" . mysqli_error($chaineconnexion));
    return $chaineconnexion;
}

// fonction d'insertion d'un nouvel inscrit
function insertion_nouvel_inscrit($chaineconnexion, $nom, $prenom, $ddn, $adresse, $ville,
    $telephone, $admail, $mdp, $cp, $cgu)
{
    $requete = "INSERT INTO client (nom_client, prenom_client, ddn_client, adresse_client, cp_client, ville_client, 
    tel_client, email_client, password_client, cgu_client)
    VALUES (\"$nom\",\"$prenom\",\"$ddn\",\"$adresse\",\"$cp\",\"$ville\",
    \"$telephone\",\"$admail\",\"$mdp\",\"$cgu\")";

    $executioninsertion = mysqli_query($chaineconnexion, $requete) or die("Erreur lors de l'insertion");
    return $executioninsertion;
}

// fonction de sélection de tous les clients
// retourne un tableau de clients avec toutes les colonnes
function selection_clients($chaineconnexion)
{
    $requeteselect = "SELECT * FROM client";
    $executionselect = mysqli_query($chaineconnexion, $requeteselect) or die("Erreur lors de la recherche de clients");
    return $executionselect;
}

// fonction de suppression, on lui passe en entrée le numéro de client à supprimer
function supprimer_client($chaineconnexion, $id_client)
{
    $requetesupprimer = "DELETE FROM client WHERE id_client = $id_client";
    $executionsupprimer = mysqli_query($chaineconnexion, $requetesupprimer) or die("Erreur lors de la suppression de clients");
    return $executionsupprimer;
}
?>
