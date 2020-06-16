<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <!--column toirir jnne obosshoi dite hbe-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!--Ay 3ta script pic slider (carousel) er kaj krse-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<?php require_once 'process.php';?>

<div class="container">
<?php
   $mysqli = new mysqli('localhost','root','','gjsa') or die(mysqli_error($mysqli));
   $result = $mysqli -> query("SELECT * FROM booklist") or die($mysqli->error);
?>

<div class = "row justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>Book Name</th>
                <th>Writer</th>
                <th colspan="2">Action</th>
            </tr>    
        </thead>
<?php
    while($row = $result->fetch_assoc()):
?>

            <tr>
                <td><?php echo $row['bookname']; ?></td>
                <td><?php echo $row['writer']; ?></td>
                <td>
                    <a href="booklist.php?edit=<?php echo $row['id']; ?>"
                    class="btn btn-info">Edit</a>
                    <a href="booklist.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger">Delete</a>
                    
                </td>
            </tr>  

<?php endwhile; ?>

</table>   
</div>  


<div class="row justify-content-center">
    <form action="booklist.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
        <label>Book Name</label>
        <input type="text" name="bookname" class="form-control" value="<?php echo $bookname; ?>" placeholder="Enter Book Name" autocomplete="off">
        </div>    
        <div class="form-group">
        <label>Writer Name</label>
        <input type="text" name="writer" class="form-control" value="<?php echo $writer; ?>" placeholder="Enter Writer Name" autocomplete="off">
        </div>
        <div class="form-group">
        <?php 
        if ($update == true):
        ?>
        <button type="submit" class="btn btn-info" name="update">Update</button>
        <?php else: ?>
        <button type="submit" class="btn btn-primary" name="save">Save</button>
        <?php endif; ?>
        </div>
    </form>
</div>      
</div> 



</body>
</html>