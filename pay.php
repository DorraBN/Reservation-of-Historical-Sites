<?php session_start();

include("configbd.php");
if(isset($_POST["sign"])){
   

    session_unset();
    session_destroy();
    header("Location:login.php");
    exit();
}
 // get id through query string



?>
<!DOCTYPE html>
<html lang="en">

<head>
    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form - TuniHistoire</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

   
 
    <link rel="stylesheet" href="s.css">
    <link rel="stylesheet" href="admin/assets/css/tailwind.output.css" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
  />
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">           
</head>

<body>
<style>
.main-content:before {
  content: "";
  display: block;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  backdrop-filter: blur(5px);
}
.modal {
  position: fixed;
  z-index: 1;

  left:30%;
  right:50%;
  top: 10%;
  width: 40%;
  height: 100%;
  overflow: auto;
  background-color:white;
  /* display: none; */
}		

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  margin-top:0px;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
	</style>

<div class="main-content">

    <div class="container">
        <div class="navigation">
            <br><br><br>
            <div class="toggle">
               
            </div>
            <ul>

                <li>
                    <div>
                    
                        <span class="icon">
                           <img src="oli.png" alt="">
                       
                        <span class="title0">TuniHistoire</span>
                        </span>
                        <div>
                </li>
                <style>
                    .title0{
                       color:white;
position: relative;
display: block;
padding: 0 10px;
height: 60px;
line-height: 60px;
text-align: start;
white-space: nowrap;
                    }
                    .slide-content{
    width:45%;
    height:100%;
   
  }
  .navigation {
  position: fixed;
  width: 200px;
  height: 100%;
  background: var(--blue);
  border-left: 10px solid var(--blue);
  transition: 0.5s;
  overflow: hidden;
  margin-top: -20px;
}
                </style>

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
                    <a href="contacte.html">
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
.search-box{
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
       


  

                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
        <div class="topbar">
               

               <div class="search-box">

                   <i class="uil uil-search"></i>
                   <input 
                  
                   type="text" placeholder="Search">
               </div>
               
               <div class="nom">Welcome</div>
             
               <div class="user">
               <img src="user.png" alt="">
               </div>                      
          

</div>





<style>
  .payed{
    background: #8de02c;
    color: var(--white);
    width:60px;
    height:30px;
    padding: 2px 4px;
    border-radius: 4px;
  font-size: 14px;
  font-weight: 500;
  }
  .pay1{
    background: red;
    color: var(--white);
    width:90px;
    height:30px;
    padding: 2px 4px;
    border-radius: 4px;
  font-size: 14px;
  font-weight: 500;
  }
    .details{
        width:100%;
       margin-left:-80px;
    }
  #myBtn{
    padding: 2px 4px;
  background: #8de02c;
  color: var(--white);
  border-radius: 4px;
  font-size: 10px;
  font-weight: 500;
  width:50px;
  height:20px;
  }  
  .cardHeader h2{
    font-size:20px;
    color:var(--blue);
  }
  .navigation {
  position: fixed;
  width: 200px;
  height: 100%;
  background: var(--blue);
  border-left: 10px solid var(--blue);
  transition: 0.5s;
  overflow: hidden;
  margin-top: -20px;

}
h2{
  text-align:center;
  color:blue;
}
</style>
                 
<div id="myModal" class="modal">


<span class="close">&times;</span>
        <h2>Payment Form</h2>
        
   

        <form action="" method="POST">
            <!--Account Information Start-->
           
            <div class="input_group">
                
                    
                <div class="input_box">
                    <input type="text" placeholder="Name on Card" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
           
            
          
            <!--Account Information End-->


            <!--DOB & Gender Start-->
                     <!--DOB & Gender End-->


            <!--Payment Details Start-->
            <div class="input_group">
                <div class="input_box">
                    
                    <input type="radio" name="pay1" class="radio" id="bc1" value="credit_card">
                    <label for="bc1"><span>
                            <i class="fa fa-cc-visa"></i>Credit Card</span></label>
                    <input type="radio" name="pay1" class="radio" id="bc2" value="d17">
                    <label for="bc2"><span>
                           D17</span></label>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="number" name="number" class="name" placeholder="Card Number 1111-2222-3333-4444" required>
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="password" name="code" class="name" placeholder="Card CVC 632" required>
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <div class="input_box">
                        <input type="number" placeholder="Exp Month" required class="name">
                        <i class="fa fa-calendar icon" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="input_box">
                    <input type="number" placeholder="Exp Year" required class="name">
                    <i class="fa fa-calendar-o icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_box">
                <input type="number" name="price" placeholder="Enter Amount" required class="name">
                <i class="fa fa-money icon" aria-hidden="true"></i>
            </div>
            <!--Payment Details End-->

            <div class="input_group">
                <div class="input_box">
                  
                    <button type="submit" name="pay">PAY NOW</button>
                </div>
            </div>

        </form>
    </div>
</div>
</div>
<?php 

$id = $_GET["id"];

if (isset($_POST['pay'])) {
  $id_paiement = uniqid();
  $id_paiement = rand(8000, 8999);
  $price = $_POST["price"];

  if (isset($_POST['pay1'])) {
    $selected_option = $_POST['pay1'];

    if ($selected_option == 'credit_card') {
      $req = "INSERT INTO paiement(id_paiement,prix,moyen_paiement) VALUES('$id_paiement', '$price', 'carte bancaire')";
      $res = mysqli_query($conn, $req);
    } else if ($selected_option == 'd17') {
      $req = "INSERT INTO paiement(id_paiement,prix,moyen_paiement) VALUES('$id_paiement', '$price', 'D17')";
      $res = mysqli_query($conn, $req);}
      $req1 = "UPDATE reserver SET id_paiement = ? WHERE num_reserv = ?";
      $stmt = mysqli_prepare($conn, $req1);
      mysqli_stmt_bind_param($stmt, "si", $id_paiement, $id);
      mysqli_stmt_execute($stmt);

      if (mysqli_query($conn, $req) ) {
        header(Location:"payement.php");
        $message = "Payement successful !";
        echo "<script>alert('$message');</script>";
      
    }
  }

}


      
      

        ?>
<style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    /* background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
      url("sou.jpg");
    background-repeat: no-repeat;
    background-size: cover; */
    font-family: Arial, Helvetica, sans-serif;
}

.wrapper {
    background-color: #fff;
    width: 500px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    border-radius: 18px;
   
}

.wrapper h2 {
    background-color: #fcfcfc;
    color: #4b6667;
    font-size: 24px;
    padding: 10px;
    margin-bottom: 8px;
    text-align: center;
    border: 1px dashed #21cdd3;
}

.wrapper h4 {
    padding-bottom: 5px;
    color: #21cdd3;
}

.input_group {
    margin-bottom: 8px;
    width: 100%;
    position: relative;
    display: flex;
    flex-direction: row;
    padding: 5px 0;
}

.input_box {
    width: 100%;
    margin-right: 12px;
    position: relative;
}

.input_box:last-child {
    margin-right: 0;
}

.input_box .name {
    padding: 14px 10px 14px 50px;
    width: 100%;
    background-color: #fcfcfc;
    border: 1px solid #0003;
    outline: none;
    letter-spacing: 1px;
    transition: 0.3s;
    border-radius: 3px;
    color: #333;
}

.input_box .name:focus, .dob:focus {
    -webkit-box-shadow: 0 0 2px 1px green;
    -moz-box-shadow: 0 0 2px 1px green;
    box-shadow: 0 0 2px 1px green;
    border: 1px solid green;
}

.input_box .icon {
    width: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    color: #333;
    background-color: #f1f1f1;
    border-radius: 2px 0 0 2px;
    transition: 0.3s;
    font-size: 20px;
    pointer-events: none;
    border: 1px solid #00000003;
    border-right: none;
}

.name:focus+.icon {
    background-color: green;
    color: #fff;
    border-right: 1px solid green;
    border: none;
    transition: 1s;
}

.dob {
    width: 30%;
    padding: 14px;
    text-align: center;
    background-color: #fcfcfc;
    transition: 0.3s;
    outline: none;
    border: 1px solid #c0bfbf;
    border-radius: 3px;
}

.radio {
    display: none;
}

.input_box label {
    width: 50%;
    padding: 13px;
    background-color: #fcfcfc;
    display: inline-block;
    float: left;
    text-align: center;
    border: 1px solid #c0bfbf;
}

.input_box label:first-of-type {
    border-top-left-radius: 3px;
    border-bottom-right-radius: 3px;
    border-right: none;
}

.input_box label:last-of-type {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

.radio:checked+label {
    background-color: #586161;
    color: #fff;
    transition: 0.5s;
}

.input_box button {
    width: 100%;
    background-color: gray;
    border: none;
    color: #fff;
    padding: 15px;
    border-right: 4px;
    font-size: 16px;
    transition: all 0.3s ease;
    border-radius: 8px;
}

.input_box button:hover {
    cursor: pointer;
    background-color: #05b133;
}
      </style>

        </form>
    </div>



































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
        <script> 
        // Get the modal
        // Get the modal element
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the close button
var close = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on the close button, close the modal
close.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

            var swiper = new Swiper(".slide-content", {
                slidesPerView: 3,
                spaceBetween: 25,
                loop: true,
                centerSlide: 'true',
                fade: 'true',
                grabCursor: 'true',
                pagination: {
                  el: ".swiper-pagination",
                  clickable: true,
                  dynamicBullets: true,
                },
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
            
                breakpoints:{
                    0: {
                        slidesPerView: 1,
                    },
                    520: {
                        slidesPerView: 2,
                    },
                    950: {
                        slidesPerView: 3,
                    },
                },
              });
            </script>
             <script>const body = document.querySelector("body"),
              modeToggle = body.querySelector(".mode-toggle");
              sidebar = body.querySelector("nav");
              sidebarToggle = body.querySelector(".sidebar-toggle");
        
        let getMode = localStorage.getItem("mode");
        if(getMode && getMode ==="dark"){
            body.classList.toggle("dark");
        }
        
        let getStatus = localStorage.getItem("status");
        if(getStatus && getStatus ==="close"){
            sidebar.classList.toggle("close");
        }
        
        modeToggle.addEventListener("click", () =>{
            body.classList.toggle("dark");
            if(body.classList.contains("dark")){
                localStorage.setItem("mode", "dark");
            }else{
                localStorage.setItem("mode", "light");
            }
        });
        
        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            if(sidebar.classList.contains("close")){
                localStorage.setItem("status", "close");
            }else{
                localStorage.setItem("status", "open");
            }
        })
        </script></style>

    <!-- =========== Scripts =========  -->
    <script src="main1.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>


