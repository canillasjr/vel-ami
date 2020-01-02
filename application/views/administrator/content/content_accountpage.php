<div class="col-sm-12">
  <a href="#" data-toggle="modal" data-target="#addaccount" class="btn btn-info btn-circle btn-lg">
    <i class="fas fa-plus"></i>
  </a>
  <br/><br/>
</div>
<div class="col-sm-12">
                <div class="row">
                <h5>ADMIN ACCOUNTS</h5>
                <div class="table-responsive">
                <table class="table table-bordered admin-accounts" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Firstname, Lastname</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Last Log-in</th>
                      <th>Options</th>
                    
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <tr>
                      <th>Firstname, Lastname</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Last Log-in</th>
                      <th>Options</th>
                    
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php foreach ($admin_accounts as $admin_account): ?>
                    <tr>
                      <td>
                        <?=$admin_account->firstname?> <?=$admin_account->lastname?>
                      </td>
                      <td>
                        <?=$admin_account->email?>
                      </td>
                      <td><?=$admin_account->username?></td>
                      <td>October 13 2019 / 7:00am</td>
                      <td>
                        <a href="#" class="btn btn-danger btn-circle btn-sm" id="delete-admin-account" data-toggle="modal" data-id="<?=$admin_account->id?>" data-target="#deleteaccount">
                          <i class="fas fa-trash"></i>
                        </a>
                         <a href="#" class="btn btn-warning btn-circle btn-sm" id="edit-admin-account" data-toggle="modal" data-target="#editaccount" data-firstname="<?=$admin_account->firstname?>" data-lastname="<?=$admin_account->lastname?>" data-id="<?=$admin_account->id?>" data-email="<?=$admin_account->email?>" data-username="<?=$admin_account->username?>">
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