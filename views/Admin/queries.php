<div class="jumbotron">

	<a href="<?php echo ROOTPATH; ?>?controller=admin" class="btn btn-outline-info" style="float: left; display: inline-block;">Back</a>
	<h1 style="text-align: center;">Run Queries</h1>

	<br>
    <br>

    <h2>Check for students according to points</h2>

    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

		<div class="form-group">

            <label class="col-form-label">Having Points upto: </label>
            <input type="text" name="limit" class="form-control">
        </div>


        <input class="btn btn-primary" type="submit" name="submit" value="Search">

	</form>

</div>