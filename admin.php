<?php include './includes/config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Gallery Cafe - Admin Page</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body>
    <aside class="db-aside">
        <div class="dashboard-nav-container flex column w-100">
            <a href="./index.php" class="center logo n-link">
                <h3><span>The</span> Gallery Cafe</h3>
            </a>
           
            <p class="active tab-link tab-1">Reservations</p>
            <?php 
               if($_SESSION['email'] == 'admin@gmail.com'){
                  echo '<p class="tab-link tab-2">Users Details</p>';
               }
            ?>
            
            <p class="tab-link tab-3">Orders</p>

            <?php 
               if($_SESSION['email'] == 'admin@gmail.com'){
                  echo ' <p class="tab-link tab-4">Foods</p>';
               }
            ?>
           
        </div>
        <div class="dashboard-btn">
        <a href="./index.php" class="w-100" ><button class="visit-btn" style="color:#222;">View Website</button></a>
        </div>
    </aside>
    <main class="db-det">
      <!-- reservations -->
      <section class="sec-1 active sec w-100 column g-3">
            
            <div class="y-tour-container w-100">
            <table class="admin-res-table">
               <button id="add-res-manualy"><a href="./reservation/resForm.php">Add Reservation Manualy</a></button>
               <th>
                  <tr style="background-color:#222; color:#fff;">
                     <td>Name</td>
                     <td>Email</td>
                     <td>Count</td>
                     <td>Phone</td>
                     <td>Date</td>
                     <td>Time</td>
                     <td>Status</td>
                     <td>Message</td>
                  </tr>
               </th>
               <tbody>
                  <!-- Data Showing -->
                  <?php
                     $sql = "SELECT * FROM `res`";
                     $result = mysqli_query($con, $sql);

                     if($result){
                        while($row = mysqli_fetch_assoc($result)){
                           $resid = $row['resid'];
                           $name = $row['name'];
                           $phone = $row['phone'];
                           $email = $row['email'];
                           $date = $row['date'];
                           $count = $row['count'];
                           $time = $row['time'];
                           $message = $row['msg'];
                           $status = $row['status'];

                           echo '<tr style="background-color:#fff;">
                           <td>'.$name.'</td>
                           <td>'.$email.'</td>
                           <td>'.$count.'</td>
                           <td>'.$phone.'</td>
                           <td>'.$date.'</td>
                           <td>'.$time.'</td>
                           <td><p class="reqType">'.$status.'</p></td>
                           <td class="action">
                           <span>
                              <div class="res-type res-reject"><a href="./reservation/deleteRes.php?resid='.$resid.'">Delete</a></div>
                              <div class="res-type res-update"><a href="./reservation/updateRes.php?resid='.$resid.'">Update</a></div>
                           </span>
                           </td>
                           </tr>';
                        }
                     }

                  ?>
               </tbody>
               <!-- End of data showing -->
            </table>
            </div>
      </section>
      <!-- user -->
      <section class="sec-2 sec w-100 vh-100 column g-3">
            <div class="y-tour-container w-100">
            <table class="admin-res-table">
               <button id="add-res-manualy"><a href="./user/userForm.php">Add User</a></button>
               <th>
                  <tr style="background-color:#222; color:#fff;">
                     <td>User Id</td>
                     <td>Name</td>
                     <td>Email</td>
                     <td>Actions</td>
                  </tr>
               </th>
               <tbody>
                  <!-- Data Showing -->
                  <?php
                     $sql = "SELECT * FROM `user`";
                     $result = mysqli_query($con, $sql);

                     if($result){
                        while($row = mysqli_fetch_assoc($result)){
                           $uid = $row['uid'];
                           $name = $row['fullName'];
                           $email = $row['email'];

                           echo '<tr style="background-color:#fff;">
                           <td>'.$uid.'</td>
                           <td>'.$name.'</td>
                           <td>'.$email.'</td>
                           <td class="action">
                           <span>
                              <div class="res-type res-reject"><a href="./user/deleteUser.php?uid='.$uid.'">Delete</a></div>
                              <div class="res-type res-update"><a href="./user/updateUser.php?uid='.$uid.'">Update</a></div>
                           </span>
                           </td>
                           </tr>';
                        }
                     }

                  ?>
               </tbody>
               <!-- End of data showing -->
            </table>
            </div>
      </section>
      <!-- orders -->
      <section class="sec-3 sec w-100 vh-100 column g-3">
         <div class="y-tour-container w-100">
            <table class="admin-res-table">
               <th>
                  <tr style="background-color:#222; color:#fff;">
                     <td>User Name</td>
                     <td>Food Name</td>
                     <td>Food Price</td>
                     <td>Status</td>
                     <td>Actions</td>
                  </tr>
               </th>
               <tbody>
                  <!-- Data Showing -->
                  <?php
                     $sql = "SELECT * FROM `foodorders`";
                     $result = mysqli_query($con, $sql);

                     if($result){
                        while($row = mysqli_fetch_assoc($result)){
                           $fid = $row['fid'];
                           $fName = $row['fName'];
                           $fPrice = $row['fPrice'];
                           $status = $row['status'];
                           $userName = $row['userName'];

                           echo '<tr style="background-color:#fff;">
                           <td>'.$userName.'</td>
                           <td>'.$fName.'</td>
                           <td>'.$fPrice.'</td>
                           <td><p class="reqType">'.$status.'</p></td>
                           <td class="action">
                           <span>
                              <div class="res-type res-reject"><a href="./orders/deleteOrder.php?fid='.$fid.'">Cancle</a></div>
                              <div class="res-type res-update"><a href="./orders/updateOrder.php?fid='.$fid.'">Approve</a></div>
                           </span>
                           </td>
                           </tr>';
                        }
                     }

                  ?>
               </tbody>
               <!-- End of data showing -->
            </table>
            </div>
      </section>
      <!-- foods & Berverages -->
      <section class="sec-4 sec w-100 vh-100 column g-3">
         <!-- foods -->
         <div class="y-tour-container w-100">
            <button id="add-res-manualy"><a href="./food/addFood.php">Add Food</a></button>
            <table class="admin-res-table">
               <th>
                  <tr style="background-color:#222; color:#fff;">
                     <td>Food Name</td>
                     <td>Food Price</td>
                     <td>Food img</td>
                     <td>Actions</td>
                  </tr>
               </th>
               <tbody>
                  <!-- Data Showing -->
                  <?php
                     $sql = "SELECT * FROM `foods`";
                     $result = mysqli_query($con, $sql);

                     if($result){
                        while($row = mysqli_fetch_assoc($result)){
                           $fId = $row['fId'];
                           $fName = $row['fName'];
                           $fPrice = $row['fPrice'];
                           $fImg = $row['fImg'];
                          

                           echo '<tr style="background-color:#fff;">
                           <td>'.$fName.'</td>
                           <td>'.$fPrice.'</td>
                           <td>'.$fImg.'</td>
                          
                           <td class="action">
                           <span>
                              <div class="res-type res-reject"><a href="./food/deleteFood.php?fId='.$fId.'">Delete</a></div>
                              <div class="res-type res-update"><a href="./food/updateFood.php?fId='.$fId.'">Update</a></div>
                           </span>
                           </td>
                           </tr>';
                        }
                     }

                  ?>
               </tbody>
               <!-- End of data showing -->
            </table>
         </div>
         <!-- Berverages -->
         <div class="y-tour-container w-100">
            <button id="add-res-manualy"><a href="./berverage/addberve.php">Add Berverages</a></button>
            <table class="admin-res-table">
               <th>
                  <tr style="background-color:#222; color:#fff;">
                     <td>Berverage Name</td>
                     <td>Berverage Price</td>
                     <td>Berverage img</td>
                     <td>Actions</td>
                  </tr>
               </th>
               <tbody>
                  <!-- Data Showing -->
                  <?php
                     $sql = "SELECT * FROM `berverages`";
                     $result = mysqli_query($con, $sql);

                     if($result){
                        while($row = mysqli_fetch_assoc($result)){
                           $bid = $row['bid'];
                           $bName = $row['bName'];
                           $bPrice = $row['bPrice'];
                           $bImg = $row['img'];
                          

                           echo '<tr style="background-color:#fff;">
                           <td>'.$bName.'</td>
                           <td>'.$bPrice.'</td>
                           <td>'.$bImg.'</td>
                          
                           <td class="action">
                           <span>
                              <div class="res-type res-reject"><a href="./berverage/deleteBerve.php?bid='.$bid.'">Delete</a></div>
                              <div class="res-type res-update"><a href="./berverage/updateBerve.php?bid='.$bid.'">Update</a></div>
                           </span>
                           </td>
                           </tr>';
                        }
                     }

                  ?>
               </tbody>
               <!-- End of data showing -->
            </table>
         </div>
      </section>
    </main>

    <!-- JavaScript -->
    <script src="./script.js"></script>
</body>
</html>
