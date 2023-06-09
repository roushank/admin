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
                          <!--TO EDIT DETAILS-->
                          <th> edit details </th>
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
                          <!--TO EDIT DETAILS-->
                          <td class="py-1">
                            <a href="http://localhost/rtisc/source/admin/member/update?id=<?=$item["user_id"]; ?>&fn=<?=$item["fullname"]; ?>&em=<?=$item["email"]; ?>&pwd=<?=$item["password"]; ?>&gen=<?=$item["gender"]; ?>&dor=<?=$item["dor"]; ?>" > edit </a>
                          </td>
                        </tr> 
                        <?php endforeach; ?>                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>