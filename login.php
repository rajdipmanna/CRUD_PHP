<?php
session_start(); // Start the session

$_SESSION["username"] = "Rajdip";
$_SESSION["course"] = "PHP";

echo "Session variables are set.";
?>