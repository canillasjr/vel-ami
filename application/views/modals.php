<!-- Select Location Modal -->
<div class="modal fade" id="selectLocation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Set Location</h4>
      </div>
      <div class="modal-body">
         <div class="form-group">
          <select class="form-control">
            <option >Select Location</option>
            <?php foreach ($locations as $location): ?>
              <option><?=$location->location?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="<?php echo base_url('search_result'); ?>" type="button" class="btn btn-info">Save changes</a>
      </div>
    </div>
  </div>
</div>

<!-- VIEW SHOP -->
<!-- VIEW REVIEWS -->
<div class="modal fade" id="getmodalreviews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Reviews for this product</h4>
      </div>
      <div class="modal-body">
       <!-- Left-aligned media object -->
     
         <div class="media">
            <div class="media-left">
              <img src="img_avatar1.png" class="media-object" style="width:45px">
            </div>
            <div class="media-body">
              <h6 class="media-heading">Costumer Firstname Lastname
                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                <i class="fa fa-star text-primary" aria-hidden="true"></i>
              <small><i>Posted on February 19, 2016</i></small>
            </h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              
              <!-- Nested media object -->
              <div class="media">
                <div class="media-left">
                  <img src="img_avatar2.png" class="media-object" style="width:45px">
                </div>
                <div class="media-body">
                  <h6 class="media-heading">Shop Owner Name <small class="text-danger"><i>Replied on 2 days ago</i></small></h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  
                </div>
              </div>
              
            </div>
          </div>
          <hr/>

      </div>
    </div>
  </div>
</div>

<!-- SIGN UP MODAL -->
<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">REGISTER</h4>
      </div>
      <div class="modal-body">
        <form id="register_user" method="post" action="<?=base_url('register_user')?>">
          
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Firstname" name="firstname" required="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Lastname" name="lastname" required="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Mobile Number" name="mobile_number" required="">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address" name="email_address" required="">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required="">
          </div>
          <div class="form-group">
           <div class="g-recaptcha" data-sitekey="6LfNdsEUAAAAAI0fe2grP_wpT98EbbClvxW8Bxf3"></div>
          </div>
           <button type="submit" class="btn btn-info">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- LOGIN MODAL -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">LOGIN</h4>
      </div>
      <div class="modal-body">
         <form id="login_user" method="post" action="<?=base_url('login_user')?>">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="rememberme"> Remember me
              </label>
            </div>
            <div class="form-group">
              <a data-toggle="collapse" href="#forgotpassword" aria-expanded="false" aria-controls="collapseExample">Forgot Password?</a>
              <div class="collapse" id="forgotpassword">
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Enter Email to Reset Password" required>
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Reset</button>
                    </span>
                 </div><!-- /input-group -->
              </div>
            </div>
            <button class="btn btn-info" type="submit" >Login</button>
          </form>
      </div>
    </div>
  </div>
</div>

<!-- REMOVE MESSAGE -->
<div class="modal fade" id="removemessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
         <div class="form-group">
         <p>Remove Message?</p>
         <input type="submit" class="btn btn-danger" value="Yes">
         </div>
      </div>
    </div>
  </div>
</div>

<!-- REPLAY MESSAGE -->
<div class="modal fade" id="replymessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         OCTOBER 12 2019
         <h6><span class="glyphicon glyphicon-earphone"></span> <a href="tel:+63972114460">+63972114460</a></h6>
         <!-- display of costumer contact number -->
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group pull-left">
            <h6 class="text-right">firtname lastname</h6>
            <div class="alert alert-warning" role="alert">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              <img src="<?php echo base_url();?>assets/frontend/img/profile.jpg" class="vel-profile">
              <span class="online pull-right"></span>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group pull-right">
            <h6 class="text-left">Shopname</h6>
            <div class="alert alert-success" role="alert">
            <img src="<?php echo base_url();?>assets/frontend/img/profile.jpg" class="vel-profile">
            <span class="away pull-left"></span>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Write a replay">
          <div class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-camera"></i></button>
            <button class="btn btn-default" type="button">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- SEND MESSAGE TO PRODUCT -->
<div class="modal fade" id="productsendmessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         January 5 2019
         <h6><span class="glyphicon glyphicon-earphone"></span> <a href="tel:+63972114460">+63972114460</a></h6>
         <!-- display of costumer contact number -->
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group pull-left">
            <h6 class="text-right">firtname lastname</h6>
            <div class="alert alert-warning" role="alert">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              <img src="<?php echo base_url();?>assets/frontend/img/profile.jpg" class="vel-profile">
              <span class="online pull-right"></span>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group pull-right">
            <h6 class="text-left">Shopname</h6>
            <div class="alert alert-success" role="alert">
            <img src="<?php echo base_url();?>assets/frontend/img/profile.jpg" class="vel-profile">
            <span class="away pull-left"></span>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Type here..">
          <div class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-camera"></i></button>
            <button class="btn btn-default" type="button">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>