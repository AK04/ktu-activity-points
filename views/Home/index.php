<div class="jumbotron">

    <div style="text-align: right;">

        <div > 
            <?php echo $_SESSION['user']; ?>
        </div>

        <div>
            <a class="btn btn-danger right" href="<?php echo ROOTPATH; ?>?controller=home&action=logout">Logout</a>      
        </div>

    </div>

    <h1 style="text-align: center;">KTU ACTIVITY POINTS-MEC</h1>

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
