<?php
session_start();

// $cookie_name = "user";
// #$cookie_value = 0;
// setcookie ($cookie_name,$cookie_value , time()+3600, '/', NULL, 0 );
//echo $_cookie_value;

require_once 'config/DBConfig.php';
require_once 'helper/system_helper.php';


function __autoload($class_name){
        return require_once 'lib/'.$class_name.'.php';
}


?>
