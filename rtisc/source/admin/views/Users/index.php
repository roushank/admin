<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Details</h4>
                    <p class="card-description"> </code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Role </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($viewmodel as $item):?>
                        <tr>
                          <td class="py-1">
                            <?php echo $item["id"];?>
                          </td>
                          <td> <?php echo $item["user_name"];?> </td>
                          <td>
                          <?php echo $item["user_email"];?>
                          </td>
                          <td>
                          <?php echo $item["user_role"];?>
                          </td>
                        </tr> 
                        <?php endforeach; ?>                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>