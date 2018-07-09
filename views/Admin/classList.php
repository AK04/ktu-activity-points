<div class="jumbotron">
	
    <a href="<?php echo ROOTPATH; ?>?controller=admin" class="btn btn-outline-info" style="float: left; display: inline-block;">Back</a>
	<h1 style="text-align: center;">Class List - <?php echo $_SESSION['class']; ?> </h1>

	<br>
	<br>

	<table class="table table-striped" style="text-align: center;">

        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col"><a href="https://github.com/AK04" target="_blank" style="color: white;">S</a>TUDENT</th>
                <th scope="col">TOTAL POINTS</th>
                <th scope="col">REGISTER NO.</th>
                <th scope="col">ADMISSION NO.</th>
            </tr>
        </thead>

        <tbody>

            <?php $i = 0; foreach($viewmodel as $item): $i += 1; ?>

            <tr>
                <th><?php echo $i ?></th>
                <th><a href="<?php echo ROOTPATH; ?>?controller=admin&action=studentProfile&student=<?php echo $item['username']; ?>"><?php echo $item['username']; ?></a></th>
                <th><?php echo $item['TotalPoints']; ?></th>
                <th><?php echo $item['RegisterNo']; ?></th>
                <th><?php echo $item['AdmNo']; ?></th>
            </tr>

            <?php endforeach; ?>

        </tbody>

    </table>


</div>