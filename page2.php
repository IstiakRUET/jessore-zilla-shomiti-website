<?php
require_once('inc/dbh.includes.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Page 2</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container"> <br>
    <h1 class="text-success text-center">Book List</h1>
   <br>
    <div class="col-lg-8 m-auto d-block">

        <form class="bg-light" action="" method="POST">
        
        <div class="form-group">
			<label for="sel1">Name (select one):</label>
            <select class="form-control">
            <?php
                   
            $query = "SELECT * FROM categories ORDER BY id DESC";
            $run = mysqli_query($conn,$query);
            if(mysqli_num_rows($run) > 0){
                
                while($row = mysqli_fetch_array($run)){
                    $category = ucfirst($row['category']);
                    echo "<option><a href='#'>$category</a></option>";
                   
                }
            }
            else{
                    echo "<option>No Categories Yet</option>";
            }

            ?>

      </select>
</form>

</body>

</html>