<?php require_once("header.php");
      include_once("query.php"); 

 ?>
  <div class="container-fluid" id="top-margin">
    <div class="col-sm-12">
      <div class="col-sm-11">
        <h2 class="publish"><span style="font-weight: 600 !important; text-transform: capitalize;"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</span> - Projects</h2><hr>
        <div class="col-sm-12 mute-slide slide-resource general">
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


      echo '<div class="col-sm-3">
              <div class="resource">
                <h1><i class="fa fa-gears"></i></h1>
                <h2>'.$project_name.'</h2>
                <p><i class="fa fa-circle"></i>'.$project_date.'</p><br>
                <button type="button" class="btn edit" data-toggle="modal" data-target="#myModal'.$project_id.'">VIEW</button>
              </div>
            </div>';

      echo '<div class="modal fade" id="myModal'.$project_id.'" role="dialog">
              <div class="modal-dialog">

                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">View Project</h4>
                  </div>
                  <div class="modal-body">
                    <div class="create-wrapper container-fluid">
                        <div class="thumbnail">
                          <fieldset>
                            <legend><h3>Projects Info</h3></legend>
                            <div class="col-sm-12">
                              <div class="resource">
                                <h1><i class="fa fa-gears"></i></h1>
                                <h2>'.$project_name.'</h2>
                              </div>
                            </div>
                            <legend style="padding-top: 50px !important;"><b>Projects Task(s)</b></legend>';

    $sql = "SELECT * FROM tasks WHERE ptask_id = '$project_id'";

    $result = mysqli_query($db, $sql);

      if (mysqli_num_rows($result) > 0) {

        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

          $task_name = $row['task_name'];
          $task_owner =$row['task_owner'];
          $task_info =$row['task_info'];
          $deadline =$row['deadline'];

                    echo '<p>Task Owner: <b>'.$task_owner.'</b></p>
                          <div class="col-sm-12">
                            <h2>'.$task_name.'</h2>
                            <br>
                            <p>'.$task_info.'</p>
                            <br>
                            <label for="text" style="background-color:#FA4225;">Deadline: '.$deadline.'</label>
                            <br>
                            <hr>
                          </div>';

        }
      }
                            
                    echo '</fieldset>
                        </div>
                        <div class="create-wrapper container-fluid">
                          <form method="POST" action="Dashboard.php">
                            <div class="thumbnail">
                              <fieldset>
                                <legend>Add Task</legend>
                                <div class="col-sm-6">
                                  <label for="text">Project ID</label>
                                  <select name="ptask_id" id="ptask_id">
                                    <option>'.$project_id.'</option>
                                  </select>
                                  <br><br>
                                  <label for="text">Task Name</label>
                                  <input type="text" name="task_name" placeholder="Enter Task Name">
                                  <br><br>
                                  <label for="text">Task Owner</label>
                                  <input type="text" name="task_owner" placeholder="Enter Task Owner">
                                  <br><br>
                                  <label for="text">Description</label>
                                  <textarea cols="40" rows="2" name="task_info" id="task_info" placeholder="Task Info"></textarea>
                                  <br><br>
                                  <label for="text">Deadline</label>
                                  <input type="date" name="deadline" id="deadline">
                                  <br><br>
                                </div>
                              </fieldset>
                            </div>
                            <div class="form-group" style="float: left;">
                              <button type="submit" class="btn btn-md" name="add_task"><b><i class="fa fa-plus"></i>&nbsp;ADD Task</b></button>
                            </div>
                          </form>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>';



      }
    }

?>
          
          <div class="col-sm-3">
            <div class="resource" style="padding:40px" data-toggle="modal" data-target="#addProjects">
              <h1 style="font-size:158px;"><i class="fa fa-plus"></i></h1>
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
                    <form method="POST" action="Dashboard.php">
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
      </div>
    </div>
       <?php require_once("footer.php"); ?>     
<script src="scripts/js/plugins.js"></script>
<script src="scripts/js/main.js"></script>
<script>
  var input = document.getElementById("input-search");
  var wrapper = document.getElementById("custom-search");
  var side_menu =  document.getElementById("menu");
  var window_modal = document.getElementById("modal");
    //open search function
    function openSearch() {
       if (window.innerWidth > 768) {
        wrapper.style.width = "600px";
        input.style.display = "block";
        input.style.opacity = "1";
      }
      if (window.innerWidth <= 768) {
        wrapper.style.width = "88%";
        input.style.display = "block";
        input.style.opacity = "1";
      }
    }
    //close search function
    function closeSearch() {
        wrapper.style.width = "0px";
        input.style.display = "none";
    }
    //open menu function
    function openMenu() {
       document.getElementById("menu").style.left = "0px";
       document.getElementById("overlay").style.display = "block";
    }
    //close menu function
    function closeMenu() {
        document.getElementById("menu").style.left = "-196px";
        document.getElementById("modal").style.display = "none";
    }
</script>
<script>
    // $('#open-search').click(function(){
    //     $('#custom-search').show();
    // });

    // $('#close-search').click(function() {
    //     $('#custom-search').hide();
    // })

</script>
</body>
</html>
