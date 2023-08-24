<?php 
 session_start();
 include("configbd.php");  
 

if(isset($_POST["sign"])){
   

session_unset();
session_destroy();
header("Location:login.php");
exit();

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My interface|TuniHistoire</title>
 
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
 .nom{
   font-size:20px;

 }
  .user{
    margin-top:0px;
   /* margin-right:40px;
   width:80px; */
   
  }
  </style>
           <br><br>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">20</div>
                        <div class="cardName">My total Visits</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">10</div>
                        <div class="cardName">My total reservation</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">5</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">700 Dinar</div>
                        <div class="cardName">Expenses</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
           
            <div class="details">
                 <div class="recentOrders"> 
                    <div class="cardHeader"> 
                   
                      <BR>  <h2>My latest Payement</h2></BR>
                        </div>
               
               <table class="w-full whitespace-no-wrap">
                 <thead>
                   <tr
                     class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                   ><th class="px-4 py-3">Display</th>
                     <th class="px-4 py-3">IDPayement</th>
                     <th class="px-4 py-3">Price</th>
                     <th class="px-4 py-3">Date</th>
                     <th class="px-4 py-3">Action</th>
                   
                   </tr>
                 </thead>
                 <tbody
                       class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                     >
                       <tr class="text-gray-700 dark:text-gray-400">
                       <?php
  include("configbd.php");
  $sql="SELECT * FROM reserver 
  INNER JOIN paiement ON reserver.id_paiement = paiement.id_paiement";
  $result = mysqli_query($conn, $sql);
  $count = 1; // initialiser la variable de comptage à 1
  while ($row = mysqli_fetch_array($result)) {
  ?>
                 
                  
                 <td class="px-4 py-2">
      <div>
                               <p class="font-semibold"><?php echo"$count";?>
                            </p>
                             </div>
                            
                         </td>
                     <td class="px-4 py-3 text-sm">
                     <?php echo htmlentities($row['id_paiement']);?>
                     </td>
                     <td class="px-4 py-3 text-xs">
                      
                       

                        <?php echo htmlentities($row['prix']);?>DT
                     
                     </td>
                     
                    
                     <td class="px-1 py-3 text-xs">
                     
                       <span
                         class="px-4 py-3 text-xs"
                       > 
                       <?php
                      
                       echo $row['date'];
                      ?>
                      </span>
                    
                       </td>
              <td>
                <a href="ticket1.php?id=<?php echo $row['id_paiement']?>"><button name="view" class="more" id="myBtn">View more
</button></td>
</tr>
                   <?php $count++;}?>
                    
                 </tbody>
               </table>
             </div>
                </div>  
                </div>  


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
  margin-top: 0px;
}
</style>
                   
                  
                
 <!-- <table >
                        <thead>
                        <div class="w-full overflow-hidden rounded-lg shadow-xs">
             <div class="w-full overflow-x-auto">
               <table class="w-full whitespace-no-wrap">
                 <thead>
                   <div 
                       class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                     >
                       <tr class="text-gray-700 dark:text-gray-400">
                     
                            <tr>
                                <td>IdBooking</td>
                                <td>Destination</td>
                                <td>Date</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                       
                          
                            
   
                    </table>
                </div>
                        </div>  -->

                
                        <!-- ================= New Customers ================ -->
                      
               <!-- <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2><br>Recent promotions</h2>
                    </div>
                           

                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
            
                                        <div class="card-image">
                                           <img src="i.jpg" alt="" class="card-img">
                                        </div>
                                    </div>
            
                                    <div class="card-content">
                                        <h2 class="name">promotion 1</h2>
                                        <p class="description"></p>
                                        <p class="description">vous souhaitez passer des agreables moments avec vos familles alors profiter notre promotion de 25%pour ...</p>
            
                                        <button class="button">View More</button>
                                    </div>
                                </div>
                               
                              
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
            
                                        <div class="card-image">
                                            <img src="w.jpg" alt="" class="card-img">
                                        </div>
                                    </div>
            
                                    <div class="card-content">
                                        <h2 class="name">promotion 2</h2>
                                        <p class="description">vous etes en weekensd et vous ne savez pas que à faire ,preparez vous alors de nos promotions de weekend de 15% et..</p>
            
                                        <button class="button">View More</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
            
                                        <div class="card-image">
                                            <img src="i2.jpg" alt="" class="card-img">
                                        </div>
                                    </div>
            
                                    <div class="card-content">
                                        <h2 class="name">promotion 3</h2>
                                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipis...</p>
            
                                        <button class="button">View More</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
            
                                        <div class="card-image">
                                            <img src="i1.jpg" alt="" class="card-img">
                                        </div>
                                    </div>
            
                                    <div class="card-content">
                                        <h2 class="name">promotion 4</h2>
                                        <p class="description">l'amitie est le tresor de la vie humaine alors venez avec vos amis pour decovrir les tresors de votre pays en profitant ...
                                        <button class="button">View More</button>
                                    </div>
                                </div>
                                
                             
                            </div>
                        </div>
            
                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    </div> 
                    </div> -->
                        
                       

                       
            
    
    <style>
     
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
        <script> 
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