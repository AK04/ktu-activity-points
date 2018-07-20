<div class="jumbotron">

	<!-- For results depending on points -->
	
	<?php if($_GET['option'] == 1) : ?>

	<a href="<?php echo ROOTPATH; ?>?controller=admin&action=queries" class="btn btn-outline-info" style="float: left; display: inline-block;">Back</a>
	<h1 style="text-align: center;">Students with points less than <?php echo $_GET['limit']; ?> </h1>

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

	<?php endif; ?>

	<!-- For results depending on points -->

	<?php if($_GET['option'] == 2) : ?>

        <a href="<?php echo ROOTPATH; ?>?controller=admin&action=queries" class="btn btn-outline-info" style="float: left; display: inline-block;">Back</a>
        <h1 style="text-align: center;">Activities during <?php echo $_GET['year']; ?> </h1>

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
                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

	<?php endif; ?>

</div>