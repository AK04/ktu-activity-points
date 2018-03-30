<!DOCTYPE html>
<html>
<head>

<!--
	<link href="<?php echo ROOTPATH; ?>assets/css/boostrap.css" rel="stylesheet" type="text/css">
-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <meta name="description" content="This is webpage designed to upload certificates and get it certified by the staff advisor, inorder to get KTU activity point">
    <meta name="author" content="Albin Kottaram, Alfred V Joz,Nikhil S Babu, K K Joseph ">
    <meta name="keywords" content="ktu, activity point, upload certificates, mec, MEC, Model Engineering College">
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Activity Points</title>

</head>

<body style="margin-top: 5%;">

	<div class="container">

        <?php require(Controller::$view); ?>

    </div>

</body>


</html>

<!--   require($view);
    
        var_dump(Controller::$view);die();
 ?> --> 