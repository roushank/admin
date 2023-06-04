<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Plan Details</h4>
                    <p class="card-description"> </code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Name </th>
                          <th> Amount </th>
                          <th> Duration (in Months) </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($viewmodel as $item):?>
                        <tr>
                          <td class="py-1">
                            <?php echo $item["id"];?>
                          </td>
                          <td> <?php echo $item["plan_name"];?> </td>
                          <td>
                          <?php echo $item["plan_amount"];?>
                          </td>
                          <td>
                          <?php echo $item["plan_duration"];?>
                          </td>
                        </tr> 
                        <?php endforeach; ?>                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>