<?php
 session_start() ;
   $host = "localhost";
   $user = "root";
   $pwrd = "";
   $db = "cade";

   $con = mysqli_connect($host, $user, $pwrd, $db);
   
   if(!$con){
      echo "connection unsuccessfull!";
   }
?>