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
        
        <div class="col-12 cent" style="margin-bottom: 5px;">
            <a class="btn btn-primary btn-lg" style="width: 200px; margin-right: 5px;" href="<?php echo ROOTPATH; ?>?controller=sadmin&action=advisorCreation">New Staff Advisor</a>
 
    </div>

</div>
