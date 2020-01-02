<div class="col-sm-12">
  <a href="#" data-toggle="modal" data-target="#addicon" class="btn btn-info btn-circle btn-lg">
    <i class="fas fa-plus"></i>
  </a>
  <br/><br/>
</div>
<div class="col-sm-12">
                <div class="row">
                <h5>ADMIN ACCOUNTS</h5>
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Category Name</th>
                      <th>Icon</th>
                      <th>Options</th>
                    
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <tr>
                      <th>id</th>
                      <th>Category Name</th>
                      <th>Icon</th>
                      <th>Options</th>
                    
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($categories as $category ): ?>
                      
                   
                    <tr>
                      <td>
                        <?= $category->id; ?>
                      </td>
                      <td>
                       <?= $category->category; ?>
                      </td>
                      <td> <?= $category->icon; ?></td>
                      <td>
                        <a href="#" class="btn btn-danger btn-circle btn-sm" id="delete-category" data-id=" <?= $category->id; ?>" data-toggle="modal" data-target="#deleteicon">
                          <i class="fas fa-trash"></i>
                        </a>
                         <a href="#" class="btn btn-warning btn-circle btn-sm" id="edit-category" data-toggle="modal" data-target="#editicon" data-id=" <?= $category->id; ?>" data-category=" <?= $category->category; ?>" data-icon="<?= $category->icon; ?>">
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