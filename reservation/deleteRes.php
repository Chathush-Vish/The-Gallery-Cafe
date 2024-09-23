<?php include '../includes/config.php'; ?>

<?php
   if(isset($_GET['resid'])){
      $resid = $_GET['resid'];
   }

   $query = "DELETE FROM `res` WHERE `resid` = '$resid'";
   $result = mysqli_query($con, $query);

   if(!$result){
      echo "Faild";
   }
   else{
      header('location:../admin.php');
   }

?>