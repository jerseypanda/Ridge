<?php  
session_start();  
  
$user = 'tom';  
$passw = 'test';  
  
if (($_POST["username"] == $user) and ($_POST["password"] == $passw)){  
  $_SESSION["login"] = "true";  
  header("Location:adminindex.php");  
  exit;  
} else {  
  $_SESSION["error"] = "<font color=red>Wrong username or password. Try again.</font>";  
  header("Location:login.php");  
}  
  
?>
