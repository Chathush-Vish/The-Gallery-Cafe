<?php include '../includes/config.php' ?>

<?php
  
      if(isset($_POST['res-btn'])){
         $name = $_POST['name'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $date = $_POST['date'];
         $time = $_POST['time'];
         $msg = $_POST['msg'];
         $count = $_POST['count'];
         
         $sql = "INSERT INTO res(name,email,count,phone,time,date,msg) VALUES ('$name', '$email', '$count', '$phone', '$time', '$date', '$msg')";
         
         $result = mysqli_query($con, $sql);
         
         if(!$result){            
            echo "data not added";
         }
         else{
            header('location: ../admin.php');
         }
      }    
   
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>The Gallery Cafe</title>
      <!-- Stylesheet -->
      <link rel="stylesheet" href="../style.css" />
      <!-- Poppins font -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet"
      />
   </head>
   <body>
   <section class="res padding-x  w-100 center g-8">
         <form  method="POST">
            <h4>Table Reservation</h4>
            <div class="input-area w-100 flex column g-2">
               <div class="between w-100 g-3">
                  <input type="text" placeholder="Your name" name="name"/>
                  <input type="text" placeholder="Phone Number" name="phone"/>
               </div>
               <div class="between w-100 g-3">
                  <input type="email" placeholder="Email Address" name="email"/>
                  <input type="number" placeholder="Count of Members" name="count"/>
               </div>
               <div class="between w-100 g-3">
                  <input type="date" placeholder="Date" name="date" />
                  <input type="text" placeholder="Time" name="time"/>
               </div>
               <textarea placeholder="Message" id="" name="msg"></textarea>
               <input
                  type="submit"
                  value="Make a reservation"
                  class="res-btn"
                  name="res-btn"
               />
            </div>
         </form>
      </section>
   </body>
</html>
