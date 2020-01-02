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
                      <center><i class="fa fa-calendar"></i>2016-03-05 / 09:10:16</center>
                    </span>
                </div>
                <center>
                <div class="blog-text">
                  <h4>
                      <a href="<?php echo base_url('shop'); ?>">SHOP NAME</a>
                    </h4>
                  <p> Product Name </p>
                  <p class="text-danger">₱ 299.00</p>
                </div>
                </center>
              </div>
</div>
<?php endforeach ?>