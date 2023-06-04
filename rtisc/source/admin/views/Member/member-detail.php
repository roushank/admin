<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Member Details</h4>
                    <p class="card-description"> </code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Date of registration </th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($viewmodel as $item):?>
                        <tr>
                          <td class="py-1">
                            <?php echo $item["fullname"];?>
                          </td>
                          <td>
                          <?php echo $item["email"];?>
                          </td>
                          <td>
                          <?php echo $item["dor"];?>
                          </td>
                          <td><?php echo $item["amount"];?></td>
                        </tr> 
                        <?php endforeach; ?>                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              