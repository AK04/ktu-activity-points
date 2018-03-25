<div class="container">

  <div class="header text-center">
      <h2><b>KTU ACIVITY POINTS <br>MEC</b></h2>
  </div>

  <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    
    <div class="jumbotron">
           <div class="row">
               <div class="usrname ">
                   <label for="username">Username</label>
               </div>                           
               <div class="usrinp">
                   <input type="text" id="username" name="username" required="required" size="30" placeholder="Enter Username..">
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
