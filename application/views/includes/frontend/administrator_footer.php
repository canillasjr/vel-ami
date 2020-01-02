  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/administrator/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/administrator/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/customs.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/administrator/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/administrator/js/sb-admin-2.min.js"></script>
  <?php if($this->router->fetch_method() != 'get_login' || $this->router->fetch_method() != 'forgot_password_page'): ?>
  	<!-- Page level plugins -->
  <script src="<?php echo base_url();?>assets/administrator/vendor/chart.js/Chart.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>assets/administrator/js/demo/chart-area-demo.js"></script>
  <script src="j<?php echo base_url();?>assets/administrator/s/demo/chart-pie-demo.js"></script>
  <script src="<?php echo base_url();?>assets/administrator/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/administrator/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>assets/administrator/js/demo/datatables-demo.js"></script>

  <?php endif; ?>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-notify/bootstrap-notify.min.js"></script>
 <?php if($this->session->flashdata('create_account_msg') != ""){
    ?>
    <script type="text/javascript">
      jQuery.notify({
              title: "",
              message: "You have successfully created a new administrator Account!"
          },{
          // settings
          type: 'success'
      });
    </script>
    <?php
  } ?>

   <?php if($this->session->flashdata('update_account_msg') != ""){
    ?>
    <script type="text/javascript">
      jQuery.notify({
              title: "",
              message: "You have successfully updated the administrator Account!"
          },{
          // settings
          type: 'success'
      });
    </script>
    <?php
  } ?>

   <?php if($this->session->flashdata('delete_account_msg') != ""){
    ?>
    <script type="text/javascript">
      jQuery.notify({
              title: "",
              message: "You have successfully deleted the administrator Account!"
          },{
          // settings
          type: 'success'
      });
    </script>
    <?php
  } ?>