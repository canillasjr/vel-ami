<div class="col-sm-12">
  <a href="#" data-toggle="modal" data-target="#addlocation" class="btn btn-info btn-circle btn-lg">
    <i class="fas fa-plus"></i>
  </a>
  <br/><br/>
</div>
                <div class="col-sm-12">
                <div class="row">
                <h5>LOCATIONS</h5>
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Locations</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <tr>
                      <th>id</th>
                      <th>Locations</th>
                      <th>Options</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($locations as $location): ?>
                    <tr>
                      <td>
                        <?= $location->id; ?>
                      </td>
                      <td>
                       <?= $location->location; ?>
                      </td>
                      <td>
                        <a href="#" class="btn btn-danger btn-circle btn-sm" id="delete-location" data-id="<?= $location->id; ?>" data-toggle="modal" data-target="#deletelocation">
                          <i class="fas fa-trash"></i>
                        </a>
                         <a href="#" class="btn btn-warning btn-circle btn-sm" id="edit-location" data-id="<?= $location->id; ?>" data-location=" <?= $location->location; ?>" data-toggle="modal" data-target="#editlocation">
                          <i class="fas fa-edit"></i>
                        </a>
                      </td>
                      
                    </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>