<?php include '../includes/config.php';?>

<?php
   if(isset($_GET['fid'])){
      $fid = $_GET['fid'];

      $query = "SELECT `status` FROM `foodorders` WHERE `fid` = '$fid'";
      $result = mysqli_query($con,$query);

      if($result){
         while( $row = mysqli_fetch_assoc($result)){
            $status =  "Approved";
            $sql = "UPDATE `foodOrders` SET `status` = '$status' WHERE `fid` = '$fid'";

            $result1 = mysqli_query($con, $sql);

            if($result1){
               header('location: ../admin.php');
            }
         }
        
      }
      else{
         echo '404 ERROR';
      }
   }
?>
