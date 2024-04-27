<?php
session_start(); 
if(isset($_SESSION["username_of_fashion_paradise"])) {
    $_SESSION = array();
    session_destroy();

    header("Location: index.php");
    exit();
} else {
    header("Location: index.php");
}
?>
