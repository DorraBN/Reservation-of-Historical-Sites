<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Reset Password Form</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
   
    body {
      background: #f2f2f2;
      font-family: 'Open Sans', sans-serif;
    }
    .container {
      width: 500px;
      height: 500px;
      background: transparent;
      margin: 150px auto;
      border: 2px solid rgba(255,255,255,.5);
      border-radius: 20px;
    
      box-shadow:  0px 0px 50px #000;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      overflow: hidden;
      backdrop-filter: blur(15px);
    }
    h2 {
      font-size: 40px;
      margin-bottom: 50px;
      color: #333;
      text-shadow: 2px 2px #fff;
    }
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    input[type="email"] {
      width: 80%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
      font-size: 20px;
    }
    input[type="submit"] {
      width: 40%;
      padding: 10px;
      margin: 20px 0;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      background: #333;
      color: #fff;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background:green;
      color: #333;
    }
    body{
      display:flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: url('m.jpg') no-repeat;
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
      font-size: 1em;
      color: #000;
      text-decoration: none;
      font-weight: 500;
      margin-left: 40px;
    }
    .navigation .btnlogin-popup{
      width: 130px;
      height: 50px;
      background: transparent;
      border: 2px solid #fff;
      outline: none;
      border-radius: 6px;
      cursor: pointer
    ;
    font-size: 1.1em;
    color: #000;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s;
    }
    .navigation .btnlogin-popup:hover{
      background: #fff;
      color: #162938;
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
   
  </style>
</head>
<body>
  <header>
    <div class="log">    <span class="font-semibold text-xl tracking-tight"><img src="oli.png" width="5%" height="5%">  TuniHistoire</span></div>
    <nav class="navigation">
     <a href="acceuil2.html">Home</a>
     <a href="">About</a>
     <a href="vente.html">Services</a>
     <a href="">Contact</a>
     <button class="btnlogin-popup" onclick="p1.html">login</button>
    </nav>
  </header>
  <div class="container">
    <h2>Reset Password</h2>
    <form action="" method="POST" id="reset-form">
      <input type="email" placeholder="Email" name="email" required>
      <small id="emailHelp" class="form-text text-muted">Nous vous enverrons un nouveau mot de passe.</small>
      <input type="submit" value="Submit" name="submit">
    </form>
  </div>
  <script>
    const form = document.querySelector('#reset-form');

    form.addEventListener('submit', function(event) {
      event.preventDefault();
      const email = document.querySelector('input[type="email"]').value;
      // Send a request to the server to send an email with a  new password 
      alert("Un email a été envoyé à " + email + " avec un nouveau mot de passe.");
    
    });
 
          
    
  </script> 
  <?php
include("configbd.php");
  // generate a new password
  function CreatePass($long_pass) {
    $consonnes = "bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ0123456789";
    $voyelles = "aeiouyAEIOUY0123456789";
    $mdp='';
    for ($i=0; $i < $long_pass; $i++) {
      if (($i % 2) == 0) {
        $mdp = $mdp.substr ($voyelles, rand(0,strlen($voyelles)-1), 1);
      } else {
        $mdp = $mdp.substr ($consonnes, rand(0,strlen($consonnes)-1), 1);
      }
    }
    return $mdp;
  }
$motdepasse=uniqid();
  $motdepasse = CreatePass(8);

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $sql = "SELECT * from utilisateur where email='".$email."' ";
$result = mysqli_query($conn, $sql);
$rows=mysqli_fetch_all($result, MYSQLI_ASSOC);
$num_rows = $conn->affected_rows;
if($num_rows>0){
					
    $message = "Votre nouveau mot de passe : $motdepasse.";
    $header = "MINE-Version:1.0\r\n";
    $header .= "From: Tunishistoire@gmail.com\r\n";
    $header .= "content-type:text/plain;charset=utf-8\r\n";

    if (mail($email, "Récupération de mot de passe", $message, $header)) {
      $sql = "UPDATE utilisateur SET mpd ='".$motdepasse. "'WHERE email ='".$email."' ";
      $result = mysqli_query($conn, $sql);

     
     
    }
  } 
}
?>





</body>
</html>
