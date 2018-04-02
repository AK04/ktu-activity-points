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

    <div class="text-center"> 
        <a class="btn btn-primary btn-lg" href="<?php echo ROOTPATH; ?>?controller=add"> Claim Activity Points</a> 
    </div>            

    <br>

    <table class="table table-striped" style="text-align: center;">

        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col"><a href="https://github.com/AK04" target="_blank" style="color: white;">A</a>CTIVITY</th>
                <th scope="col">POINTS</th>
                <th scope="col">ST<a href="https://github.com/Joe1912" target="_blank" style="color: white;">A</a>TUS</th>
                <th scope="col">D<a href="https://github.com/alfvj17" target="_blank" style="color: white;">A</a>TE <a href="https://github.com/Nikhil713" target="_blank" style="color: white;">A</a>DDED</th>
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
            </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</div>
