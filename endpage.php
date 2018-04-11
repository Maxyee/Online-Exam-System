<?php include 'inc/endpage_header.php'; ?>

<!-- endpage content start here -->
<?php
    Session::checkSession();
?>
 <aside class="bg-dark">
        <div class="container text-center">
            
            
        <div class="container">
            <div class="row">
            
                <div class="col-xs-12">
		  
			    <!-- tabs -->
		          <h1>Your Result in Bangla: </h1>
		          <p>Congrats ! You have just completed the test.</p>
		          <p>Final Score: 
		              <?php
		                if(isset($_SESSION['score'])){
		                    echo $_SESSION['score'];
		                    unset($_SESSION['score']);
		                }
		              ?>
		          </p>
		            <div>
		                
                        <a class="btn btn-default btn-xl bstyle" href="viewans.php">View Ans</a>
                        <a class="btn btn-default btn-xl bstyle" href="examlist.php">Start Again</a>
                        
		            </div>
		            
			<!-- /tabs -->
		        </div>
    	    </div>

        </div>
            
            
            
            
            
        </div>
    </aside>

<!-- endpage content end here -->




<?php include 'inc/endpage_footer.php'; ?>   