<?php session_start();
include("configbd.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>My interface | Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

 <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
 
<link rel="stylesheet" href="css/morris.css" type="text/css"/> 
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- <script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' /> -->
<link rel="stylesheet" href="s.css">
     <link rel="stylesheet" href="admin/assets/css/tailwind.output.css" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
  />
   
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<script type="text/javascript">
  function valid()
  {
  if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
  {
  alert("New Password and Confirm Password Field do not match  !!");
  document.chngpwd.confirmpassword.focus();
  return false;
  }
  return true;
  }
  </script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head> 
<body>
  <div class="container">
    <div class="navigation">
        <br><br><br>
        <div class="toggle">
           
        </div>
        <ul>

            <li>
                <a href="#">
                    <span class="icon">
                       <img src="oli.png" alt="">
                    </span>
                    <span class="title">TuniHistoire</span>
                </a>
            </li>

            <li>
                <a href="index.php">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>

            <li>
                <a href="savoir.html">
                    <span class="icon">
                        <ion-icon name="location-outline"></ion-icon>
                    </span>
                    <span class="title">Destinations</span>
                </a>
            </li>

            <li>
                <a href="payement.php">
                    <span class="icon1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
</svg>
<style> .icon1{ position: relative;
display: block;
min-width: 60px;
height: 60px;
line-height: 75px;
text-align: center;
margin-left:20px;
font-size: 1.75rem;

}
.navigation {
  position: fixed;
  width: 200px;
  height: 100%;
  background: var(--blue);
  border-left: 10px solid var(--blue);
  transition: 0.5s;
  overflow: hidden;
  margin-top: 0px;
  margin-left:-15px;
}
.title1{
margin-left:-20px;
position: relative;
display: block;
padding: 0 10px;
height: 60px;
line-height: 60px;
text-align: start;
white-space: nowrap;
}</style>

                    </span>
                    <span class="title1">Payement</span>
                </a>
            </li>

            <li>
                <a href="contacte.php">
                    <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                    </span>
                    <span class="title">Help</span>
                </a>
            </li>

            <li>
                <a href="setting.html">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Settings</span>
                </a>
            </li>

            <li>
                <a href="password.php">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <span class="title">Password</span>
                </a>
            </li>

            <li>
                
                <form action="" method="POST">
                <button name="sign" class="sign">
                    <span class="icon2">
                        <ion-icon name="log-out-outline"></ion-icon>
                    
                    <span class="title2">Sign Out</span></span>
                  
</button>
</form>
</div>

</li>
        </ul>
    </div>
</div>
</div>
<style>

.icon2{
    position: relative;
display: block;
min-width: 60px;
height: 60px;
line-height: 75px;
text-align: center;
color:white;
font-size: 1.75rem;
margin-left:10px;

}
.title2{
color:white;
font-size:15px;
padding: 0 10px;
height: 60px;
line-height: 30px;
text-align: start;
white-space: nowrap;
margin-left:11px;
}


</style>


    <!-- ========================= Main ==================== -->
    <div class="main">
    <div class="topbar">
               
               <div class="search-box">

                   <i class="uil uil-search"></i>
                   <input 
                  
                   type="text" placeholder="Search">
               </div>
               
               <div class="nom"><BR>Welcome<BR></div>
               <div class="user">
                   <img src="user.png" alt="">
               </div>
               
              
              
                



</div>
</div>
<br><br><br><br><br>
<div class="change">Change password</div>
<div class="ligne">__________________________________________________________________________________________________________________________</div>
<style>
    .change{
         font-size:25px;
         font-family:Arial;
          
         transform: translateX(210px);
         color:blue;

    }
    .ligne{
        color:darkblue;
        transform: translateX(200px);
    }
  
   
    .input .form-control1{
       width:40px;
       height:40px;
       font-size:40px;
    }
    .control-label{
   
      transform: translateX(150px);
    }
    .input-group{
      transform: translateX(150px);
    }
    .btn-primary {
    transform: translateX(150px);
    }
    .btn-inverse{transform: translateX(190px);}
    </style>


<br><br><br><br>
  
    <form  name="chngpwd" method="post" class="form-horizontal" onSubmit="return valid();">

      <div class="form-group">
        <label class="col-md-2 control-label">Current Password</label>
        <div class="col-md-8">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-key"></i>
            </span>
            <input class="w-full pl-4 pr-2 text-sm-80 text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-blue form-input"
                 
            type="password" name="password" class="form-control1" id="exampleInputPassword1" placeholder="Current Password" required="">
          </div>
        </div>
      </div>
      <br>

<div class="form-group">
        <label class="col-md-2 control-label">New Password</label>
        <div class="col-md-8">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-key"></i>
            </span>
            <input class="w-full pl-4 pr-2 text-sm-80 text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-blue form-input"
                 
            type="password" class="form-control1" name="newpassword" id="newpassword" placeholder="New Password" required="">
          </div>
        </div>
      </div>
      <br>

<div class="form-group">
        <label class="col-md-2 control-label">Confirm Password</label>
        <div class="col-md-8">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-key"></i>
            </span>
            <input class="w-full pl-4 pr-2 text-sm-80 text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-blue form-input"
                 
             type="password" class="form-control1" name="confirmpassword" id="confirmpassword" placeholder="Confrim Password" required="">
          </div>
        </div>
      </div>
<br>
      <div class="col-sm-8 col-sm-offset-2">
 <button type="submit" name="submit"  class="btn-primary btn">Submit</button>
  <button type="reset" class="btn-inverse btn">Reset</button>
</div>

</form>
</div>


<?php 
if(isset($_POST["submit"])){
  $mdp = mysqli_real_escape_string($conn, $_POST["password"]);
  $mdp1 = mysqli_real_escape_string($conn, $_POST["newpassword"]);
  $mdp2 = mysqli_real_escape_string($conn, $_POST["confirmpassword"]);

  $requete = "SELECT count(*) FROM utilisateur where email = '".$_SESSION["email"]."' and mdp='".$mdp."'";
  $exec_requete = mysqli_query($conn, $requete);
  $reponse = mysqli_fetch_array($exec_requete);
  $count = $reponse['count(*)'];

  if($mdp1 == $mdp2 && $count != 0){
    $sql = "UPDATE utilisateur SET mpd='". $mdp1 ."' WHERE email = '".$_SESSION["email"]."'";
    $res = mysqli_query($conn, $sql);
  }
} 
?>

        <style>.search-box{
        position: relative;
        height: 45px;
        max-width: 750px;
        width: 150%;
        margin-left: -87px;
        
    }
    .search-box input{
        position: absolute;
        border: 2px solid rgb(39, 39, 143);
        background-color: var(--panel-color);
        padding: 0 50px 0 50px;
        border-radius: 10px;
        height: 100%;
        width: 50%;
        color: var(--text-color);
        font-size: 15px;
        font-weight: 400;
        margin-right: 5px;
        outline: none;
    }
   .search-box i{
    color:rgb(39, 39, 143);
        position: absolute;
        left: 15px;
        font-size: 22px;
        z-index: 10;
        top: 50%;
        transform: translateY(-50%);
        color: var(--black-light-color);
    }
    
    .logo {
  width: 25%;
  text-align: center;
  margin-top: 0;
  color:rgb(39, 39, 143);
  /*background: red;*/
}
.logo{
        width: 120px;
    }

 img {
  height: 60px; /* ajustez cette valeur pour définir la hauteur de votre logo */
  margin: 0;
  padding: 0;
}
.slide-container{
          max-width: 1120px;
          width: 100%;
          padding: 40px 0;
        }
        .slide-content{
          margin: 0 40px;
          overflow: hidden;
          border-radius: 25px;
        }
        .card{
          border-radius: 25px;
          background-color: #FFF;
        }
        .image-content,
        .card-content{
          display: flex;
          flex-direction: column;
          align-items: center;
          padding: 10px 14px;
        }
        .image-content{
          position: relative;
          row-gap: 5px;
          padding: 25px 0;
        }
        .overlay{
          position: absolute;
          left: 0;
          top: 0;
          height: 100%;
          width: 100%;
          background-color: #4070F4;
          border-radius: 25px 25px 0 25px;
        }
        .overlay::before,
        .overlay::after{
          content: '';
          position: absolute;
          right: 0;
          bottom: -40px;
          height: 40px;
          width: 40px;
          background-color: #4070F4;
        }
        .overlay::after{
          border-radius: 0 25px 0 0;
          background-color: #FFF;
        }
        .card-image{
          position: relative;
          height: 150px;
          width: 150px;
          border-radius: 50%;
          background: #FFF;
          padding: 3px;
        }
        .card-image .card-img{
          height: 100%;
          width: 100%;
          object-fit: cover;
          border-radius: 50%;
          border: 4px solid #4070F4;
        }
        .name{
          font-size: 18px;
          font-weight: 500;
          color: #333;
        }
        .description{
          font-size: 14px;
          color: #707070;
          text-align: center;
        }
        .button{
          border: none;
          font-size: 16px;
          color: #FFF;
          padding: 8px 16px;
          background-color: #4070F4;
          border-radius: 6px;
          margin: 14px;
          cursor: pointer;
          transition: all 0.3s ease;
        }
        .button:hover{
          background: #265DF2;
        }
        
        .swiper-navBtn{
          color: #6E93f7;
          transition: color 0.3s ease;
        }
        .swiper-navBtn:hover{
          color: #4070F4;
        }
        .swiper-navBtn::before,
        .swiper-navBtn::after{
          font-size: 35px;
        }
        .swiper-button-next{
          right: 0;
        }
        .swiper-button-prev{
          left: 0;
        }
        .swiper-pagination-bullet{
          background-color: #6E93f7;
          opacity: 1;
        }
        .swiper-pagination-bullet-active{
          background-color: #4070F4;
        }
        
        @media screen and (max-width: 768px) {
          .slide-content{
            margin: 0 10px;
          }
          .swiper-navBtn{
            display: none;
          }
        }
        </style>
       </style>

    <!-- =========== Scripts =========  -->
    <script src="main1.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
    </html>