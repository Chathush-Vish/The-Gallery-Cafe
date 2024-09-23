<?php include '../includes/config.php' ?>


<?php
   if(isset($_POST['login-btn'])){
      $fullName = $_POST['fullName'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];

      if($password == $cpassword){
         $sql = "INSERT INTO `user`(`fullName`, `email`, `password`) VALUES('$fullName', '$email', '$password') ";

         $result = mysqli_query($con,$sql);

         if($result){
            header('location: ../admin.php');
         }
         else{
            echo "data not added";
         }
      }
      else{
         echo "password dosen't macth";
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
      <link rel="stylesheet" href="../login.css" />
      <!-- Poppins font -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet"
      />
   </head>
   <body>
     
      <div class="login w-100 vh-100 center">
         <form  method="POST" class="center column g-2">
            <div class="center column">
               <p>ADD USER</p>
            </div>
            <div class="w-100">
               <input type="text" placeholder="Full Name" name="fullName"/>
            </div>
            <div class="w-100">
               <input type="email" placeholder="Your email" name="email"/>
            </div>
            <div class="w-100">
               <input type="password" placeholder="Password" name="password"/>
            </div>
            <div class="w-100">
               <input type="password" placeholder="Confirm Password" name="cpassword" />
            </div>
            <div class="w-100">
               <input type="submit" value="Create Account" class="login-btn" name="login-btn" />
            </div>
         </form>
      </div>
   </body>
</html>
