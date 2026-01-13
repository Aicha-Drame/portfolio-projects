        <!-- Navigation-->
        <nav>
<?php
  include_once "nav.php";
  ?>
 </nav>
 
 <?php
include("bdd.php");

// On va se connecter à la bdd
$chaineconnexion = connexion($serveur, $utilisateur, $mp, $base);

// Initialiser la session
session_start();

// Vérifier la soumission du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["connecter"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérifier les informations d'identification de l'administrateur dans la base de données
    $query = "SELECT * FROM client WHERE prenom_client = 'admin' LIMIT 1";
    $result = mysqli_query($chaineconnexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $utilisateur = mysqli_fetch_assoc($result);

        // Vérifier si le mot de passe correspond
        if ($utilisateur['password_client'] === $password) {
            // Mot de passe correct, connectez l'administrateur
            $_SESSION["admin_logged_in"] = true;
            header("Location: admin_panel.php");
            exit;
        }
    }

    // Si nous arrivons ici, cela signifie que l'authentification a échoué
    echo "echec de la connexion. veuillez verifier vos informations d'identification.";
}
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
                            <h1>Se connecter</h1>
                            <div class="form-example">
                                <!-- Formulaire de connexion -->
                                <form action="" method="post">
                                    <label for="username">Nom d'utilisateur :</label>
                                    <input type="text" id="username" name="username" required><br>
                                    <label for="password">Mot de passe :</label>
                                    <input type="password" id="password" name="password" required><br>
                                    <input type="submit" value="Se connecter" name="connecter">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once "footer.php";
    ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
