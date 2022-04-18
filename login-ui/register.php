

<!DOCTYPE html>

<?php 
include("conn.php"); ?>



<html lang="en">
<head>
	<title>CDK EXAMINEE LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="login-ui/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/main.css">
</head>
<body>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(login-ui/images/bg-01.jpg);">
					<span class="login100-form-title-1" style="float:right;">
						Examinee Registration
					</span>
				</div>

				<form method="post" action="query/registerExe.php" class="login100-form validate-form">
                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" name="code" id="code" maxlength="6" class="form-control" placeholder="Enter Code Again" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                        <label>Fullname</label>
                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Fullname" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="emailaddress" id="fullname" class="form-control" placeholder="Enter Email Address" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                        <label>Birthdate</label>
                        <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off" >
                      </div>

                      <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="gender" id="gender">
                          <option value="0">Select gender</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>
            
                      <div class="form-group">
                        <label>Course</label>
                        <select class="form-control" name="course" id="course">
                          <option value="0">Select course</option>
                          <?php 
                            $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                            while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                              <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                            <?php }
                           ?>
                        </select>
                      </div>
            
                      <div class="form-group">
                        <label>Year Level</label>
                        <select class="form-control" name="year_level" id="year_level">
                          <option value="0">Select year level</option>
                          <option value="first year">First Year</option>
                          <option value="second year">Second Year</option>
                          <option value="third year">Third Year</option>
                          <option value="fourth year">Fourth Year</option>
                        </select>
                      </div>

					<div class="container-login100-form-btn" align="right">
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>

				</form>
                <a href="query/logoutExe.php" style="margin: 10px;" class="btn btn-danger">Go Back</a>
			</div>
		</div>
	</div>
	
	<script src="login-ui/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-ui/vendor/animsition/js/animsition.min.js"></script>
	<script src="login-ui/vendor/bootstrap/js/popper.js"></script>
	<script src="login-ui/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login-ui/vendor/select2/select2.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="login-ui/vendor/countdowntime/countdowntime.js"></script>
	<script src="login-ui/js/main.js"></script>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/sweetalert.js"></script>

</body>
</html>





      