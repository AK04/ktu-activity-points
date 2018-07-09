<div class="jumbotron">


	<a href="<?php echo ROOTPATH; ?>?controller=admin" class="btn btn-outline-info" style="float: left; display: inline-block;">Back</a>
    <h1 class="ktu">Create & Delete Users - <?php echo $_SESSION['class']; ?></h1>

    <br>
    <br>


    <h2> Add Users </h2>

    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

		<div class="form-group">

            <label class="col-form-label">Number of students to be added:</label>
            <input type="text" name="number" class="form-control">
        </div>


        <input class="btn btn-primary" type="submit" name="submit" value="Add"> 
        <a class="btn btn-danger" href="<?php echo ROOTPATH; ?>?controller=admin"> Cancel </a>

	</form>

	<br>

	<h2> Delete Users </h2>

    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

		<div class="form-group">

            <label class="col-form-label">Number of students to be removed:</label> <br>

            <label> From: </label> 
            <input type="text" name="from"> 
            <label> Till: </label>
            <input type="text" name="till">

        </div>


        <input class="btn btn-primary" type="submit" name="submit" value="Delete"> 
        <a class="btn btn-danger" href="<?php echo ROOTPATH; ?>?controller=admin"> Cancel </a>

	</form>

</div>