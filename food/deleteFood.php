<?php include '../includes/config.php'; ?>

<?php
   if(isset($_GET['fId'])){
      $fId = $_GET['fId'];
   }

   $query = "DELETE FROM `foods` WHERE `fId` = '$fId'";
   $result = mysqli_query($con, $query);

   if(!$result){
      echo "Faild";
   }
   else{
      header('location:../admin.php');
   }

?>