<?php include '../includes/config.php'; ?>

<?php
   if(isset($_GET['uid'])){
      $uid = $_GET['uid'];
   }

   $query = "DELETE FROM `user` WHERE `uid` = '$uid'";
   $result = mysqli_query($con, $query);

   if(!$result){
      echo "Faild";
   }
   else{
      header('location:../admin.php');
   }

?>