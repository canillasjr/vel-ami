
<style type="text/css">
  .shopname{
        margin-top: 60px;
    font-size: 30px;
    margin-bottom: 20px;
    line-height: 32px;
    border: none;
    border-bottom: 1px solid #5bc0de;
    padding-bottom: 11px;
    padding-top: 11px;
    outline: none;
  }
  #profile-img-tag{
        width: 210px;
    height: 205px;
    border-radius: 50%;
    border: 1px solid #ccc;
    margin-top: 20px;
    margin-bottom: 20px;
  }
  #shopname-error{
    position: absolute;
    bottom: -8px;
    left: 0;
  }
</style>

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
              <div class="row">
                <div class="col-sm-4">
                   <?php if (count($shopname) < 1): ?>
                  <img id="profile-img-tag" src="<?php echo base_url();?>assets/frontend/img/profile.jpg" class="rounded-circle">
                   <?php else: ?>
                    <img id="profile-img-tag" src="<?php echo base_url();?>uploads/<?=$shopname[0]->user_id."_".sha1(md5($shopname[0]->user_id))?>/<?=$shopname[0]->image?>" class="rounded-circle">
                     <?php endif ?>
                  <br/>
                  <form action="<?=base_url('dashboard/upload_shop_image')?>" method="post" id="upload_shop_image"  style="position: relative;" enctype="multipart/form-data">
                  <center style="display: flex;">
                    <label style="margin: 0 auto" for="profile-img" class="btn btn-default">Update Profile <i class="fa fa-camera"></i></label>
                    <input type="file" name="file" id="profile-img" style="height: 0;width: 0">
                    <button style="margin: 0 auto"  class="btn btn-primary" type="submit">Save</button>
                  </center>
                  </form>
                </div>
                <div class="col-sm-8">
                 <?php if (count($shopname) < 1): ?>
                    <form action="<?=base_url('dashboard/create_shop')?>" method="post" id="create_shop" style="position: relative;">
                      <input type="shopname" name="shopname" placeholder="Enter Shop Name" class="shopname">
                      <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                  <?php else: ?>
                    <h3 class="felshopname"><?=$shopname[0]->shop_name?></h3>
                 <?php endif ?>
                 
                 
                 <br/>
                 <hr/>
                 <div class="btn-group pull-right" role="group" aria-label="...">
                  <a href="<?=base_url('dashboard/myshop/add_products')?>" type="button" class="btn btn-default" data-target="">ADD</a>
                </div>
                </div>
              </div>
            </div>

<div class="col-sm-12"><br/><br/></div>

<!-- product -->
<?php foreach ($product_list as $product): ?>
<div class="col-sm-4">
              <div class="single-blog" style="border:1px solid #dccaca8f;padding:3px;">
                <div class="single-blog-img">
                  <a href="blog-details.html">
                      <img src="<?php echo base_url();?>assets/frontend/img/blog/1.jpg" alt="">
                    </a>
                </div>
                <div class="blog-meta">
                  <span class="date-type">
                      <center><i class="fa fa-calendar"></i><?=$product->created_date?></center>
                    </span>
                </div>
                <center>
                  <div class="blog-text">
                    <p> <?=$product->product_name?> </p>
                    <p class="text-danger">₱ <?=$product->price?></p>
                  </div>
                </center>
              </div>
</div>
  <?php endforeach ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
