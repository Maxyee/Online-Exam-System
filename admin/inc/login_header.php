<?php
    /*
    include_once ("../lib/Session.php");
    include_once ("../lib/Database.php");
    include_once ("../helpers/Format.php");
    Session::init();
    
    $db = new Database();
    $fm = new Format();
    */
?>
<?php
    include_once ("../lib/Session.php");
    Session::checkAdminLogin();

  header("Cache-Control: no-cache, must-revalidate"); 
  header("Pragma: no-cache");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000"); 
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">     
        
