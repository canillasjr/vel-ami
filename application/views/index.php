<?php $this->load->view('homepage_slider',$profile); ?>
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
              <?php $this->load->view('category_sidenav',$categories); ?>
            <!-- includes advestisement -->
              <?php $this->load->view('advertisement_nav');?>
          </div>
        </div>
        <!-- End left sidebar -->

        <!-- Start Product -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">

            <!-- select product -->
           
            <?php $this->load->view('products',$product_list); ?>

          </div>
            <!-- End single blog -->
            <!-- <div class="blog-pagination">
              <ul class="pagination">
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div> -->
            <!-- end pagination -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->