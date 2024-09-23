<?php include './includes/config.php' ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>The Gallery Cafe</title>
      <!-- Stylesheet -->
      <link rel="stylesheet" href="./about.css" />
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
      <section class="abt-hero w-100 vh-50 center">
         <p>About Us</p>
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

   <?php include './includes/footer.php' ?>
    <!-- JavaScript -->
    <script src="./app.js"></script>
   </body>
</html>