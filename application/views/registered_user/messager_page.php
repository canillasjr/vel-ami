<br/><br/>
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="#">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#selectLocation"><i class="fa fa-map-marker" aria-hidden="true" ></i> Select Location</button>
                <br/><br/>
                <div class="search-option">

                  <input type="text" placeholder="What are you looking for?...">
                  <button class="button" type="submit">
                    <i class="fa fa-search"></i>

                  </button>

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
              <div class="table-responsive">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">INBOX</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>October 12, 2019 @ 2mins Ago</td>
                      <td>Product Name</td>
                      <td>
                      <img src="<?php echo base_url();?>assets/frontend/img/profile.jpg" class="table-profile">
                      <div class="on-profile-inbox">
                        <span class="online"></span>
                      </div>
                      </td>
                      <td>
                        <h6>Firstname Lastname</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="form-group pull-right">
                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removemessage">
                            <i class="fa fa-trash"></i>
                          </a>
                          <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#replymessage">
                            <i class="fa fa-reply"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                      <tr>
                      <td>October 12, 2019 @ 2mins Ago</td>
                      <td>Product Name</td>
                      <td><img src="<?php echo base_url();?>assets/frontend/img/profile.jpg" class="table-profile">
                        <div class="on-profile-inbox">
                          <span class="away"></span>
                        </div>
                      </td>
                      <td>
                        <h6>Firstname Lastname</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="form-group pull-right">
                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removemessage">
                            <i class="fa fa-trash"></i>
                          </a>
                          <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#replymessage">
                            <i class="fa fa-reply"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                      <tr>
                      <td>October 12, 2019 @ 2mins Ago</td>
                      <td>Product Name</td>
                      <td>
                          <img src="<?php echo base_url();?>assets/frontend/img/profile.jpg" class="table-profile">
                          <div class="on-profile-inbox">
                            <span class="online"></span>
                          </div>
                      </td>
                      <td>
                        <h6>Firstname Lastname</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="form-group pull-right">
                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removemessage">
                            <i class="fa fa-trash"></i>
                          </a>
                          <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#replymessage">
                            <i class="fa fa-reply"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
           
     
       

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->