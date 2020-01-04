 <?php $this->load->view('modals',$locations);?>
 <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <?php echo date('Y'); ?> <strong>VELami</strong>. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url();?>assets/frontend/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/parallax/parallax.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/appear/jquery.appear.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/customs.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="<?php echo base_url();?>assets/bootstrap-tagsinput/tagsinput.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/dropzone/dropzone.min.js"></script>



  <script src="<?php echo base_url();?>assets/frontend/js/main.js"></script>

  <script type="text/javascript">
    Dropzone.autoDiscover = false;

jQuery(document).ready(function () {
    var base_url = jQuery('body').attr('base-url');
    jQuery("#image-upload").dropzone({
        autoProcessQueue: false,
        maxFiles: 5,
        uploadMultiple: false,
        createImageThumbnails: true,
        addRemoveLinks: true,
        parallelUploads: 5,
        maxFilesize: 2,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        url: base_url+"ajax_file_upload_handler/",
        success: function (file, response) {
            file._removeLink.remove();
            console.log(response);
        },
        maxfilesexceeded: function(file) {
            alert("Your file exceeded");
            this.removeFile(file);
          },
        init: function() {

            var drop = this; // Closure
            

            this.on('error', function(file, errorMessage) {
              //alert(maxFilesize);
              //this.removeAllFiles();
              if (errorMessage.indexOf('Error 404') !== -1) {
                var errorDisplay = document.querySelectorAll('[data-dz-errormessage]');
                errorDisplay[errorDisplay.length - 1].innerHTML = 'Error 404: The upload page was not found on the server';
              }
              if (errorMessage.indexOf('File is too big') !== -1) {
                alert('The File is too big');

                // i remove current file
                drop.removeFile(file);
              }
            });

            jQuery('#submit_uploads').on('click',function(e){
                alert(0);
                e.preventDefault();
                drop.processQueue();
            });

            this.on("queuecomplete", function (file) {
                // jQuery('#addProductImages').modal('hide'); 
                // drop.removeAllFiles();
                // jQuery.notify({
                //     title: "",
                //     message: "Product has been successfully added"
                // });
            });

            this.on('sending', function(file, xhr, formData) {
                // Append all form inputs to the formData Dropzone will POST
                var data = jQuery('#image-upload').serializeArray();
                var $formS = jQuery('#add_product_form');
                $formS.submit();

                formData.append('category',$formS.find('#category').val());
                formData.append('location',$formS.find('#location').val());
                formData.append('product_name',$formS.find('#product_name').val());
                formData.append('price',$formS.find('#price').val());
                formData.append('description',$formS.find('#description').val());
                formData.append('tags',$formS.find('#tags').val());

                jQuery.each(data, function(key, el) {
                    formData.append(el.name, el.value);
                });
            });


            

          }
    });



    
})
  </script>

  <?php if($this->router->fetch_method()=='index'): ?>
  <!-- <script type="text/javascript" src="<?php base_url(); ?>assets/frontend/js/productslider.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( document ).tooltip();
  } );
  </script>

  <?php endif;?>
