<?php
class Sess {
    public static function init()
    {
      session_start();
    }
 
    public static function set($key,$val){
       $_SESSION[$key]=$val;
    }
 
    public static function get($key){
       if(isset($_SESSION[$key])){
          return $_SESSION[$key];
       }else{
          return false;
       }
    }
 
    public static function checkss(){
       if(self::get('login')== false){
             self::destroy();
             header("location:/mohinhmvc/quantri/login");
       }else{
 
       }
    }
 
    public static function destroy(){
       session_destroy();
    }
 
    public static function unset($key){
       session_unset($key);
    }
}
?>