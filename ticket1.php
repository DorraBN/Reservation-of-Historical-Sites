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


    </style>




<style>
    
    .cardHeader h2{
    font-size:20px;
    color:var(--blue);
  }
    .details{
        width:100%;
       margin-left:-80px;
    }
  .more{
    padding: 2px 4px;
  background-color: blue;
  color: var(--white);
  border-radius: 4px;
  font-size: 10px;
  font-weight: 500;
  width:70px;
  height:20px;
  } 
  .recentCustomers{
    position: block;
    /* width:20px;
   
    margin-left:30px; */
  background: var(--white);
  padding: 30px;
  border-radius: 20px;
  display: flex;
 
  justify-content: space-between;
  cursor: pointer;

  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    
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
        
       



<div class="box">

  <ul class="left">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  
  <ul class="right">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <div class="ticket">
  
    <span class="airline"> TuniHistoire</span>

    <span class="airline airlineslip">TuniHistoire</span>
    <span class="boarding">E-Ticket</span>
    
   
      <div class="sub-content">

        <span class="watermark">TuniHistoire</span>
       <?php 
       $id=$_GET["id"];
  $stmt = mysqli_prepare($conn, "SELECT * FROM reserver r
  JOIN reservation rv ON r.num_reserv = rv.num_reserv
  JOIN paiement p ON r.id_paiement = p.id_paiement
  JOIN destination d ON r.id_destination = d.id_destination
  JOIN utilisateur u ON r.email = u.email
   where r.id_paiement=?");
   if(!$stmt){
    die('Error: ' . mysqli_error($conn));
 }
   mysqli_stmt_bind_param($stmt, "i", $id);
  
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_array($result)){?>
       
        <span class="name"> NAME<br><span><?php echo $row['nom']. $row['prenom']; ?> </span></span>
        <span class="flight">Booking N&deg;<br><span><?php echo $row['num_reserv'];  ?>  </span></span>
        <span class="gate">Destination<br><?php echo $row['description'];   ?> <span></span></span>
        <span class="seat">Price<br><span><?php echo $row['prix'] ; ?> </span></span>
        <span class="boardingtime">Date<br><span><?php echo $row['date'] ; ?> </span></span>
            
         <span class="flight flightslip">Booking N&deg;<br><span><?php echo $row['num_reserv'] ;  ?> </span></span>
          <span class="seat seatslip">Price<br><span><?php echo $row['prix'] ; ?> 
  </span></span>
         <span class="name nameslip"> NAME<br><span><?php echo $row['nom']. $row['prenom'] ; ; ?> </span></span>
<?php }?>
        </div>
    </div>
    <div class="barcode"></div>
    <div class="barcode slip"></div>
  </div>
</div>
  </div>
  </div>
</div>

<style>
body{
  margin-top: 0;
  padding: 0;
  background: #fff;
}

.box{
  position: absolute;
  margin-top:20%;
  top: calc(50% - 125px);
  top: -webkit-calc(50% - 125px);
  left: calc(50% - 300px);
  left: -webkit-calc(50% - 300px);
}

.ticket{
  width: 600px;
  height: 250px;
  background: #000080;
  border-radius: 3px;
  box-shadow: 0 0 100px #aaa;
  border-top: 1px solid #E89F3D;
  border-bottom: 1px solid #E89F3D;
}

.left{
  margin: 0;
  padding: 0;
  list-style: none;
  position: absolute;
  top: 0px;
  left: -5px;
}

.left li{
  width: 0px;
  height: 0px;
}

.left li:nth-child(-n+2){
  margin-top: 8px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-right: 5px solid #000080;
}

.left li:nth-child(3),
.left li:nth-child(6){
  margin-top: 8px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-right: 5px solid #EEEEEE;
}

.left li:nth-child(4){
  margin-top: 8px;
  margin-left: 2px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-right: 5px solid #EEEEEE;
}

.left li:nth-child(5){
  margin-top: 8px;
  margin-left: -1px;
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent; 
  border-right: 6px solid #EEEEEE;
}

.left li:nth-child(7),
.left li:nth-child(9),
.left li:nth-child(11),
.left li:nth-child(12){
  margin-top: 7px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-right: 5px solid #E5E5E5;
}

.left li:nth-child(8){
  margin-top: 7px;
  margin-left: 2px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-right: 5px solid #E5E5E5;
}

.left li:nth-child(10){
  margin-top: 7px;
  margin-left: 1px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-right: 5px solid #E5E5E5;
}

.left li:nth-child(13){
  margin-top: 7px;
  margin-left: 2px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-right: 5px solid #000080;
}

.left li:nth-child(14){
  margin-top: 7px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-right: 5px solid #000080;
}

.right{
  margin: 0;
  padding: 0;
  list-style: none;
  position: absolute;
  top: 0px;
  right: -5px;
}

.right li:nth-child(-n+2){
  margin-top: 8px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-left: 5px solid #000080;
}

.right li:nth-child(3),
.right li:nth-child(4),
.right li:nth-child(6){
  margin-top: 8px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-left: 5px solid #EEEEEE;
}

.right li:nth-child(5){
  margin-top: 8px;
  margin-left: -2px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-left: 5px solid #EEEEEE;
}

.right li:nth-child(8),
.right li:nth-child(9),
.right li:nth-child(11){
  margin-top: 7px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-left: 5px solid #E5E5E5;
}

.right li:nth-child(7){
  margin-top: 7px;
  margin-left: -3px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-left: 5px solid #E5E5E5;
}

.right li:nth-child(10){
  margin-top: 7px;
  margin-left: -2px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-left: 5px solid #E5E5E5;
}

.right li:nth-child(12){
  margin-top: 7px;
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent; 
  border-left: 6px solid #E5E5E5;
}

.right li:nth-child(13),
.right li:nth-child(14){
  margin-top: 7px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent; 
  border-left: 5px solid #000080;
}

.ticket:after{
  content: '';
  position: absolute;
  right: 200px;
  top: 0px;
  width: 2px;
  height: 250px;
  box-shadow: inset 0 0 0 #000080,
    inset 0 -10px 0 #B56E0A,
    inset 0 -20px 0 #000080,
    inset 0 -30px 0 #B56E0A,
    inset 0 -40px 0 #000080,
    inset 0 -50px 0 #999999,
    inset 0 -60px 0 #E5E5E5,
    inset 0 -70px 0 #999999,
    inset 0 -80px 0 #E5E5E5,
    inset 0 -90px 0 #999999,
    inset 0 -100px 0 #E5E5E5,
    inset 0 -110px 0 #999999,
    inset 0 -120px 0 #E5E5E5,
    inset 0 -130px 0 #999999,
    inset 0 -140px 0 #E5E5E5,
    inset 0 -150px 0 #B0B0B0,
    inset 0 -160px 0 #EEEEEE,
    inset 0 -170px 0 #B0B0B0,
    inset 0 -180px 0 #EEEEEE,
    inset 0 -190px 0 #B0B0B0,
    inset 0 -200px 0 #EEEEEE,
    inset 0 -210px 0 #B0B0B0,
    inset 0 -220px 0 #000080,
    inset 0 -230px 0 #B56E0A,
    inset 0 -240px 0 #000080,
    inset 0 -250px 0 #B56E0A;
}

.ticket:before{
  content: '';
  position: absolute;
  z-index: 5;
  right: 199px;
  top: 0px;
  width: 1px;
  height: 250px;
  box-shadow: inset 0 0 0 #000080,
    inset 0 -10px 0 #F4D483,
    inset 0 -20px 0 #000080,
    inset 0 -30px 0 #F4D483,
    inset 0 -40px 0 #000080,
    inset 0 -50px 0 #FFFFFF,
    inset 0 -60px 0 #E5E5E5,
    inset 0 -70px 0 #FFFFFF,
    inset 0 -80px 0 #E5E5E5,
    inset 0 -90px 0 #FFFFFF,
    inset 0 -100px 0 #E5E5E5,
    inset 0 -110px 0 #FFFFFF,
    inset 0 -120px 0 #E5E5E5,
    inset 0 -130px 0 #FFFFFF,
    inset 0 -140px 0 #E5E5E5,
    inset 0 -150px 0 #FFFFFF,
    inset 0 -160px 0 #EEEEEE,
    inset 0 -170px 0 #FFFFFF,
    inset 0 -180px 0 #EEEEEE,
    inset 0 -190px 0 #FFFFFF,
    inset 0 -200px 0 #EEEEEE,
    inset 0 -210px 0 #FFFFFF,
    inset 0 -220px 0#000080,
    inset 0 -230px 0 #F4D483,
    inset 0 -240px 0 #FFB300,
    inset 0 -250px 0 #F4D483;
}

.content{
  position: absolute;
  top: 40px;
  width: 100%;
  height: 250px;
  background: #000080;
}

.airline{
  position: absolute;
  top: 10px;
  left: 10px;
  font-family: Arial;
  font-size: 20px;
  font-weight: bold;
  color: white;
}

.boarding{
  position: absolute;
  top: 10px;
  right: 220px;
  font-family: Arial;
  font-size: 18px;
  color: rgba(255,255,255,0.6);
}



.sub-content{
  background: #e5e5e5;
  width: 100%;
  height: 50%;
  position: absolute;
  top: 60px;
  height:130px;
}

.watermark{
  position: absolute;
  left: 5px;
  top: -10px;
  
  font-family: Arial;
  font-size: 100px;
  font-weight: bold;
  color: rgba(255,255,255,0.2);
}

.name{
  position: absolute;
  top: 10px;
  left: 10px;
  font-family: Arial Narrow, Arial;
  font-weight: bold;
  font-size: 14px;
  color: #999;
}

.name span{
  color: #555;
  font-size: 17px;
}

.flight{
  position: absolute;
  top: 10px;
  left: 180px;
  font-family: Arial Narrow, Arial;
  font-weight: bold;
  font-size: 14px;
  color: #999;
}

.flight span{
  color: #555;
  font-size: 17px;
}

.gate{
  position: absolute;
  top: 10px;
  left: 244px;
  font-family: Arial Narrow, Arial;
  font-weight: bold;
  font-size: 15px;
  color: #999;
}

.gate span{
  color: #555;
  font-size: 15px;
}


.seat{
  position: absolute;
  top: 10px;
  left: 350px;
  font-family: Arial Narrow, Arial;
  font-weight: bold;
  font-size: 14px;
  color: #999;
}

.seat span{
  color: #555;
  font-size: 17px;
}

.boardingtime{
  position: absolute;
  top: 60px;
  left: 10px;
  font-family: Arial Narrow, Arial;
  font-weight: bold;
  font-size: 14px;
  color: #999;
}

.boardingtime span{
  color: #555;
  font-size: 17px;
}

.barcode{
  position: absolute;
  left: 8px;
  bottom: 6px;
  height: 30px;
  width: 90px;
  background: #222;
  box-shadow: inset 0 1px 0 white, inset -2px 0 0 white,
    inset -4px 0 0 #222,
    inset -5px 0 0 white,
    inset -6px 0 0 #222,
    inset -9px 0 0 white,
    inset -12px 0 0 #222,
    inset -13px 0 0 white,
    inset -14px 0 0 #222,
    inset -15px 0 0 white,
    inset -16px 0 0 #222,
    inset -17px 0 0 white,
    inset -19px 0 0 #222,
    inset -20px 0 0 white,
    inset -23px 0 0 #222,
    inset -25px 0 0 white,
    inset -26px 0 0 #222,
    inset -26px 0 0 white,
    inset -27px 0 0 #222,
    inset -30px 0 0 white,
    inset -31px 0 0 #222,
    inset -33px 0 0 white,
    inset -35px 0 0 #222,
    inset -37px 0 0 white,
    inset -40px 0 0 #222,
    inset -43px 0 0 white,
    inset -44px 0 0 #222,
    inset -45px 0 0 white,
    inset -46px 0 0 #222,
    inset -48px 0 0 white,
    inset -49px 0 0 #222,
    inset -50px 0 0 white,
    inset -52px 0 0 #222,
    inset -54px 0 0 white,
    inset -55px 0 0 #222,
    inset -57px 0 0 white,
    inset -59px 0 0 #222,
    inset -61px 0 0 white,
    inset -64px 0 0 #222,
    inset -66px 0 0 white,
    inset -67px 0 0 #222,
    inset -68px 0 0 white,
    inset -69px 0 0 #222,
    inset -71px 0 0 white,
    inset -72px 0 0 #222,
    inset -73px 0 0 white,
    inset -75px 0 0 #222,
    inset -77px 0 0 white,
    inset -80px 0 0 #222,
    inset -82px 0 0 white,
    inset -83px 0 0 #222,
    inset -84px 0 0 white,
    inset -86px 0 0 #222,
    inset -88px 0 0 white,
    inset -89px 0 0 #222,
    inset -90px 0 0 white;
}

.slip{
  left: 455px;
}

.nameslip{
  top: 60px;
  left: 410px;
}

.flightslip{
  left: 410px;
}

.seatslip{
  left: 540px;
}

.jfkslip{
  font-size: 30px;
  top: 20px;
  left: 410px;
}

.sfoslip{
  font-size: 30px;
  top: 20px;
  left: 530px;
}

.planeslip{
  top: 10px;
  left: 475px;
}

.airlineslip{
  left: 455px;
}
</style>
<script> 
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
             <script>
    
             const body = document.querySelector("body"),
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
              