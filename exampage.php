<?php include 'inc/exampage_header.php'; ?>

<!-- exampage content start -->    
    <?php
        Session::checkSession();
    
        if (isset($_GET['q'])) {
            $number = (int) $_GET['q'];
            //$newpage = $number + 1;
        }
        else{
            header("Location: examlist.php");
        }
        $total = $exm->getTotalRows();
        $question = $exm->getQuesByNumber($number);
    ?>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $process = $pros->processData($_POST);
        }
    ?>
    <?php
        if($total == $number){
            header("Location:endpage.php");
        }
    ?>
    <aside class="bg-dark">
        <div class="container text-center">
                <div class="container">
                    <div class="row">
                            
                        <div class="col-xs-12">
                			<h1>Question <?php echo $question['quesNo']; ?> of <?php echo $total-1; ?></h1>
                    			<!-- tabs -->
                    		<h2>Bangla Exam is going now</h2>
                    		<form action="" method="post">	
                    			<p>Question <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?>??</p>
                    			
                    			<?php
                    			    $answer = $exm->getAnswer($number);
                    			    if($answer){
                    			        while($result = $answer->fetch_assoc()){
                    			           
                    			?>
                    			<input type="radio" name="ans" value="<?php echo $result['id'];?>" /><?php echo $result['ans'];?><br>
                    			<?php
                    			        }
                    			    }
                    			?>
                                <hr>
                                
                                <input style="color:red" type="submit" name="submit" value="Next Question">
                                <input  type="hidden" name="number" value="<?php echo $number; ?>">
                                </form>
    
    
    
<!-- exampage content end -->  


    
<?php include 'inc/exampage_footer.php';?>    