
<?php require('lib/header.php'); ?>
<?php require('_blogpage.php'); ?>

<style>
   .buttonWrapper{
     display: flex;
     justify-content: flex-end;
     position: relative;
     bottom: 30px;
    
   }

   .newButton {
     background-color: transparent;
     width: 70px;
   }

   .newButton:hover {
    background-color: black;
    color: #fff;
   }

   
</style>
  
  <!--================ Hero sm Banner start =================-->    
  <section class="mb-30px">
    <div class="container">
      <div class="hero-banner hero-banner--sm">
        <div class="hero-banner__content">
          <h1>Blog</h1>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->    

  

  <!--================ Start Blog Post Area =================-->
  <section class="blog-post-area section-margin">
    <div class="container">
      <div class="buttonWrapper">
            <button class="newButton" onclick="location.href='blognew.php'">+ New</button>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <?php 
                foreach($result as $blog){
            ?>
            <div class="col-md-4">
              <div class="single-recent-blog-post card-view">
                <div class="thumb">
                  <img class="card-img rounded-0" src="https://worldinparis.com/wp-content/uploads/2019/10/Travel-to-Paris.jpg" alt="">
                  <ul class="thumb-info">
                    <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                    <li><a href="#"><i class="ti-notepad"></i>
                    <?php
                      $day = date("d", strtotime($blog['reg_dat']));
                      $month = date("F", strtotime($blog['reg_dat']));
                      $year = date("Y", strtotime($blog['reg_dat']));
                    ?>
                    <span><?=$day;?></span><span><?=$month;?>, <?=$year;?></span>
                    </a></li>
                  </ul>
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h3><?=$blog['title'];?></h3>
                  </a>
                  <p>
                  <?php
                      if (strlen($blog['content']) > 150) {
                      // cut the email string
                      $emailCut= substr($blog['content'], 0, 150);
                      //ensure that it ends with a whole word
                      $blog['content'] = substr($emailCut, 0, strrpos($emailCut, ' ')).'...</br>'; 
                      }
                      echo $blog['content'];
                      ?>
                  </p>
                  <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          
          
                <!-- Pagenation -->
          <div class="row">
            <div class="col-lg-12">
                <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Previous">
                                <span aria-hidden="true">
                                    <i class="ti-angle-left"></i>
                                </span>
                            </a>
                        </li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Next">
                                <span aria-hidden="true">
                                    <i class="ti-angle-right"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
          </div>
        
        </div>

      </div>
  </section> -->
  <!--================ End Blog Post Area =================-->

  <?php require('lib/footer.php'); ?>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>