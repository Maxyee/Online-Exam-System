<?php
  include_once ("../lib/Session.php");
  Session::checkAdminSession();
  include_once ("../lib/Database.php");
  include_once ("../helpers/Format.php");
 
  $db = new Database();
  $fm = new Format();


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Exam Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Exam Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <?php
    if(isset($_GET['action']) && $_GET['action'] == 'logout'){
      Session::destroy();
      header("Location:login.php");
      exit();
    }
  
  ?>
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Admin</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <!--<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>-->
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="?action=logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="manage.php"><i class="icon icon-signal"></i> <span>Manage Users</span></a> </li>
    <li> <a href="add_ques.php"><i class="icon icon-inbox"></i> <span>Add Question</span></a> </li>
    <li><a href="ques_list.php"><i class="icon icon-th"></i> <span>Question List</span></a></li>
    
    
    
    
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span></a>
      <ul>
        <li><a href="error403.php">Error 403</a></li>
        <li><a href="error404.php">Error 404</a></li>
        <li><a href="error405.php">Error 405</a></li>
        <li><a href="error500.php">Error 500</a></li>
      </ul>
    </li>
 
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->

  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="index.php"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="manage.php"> <i class="icon-signal"></i> Manage Users</a> </li>
        <li class="bg_ly"> <a href="add_ques.php"> <i class="icon-inbox"></i>Add Question</a> </li>
        <li class="bg_lo"> <a href="ques_list.php"> <i class="icon-th"></i> Question List</a> </li>
        <li class="bg_lr"> <a href="error404.php"> <i class="icon-info-sign"></i> Error</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">

    </div>
<!--End-Chart-box--> 
    <hr/>