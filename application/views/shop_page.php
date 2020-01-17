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

            <!-- select product -->
           
            <?php $this->load->view('owner_shop_page',$shop_info+$product_list); ?>


           
     
    

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->