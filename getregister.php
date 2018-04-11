<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/classes/User.php');
    
    $usr = new User();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    $userregi = $usr->userRegistration($username,$password,$firstname,$lastname,$email);
    
?>