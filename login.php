
<?php 
  session_start();
  include("configbd.php");
if(isset($_POST['email']) && isset($_POST['mdp']))
{  
 
 $email = mysqli_real_escape_string($conn,htmlspecialchars($_POST['email'])); 
 $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['mdp']));
 
 if($email !== "" && $password !== "")
 {
 $requete = "SELECT count(*) FROM utilisateur where email = '".$email."' and mpd = '".$password."' ";
 $exec_requete = mysqli_query($conn,$requete);
 $reponse = mysqli_fetch_array($exec_requete);
 $count = $reponse['count(*)'];
 $sql="select * from utilisateur where email='".$email."'";
 $result=mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
 if($count!=0) // nom d'utilisateur et mot de passe correctes
 {
  if($row["role"]=="admin")
    {	
      $_SESSION["email"]=$email;
      header("Location:admin/dashboard.php");
     
    }
    else if($row["role"]=="user")
	{
  	$_SESSION["email"]=$email;
    header("Location:index.php");
  
   
	}
}
   

	 
    


 
  else
	{  $message = "email or password incorrect !";
    echo "<script>alert('$message');</script>";
	
	}
}}

mysqli_close($conn); // fermer la connexion
session_destroy();
?>
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
       <img src="oli.png" width="5%" height="5%">   <span class="font-semibold text-xl tracking-tight">TuniHistoire</span></h2>
    <nav class="navigation">
     <a href="acceuil2.html">Home</a>
     <a href="">About</a>
     <a href="vente.html">Services</a>
     <a href="">Contact</a>

    </nav>
  </header>
  <div class="wrapper">
    <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span> 

    







    <div class="form-box login">
      <h2><i><u>login</u></i></h2>
      
      <form action="" method="POST">
    
        <div class="input-box">
          <span  class="icon"><ion-icon name="mail-outline"></ion-icon>
          </span>
          <input type="email" name="email"required>
          <label for="">email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" name="mdp" required>
          <label for="">password</label>
        </div>
        <div class="remember-forgot">
          <label for="">
            <input type="checkbox" name="remember">remember me
          </label>
          <a href="mailpassword.php" style="color: red;">forgot password? </a>
        </div>
        <button type="submit" class="btn" name="login">login</button>
        <div class="login-register">
          <p>don't have an account <a href="registration.php" class="register-link" style="color: green;">register</a> </p>
          </div>
        
        </form>
</form>
          <div class="or-separator">OR</div>
         
          <button class="social-login-btn facebook-btn"> <a href="http://facebook.com"><i class="fab fa-facebook-square fa-2x">Login with Facebook</i></a></button>
          <button class="social-login-btn google-btn"><a href="http://google.com"><i class="fab fa-google fa-2x">Login with Google</i></a></button>

        </div>
     
    </div>
    


   </div>
  <style>
    .social-login-btn{
    width:300px;
    height:50px;
    margin-left:5%;
    margin-right:60%;
    }
     .or-separator {
    margin: 20px 0;
    text-align: center;
  }
  
  .social-login-btn {
    background-color: white;
    color: #333;
    padding: 10px 20px;
    border-radius: 15px;
    border: 1px solid #ddd;
    cursor: pointer;
    margin-bottom: 20px;
    
    font-size: 10px;
    /*width: 350px;
    align-items: center;*/
  
  }
  .navigation a:hover{font-weight: 600;}
  
  .facebook-btn {
    background-color: #4267B2;
    color: white;
  }
 
  .social-login-btn :hover{
    font-weight: 600;
  }
  .google-btn {
    background-color: #aea2a8;
    color: #333;
    border-color: #ddd;
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
      background-size: cover;
      background-position: center;
      
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
.wrapper-register{
  margin-top: 45px;
  height: 620px;
}




    .wrapper .form-box.login{
    
      transition: transform .18s ease;
      transform: translateX(0);
    }
.wrapper.active  .form-box.login{
transition: none;
  transform: translateX(-400px);
}

.wrapper .form-box.register{
    
   position: absolute;
   transition: none;
   transform: translateX(400px);
  }
.wrapper.active .form-box.register{
  transition: transform .18s ease;
      transform: translateX(0);
 
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
  font-weight: 500;
 
  
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
  font-weight: 800;
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
</html>




