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
      <section class=" menu-hero w-100 vh-50 center">
         <p>Menu</p>
      </section>

      <!-- menu -->
      <section class="menu padding-x padding-y  w-100 center column g-5">
         <h2>food menu</h2>
         <div class="w-100 g-8 center">
            <div class="food w-50 center g-8">
               <div class="f-names flex column g-1">
                  <strong>Food types</strong><br>
                  <p>Chicken Burger</p>
                  <p>Susages pizza</p>
                  <p>Tacos</p>
                  <p>Ice Creams</p>
                  <p>Cakes</p>
               </div>
               <div class="f-price flex column g-1">
                  <strong>Price</strong><br>
                  <p>LKR 740</p>
                  <p>LKR 2999</p>
                  <p>LKR 520</p>
                  <p>LKR 400</p>
                  <p>LKR 1050</p>
               </div>
            </div>
            <div class="line"></div>
            <div class="food berve w-50 center g-8">
               <div class="f-names flex column g-1">
                  <strong>Berverages types</strong><br>
                  <p>Cool Drinks</p>
                  <p>Hot Tea</p>
                  <p>Green Tea</p>
                  <p>Hot Coffe</p>
                  <p>Ice Coffe</p>
               </div>
               <div class="f-price flex column g-1">
                  <strong>Price</strong><br>
                  <p>LKR 320</p>
                  <p>LKR 250</p>
                  <p>LKR 520</p>
                  <p>LKR 400</p>
                  <p>LKR 400</p>
               </div>
            </div>
         </div>
      </section>

   

      <?php include './includes/footer.php' ?>

    <!-- JavaScript -->
    <script src="./app.js"></script>
   </body>
</html>