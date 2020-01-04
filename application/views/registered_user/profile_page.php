<br/><br/>
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="#">
               
                <div class="search-option">

                <div class="input-group">
                  <input type="text" class="form-control" aria-label="..." placeholder="Search Product?">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#selectLocation">
                      <i class="fa fa-map-marker" aria-hidden="true" ></i>
                    </button>
                  </div>
                </div>

                </div>


              </form>
              <!-- search option end -->
            </div>
            <!-- includes category navigation menu -->
              <?php $this->load->view('category_sidenav'); ?>
            <!-- includes advestisement -->
              <?php $this->load->view('advertisement_nav');?>
          </div>
        </div>
        <!-- End left sidebar -->

        <!-- Start Product -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">

          <div class="col-sm-12">
            <div class="col-sm-6">
            <h4>My Profile</h4>
            </div>
            <div class="col-sm-6">
              <label> 2-FA</label>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>

          </div>

          <div class="col-sm-12" style="margin-top:32px;">
            <hr>
            <div class="col-sm-3">
            <img src="<?php echo base_url();?>assets/frontend/img/profile.jpg" alt="" class="img-circle width-profile"><br/>
            <center>
              <button class="btn btn-default" type="button">Update Profile <i class="fa fa-camera"></i></button>
            </center>
            </div>
            <div class="col-sm-9">

              
                <div class="form-group">
                  <label for="i_no">Identification No. </label>
                  <input type="text" class="form-control" id="i_no" value="123">
               </div>
               <div class="form-group">
                  <label for="fn">First Name </label>
                  <input type="text" class="form-control" id="fn" value="Firstname">
               </div>
               <div class="form-group">
                  <label for="mn">Middle Name </label>
                  <input type="text" class="form-control" id="mn" value="">
                  <a href="">Edit</a>
               </div>
               <div class="form-group">
                  <label for="ln">Last Name </label>
                  <input type="text" class="form-control" id="ln" value="Last Name">
               </div>
               <div class="form-group">
                  <label for="mobilen">Mobile Number </label>
                  <input type="text" class="form-control" id="Mobilen" value="">
                  <a href="">Edit</a>
               </div>
               <div class="form-group">
                  <label for="adn">Email Address </label>
                  <input type="text" class="form-control" id="adn" value="my-email@gmail.com">
                  <a href="">Edit</a>
               </div>
               <div class="form-group">
                  <label for="password">Password </label>
                  <input type="password" class="form-control" id="password" value="mypassword">
                  <a href="">Edit</a>
               </div>
            


            </div>
          </div>

           
          

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->