  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?=base_url('administrator/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- DELETE USER HAS SHOP -->
  
    <div class="modal fade" id="deleteuserhas_shop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">BLOCK USER?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="#">Yes</a>
        </div>
      </div>
    </div>
  </div>

<!-- DELETE ACCOUNT -->
<div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form id="delete_admin_account" method="post" action="<?=base_url('administrator/delete_account')?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DELETE ACCOUNT?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="account_id" class="account_id">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">Yes</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- EDIT ACCOUNT -->
  <div class="modal fade" id="editaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form id="update_admin_account" method="post" action="<?=base_url('administrator/update_account')?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">UPDATE ACCOUNT</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
            <input type="hidden" name="account_id" class="account_id">
              <input type="text" name="firstname" class="form-control form-control-user firstname"  placeholder="Firstname">
          </div>
          <div class="form-group">
              <input type="text" name="lastname" class="form-control form-control-user lastname"  placeholder="Lastname">
          </div>
          <div class="form-group">
              <input type="email" name="email" class="form-control form-control-user email"  placeholder="Email Address">
          </div>
          <div class="form-group">
              <input type="text" name="username" class="form-control form-control-user username"  placeholder="Username">
          </div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Add account -->
    <div class="modal fade" id="addaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form id="create_admin_account" method="post" action="<?=base_url('administrator/create_account')?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CREATE ACCOUNT</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
              <input type="text" name="firstname" class="form-control form-control-user" placeholder="Firstname">
          </div>
          <div class="form-group">
              <input type="text" name="lastname"  class="form-control form-control-user" placeholder="Lastname">
          </div>
          <div class="form-group">
              <input type="email" name="email"  class="form-control form-control-user" placeholder="Email Address">
          </div>
          <div class="form-group">
              <input type="text"  name="username"  class="form-control form-control-user" placeholder="Username">
          </div>
          <div class="form-group">
              <input type="password"  name="password"  class="form-control form-control-user" placeholder="Create Password">
          </div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
           <button class="btn btn-primary" type="submit" >Create</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- DELETE ICON -->
  <div class="modal fade" id="deleteicon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form id="delete_category" method="post" action="<?=base_url('administrator/delete_category')?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DELETE CATEGORY?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
           <input type="hidden" name="category_id" class="category_id">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">Yes</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- EDIT ICON -->
      <div class="modal fade" id="editicon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form id="update_category" method="post" action="<?=base_url('administrator/update_category')?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">UPDATE CATEGORY</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
            <input type="hidden" name="category_id" class="category_id">
              <input type="text" class="form-control form-control-user category" name="category" value="Automotive & Motorcycles">
          </div>
          <div class="form-group">
              <input type="text" class="form-control form-control-user icon" name="icon" value="fas fa-car ">
              <small>Copy the class of fontawesome "fas fa-dreidel"</small>
          </div>
      

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" href="#">UPDATE</button>
        </div>
      </form>
      </div>
    </div>
  </div>

    <div class="modal fade" id="addicon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form id="create_category" method="post" action="<?=base_url('administrator/create_category')?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CREATE CATEGORY</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
              <input type="text" class="form-control form-control-user category" name="category" placeholder="Category name">
          </div>
          <div class="form-group">
              <input type="text" class="form-control form-control-user icon" name="icon" placeholder="Icon Name">
              <small>Copy the class of fontawesome "fas fa-dreidel"</small>
          </div>
      

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">CREATE</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- Add locations -->

    <div class="modal fade" id="addlocation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form id="create_location" method="post" action="<?=base_url('administrator/create_location')?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CREATE LOCATION</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <input type="text" class="form-control form-control-user" placeholder="Location" name="location">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">CREATE</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- DELETE LOCATION -->
  <div class="modal fade" id="deletelocation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form id="delete_location" method="post" action="<?=base_url('administrator/delete_location')?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DELETE LOCATION?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="location_id" class="location_id">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary">Yes</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- UPDATE LOCATION -->
   <div class="modal fade" id="editlocation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form id="update_location" method="post" action="<?=base_url('administrator/update_location')?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">UPDATE LOCATION</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" name="location_id" class="location_id">
              <input type="text" class="form-control form-control-user location" name="location">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">UPDATE</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- ADD SLIDER -->
  <div class="modal fade" id="addslider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD SLIDER</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <?php echo form_open_multipart(base_url('Administrator_Controller/upload_slider')); ?>
        <div class="modal-body">
          <div class="form-group">
              <label>Image</label>
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" name="userfile" required >
                  
                </div>
              </div>
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" required>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="info" placeholder="Write descption.." required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-primary" value="CREATE"/>
        </div>
        <?php echo form_close();?>
      </div>
    </div>
  </div>

    <div class="modal fade" id="editslider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">UPDATE SLIDER</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <label>Image</label>
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Title">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" placeholder="Write descption.."></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="#">UPDATE</a>
        </div>
      </div>
    </div>
  </div>

  <!-- DELETE SLIDER -->
   <div class="modal fade" id="deleteslider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DELETE SLIDER?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="#">Yes</a>
        </div>
      </div>
    </div>
  </div>