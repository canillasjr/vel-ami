
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
                  <a href="<?=base_url('dashboard/myshop')?>" type="button" class="btn btn-default">My Shop</a>
                </div>
                </div>
              </div>
            </div>

<div class="col-sm-12"><br/><br/></div>
<div class="col-sm-12">
  <?= form_open(base_url('Frontend_Controller/add_product_process'),array("method" => "post", "id" => "add_product_form", "enctype" => "multipart/form-data", "class" => "")) ?>
        <div class="form-group">
            <select name="category" id="category" class="form-control">
                <option value="">Select a Category</option>
                <?php 
                foreach($categories as $category){
                ?>
                <option value="<?= $category->id ?>"><?= $category->category ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <select name="location" id="location" class="form-control">
                <option value="">Select a Location</option>
                <?php 
                foreach($locations as $location){
                ?>
                <option value="<?= $location->id ?>"><?= $location->location ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="product_name" name="product_name"  placeholder="Product Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="price" name="price"  placeholder="Price">
        </div>
        <div class="form-group">
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" style="height: 200px"></textarea>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" aria-describedby="iconHelp" name="tags" id="tags" data-role="tagsinput" placeholder="Tags">
            <small id="iconHelp" class="form-text text-muted">Please use comma (,) for the separation of tags</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <?= form_close() ?>
        <form action="/image-upload/post" enctype="multipart/form-data" class="dropzone" id="image-upload" method="POST">
                
            </form>
            <div style="text-align: center;padding-top: 15px;"><button  class="btn btn-primary" id="submit_uploads">Submit</button></div>
</div>



           
     
       

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
