
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
      
        <!-- Navigation-->
        <nav>
<?php
  include_once "nav.php";
  ?>
 </nav>


        <!-- MA FORMULAIRE-->
 
<?php include("bdd.php");
//on va se connecter à la bdd
$chaineconnexion=connexion($serveur, $utilisateur, $mp, $base);?>
<!doctype html>
	<html>
		
    <!-- Vos éléments de formulaire ici -->
</form>
		</head>
		<body>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                              
								<h1>Inscrivez vous !</h1>
								<div class="form-example"> 	<form action="inscription_ok.php" method="post" class="formulaire-design">
			<div class="form-example">
			       <label>Nom</label> <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" />
				   </div>

				   <div class="form-example">
				<label>Prénom</label> <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom"/>
				</div>

				<div class="form-example">
				<label>Adresse</label> <input type="text" name="adresse" id="adresse" />
				 </div>

				 <div class="form-example">
			    <label>Code Postal</label> <input type="text" name="cp" id="cp" pattern="[0-9]{5}" />
				</div>

				<div class="form-example">
				<label>Ville</label> 
				<input type="text" name="ville" id="ville" list="mesvilles" />
				 <datalist id="mesvilles">
					<option value="Bagneux"></option>
					<option value="Boulogne-Billancourt"></option>
					<option value="Bourg la Reine"></option>
					<option value="Paris"></option>
					<option value="Plaisir"></option>
					<option value="Villepinte"></option>
					<option value="Villetaneuse"></option>
					<option value="Vélizy-villacoublay"></option>
					<option value="Versailles"></option>
				 </datalist>
				 </div>


				 <div class="form-example">
				<label class="form-label">Date de naissance</label> <input type="date" name="ddn" id="ddn" />
				</div>
				
				<div class="form-example">
				<label class="form-label">Téléphone</label> <input type="tel" name="telephone" id="telephone" pattern="[0-9]{10}"/>
				</div>

				<div class="form-example">
				<label class="form-label">Email</label> 
				<input type="email" name="admail" id="admail" required="required"/>
				</div>

				<div class="form-example">
				<label class="form-label">Mot de passe</label> <input type="password" name="mdp" id="mdp" />
				</div>

				<div class="form-example">
				<label class="form-label">Acceptez vous les Conditions générales ?</label>
         		<input type="checkbox" name="cgu" id="cgu" value="cgu"/>
				</div>
				<!--
				 <div class="form-example">
				<small>ici la phrase pour le rgpd et la loi informatique et liberté</small> 
				</div>
-->
				<div class="form-example">
				<input type="submit" name="ok" id="ok" value="S'inscrire" />
				<br>
				<br />
			</form>
			  <!-- <form action="inscription_ok.php" method="post">
				<select name="numero_delete">
				 ?php
                  /<
                  //on va selectionner tous les inscrits
//on va boucler avec un while et tant qu'on a des inscrits on ajoute une ligne
//à la liste déroulante
                  $lesinscrits=selection_clients($chaineconnexion);
                  while($ligne=mysqli_fetch_array($lesinscrits))    
                  {
                      echo "<option value=\"$ligne[0]\">$ligne[1] $ligne[2] </option> ";
                  }                   
                ?>
                </select>
                <input type="submit" name="supprimer" value="Retirer de la base" />
            </form>
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
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
