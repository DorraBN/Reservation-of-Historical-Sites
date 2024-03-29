<?php  include("configbd.php");?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container">
        <span class="big-circle"></span>
   
            <div class="contact-info">
                <div class="contact-form">
                    <br><br>
                <h3 class="title" style="margin-left: 70px;">  let's get in touch</h3>
                <p class="text"  style="margin-left: 50px;">
                   If you have any question ,don't hesitate to ask us .<br>
                 We are always here for you.
                </p>
               
            <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
            <form action="" method="post">
                <h3 class="title">contact us</h3>
                <div class="input-container">
                    
                    <input type="text" name="name" class="input" placeholder="username">
                    <label for="">Username</label>
                </div>
                <div class="input-container">
                    <label for="">Email</label>
                    <input type="email" name="email" class="input" placeholder="email">
                  
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" class="input" placeholder="phone">
                    <label for="">Phone</label>
                </div>
                
                <div class="input-container textarea">
                    <textarea name="message"  class="input" placeholder="message"></textarea>
                    <label for="">message</label>
                </div>
<input type="submit" name="submit" value="send" class="btn">

<div class="info">
    <div class="information">
      
    </div>
    <br>
    <div class="contact-form"  style="margin-left: 2px;"><br><br><br>
    <h3  style="margin-left: 70px;">  Informations de Contact</h3><br>
    <p>
        <img src="espace-reserve.png" alt=""> Adresse : 123 Main Street, Anytown, USA<br><br>
       <img src="whatsapp.png" alt="">  Téléphone : (+216)53143270<br><br>
        <img src="e-mail.png" alt=""> Email : contact@example.com<br>
    <div class="information">
      
    </div><br>
    <hr>
    <div class="contact-form"  style="margin-left: 1px;"><br><br><br>
        <h3  style="margin-left: 70px;"> follow us on</h3><br>


    <br>

    <a href="https://facebook.com/example"> <a href="#"><i class="fab fa-facebook-square fa-2x">Facebook</i></a</a><br><br>
    <a href="https://twitter.com/example"><a href="#" style="text-decoration: none;" >  <img src="twitter.png" alt="">TWITTER</a><br><br>
    <a href="https://instagram.com/example"><a href="#" style="text-decoration: none;" >  <img src="instagram.png" alt=""> INSTAGRAM</a>
</div>
</div>
            </form>
            
        </div>
        <span class="circle one"></span>
    </div>
    <span class="circle one"></span>
    <span class="circle t"></span>
    </div>

      

    <span class="circle t"></span>
    






    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body,
        input,
        textarea{
            font-family: "Poppins",sans-serif;
        }
        body{
      display:flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url('mo.jpg') no-repeat;
      background-size: cover;
      background-position: center;
      
    }


.container{
    position: relative;
    width: 750%;
    min-height: 100vh;
    padding: 2rem;
    background-color: #b4c1c4;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 50px200px 25px 25px rgba(0,0, 0, 0.4);

    overflow: hidden;
  
}


.form{
    width: 100%;
    max-width: 920px;

    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px 1px rgba(0,0,0,0.1);
    z-index: 1000;
    overflow: hidden;
    display: grid;
    grid-template-columns: repeat(2,1fr);
}

.contact-form{
    background-color: #3aa99a;
    position: relative;
    width: 520px;
overflow:hidden ;
}
.circle{

    border-radius: 50%;
    background:linear-gradient(135deg,transparent 10%,#149279);
    position: absolute;
}
.circle.one{
    width: 130px;
    height: 130px;
    top: 130px;
    right: -40px;
}
.circle.two{
    width: 80px;
    height: 80px;
    top: 10px;
    right: 30px;
}
.circle.t{
    width: 80px;
    height: 80px;
    top: 10px;
    right: 50px;
    border-radius: 60%;
 
 
}



.contact-form:after{
content: "";
position: absolute;
width: 26px;
height: 26px;
background-color: #149279;
transform: rotate(45deg);
top: 50px;
left: -13px;
}
form{
    padding: 2.3rem 2.2rem;
    z-index: 10;
    overflow: hidden;
    position: relative;

}
.title{
    color: #fff;
    font-weight: 500;
    font-size: 1.5rem;
line-height: 1;
margin-bottom: 0.7rem;
margin-left: 50px;

}

.input-container{
    position: relative;
    margin: 1rem 0;
}
label{
    display: none;
}

.input{
    width: 100%;
    outline: none;
    border: 2px solid #fafafa;
    background: none;
    padding: 0.6rem 1.2rem;
    color: #fff;
    font-weight: 500;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    border-radius: 25px;
    transition: 0.3s;
}

textarea.input{
padding: 0.8rem 1.2rem;
min-height: 150px;
border-radius: 22px;
resize: none;
overflow-y: auto;
}
.input-container  label{
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    padding: 0 0.4rem;
    color: #fafafa;
    font-size: 0.9rem;
    font-weight: 400;
    pointer-events: none;
    z-index: 1000;
    transition: 0.5s;

}

.btn{
    padding: 0.6rem 1.3rem;
    background-color: #fff;
    border: 2px solid #fafafa;
    font-size: 0.95px;
    color: #1abc9c;
    line-height: 1;
    border-radius: 15px;
    outline: none;
    cursor: pointer;
    transition: 0.3s;
    margin: 0;
    width: 70px;
    font-size: 17px;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    align-items: center;
    padding-left: 15px;
}
.btn:hover{
    background-color: transparent;
    color: #fff;
}


.contact-info:before{
    content: "";
    position: absolute;
    width: 110px;
    border-radius: 50%;
    height: 100px;
border: 22px,solid #1abc9c;
right: 50px;
bottom: -77px;
opacity: 0.3;

}
.big-circle{
    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 50%;

  
    background: linear-gradient(to bottom,#149279);
}

    </style>
  <?php 
  $id=uniqid();
  $email=$_POST["email"];
  $msg=$_POST["message"];
  $id=rand(1000,1999);
  if(isset($_POST["submit"])){
    $sql="insert into commentaire values('$id','$msg')";
    $sq="insert into suggérer values('$email','$id')";
    $res=mysqli_query($conn, $sq);
    if(mysqli_query($conn, $sql)){ ;
    header("Location:index.php");
       
        $message = "message send with successful !";
        echo "<script>alert('$message');</script>";
      
    }
   
}
  ?>
 
</body>
</html>