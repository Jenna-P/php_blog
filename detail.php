<?php require('lib/header.php'); ?>

<?php 
    require('_conn.php');    
   
    $sql = "SELECT * FROM `blog_table` WHERE `no`= 3";
    $result = mysqli_query($conn, $sql);

    $sqlPrev = "SELECT title FROM `blog_table` WHERE `no`= 2 ";
    $prevResult = mysqli_query($conn, $sqlPrev);

    $sqlNext = "SELECT title FROM `blog_table` WHERE `no`= 4 ";
    $nextResult = mysqli_query($conn, $sqlNext);
     
?>
  

  <!--================ Start Blog Post Area =================-->
  <?php 
                foreach($result as $blog){
            ?>
  <section class="blog-post-area section-margin" style="margin-top: 5px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="main_blog_details">
                <img class="img-fluid" src="https://worldinparis.com/wp-content/uploads/2019/10/Travel-to-Paris.jpg" alt="" width=100%>
                <h4><?=$blog['title'];?></h4>
                <div class="user_details">
                  <div class="float-left">
                    <a href="#">Travel</a>
                    <a href="#">Gadget</a>
                  </div>
                  <div class="float-right mt-sm-0 mt-3">
                    <div class="media">
                      <div class="media-body">
                        <p><?php
                      $day = date("d", strtotime($blog['reg_dat']));
                      $month = date("F", strtotime($blog['reg_dat']));
                      $year = date("Y", strtotime($blog['reg_dat']));
                    ?>
                    <span><?=$day;?></span><span><?=$month;?>, <?=$year;?></span></p>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <p><?=$blog['content'];?></p>
           <blockquote class="blockquote">
             <p class="mb-0">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</p>
           </blockquote>
               <div class="news_d_footer flex-column flex-sm-row">
                 <a href="#"><span class="align-middle mr-2"><i class="ti-heart"></i></span>Lily and 4 people like this</a>
                 <a class="justify-content-sm-center ml-sm-auto mt-sm-0 mt-2" href="#"><span class="align-middle mr-2"><i class="ti-themify-favicon"></i></span>06 Comments</a>
                 
               </div>
              </div>
          
              <?php } ?>

             

          <div class="navigation-area">
                  <div class="row">
                  <?php 
                    foreach($prevResult as $prev){
                  ?>
                      <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                          
                          <div class="arrow">
                              <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                          </div>
                          <div class="detials">
                              <p>Prev Post</p>
                              <a href="#"><h4><?=$prev['title'];?></h4></a>
                          </div>
                      </div>
                      <?php } ?>

                      <?php 
                        foreach($nextResult as $next){
                      ?>
                      <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                          <div class="detials">
                              <p>Next Post</p>
                              <a href="#"><h4><?=$next['title'];?></h4></a>
                          </div>
                          <div class="arrow">
                              <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                          </div>
                      </div>		
                      <?php } ?>							
                  </div>
                </div>

                <div class="reply-btn" style="display: flex; justify-content: flex-end; margin: 10px">
                   <button  class="btn-reply text-uppercase" style="margin-right: 10px; background-color: transparent;">Edit</button> 
                   <button  class="btn-reply text-uppercase" onclick="location.href='_blogdelete.php?no=<?=$no;?>'" style="background-color: transparent;">Delete</button>
                </div>


                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form>
                        <div class="form-group form-inline">
                          <div class="form-group col-lg-6 col-md-6 name">
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 email">
                            <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                          </div>										
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        </div>
                        <a href="#" class="button submit_btn">Post Comment</a>	
                    </form>
                </div>
        </div>
      </div>
  </section>
  <!--================ End Blog Post Area =================-->

 

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>