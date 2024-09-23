<?php include './includes/config.php' ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>The Gallery Cafe</title>
      <!-- Stylesheet -->
      <link rel="stylesheet" href="./contact.css" />
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
   <section class="con-hero w-100 vh-50 center">
      <p>Contact Us</p>
   </section>

   <!-- details -->
    <section class="con-det w-100 padding-x padding-y between g-8">
      <div class="w-50">
         <img src="./assets/contact-pos.jpg" class="w-100" alt="">
      </div>
      <div class="w-50 flex column g-3">
         <h2>24/7 Online Customer Servise</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi id ad tenetur? Reprehenderit, doloribus doloremque, sit maiores aliquam pariatur corporis voluptates exercitationem quisquam optio necessitatibus libero labore! Error, quis possimus?</p>
         <div>
         <strong>Phone Number:</strong>
         <p>+94 713424432</p>
         <p>+94 704356435</p>
      </div>
      <div>
         <strong>Email Address:</strong>
         <p>theGalleryCafe@gmail.com</p>
      </div>
      <div>
         <strong>Address:</strong>
         <p>Main street, Vihara mawatha, Colombo 07</p>
      </div>
      </div>
     
    </section>
      
   <?php include './includes/footer.php' ?>
    <!-- JavaScript -->
    <script src="./app.js"></script>
   </body>
</html>