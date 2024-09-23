<?php include '../includes/config.php'; ?>

<?php
   if(isset($_GET['fid'])){
      $fid = $_GET['fid'];
   }

   $query = "DELETE FROM `foodOrders` WHERE `fid` = '$fid'";
   $result = mysqli_query($con, $query);

   if(!$result){
      echo "Faild";
   }
   else{
      header('location:../admin.php');
   }

?>