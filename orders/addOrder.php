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
<?php

   include '../includes/config.php';

   if(isset($_GET['fId'])){
      $fId = $_GET['fId'];
      if(isset($_SESSION['name'])){
         $session_name = $_SESSION['name'];
         $sql = "SELECT * FROM `foods` WHERE `fId` = '$fId'";
         $result = mysqli_query($con, $sql);
         
         if($result){
            while( $row = mysqli_fetch_assoc($result)){
               $fname = $row['fName'];
               $fPrice = $row['fPrice'];
               
               $sql2 = "INSERT INTO `foodOrders`(`fName`, `fPrice`,`userName`) VALUES ('$fname','$fPrice','$session_name')";
               $result2 = mysqli_query($con, $sql2);
               
               if($result){
                  echo "<div class='notify w-100 vh-100 center'>
                  <div class='msg-area center column g-2'><p>Food Order Successfull</p><button class='ok-btn' id='home'>Ok</button></div>
                  </div>";
               }
            }  
         }
      }
      else{
         echo "<div class='notify w-100 vh-100 center'>
                  <div class='msg-area center column g-2'><p>Please book a table before place order!</p><button class='ok-btn' id='home'>Ok</button></div>
                  </div>";
      }
   }
   

   if(isset($_GET['bid'])){

      $bid = $_GET['bid'];

      if(isset($_SESSION['name'])){
         $session_name = $_SESSION['name'];
         $sql = "SELECT * FROM `berverages` WHERE `bid` = '$bid'";
         $result = mysqli_query($con, $sql);
         
         if($result){
            while( $row = mysqli_fetch_assoc($result)){
               $bname = $row['bName'];
               $bPrice = $row['bPrice'];
               
               $sql2 = "INSERT INTO `foodOrders`(`fName`, `fPrice`,`userName`) VALUES ('$bname','$bPrice','$session_name')";
               $result2 = mysqli_query($con, $sql2);
               
               if($result){
                  echo "<div class='notify w-100 vh-100 center'>
                  <div class='msg-area center column g-2'><p>Berverage Order Successfull</p><button class='ok-btn'>Ok</button></div>
                  </div>";
               }
            }
         }
      }
      else{
         echo "<div class='notify w-100 vh-100 center'>
                  <div class='msg-area center column g-2'><p>Please book a table before place order!</p><button class='ok-btn'>Ok</button></div>
                  </div>";
      }
   }
?>

     <!-- JavaScript -->
      <script src="../alert.js"></script>
   </body>
</html>