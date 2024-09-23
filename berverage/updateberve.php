<?php include '../includes/config.php';?>

<?php
   if(isset($_GET['bid'])){
      $bid = $_GET['bid'];

      $query = "SELECT * FROM `berverages` WHERE `bid` = '$bid'";
      $result = mysqli_query($con,$query);

      if($result){
         $row = mysqli_fetch_assoc($result);
      }
      else{
         echo '404 ERROR';
      }
   }
?>
<?php
   if(isset($_POST['addFood-btn'])){
      $berveName = $_POST['berveName'];
      $bervePrice = $_POST['bervePrice'];
      $berveImg = $_FILES['berveImg']['name'];
      $tempname = $_FILES['berveImg']['tmp_name'];
      $folder = '../assets/uploads/'.$berveImg;

      $query = "UPDATE `berverages` SET 
                           `bName` = '$berveName',
                           `bPrice` = '$bervePrice',
                           `img` = '$berveImg'
                           WHERE `bid` = '$bid'
                        ";

      $result1 = mysqli_query($con, $query);

      if(!$result1){
         echo "update error";
      }
      else{
         echo "update success";
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
               <p>UPDATE BERVERAGE</p>
            </div>
            <div class="w-100">
               <input type="text" placeholder="Food Name" name="berveName" value="<?php echo $row['bName'] ?>"/>
            </div>
            <div class="w-100">
               <input type="text" placeholder="Food Price" name="bervePrice" value="<?php echo $row['bPrice'] ?>"/>
            </div>
            <div class="w-100">
               <input type="file" placeholder="Add Image" name="berveImg" value="<?php echo $row['img'] ?>" style="border:none;"/>
            </div>
            <div class="w-100">
               <input type="submit" value="Update" class="login-btn" name="addFood-btn" />
            </div>
         </form>
      </div>
   </body>
</html>

