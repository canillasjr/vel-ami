<!-- Login Modal -->
<div id="enableVerification" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Enable Two-step Verification</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <?= form_open(base_url('enable-two-step-verification'),array("method" => "post", "id" => "enableVerificationForm")) ?>
        
        <?= form_close() ?>
      </div>
    </div>

  </div>
</div>
<!-- End for category modal -->