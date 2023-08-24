<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" href="p.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="#">Accueil</a></li>
			<li><a href="#">A propos</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
	<main>
		<div class="container">
			<h1>Inscription</h1>
			<form action="inscription.php" method="post">
				<label for="prenom">Prénom:</label>
				<input type="text" id="prenom" name="prenom" required>
				<label for="nom">Nom:</label>
				<input type="text" id="nom" name="nom" required>
				<label for="date_naissance">Date de naissance:</label>
				<input type="date" id="date_naissance" name="date_naissance" required>
				<label for="civilite">Civilité:</label>
				<select id="civilite" name="civilite" required>
					<option value="">Choisissez votre civilité</option>
					<option value="Mlle">Mademoiselle</option>
					<option value="Mme">Madame</option>
					<option value="Mr">Monsieur</option>
				</select>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
				<label for="telephone">Téléphone:</label>
				<input type="tel" id="telephone" name="telephone" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" required>
				<label for="pays">Pays:</label>
				<input type="text" id="pays" name="pays" required>
				<label for="ville">Ville:</label>
				<input type="text" id="ville" name="ville" required>
				<label for="code_postal">Code postal:</label>
				<input type="text" id="code_postal" name="code_postal" pattern="[0-9]{4}" required>
				<label for="username">Nom d'utilisateur:</label>
				<input type="text" id="username" name="username" pattern="[A-Za-z]{3,12}" required>
				<label for="password">Mot de passe:</label>
				<input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{6,15}" required>
				<label for="password_confirm">Confirmation du mot de passe:</label>
				<input type="password" id="password_confirm" name="password_confirm" required>
				<button type="submit">S'inscrire</button>
			</form>
 <?php


      $nom = $prenom = $naissance = $email = $telephone = $pays = $ville = $codePostal = $username = $password = $confirmpassword = '';
      $nomErr = $prenomErr = $naissanceErr = $emailErr = $telephoneErr = $paysErr = $villeErr = $codePostalErr = $usernameErr = $passwordErr = $confirmpasswordErr = '';
      $valid = true;
      
      // Si le formulaire a été soumis
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        // Validation du nom
        if (empty($_POST["nom"])) {
          $nomErr = "Le nom est requis";
          $valid = false;
        } else {
          $nom = test_input($_POST["nom"]);
          if (!preg_match("/^[a-zA-Z ]*$/", $nom)) {
            $nomErr = "Seulement des lettres et des espaces sont autorisés";
            $valid = false;
          } else {
            $nom = strtoupper($nom); // Convertir en majuscules
          }
        }
      
        // Validation du prénom
        if (empty($_POST["prenom"])) {
          $prenomErr = "Le prénom est requis";
          $valid = false;
        } else {
          $prenom = test_input($_POST["prenom"]);
          if (!preg_match("/^[A-Z][a-z]*$/", $prenom)) {
            $prenomErr = "Le prénom doit commencer par une lettre majuscule, suivie de lettres minuscules";
            $valid = false;
          } else if (strlen($prenom) > 20) {
            $prenomErr = "Le prénom ne doit pas dépasser 20 caractères";
            $valid = false;
          }
        }
      
        // Validation de la date de naissance
        if (empty($_POST["naissance"])) {
          $naissanceErr = "La date de naissance est requise";
          $valid = false;
        } else {
          $naissance = test_input($_POST["naissance"]);
          if (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $naissance)) {
            $naissanceErr = "La date de naissance doit être au format YYYY-MM-DD";
            $valid = false;
          } else {
            $dateNaissance = date_create($naissance);
            $dateActuelle = date_create();
            $age = date_diff($dateNaissance, $dateActuelle)->y;
            if ($age < 12 || $age > 99) {
              $naissanceErr = "L'âge doit être compris entre 12 et 99 ans";
              $valid = false;
            }
          }
        }
      
        // Validation de l'email
        if (empty($_POST["email"])) {
          $emailErr = "L'email est requis";
          $valid = false;
        } else {
          $email = test_input($_POST["email"]);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format d'email invalide";
            $valid = false;
          }
        }
      
        // Validation du téléphone
        if (empty($_POST["telephone"])) {
          $telephoneErr = "Le numéro de téléphone est requis";
          $valid = false;
        } }
      ?>
		</div>
	</main>
	<footer>
		<p>&copy; 2023 Site Web des Sites Historiques</p>
	</footer>
  
 
  <style>
    /* Styliser le formulaire */
form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Styliser les étiquettes des champs */
label {
  margin-bottom: 0.5rem;
  font-weight: bold;
}

/* Styliser les champs de saisie */
input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 1rem;
}

/* Styliser le bouton d'envoi */
button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Styliser les messages d'erreur */
.error {
  color: red;
  font-size: 0.8rem;
  margin-top: 0.2rem;
}

  </style>
</body>



</html>
