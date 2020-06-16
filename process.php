<?php

$mysqli = new mysqli('localhost','root','','gjsa') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$bookname = '';
$writer = '';

if(isset($_POST['save'])){

    $bookname = $_POST['bookname'];
    $writer =  $_POST['writer'];

    $mysqli -> query("INSERT INTO `booklist` (`bookname`, `writer`) VALUES ('$bookname', '$writer')") or
    die($mysqli->error);
   }
    

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE from booklist where id=$id") or die($mysqli->error());
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * from booklist where id=$id") or die($mysqli->error());
    if (count(array($result))==1){
        $row = $result->fetch_array();
        $bookname = $row['bookname'];
        $writer = $row['writer'];
    }
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $bookname = $_POST['bookname'];
    $writer = $_POST['writer'];

    $mysqli->query("UPDATE booklist SET bookname='$bookname', writer='$writer' WHERE id=$id") or
    die($mysqli->error());
}
?>

