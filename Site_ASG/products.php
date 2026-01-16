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
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Assurances Saint Gabriel</span>
                <span class="site-heading-lower">Nous sommes là pour vous, à vos côtés, dans les mauvais comme dans les bons moments de votre vie. </span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav>
<?php
  include_once "nav.php";
  ?>
 </nav>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Assurances vie, santé, auto, habitation...</span>
                                <span class="section-heading-lower">Nous sommes là pour prévenir et assurer vos biens, votre famille, et vous-même</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-01.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Assurance solidaire</span>
                                <span class="section-heading-lower">Nos tarifs sont des plus accessibles</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-02.jpg" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Assureur mutualiste de l’économie solidaire, Saint-Gabriel met à la disposition de ses sociétaires une expertise, une capacité d’écoute et une volonté d’innovation reconnues</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Plus de 75 ans d'expertise</span>
                                <span class="section-heading-lower">N°1 de l'économie solidaire</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-03.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">TForte d’une expertise reconnue découlant de plus de soixante quinze ans d’amélioration et d’enrichissement de ses savoir-faire, elle propose à ces institutions, à leurs salariés et à leurs bénévoles des garanties, des services d’assurances et un accompagnement adaptés à leur mission, au meilleur coût.</p></div>
                    </div>
                </div>
            </div>
        </section>



 <!-- Navigation-->
 <nav>

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
                              
								<h1>Faites votre contrat !</h1>
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
				
				 <div class="form-example">
				<small>ici la phrase pour le rgpd et la loi informatique et liberté</small> 
				</div>

				<div class="form-example">
				<input type="submit" name="ok" id="ok" value="S'inscrire" />
				<br>
				<br />
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
