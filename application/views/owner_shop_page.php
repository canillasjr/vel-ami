<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-4">
		  <img src="<?php echo base_url();?>uploads/<?=$shop_info[0]->user_id."_".sha1(md5($shop_info[0]->user_id))?>/<?=$shop_info[0]->image?>" class="rounded-circle">
		</div>
		<div class="col-sm-8">
		 <h3 class="felshopname"><?=$shop_info[0]->shop_name?></h3>
		 <hr/>
		</div>
	</div>
</div>

<div class="col-sm-12"><br/><br/></div>

<!-- product -->
<?php foreach ($product_list as $product): ?>
  
<div class="col-sm-6">

              <div class="single-blog">
                <div class="single-blog-img">
                  <a class="productlink" href="<?php echo base_url('product_permalink'); ?>" data-toggle="tooltip" data-placement="top" title="Click to view product">
                        <img src="<?php echo base_url();?>assets/images/nit2.png" alt="">
                  </a>
                </div>
                <center>
                  <div class="blog-text" style="padding-top:15px;">
                  <!-- 
                    product permalink should be product Id in the url para unique like wordpress
                    example: vel-ami.com/shop/product_permalink/product_DI
                    live example: vel-ami.com/shop/product_permalink/1234
                   -->
	                  <a class="productlink" href="<?php echo base_url('product_permalink'); ?>" data-toggle="tooltip" data-placement="top" title="Click to view product"> <?=$product->product_name?></a>
	                  <p class="text-danger font21">₱  <?=$product->price?></p>
	                </div>
                </center>
              </div>
</div>

<?php endforeach ?>


