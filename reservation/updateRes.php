<?php include '../includes/config.php';?>

<!-- display values in form -->
<?php
   if(isset($_GET['resid'])){
      $resid = $_GET['resid'];

      $query = "SELECT * FROM `res` WHERE `resid` = '$resid'";
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
   if(isset($_POST['res-btn'])){
      // $resid = $_POST['resid'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $date = $_POST['date'];
      $count = $_POST['count'];
      $time = $_POST['time'];
      $message = $_POST['msg'];
      $status = $_POST['status'];

      $query = "UPDATE `res` SET 
                           `name` = '$name',
                           `email` = '$email',
                           `date` = '$date',
                           `msg` = '$message',
                           `time` = '$time',
                           `count` = '$count',
                           `status` = '$status',
                           `phone` = '$phone'
                           WHERE `resid` = '$resid'
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
    <link rel="stylesheet" href="../style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>
   <body>
       <!-- Reservation -->
       <section class="res padding-x  w-100 center g-8">
         <form  method="POST">
            <h4>Update Table Reservation</h4>
            <div class="input-area w-100 flex column g-2">
               <div class="between w-100 g-3">
                  <input type="text" placeholder="Your name" name="name" value="<?php echo $row['name'] ?>"/>
                  <input type="text" placeholder="Phone Number" name="phone" value="<?php echo $row['phone'] ?>"/>
               </div>
               <div class="between w-100 g-3">
                  <input type="email" placeholder="Email Address" name="email" value="<?php echo $row['email'] ?>"/>
                  <input type="number" placeholder="Count of Members" name="count" value="<?php echo $row['count'] ?>"/>
               </div>
               <div class="between w-100 g-3">
                  <input type="date" placeholder="Date" name="date" value="<?php echo $row['date'] ?>"/>
                  <input type="text" placeholder="Time" name="time" value="<?php echo $row['time'] ?>"/>
               </div>
               <select name="status" id="">
                  <option value="pending">pending</option>
                  <option value="Approved">Approved</option>
               </select>
               <textarea placeholder="Message" id="" name="msg"><?php echo $row['msg'] ?></textarea>
               <input
                  type="submit"
                  value="Update Reservation"
                  class="res-btn"
                  name="res-btn"
               />
            </div>
         </form>
      </section>
   </body>
</html>
