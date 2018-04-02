<div class="jumbotron">

    <div class="header">
      <h2>Change Password</h2>
    </div>    

    <div class="panel panel-primary">

        <div class="panel-body">

            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

                <div class="form-group">

                    <label class="col-form-label">Current Password:</label>
                    <input type="password" name="current_pass" class="form-control" />

                </div>

                <div class="form-group">

                    <label class="col-form-label">New Password:</label>
                    <input type="password" name="new_pass" class="form-control" />

                </div>

                <div class="form-group">

                    <label class="col-form-label">Repeat New Password:</label>
                    <input type="password" name="check_new_pass" class="form-control" />

                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">

            </form>

        </div>

    </div>
  
</div>
