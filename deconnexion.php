<?php 
require_once("parts/nav.style.php");
session_unset();
session_destroy();
header("Location: index.php");

?>