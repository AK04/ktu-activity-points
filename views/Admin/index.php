<div class="jumbotron">

    <h1 class="ktu">KTU ACTIVITY POINTS-MEC</h1>

    <div style="text-align: right;">  

        <div class="username" > 
            <?php echo $_SESSION['user']; ?>
        </div>      

        <div>
            <a class="btn btn-info right" href="<?php echo ROOTPATH; ?>?controller=password" style="margin-bottom: 5px">Change Password</a>      
        </div>

        <div>
            <a class="btn btn-danger right" href="<?php echo ROOTPATH; ?>?controller=home&action=logout">Logout</a>      
        </div>

    </div> 

    <br>

    <div class="row">
        
        <div class="col-6"><a href="<?php echo ROOTPATH; ?>?controller=admin&action=pending">View Pending List</a></div>
        <div class="col-6"><a href="">View Activity Points Table</a></div>
        <div class="col-6"><a>User Creation</a></div>
        <div class="col-6"><a>hi</a></div>

    </div>

</div>
