<div class="jumbotron">

    <div class="header text-center">
      <h2><b>KTU ACIVITY POINTS <br>MEC</b></h2>
    </div>    

    <div class="panel panel-primary">

        <div class="panel-body">

            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

                <div class="form-group">

                    <label class="col-form-label">Username</label>
                    <input type="text" name="username" class="form-control" />

                </div>

                <div class="form-group">

                    <label class="col-form-label">Password</label>
                    <input type="password" name="password" class="form-control" />

                </div>

                <div class="form-group">

                    <label class="col-form-label" >Class:</label>

                    <select class="form-control" name="class">

                        <?php foreach($_SESSION['class'] as $item): ?>
                        <option value="<?php echo $item['Class']; ?>"><?php echo $item['Class']; ?></option>
                        <?php endforeach; ?>

                    </select>

                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Login">

            </form>

        </div>

    </div>
  
</div>
