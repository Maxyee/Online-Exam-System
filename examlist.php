<?php include 'inc/examlist_header.php'; ?>
    
<!-- examlist main content start here ---->    
<?php
	Session::checkSession();
	$question = $exm->getQuestion();
	$total = $exm->getTotalRows();
?>
<aside class="bg-dark">
        <div class="container text-center">
            
            
            <div class="container">
    <div class="row">
            
        <div class="col-xs-12">
		  
			<!-- tabs -->
			<div class="tabbable tabs-left">
			    
				<ul class="nav nav-tabs">
				    <h3>Exam List</h3>
					<li class="active"><a href="#math" data-toggle="tab">Math</a></li>
					<li><a href="#english" data-toggle="tab">English</a></li>
					<li><a href="#bangla" data-toggle="tab">Bangla</a></li>
					<li><a href="#contact" data-toggle="tab">Science</a></li>
					<li><a href="#html" data-toggle="tab">HTML</a></li>
					<li><a href="#about" data-toggle="tab">CSS</a></li>
					<li><a href="#services" data-toggle="tab">PHP</a></li>
					<li><a href="#contact" data-toggle="tab">JAVA</a></li>
					<li><a href="#home" data-toggle="tab">Python</a></li>
					<li><a href="#about" data-toggle="tab">JavaScript</a></li>
					<li><a href="#services" data-toggle="tab">Bootstrap</a></li>
					<li><a href="#contact" data-toggle="tab">Ruby</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="math">                
						<div class="subject_header">
							<h1>Math</h1>
							<p>this is muliple choice quiz.</p>
                			
                			    <h3><strong>Number of Question: </strong><?php echo $total-1;?></h3>
                			    <h3><strong>Question Type: </strong>Multiple Choice.</h3>
                			            
                             <a class="btn btn-default btn-xl bstyle" href="exampage.php?q=<?php echo $question['quesNo']; ?>" onclick="myFunction()">Start Test</a>
						</div>
					</div> 
					<div class="tab-pane" id="english"> 
						<div class="subject_header">
							<h1>English</h1>
							<p>because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>
							<a class="btn btn-default btn-xl bstyle" onclick="myFunction()" href="exampage.php">Start Test</a>
						</div>
					</div>
				
					<div class="tab-pane" id="bangla"> 
						<div class="subject_header">
							<h1>Bangla</h1>
							<p>meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
						    <a class="btn btn-default btn-xl bstyle" onclick="myFunction()" href="exampage.php">Start Test</a>
						</div>
					</div>
				
					<div class="tab-pane" id="contact"> 
						 <div class="subject_header">
							<h1>Contact Tab</h1>
							<p>deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
						    <a class="btn btn-default btn-xl bstyle" onclick="myFunction()" href="exampage.php">Start Test</a>
						 </div>
					</div>
					
					<div class="tab-pane" id="html">                
						<div class="subject_header">
							<h1>HTML</h1>
							<p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                             <a class="btn btn-default btn-xl bstyle" href="exampage.php" onclick="myFunction()">Start Test</a>
						</div>
					</div> 
					
					<div class="tab-pane" id="home">                
						<div class="subject_header">
							<h1>Home Tab</h1>
							<p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                             <a class="btn btn-default btn-xl bstyle" href="exampage.php" onclick="myFunction()">Start Test</a>
						</div>
					</div> 
					
					<div class="tab-pane" id="home">                
						<div class="subject_header">
							<h1>Home Tab</h1>
							<p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                             <a class="btn btn-default btn-xl bstyle" href="exampage.php" onclick="myFunction()">Start Test</a>
						</div>
					</div> 
					
					<div class="tab-pane" id="home">                
						<div class="subject_header">
							<h1>Home Tab</h1>
							<p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                             <a class="btn btn-default btn-xl bstyle" href="exampage.php" onclick="myFunction()">Start Test</a>
						</div>
					</div> 
					
					<div class="tab-pane" id="home">                
						<div class="subject_header">
							<h1>Home Tab</h1>
							<p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                             <a class="btn btn-default btn-xl bstyle" href="exampage.php" onclick="myFunction()">Start Test</a>
						</div>
					</div> 
					
					<div class="tab-pane" id="home">                
						<div class="subject_header">
							<h1>Home Tab</h1>
							<p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                             <a class="btn btn-default btn-xl bstyle" href="exampage.php" onclick="myFunction()">Start Test</a>
						</div>
					</div> 
					
					<div class="tab-pane" id="home">                
						<div class="subject_header">
							<h1>Home Tab</h1>
							<p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
                             <a class="btn btn-default btn-xl bstyle" href="exampage.php" onclick="myFunction()">Start Test</a>
						</div>
					</div> 
				</div>
			</div>
			<!-- /tabs -->
		</div>
    	</div>

</div>
            
        </div>
    </aside>
    
    
<!-- examlist main content end here ---->      

   
    
<?php include 'inc/examlist_footer.php'; ?>    
    