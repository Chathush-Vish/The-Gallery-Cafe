<!-- components/SearchResults.php -->
<section class="w-100 vh-100 padding-x search-display center">
    <div class=" search-display-area center">
       <?php
          if(isset($_GET['search'])){
             $search = $_GET['search'];
             $sql = "SELECT * FROM `foods` WHERE `fName` LIKE '%$search%'";
             $result = mysqli_query($con, $sql);

             if($result){
                while($row = mysqli_fetch_assoc($result)){
                   echo ' <div class="food-box flex column g-2">
                   <img src="assets/uploads/'.$row['fImg'].'" alt="" />
                   <div class="flex column g-2 w-100">
                      <div class="between w-100">
                         <h4>'.$row['fName'].'</h4>
                         <h3>LKR '.$row['fPrice'].'</h3>
                      </div>
                     <a href="./orders/addOrder.php?fId='.$row['fId'].'" class="w-100"> <button class="order-btn">Pre Order</button></a>
                    
                   </div>
                </div>';
                }
             }
          }
          ?>
         <p class="item-cancle">x</p>
    </div>
 </section>
