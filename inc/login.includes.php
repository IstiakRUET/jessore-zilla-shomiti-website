<?php
session_start();

 if (isset($_POST['login'])){
  include_once 'dbh.includes.php';

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['pwd']);

     $sql = "SELECT * FROM applicants WHERE email='$email'";
     $result = mysqli_query($conn, $sql);
     
       if ($row = mysqli_fetch_assoc($result)) {
     
         if ($password==$row['pass']) {
           $_SESSION['u_id'] = $row['id'];
           $_SESSION['u_name'] = $row['name'];
           $_SESSION['u_deptname'] = $row['dept_name'];
           $_SESSION['u_conpass'] = $row['con_pass'];
           $_SESSION['u_mobnum'] = $row['mob_num'];
           $_SESSION['u_email'] = $row['email'];
           
           header("Location: ../page1.php?signup=success");
           exit();
         
         }
         else {
           header("Location: ../Index.html?login=eror");
           exit();
         }
       }
     
   
 } else {
   header("Location: ../login.php?login=error");
   exit();
 }
?>