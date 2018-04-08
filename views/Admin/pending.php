<div class="jumbotron">

    <h1 class="ktu">Pending List - <?php echo $_SESSION['class']; ?></h1>

    <br>
    <br>

    <table class="table table-striped" style="text-align: center;">

        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">ACTIVITY</th>
                <th scope="col">POINTS</th>
                <th scope="col">DOCUMENT</th>
                <th scope="col">NOTES</th>
                <th scope="col">USER</th>
                <th scope="col">COMMENTS</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>

        <tbody>

            <?php $i = 0; foreach($viewmodel as $item): $i += 1;  ?>

            <tr>
                <th><?php echo $i ?></th>
                <th><?php echo $item['Activity']; ?></th>
                <th><?php echo $item['Points']; ?></th>
                <th>
                    <a class="btn btn-success" target="_blank" href="<?php echo ROOT_URL.$item['Document'];?>">View</a>
                </th>
                <th><?php echo $item['Notes']; ?></th>                
                <th><?php echo $item['User']; ?></th>
                <th><input type="text" name="comments"></th>
                <th class="btn-group-vertical">
                    <a class="btn btn-success btn-sm" href="<?php echo ROOTPATH; ?>?controller=admin&action=changeStatus&change=1&no=<?php echo $item['No']; ?>" style="margin-bottom: 2px;" >Accept</a>
                    <a class="btn btn-danger btn-sm" href="<?php echo ROOTPATH; ?>?controller=admin&action=changeStatus&change=2&no=<?php echo $item['No']; ?>">Reject</a>
                </th>
            </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</div>