    <?php
        Session::checkSession();
        $total = $exm->getTotalRows();
    ?>
    <aside class="bg-dark">
        <div class="container text-center">
                <div class="container">
                    <div class="row">
                          
                        <div class="col-xs-12">
                			<h1>ALL Questions And Ans of <?php echo $total; ?></h1>
                    			<!-- tabs -->
                        <?php
                             $getQues = $exm->getQueByOrder();
                             if($getQues){
                                while($question = $getQues->fetch_assoc()){
                        ?>  
                    			<p>Question <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?>??</p>
                    			
                    			<?php
                    			$number = $question['quesNo'];
                    			    $answer = $exm->getAnswer($number);
                    			    if($answer){
                    			        while($result = $answer->fetch_assoc()){
                    			            
                    			       
                    			?>
                    			<input type="radio">
                    			<?php 
                    			    if($result['rightAns'] == '1'){
                    			        echo "<span style='color:red'>".$result['ans']."</span>";
                    			    }
                    			    else{
                    			    echo $result['ans'];
                    			    }
                    			?><br>
                    			<?php
                    			        }
                    			    }
                    			?>
                        
                        <?php
            			        }
            			    }
            			?>    
                		</div>
                		
                	    
                    </div>
                </div>
        </div>
    </aside>
    
   


</body>

</html>



<!-- avada db visual composer -->