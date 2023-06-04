<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Transcation Details</h4>
                    <p class="card-description"> </code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Order Id </th>
                          <th> Amount </th>
                          <th> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                          if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) { ?>
                        <tr>
                          <td class="py-1">
                            <?php echo $row["id"];?>
                          </td>
                          <td> <?php echo $row["yname"];?> </td>
                          <td>
                          <?php echo $row["email"];?>
                          </td>
                          <td> <?php echo $row["order_id"];?> </td>
                          <td> ₹ <?php echo $row["amount"];?> </td>
                          <td> <?php echo $row["ystatus"];?> </td>
                        </tr>
                        <?php } } else { echo "0 results"; }
$conn->close();?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>