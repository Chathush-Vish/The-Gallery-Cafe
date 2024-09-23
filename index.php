<?php include './includes/config.php' ?>

<?php
   if(isset($_POST['res-btn'])){
      if(isset($_SESSION['email'])){
         $name = $_POST['name'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $date = $_POST['date'];
         $time = $_POST['time'];
         $msg = $_POST['msg'];
         $count = $_POST['count'];
         
         $sql = "INSERT INTO res(name,email,count,phone,time,date,msg) VALUES ('$name', '$email', '$count', '$phone', '$time', '$date', '$msg')";
         
         $result = mysqli_query($con, $sql);

         if(!$result){            
           echo "data not added";
         }else{
            $_SESSION['name'] = $name;
            echo "<div class='notify w-100 vh-100 center'>
               <div class='msg-area center column g-2'><p>Reservation sent succesfull</p><button class='ok-btn' id='home'>Ok</button></div>
            </div><script></script>";
         }
      }
      else{
         echo "<div class='notify w-100 vh-100 center'>
         <div class='msg-area center column g-2'><p>Please Log In before book a table!</p><button class='ok-btn' id='log'>Ok</button></div>
         </div>";
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
      <link rel="stylesheet" href="./style.css" />
      <!-- Poppins font -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet"
      />
   </head>
   <body>
      
   <?php include "./includes/header.php" ?>
   <?php
      if(isset($_GET['search'])){
         include "./includes/searchResult.php" ;
      }
      ?>
      <!-- Hero -->
      <section class="hero w-100 vh-100 padding-x center column g-3">
         <h1>Find your favourite meal and <span>Book a table</span></h1>
        <?php include './includes/searchBar.php' ?>
         <p>Eg: Burger, Pizza, Taco, etc...</p>
      </section>

      <!-- About -->
      <section class="about w-100 between g-8 padding-y padding-x">
         <div class="start about-text g-3 w-50">
            <h2>We Leave A Delicious Memory For You</h2>
            <p>
               Lorem ipsum dolor sit amet consectetur, adipisicing elit.
               Molestiae nam ad perferendis corrupti illum. Officiis earum ad
               autem, expedita dignissimos eos iste vero facilis natus sapiente
               ducimus vitae odit eligendi. Lorem, ipsum dolor sit amet
               consectetur adipisicing elit. Consequuntur corporis odit natus
               nihil distinctio! Reprehenderit accusantium illo voluptas minus?
               Minus quasi aliquid illum. A iste quas quis. Voluptas, placeat
               et?
            </p>
            <p>
               corporis odit natus nihil distinctio! Reprehenderit accusantium
               illo voluptas minus? harum iure natus fugiat magnam omnis
               quibusdam eligendi exercitationem soluta quia expedita?
            </p>
            <button>Learn More</button>
         </div>
         <div class="w-50">
            <img src="./assets/about.jpg" alt="" />
         </div>
      </section>

      <!-- offer -->
      <section class="offer  padding-x padding-y w-100 between g-8">
         <div class="w-50"></div>
         <div class="w-50 flwx column g-2">
            <p>Special Offer until 25th September</p>
            <div class="line"></div>
            <h2>Buy 2 and Get 1 free</h2>
            <button>Pre Order Now</button>
         </div>
      </section>

      <!-- Foods -->
      <section class="food w-100 marging-y column g-5 padding-x">
         <div class="w-100 center">
            <h2>Our selection of foods with quality taste.</h2>
         </div>
         <div class="w-100 flex column g-3">
            <div class="w-100 flex foood wrap">
            <?php
               $sql = "SELECT * FROM foods";
               $result = mysqli_query($con, $sql);

               while($row = mysqli_fetch_assoc($result)){
                  echo ' <div class="food-box flex column g-2">
                  <img src="assets/uploads/'.$row['fImg'].'" alt="" />
                  <div class="flex column g-2 w-100">
                     <div class="between w-100">
                        <h4>'.$row['fName'].'</h4>
                        <h3>LKR '.$row['fPrice'].'</h3>
                     </div>
                    <a href="./orders/addOrder.php?fId='.$row['fId'].'"> <button>Pre Order</button></a>
                  </div>
               </div>';
               }
            ?>
            </div>
         </div>
      </section>

      <!-- Reservation -->
      <section class="res padding-x  w-100 between g-8">
         <div class="w-50 flex column g-3">
            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
            <p>
               Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a
               eleifend riqsie, namei sollicitudin urna diam, sed commodo purus
               porta ut.
            </p>
            <div class="line"></div>
            <div>
               <h5>Available Tables : 16</h5>
            </div>
         </div>
         <form action="index.php" method="POST">
            <h4>Table Reservation</h4>
            <div class="input-area w-100 flex column g-2">
               <div class="between w-100 g-3">
                  <input type="text" placeholder="Your name" name="name" required />
                  <input type="text" placeholder="Phone Number" name="phone"  required/>
               </div>
               <div class="between w-100 g-3">
                  <input type="email" placeholder="Email Address" name="email"  required/>
                  <input type="number" placeholder="Count of Members" name="count"  required/>
               </div>
               <div class="between w-100 g-3">
                  <input type="date" placeholder="Date" name="date"   required/>
                  <input type="text" placeholder="Time" name="time"  required/>
               </div>
               <textarea placeholder="Message" id="" name="msg"></textarea>
               <input
                  type="submit"
                  value="Make a reservation"
                  class="res-btn"
                  name="res-btn"
               />
            </div>
         </form>
      </section>

      <!-- Berverages -->
      <section class="food marging-y w-100 column g-5 padding-x">
         <div class="w-100 center">
            <h2>Our selection of berverage with quality taste.</h2>
         </div>
         <div class="w-100 flex column g-3">
            <div class="w-100 flex foood wrap">
            <?php
               $sql = "SELECT * FROM berverages";
               $result = mysqli_query($con, $sql);

               while($row = mysqli_fetch_assoc($result)){
                  echo ' <div class="food-box flex column g-2">
                   <img src="assets/uploads/'.$row['img'].'" alt="" />
                  <div class="flex column g-2 w-100">
                     <div class="between w-100">
                        <h4>'.$row['bName'].'</h4>
                        <h3>LKR '.$row['bPrice'].'</h3>
                     </div>
                      <a href="./orders/addOrder.php?bid='.$row['bid'].'"><button>Pre Order</button></a>
                  </div>
               </div>';
               }
            ?>
            </div>
         </div>
      </section>

     <?php include './includes/footer.php' ?>

      <!-- JavaScript -->
      <script src="./app.js"></script>
      <script src="./alert.js"></script>
   </body>
</html>
