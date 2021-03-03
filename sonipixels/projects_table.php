<?php require_once("header.php"); ?>
<?php require_once("query.php"); ?>
      <div class="col-sm-11" style="margin-top: 100px;">
        <div class="col-sm-12 mute-slide slide-resource general">
          <div class="container">
            <h2 class="table_title" style="font-weight: 600 !important; text-transform: uppercase;">projects</h2>
            <hr>
            <div class="table-responsive" style="padding: 5px;">
              <p style="display:inline-flex;"><b>Showing informations on projects and their attached tasks</b>
                <div class="effects" style="float: right">&nbsp;
                  <a href="Dashboard.php">
                    <button type="button" class="btn"><i class="fa fa-home"></i>&nbsp;Home</button>
                  </a>&nbsp;
                  <button type="button" class="btn" onclick="openSearch()"><i class="fa fa-search"></i> Search</button>&nbsp;
                  <a href="javascript:void(0)">
                    <button type="button" class="btn" data-toggle="modal" data-target="#addProjects"><i class="fa fa-plus"></i> Add Projects</button>
                  </a>&nbsp;
                  <div class="label">Projects:&nbsp;<b>7</b></div>
                </div>
              </p>
                    
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Projects</th>
                    <th>Tasks</th>
                    <th>Tasks Owner</th>
                    <th>Date Created</th>
                  </tr>
                </thead>
                <tbody>


              <?php

                $pro_sql = "SELECT project_id, project_name, project_description, project_date FROM projects";

                $pro_result = mysqli_query($db, $pro_sql);

                  if (mysqli_num_rows($pro_result) > 0) {

                    // output data of each row
                    while($pro_row = mysqli_fetch_assoc($pro_result)) {

                      $project_id = $pro_row['project_id'];
                      $project_name = $pro_row['project_name'];
                      $project_description = $pro_row['project_description'];
                      $project_date = $pro_row['project_date'];


                      $sql = "SELECT * FROM tasks WHERE ptask_id = '$project_id'";

                      $result = mysqli_query($db, $sql);

                        if (mysqli_num_rows($result) > 0) {

                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {

                            $task_name = $row['task_name'];
                            $task_owner =$row['task_owner'];
                            $task_info =$row['task_info'];
                            $deadline =$row['deadline'];
                          }
                        }



                    echo '<tr>
                            <td>'.$project_id.'</td>
                            <td>'.$project_name.'</td>
                            <td>'.$task_name.'</td>
                            <td>'.$task_owner.'</td>
                            <td>'.$project_date.'</td>
                          </tr>
                        </tbody>';
                    }
                  }
              ?>
              </table>
            </div>
          </div>
        </div>

        <div class="modal fade" id="addProjects" role="dialog">
          <div class="modal-dialog">
              <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Projects</h4>
              </div>
              <div class="modal-body">
                <div class="create-wrapper container-fluid">
                  <form method="POST" action="#">
                    <div class="thumbnail">
                      <fieldset>
                        <legend>Projects Name</legend>
                        <div class="col-sm-6">
                          <label for="text">Name</label>
                          <input class="form-control" type="text" id="project_name" name="project_name" placeholder="Enter Projects Name" autofocus>
                          <br>
                          <label for="text">Project Description</label>
                          <textarea cols="40" rows="2" name="project_description" id="project_description" placeholder="Project Description"></textarea>
                          <br>
                          <label for="text">Date Created</label>
                          <input class="form-control" type="date" name="project_date" id="project_date">
                        </div>
                      </fieldset>
                    </div>
                    <div class="form-group" style="float: left;">
                      <button type="submit" class="btn btn-md" name="submit_project" id="submit_project">
                        <b><i class="fa fa-plus"></i>&nbsp;ADD</b></button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php require_once("footer.php"); ?> 
<script src="scripts/js/plugins.js"></script>
<script src="scripts/js/main.js"></script>

<script>
  function showPass(){
  document.getElementById("pass").style.display = "block";
  document.getElementById("yes").style.display = "none";

}
    // $('#open-search').click(function(){
    //     $('#custom-search').show();
    // });

    // $('#close-search').click(function() {
    //     $('#custom-search').hide();
    // })

</script>
</body>
</html>
