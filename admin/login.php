<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/inc/login_header.php');
    //include 'inc/login_header.php'; 
    include_once ($filepath.'/../classes/Admin.php');
    
    $ad = new Admin();

?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $adminData = $ad->getAdminData($_POST);
    }

?>
            <form id="loginform" class="form-vertical" action="" method="post">
				 <div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="adminUser" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="adminPass" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <!--<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>-->
                    <span class="pull-right"><a type="submit" class="btn btn-success" /><input type="submit" name="Login"/></a></span>
                    <span>
                        <?php
                            if(isset($adminData)){
                                echo $adminData;
                            }
                        
                        ?>
                    </span>
                </div>
            </form>
        
        
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
        
            
<?php include 'inc/login_footer.php'; ?>        