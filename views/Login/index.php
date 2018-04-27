<div class="card">
    
    <div class="header text-center">
        
        <h2><b>KTU ACIVITY POINTS <br>MEC</b></h2>
        
        <hr>
        
    </div>    
    
    <div class="panel panel-primary">
        
        <div class="panel-body">
            
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                
                <p class="lead">Please login with your identifiers:</p>
                
                <div class="form-group">
                    
                    <input type="text" name="username" class="form-control" placeholder="Username"/>
                    
                </div>
                                    
                <div class="form-group">
                
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                </div>
                
                <div class="form-group">
                    
                    <select class="form-control" name="class">
                        
                        <option value="" disabled selected>Select class..</option>
                        
                        <?php foreach($_SESSION['class'] as $item): ?>
                        
                        <option value="<?php echo $item['Class']; ?>"><?php echo $item['Class']; ?></option>
                        
                        <?php endforeach; ?>
                        
                    </select>
                    
                </div>
                
            <input class="btn btn-primary loginBtn" type="submit" name="submit" value="Login">
                
        </form>
            
    </div>
        
</div>
