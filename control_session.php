<?php
session_start();
/*    var_dump($_SESSION);*/
if(!$_SESSION['user'] || $_SESSION['user']['login'] !== 'test' || $_SESSION['user']['password'] !== '123')
    header('Location: index.php');
?>