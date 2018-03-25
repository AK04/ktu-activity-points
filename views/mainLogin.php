<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta name="description" content="This is webpage designed to upload certificates and get it certified by the staff advisor, inorder to get KTU activity point">
        <meta name="author" content="Albin Kottaram, Alfred V Joz,Nikhil S Babu, K K Joseph ">
        <meta name="keywords" content="ktu, activity point, upload certificates, mec, MEC, Model Engineering College">
        <meta charset="UTF-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="<?php echo ROOTPATH; ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo ROOTPATH; ?>assets/css/mainLogin.css">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    </head>


     <body>
         <div class="container">
             <div class="header text-center">
                 <h2><b>KTU ACIVITY POINTS <br>MEC</b></h2>
             </div>
             <form action="#" method="POST">
              <div class="jumbotron">
                     <div class="row">
                         <div class="usrname ">
                             <label for="username">Username</label>
                         </div>                           
                         <div class="usrinp">
                             <input type="text" id="username" name="USERNAME" required="required" size="30" placeholder="Enter Username..">
                         </div>
                         </div>
                         <div class="row">
                         <div class="password  ">
                              <label for="password">Password</label>
                          </div>                           
                          <div class="passinp" style="margin-top:1%">
                              <input type="password" id="password" name="PASSWORD" required="required" size="30" placeholder="Enter Password..">
                          </div> 
                          <div class="button ">
                              <button type="submit" class="btn btn-primary btn-lg"> Login</button>
                          </div>
                  </div>
              </div>
              </form>
         </div>

     </body>
    
    
</html>