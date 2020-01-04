<?php foreach ($product_list as $product): ?>
<div class="col-sm-4" >
            <!-- shop should go to permalink by shopname
                url example: vel-ami.com/shop/felmeraldshop
            -->
            
              <div class="single-blog">
                <div class="single-blog-img">
                      <img src="<?php echo base_url();?>assets/images/nit1.png" alt="">
                </div>
                <center>
                <div class="blog-text">
                  <h4>
                      <a href="<?php echo base_url('shop'); ?>" data-toggle="tooltip" data-placement="top" title="Register to view Shop Products" >SHOP NAME</a>
                    </h4>
                  <p> <?php echo $product->product_name;  ?> </p>
                  <p class="text-danger">₱ 299.00</p>
                </div>
                </center>
              </div>
           
</div>
<?php endforeach ?>