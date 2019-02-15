<div class="jumbotron">
	
    <a href="<?php echo ROOTPATH; ?>?controller=admin" class="btn btn-outline-info" style="float: left; display: inline-block;">Back</a>
	<h1 style="text-align: center;">Student Profile - <?php echo $_GET['student']; ?> </h1>

	<br>
    <br>

	<table class="table table-striped" style="text-align: center;">

        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">ACTIVITY</th>
                <th scope="col">POINTS</th>
                <th scope="col">DOCUMENTS</th>
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
                <th>
                    <a class="btn btn-success" target="_blank" href="<?php echo ROOT_URL.$item['Document'];?>">View</a>
                </th>
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