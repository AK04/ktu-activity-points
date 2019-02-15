<div class="jumbotron">

    <h1 class="ktu">KTU ACTIVITY POINTS-MEC</h1>
       <div class="text-left"> 
       <?php echo $_SESSION['user']; ?> <br>
                <?php echo $_SESSION['name']; ?>
     </div>      

    <div style="text-align: right;">  

         

        <div>
            <a class="btn btn-info right" href="<?php echo ROOTPATH; ?>?controller=password" style="margin-bottom: 5px">Change Password</a>      
        </div>


        <div>
            <a class="btn btn-info right" href="<?php echo ROOTPATH; ?>?controller=home&action=updateInfo" style="margin-bottom: 5px">Update Info</a>      
        </div>        

        <div>
            <a class="btn btn-danger right" href="<?php echo ROOTPATH; ?>?controller=home&action=logout">Logout</a>      
        </div>

    </div>    

    <br>
  
    <div class="text-center"> 
        <a class="btn btn-primary btn-lg" href="<?php echo ROOTPATH; ?>?controller=add"> Claim Activity Points</a> 
    </div>            

    <br>

    <table class="table table-striped" style="text-align: center;">

        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">ACTIVITY</th>
                <th scope="col">POINTS</th>
                <th scope="col">STATUS</th>
                <th scope="col">DATE ADDED</th>
                <th scope="col">COMMENTS</th>
            </tr>
        </thead>

        <tbody>

            <?php $i = 0; foreach($viewmodel as $item): $i += 1; ?>

            <tr>
                <th><?php echo $i ?></th>
                <th><?php echo $item['Activity']; ?></th>
                <th><?php echo $item['Points']; ?></th>

                <th><?php 

                if ($item['Approved'] == 0)
                    echo "Waiting";
                elseif ($item['Approved'] == 1) 
                    echo "Approved";
                else
                    echo "Rejected";

                ?></th>

                <th><?php echo $item['AddDate']; ?></th>
                <th><?php 
                    if ($item['Comments'] == null) 
                         echo "No comments";                    
                    else
                        echo $item['Comments'];
                ?></th>

            </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</div>
