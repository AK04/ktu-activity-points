<div class="jumbotron">
	
	<div>
		

		<h1 class="heading">Update your information</h1>

		</br>

		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

			<div class="form-group">

                <label class="col-form-label">Register No:</label>
                <input type="text" name="register" class="form-control" value="<?php echo $_SESSION['register']; ?>">
                <small class="text-muted">Eg: MDL17CS013</small>

            </div>

            <div class="form-group">

                <label class="col-form-label">Roll No:</label>
                <input type="text" name="rollno" class="form-control" value="<?php echo $_SESSION['rollno']; ?>">
                <small class="text-muted">Eg: CSU17206</small>

            </div>

            <div class="form-group">

                <label class="col-form-label">Admission No:</label>
                <input type="text" name="admno" class="form-control" value="<?php echo $_SESSION['admno']; ?>">
                <small class="text-muted">Eg: 7924/17</small>

            </div>

            <!--
            <div class="form-group">

                <label class="col-form-label">Class:</label>
                <input type="text" name="class" class="form-control" value="<?php echo $_SESSION['class']; ?>">
                <small class="text-muted">Eg: CS15B, EE16A, etc. (Branch followed by the year of joining and Division. For EE and EB - division is A.)</small>

            </div>
            -->
            <input class="btn btn-primary" type="submit" name="submit" value="Update"> 
            <a class="btn btn-danger" href="<?php echo ROOTPATH; ?>?controller=home" >Cancel</a>

		</form>

	</div>

</div>