<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Session.php');
    Session::init();
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/Format.php');
    
    spl_autoload_register(function($class){
        include_once "classes/".$class.".php";
    });
    
    $db = new Database();
    $fm = new Format();
    $usr = new User();
    $exm = new Exam();
    $pros = new Process();

?>
<?php
     
      header("Cache-Control: no-cache, must-revalidate"); 
      header("Pragma: no-cache"); 
      header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
      header("Cache-Control: max-age=2592000"); 
   
?>
<?php
    Session::checkSession();
    $userid = Session::get("userid")
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $updateUser = $usr->updateUserData($userid, $_POST);
    }
?>
    <aside class="bg-dark">
        <div class="container text-center">
                <div class="container">
                    <div class="row">
                        <?php
                            $getData = $usr->getUserData($userid);
                            if($getData){
                                /*while($result = $getData->fetch_assoc()){
                                    
                                }*/
                                $result = $getData->fetch_assoc()
                            
                            
                        ?>    
                        <div class="col-xs-12">
                            <h1>Your Profile</h1>
                            <h3>
                            <?php
                                if(isset($updateUser)){
                                    echo $updateUser;
                                }
                            ?>
                            </h3>
                            <div class="profile"></div>
                            <center>
                            <form action="" method="post">
                			<table>
                			    <tr>
                			        <td>Username</td>
                			        <td><input style="color:black" type="text" name="username" value="<?php echo $result['username']; ?>"/></td>
                			    </tr>
                			    <tr>
                			        <td>Firstname</td>
                			        <td><input style="color:black" type="text" name="firstname" value="<?php echo $result['firstname']; ?>"/></td>
                			    </tr>
                			    <tr>
                			        <td>Lastname</td>
                			        <td><input style="color:black" type="text" name="lastname" value="<?php echo $result['lastname']; ?>"/></td>
                			    </tr>
                			    <tr>
                			        <td>Email</td>
                			        <td><input style="color:black" type="text" name="email" value="<?php echo $result['email']; ?>"/></td>
                			    </tr>
                			    
                			    <tr>
                			        <td></td>
                			        <td><input style="color:black" type="submit" value="Update"/></td>
                			    </tr>
                			</table>
<?php } ?>
                			</form> 
                			</center>
                		</div>
                		
                	    
                    </div>
                </div>
        </div>
    </aside>