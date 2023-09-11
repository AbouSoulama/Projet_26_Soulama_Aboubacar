<?php

@$Nom = $_POST["Nom"];
@$Prenom = $_POST["Prenom"];
@$Email = $_POST["Email"];
@$Mot_de_passe = $_POST["Passe"];
@$Nom_utilisateur = $_POST["Utilisateur"];
// @$Contact = $_POST["Contact"];
// @$Naissance =$_POST["Age"];
// @$Sexe = $_POST["Sexe"];
@$submit =$_POST["submit"];
$erreur="";
if((isset($submit)))
  if(empty($Nom) OR
      empty($Prenom) OR
       empty($Email) OR
        empty($Mot_de_passe) OR 
        empty($Nom_utilisateur)) $erreur="*Veuillez remplir tous les champs ! <br> ";
        //  empty($Contact) OR 
        //  empty($Naissance) OR 
        //  empty($Sexe)) 
  
else if((isset($submit))) {
  echo "Nom: $Nom <br> ";
  echo "Prenom: $Prenom <br> ";
  echo "Email: $Email <br> ";
  echo "Mot de passe: $Mot_de_passe <br> ";
  echo "Nom utlisateur: $Nom_utilisateur <br> ";
  // echo "Contact: $Contact <br> ";
  // echo "Naissance: $Naissance <br> ";
  // echo "Sexe: $Sexe <br> ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend formulaire</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="shortcut icon" href="channels4_profile.jpg">
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
</head>
<body>
    
    
    <section>
    
    <nav>
    
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a href="" style="text-decoration: none;color: rgb(99, 99, 99);">Backend formulaire</a>
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
       <button  class="se"><a href="connexion.html" style="text-decoration: none;color: rgb(255, 255, 255);">Se connecter</a></button>  
        <!-- <button class="cree"><a href="">créer un compte</a></button> -->
       <select type="lang" name="" id="">
       <option value="">Français</option>
       <option value="">Englais</option>
       <option value="">Allemand</option>
       <option value="">Arabe</option>
       </select>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
    
    </nav>
    
    </section>
    
    <section class="section">
    <div class="bien">
    
    <h1>Bienvenue sur ma page</h1>
    
   <p> Créez-vous un compte pour découvrir un monde de possibilités.</p> 
    
    </div>
    
    
    
    
  
        <form action="inscription.php" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form3Example1">Nom</label>
                  <input type="text" id="form3Example1 y" class="form-control" placeholder="Entré votre nom" name="Nom"/>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form3Example2">Prénom</label>
                  <input type="text" id="form3Example2" class="form-control" placeholder="Entré votre prénom" name="Prenom"/>
                </div>
              </div>
            </div>
          
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Adress email</label>
              <input type="email" id="form3Example3" class="form-control" placeholder="Entré votre email" name="Email"/>
            </div>
          
            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Mot de passe</label>
              <input type="password" id="form3Example4" class="form-control" placeholder="Saisir un mot de passe" name="Passe"/>
            </div>
            <!-- Nom utilis -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Nom d'utilisateur</label>
              <input type="text" id="form3Example4" class="form-control" placeholder="Saisir un nom utilisateur" name="Utilisateur"/>
            </div>
            <!-- Contact -->
            <!-- <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Contact</label>
              <input type="phone" id="form3Example4" class="form-control" placeholder="Saisir un contact" name="Contact"/>
            </div>
            
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Age</label>
              <input type="number" id="form3Example4" class="form-control" placeholder="Saisir votre age" name="Age"/>
            </div>
          
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Sexe</label>
              <input type="" id="form3Example4" class="form-control" placeholder="indiquez votre sexe" name="Sexe"/>
            </div> -->
            <!-- <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Photo de profil</label>
              <input type="file" id="form3Example4" class="form-control" placeholder="choisir une photo"/>
            </div> -->
          
            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
                Abonné voous !
              </label> -->
            </div>
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4 bott rr" name="submit" style="background: green; margin-top: 3%;">Enregistré</button> 
          
     
    </form>
    <?php if(!empty($erreur)){ ?>
<div id="erreur">.<?php echo $erreur ?></div>
<?php } ?>
    </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->
<script src="script.js"></script>
</body>
</html>