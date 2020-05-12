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

    $sql = "INSERT INTO applications (name, dept_name, pass, con_pass, mob_num, email) VALUES ('$name','$dpname','$pass','$cpass','$mobile','$email');";
    header("Location: ../form.php?signup=success");
    exit();
}

else{
    header("Location: ../form.php");
    exit();
}