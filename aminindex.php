<?php   
session_start();   
if ($_SESSION["login"] != "true"){   
  header("Location:login.php");   
  $_SESSION["error"] = "<font color=red>You don't have privileges to see the admin page.</font>";   
  exit;   
}   
?>   
<h1>Welcome to the Admin Index Page</h1>   
<a href="createArticle.php">Create New XML Article</a><br><br>   
<table border=0 cellspacing=0 cellpadding=3 width="85%">   
<tr valign=top>   
<td width="75%">   
<table border=1 cellspacing=0 cellpadding=2>   
<?php   
$dh = opendir('./xml/');   
   
while ($file = readdir($dh)){   
  if (eregi("^..?$", $file)) {   
    continue;   
  }   
  echo "<tr valign=top><td width="80%">";   
  echo "<a href="editArticle.php?file=".$file . "">".$file . "</a></td>";   
  echo "<td width="20%">";   
  echo "<a href="delArticle.php?file=" .$file . "">delete</a>";   
  echo "&nbsp;</td></tr>";   
}   
?>   
</table>   
</td></tr></table>
