<?php include("configbd.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


  <section>
    <div class="form-wrapper">
      <form action="" method="post">
        <div class="form-group">
          <label for="date-input">Select a date :</label>
          <input type="date" id="date-input" name="date">
        </div>
        <div class="form-group">
          <label for="time-input">select an hour :</label>
          <input type="time" id="time-input" name="time">
        </div>
        <div class="form-group">
          <label for="location-input">Select a place:</label>
          <select id="location-input" name="location">
            <option value="Museum of Bardo">Museum of Bardo</option>
            <option value="Ribat of Monastir">Ribat of Monastir</option>
            <option value="Ribat of Sousse">Ribat of Sousse</option>
            <option value="Amphitheatre of Eljem">Amphitheatre of Eljem</option>
            <option value="Museum of Carthage">Museum of Carthage</option>
            <option value="Matmata">Matmata</option>
            <option value="Dogga">Dogga</option>
            <option value="Sibitla">Sibitla</option>
            <option value="KAIROUAN">KAIROUAN</option>
            <option value="Mosque Zaitouna">Mosque Zaitouna</option>
            <option value="Hanaya Zaghouan ">Hanaya Zaghouan </option>
            
          </select>
    
       
      
    </div><div class="ticket-form">
    <h2>Select a category of a the ticket to reserve</h2>
    <form id="ticket-form">
      <div class="ticket-option">
        <input type="radio" id="adult" name="ticket-type" value="adult">
        <label for="adult">Adult</label>
      </div>
      <div class="ticket-option">
        <input type="radio" id="child" name="ticket-type" value="child">
        <label for="child">Enfant</label>
      </div>
      <div class="ticket-option">
        <input type="radio" id="senior" name="ticket-type" value="senior">
        <label for="senior">Senior</label>
      </div>
      <button type="submit" name="submit"> 
        buy a ticket </a> </button>
    </form>
  </div>
  
  </section>

  <?php if (isset($_POST['submit'])) {
  $id = uniqid();
  $id = rand(6000, 6999);
  $date = $_POST["date"];
$id1 = uniqid();
$id1 = rand(7000, 7999);
 
  
      $req = "INSERT INTO reserver VALUES('$id', 0,'hlelomayma95@gmail.com, '$id1','$date')";
      $res = mysqli_query($conn, $req);
    
      $req1 = "INSERT INTO reservation VALUES('$id', 'Confirmed')";
      $res = mysqli_query($conn, $req1);} 
   ?>
     <style>
     body{
      background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
      url("sou.jpg");
    background-repeat: no-repeat;
    background-size: cover;
     }
     
     
     .form-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
      }
      
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border: 2px solid #ccc;
        border-radius: 10px;
        padding: 40px;
      }
      
      .form-group {
        display: flex;
        flex-direction: column;
        margin: 20px 0;
      }
      
      label {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
      }
      
      input, select {
        font-size: 18px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }
      
      button {
        font-size: 24px;
        font-weight: bold;
        background-color: #0066cc;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        margin-top: 20px;
        cursor: pointer;
      }
      
      button:hover {
        background-color: #004d99;
      }
      </style> 
      <script>const ticketForm = document.querySelector('#ticket-form');

        ticketForm.addEventListener('submit', (e) => {
          e.preventDefault();
        
          const selectedOption = document.querySelector('input[name="ticket-type"]:checked');
        
          if (selectedOption) {
            const ticketType = selectedOption.value;
            console.log(`Billet acheté pour la catégorie : ${ticketType}`);
            // Code pour procéder au paiement du billet
          } else {
            console.log('Veuillez sélectionner une catégorie de billet');
          }
        });
        </script>

      <style>
      .ticket-form {
  width: 100%;
  max-width: 500px;
  margin: auto;
  padding: 5px;
  background-color: #f5f5f5;
  border-radius: 10px;
  box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

#ticket-form {
  display: flex;
  flex-direction: column;
}

.ticket-option {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.ticket-option input[type="radio"] {
  margin-right: 10px;
}

.ticket-option label {
  font-weight: bold;
}

button[type="submit"] {
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}
.ticket-prices {
        margin: 30px 0;
      }
      
      .ticket-prices h2 {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
      }
      
      .ticket-prices table {
        border-collapse: collapse;
        width: 100%;
      }
      
      .ticket-prices th,
      .ticket-prices td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
      }
      
      .ticket-prices th {
        font-size: 20px;
        font-weight: bold;
        background-color: #eee;
      }
      
      .ticket-prices td {
        font-size: 16px;
      }
      
      .ticket-prices tbody tr:nth-child(even) {
        background-color: #8b8599;
      }
      
      .ticket-prices tbody tr:hover {
        background-color: #ccc;
      }
      </style>
</body>
</html>