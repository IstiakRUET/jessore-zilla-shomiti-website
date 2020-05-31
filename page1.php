<?php require_once('inc/dbh.includes.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page One</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/page1.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <!--column toirir jnne obosshoi dite hbe-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!--Ay 3ta script pic slider (carousel) er kaj krse-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
body {
    background-color: #92a8d1;
 }

    #img{
      height: 400px;
      width: 100%;
    }
  
  
  </style>
</head>

<body>
<?php
$slider_query = "SELECT * from slider where status = 'publish' ORDER BY id DESC LIMIT 5";
$slider_run = mysqli_query($conn,$slider_query);
if(mysqli_num_rows($slider_run) > 0){
    $count = mysqli_num_rows($slider_run);
}
?>

<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <?php
   for($i = 0; $i<$count; $i++){
     if($i == 0){
       echo"<li data-target='#demo' data-slide-to='".$i."' class='active'></li>";
     }
     else{
      echo"<li data-target='#demo' data-slide-to='".$i."'></li>";
     }
   }
   ?>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
<?php
 $check = 0;
   while($slider_row = mysqli_fetch_array($slider_run)){
     $slider_id = $slider_row['id'];
     $slider_image = $slider_row['image'];
     $slider_status = $slider_row['status'];
     $check = $check +1;
     if($check == 1){
         echo" <div class='carousel-item active'>";
       } 
     else{
        echo" <div class='carousel-item'>";
       }
   
?>
 
    <img id="img" src="<?php echo $slider_image; ?>">
  </div>
      <?php } ?>
</div> 


<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>

  <br>

  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-md-4" style="padding: 40px">
      <div class="col-lg-3 col-sm-6 col-xs-12"> 
        <div class="card" style="width: 18rem;">
          <img src="image/about.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">About</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go Details</a>
          </div>
        </div>
        </div>
      </div>
    


      <div class="col-md-4" style="padding: 40px">
        <div class="col-lg-3 col-sm-6 col-xs-12"> 
          <div class="card" style="width: 18rem;">
            <img src="image/library.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Library</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="page2.php" class="btn btn-primary">Go Details</a>
            </div>
          </div>
          </div>
      </div>
        

          
      <div class="col-md-4" style="padding: 40px">
          <div class="col-lg-3 col-sm-6 col-xs-12"> 
            <div class="card" style="width: 18rem;">
              <img src="image/gallary.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gallary</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go Details</a>
              </div>
            </div>
            </div>
            </div>
    </div>
  </div>
  
  
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
      <div class="container">
<h3  style="margin-left: 350px">Some important facts about GJSA</h3>
<br>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span>300+</span>
            <p>Members</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span>5+</span>
            <p>Files</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span>20+</span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span>100+</span>
            <p>Photos</p>
          </div>

        </div>

      </div>
    </section>



</body>

</html>