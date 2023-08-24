
<!DOCTYPE html>
<html>
<head>
	<title> Tunihistoire </title>
	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	 
  <link rel="stylesheet" href=
  "https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href=
  "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>    
</head>
<body class="background">

<header>
	
<nav class="navigation" style=" margin-top: 4px;">
    
	<div class="logo"><h2> <img src="oli.png" style="margin-left: 45px;"> Tunihistoire</h2> </h1> </div>
	<div class="menu">
       
		<a href="#" style="font-size:20px">HOME</a>
        <a href="vente.html" >Services</a>
        <a href="about.html" >About</a>
        <a href="contacte.html" >contact</a>
    
        
		

	
       
          
          
	</div> 
  <form class="search-form" action="#" method="get">
    <input type="text" name="search" placeholder="Search...">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <div>
  <img src="icon.png" alt="" class="user-pic" onclick="toggleMenu()">
    <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
            <div class="user-info">
                <img src="oli.png" alt="">
                <h4>Tunihistoire</h4>
                
            </div>
            <hr>
            <a href="user-interface.html" class="sub-menu-link">
                <ion-icon name="person-circle" class="fas"></ion-icon>

           Edit profile</p>
          <span></span></a>
                <a href="#" class="sub-menu-link"><ion-icon name="settings" class="fas"></ion-icon>
                 setting & privacy</p>
                  <span></span></a>
                    <a href="contacte.html" class="sub-menu-link"> <ion-icon name="help-circle" class="fas"></ion-icon>
                       help & support</p>
                      <span></span></a>
                        <a href="#"  class="sub-menu-link"> <ion-icon name="log-out-outline" class="fas"></ion-icon>
                           log out</p><span></span></a>
            </a>
          </div>
        </div>
    </div>
</nav>

	<main >
		<section >
			<h3>Welcome To Tunisia </h3>
			<h1>Discover the iconic<br> historical sites<br> of<br> <span class="change_content"> </span> <span style="margin-top: -10px;">  </span> </h1>
			<p>"A journey through Tunisian history"</p>
			<a href="payement-form.htm" class="btnone">learn more</a>
			<a href="home.html" class="btntwo">signup here</a>
		</section>
	</main>
  <style>
    .sub-menu hr{
        border: 0;
        height: 1px;
        width: 100%;
        background: #000;
        margin: 15px 0 10px;
    }
    .hero{
        width: 100%;
        min-width: 100vh;
        background: #eceaff;
        color: #525252;
    }
    nav{
        background: #1a1a11;
        width: 100%;
        padding: 10px 10%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
    }
    .logo{
        width: 120px;
    }
    .user-pic{
        width: 40px;
        border-radius: 50%;
        cursor: pointer
        ;
        margin-left: 30px;
    }
    .sub-menu-wrap{
        position: absolute;
        top: 100%;
        right: 10%;
        width: 320px;
        max-height: 0px;
        overflow: hidden;
        transition:max-height 0.5s;
    }
.sub-menu-wrap.open-menu{
max-height:400px;
}

p{
  font-size: 12px ;
  font-display: flex;
  position: relative;
}


    .sub-menu{
        background: #828080;
        padding: 20px;
        border-radius: 20px;
        margin: 10px;
    
    }
    .user-info{
        display: flex;
        align-items: center;
    }
.user-info h3{
font-weight: 500;
}
.user-info img{
width: 60px;
border-radius: 50%;
margin-right: 15px;
}
.sub-menu-link{
display: flex;
align-items: center;
text-decoration: none;
color: #000;
margin: 12px 0;
}
.sub-menu-link span{
font-size: 50px;
transition: transform 0.5s;
background-color: #000;
}
.sub-menu-link:hover span{
transform: translateX(5px);
background-color: #000;
}
.sub-menu-link:hover p{
font-weight: 800;
display: flex;
position: relative;
}















</style>
<script>
    let subMenu=document.getElementById('subMenu');
    function toggleMenu()
    {
        subMenu.classList.toggle("open-menu");
    }
</script>
<style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Josefin Sans", sans-serif;
  }
  
  header {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
      url("mo.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    animation: changebackground 10s ease infinite;
  }
 
  nav {
    width: 100%;
    height: 11vh;
    background: rgba(0, 0, 0, 0.2);
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-transform: uppercase;
  }
  .navigation {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 80px;
  background-color: #333;
  color: white;
  padding: 0 20px;
}

.search-form {
  position: relative;
  display: flex;
  align-items: center;
}

.search-form input[type="text"] {
  width: 200px;
  padding: 5px 10px;
  margin-right: 5px; /* adjust this value to bring the input closer to the button */
  border-radius: 20px;
  bordeR:2px solid #00b894;

  outline: none;
  font-size: 16px;
}

.search-form button[type="submit"] {
  background-color: transparent;
  border: none;
  outline: none;
  cursor: pointer;
}

.search-form button[type="submit"] i {
  font-size: 16px;
}

.search-form button[type="submit"]:hover i {
  color: #ffc107;
}

  
  nav .logo {
    width: 25%;
    text-align: center;
    margin-top: 0;
    /*background: red;*/
  }
  
  nav .menu {
    width: 40%;
    display: flex;
    justify-content: space-around;
  }
  
  nav .menu a {
    width: 25%;
    text-decoration: none;
    color: white;
    font-weight: bold;
  }
  .navigation a{
      position: relative;
      font-size: 1em;
      color: #fff;
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
    color: #fff;
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
      width: 80%;
      height: 2px;
      background: #fff;
      border-radius: 8px;

transform: scaleX(0); transition: transform .5s; }
.navigation a:hover::after{
transform-origin: left;
transform:scaleX(1);
}
  
  nav .menu a:first-child {
    color: #1118ec;
  }
  nav .menu a:hover{
    color: #1118ec;
  }
  
  main {
    width: 100%;
    height: 85vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
  }
  
  section h3 {
    font-size: 35px;
    font-weight: 200;
    letter-spacing: 3px;
    text-shadow: 1px 1px 2px black;
  }
  
  section h1 {
    margin: 30px 0 20px 0;
    font-size: 55px;
    font-weight: 700;
    text-shadow: 2px 1px 5px black;
    text-transform: uppercase;
  }
  
  section p {
    font-size: 25px;
    word-spacing: 2px;
    margin-bottom: 25px;
    text-shadow: 1px 1px 1px black;
  }
  
  section a {
    padding: 12px 30px;
    border-radius: 4px;
    outline: none;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 1px;
    transition: all 0.5s ease;
  }
  
  section .btnone {

    background: #97d4e3;
    color: #000;
    border: 2px solid #2403fa;
 
    border-radius: 10px;
  }
  
  .btnone:hover {
    background: #2403fa;
    color: white;
    font-weight: 600;
    border: 2px solid #2403fa;
    border-radius: 15px;
  }
  
  section .btntwo {
    background: #97d4e3;
    color: #000;
    border: 2px solid #2403fa;
 
    border-radius: 10px;
  }
  
  .btntwo:hover {
    background: #2403fa;
    color: white;
    font-weight: 600;
    border: 2px solid #2403fa;
    border-radius: 15px;
  }
  
  .change_content:after {
    content: "";
    animation: changetext 10s infinite linear;
    color: #172ede;
  }
  


  @keyframes changetext {
    0% {
      content: "SOUSSE";
    }
    20% {
      content: "TUNIS";
    }
   
    35% {
      content: "NORTH -TUNISIA";
    }
    70% {
      content: "MAHDIA";
    }
    80% {
      content: "KAIROUAN";
    }
    100% {
      content: "SUD-TUNISIA";
    }
  }


  @keyframes changebackground {
  0% {
    background-image: url('mo.jpg');
  }
  20% {
    background-image: url('med.jpg');
  }
  35% {
    background-image: url('dougga.jpg');
  }
  70% {
    background-image: url('jem.jpg');
   
  }
  85% {
    background-image: url('okba.jpg');
  }
 
  100% {
    background-image: url('sud.jpg');
  }
}











.logo {
  width: 25%;
  text-align: center;
  margin-top: 0;
  /*background: red;*/
}

.logo img {
  height: 60px; /* ajustez cette valeur pour définir la hauteur de votre logo */
  margin: 0;
  padding: 0;
}
.navigation{
  background: transparent;
 box-shadow: #000;
}

    </style>

</header>

</body>

</html>