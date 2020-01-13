<div class="col-sm-12">
  <a href="#" data-toggle="modal" data-target="#addslider" class="btn btn-info btn-circle btn-lg">
    <i class="fas fa-plus"></i>
  </a>
  <br/><br/>
</div>
                <div class="col-sm-12">
                <div class="row">
                <h5>SLIDERS</h5>
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Options</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if(!empty($get_all)): foreach($get_all as $row): ?>
                    <tr>
                      <td>
                        <img class="img-responsive" src="<?php echo base_url();?>uploads/sliders/<?php echo $row->image; ?>" style="height:100px;width:100px">
                      </td>
                      <td><?php echo $row->title; ?></td>
                       <td><?php echo $row->info;?></td>
                      <td>
                        <a href="#" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteslider">
                          <i class="fas fa-trash"></i>
                        </a>
                         <a href="#" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#editslider">
                          <i class="fas fa-edit"></i>
                        </a>
                      </td>
                      
                    </tr>
                  <?php endforeach; endif;?>

                 
                  </tbody>
                </table>
              </div>
            </div>
          </div>