   <div class="row">
   <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Transcation Details</h4>
                    <p class="card-description"> </code>
                    </p>
                    <table class="table table-striped" id="userTable">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Order Id </th>
                          <th> Amount </th>
                          <th> Status </th>
                          <th> Date </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($viewmodel as $item):?>
                        <tr>
                          <td class="py-1">
                            <?php echo $item["id"];?>
                          </td>
                          <td> <?php echo $item["yname"];?> </td>
                          <td>
                          <?php echo $item["email"];?>
                          </td>
                          <td> <?php echo $item["order_id"];?> </td>
                          <td> ₹ <?php echo $item["amount"];?> </td>
                          <td> <?php echo $item["ystatus"];?> </td>
                          <td> <?php echo $item["ydate"];?> </td>
                        </tr> 
                        <?php endforeach; ?>                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              </div>