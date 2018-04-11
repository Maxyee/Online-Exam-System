<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/inc/index_header.php');
    include_once ($filepath.'/../classes/Exam.php');
    
    $exm = new Exam();

?>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $addQue = $exm->addQuestions($_POST);
    }
    //get Total Question
    $total = $exm->getTotalRows();
    $next = $total+1;
?>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
            <h1>Add Question Here:</h1>
<?php
  if(isset($addQue)){
    echo $addQue;
  }
?>
        </div>
        <div class="widget-box">
            <form action="" method="post">
                <table>
                    <tr>
                      <td>Question No</td>
                      <td>:</td>
                      <td><input type="number" value="<?php
                          if(isset($next)){
                            echo $next;
                          } 
                      ?>" name="quesNo"/></td>
                    </tr>
                    
                    <tr>
                      <td>Question details</td>
                      <td>:</td>
                      <td><input type="text" name="ques" value="" placeholder="Enter Question.." required/></td>
                    </tr>
                    
                    <tr>
                      <td>Choice One</td>
                      <td>:</td>
                      <td><input type="text" name="ans1" value="" placeholder="Enter Choice One.." required/></td>
                    </tr>
                    
                    <tr>
                      <td>Choice Two</td>
                      <td>:</td>
                      <td><input type="text" name="ans2"  placeholder="Enter Choice Two.." required/></td>
                    </tr>
                    
                    <tr>
                      <td>Choice Three</td>
                      <td>:</td>
                      <td><input type="text" name="ans3"  placeholder="Enter Choice Three.." required/></td>
                    </tr>
                    
                    <tr>
                      <td>Choice Four</td>
                      <td>:</td>
                      <td><input type="text" name="ans4"  placeholder="Enter Choice Four.." required/></td>
                    </tr>
                    
                    <tr>
                      <td>Correct No</td>
                      <td>:</td>
                      <td><input type="number" name="rightAns" placeholder="Enter Right Ans No.." required/></td>
                    </tr>
                    
                    <tr>
                      <td colspan="3" align="center">
                        <input type="submit" value="Add A Question" required/>
                      </td>
                    </tr>
                </table>
            </form>
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