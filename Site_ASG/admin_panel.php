<?php
include("bdd.php");
session_start();

if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("Location: admin_login.php");
    exit;
}

// Connexion à la base de données
$chaineconnexion = connexion($serveur, $utilisateur, $mp, $base);

// Traitement de la suppression lors de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["supprimer"])) {
    // Vérifier si une option est sélectionnée
    if (isset($_POST["numero_delete"])) {
        $numeroToDelete = $_POST["numero_delete"];

        // Appeler une fonction qui supprime l'utilisateur de la base de données
        supprimer_client($chaineconnexion, $numeroToDelete);

        // Rafraîchir la page pour mettre à jour la liste des utilisateurs après la suppression
        header("Location: admin_panel.php");
        exit;
    } else {
        echo "Veuillez sélectionner un utilisateur à supprimer.";
    }
}

// Reste de votre code pour la partie d'administration
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Assurances Saint Gabriel</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<body>
    <!-- Mettez ici votre navigation -->

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-5">
                            <h1>Actions administrateur</h1>
                            <div class="form-example">
                                <!-- Votre formulaire de suppression -->
                                <form action="" method="post">
                                    <label for="numero_delete">Sélectionnez l'utilisateur à supprimer :</label>
                                    <select name="numero_delete">
                                        <?php
                                        // On va sélectionner tous les inscrits
                                        // On va boucler avec un while et tant qu'on a des inscrits on ajoute une ligne
                                        // à la liste déroulante
                                        $lesinscrits = selection_clients($chaineconnexion);
                                        while ($ligne = mysqli_fetch_array($lesinscrits)) {
                                            echo "<option value=\"$ligne[0]\">$ligne[1] $ligne[2] </option> ";
                                        }
                                        ?>
                                    </select>
                                    <input type="submit" value="Supprimer" name="supprimer">
                                </form>

                                <!-- Votre bouton Quitter -->
                                <form action="" method="post">
                                </form>
                            </div>
                        </div>
                          <!-- Votre lien de déconnexion -->
    <div class="logout-link">
        <a href="admin_login.php">Se déconnecter</a>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  

    <!-- Mettez ici votre pied de page -->

    <!-- Mettez ici vos scripts JS -->

        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
