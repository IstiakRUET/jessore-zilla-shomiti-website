<?php

if(isset($_POST['submit']))
{
    include_once 'dbh.includes.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dpname = mysqli_real_escape_string($conn,$_POST['dpname']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);
    $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);

    $sql = "INSERT INTO `applicants` (`id`, `name`, `dept_name`, `pass`, `con_pass`, `mob_num`, `email`) VALUES (null, '$name', '$dpname', '$pass', '$cpass', '$mobile', '$email');";
    $run = mysqli_query($conn, $sql);
    if ($run){

    header("Location: ../login.php?signup=success");
    exit();}

    else { echo" something went wrong";}
    
   
}

else{
    header("Location: ../form.php?signup=error");
    exit();
}