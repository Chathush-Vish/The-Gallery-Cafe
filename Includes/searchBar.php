<form action="" method="GET">
            <div class="search flex"> 
               <input type="search" id="search" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" placeholder="Search Here" />
               <button type="submit">Search</button>
            </div>
</form>