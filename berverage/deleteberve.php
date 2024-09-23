<?php include '../includes/config.php'; ?>

<?php
   if(isset($_GET['bid'])){
      $bid = $_GET['bid'];
   }

   $query = "DELETE FROM `berverages` WHERE `bid` = '$bid'";
   $result = mysqli_query($con, $query);

   if(!$result){
      echo "Faild";
   }
   else{
      header('location:../admin.php');
   }

?>