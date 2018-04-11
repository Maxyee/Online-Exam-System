<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/inc/index_header.php');
    include_once ($filepath.'/../classes/User.php');
    
    $usr = new User();

?>
<?php
  if(isset($_GET['dis'])){
      $dblid = (int)$_GET['dis'];
      $dblUser = $usr->disableUser($dblid);
  }

  if(isset($_GET['ena'])){
      $eblid = (int)$_GET['ena'];
      $eblUser = $usr->enableUser($eblid);
  }
  
  if(isset($_GET['del'])){
      $delid = (int)$_GET['del'];
      $delUser = $usr->deleteUser($delid);
  }
  
?>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
            <h1>Manage Users</h1>
<?php
  if(isset($dblUser)){
      echo $dblUser;
  }
  
  if(isset($eblUser)){
      echo $eblUser;
  }
  
  if(isset($delUser)){
      echo $delUser;
  }
?>
        </div>
        <div class="widget-box">
          <table>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>fristname</th>
              <th>lastname</th>
              <th>email</th>
              <th>Action</th>
            </tr>
<?php
  $userData = $usr->getAllUser();
  if($userData){
      $i = 0;
      while($result = $userData->fetch_assoc()){
      $i++;


?>
            <tr>
                <td>
                <?php 
                  if($result['status'] == '1'){
                      echo "<span style='color:red'>".$i."</span>";
                  }
                  else{
                    echo $i;
                  }
                ?>
                </td>
              <td><?php echo $result['username']; ?></td>
              <td><?php echo $result['firstname']; ?></td>
              <td><?php echo $result['lastname']; ?></td>
              <td><?php echo $result['email']; ?></td>
              <td>
                <?php if($result['status'] == '0' ){ ?>   
                          
                  <a onclick="return confirm('Are you sure to Disable?')" href="?dis=<?php echo $result['userid']; ?>">Disable</a>||

                <?php  } else {  ?>
                
                  <a onclick="return confirm('Are you sure to Enable?')" href="?ena=<?php echo $result['userid']; ?>">Enable</a>||
  
                <?php } ?>
                
                  <a onclick="return confirm('Are you sure to remove?')" href="?del=<?php echo $result['userid']; ?>">Remove</a>
              </td>
            
            </tr>
<?php } 
    
  } 

?>            
          </table>
          
        </div>
        
      </div>
      <div class="span6">
        
      </div>
    </div>
  </div>
</div>



<!--end-main-container-part-->




<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/inc/index_footer.php');
?>