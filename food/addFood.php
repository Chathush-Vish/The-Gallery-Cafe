<?php include '../includes/config.php' ?>


<?php
   if(isset($_POST['addFood-btn'])){
      $foodName = $_POST['foodName'];
      $foodPrice = $_POST['foodPrice'];
      $foodImg = $_FILES['foodImg']['name'];
      $tempname = $_FILES['foodImg']['tmp_name'];
      $folder = '../assets/uploads/'.$foodImg;

      $sql = "INSERT INTO `foods`(`fName`, `fPrice`, `fImg`) VALUES('$foodName', '$foodPrice', '$foodImg') ";

      $result = mysqli_query($con,$sql);

      if(move_uploaded_file($tempname, $folder)){
         echo "File uploaded";
         if($result){
            header('location: ../admin.php');
         }
         else{
            echo "data not added";
         }
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
         <form  method="POST" enctype="multipart/form-data" class="center column g-2">
            <div class="center column">
               <p>ADD FOOD</p>
            </div>
            <div class="w-100">
               <input type="text" placeholder="Food Name" name="foodName"/>
            </div>
            <div class="w-100">
               <input type="text" placeholder="Food Price" name="foodPrice"/>
            </div>
            <div class="w-100">
               <input type="file" placeholder="Add Image" name="foodImg" style="border:none;"/>
            </div>
            <div class="w-100">
               <input type="submit" value="Add" class="login-btn" name="addFood-btn" />
            </div>
         </form>
      </div>
   </body>
</html>
