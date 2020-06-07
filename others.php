<?php require_once('inc/dbh.includes.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Others</title>
<style>
  table {
    font-family: arial;
    border-collapse: collapse;
    width: 100%;
}
td{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

</style>
</head>

<body>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><h2>#</h2></th>
      <th scope="col"><h2>Book Name</h2></th>
      <th scope="col"><h2>Writer</h2></th>
    </tr>
  </thead>

  <tbody>

  <?php
          $query = "SELECT * from others where status='publish'";
          $run = mysqli_query($conn,$query);

          if(mysqli_num_rows($run) > 0){
            while($row = mysqli_fetch_array($run)){
              $id = $row['id'];
              $bookname = $row['bookname'];
              $writer = $row['writer'];
              $status = $row['status'];
              ?>

    <tr>
      <th scope="row"><?php echo $id; ?></th>
      <td><?php echo $bookname; ?></td>
      <td><?php echo $writer; ?></td>
    </tr>
    <?php
                }
              }
                        
              else{
                echo "<center><h2>NO POST YET</h2></center>";
              }
            ?> 
  </tbody>
</table>


</body>
</html>