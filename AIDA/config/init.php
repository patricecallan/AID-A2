<?php 
    session_start(); require_once 'config.php'; 
    require_once "includes/functions/sanitise.php";

    function __autoload($class_name) {
  require_once 'includes/classes/'.$class_name . '.php';
}

?>