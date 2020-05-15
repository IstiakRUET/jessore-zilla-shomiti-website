<?php

 if (isset($_POST['Sign in'])){
  include_once 'dbh.includes.php';
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['pwd']);
   
    if($email!="" && $pass!=""){
      $sql = "SELECT * FROM applicants where email='$email' and pass='$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      if($conn==1){
        header("Location: ../contact.php?login=success");
   exit();
      }
    }
     
   
 } 
?>