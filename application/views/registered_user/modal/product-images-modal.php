<!-- Add Prosduct Modal -->
<div id="addProductImages" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Select Images</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
            <form action="/image-upload/post" enctype="multipart/form-data" class="dropzone" id="image-upload" method="POST">
                
            </form>
            <div style="text-align: center;padding-top: 15px;"><button  class="btn btn-primary" id="submit_uploads">Submit</button></div>
      </div>
    </div>

  </div>
</div>
<!-- End for category modal -->
