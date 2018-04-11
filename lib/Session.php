<?php
/**
*Session Class
**/
class Session{
     public static function init(){
        session_start();
     }

     public static function set($key, $val){
         $_SESSION[$key] = $val;
     }

     public static function get($key){
          if (isset($_SESSION[$key])) {
           return $_SESSION[$key];
          } else {
           return false;
          }
     }
     
     //copy check session
     public static function checkAdminSession(){
          self::init();
          if (self::get("adminLogin")== false) {
           self::destroy();
           header("Location:login.php");
          }
     }

     public static function checkSession(){
          if (self::get("login")== false) {
           self::destroy();
           header("Location:login.php");
          }
     }
     
     //copy check admin
     public static function checkAdminLogin(){
          self::init();
          if (self::get("adminLogin")== true) {
           header("Location:index.php");
          }
     }

    //check User are login or Not!!
     public static function checkLogin(){
          if (self::get("login")== true) {
           header("Location:examlist.php");
          }
     }

     public static function destroy(){
          self::init();
          session_destroy();
          session_unset();
          
    }
}
?>
