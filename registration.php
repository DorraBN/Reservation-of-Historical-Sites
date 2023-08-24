<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <header>
        <h2 class="log">  
           <img src="oli.png" width="5%" height="5%">   <span class="font-semibold text-xl tracking-tight"><h1>TuniHistoire</h1></TuniHistoire></span></h2>
        <nav class="navigation">
         <a href="acceuil2.html">Home</a>
         <a href="">About</a>
         <a href="vente.html">Services</a>
         <a href="">Contact</a>
         
        </nav>
      </header>
      <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
    
    
        <div class="form-box register">
          <h2><i><u>registration</u></i></h2>
          <form action="" method="post">
            <div class="input-box">
            <span  class="icon"><ion-icon name="person"></ion-icon>
              <input type="text" name="nom" required>
              <label for="">Firstname</label>
              
            </div>
            <div class="input-box">
            <span  class="icon"><ion-icon name="person"></ion-icon>
              <input type="text" name="prenom" required>
              <label for="">Lastname</label>
             
              
            </div>
            
            <div class="input-box">
            <span class="icon"><ion-icon name="call"></ion-icon></span>
              <input type="number" name="num" required>
              <label for="">Tel</label>
            </div>
            
            <div class="input-box">
              <span class="icon"><ion-icon name="mailtline"></ion-icon></span>
              <input type="email"  name="email" required>
              <label for="">E-mail</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
              <input type="password" name="mdp" required>
              <label for="">password</label>
            </div>
        
            <div class="remember-forgot">
              <label for="">
                <input type="checkbox">j'accepte les termes et les conditions
              </label>
            </div>
            <button id="toggle-description">Afficher plus</button>
            <p id="description" style="display: none;font-family: 'Times New Roman', Times, serif;font-size: 20px;">
              <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="photo" class="h">Sélectionnez une photo à télécharger :</label><br>
                <input type="file" name="photo" id="photo" class="h"><br><br>
                <input type="submit" value="Télécharger" class="t">
              </form>
             </p>
          <br>
            <button type="submit"  name="submit"class="btn">register</button>
            <div class="login-register">
              <p>already have an account <a href="p1.html" class="register-link">login</a> </p>
            </div>
            </form>
        </div>
    </div>
    <style>
      #toggle-description{
  font-size: 14px;
  border-radius: 4px;
}



#toggle-description:hover {
  background-color: #4CAF50;
}
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',Arial, Helvetica, sans-serif;
  
      }
      body{
        display:flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url('m.jpg') no-repeat;
       /* background-size: cover;
        background-position: center;*/
        
      }
      .wrapper{
        position: relative;
        width: 400px;
        margin-top: 60px;
    height: 620px;
        background: transparent;
        border: 2px solid rgba(255,255,255,.5);
        border-radius: 25px;
        backdrop-filter: blur(15px);
        box-shadow: 0 0 30px rgba(0,0,0,.5);
        display: flex;
        justify-content: center;
        justify-items: center;
       overflow: hidden;
    
       transition: transform .5s ,height .2s ease;
    
      }
 
  
  
  
  
      .wrapper .form-box.register{
      
        transition: transform .18s ease;
        transform: translateX(0);
      }
  .wrapper.active  .form-box.register{
  transition: none;
    transform: translateX(-400px);
  }
  
  .wrapper .form-box.login{
      
     position: absolute;
     transition: none;
     transform: translateX(400px);
    }
  .wrapper.active .form-box.login{
    transition: transform .18s ease;
        transform: translateX(0);
   
  }
  
  
  .login-login p a:hover{
  text-decoration: underline;
  font-weight: 800;
}
  
      
      .wrapper .icon-close{
        position: absolute;
        top: 0;
        right: 0;
        width: 45px;
        height: 45px;
        background: #162938;
        font-size: 2em;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom-left-radius: 20px;
        cursor: pointer;
        z-index: 1;
  
      }
      .wrapper .form-box{
        width: 100%;
        padding: 40px;
      }
      .form-box h2{
        font-size: 2em;
        color: #162938;
        text-align: center;
  
      }
      .input-box{
        position: relative;
        width: 100%;
        height: 50px;
        border-bottom: 2px solid #162938;
        margin: 30px 0;
      }
      .input-box label{
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        font-size: 1em;
        color: #162938;
        font-weight: 500;
        pointer-events: none;
        transition: .5s;
      }
      .input-box input:focus~label,
      .input-box input:valid~label{
        top: -2px;
      }
      .input-box input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1em;
        color: #162938;
        font-weight: 600;
        padding: 0 35px 0 5px;
      }
      header{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 99;
      }
  
      .logo{
        font-size: 2em;
        color: #fff;
        user-select: none;
      }
      .navigation a{
        position: relative;
        font-size: 1.1em;
        color: #fff;
        text-decoration: none;
        font-weight: 500;
        margin-left: 40px;
        
      }

      .navigation a:hover{font-weight: 600;}
      .navigation .btnlogin-popup{
        width: 130px;
        height: 50px;
        background: transparent;
        border: 2px solid #000;
        outline: none;
        border-radius: 6px;
        cursor: pointer;
      font-size: 1.1em;
      color: #fff;
      font-weight: 500;
      margin-left: 40px;
      transition: .5s;
      }
      .navigation .btnlogin-popup:hover{
        background: #7f7d7d;
        color: #162938;
        font-weight: 800;
      }
      .input-box .icon{
        position: absolute;
        right: 8px;
        font-size: 1.2em;
        color: #162938;
        line-height: 57px;
      }
      .navigation a::after{
        content: ''
        ;
        position: absolute;
        left: 0;
        bottom: -6px;
        width: 100%;
        height: 3px;
        background: #fff;
        border-radius: 5px;
      transform: scaleX(0); 
       transition: transform .5s; }
  
  .navigation a:hover::after{
  transform-origin: left;
  transform:scaleX(1);
  }
  .remember-forgot{
    font-size: .9em;
    color: #162938;
    font-weight: 500;
    margin: -15px 0 15px;
    display: flex;
    justify-content: space-between;
  
  }
  .remember-forgot label input{
    accent-color: #162938;
    margin-right: 3px;
  }
  .remember-forgot a{
    color: #162938;
    text-decoration: none;
  
  }
  .remember-forgot a:hover{
    text-decoration: underline;
    font-weight: 800;
  }
  .btn{
    width: 100%;
    height: 45px;
    background: #162938;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500
    ;
  }
  .login-register{
    font-size: .9em;
    color: #162938;
    text-align: center;
    font-weight: 500;
    margin: 25px 0 10px;
  }
  .login-register p a{
    color: #162938;
    text-decoration: none;
    font-weight: 600;
  }
  .login-register p a:hover{
    text-decoration: underline;
  }
  
  
  .wrapper.active-popup{
    transform: scale(1);
  }
  </style>
  <script>
    const wrapper = document.querySelector('.wrapper');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const iconclose = document.querySelector('.iconclose');
  
  
    const btnPopup=document.querySelector('.btnlogin-popup');
  
  
    registerLink.addEventListener('click',()=>{
      wrapper.classList.add('active');
    });
    loginLink.addEventListener('click',()=>{
      wrapper.classList.remove('active');
    });
    btnPopup.addEventListener('click',()=>{
      wrapper.classList.add('active-popup');
    });
  
    iconclose.addEventListener('click')
    {
      wrapper.classList.remove('active-popup');
    };
  </script>
  </body>
  <?php
include('configbd.php');
 if(isset($_POST['submit'])){
  $nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=htmlspecialchars($_POST['email']);
$password=$_POST['mdp'];
$tel=$_POST['num'];
$datetime=date('Y/m/d');

  $nomErr = $prenomErr = $naissanceErr = $emailErr = $telephoneErr = $paysErr = $villeErr = $codePostalErr = $usernameErr = $passwordErr = $confirmpasswordErr = '';
  $valid = $mdpErr=true;
  
  // Si le formulaire a été soumis
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // Validation du nom
    if (empty($_POST["nom"])) {
      $nomErr = "Le nom est requis";
      $valid = false;
    } else if(!preg_match("/^[a-zA-Z ]*$/", $nom)) {
        $nomErr = "Seulement des lettres  sont autorisés";
        $valid = false;
      } 
      else if (strlen($nom) > 20) {
        $prenomErr = "Le nom ne doit pas dépasser 20 caractères";
        $valid = false;
    }
      // Validation de mdp
 
    // Validation du prénom
    if (empty($_POST["prenom"])) {
      $prenomErr = "Le prénom est requis";
      $valid = false;
    } else 
    
      if (!preg_match("/^[A-Z][a-z]*$/", $prenom)) {
        $prenomErr = "Le prénom doit commencer par une lettre majuscule, suivie de lettres minuscules";
        $valid = false;
      } else if (strlen($prenom) > 20) {
        $prenomErr = "Le prénom ne doit pas dépasser 20 caractères";
        $valid = false;
      }
    }
  
  
    // Validation de l'email
    if (empty($_POST["email"])) {
      $emailErr = "L'email est requis";
      $valid = false;
    } else 
      
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Format d'email invalide";
        $valid = false;
      }
    
  
    // Validation du téléphone
    if (empty($_POST["num"])) {
      $telephoneErr = "Le numéro de téléphone est requis";
      $valid = false;
    } 
  else if (strlen($tel) > 8) {
    $prenomErr = "le numero  ne doit pas dépasser 8 caractères";
    $valid = false;}
    if(isset($_POST['email'])) /*le champ code est la clé de la table */
{
$res= "select email from utilisateur ";/* on teste si l’étudiant est enregistré ou non */
$result=mysqli_query($conn,$res);
while($row=mysqli_fetch_array($result))
{
if($email=!$row['email'])
{
  





  

$req="INSERT INTO  utilisateur(nom,prenom,email,mpd,telephone,role,date_inscription) VALUES('$nom','$prenom','$email','$password','$tel','user','$datetime')";

 $res=mysqli_query($conn,$req);
}}}
 $sql="select * from utilisateur  ";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);

	if($row["role"]!="admin"){
    $reqq="INSERT INTO  utilisateur(role) VALUES('user')";
    $result=mysqli_query($conn,$reqq);
  }
  $message = "Bonjour " .$prenom." ".$nom."! Votre compte a été crée avec succés!!";
  $header = "MINE-Version:1.0\r\n";
  $header .= "From: Tunishistoire@gmail.com\r\n";
  $header .= "content-type:text/plain;charset=utf-8\r\n";

  mail($email, "Inscription TuniHistoire", $message, $header);
}

  ?>
  </html>
  
  
    
    
