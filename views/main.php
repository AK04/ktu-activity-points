<!DOCTYPE html>
<html>
<head>


	<link href="<?php echo ROOTPATH; ?>assets/css/home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo ROOTPATH; ?>assets/css/mainLogin.css">


	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <meta name="description" content="This is webpage designed to upload certificates and get it certified by the staff advisor, inorder to get KTU activity point">
    <meta name="author" content="Albin Kottaram, Alfred V Joz,Nikhil S Babu, K K Joseph ">
    <meta name="keywords" content="ktu, activity point, upload certificates, mec, MEC, Model Engineering College">
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Login Page</title>

</head>

<body>

	<div class="container">

        <?php var_dump(Controller::$view);die(); ?>
        <?php require(Controller::$view); ?>

    </div>

</body>


</html>

<!--    <?php require($view); ?> --> 