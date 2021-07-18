<?php 
include 'library/auth.php';

invalidate_session($_COOKIE['username'],$_COOKIE['token']);

header("Location: index.php");

?>