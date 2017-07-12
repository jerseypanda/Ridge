<?php   
session_start();   
   
if ($_SESSION["login"] != "true"){   
  header("Location:login.php");   
  $_SESSION["error"] = "<font color=red>You don't have privileges to see the admin page.</font>";   
  exit;   
}   
   
?>   
<html>   
<head>   
<title>Create an XML Article</title>   
<script>   
function isReady(form){   
  if(form.id.value == "") {   
    alert("Please enter an ID!");   
    return false;   
  }   
}   
</script>   
</head>   
<body>   
<h1>Create an XML Article</h1>   
   
<a href="adminindex.php">Cancel</a><br><br>   
<form name="createArticle" action="addArticle.php" method="post" onSubmit="return isReady(this)">   
  <table border=1 cellspacing=0 cellpadding=3>   
    <tr valign=top>    
      <td width="135">Article ID</td>   
      <td width="634"> <input name="id" type="text" id="id"> <br> <font size="-1">(no    
        spaces, must be unique)</font></td>   
    </tr>   
    <tr valign=top>   
      <td>Status</td>   
      <td>In Progress <input type="hidden" name="status" value="in progress"></td>   
    </tr>   
    <tr valign=top>    
      <td>Headline</td>   
      <td> <input name="headline" type="text" id="headline" size="60"></td>   
    </tr>   
    <tr valign=top>    
      <td>Author Name</td>   
      <td> <input name="name" type="text" id="name" size="30"></td>   
    </tr>   
    <tr valign=top>    
      <td>Author Email</td>   
      <td> <input name="email" type="text" id="email" size="30"></td>   
    </tr>   
    <tr valign=top>    
      <td>Keywords</td>   
      <td> <p>    
          <input name="keywords" type="text" id="keywords">   
          <font size="-1"><br>   
          </font><font size="-1">(separate keywords with commas)</font> </p></td>   
    </tr>   
    <tr valign=top>    
      <td>Abstract</td>   
      <td><textarea name="abstract" cols="50" rows="5" id="abstract"></textarea></td>   
    </tr>   
    <tr valign=top>    
      <td> <p>Article Body<br>   
        </p></td>   
      <td> <p>Intro paragraph:</p>   
        <p>    
          <textarea name="body[intro]" cols="70" rows="10" wrap="soft" id="body[intro]"></textarea>   
        </p>   
        <p>Main paragraph:</p>   
        <p>    
          <textarea name="body[main]" cols="70" rows="10" wrap="soft" id="body[main]" ></textarea>   
        </p>   
        <p>&nbsp;</p>   
        <p>Conclusion paragraph:</p>   
        <p>    
          <textarea name="body[conclusion]" cols="70" rows="10" wrap="soft"></textarea>   
        </p></td>   
    </tr>   
    <tr valign=top>    
      <td colspan=2> <div align="center">    
          <input type="submit" name="Add Article" value="Add Article">   
          &nbsp;    
          <input name="reset" type="reset" id="reset" value="Reset">   
        </div></td>   
    </tr>   
  </table>   
</form>   
</body></html>
