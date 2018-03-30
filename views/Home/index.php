<div class="jumbotron">

    <h1>KTU ACTIVITY POINTS-MEC</h1>

    <br>

    <div class="text-center"> 
        <a class="btn btn-success btn-lg" href="<?php echo ROOTPATH; ?>?controller=add"> Claim Activity Points</a> 
    </div>            

    <br>


    <table class="table table-striped">

        <thead class="thead-dark">
            <tr>
                <th scope="col">SL NO.</th>
                <th scope="col">ACTIVITY</th>
                <th scope="col">POINTS</th>
                <th scope="col">STATUS</th>
                <th scope="col">DATE ADDED</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach($viewmodel as $item) : ?>
            <tr>
                <th><?php echo $item['No']; ?></th>
                <th><?php echo $item['Activity']; ?></th>
                <th><?php echo $item['Points']; ?></th>
                <th><?php echo $item['Approvad']; ?></th>
                <th><?php echo $item['AddDate']; ?></th>
            </tr>
            <?php endforeach; ?>

        </tbody>

    </table>

</div>
