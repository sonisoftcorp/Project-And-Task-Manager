<?php

@$db = mysqli_connect('localhost', 'root', '', 'sonipixels');
    if (mysqli_connect_errno()) {
       echo '<p>Error: Could not connect to database.<br/>
       Please try again later.</p>';
       exit;
    }


if (isset($_POST['submit_project'])) {
	$project_name = htmlspecialchars($_POST['project_name']);
	$project_description = htmlspecialchars($_POST['project_description']);
	$project_date = htmlspecialchars($_POST['project_date']);



	//check input fields///////////////////////////////
	if (empty($project_name)) {
		
		echo'<div class="container float-top">
 				<div class="col-md-12">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Input Error : </strong>You have to input project\'s name!
						</div>
					</div>
				</div>
			</div><br><br>';

	}

	if (empty($project_description)) {
		
		echo '<div class="container float-top">
 				<div class="col-md-12">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Input Error : </strong>You have to input project\'s description!
						</div>
					</div>
				</div>
			</div><br><br>';

	}

	if (empty($project_date)) {

		echo'<div class="container float-top">
 				<div class="col-md-12">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Input Error : </strong>You have to specify the date of creating this project!
						</div>
					</div>
				</div>
			</div><br><br>';

	}


	//if input fields are fiiled
	if (!empty($project_name) && !empty($project_description) && !empty($project_date)) {


		$sql = "SELECT * FROM projects WHERE project_name = '$project_name'";

        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) == 1){

    		echo'<div class="container float-top">
				<div class="col-md-12">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Query Error : </strong>Project already exist!
					</div>
				</div>
			</div>
		</div><br><br>';
		}else{

		$sql = "INSERT INTO projects (project_name, project_description, project_date) 
			 VALUES ('$project_name', '$project_description', '$project_date')";

		$result = mysqli_query($db, $sql);

			if ($result) {

				echo'<div class="container float-top">
							<div class="col-md-12">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="alert alert-success success-alert alert-dismissable fade in mute-slide" id="alert_slide">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Success : </strong>Project added successfully!
								</div>
							</div>
						</div>	
					 </div><br><br>';


			} else {
			    echo'<div class="container float-top">
						<div class="col-md-12">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Query Error : </strong>Project not added!
							</div>
						</div>
					</div>
				</div><br><br>';

			}
		}
	}
}
// mysqli_close($db);




	if (isset($_POST['add_task'])) {
        $ptask_id = htmlspecialchars($_POST['ptask_id']);
        $task_name = htmlspecialchars($_POST['task_name']);
        $task_owner = htmlspecialchars($_POST['task_owner']);
        $task_info = htmlspecialchars($_POST['task_info']);
        $deadline = htmlspecialchars($_POST['deadline']);


          if (empty($task_name)) {
    
            echo'<div class="container float-top">
                <div class="col-md-12">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Input Error : </strong>You have to input Task\'s name!
                    </div>
                  </div>
                </div>
              </div><br><br>';

          }

          if (empty($task_owner)) {
            
            echo '<div class="container float-top">
                <div class="col-md-12">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Input Error : </strong>You have to input a resposible owner!
                    </div>
                  </div>
                </div>
              </div><br><br>';

          }

          if (empty($task_info)) {
            
            echo '<div class="container float-top">
                <div class="col-md-12">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Input Error : </strong>You have to input task\' information!
                    </div>
                  </div>
                </div>
              </div><br><br>';

          }

          if (empty($deadline)) {

            echo'<div class="container float-top">
                <div class="col-md-12">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Input Error : </strong>You have to specify a deadline!
                    </div>
                  </div>
                </div>
              </div><br><br>';

          }


          if (!empty($task_name) && !empty($task_owner) && !empty($task_info) && !empty($deadline)) {

            $sql = "INSERT INTO tasks (ptask_id, task_name, task_owner, task_info, deadline) 
               VALUES ('$ptask_id', '$task_name', '$task_owner', '$task_info', '$deadline')";

            $result = mysqli_query($db, $sql);

            if ($result) {

              echo'<div class="container float-top">
                    <div class="col-md-12">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                      <div class="alert alert-success success-alert alert-dismissable fade in mute-slide" id="alert_slide">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success : </strong>Task added successfully!
                      </div>
                    </div>
                  </div>  
                 </div><br><br>';


            }else{
                echo'<div class="container float-top">
                  <div class="col-md-12">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="alert alert-danger danger-alert alert-dismissable fade in mute-slide" id="alert_slide">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Query Error : </strong>Task not added!
                    </div>
                  </div>
                </div>
              </div><br><br>';

            }
          }
        }

?>