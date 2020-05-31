<?php require_once('inc/dbh.includes.php');?>

<?php require_once('inc/top.php');?>
</head>

<body>

 <!-- ======= Team Section ======= -->
 <section id="team" class="team">  <!-- for image round & slide-->
      <div class="container">

        <div class="row">
          <div class="col-lg-3">
            <div class="section-title" data-aos="fade-right">
              <h2>PRESENT COMMITTEE</h2>
              <p>2020-2021</p>
            </div>
          </div>
          </div>
          </section>
          


 <section id="team" class="team">  <!-- for image round & slide-->
      <div class="container">
          <!--1st part-->     
          <div class="col-lg-12">
            <div class="row">

          <?php
          $query = "SELECT * from post where status='publish'";
          $run = mysqli_query($conn,$query);

          if(mysqli_num_rows($run) > 0){
            while($row = mysqli_fetch_array($run)){
              $id = $row['id'];
              $name = $row['name'];
              $title = $row['title'];
              $image = $row['image'];
              $status = $row['status'];
              ?>
              <div class="col-lg-4 col-sm-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="part/image/team/<?php echo $image;?>" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4><?php echo $name;?></h4>
                    <span><b><?php echo $title;?></b></span>
                   
                  </div>
                </div>
              </div>
              <?php
                }
              }
                        
              else{
                echo "<center><h2>NO POST YET</h2></center>";
              }
            ?> 
           </div>
           </div>

           </div>
           </div>
  </section>
              


   

   <br>
   <br> 

   <footer>
         <div class="container">
           Copyright &copy; by <a href="https://web.facebook.com/istiak.fahim.167">Istiak Ahmmed</a>.
           All Right Reserved from 1st April, 2020.
         </div>
   </footer>

</body>

</html>