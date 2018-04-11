
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Exam System</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
</head>

<body id="page-top">
    
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Online Exam System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="examlist.php">ExamList</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="signup.php">Signup</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../admin/index.php">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                    <div class="row" id="pwd-container">
                        <div class="col-md-4"></div>
                        
                        <div class="col-md-4">
                              <section class="login-form">
                                    <form method="post" action="">
                                      <input type="email" name="email" placeholder="email" id="email" required class="form-control input-lg" />
                                      
                                      <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
                                      
                                      
                                      <div class="pwstrength_viewport_progress"></div>
                                      
                                      
                                      <button type="submit" name="go" id="loginsubmit" class="btn btn-lg btn-primary btn-block">Log in</button>
                                      <div>
                                        <a href="signup.php">Create account</a>
                                      </div>
                                      <span class="empty" style="display:none">Field Must Not be Empty !</span>
                                      <span class="error" style="display:none">Email or password not matched !</span>
                                      <span class="disable" style="display:none">User ID Disable !</span>
                                    </form>
                              </section>  
                          </div>
                          
                          <div class="col-md-4"></div>
          
    
      </div>
            </div>
        </div>
    </header>