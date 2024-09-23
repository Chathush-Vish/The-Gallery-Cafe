
<!-- Navbar -->
<header>
         <nav class="navbar">
            <a href="./index.php" class="center logo n-link">
               <h3><span>The</span> Gallery Cafe</h3>
            </a>
            <ul class="nav-links">
               <li class="nav-link">
                  <a href="./Menu.php" class="n-link">Menu</a>
               </li>
               <li class="nav-link">
                  <a href="./service.php" class="n-link">Our Services</a>
               </li>
               <li class="nav-link">
                  <a href="./about.php" class="n-link">About Us</a>
               </li>
               <li class="nav-link">
                  <a href="./contact.php" class="n-link">Contact Us</a>
               </li>
                <?php
               if(isset($_SESSION['email'])){
                  $sEmail = null;
                  $session_email = $_SESSION['email'];
                  $query = "SELECT `sEmail`FROM `staff` WHERE `sEmail` = '$session_email'";
                  $result = mysqli_query($con, $query);

                  if($result){
                     while($row1 = mysqli_fetch_assoc($result)){
                         $sEmail = $row1['sEmail'];
                     }
                 }
              

                  if($_SESSION['email'] == 'admin@gmail.com'  ){
                    echo ' <li class="nav-link">
                     <a href="./admin.php" class="n-link">Admin Dashboard</a>
                  </li>';
                  }
                  else if($_SESSION['email'] == $sEmail){
                     echo ' <li class="nav-link">
                     <a href="./admin.php" class="n-link">Admin Dashboard</a>
                  </li>';
                  }
               }
               ?> 
              

               <li class="nav-link">
                  <?php 
                     
                     if(!isset($_SESSION['email'])){
                        echo '<a href="./login.php" class="n-link log-btn">Log In</a>';
                     }
                     else{
                        echo '<a href="./logout.php" class="n-link log-btn">Log Out</a>';
                     }
                  ?>
                  
               </li>
            </ul>
         </nav>
      </header>