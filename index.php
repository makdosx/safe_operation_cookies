<?php


    
     require_once('class_cookies.php');

     $obj_cookie = new SET_COOKIES_OPERATION;

     $name = $obj_cookie -> DEFINITION_COOKIE_NAME();
     $value = $obj_cookie -> DEFINITION_COOKIE_VALUE();
     $time = $obj_cookie -> DEFINITION_COOKIE_TIME();
     $path = $obj_cookie -> DEFINITION_COOKIE_PATH();
 

     setcookie ($name,$value,$time,$path);


?>
