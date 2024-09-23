<?php include './includes/config.php' ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>The Gallery Cafe</title>
      <!-- Stylesheet -->
      <link rel="stylesheet" href="./service.css" />
      <link rel="stylesheet" href="./style.css">
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

      <!-- hero -->
      <section class="ser-hero w-100 vh-50 center">
         <p>Our services</p>
      </section>

      <!-- Parking -->
      <section class="park padding-x padding-y between w-100 g-8">
         <div class="flex g-3 column w-50">
            <h2>You can Park you vehical outside of our resturent.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis atque commodi expedita distinctio voluptatem! Laudantium, qui? Possimus non quae totam quidem. Molestias, nobis? Blanditiis expedita numquam, distinctio fugit neque accusantium.</p>
            <div class="line"></div>
            <div class="w-100 flex g-5">
               <p>+94 710225988</p>
               <p>+94 714765487</p>
            </div>
         </div>
         <div class="w-50">
            <img src="./assets/park.jpg" alt="">
         </div>
      </section>


      <?php include './includes/footer.php' ?>

    <!-- JavaScript -->
    <script src="./app.js"></script>
   </body>
</html>