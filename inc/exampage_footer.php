
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>




    <!-- side bar script ---->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    
    <script>
    
    var vis = (function(){
    var stateKey, 
        eventKey, 
        keys = {
                hidden: "visibilitychange",
                webkitHidden: "webkitvisibilitychange",
                mozHidden: "mozvisibilitychange",
                msHidden: "msvisibilitychange"
    };
    for (stateKey in keys) {
        if (stateKey in document) {
            eventKey = keys[stateKey];
            break;
        }
    }
    return function(c) {
        if (c) document.addEventListener(eventKey, c);
        return !document[stateKey];
    }
    })();
    
    
    
    vis(function(){
					
    if(vis()){
	
        // tween resume() code goes here	
	setTimeout(function(){            
            console.log("tab is visible - has focus");
        },300);		
												
    } else {
	
        // tween pause() code goes here
        console.log("tab is invisible - has blur");		 
    }
    });
    
    
    
    var notIE = (document.documentMode === undefined),
    isChromium = window.chrome;
      
if (notIE && !isChromium) {

    // checks for Firefox and other  NON IE Chrome versions
    $(window).on("focusin", function () { 

        // tween resume() code goes here
        setTimeout(function(){            
            console.log("focus");
        },300);

    }).on("focusout", function () {

        // tween pause() code goes here
        console.log("blur");

    });
    
   
    
    } else {
    
    // checks for IE and Chromium versions
    if (window.addEventListener) {

        // bind focus event
        window.addEventListener("focus", function (event) {

            // tween resume() code goes here
            setTimeout(function(){                 
                 console.log("focus");
            },300);

        }, false);

        // bind blur event
        window.addEventListener("blur", function (event) {

            // tween pause() code goes here
             console.log("blur");

        }, false);

        
    } else {

        // bind focus event
        window.attachEvent("focus", function (event) {

            // tween resume() code goes here
            setTimeout(function(){                 
                 console.log("focus");
            },300);

        });

        // bind focus event
        window.attachEvent("blur", function (event) {

            // tween pause() code goes here
            console.log("blur");

        });
    }
}
        
    
    </script>
    
    <script>
        $('.sync-pagination').twbsPagination({
        totalPages: 20,
        onPageClick: function (evt, page) {
            $('#content').text('Page ' + page);
        }
    });
    </script>
    
    
    
    
                		</div>
                		
                	    
                    </div>
                </div>
        </div>
    </aside>
    
   


</body>

</html>