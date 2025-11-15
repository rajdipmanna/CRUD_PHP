<?php
session_start(); // Must be called again to access session data

echo "Welcome " . $_SESSION["username"] . "<br>";
echo "You are learning " . $_SESSION["course"];
?>