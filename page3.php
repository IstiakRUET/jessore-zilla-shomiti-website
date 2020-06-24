<?php 
session_start();
if(!isset($_SESSION['u_email'])){
  header("Location: page1.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <!--column toirir jnne obosshoi dite hbe-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!--Ay 3ta script pic slider (carousel) er kaj krse-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>

body{
  background-image: url(image/love.jpg);
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
}
  
.features {
  padding-bottom: 40px;
}

.features .nav-tabs {
  border: 0;
}

.features .nav-link {
  border: 0;
  padding: 20px;
  transition: 0.3s;
  color: #364146;
  transition: 0.3s ease-in-out;
  border-radius: 0;
  border-left: 4px solid #fafbfb;
}

.features .nav-link h4 {
  font-size: 18px;
  font-weight: 600;
  transition: 0.3s ease-in-out;
  color: #576971;
}

.features .nav-link p {
  font-size: 14px;
  margin-bottom: 0;
}

.features .nav-link:hover {
  background: #fafbfb;
}

.features .nav-link:hover h4 {
  color: #364146;
}

.features .nav-link.active {
  border-radius: 0;
  border: 0;
  border-left: 4px solid #009cea;
  background: #fafbfb;
}

.features .nav-link.active h4 {
  color: #009cea;
}

.features .tab-pane.active {
  -webkit-animation: slide-down 0.5s ease-out;
  animation: slide-down 0.5s ease-out;
}

.features .tab-content {
  text-align: right;
}

@-webkit-keyframes slide-down {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes slide-down {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
  </style>
</head>

<body>
  <br> <br> <br> <br>
<section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item" data-aos="fade-up">
                <a class="nav-link active show" href="history.php">
                  <h4>History</h4>
                  <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>About Us</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Recent Event</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" href="journal.php">
                  <h4>Journal</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>  
</body>

</html>